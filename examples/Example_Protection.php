<?php
/*
 * <copyright company="Aspose" file="Example_Protection.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

require __DIR__ . '/common.php';

use Aspose\Cells\Cloud\Model\ProtectWorkbookRequest;
use Aspose\Cells\Cloud\Model\Protection;
use Aspose\Cells\Cloud\Request\DeleteUnProtectWorkbookRequest;
use Aspose\Cells\Cloud\Request\PostProtectWorkbookRequest;
use Aspose\Cells\Cloud\Request\UploadFileRequest;

const FOLDER = 'PHPSDKExamples';
const NAME = 'Book1.xlsx';
const PASSWORD = 'ExampleSecret123!';

run_example(function () {
    $client = client_from_env();
    ensure_folder($client, FOLDER);
    $client->call(new UploadFileRequest(data_path(NAME), FOLDER . '/' . NAME));

    $client->call(new PostProtectWorkbookRequest(
        NAME,
        new ProtectWorkbookRequest([
            'protect_all_sheets' => new Protection(['password' => PASSWORD]),
            'protect_workbook_structure' => 'All',
            'encrypt_with_password' => PASSWORD,
        ]),
        FOLDER
    ));
    echo "Protected all sheets and the workbook structure.\n";

    $client->call(new DeleteUnProtectWorkbookRequest(NAME, PASSWORD, FOLDER));
    echo "Removed the workbook protection.\n";
});
