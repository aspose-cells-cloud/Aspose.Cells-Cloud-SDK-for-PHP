<?php
/*
 * <copyright company="Aspose" file="Example_WorksheetManagement.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\DataSource\FilePathSink;
use Aspose\Cells\Cloud\DataSource\FilePathSource;
use Aspose\Cells\Cloud\Editor\Editor;

run_example(function () {
    $client = client_from_env();
    $created = output_path('created.xlsx');
    $added = output_path('created-with-summary.xlsx');
    $renamed = output_path('created-renamed.xlsx');

    Editor::create_spreadsheet($client, new FilePathSink($created));
    Editor::add_worksheet(
        $client,
        new FilePathSource($created),
        new FilePathSink($added),
        'Summary'
    );
    Editor::rename_worksheet(
        $client,
        new FilePathSource($added),
        new FilePathSink($renamed),
        'Summary',
        'Overview'
    );

    $sheets = Editor::list_worksheets($client, new FilePathSource($renamed));
    $labels = array_map(function ($sheet) {
        return $sheet->getName() . ' (' . $sheet->getType() . ')';
    }, $sheets);
    echo 'Worksheets: ' . implode(', ', $labels) . "\n";
});
