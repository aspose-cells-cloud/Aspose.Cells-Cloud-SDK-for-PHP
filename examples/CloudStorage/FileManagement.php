<?php
/**
 * FileManagement — Cloud Storage Operations
 *
 * Demonstrates cloud storage management:
 * - Check if a file or folder exists
 * - Create folders and upload files
 * - Move and copy files and folders
 * - List files in a folder
 */

require_once('vendor/autoload.php');

use \Aspose\Cells\Cloud\Api\CellsApi;
use \Aspose\Cells\Cloud\Request\ObjectExistsRequest;
use \Aspose\Cells\Cloud\Request\CreateFolderRequest;
use \Aspose\Cells\Cloud\Request\UploadFileRequest;
use \Aspose\Cells\Cloud\Request\MoveFolderRequest;
use \Aspose\Cells\Cloud\Request\CopyFileRequest;
use \Aspose\Cells\Cloud\Request\CopyFolderRequest;
use \Aspose\Cells\Cloud\Request\GetFilesListRequest;

$RemoteFolder = "SDKPHP";
$CompanySalesXlsx = "CompanySales.xlsx";
$EmployeeSalesSummaryXlsx = "EmployeeSalesSummary.xlsx";

// Get your ClientId and ClientSecret from:
// https://dashboard.aspose.cloud/#/applications
$instance = new CellsApi(getenv("CellsCloudClientId"), getenv("CellsCloudClientSecret"));

// Ensure the remote folder exists; create if missing
$response = $instance->objectExists(new ObjectExistsRequest($RemoteFolder));
if (!$response->getExists()) {
    $instance->createFolder(new CreateFolderRequest($RemoteFolder));
    print("Created Folder.\n");
}

// Upload files if they don't already exist in cloud storage
$response = $instance->objectExists(new ObjectExistsRequest($RemoteFolder . "/" . $CompanySalesXlsx));
if (!$response->getExists()) {
    $instance->uploadFile(new UploadFileRequest($CompanySalesXlsx, $RemoteFolder . "/" . $CompanySalesXlsx));
    print("Upload file $CompanySalesXlsx.\n");
}

$response = $instance->objectExists(new ObjectExistsRequest($RemoteFolder . "/" . $EmployeeSalesSummaryXlsx));
if (!$response->getExists()) {
    $instance->uploadFile(new UploadFileRequest($EmployeeSalesSummaryXlsx, $RemoteFolder . "/" . $EmployeeSalesSummaryXlsx));
    print("Upload file $EmployeeSalesSummaryXlsx.\n");
}

// Folder operations: create, move, copy
$instance->createFolder(new CreateFolderRequest($RemoteFolder . "/CellsCloud"));
$instance->moveFolder(new MoveFolderRequest($RemoteFolder . "/CellsCloud", $RemoteFolder . "/CellsCloud2"));
$instance->copyFile(new CopyFileRequest($RemoteFolder . "/CompanySales.xlsx", $RemoteFolder . "/CellsCloud2/" . $CompanySalesXlsx));
$instance->copyFolder(new CopyFolderRequest($RemoteFolder . "/CellsCloud2", $RemoteFolder . "/CellsCloud"));

// List files in a folder
$filesList = $instance->getFilesList(new GetFilesListRequest($RemoteFolder . "/CellsCloud"));
print($filesList->getValue());
