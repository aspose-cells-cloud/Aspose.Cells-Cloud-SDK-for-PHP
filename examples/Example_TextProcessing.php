<?php
/*
 * <copyright company="Aspose" file="Example_TextProcessing.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\DataSource\FilePathSink;
use Aspose\Cells\Cloud\DataSource\FilePathSource;
use Aspose\Cells\Cloud\Request\DownloadFileRequest;
use Aspose\Cells\Cloud\Request\UploadFileRequest;
use Aspose\Cells\Cloud\Searcher\Searcher;
use Aspose\Cells\Cloud\WorkbookRef;

const FOLDER = 'PHPSDKExamples';
const NAME = 'BookText.xlsx';

run_example(function () {
    $client = client_from_env();

    Searcher::replace(
        $client,
        new FilePathSource(data_path(NAME)),
        new FilePathSink(output_path('BookText-replaced.xlsx')),
        'Bike',
        'Cycling'
    );
    echo "Local replacement written to examples/output/\n";

    ensure_folder($client, FOLDER);
    $client->call(new UploadFileRequest(data_path(NAME), FOLDER . '/' . NAME));
    Searcher::replace_workbook($client, new WorkbookRef(NAME, FOLDER), 'Bike', 'Cycling');

    $output = output_path('BookText-cloud-replaced.xlsx');
    $client->downloadFile(new DownloadFileRequest(FOLDER . '/' . NAME), $output);
    echo "Cloud replacement downloaded to {$output}\n";
});
