<#
.SYNOPSIS
    Runs the Aspose.Cells Cloud SDK for PHP integration tests, checks the
    results, and generates a self-contained HTML test report.

.DESCRIPTION
    This script:
      1. Installs Composer dependencies if vendor/ is missing (unless -SkipInstall).
      2. Resolves API credentials from the environment (CellsCloudClientId,
         CellsCloudClientSecret, CellsCloudApiBaseUrl) or an optional .env file.
      3. Runs PHPUnit (vendor/bin/phpunit) writing JUnit XML + a console log.
      4. Parses the JUnit result and checks pass/fail.
      5. Writes an HTML report and prints a console summary.

.PARAMETER TestPath
    Optional path to a test file or directory. When omitted, the PHPUnit
    configuration's test suite is used.

.PARAMETER Filter
    Optional PHPUnit --filter expression to run a subset of tests.

.PARAMETER OutputDir
    Directory where the report files are written. Default: "test-reports".

.PARAMETER SkipInstall
    Skip the Composer install step.

.PARAMETER Configuration
    PHPUnit XML configuration file. Default: "phpunit.xml.dist".

.EXAMPLE
    .\run-integration-tests.ps1

.EXAMPLE
    .\run-integration-tests.ps1 -TestPath integrationtests\CellsCloud30 -Filter "Cell"

.EXAMPLE
    .\run-integration-tests.ps1 -TestPath integrationtests\Calculate -OutputDir reports
#>

[CmdletBinding()]
param(
    [string]$TestPath = "",
    [string]$Filter = "",
    [string]$OutputDir = "test-reports",
    [switch]$SkipInstall,
    [string]$Configuration = "phpunit.xml.dist"
)

$ErrorActionPreference = "Stop"

# ---------------------------------------------------------------------------
# Helpers
# ---------------------------------------------------------------------------

function Write-Step([string]$Message) {
    Write-Host ""
    Write-Host ("==> " + $Message) -ForegroundColor Cyan
}

function Write-ErrorLine([string]$Message) {
    Write-Host ("ERROR: " + $Message) -ForegroundColor Red
}

function ConvertTo-HtmlEscaped([string]$Value) {
    if ([string]::IsNullOrEmpty($Value)) { return "" }
    return [System.Security.SecurityElement]::Escape($Value)
}

function To-Int([string]$Value) {
    if ([string]::IsNullOrEmpty($Value)) { return 0 }
    return [int]$Value
}

function To-Double([string]$Value) {
    if ([string]::IsNullOrEmpty($Value)) { return 0.0 }
    return [double]$Value
}

# ---------------------------------------------------------------------------
# Setup
# ---------------------------------------------------------------------------

$ScriptRoot = Split-Path -Parent $MyInvocation.MyCommand.Path
Set-Location $ScriptRoot

$RunTimestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss"
$OutputDirAbs  = Join-Path $ScriptRoot $OutputDir
if (-not (Test-Path $OutputDirAbs)) { New-Item -ItemType Directory -Path $OutputDirAbs | Out-Null }

$JunitFile    = Join-Path $OutputDirAbs "junit.xml"
$ConsoleLog   = Join-Path $OutputDirAbs "console.log"
$ReportFile   = Join-Path $OutputDirAbs "report.html"

# ---------------------------------------------------------------------------
# 1. Pre-flight checks
# ---------------------------------------------------------------------------

Write-Step "Pre-flight checks"

if (-not (Get-Command php -ErrorAction SilentlyContinue)) {
    Write-ErrorLine "PHP was not found on PATH. Install PHP 7.4+ and retry."
    exit 2
}
$PhpVersion = (& php -v | Select-Object -First 1)
Write-Host "PHP:        $PhpVersion"

$PhpUnit = Join-Path $ScriptRoot "vendor\bin\phpunit"

# ---------------------------------------------------------------------------
# 2. Dependencies
# ---------------------------------------------------------------------------

if (-not $SkipInstall) {
    if (-not (Test-Path (Join-Path $ScriptRoot "vendor\autoload.php"))) {
        Write-Step "Installing Composer dependencies"
        & composer install --no-interaction
        if ($LASTEXITCODE -ne 0) {
            Write-ErrorLine "Composer install failed (exit $LASTEXITCODE)."
            exit 2
        }
    } else {
        Write-Host "vendor/ already present; skipping composer install."
    }
} else {
    Write-Host "-SkipInstall specified; skipping dependency check."
}

if (-not (Test-Path $PhpUnit)) {
    Write-ErrorLine "phpunit not found at $PhpUnit. Run without -SkipInstall to install it."
    exit 2
}

