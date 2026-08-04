<?php
/**
 * ConvertWorksheet — Worksheet-Level Conversion
 *
 * Demonstrates converting individual worksheets to various formats:
 * - SVG, Markdown, PDF, HTML
 * - Both cloud-stored and local file approaches
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\ExportWorksheetAsFormatRequest;
use \Aspose\Cells\Cloud\Request\ConvertWorksheetToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertWorksheetToPdfRequest;
use \Aspose\Cells\Cloud\Request\ConvertWorksheetToHtmlRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$instance = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// ---- Cloud Storage: Upload and Export ----

$request = new UploadFileRequest();
$request->setUploadFiles($EmployeeSalesSummaryXlsx);
$request->setPath($EmployeeSalesSummaryXlsx);
$instance->uploadFile($request);

// Export a cloud worksheet to SVG
$request = new ExportWorksheetAsFormatRequest();
$request->setName($EmployeeSalesSummaryXlsx);
$request->setWorksheet("Sales");
$request->setFormat("svg");
$instance->exportWorksheetAsFormat($request, "export-out3.svg");

// Export a cloud worksheet to Markdown
$request = new ExportWorksheetAsFormatRequest();
$request->setName($EmployeeSalesSummaryXlsx);
$request->setWorksheet("Sales");
$request->setFormat("md");
$instance->exportWorksheetAsFormat($request, "export-worksheet-out.md");

// ---- Local File Processing ----

// Convert a local worksheet to SVG image
$request = new ConvertWorksheetToImageRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("Sales");
$request->setFormat("svg");
$instance->convertWorksheetToImage($request, "convert-worksheet-out.svg");

// Convert a local worksheet to PDF
$request = new ConvertWorksheetToPdfRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$instance->convertWorksheetToPdf($request, "convert-worksheet-out.pdf");

// Convert a local worksheet to HTML
$request = new ConvertWorksheetToHtmlRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("Sales");
$instance->convertWorksheetToHtml($request, "convert-worksheet-out.html");
