<?php
/**
 * SplitWorkbook — Split Spreadsheet into Separate Files
 *
 * Demonstrates splitting a workbook into individual worksheet files.
 * The result is returned as a ZIP archive containing one file per sheet.
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\SplitSpreadsheetRequest;

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$instance = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// Split a local spreadsheet into individual worksheet files
$request = new SplitSpreadsheetRequest();
$request->setSpreadsheet("EmployeeSalesSummary.xlsx");
$response = $instance->splitSpreadsheet($request, "split-out.zip");

// Extract the resulting ZIP archive
$zip = new ZipArchive();
if ($zip->open("split-out.zip") !== true) {
    echo "Error: Unable to open ZIP file";
} else {
    $result = $zip->extractTo(".");
}
$zip->close();
