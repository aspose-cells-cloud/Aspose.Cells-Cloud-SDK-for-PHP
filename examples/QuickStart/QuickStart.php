<?php
/**
 * QuickStart — Basic Usage
 *
 * Demonstrates the simplest way to get started with Aspose.Cells Cloud SDK:
 * 1. Convert a spreadsheet to PDF
 * 2. Check the Cloud API service status
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\GetAsposeCellsCloudStatusRequest;
use \Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$cellsApi = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// Convert a local spreadsheet to PDF
$response = $cellsApi->convertSpreadsheet(
    new ConvertSpreadsheetRequest('EmployeeSalesSummary.xlsx', 'pdf'),
    "EmployeeSalesSummary.pdf"
);

// Check the Aspose.Cells Cloud service status
$response = $cellsApi->getAsposeCellsCloudStatus(new GetAsposeCellsCloudStatusRequest());
print($response);
