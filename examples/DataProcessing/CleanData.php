<?php
/**
 * CleanData — Remove Blank Rows, Columns, Worksheets & Duplicates
 *
 * Demonstrates data cleaning operations on a spreadsheet:
 * - Remove blank columns
 * - Remove blank rows
 * - Remove blank worksheets
 * - Remove duplicate rows
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankColumnsRequest;
use \Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankRowsRequest;
use \Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankWorksheetsRequest;
use \Aspose\Cells\Cloud\Request\RemoveDuplicatesRequest;

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$instance = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// Remove blank columns
$request = new RemoveSpreadsheetBlankColumnsRequest();
$request->setSpreadsheet("BookText.xlsx");
$response = $instance->removeSpreadsheetBlankColumns($request, "out1.xlsx");

// Remove blank rows
$request = new RemoveSpreadsheetBlankRowsRequest();
$request->setSpreadsheet("BookText.xlsx");
$response = $instance->removeSpreadsheetBlankRows($request, "out2.xlsx");

// Remove blank worksheets
$request = new RemoveSpreadsheetBlankWorksheetsRequest();
$request->setSpreadsheet("BookText.xlsx");
$response = $instance->removeSpreadsheetBlankWorksheets($request, "out3.xlsx");

// Remove duplicate rows
$request = new RemoveDuplicatesRequest();
$request->setSpreadsheet("BookText.xlsx");
$response = $instance->removeDuplicates($request, "out4.xlsx");