# ---------------------------------------------------------------------------
# 3. Credentials
# ---------------------------------------------------------------------------

Write-Step "Resolving API credentials"

# Optional .env (KEY=VALUE) support, checked before falling back to env.
$EnvFile = Join-Path $ScriptRoot ".env"
if (Test-Path $EnvFile) {
    Get-Content $EnvFile | ForEach-Object {
        $line = $_.Trim()
        if ($line -and -not $line.StartsWith("#") -and $line.Contains("=")) {
            $idx = $line.IndexOf("=")
            $key = $line.Substring(0, $idx).Trim()
            $val = $line.Substring($idx + 1).Trim()
            if ($key) { [Environment]::SetEnvironmentVariable($key, $val, "Process") }
        }
    }
    Write-Host "Loaded credentials from .env"
}

$ClientId     = [Environment]::GetEnvironmentVariable("CellsCloudClientId")
$ClientSecret = [Environment]::GetEnvironmentVariable("CellsCloudClientSecret")
$BaseUrl      = [Environment]::GetEnvironmentVariable("CellsCloudApiBaseUrl")

$missing = @()
if ([string]::IsNullOrEmpty($ClientId))     { $missing += "CellsCloudClientId" }
if ([string]::IsNullOrEmpty($ClientSecret)) { $missing += "CellsCloudClientSecret" }
if ([string]::IsNullOrEmpty($BaseUrl))      { $missing += "CellsCloudApiBaseUrl" }

if ($missing.Count -gt 0) {
    Write-ErrorLine ("Missing environment variable(s): " + ($missing -join ", "))
    Write-Host "Set them in the environment or create a .env file with lines like:"
    Write-Host "  CellsCloudClientId=..."
    Write-Host "  CellsCloudClientSecret=..."
    Write-Host "  CellsCloudApiBaseUrl=https://api.aspose.cloud"
    exit 2
}

Write-Host ("ClientId : " + $ClientId.Substring(0, 8) + "***")
Write-Host ("BaseUrl  : " + $BaseUrl)

# ---------------------------------------------------------------------------
# 4. Run PHPUnit
# ---------------------------------------------------------------------------

Write-Step "Running PHPUnit integration tests"

$PhpUnitArgs = @(
    $PhpUnit,
    "--configuration", $Configuration,
    "--colors=never",
    "--log-junit", $JunitFile
)
if ($Filter) {
    $PhpUnitArgs += @("--filter", $Filter)
}
if ($TestPath) {
    $PhpUnitArgs += $TestPath
}

$cmdline = ("php " + ($PhpUnitArgs -join " "))
Write-Host "Command: $cmdline"
Write-Host ""

# Run PHPUnit, capturing output for the log and echoing it to the console.
$output = & php @PhpUnitArgs 2>&1
$exitCode = $LASTEXITCODE
foreach ($line in $output) { Write-Host $line }
if ($output) { $output | Out-File -FilePath $ConsoleLog -Encoding utf8 }

Write-Host ""
Write-Host ("PHPUnit exit code: " + $exitCode) -ForegroundColor $(if ($exitCode -eq 0) { "Green" } else { "Red" })

# ---------------------------------------------------------------------------
# 5. Parse results
# ---------------------------------------------------------------------------

Write-Step "Checking test results"

$junitAvailable = Test-Path $JunitFile
$suites = @()
$totalTests = 0
$totalFailures = 0
$totalErrors = 0
$totalSkipped = 0
$totalTime = 0.0
$failures = @()

if ($junitAvailable) {
    try {
        [xml]$junit = Get-Content -Raw $JunitFile

        # PHPUnit nests an outer <testsuite> (per directory) above the per-class
        # suites, so only count the leaf suites that directly contain <testcase>.
        $suites = @($junit.SelectNodes("//testsuite[testcase]"))
        $totalTests    = 0
        $totalFailures = 0
        $totalErrors   = 0
        $totalSkipped  = 0
        $totalTime     = 0.0
        foreach ($suite in $suites) {
            $totalTests    += (To-Int ($suite.GetAttribute("tests")))
            $totalFailures += (To-Int ($suite.GetAttribute("failures")))
            $totalErrors   += (To-Int ($suite.GetAttribute("errors")))
            $totalSkipped  += (To-Int ($suite.GetAttribute("skipped")))
            $totalTime     += (To-Double ($suite.GetAttribute("time")))
        }

        $failures = @()
        foreach ($tc in @($junit.SelectNodes("//testcase[failure or error]"))) {
            $kind = "Failure"
            $msg  = ""
            $fEl  = $tc.SelectSingleNode("failure")
            $eEl  = $tc.SelectSingleNode("error")
            if ($null -ne $eEl) {
                $kind = "Error"
                if ($eEl.InnerText) { $msg = $eEl.InnerText }
            } elseif ($null -ne $fEl) {
                $kind = "Failure"
                if ($fEl.InnerText) { $msg = $fEl.InnerText }
            }
            $suiteName = ""
            if ($null -ne $tc.ParentNode) { $suiteName = [string]$tc.ParentNode.GetAttribute("name") }
            $failures += [pscustomobject]@{
                Suite   = $suiteName
                Test    = [string]$tc.GetAttribute("name")
                Kind    = $kind
                Message = $msg
            }
        }
    } catch {
        Write-ErrorLine ("Failed to parse JUnit XML: " + $_.Exception.Message)
    }
} else {
    Write-ErrorLine "No JUnit XML was produced. PHPUnit likely failed before running any tests."
}

