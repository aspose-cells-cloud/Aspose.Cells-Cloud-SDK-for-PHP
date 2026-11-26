<?php
/*
 * <copyright company="Aspose" file="Example_SplitWorkbook.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\DataProcessing\DataProcessing;
use Aspose\Cells\Cloud\DataProcessing\Options;
use Aspose\Cells\Cloud\DataSource\FilePathSink;
use Aspose\Cells\Cloud\DataSource\FilePathSource;
use Aspose\Cells\Cloud\Request\UploadFileRequest;
use Aspose\Cells\Cloud\WorkbookRef;

const FOLDER = 'PHPSDKExamples';
const NAME = 'EmployeeSalesSummary.xlsx';
const OUT_FOLDER = FOLDER . '/Split';

run_example(function () {
    $client = client_from_env();

    DataProcessing::split_spreadsheet(
        $client,
        new FilePathSource(data_path(NAME)),
        new FilePathSink(output_path('EmployeeSalesSummary-split.zip')),
        [Options::out_format('pdf'), Options::to(3)]
    );
    echo "Local split zip written to examples/output/\n";

    ensure_folder($client, FOLDER);
    ensure_folder($client, OUT_FOLDER);
    $client->call(new UploadFileRequest(data_path(NAME), FOLDER . '/' . NAME));

    $response = DataProcessing::split_remote_spreadsheet(
        $client,
        new WorkbookRef(NAME, FOLDER),
        OUT_FOLDER,
        [Options::out_format('pdf'), Options::to(3)]
    );
    echo 'Cloud split result: ' . json_encode($response->getJson()) . "\n";
});
