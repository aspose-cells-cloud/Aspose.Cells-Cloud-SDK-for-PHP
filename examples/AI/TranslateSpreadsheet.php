<?php
/**
 * TranslateSpreadsheet — AI-Powered Spreadsheet Translation
 *
 * Demonstrates translating spreadsheet content using Aspose.Cells Cloud AI:
 * - Translate an Excel file from English to Chinese (zh)
 * - Translate an ODS file from English to Chinese (zh)
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\TranslationSpreadsheetRequest;
use \Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$cellsApi = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// Translate an Excel file to Chinese
$response = $cellsApi->convertSpreadsheet(
    new TranslationSpreadsheetRequest('EmployeeSalesSummary.xlsx', 'zh'),
    "EmployeeSalesSummary-zh.xlsx"
);

// Convert to ODS first, then translate the ODS file
$convertSpreadsheetRequest = new ConvertSpreadsheetRequest();
$convertSpreadsheetRequest->setSpreadsheet($EmployeeSalesSummaryXlsx);
$convertSpreadsheetRequest->setFormat("ods");
$cellsApi->convertSpreadsheet($convertSpreadsheetRequest, "EmployeeSalesSummaryXlsx.ods");

$response = $cellsApi->convertSpreadsheet(
    new TranslationSpreadsheetRequest('EmployeeSalesSummaryXlsx.ods', 'zh'),
    "EmployeeSalesSummaryOds-zh.xlsx"
);
