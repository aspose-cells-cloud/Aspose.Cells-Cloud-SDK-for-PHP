# Aspose.Cells Cloud SDK for PHP — Examples

This directory contains runnable sample code for the Aspose.Cells Cloud SDK for PHP, organized by functional area. All examples are tested and ready to use.

## Prerequisites

```bash
composer install
```

Set your credentials as environment variables:

```bash
export CellsCloudClientId="your-client-id"
export CellsCloudClientSecret="your-client-secret"
```

Get your credentials at [Aspose Cloud Dashboard](https://dashboard.aspose.cloud/#/applications).

## Directory Structure

```
examples/
├── README.md
├── QuickStart/
│   └── QuickStart.php              ← Start here: basic convert + health check
├── Conversion/
│   ├── ConvertWorkbook.php         ← Workbook to PDF, save-as, download
│   ├── ConvertWorksheet.php        ← Worksheet to SVG, MD, PDF, HTML
│   ├── ConvertChart.php            ← Chart to PNG, PDF
│   ├── ConvertTable.php            ← Table to MD, SVG, HTML, PDF, JSON
│   └── ConvertRange.php            ← Cell range to SVG, HTML, PDF, JSON
├── DataProcessing/
│   ├── SplitWorkbook.php           ← Split workbook into separate sheet files
│   ├── CleanData.php               ← Remove blanks & duplicates
│   ├── TrimCharacters.php          ← Trim whitespace in cells
│   └── TrimContent.php             ← Advanced trim with full options
├── CloudStorage/
│   └── FileManagement.php          ← Upload, copy, move, folders, list files
└── AI/
    ├── TranslateSpreadsheet.php    ← AI translation (EN → ZH, etc.)
    └── DecomposeTask.php           ← AI task decomposition → spreadsheet
```

## Quick Navigation

### 🚀 Getting Started
| File | Description |
|------|-------------|
| [QuickStart.php](QuickStart/QuickStart.php) | Minimal example: convert Excel → PDF + health check |

### 🔄 Conversion
| File | Description | Key APIs |
|------|-------------|----------|
| [ConvertWorkbook.php](Conversion/ConvertWorkbook.php) | Full workbook conversion workflow | `convertSpreadsheet`, `exportSpreadsheetAsFormat`, `saveSpreadsheetAs` |
| [ConvertWorksheet.php](Conversion/ConvertWorksheet.php) | Convert individual worksheets | `exportWorksheetAsFormat`, `convertWorksheetToImage`, `convertWorksheetToPdf` |
| [ConvertChart.php](Conversion/ConvertChart.php) | Export charts as images | `getWorksheetChart`, `convertChartToImage`, `convertChartToPdf` |
| [ConvertTable.php](Conversion/ConvertTable.php) | Convert table/list objects | `exportTableAsFormat`, `convertTableToImage`, `convertTableToJson` |
| [ConvertRange.php](Conversion/ConvertRange.php) | Convert cell ranges | `exportRangeAsFormat`, `convertRangeToImage`, `convertRangeToPdf` |

### 🧹 Data Processing
| File | Description | Key APIs |
|------|-------------|----------|
| [SplitWorkbook.php](DataProcessing/SplitWorkbook.php) | Split workbook into sheets | `splitSpreadsheet` |
| [CleanData.php](DataProcessing/CleanData.php) | Remove blanks & dupes | `removeSpreadsheetBlankColumns`, `removeSpreadsheetBlankRows`, `removeDuplicates` |
| [TrimCharacters.php](DataProcessing/TrimCharacters.php) | Trim cell whitespace | `trimCharacter` |
| [TrimContent.php](DataProcessing/TrimContent.php) | Advanced content trimming | `postTrimContent` |

### ☁️ Cloud Storage
| File | Description | Key APIs |
|------|-------------|----------|
| [FileManagement.php](CloudStorage/FileManagement.php) | Full storage management | `uploadFile`, `copyFile`, `moveFolder`, `getFilesList` |

### 🤖 AI Features
| File | Description | Key APIs |
|------|-------------|----------|
| [TranslateSpreadsheet.php](AI/TranslateSpreadsheet.php) | AI translation | `TranslationSpreadsheetRequest` |
| [DecomposeTask.php](AI/DecomposeTask.php) | AI task decomposition | `DecomposeUserTaskRequest` |

## Test Data Files

The following sample files are used across the examples:

| File | Used In |
|------|---------|
| `EmployeeSalesSummary.xlsx` | QuickStart, Conversion, AI, SplitWorkbook, TrimContent |
| `BookText.xlsx` | CleanData, TrimCharacters |
| `CompanySales.xlsx` | CloudStorage |
| `BookFormula.xlsx` | (formula examples) |

## Running Examples

All examples are run from the `examples/` directory:

```bash
cd examples
php QuickStart/QuickStart.php
php Conversion/ConvertWorkbook.php
php DataProcessing/CleanData.php
```

Each script outputs converted files in the current working directory.
