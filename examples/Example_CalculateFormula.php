<?php
/*
 * <copyright company="Aspose" file="Example_CalculateFormula.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\Request\PostWorkbookCalculateFormulaRequest;
use Aspose\Cells\Cloud\Request\UploadFileRequest;

const FOLDER = 'PHPSDKExamples';
const NAME = 'Book1.xlsx';

run_example(function () {
    $client = client_from_env();
    ensure_folder($client, FOLDER);
    $client->call(new UploadFileRequest(data_path(NAME), FOLDER . '/' . NAME));

    $response = $client->call(
        new PostWorkbookCalculateFormulaRequest(NAME, null, null, FOLDER)
    );
    echo 'Calculate formula: '
        . json_encode($response->getJson(), JSON_PRETTY_PRINT) . "\n";
});
