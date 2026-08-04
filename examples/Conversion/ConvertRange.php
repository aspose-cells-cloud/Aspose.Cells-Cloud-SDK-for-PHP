<?php
/**
 * ConvertRange — Cell Range Conversion
 *
 * Demonstrates converting specific cell ranges to various formats:
 * - Image (SVG), HTML, PDF, JSON
 * - Both cloud-stored and local file approaches
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\ConvertRangeToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertRangeToPdfRequest;
use \Aspose\Cells\Cloud\Request\ConvertRangeToJsonRequest;
use \Aspose\Cells\Cloud\Request\ConvertRangeToHtmlRequest;
use \Aspose\Cells\Cloud\Request\ExportRangeAsFormatRequest;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$instance = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// ---- Cloud Storage: Upload and Export ----

$request = new UploadFileRequest();
$request->setUploadFiles($EmployeeSalesSummaryXlsx);
$request->setPath($EmployeeSalesSummaryXlsx);
$instance->uploadFile($request);

// Export a cloud-stored cell range to PDF
$request = new ExportRangeAsFormatRequest();
$request->setName($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$request->setRange("B28:L36");
$request->setFormat("pdf");
$instance->exportRangeAsFormat($request, "export-range-out.pdf");

// ---- Local File Processing ----

// Convert a local range to SVG image
$request = new ConvertRangeToImageRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("Sales");
$request->setRange("B28:L36");
$request->setFormat("svg");
$instance->convertRangeToImage($request, "convert-range-out.svg");

// Convert a local range to HTML
$request = new ConvertRangeToHtmlRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("Sales");
$request->setRange("B28:L36");
$instance->convertRangeToHtml($request, "convert-range-out.html");

// Convert a local range to PDF
$request = new ConvertRangeToPdfRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$request->setRange("B28:L36");
$instance->convertRangeToPdf($request, "convert-range-out.pdf");

// Convert a local range to JSON
$request = new ConvertRangeToJsonRequest();
$request->setSpreadsheet($EmployeeSalesSummaryXlsx);
$request->setWorksheet("SalesChartData");
$request->setRange("B28:L36");
$instance->convertRangeToJson($request, "convert-range-out.json");
