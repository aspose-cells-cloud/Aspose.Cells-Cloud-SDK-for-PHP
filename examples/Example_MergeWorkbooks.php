<?php
/*
 * <copyright company="Aspose" file="Example_MergeWorkbooks.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\DataProcessing\DataProcessing;
use Aspose\Cells\Cloud\DataSource\FilePathSink;
use Aspose\Cells\Cloud\DataSource\FilePathSource;
use Aspose\Cells\Cloud\Request\DownloadFileRequest;
use Aspose\Cells\Cloud\Request\PostWorkbooksMergeRequest;
use Aspose\Cells\Cloud\Request\UploadFileRequest;

const FOLDER = 'PHPSDKExamples';

run_example(function () {
    $client = client_from_env();

    DataProcessing::merge_spreadsheet(
        $client,
        new FilePathSource(data_path('EmployeeSalesSummary.xlsx')),
        new FilePathSink(output_path('EmployeeSalesSummary-merged.xlsx'))
    );
    echo "Local merge written to examples/output/\n";

    ensure_folder($client, FOLDER);
    foreach (['Book1.xlsx', 'BookText.xlsx'] as $name) {
        $client->call(new UploadFileRequest(data_path($name), FOLDER . '/' . $name));
    }

    $client->call(new PostWorkbooksMergeRequest(
        'Book1.xlsx',
        FOLDER . '/BookText.xlsx',
        FOLDER
    ));
    $output = output_path('Book1-merged.xlsx');
    $client->downloadFile(
        new DownloadFileRequest(FOLDER . '/Book1.xlsx'),
        $output
    );
    echo "Cloud merge written to {$output}\n";
});
