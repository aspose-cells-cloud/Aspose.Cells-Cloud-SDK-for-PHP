<?php
/*
 * <copyright company="Aspose" file="Example_QuickStart.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\Converter\Converter;
use Aspose\Cells\Cloud\Converter\Formats;
use Aspose\Cells\Cloud\DataSource\FilePathSink;
use Aspose\Cells\Cloud\DataSource\FilePathSource;

run_example(function () {
    $client = client_from_env();
    $output = output_path('EmployeeSalesSummary.pdf');
    Converter::convert(
        $client,
        new FilePathSource(data_path('EmployeeSalesSummary.xlsx')),
        new FilePathSink($output),
        Formats::PDF
    );
    echo "Converted EmployeeSalesSummary.xlsx to {$output}\n";
});
