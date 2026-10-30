<?php
require_once('vendor\autoload.php');
use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\GetWorkbookRequest;
use \Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;
use \Aspose\Cells\Cloud\Request\ExportSpreadsheetAsFormatRequest;
use \Aspose\Cells\Cloud\Request\ExportWorksheetAsFormatRequest;
use \Aspose\Cells\Cloud\Request\ExportTableAsFormatRequest;
use \Aspose\Cells\Cloud\Request\SaveSpreadsheetAsRequest;
use \Aspose\Cells\Cloud\Request\DownloadFileRequest;
use \Aspose\Cells\Cloud\Request\ConvertChartToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertRangeToImageRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToPdfRequest;
use \Aspose\Cells\Cloud\Request\ConvertTableToJsonRequest;
use \Aspose\Cells\Cloud\Request\ConvertRangeToHtmlRequest;

$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

//  get CellsCloudClientId from https://dashboard.aspose.cloud/#/applications
//  get CellsCloudClientSecret from https://dashboard.aspose.cloud/#/applications
//  $instance = new CellsApi($CellsCloudClientId,$CellsCloudClientSecret));
$instance = new CellsApi(getenv("CellsCloudClientId"),getenv("CellsCloudClientSecret"));
// Convert a local Excel file to another format file directly.
$convertSpreadsheetRequest = new ConvertSpreadsheetRequest();
$convertSpreadsheetRequest->setSpreadsheet($EmployeeSalesSummaryXlsx);
$convertSpreadsheetRequest->setFormat("pdf");
$instance->convertSpreadsheet($convertSpreadsheetRequest ,"export-out1.pdf" );
// Upload a local Excel file to Cells Cloud Storage.
$request = new  UploadFileRequest( );
$request->setUploadFiles($EmployeeSalesSummaryXlsx);
$request->setPath($EmployeeSalesSummaryXlsx);
$instance->uploadFile($request);
// Now, Export a cloud Excel file to another format file directly, and directly save to local file.
$exportSpreadsheetAsFormatRequest = new  ExportSpreadsheetAsFormatRequest ();
$exportSpreadsheetAsFormatRequest->setName($EmployeeSalesSummaryXlsx);
$exportSpreadsheetAsFormatRequest->setFormat("pdf");
$instance->exportSpreadsheetAsFormat($exportSpreadsheetAsFormatRequest, "export-out2.pdf" );
// Now, Export a worksheet of cloud Excel file to another format file directly, and directly save to local file.
$request = new ExportWorksheetAsFormatRequest();
$request->setName( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$request->setFormat( "svg");
$instance->exportWorksheetAsFormat($request, "export-out3.svg");
// Now, Export a list object of cloud Excel file to another format file directly, and directly save to local file.
$request = new ExportTableAsFormatRequest();
$request->setName( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setTableName( "Table1");
$request->setFormat( "pdf");
$instance->exportTableAsFormat($request, "export-out4.pdf");
//
$request = new SaveSpreadsheetAsRequest();
$request->setName( $EmployeeSalesSummaryXlsx);
$request->setFormat( "pdf");
$instance->SaveSpreadsheetAs($request);

$request = new DownloadFileRequest();
$request->setPath( "EmployeeSalesSummary.pdf");
$instance->downloadFile($request, "save-as-out.pdf");

//  Local file processing

$convertChartToImageRequest =new ConvertChartToImageRequest();
$convertChartToImageRequest->setSpreadsheet($EmployeeSalesSummaryXlsx);
$convertChartToImageRequest->setWorksheet("Sales");
$convertChartToImageRequest->setChartIndex(0);
$convertChartToImageRequest->setFormat("png");
$instance->convertChartToImage($convertChartToImageRequest ,"convert-chart-out2.png" );

$request = new ConvertRangeToImageRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$request->setRange( "B28:L36");
$request->setFormat( "svg");
$instance->convertRangeToImage($request, "convert-range-out.svg");

$request = new ConvertRangeToHtmlRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "Sales");
$request->setRange( "B28:L36");
$instance->convertRangeToImage($request, "convert-range-out.html");


$request = new ConvertTableToPdfRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setTableName( "Table1");
$instance->convertTableToPdf($request, "convert-table-out.pdf");

$request = new ConvertTableToJsonRequest();
$request->setSpreadsheet( $EmployeeSalesSummaryXlsx);
$request->setWorksheet( "SalesChartData");
$request->setTableName( "Table1");
$instance->convertTableToJson($request, "convert-table-out.json");