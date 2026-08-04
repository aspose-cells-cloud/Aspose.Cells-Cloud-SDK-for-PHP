<?php
/**
 * ConvertChart — Chart Conversion
 *
 * Demonstrates chart-related operations:
 * - Get chart image from a cloud-stored worksheet
 * - Convert chart to image (PNG) from local file
 * - Convert chart to PDF from local file
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\ConvertChartToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertChartToPdfRequest;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\GetWorksheetChartRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$instance = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// ---- Cloud Storage: Get Chart Image ----

$request = new UploadFileRequest();
$request->setUploadFiles($EmployeeSalesSummaryXlsx);
$request->setPath($EmployeeSalesSummaryXlsx);
$instance->uploadFile($request);

// Get chart image from a cloud-stored Excel worksheet.
$getWorksheetChartRequest = new GetWorksheetChartRequest();
$getWorksheetChartRequest->setName($EmployeeSalesSummaryXlsx);
$getWorksheetChartRequest->setSheetName("Sales");
$getWorksheetChartRequest->setChartNumber(0);
$getWorksheetChartRequest->setFormat("png");
$response = $instance->GetWorksheetChart($getWorksheetChartRequest, "out1.png");

// ---- Local File Processing ----

// Convert chart to image (PNG)
$convertChartToImageRequest = new ConvertChartToImageRequest();
$convertChartToImageRequest->setSpreadsheet($EmployeeSalesSummaryXlsx);
$convertChartToImageRequest->setWorksheet("Sales");
$convertChartToImageRequest->setChartIndex(0);
$convertChartToImageRequest->setFormat("png");
$instance->convertChartToImage($convertChartToImageRequest, "out2.png");

$convertChartToImageRequest = new ConvertChartToImageRequest();
$convertChartToImageRequest->setSpreadsheet($EmployeeSalesSummaryXlsx);
$convertChartToImageRequest->setWorksheet("Sales");
$convertChartToImageRequest->setChartIndex(0);
$convertChartToImageRequest->setFormat("png");
$instance->convertChartToImage($convertChartToImageRequest, "convert-chart-out.png");

// Convert chart to PDF
$convertChartToPdfRequest = new ConvertChartToPdfRequest();
$convertChartToPdfRequest->setSpreadsheet($EmployeeSalesSummaryXlsx);
$convertChartToPdfRequest->setWorksheet("Sales");
$convertChartToPdfRequest->setChartIndex(0);
$instance->convertChartToPdf($convertChartToPdfRequest, "convert-chart-out.pdf");
