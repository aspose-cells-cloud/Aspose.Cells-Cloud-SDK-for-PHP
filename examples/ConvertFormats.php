<?php
/*--------------------------------------------------------------------------------------------------------------------
 * ConvertFormats.php
 *
 * Format-conversion example for the Aspose.Cells Cloud PHP SDK.
 *
 * Converts the local workbook examples/Book1.xlsx into several output
 * formats (pdf / xlsx / csv / png / json) and saves each result under
 * examples/output/. The file is sent to the API in two ways to show the
 * FormData input options:
 *     - as a local file path string
 *     - as a byte array (the extended FormData form)
 *
 * Run from the repository root:
 *     php examples/ConvertFormats.php
 *
 * Credentials are read from the environment (CellsCloudClientId,
 * CellsCloudClientSecret, CellsCloudApiBaseUrl) or from a .env file
 * placed next to this script.
 *------------------------------------------------------------------------------------------------------------------*/

require_once(__DIR__ . '/../vendor/autoload.php');

use Aspose\Cells\Cloud\Api\AsposeCellsCloudApi;
use Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;

// ---------------------------------------------------------------------------
// Credentials: environment variables first, optional .env file as a fallback.
// ---------------------------------------------------------------------------
function resolveCredential($name)
{
    $value = getenv($name);
    if ($value !== false && $value !== '') {
        return $value;
    }
    $envFile = __DIR__ . '/.env';
    if (is_file($envFile)) {
        foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
            if (strpos($line, '=') !== false && strpos(ltrim($line), '#') !== 0) {
                list($key, $val) = explode('=', $line, 2);
                if (trim($key) === $name) {
                    return trim($val);
                }
            }
        }
    }
    return '';
}

$clientId     = resolveCredential('CellsCloudClientId');
$clientSecret = resolveCredential('CellsCloudClientSecret');
$baseUrl      = resolveCredential('CellsCloudApiBaseUrl');
if ($clientId === '' || $clientSecret === '') {
    fwrite(STDERR, "Missing credentials. Set CellsCloudClientId and CellsCloudClientSecret\n");
    fwrite(STDERR, "in the environment or in a .env file next to this script.\n");
    exit(1);
}
if ($baseUrl === '') {
    $baseUrl = 'https://api.aspose.cloud';
}

// ---------------------------------------------------------------------------
// SDK entry point.
// ---------------------------------------------------------------------------
$api = new AsposeCellsCloudApi($clientId, $clientSecret, 'v3.0', $baseUrl);

$sourceFile = __DIR__ . '/Book1.xlsx';
$outDir     = __DIR__ . '/output';
if (!is_dir($outDir)) {
    mkdir($outDir, 0777, true);
}

// Formats to produce, with the output file extension for each.
$formats = [
    'pdf'  => 'pdf',
    'xlsx' => 'xlsx',
    'csv'  => 'csv',
    'png'  => 'png',
    'json' => 'json',
];

// ---------------------------------------------------------------------------
// Case 1: send the workbook as a local file path string.
// ---------------------------------------------------------------------------
echo "== 1) Convert via local file path ====================================\n";
foreach ($formats as $format => $ext) {
    $outPath = "$outDir/Book1.$ext";
    try {
        $request = new ConvertSpreadsheetRequest();
        $request->setSpreadsheet($sourceFile);   // local path string
        $request->setFormat($format);
        $api->convertSpreadsheet($request, $outPath);
        printf("  %-4s -> %s (%d bytes)\n", $format, $outPath, filesize($outPath));
    } catch (\Throwable $e) {
        printf("  %-4s -> FAILED: %s\n", $format, $e->getMessage());
    }
}

// ---------------------------------------------------------------------------
// Case 2: send the same workbook as a byte array (FormData auto-detection).
// ---------------------------------------------------------------------------
echo "\n== 2) Convert via byte array (FormData extension) =====================\n";
$bytes = array_values(unpack('C*', file_get_contents($sourceFile)));
try {
    $request = new ConvertSpreadsheetRequest();
    $request->setSpreadsheet($bytes);           // int[] 0-255, packed into a binary stream
    $request->setFormat('pdf');
    $outPath = "$outDir/Book1_byte_array.pdf";
    $api->convertSpreadsheet($request, $outPath);
    printf("  pdf  -> %s (%d bytes)\n", $outPath, filesize($outPath));
} catch (\Throwable $e) {
    printf("  pdf  -> FAILED: %s\n", $e->getMessage());
}

echo "\nDone. Converted files are in $outDir\n";
