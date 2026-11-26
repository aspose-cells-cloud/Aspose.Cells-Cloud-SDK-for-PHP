# Aspose.Cells Cloud PHP SDK examples

These examples mirror the Java SDK examples and target the new-model v4.0
API. Each script creates an `AsposeCellsCloudApi` client and calls the
generated request classes or the convenience facades.

The examples live in the repository, not in the published PHP package.

## Prerequisites

- PHP 8.0+ with ext-json, ext-curl and ext-mbstring
- Aspose.Cells Cloud credentials

```bash
export CellsCloudClientId=your-client-id
export CellsCloudClientSecret=your-client-secret
# Optional; defaults to https://api.aspose.cloud
export CellsCloudApiBaseUrl=https://api.aspose.cloud
```

PowerShell:

```powershell
$env:CellsCloudClientId = "your-client-id"
$env:CellsCloudClientSecret = "your-client-secret"
```

`ProductClientId` / `ProductClientSecret` are accepted as aliases.

## Running

From this directory:

```bash
cd examples
php Example_QuickStart.php
php Example_ConvertWorkbook.php
php Example_StorageManagement.php
php Example_WorksheetManagement.php
php Example_MergeWorkbooks.php
php Example_SplitWorkbook.php
php Example_TextProcessing.php
php Example_Protection.php
php Example_GetWorksheetCell.php
php Example_CalculateFormula.php
```

`common.php` registers a PSR-4 autoloader for the SDK's `lib/` tree, so no
Composer install is required. Outputs are written to `examples/output/`
(git-ignored); cloud examples use the `PHPSDKExamples` folder.

## Sample map

| Example | What it shows |
| --- | --- |
| `Example_QuickStart.php` | `Converter::convert` local xlsx -> PDF |
| `Example_ConvertWorkbook.php` | Local PDF/CSV, cloud workbook and worksheet export |
| `Example_StorageManagement.php` | Upload, list, download, delete files |
| `Example_WorksheetManagement.php` | Create/add/rename/list worksheets |
| `Example_MergeWorkbooks.php` | Local merge; `PostWorkbooksMergeRequest` |
| `Example_SplitWorkbook.php` | Local split zip; remote split |
| `Example_TextProcessing.php` | Local and cloud text replacement |
| `Example_Protection.php` | `PostProtectWorkbookRequest` / `DeleteUnProtectWorkbookRequest` |
| `Example_GetWorksheetCell.php` | `GetWorksheetCellRequest` |
| `Example_CalculateFormula.php` | `PostWorkbookCalculateFormulaRequest` |

## Notes

- Facades: `Aspose\Cells\Cloud\Converter\Converter`,
  `DataProcessing\DataProcessing`, `Editor\Editor`, `Searcher\Searcher`.
- Inputs/outputs use `Aspose\Cells\Cloud\DataSource\FilePathSource` /
  `FilePathSink` (or `BytesSource` / `BytesSink`).
- Generated requests live in `Aspose\Cells\Cloud\Request`; models in
  `Aspose\Cells\Cloud\Model`.
- In the v4.0 API a local split returns a zip archive; a local merge merges
  the worksheets of one workbook. Use the remote variants to merge separate
  cloud files or split into a cloud folder.