$totalPassed = $totalTests - $totalFailures - $totalErrors - $totalSkipped
$passRate = 0.0
if ($totalTests -gt 0) { $passRate = [math]::Round(($totalPassed / $totalTests) * 100, 1) }

$allGreen = ($junitAvailable) -and ($totalFailures -eq 0) -and ($totalErrors -eq 0) -and ($exitCode -eq 0)

# ---------------------------------------------------------------------------
# 6. Console summary
# ---------------------------------------------------------------------------

Write-Host ""
Write-Host "================ Test Summary ================"
Write-Host ("Tests     : " + $totalTests)
Write-Host ("Passed    : " + $totalPassed)
Write-Host ("Failures  : " + $totalFailures)
Write-Host ("Errors    : " + $totalErrors)
Write-Host ("Skipped   : " + $totalSkipped)
Write-Host ("Duration  : " + [math]::Round($totalTime, 2) + "s")
Write-Host ("Pass rate : " + $passRate + "%")
Write-Host "=============================================="

if ($allGreen) {
    Write-Host "RESULT: PASS" -ForegroundColor Green
} else {
    Write-Host "RESULT: FAIL" -ForegroundColor Red
}

# ---------------------------------------------------------------------------
# 7. Generate HTML report
# ---------------------------------------------------------------------------

Write-Step "Generating HTML report"

$statusLabel = "FAIL"
$statusColor = "#c62828"
if ($allGreen) { $statusLabel = "PASS"; $statusColor = "#2e7d32" }

$h = @()
$h += "<!DOCTYPE html>"
$h += "<html lang='en'><head><meta charset='utf-8'>"
$h += "<meta name='viewport' content='width=device-width, initial-scale=1'>"
$h += "<title>Cells Cloud PHP SDK - Test Report</title>"
$h += "<style>"
$h += "body{font-family:'Segoe UI',Arial,sans-serif;margin:0;background:#f5f6f8;color:#222;}"
$h += ".wrap{max-width:1000px;margin:24px auto;padding:0 16px;}"
$h += "h1{font-size:22px;margin:0 0 4px;}"
$h += ".muted{color:#666;font-size:13px;}"
$h += ".banner{margin:16px 0;padding:14px 18px;border-radius:8px;color:#fff;font-size:18px;font-weight:600;}"
$h += ".cards{display:flex;flex-wrap:wrap;gap:12px;margin:16px 0;}"
$h += ".card{background:#fff;border:1px solid #e3e6ea;border-radius:8px;padding:14px 20px;min-width:130px;flex:1;}"
$h += ".card .num{font-size:28px;font-weight:700;}"
$h += ".card .lbl{font-size:12px;color:#777;text-transform:uppercase;letter-spacing:.5px;}"
$h += "table{border-collapse:collapse;width:100%;background:#fff;border:1px solid #e3e6ea;border-radius:8px;overflow:hidden;}"
$h += "th,td{padding:9px 12px;text-align:left;font-size:13px;border-bottom:1px solid #eef0f3;}"
$h += "th{background:#f0f2f5;font-weight:600;}"
$h += ".pass{color:#2e7d32;font-weight:600;}"
$h += ".fail{color:#c62828;font-weight:600;}"
$h += ".badge{display:inline-block;padding:2px 8px;border-radius:10px;font-size:11px;color:#fff;}"
$h += ".badge.p{background:#2e7d32;}.badge.f{background:#c62828;}.badge.e{background:#ef6c00;}"
$h += "pre{background:#1e1e1e;color:#d4d4d4;padding:12px;border-radius:8px;overflow:auto;font-size:12px;}"
$h += "h2{font-size:16px;margin:24px 0 8px;}"
$h += "</style></head><body><div class='wrap'>"
$h += "<h1>Aspose.Cells Cloud PHP SDK &mdash; Integration Test Report</h1>"
$h += ("<div class='muted'>Generated: " + (ConvertTo-HtmlEscaped $RunTimestamp) + " &nbsp;|&nbsp; PHPUnit config: " + (ConvertTo-HtmlEscaped $Configuration) + "</div>")
$h += ("<div class='banner' style='background:" + $statusColor + ";'>Result: " + $statusLabel + "</div>")

