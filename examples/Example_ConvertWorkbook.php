<?php
/*
 * <copyright company="Aspose" file="Example_ConvertWorkbook.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\Converter\Converter;
use Aspose\Cells\Cloud\Converter\Formats;
use Aspose\Cells\Cloud\DataSource\FilePathSink;
use Aspose\Cells\Cloud\DataSource\FilePathSource;
use Aspose\Cells\Cloud\Request\UploadFileRequest;
use Aspose\Cells\Cloud\WorkbookRef;

const FOLDER = 'PHPSDKExamples';
const NAME = 'EmployeeSalesSummary.xlsx';

run_example(function () {
    $client = client_from_env();

    Converter::convert(
        $client,
        new FilePathSource(data_path(NAME)),
        new FilePathSink(output_path('EmployeeSalesSummary.pdf')),
        Formats::PDF
    );
    Converter::convert(
        $client,
        new FilePathSource(data_path(NAME)),
        new FilePathSink(output_path('EmployeeSalesSummary.csv')),
        Formats::CSV
    );

    ensure_folder($client, FOLDER);
    $client->call(new UploadFileRequest(data_path(NAME), FOLDER . '/' . NAME));
    $ref = new WorkbookRef(NAME, FOLDER);
    Converter::workbook(
        $client,
        $ref,
        new FilePathSink(output_path('EmployeeSalesSummary-cloud.pdf')),
        Formats::PDF
    );
    Converter::worksheet(
        $client,
        $ref,
        'Sales',
        new FilePathSink(output_path('EmployeeSalesSummary-Sales.pdf')),
        Formats::PDF
    );
    echo "Local and cloud conversions written to examples/output/\n";
});
