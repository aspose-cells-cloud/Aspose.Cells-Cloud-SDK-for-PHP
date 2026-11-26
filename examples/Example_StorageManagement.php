<?php
/*
 * <copyright company="Aspose" file="Example_StorageManagement.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\Request\DeleteFileRequest;
use Aspose\Cells\Cloud\Request\DownloadFileRequest;
use Aspose\Cells\Cloud\Request\GetFilesListRequest;
use Aspose\Cells\Cloud\Request\UploadFileRequest;

const FOLDER = 'PHPSDKExamples';
const REMOTE = FOLDER . '/Book1.xlsx';

run_example(function () {
    $client = client_from_env();
    ensure_folder($client, FOLDER);

    $client->uploadFile(new UploadFileRequest(data_path('Book1.xlsx'), REMOTE));
    echo "Uploaded Book1.xlsx to " . REMOTE . "\n";

    $listing = $client->call(new GetFilesListRequest(FOLDER));
    echo 'Files in the folder: '
        . json_encode($listing->getJson(), JSON_PRETTY_PRINT) . "\n";

    $output = output_path('Book1-downloaded.xlsx');
    $client->downloadFile(new DownloadFileRequest(REMOTE), $output);
    echo "Downloaded to {$output}\n";

    $client->call(new DeleteFileRequest(REMOTE));
    echo "Deleted " . REMOTE . "\n";
});