$h += "<div class='cards'>"
$h += ("<div class='card'><div class='num'>" + $totalTests + "</div><div class='lbl'>Tests</div></div>")
$h += ("<div class='card'><div class='num pass'>" + $totalPassed + "</div><div class='lbl'>Passed</div></div>")
$h += ("<div class='card'><div class='num fail'>" + $totalFailures + "</div><div class='lbl'>Failures</div></div>")
$h += ("<div class='card'><div class='num fail'>" + $totalErrors + "</div><div class='lbl'>Errors</div></div>")
$h += ("<div class='card'><div class='num'>" + $totalSkipped + "</div><div class='lbl'>Skipped</div></div>")
$h += ("<div class='card'><div class='num'>" + $passRate + "%</div><div class='lbl'>Pass rate</div></div>")
$h += ("<div class='card'><div class='num'>" + [math]::Round($totalTime, 1) + "s</div><div class='lbl'>Duration</div></div>")
$h += "</div>"

$h += "<h2>Test Suites</h2>"
$h += "<table><thead><tr><th>Suite</th><th>Tests</th><th>Failures</th><th>Errors</th><th>Skipped</th><th>Time (s)</th><th>Status</th></tr></thead><tbody>"
foreach ($suite in $suites) {
    $sFails = [int]$suite.failures
    $sErrs  = [int]$suite.errors
    $suiteOk = ($sFails -eq 0) -and ($sErrs -eq 0)
    $badge = "p"; $badgeTxt = "PASS"
    if (-not $suiteOk) { $badge = "f"; $badgeTxt = "FAIL" }
    $h += ("<tr><td>" + (ConvertTo-HtmlEscaped ([string]$suite.name)) + "</td><td>" + $suite.tests + "</td><td>" + $sFails + "</td><td>" + $sErrs + "</td><td>" + $suite.skipped + "</td><td>" + [math]::Round([double]$suite.time, 2) + "</td><td><span class='badge " + $badge + "'>" + $badgeTxt + "</span></td></tr>")
}
if ($suites.Count -eq 0) {
    $h += "<tr><td colspan='7' class='muted'>No test suites were parsed from the JUnit output.</td></tr>"
}
$h += "</tbody></table>"

if ($failures.Count -gt 0) {
    $h += "<h2>Failures &amp; Errors</h2>"
    $h += "<table><thead><tr><th>Suite</th><th>Test</th><th>Type</th><th>Message</th></tr></thead><tbody>"
    foreach ($f in $failures) {
        $h += ("<tr><td>" + (ConvertTo-HtmlEscaped $f.Suite) + "</td><td><code>" + (ConvertTo-HtmlEscaped $f.Test) + "</code></td><td>" + (ConvertTo-HtmlEscaped $f.Kind) + "</td><td class='muted'>" + (ConvertTo-HtmlEscaped $f.Message) + "</td></tr>")
    }
    $h += "</tbody></table>"
}

$h += "<h2>Artifacts</h2>"
$h += "<ul>"
$h += "<li><a href='junit.xml'>junit.xml</a> &mdash; machine-readable JUnit results</li>"
$h += "<li><a href='console.log'>console.log</a> &mdash; full PHPUnit console output</li>"
$h += "</ul>"

$h += "<h2>Console output (tail)</h2>"
$h += "<pre>"
if (Test-Path $ConsoleLog) {
    $tail = Get-Content $ConsoleLog -Tail 60
    $h += ($tail | ForEach-Object { ConvertTo-HtmlEscaped $_ })
}
$h += "</pre>"
$h += "</div></body></html>"

$html = $h -join "`r`n"
Set-Content -Path $ReportFile -Value $html -Encoding UTF8

Write-Host ("Report written to: " + $ReportFile) -ForegroundColor Green
Write-Host ("JUnit XML:         " + $JunitFile)
Write-Host ("Console log:       " + $ConsoleLog)

# ---------------------------------------------------------------------------
# 8. Exit code
# ---------------------------------------------------------------------------

if ($allGreen) { exit 0 }
elseif ($junitAvailable) { exit 1 }
else { exit 2 }
