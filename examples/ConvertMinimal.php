<?php
/*
 * Minimal "how to use" example — convert a local workbook to another format
 * with the fewest possible lines.
 *
 * Run from the repository root:
 *     php examples/ConvertMinimal.php
 *
 * Requires the credentials in the environment:
 *     CellsCloudClientId / CellsCloudClientSecret / CellsCloudApiBaseUrl (optional)
 */

require __DIR__ . '/../vendor/autoload.php';

use Aspose\Cells\Cloud\Api\AsposeCellsCloudApi;
use Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;

// 1. API 实例（凭据来自环境变量；version 和 baseUrl 使用构造函数默认值）
$api = new AsposeCellsCloudApi(
    getenv('CellsCloudClientId'),
    getenv('CellsCloudClientSecret')
);

// 2. 构造转换请求：本地文件 + 目标格式
$request = new ConvertSpreadsheetRequest();
$request->setSpreadsheet(__DIR__ . '/Book1.xlsx');  // 文件路径
$request->setFormat('pdf');                          // pdf / xlsx / csv / png / json ...

// 3. 执行转换并保存到本地
$api->convertSpreadsheet($request, __DIR__ . '/output/minimal.pdf');

echo "OK: examples/output/minimal.pdf\n";
