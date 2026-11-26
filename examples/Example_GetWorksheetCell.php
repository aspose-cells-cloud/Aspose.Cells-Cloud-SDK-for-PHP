<?php
/*
 * <copyright company="Aspose" file="Example_GetWorksheetCell.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\Request\GetWorksheetCellRequest;
use Aspose\Cells\Cloud\Request\UploadFileRequest;

const FOLDER = 'PHPSDKExamples';
const NAME = 'Book1.xlsx';

run_example(function () {
    $client = client_from_env();
    ensure_folder($client, FOLDER);
    $client->call(new UploadFileRequest(data_path(NAME), FOLDER . '/' . NAME));

    $response = $client->call(new GetWorksheetCellRequest(NAME, 'Sheet1', 'A1', FOLDER));
    echo 'Cell A1: ' . json_encode($response->getJson(), JSON_PRETTY_PRINT) . "\n";
});
