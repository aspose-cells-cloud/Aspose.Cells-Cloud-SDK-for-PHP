<?php
/**
 * ConvertTable — Table / List Object Conversion
 *
 * Demonstrates converting worksheet tables (list objects) to various formats:
 * - Markdown, SVG, HTML, PDF, JSON
 * - Both cloud-stored and local file approaches
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\ExportTableAsFormatRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToPdfRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToJsonRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToHtmlRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$instance = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// ---- Cloud Storage: Upload and Export ----

$request = new UploadFileRequest();
$request->setUploadFiles($EmployeeSalesSummaryXlsx);
$request->setPath($EmployeeSalesSummaryXlsx);
$instance->uploadFile($request);

// Export a cloud-stored table to Markdown
$request = new ExportTableAsFormatRequest();
$request->setName($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$request->setTableName("Table1");
$request->setFormat("md");
$instance->exportTableAsFormat($request, "export-table-out.md");

// ---- Local File Processing ----

// Convert a local table to SVG image
$request = new ConvertTableToImageRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$request->setTableName("Table1");
$request->setFormat("svg");
$instance->convertTableToImage($request, "convert-table-out.svg");

// Convert a local table to HTML
$request = new ConvertTableToHtmlRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$request->setTableName("Table1");
$instance->convertTableToHtml($request, "convert-table-out.html");

// Convert a local table to PDF
$request = new ConvertTableToPdfRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$request->setTableName("Table1");
$instance->convertTableToPdf($request, "convert-table-out.pdf");

// Convert a local table to JSON
$request = new ConvertTableToJsonRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$request->setTableName("Table1");
$instance->convertTableToJson($request, "convert-table-out.json");
