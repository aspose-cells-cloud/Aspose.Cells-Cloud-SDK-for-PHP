<?php
/**
 * TrimContent — Advanced Content Trimming with Options
 *
 * Demonstrates advanced content trimming using the PostTrimContent API:
 * - Trim leading/trailing whitespace across entire workbook
 * - Remove all line breaks
 * - Remove non-breaking spaces
 * - Process file content in-memory via base64 encoding
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\PostTrimContentRequest;
use \Aspose\Cells\Cloud\Model\FileInfo;
use \Aspose\Cells\Cloud\Model\ScopeOptions;
use \Aspose\Cells\Cloud\Model\DataSource;
use \Aspose\Cells\Cloud\Model\TrimContentOptions;

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$cellsApi = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// Prepare file data (in-memory, via base64)
$dataSource = new DataSource();
$dataSource->setDataSourceType("RequestFiles");

$fileInfo = new FileInfo();
$fileInfo->setFilename("EmployeeSalesSummary.xlsx");
$fileInfo->setFileContent(base64_encode(file_get_contents("EmployeeSalesSummary.xlsx")));

$scopeOptions = new ScopeOptions();
$scopeOptions->setScope("Workbook");

// Configure trim options
$trimContentOptions = new TrimContentOptions();
$trimContentOptions->setDataSource($dataSource);
$trimContentOptions->setFileInfo($fileInfo);
$trimContentOptions->setScopeOptions($scopeOptions);
$trimContentOptions->setTrimLeading(true);
$trimContentOptions->setRemoveAllLineBreaks(true);
$trimContentOptions->setTrimNonBreakingSpaces(true);

// Execute trim and save the result
$response = $cellsApi->PostTrimContent(new PostTrimContentRequest($trimContentOptions));
print($response->getFilename());

$decodedData = base64_decode($response->getFileContent());
file_put_contents("EmployeeSalesSummary-Trim.xlsx", $decodedData);
