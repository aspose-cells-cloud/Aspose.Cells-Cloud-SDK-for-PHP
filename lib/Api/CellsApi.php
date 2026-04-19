<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellsApi.cs">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 *--------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Cells\Cloud\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Cells\Cloud\ApiException;
use Aspose\Cells\Cloud\Configuration;
use Aspose\Cells\Cloud\HeaderSelector;
use Aspose\Cells\Cloud\ObjectSerializer;
use Aspose\Cells\Cloud\Request\DecomposeUserTaskRequest;
use Aspose\Cells\Cloud\Request\TranslateSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\TranslateTextFileRequest;
use Aspose\Cells\Cloud\Request\AggregateCellsByColorRequest;
use Aspose\Cells\Cloud\Request\MathCalculateRequest;
use Aspose\Cells\Cloud\Request\PostAccessTokenRequest;
use Aspose\Cells\Cloud\Request\GetAsposeCellsCloudStatusRequest;
use Aspose\Cells\Cloud\Request\CheckCloudServiceHealthRequest;
use Aspose\Cells\Cloud\Request\ExportSpreadsheetAsFormatRequest;
use Aspose\Cells\Cloud\Request\ExportWorksheetAsFormatRequest;
use Aspose\Cells\Cloud\Request\ExportChartAsFormatRequest;
use Aspose\Cells\Cloud\Request\ExportTableAsFormatRequest;
use Aspose\Cells\Cloud\Request\ExportRangeAsFormatRequest;
use Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ConvertSpreadsheetToPdfRequest;
use Aspose\Cells\Cloud\Request\ConvertSpreadsheetToJsonRequest;
use Aspose\Cells\Cloud\Request\ConvertSpreadsheetToCsvRequest;
use Aspose\Cells\Cloud\Request\ConvertWorksheetToImageRequest;
use Aspose\Cells\Cloud\Request\ConvertWorksheetToPdfRequest;
use Aspose\Cells\Cloud\Request\ConvertWorksheetToJsonRequest;
use Aspose\Cells\Cloud\Request\ConvertWorksheetToCsvRequest;
use Aspose\Cells\Cloud\Request\ConvertWorksheetToHtmlRequest;
use Aspose\Cells\Cloud\Request\ConvertWorksheetToHtmlTableRequest;
use Aspose\Cells\Cloud\Request\ConvertTableToImageRequest;
use Aspose\Cells\Cloud\Request\ConvertTableToPdfRequest;
use Aspose\Cells\Cloud\Request\ConvertTableToCsvRequest;
use Aspose\Cells\Cloud\Request\ConvertTableToHtmlRequest;
use Aspose\Cells\Cloud\Request\ConvertTableToJsonRequest;
use Aspose\Cells\Cloud\Request\ConvertRangeToImageRequest;
use Aspose\Cells\Cloud\Request\ConvertRangeToPdfRequest;
use Aspose\Cells\Cloud\Request\ConvertRangeToCsvRequest;
use Aspose\Cells\Cloud\Request\ConvertRangeToHtmlRequest;
use Aspose\Cells\Cloud\Request\ConvertRangeToJsonRequest;
use Aspose\Cells\Cloud\Request\ConvertChartToImageRequest;
use Aspose\Cells\Cloud\Request\ConvertChartToPdfRequest;
use Aspose\Cells\Cloud\Request\SaveSpreadsheetAsRequest;
use Aspose\Cells\Cloud\Request\MergeSpreadsheetsRequest;
use Aspose\Cells\Cloud\Request\MergeSpreadsheetsInRemoteFolderRequest;
use Aspose\Cells\Cloud\Request\MergeRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\SplitSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\SplitTableRequest;
use Aspose\Cells\Cloud\Request\SplitRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ImportDataIntoSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ImportJSONDataIntoSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ImportXMLDataIntoSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ImportCSVDataIntoSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\GetPublicKeyRequest;
use Aspose\Cells\Cloud\Request\CreateSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetsWithLocalSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\AddWorksheetToSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetFromSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\RenameWorksheetInSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\MoveWorksheetInSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\CompressSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\RepairSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\GetMergedCellsInRemotedWorksheetRequest;
use Aspose\Cells\Cloud\Request\GetMergedCellsInWorksheetRequest;
use Aspose\Cells\Cloud\Request\AcceptAllRevisionsRequest;
use Aspose\Cells\Cloud\Request\AcceptAllRevisionsInRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ProtectSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\UnprotectSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\SpreadsheetDigitalsignatureRequest;
use Aspose\Cells\Cloud\Request\SearchAllTextItemsInRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\SearchSpreadsheetAllTextItemsRequest;
use Aspose\Cells\Cloud\Request\SearchSpreadsheetContentRequest;
use Aspose\Cells\Cloud\Request\SearchContentInRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\SearchContentInRemoteWorksheetRequest;
use Aspose\Cells\Cloud\Request\SearchContentInRemoteRangeRequest;
use Aspose\Cells\Cloud\Request\ReplaceSpreadsheetContentRequest;
use Aspose\Cells\Cloud\Request\ReplaceContentInRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ReplaceContentInRemoteWorksheetRequest;
use Aspose\Cells\Cloud\Request\ReplaceContentInRemoteRangeRequest;
use Aspose\Cells\Cloud\Request\SearchSpreadsheetBrokenLinksRequest;
use Aspose\Cells\Cloud\Request\SearchBrokenLinksInRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\SearchBrokenLinksInRemoteWorksheetRequest;
use Aspose\Cells\Cloud\Request\SearchBrokenLinksInRemoteRangeRequest;
use Aspose\Cells\Cloud\Request\SpecRequest;
use Aspose\Cells\Cloud\Request\CodegenSpecRequest;
use Aspose\Cells\Cloud\Request\TrimCharacterRequest;
use Aspose\Cells\Cloud\Request\UpdateWordCaseRequest;
use Aspose\Cells\Cloud\Request\RemoveCharactersRequest;
use Aspose\Cells\Cloud\Request\RemoveCharactersByPositionRequest;
use Aspose\Cells\Cloud\Request\RemoveDuplicateSubstringsRequest;
use Aspose\Cells\Cloud\Request\AddTextRequest;
use Aspose\Cells\Cloud\Request\ConvertTextRequest;
use Aspose\Cells\Cloud\Request\ExtractTextRequest;
use Aspose\Cells\Cloud\Request\SplitTextRequest;
use Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankRowsRequest;
use Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankColumnsRequest;
use Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankWorksheetsRequest;
use Aspose\Cells\Cloud\Request\RemoveDuplicatesRequest;
use Aspose\Cells\Cloud\Request\SwapRangeRequest;
use Aspose\Cells\Cloud\Request\FlipDataRequest;
use Aspose\Cells\Cloud\Request\TransposeDataRequest;
use Aspose\Cells\Cloud\Request\UnpivotRangeRequest;
use Aspose\Cells\Cloud\Request\UnpivotTableRequest;
use Aspose\Cells\Cloud\Request\DownloadFileRequest;
use Aspose\Cells\Cloud\Request\UploadFileRequest;
use Aspose\Cells\Cloud\Request\CopyFileRequest;
use Aspose\Cells\Cloud\Request\MoveFileRequest;
use Aspose\Cells\Cloud\Request\DeleteFileRequest;
use Aspose\Cells\Cloud\Request\GetFilesListRequest;
use Aspose\Cells\Cloud\Request\CreateFolderRequest;
use Aspose\Cells\Cloud\Request\CopyFolderRequest;
use Aspose\Cells\Cloud\Request\MoveFolderRequest;
use Aspose\Cells\Cloud\Request\DeleteFolderRequest;
use Aspose\Cells\Cloud\Request\StorageExistsRequest;
use Aspose\Cells\Cloud\Request\ObjectExistsRequest;
use Aspose\Cells\Cloud\Request\GetDiscUsageRequest;
use Aspose\Cells\Cloud\Request\GetFileVersionsRequest;
use Aspose\Cells\Cloud\Request\PostAnalyzeExcelRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetAutoFilterRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetDateFilterRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetFilterRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetIconFilterRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetCustomFilterRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetDynamicFilterRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetFilterTop10Request;
use Aspose\Cells\Cloud\Request\PutWorksheetColorFilterRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetMatchBlanksRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetMatchNonBlanksRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetAutoFilterRefreshRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetDateFilterRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetFilterRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetAutoshapesRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetAutoshapeWithFormatRequest;
use Aspose\Cells\Cloud\Request\PostBatchConvertRequest;
use Aspose\Cells\Cloud\Request\PostBatchProtectRequest;
use Aspose\Cells\Cloud\Request\PostBatchLockRequest;
use Aspose\Cells\Cloud\Request\PostBatchUnlockRequest;
use Aspose\Cells\Cloud\Request\PostBatchSplitRequest;
use Aspose\Cells\Cloud\Request\PostClearContentsRequest;
use Aspose\Cells\Cloud\Request\PostClearFormatsRequest;
use Aspose\Cells\Cloud\Request\PostUpdateWorksheetRangeStyleRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetMergeRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetUnmergeRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetCellsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetCellRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetCellStyleRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellSetValueRequest;
use Aspose\Cells\Cloud\Request\PostUpdateWorksheetCellStyleRequest;
use Aspose\Cells\Cloud\Request\PostSetCellRangeValueRequest;
use Aspose\Cells\Cloud\Request\PostCopyCellIntoCellRequest;
use Aspose\Cells\Cloud\Request\GetCellHtmlStringRequest;
use Aspose\Cells\Cloud\Request\PostSetCellHtmlStringRequest;
use Aspose\Cells\Cloud\Request\PostCellCalculateRequest;
use Aspose\Cells\Cloud\Request\PostCellCharactersRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\PostSetWorksheetColumnWidthRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetColumnRequest;
use Aspose\Cells\Cloud\Request\PutInsertWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\PostHideWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\PostUnhideWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\PostGroupWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\PostUngroupWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\PostCopyWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\PostColumnStyleRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetRowRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetRowRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\PutInsertWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\PutInsertWorksheetRowRequest;
use Aspose\Cells\Cloud\Request\PostUpdateWorksheetRowRequest;
use Aspose\Cells\Cloud\Request\PostHideWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\PostUnhideWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\PostGroupWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\PostUngroupWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\PostCopyWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\PostRowStyleRequest;
use Aspose\Cells\Cloud\Request\GetCellsCloudServicesHealthCheckRequest;
use Aspose\Cells\Cloud\Request\GetCellsCloudServiceStatusRequest;
use Aspose\Cells\Cloud\Request\GetChartAreaRequest;
use Aspose\Cells\Cloud\Request\GetChartAreaFillFormatRequest;
use Aspose\Cells\Cloud\Request\GetChartAreaBorderRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetChartsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetChartRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetChartRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetChartRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetChartRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetChartLegendRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetChartLegendRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetChartLegendRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetChartLegendRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetChartsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetChartTitleRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetChartTitleRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetChartTitleRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetChartTitleRequest;
use Aspose\Cells\Cloud\Request\GetChartSeriesAxisRequest;
use Aspose\Cells\Cloud\Request\GetChartCategoryAxisRequest;
use Aspose\Cells\Cloud\Request\GetChartValueAxisRequest;
use Aspose\Cells\Cloud\Request\GetChartSecondCategoryAxisRequest;
use Aspose\Cells\Cloud\Request\GetChartSecondValueAxisRequest;
use Aspose\Cells\Cloud\Request\PostChartSeriesAxisRequest;
use Aspose\Cells\Cloud\Request\PostChartCategoryAxisRequest;
use Aspose\Cells\Cloud\Request\PostChartValueAxisRequest;
use Aspose\Cells\Cloud\Request\PostChartSecondCategoryAxisRequest;
use Aspose\Cells\Cloud\Request\PostChartSecondValueAxisRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetConditionalFormattingsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetConditionalFormattingRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetConditionalFormattingRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetFormatConditionRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetFormatConditionAreaRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetFormatConditionConditionRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetConditionalFormattingsRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetConditionalFormattingRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetConditionalFormattingAreaRequest;
use Aspose\Cells\Cloud\Request\GetWorkbookRequest;
use Aspose\Cells\Cloud\Request\PutConvertWorkbookRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookSaveAsRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToPDFRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToPNGRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToDocxRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToPptxRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToHtmlRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToMarkdownRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToJsonRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToSQLRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookToCSVRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorksheetToImageRequest;
use Aspose\Cells\Cloud\Request\PostConvertWorkbookRequest;
use Aspose\Cells\Cloud\Request\CheckWrokbookExternalReferenceRequest;
use Aspose\Cells\Cloud\Request\CheckWorkbookFormulaErrorsRequest;
use Aspose\Cells\Cloud\Request\PostExportRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookExportXMLRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookImportJsonRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookImportXMLRequest;
use Aspose\Cells\Cloud\Request\PostImportDataRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookDataCleansingRequest;
use Aspose\Cells\Cloud\Request\PostDataCleansingRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookDataDeduplicationRequest;
use Aspose\Cells\Cloud\Request\PostDataDeduplicationRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookDataFillRequest;
use Aspose\Cells\Cloud\Request\PostDataFillRequest;
use Aspose\Cells\Cloud\Request\PostDeleteIncompleteRowsRequest;
use Aspose\Cells\Cloud\Request\PostDataTransformationRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetHyperlinksRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetHyperlinkRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetHyperlinkRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetHyperlinkRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetHyperlinkRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetHyperlinksRequest;
use Aspose\Cells\Cloud\Request\PostAssembleRequest;
use Aspose\Cells\Cloud\Request\PostCompressRequest;
use Aspose\Cells\Cloud\Request\PostMergeRequest;
use Aspose\Cells\Cloud\Request\PostSplitRequest;
use Aspose\Cells\Cloud\Request\PostSearchRequest;
use Aspose\Cells\Cloud\Request\PostReplaceRequest;
use Aspose\Cells\Cloud\Request\PostImportRequest;
use Aspose\Cells\Cloud\Request\PostWatermarkRequest;
use Aspose\Cells\Cloud\Request\PostClearObjectsRequest;
use Aspose\Cells\Cloud\Request\PostReverseRequest;
use Aspose\Cells\Cloud\Request\PostRepairRequest;
use Aspose\Cells\Cloud\Request\PostRotateRequest;
use Aspose\Cells\Cloud\Request\PostMetadataRequest;
use Aspose\Cells\Cloud\Request\GetMetadataRequest;
use Aspose\Cells\Cloud\Request\DeleteMetadataRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetListObjectsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetListObjectRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetListObjectRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetListObjectsRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetListObjectRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetListObjectRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetListObjectConvertToRangeRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetListObjectSummarizeWithPivotTableRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetListObjectSortTableRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetListObjectRemoveDuplicatesRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetListObjectInsertSlicerRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetListColumnRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetListColumnsTotalRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetOleObjectsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetOleObjectRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetOleObjectsRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetOleObjectRequest;
use Aspose\Cells\Cloud\Request\PostUpdateWorksheetOleObjectRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetOleObjectRequest;
use Aspose\Cells\Cloud\Request\GetVerticalPageBreaksRequest;
use Aspose\Cells\Cloud\Request\GetHorizontalPageBreaksRequest;
use Aspose\Cells\Cloud\Request\GetVerticalPageBreakRequest;
use Aspose\Cells\Cloud\Request\GetHorizontalPageBreakRequest;
use Aspose\Cells\Cloud\Request\PutVerticalPageBreakRequest;
use Aspose\Cells\Cloud\Request\PutHorizontalPageBreakRequest;
use Aspose\Cells\Cloud\Request\DeleteVerticalPageBreaksRequest;
use Aspose\Cells\Cloud\Request\DeleteHorizontalPageBreaksRequest;
use Aspose\Cells\Cloud\Request\DeleteVerticalPageBreakRequest;
use Aspose\Cells\Cloud\Request\DeleteHorizontalPageBreakRequest;
use Aspose\Cells\Cloud\Request\GetPageSetupRequest;
use Aspose\Cells\Cloud\Request\PostPageSetupRequest;
use Aspose\Cells\Cloud\Request\DeleteHeaderFooterRequest;
use Aspose\Cells\Cloud\Request\GetHeaderRequest;
use Aspose\Cells\Cloud\Request\PostHeaderRequest;
use Aspose\Cells\Cloud\Request\GetFooterRequest;
use Aspose\Cells\Cloud\Request\PostFooterRequest;
use Aspose\Cells\Cloud\Request\PostFitWideToPagesRequest;
use Aspose\Cells\Cloud\Request\PostFitTallToPagesRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetPicturesRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetPictureWithFormatRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetAddPictureRequest;
use Aspose\Cells\Cloud\Request\AddPictureInCellRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetPictureRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetPictureRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetPicturesRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetPivotTablesRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetPivotTableRequest;
use Aspose\Cells\Cloud\Request\GetPivotTableFieldRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetPivotTableFiltersRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetPivotTableFilterRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetPivotTableRequest;
use Aspose\Cells\Cloud\Request\PutPivotTableFieldRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetPivotTableFilterRequest;
use Aspose\Cells\Cloud\Request\PostPivotTableFieldHideItemRequest;
use Aspose\Cells\Cloud\Request\PostPivotTableFieldMoveToRequest;
use Aspose\Cells\Cloud\Request\PostPivotTableCellStyleRequest;
use Aspose\Cells\Cloud\Request\PostPivotTableStyleRequest;
use Aspose\Cells\Cloud\Request\PostPivotTableUpdatePivotFieldsRequest;
use Aspose\Cells\Cloud\Request\PostPivotTableUpdatePivotFieldRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetPivotTableCalculateRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetPivotTableMoveRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetPivotTablesRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetPivotTableRequest;
use Aspose\Cells\Cloud\Request\DeletePivotTableFieldRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetPivotTableFiltersRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetPivotTableFilterRequest;
use Aspose\Cells\Cloud\Request\GetDocumentPropertiesRequest;
use Aspose\Cells\Cloud\Request\PutDocumentPropertyRequest;
use Aspose\Cells\Cloud\Request\GetDocumentPropertyRequest;
use Aspose\Cells\Cloud\Request\DeleteDocumentPropertyRequest;
use Aspose\Cells\Cloud\Request\DeleteDocumentPropertiesRequest;
use Aspose\Cells\Cloud\Request\PostDigitalSignatureRequest;
use Aspose\Cells\Cloud\Request\PostEncryptWorkbookRequest;
use Aspose\Cells\Cloud\Request\DeleteDecryptWorkbookRequest;
use Aspose\Cells\Cloud\Request\PostProtectWorkbookRequest;
use Aspose\Cells\Cloud\Request\DeleteUnProtectWorkbookRequest;
use Aspose\Cells\Cloud\Request\PutDocumentProtectFromChangesRequest;
use Aspose\Cells\Cloud\Request\DeleteDocumentUnProtectFromChangesRequest;
use Aspose\Cells\Cloud\Request\PostUnlockRequest;
use Aspose\Cells\Cloud\Request\PostLockRequest;
use Aspose\Cells\Cloud\Request\PostProtectRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangesCopyRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeMergeRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeUnMergeRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeStyleRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetCellsRangeValueRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeValueRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeMoveToRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeSortRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeOutlineBorderRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeColumnWidthRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeRowHeightRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCellsRangeToImageRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetCellsRangeRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetCellsRangeRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetShapesRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetShapeRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetShapeRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetShapesRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetShapeRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetShapeRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetGroupShapeRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetUngroupShapeRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetSparklineGroupsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetSparklineGroupRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetSparklineGroupsRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetSparklineGroupRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetSparklineGroupRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetSparklineGroupRequest;
use Aspose\Cells\Cloud\Request\PostCharacterCountRequest;
use Aspose\Cells\Cloud\Request\PostWordsCountRequest;
use Aspose\Cells\Cloud\Request\PostSpecifyWordsCountRequest;
use Aspose\Cells\Cloud\Request\PostRunTaskRequest;
use Aspose\Cells\Cloud\Request\PostAddTextContentRequest;
use Aspose\Cells\Cloud\Request\PostTrimContentRequest;
use Aspose\Cells\Cloud\Request\PostUpdateWordCaseRequest;
use Aspose\Cells\Cloud\Request\PostRemoveCharactersRequest;
use Aspose\Cells\Cloud\Request\PostConvertTextRequest;
use Aspose\Cells\Cloud\Request\PostRemoveDuplicatesRequest;
use Aspose\Cells\Cloud\Request\PostExtractTextRequest;
use Aspose\Cells\Cloud\Request\PostSplitTextRequest;
use Aspose\Cells\Cloud\Request\GetWorkbookDefaultStyleRequest;
use Aspose\Cells\Cloud\Request\GetWorkbookTextItemsRequest;
use Aspose\Cells\Cloud\Request\GetWorkbookNamesRequest;
use Aspose\Cells\Cloud\Request\PutWorkbookNameRequest;
use Aspose\Cells\Cloud\Request\GetWorkbookNameRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookNameRequest;
use Aspose\Cells\Cloud\Request\GetWorkbookNameValueRequest;
use Aspose\Cells\Cloud\Request\DeleteWorkbookNamesRequest;
use Aspose\Cells\Cloud\Request\DeleteWorkbookNameRequest;
use Aspose\Cells\Cloud\Request\PostWorkbooksMergeRequest;
use Aspose\Cells\Cloud\Request\PostWorkbooksTextSearchRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookTextReplaceRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookGetSmartMarkerResultRequest;
use Aspose\Cells\Cloud\Request\PutWorkbookCreateRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookSplitRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookCalculateFormulaRequest;
use Aspose\Cells\Cloud\Request\PostAutofitWorkbookRowsRequest;
use Aspose\Cells\Cloud\Request\PostAutofitWorkbookColumnsRequest;
use Aspose\Cells\Cloud\Request\GetWorkbookSettingsRequest;
use Aspose\Cells\Cloud\Request\PostWorkbookSettingsRequest;
use Aspose\Cells\Cloud\Request\PutWorkbookBackgroundRequest;
use Aspose\Cells\Cloud\Request\DeleteWorkbookBackgroundRequest;
use Aspose\Cells\Cloud\Request\PutWorkbookWaterMarkerRequest;
use Aspose\Cells\Cloud\Request\GetPageCountRequest;
use Aspose\Cells\Cloud\Request\GetAllStylesRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetWithFormatRequest;
use Aspose\Cells\Cloud\Request\PutChangeVisibilityWorksheetRequest;
use Aspose\Cells\Cloud\Request\PutActiveWorksheetRequest;
use Aspose\Cells\Cloud\Request\PutInsertNewWorksheetRequest;
use Aspose\Cells\Cloud\Request\PutAddNewWorksheetRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetsRequest;
use Aspose\Cells\Cloud\Request\PostMoveWorksheetRequest;
use Aspose\Cells\Cloud\Request\PutProtectWorksheetRequest;
use Aspose\Cells\Cloud\Request\DeleteUnprotectWorksheetRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetTextItemsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetCommentsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetCommentRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetCommentRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCommentRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetCommentRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetCommentsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetMergedCellsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetMergedCellRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetCalculateFormulaRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetCalculateFormulaRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetTextSearchRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetTextReplaceRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetRangeSortRequest;
use Aspose\Cells\Cloud\Request\PostAutofitWorksheetRowRequest;
use Aspose\Cells\Cloud\Request\PostAutofitWorksheetRowsRequest;
use Aspose\Cells\Cloud\Request\PostAutofitWorksheetColumnsRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetBackgroundRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetBackgroundRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetFreezePanesRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetFreezePanesRequest;
use Aspose\Cells\Cloud\Request\PostCopyWorksheetRequest;
use Aspose\Cells\Cloud\Request\PostRenameWorksheetRequest;
use Aspose\Cells\Cloud\Request\PostUpdateWorksheetPropertyRequest;
use Aspose\Cells\Cloud\Request\GetNamedRangesRequest;
use Aspose\Cells\Cloud\Request\GetNamedRangeValueRequest;
use Aspose\Cells\Cloud\Request\PostUpdateWorksheetZoomRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetPageCountRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetValidationsRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetValidationRequest;
use Aspose\Cells\Cloud\Request\PutWorksheetValidationRequest;
use Aspose\Cells\Cloud\Request\PostWorksheetValidationRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetValidationRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetValidationsRequest;
use Aspose\Cells\Cloud\Model\DiscUsage;
use Aspose\Cells\Cloud\Model\ObjectExist;
use Aspose\Cells\Cloud\Model\ObjectExistsExtensions;
use Aspose\Cells\Cloud\Model\FileVersion;
use Aspose\Cells\Cloud\Model\StorageExist;
use Aspose\Cells\Cloud\Model\FileVersions;
use Aspose\Cells\Cloud\Model\FilesList;
use Aspose\Cells\Cloud\Model\FilesUploadResult;
use Aspose\Cells\Cloud\Model\StorageFile;
use Aspose\Cells\Cloud\Model\GoogleDriveStorageFile;
use Aspose\Cells\Cloud\Model\AggregateResultByColor;
use Aspose\Cells\Cloud\Model\BrokenLink;
use Aspose\Cells\Cloud\Model\CellArea;
use Aspose\Cells\Cloud\Model\CellsCloudFileInfo;
use Aspose\Cells\Cloud\Model\CellsCloudPublicKey;
use Aspose\Cells\Cloud\Model\Color;
use Aspose\Cells\Cloud\Model\PdfSecurityOptions;
use Aspose\Cells\Cloud\Model\Range;
use Aspose\Cells\Cloud\Model\RemoveCharactersByPosition;
use Aspose\Cells\Cloud\Model\SaveResult;
use Aspose\Cells\Cloud\Model\PaginatedSaveOptions;
use Aspose\Cells\Cloud\Model\SpreadsheetTemplate;
use Aspose\Cells\Cloud\Model\TextItem;
use Aspose\Cells\Cloud\Model\DbfSaveOptions;
use Aspose\Cells\Cloud\Model\DifSaveOptions;
use Aspose\Cells\Cloud\Model\DocxSaveOptions;
use Aspose\Cells\Cloud\Model\HtmlSaveOptions;
use Aspose\Cells\Cloud\Model\ImageSaveOptions;
use Aspose\Cells\Cloud\Model\JsonSaveOptions;
use Aspose\Cells\Cloud\Model\MarkdownSaveOptions;
use Aspose\Cells\Cloud\Model\MHtmlSaveOptions;
use Aspose\Cells\Cloud\Model\OdsSaveOptions;
use Aspose\Cells\Cloud\Model\OoxmlSaveOptions;
use Aspose\Cells\Cloud\Model\PclSaveOptions;
use Aspose\Cells\Cloud\Model\PdfSaveOptions;
use Aspose\Cells\Cloud\Model\PptxSaveOptions;
use Aspose\Cells\Cloud\Model\SaveOptions;
use Aspose\Cells\Cloud\Model\SaveOptionsData;
use Aspose\Cells\Cloud\Model\SpreadsheetML2003SaveOptions;
use Aspose\Cells\Cloud\Model\SqlScriptSaveOptions;
use Aspose\Cells\Cloud\Model\SvgSaveOptions;
use Aspose\Cells\Cloud\Model\TxtSaveOptions;
use Aspose\Cells\Cloud\Model\XlsbSaveOptions;
use Aspose\Cells\Cloud\Model\XlsSaveOptions;
use Aspose\Cells\Cloud\Model\XmlSaveOptions;
use Aspose\Cells\Cloud\Model\XpsSaveOptions;
use Aspose\Cells\Cloud\Model\AggregateResultByColorResponse;
use Aspose\Cells\Cloud\Model\BrokenLinksResponse;
use Aspose\Cells\Cloud\Model\CellsCloudFileInfoResponse;
use Aspose\Cells\Cloud\Model\CellsCloudPublicKeyResponse;
use Aspose\Cells\Cloud\Model\CellsCloudResponse;
use Aspose\Cells\Cloud\Model\SaveResponse;
use Aspose\Cells\Cloud\Model\SearchResponse;
use Aspose\Cells\Cloud\Model\ImageOrPrintOptions;
use Aspose\Cells\Cloud\Model\RenderingFont;
use Aspose\Cells\Cloud\Model\RenderingWatermark;
use Aspose\Cells\Cloud\Model\Error;
use Aspose\Cells\Cloud\Model\ErrorDetails;
use Aspose\Cells\Cloud\Model\AboveAverage;
use Aspose\Cells\Cloud\Model\AbstractCalculationEngine;
use Aspose\Cells\Cloud\Model\AbstractCalculationMonitor;
use Aspose\Cells\Cloud\Model\AutoFilter;
use Aspose\Cells\Cloud\Model\AutoFitterOptions;
use Aspose\Cells\Cloud\Model\Border;
use Aspose\Cells\Cloud\Model\CalculationOptions;
use Aspose\Cells\Cloud\Model\Cell;
use Aspose\Cells\Cloud\Model\Cells;
use Aspose\Cells\Cloud\Model\CellsColor;
use Aspose\Cells\Cloud\Model\CellsDocumentProperties;
use Aspose\Cells\Cloud\Model\CellsDocumentProperty;
use Aspose\Cells\Cloud\Model\ColorFilter;
use Aspose\Cells\Cloud\Model\ColorScale;
use Aspose\Cells\Cloud\Model\Column;
use Aspose\Cells\Cloud\Model\Columns;
use Aspose\Cells\Cloud\Model\Comment;
use Aspose\Cells\Cloud\Model\Comments;
use Aspose\Cells\Cloud\Model\ConditionalFormatting;
use Aspose\Cells\Cloud\Model\ConditionalFormattingIcon;
use Aspose\Cells\Cloud\Model\ConditionalFormattings;
use Aspose\Cells\Cloud\Model\ConditionalFormattingValue;
use Aspose\Cells\Cloud\Model\CopyOptions;
use Aspose\Cells\Cloud\Model\CriteriaMultipleFilter;
use Aspose\Cells\Cloud\Model\CustomFilter;
use Aspose\Cells\Cloud\Model\DataBar;
use Aspose\Cells\Cloud\Model\DataBarBorder;
use Aspose\Cells\Cloud\Model\DataCleansing;
use Aspose\Cells\Cloud\Model\DataColumnFillValue;
use Aspose\Cells\Cloud\Model\DataFill;
use Aspose\Cells\Cloud\Model\DataFillValue;
use Aspose\Cells\Cloud\Model\DataItem;
use Aspose\Cells\Cloud\Model\DataSorter;
use Aspose\Cells\Cloud\Model\DataSorterKey;
use Aspose\Cells\Cloud\Model\DataSource;
use Aspose\Cells\Cloud\Model\DateTimeGroupItem;
use Aspose\Cells\Cloud\Model\DeduplicationRegion;
use Aspose\Cells\Cloud\Model\DynamicFilter;
use Aspose\Cells\Cloud\Model\FileInfo;
use Aspose\Cells\Cloud\Model\FileSource;
use Aspose\Cells\Cloud\Model\FilesResult;
use Aspose\Cells\Cloud\Model\FilterColumn;
use Aspose\Cells\Cloud\Model\Font;
use Aspose\Cells\Cloud\Model\FontSetting;
use Aspose\Cells\Cloud\Model\FormatCondition;
use Aspose\Cells\Cloud\Model\FormulaFormatCondition;
use Aspose\Cells\Cloud\Model\FormulaSettings;
use Aspose\Cells\Cloud\Model\GlobalizationSettings;
use Aspose\Cells\Cloud\Model\HorizontalPageBreak;
use Aspose\Cells\Cloud\Model\HorizontalPageBreaks;
use Aspose\Cells\Cloud\Model\Hyperlink;
use Aspose\Cells\Cloud\Model\Hyperlinks;
use Aspose\Cells\Cloud\Model\IconFilter;
use Aspose\Cells\Cloud\Model\IconSet;
use Aspose\Cells\Cloud\Model\Link;
use Aspose\Cells\Cloud\Model\LinkElement;
use Aspose\Cells\Cloud\Model\LoadOptions;
use Aspose\Cells\Cloud\Model\MergedCell;
use Aspose\Cells\Cloud\Model\MergedCells;
use Aspose\Cells\Cloud\Model\MultipleFilter;
use Aspose\Cells\Cloud\Model\MultipleFilters;
use Aspose\Cells\Cloud\Model\Name;
use Aspose\Cells\Cloud\Model\Names;
use Aspose\Cells\Cloud\Model\NegativeBarFormat;
use Aspose\Cells\Cloud\Model\PageSection;
use Aspose\Cells\Cloud\Model\PageSetup;
use Aspose\Cells\Cloud\Model\PasteOptions;
use Aspose\Cells\Cloud\Model\Protection;
use Aspose\Cells\Cloud\Model\ProtectSheetParameter;
use Aspose\Cells\Cloud\Model\Ranges;
use Aspose\Cells\Cloud\Model\Row;
use Aspose\Cells\Cloud\Model\Rows;
use Aspose\Cells\Cloud\Model\SingleValue;
use Aspose\Cells\Cloud\Model\SortKey;
use Aspose\Cells\Cloud\Model\SplitResult;
use Aspose\Cells\Cloud\Model\Style;
use Aspose\Cells\Cloud\Model\StyleFormatCondition;
use Aspose\Cells\Cloud\Model\Styles;
use Aspose\Cells\Cloud\Model\TextFormatCondition;
use Aspose\Cells\Cloud\Model\TextItems;
use Aspose\Cells\Cloud\Model\TextOptions;
use Aspose\Cells\Cloud\Model\ThemeColor;
use Aspose\Cells\Cloud\Model\TimePeriodFormatCondition;
use Aspose\Cells\Cloud\Model\Top10;
use Aspose\Cells\Cloud\Model\Top10Filter;
use Aspose\Cells\Cloud\Model\Validation;
use Aspose\Cells\Cloud\Model\Validations;
use Aspose\Cells\Cloud\Model\VerticalPageBreak;
use Aspose\Cells\Cloud\Model\VerticalPageBreaks;
use Aspose\Cells\Cloud\Model\Workbook;
use Aspose\Cells\Cloud\Model\WorkbookSettings;
use Aspose\Cells\Cloud\Model\Worksheet;
use Aspose\Cells\Cloud\Model\Worksheets;
use Aspose\Cells\Cloud\Model\WriteProtection;
use Aspose\Cells\Cloud\Model\XmlDataBinding;
use Aspose\Cells\Cloud\Model\XmlMap;
use Aspose\Cells\Cloud\Model\CellsObjectOperateTaskParameter;
use Aspose\Cells\Cloud\Model\ConvertTaskParameter;
use Aspose\Cells\Cloud\Model\ConvertWorksheetTaskParameter;
use Aspose\Cells\Cloud\Model\ImportDataTaskParameter;
use Aspose\Cells\Cloud\Model\ResultDestination;
use Aspose\Cells\Cloud\Model\SaveFilesToCloudResult;
use Aspose\Cells\Cloud\Model\SaveResultTaskParameter;
use Aspose\Cells\Cloud\Model\SmartMarkerTaskParameter;
use Aspose\Cells\Cloud\Model\SplitWorkbookTaskParameter;
use Aspose\Cells\Cloud\Model\TaskData;
use Aspose\Cells\Cloud\Model\TaskDescription;
use Aspose\Cells\Cloud\Model\TaskParameter;
use Aspose\Cells\Cloud\Model\TaskResultParameter;
use Aspose\Cells\Cloud\Model\TaskRunResult;
use Aspose\Cells\Cloud\Model\ChartOperateParameter;
use Aspose\Cells\Cloud\Model\ListObjectOperateParameter;
use Aspose\Cells\Cloud\Model\OperateObject;
use Aspose\Cells\Cloud\Model\OperateObjectPosition;
use Aspose\Cells\Cloud\Model\OperateParameter;
use Aspose\Cells\Cloud\Model\PageBreakOperateParameter;
use Aspose\Cells\Cloud\Model\PageSetupOperateParameter;
use Aspose\Cells\Cloud\Model\PivotTableOperateParameter;
use Aspose\Cells\Cloud\Model\ShapeOperateParameter;
use Aspose\Cells\Cloud\Model\WorkbookOperateParameter;
use Aspose\Cells\Cloud\Model\WorkbookSettingsOperateParameter;
use Aspose\Cells\Cloud\Model\WorksheetOperateParameter;
use Aspose\Cells\Cloud\Model\ListColumn;
use Aspose\Cells\Cloud\Model\ListObject;
use Aspose\Cells\Cloud\Model\ListObjects;
use Aspose\Cells\Cloud\Model\PivotGlobalizationSettings;
use Aspose\Cells\Cloud\Model\ArcShapeResponse;
use Aspose\Cells\Cloud\Model\AutoFilterResponse;
use Aspose\Cells\Cloud\Model\AutoShapeResponse;
use Aspose\Cells\Cloud\Model\AutoShapesResponse;
use Aspose\Cells\Cloud\Model\AxisResponse;
use Aspose\Cells\Cloud\Model\BorderResponse;
use Aspose\Cells\Cloud\Model\ButtonResponse;
use Aspose\Cells\Cloud\Model\CalculateFormulaResponse;
use Aspose\Cells\Cloud\Model\CellResponse;
use Aspose\Cells\Cloud\Model\CellsDocumentPropertiesResponse;
use Aspose\Cells\Cloud\Model\CellsDocumentPropertyResponse;
use Aspose\Cells\Cloud\Model\CellsDrawingResponse;
use Aspose\Cells\Cloud\Model\CellsResponse;
use Aspose\Cells\Cloud\Model\ChartAreaResponse;
use Aspose\Cells\Cloud\Model\ChartDataTableResponse;
use Aspose\Cells\Cloud\Model\ChartPointResponse;
use Aspose\Cells\Cloud\Model\ChartPointsResponse;
use Aspose\Cells\Cloud\Model\ChartResponse;
use Aspose\Cells\Cloud\Model\ChartsResponse;
use Aspose\Cells\Cloud\Model\CheckBoxResponse;
use Aspose\Cells\Cloud\Model\CheckedExternalReferenceResponse;
use Aspose\Cells\Cloud\Model\CheckedFormulaErrorsResponse;
use Aspose\Cells\Cloud\Model\ColumnResponse;
use Aspose\Cells\Cloud\Model\ColumnsResponse;
use Aspose\Cells\Cloud\Model\ComboBoxResponse;
use Aspose\Cells\Cloud\Model\CommentResponse;
use Aspose\Cells\Cloud\Model\CommentShapeResponse;
use Aspose\Cells\Cloud\Model\CommentsResponse;
use Aspose\Cells\Cloud\Model\ConditionalFormattingResponse;
use Aspose\Cells\Cloud\Model\ConditionalFormattingsResponse;
use Aspose\Cells\Cloud\Model\DataLabelsResponse;
use Aspose\Cells\Cloud\Model\DisplayUnitLabelResponse;
use Aspose\Cells\Cloud\Model\DropBarsResponse;
use Aspose\Cells\Cloud\Model\ErrorBarResponse;
use Aspose\Cells\Cloud\Model\FillFormatResponse;
use Aspose\Cells\Cloud\Model\FindResponse;
use Aspose\Cells\Cloud\Model\FloorResponse;
use Aspose\Cells\Cloud\Model\FormResponse;
use Aspose\Cells\Cloud\Model\FormsResponse;
use Aspose\Cells\Cloud\Model\GroupBoxResponse;
use Aspose\Cells\Cloud\Model\HorizontalPageBreakResponse;
use Aspose\Cells\Cloud\Model\HorizontalPageBreaksResponse;
use Aspose\Cells\Cloud\Model\HyperlinkResponse;
use Aspose\Cells\Cloud\Model\HyperlinksResponse;
use Aspose\Cells\Cloud\Model\LabelResponse;
use Aspose\Cells\Cloud\Model\LegendEntriesResponse;
use Aspose\Cells\Cloud\Model\LegendEntryResponse;
use Aspose\Cells\Cloud\Model\LegendResponse;
use Aspose\Cells\Cloud\Model\LineResponse;
use Aspose\Cells\Cloud\Model\LineShapeResponse;
use Aspose\Cells\Cloud\Model\ListBoxResponse;
use Aspose\Cells\Cloud\Model\ListObjectResponse;
use Aspose\Cells\Cloud\Model\ListObjectsResponse;
use Aspose\Cells\Cloud\Model\MergedCellResponse;
use Aspose\Cells\Cloud\Model\MergedCellsResponse;
use Aspose\Cells\Cloud\Model\NameResponse;
use Aspose\Cells\Cloud\Model\NamesResponse;
use Aspose\Cells\Cloud\Model\OleObjectResponse;
use Aspose\Cells\Cloud\Model\OleObjectsResponse;
use Aspose\Cells\Cloud\Model\OvalResponse;
use Aspose\Cells\Cloud\Model\PageSectionsResponse;
use Aspose\Cells\Cloud\Model\PageSetupResponse;
use Aspose\Cells\Cloud\Model\PictureResponse;
use Aspose\Cells\Cloud\Model\PicturesResponse;
use Aspose\Cells\Cloud\Model\PivotFieldResponse;
use Aspose\Cells\Cloud\Model\PivotFilterResponse;
use Aspose\Cells\Cloud\Model\PivotFiltersResponse;
use Aspose\Cells\Cloud\Model\PivotTableResponse;
use Aspose\Cells\Cloud\Model\PivotTablesResponse;
use Aspose\Cells\Cloud\Model\PlotAreaResponse;
use Aspose\Cells\Cloud\Model\RadioButtonResponse;
use Aspose\Cells\Cloud\Model\RangeResponse;
use Aspose\Cells\Cloud\Model\RangesResponse;
use Aspose\Cells\Cloud\Model\RangeValueResponse;
use Aspose\Cells\Cloud\Model\RectangleShapeResponse;
use Aspose\Cells\Cloud\Model\RowResponse;
use Aspose\Cells\Cloud\Model\RowsResponse;
use Aspose\Cells\Cloud\Model\SaveFilesToCloudResultResponse;
use Aspose\Cells\Cloud\Model\ScrollBarResponse;
use Aspose\Cells\Cloud\Model\SeriesesResponse;
use Aspose\Cells\Cloud\Model\SeriesResponse;
use Aspose\Cells\Cloud\Model\ShapeResponse;
use Aspose\Cells\Cloud\Model\ShapesResponse;
use Aspose\Cells\Cloud\Model\SingleValueResponse;
use Aspose\Cells\Cloud\Model\SparklineGroupResponse;
use Aspose\Cells\Cloud\Model\SparklineGroupsResponse;
use Aspose\Cells\Cloud\Model\SpinnerResponse;
use Aspose\Cells\Cloud\Model\SplitResultResponse;
use Aspose\Cells\Cloud\Model\StyleResponse;
use Aspose\Cells\Cloud\Model\StylesResponse;
use Aspose\Cells\Cloud\Model\TaskRunResultResponse;
use Aspose\Cells\Cloud\Model\TextBoxResponse;
use Aspose\Cells\Cloud\Model\TextItemResponse;
use Aspose\Cells\Cloud\Model\TextItemsResponse;
use Aspose\Cells\Cloud\Model\TickLabelsResponse;
use Aspose\Cells\Cloud\Model\TitleResponse;
use Aspose\Cells\Cloud\Model\TrendlineResponse;
use Aspose\Cells\Cloud\Model\TrendlinesResponse;
use Aspose\Cells\Cloud\Model\ValidationResponse;
use Aspose\Cells\Cloud\Model\ValidationsResponse;
use Aspose\Cells\Cloud\Model\VerticalPageBreakResponse;
use Aspose\Cells\Cloud\Model\VerticalPageBreaksResponse;
use Aspose\Cells\Cloud\Model\WallsResponse;
use Aspose\Cells\Cloud\Model\WorkbookReplaceResponse;
use Aspose\Cells\Cloud\Model\WorkbookResponse;
use Aspose\Cells\Cloud\Model\WorkbookSettingsResponse;
use Aspose\Cells\Cloud\Model\WorkbooksResponse;
use Aspose\Cells\Cloud\Model\WorksheetReplaceResponse;
use Aspose\Cells\Cloud\Model\WorksheetResponse;
use Aspose\Cells\Cloud\Model\WorksheetsResponse;
use Aspose\Cells\Cloud\Model\AnalyzeExcelRequest;
use Aspose\Cells\Cloud\Model\BatchConvertRequest;
use Aspose\Cells\Cloud\Model\BatchLockRequest;
use Aspose\Cells\Cloud\Model\BatchProtectRequest;
use Aspose\Cells\Cloud\Model\BatchSplitRequest;
use Aspose\Cells\Cloud\Model\ColorFilterRequest;
use Aspose\Cells\Cloud\Model\ConvertParameter;
use Aspose\Cells\Cloud\Model\CreatePivotTableRequest;
use Aspose\Cells\Cloud\Model\DataCleansingRequest;
use Aspose\Cells\Cloud\Model\DataDeduplicationRequest;
use Aspose\Cells\Cloud\Model\DataFillRequest;
use Aspose\Cells\Cloud\Model\DataTransformationRequest;
use Aspose\Cells\Cloud\Model\DeleteIncompleteRowsRequest;
use Aspose\Cells\Cloud\Model\ImportJsonRequest;
use Aspose\Cells\Cloud\Model\ImportXMLRequest;
use Aspose\Cells\Cloud\Model\MatchConditionRequest;
use Aspose\Cells\Cloud\Model\PasswordRequest;
use Aspose\Cells\Cloud\Model\PivotTableFieldRequest;
use Aspose\Cells\Cloud\Model\ProtectWorkbookRequest;
use Aspose\Cells\Cloud\Model\RangeConvertRequest;
use Aspose\Cells\Cloud\Model\RangeCopyRequest;
use Aspose\Cells\Cloud\Model\RangeSetOutlineBorderRequest;
use Aspose\Cells\Cloud\Model\RangeSetStyleRequest;
use Aspose\Cells\Cloud\Model\RangeSortRequest;
use Aspose\Cells\Cloud\Model\TableTotalRequest;
use Aspose\Cells\Cloud\Model\TextWaterMarkerRequest;
use Aspose\Cells\Cloud\Model\WorkbookEncryptionRequest;
use Aspose\Cells\Cloud\Model\WorkbookProtectionRequest;
use Aspose\Cells\Cloud\Model\WorksheetMovingRequest;
use Aspose\Cells\Cloud\Model\AppliedOperate;
use Aspose\Cells\Cloud\Model\AppliedStep;
use Aspose\Cells\Cloud\Model\DataQuery;
use Aspose\Cells\Cloud\Model\LoadData;
use Aspose\Cells\Cloud\Model\LoadTo;
use Aspose\Cells\Cloud\Model\MergeQueries;
use Aspose\Cells\Cloud\Model\PivotColumn;
use Aspose\Cells\Cloud\Model\UnpivotColumn;
use Aspose\Cells\Cloud\Model\PivotField;
use Aspose\Cells\Cloud\Model\PivotFilter;
use Aspose\Cells\Cloud\Model\PivotItem;
use Aspose\Cells\Cloud\Model\PivotTable;
use Aspose\Cells\Cloud\Model\PivotTables;
use Aspose\Cells\Cloud\Model\AddTextOptions;
use Aspose\Cells\Cloud\Model\BaseOperateOptions;
use Aspose\Cells\Cloud\Model\CharacterCountOptions;
use Aspose\Cells\Cloud\Model\CheckExternalReferenceOptions;
use Aspose\Cells\Cloud\Model\CheckFormulaErrorOptions;
use Aspose\Cells\Cloud\Model\CombinationSourceData;
use Aspose\Cells\Cloud\Model\ConvertTextOptions;
use Aspose\Cells\Cloud\Model\ConvertWorkbookOptions;
use Aspose\Cells\Cloud\Model\ConvertWorksheetOptions;
use Aspose\Cells\Cloud\Model\DataOutputLocation;
use Aspose\Cells\Cloud\Model\ExtractTextOptions;
use Aspose\Cells\Cloud\Model\MergeTableOptions;
use Aspose\Cells\Cloud\Model\RemoveCharactersByCharacter;
use Aspose\Cells\Cloud\Model\RemoveCharactersOptions;
use Aspose\Cells\Cloud\Model\RemoveDuplicatesOptions;
use Aspose\Cells\Cloud\Model\ScopeItem;
use Aspose\Cells\Cloud\Model\ScopeOptions;
use Aspose\Cells\Cloud\Model\SpecifyCellsObject;
use Aspose\Cells\Cloud\Model\SpecifyWordsCountOptions;
use Aspose\Cells\Cloud\Model\SplitTextOptions;
use Aspose\Cells\Cloud\Model\TablePositionInfo;
use Aspose\Cells\Cloud\Model\TrimContentOptions;
use Aspose\Cells\Cloud\Model\WordCaseOptions;
use Aspose\Cells\Cloud\Model\WordsCountOptions;
use Aspose\Cells\Cloud\Model\CellValue;
use Aspose\Cells\Cloud\Model\CustomParserConfig;
use Aspose\Cells\Cloud\Model\Import2DimensionDoubleArrayOption;
use Aspose\Cells\Cloud\Model\Import2DimensionIntArrayOption;
use Aspose\Cells\Cloud\Model\Import2DimensionStringArrayOption;
use Aspose\Cells\Cloud\Model\ImportBatchDataOption;
use Aspose\Cells\Cloud\Model\ImportCSVDataOption;
use Aspose\Cells\Cloud\Model\ImportDoubleArrayOption;
use Aspose\Cells\Cloud\Model\ImportIntArrayOption;
use Aspose\Cells\Cloud\Model\ImportOption;
use Aspose\Cells\Cloud\Model\ImportPictureOption;
use Aspose\Cells\Cloud\Model\ImportPosition;
use Aspose\Cells\Cloud\Model\ImportStringArrayOption;
use Aspose\Cells\Cloud\Model\ArcShape;
use Aspose\Cells\Cloud\Model\Area;
use Aspose\Cells\Cloud\Model\AutoShape;
use Aspose\Cells\Cloud\Model\AutoShapes;
use Aspose\Cells\Cloud\Model\Button;
use Aspose\Cells\Cloud\Model\CellsDrawing;
use Aspose\Cells\Cloud\Model\CheckBox;
use Aspose\Cells\Cloud\Model\ComboBox;
use Aspose\Cells\Cloud\Model\CommentShape;
use Aspose\Cells\Cloud\Model\FillFormat;
use Aspose\Cells\Cloud\Model\Form;
use Aspose\Cells\Cloud\Model\Forms;
use Aspose\Cells\Cloud\Model\GradientFill;
use Aspose\Cells\Cloud\Model\GradientFillStop;
use Aspose\Cells\Cloud\Model\GroupBox;
use Aspose\Cells\Cloud\Model\GroupShape;
use Aspose\Cells\Cloud\Model\Label;
use Aspose\Cells\Cloud\Model\Line;
use Aspose\Cells\Cloud\Model\LineFormat;
use Aspose\Cells\Cloud\Model\LineShape;
use Aspose\Cells\Cloud\Model\ListBox;
use Aspose\Cells\Cloud\Model\OleObject;
use Aspose\Cells\Cloud\Model\OleObjects;
use Aspose\Cells\Cloud\Model\Oval;
use Aspose\Cells\Cloud\Model\PatternFill;
use Aspose\Cells\Cloud\Model\PicFormatOption;
use Aspose\Cells\Cloud\Model\Picture;
use Aspose\Cells\Cloud\Model\Pictures;
use Aspose\Cells\Cloud\Model\RadioButton;
use Aspose\Cells\Cloud\Model\RectangleShape;
use Aspose\Cells\Cloud\Model\ScrollBar;
use Aspose\Cells\Cloud\Model\ShadowEffect;
use Aspose\Cells\Cloud\Model\Shape;
use Aspose\Cells\Cloud\Model\Shapes;
use Aspose\Cells\Cloud\Model\SolidFill;
use Aspose\Cells\Cloud\Model\Spinner;
use Aspose\Cells\Cloud\Model\TextBox;
use Aspose\Cells\Cloud\Model\TextureFill;
use Aspose\Cells\Cloud\Model\TilePicOption;
use Aspose\Cells\Cloud\Model\DigitalSignature;
use Aspose\Cells\Cloud\Model\Axis;
use Aspose\Cells\Cloud\Model\Chart;
use Aspose\Cells\Cloud\Model\ChartArea;
use Aspose\Cells\Cloud\Model\ChartDataTable;
use Aspose\Cells\Cloud\Model\ChartFrame;
use Aspose\Cells\Cloud\Model\ChartGlobalizationSettings;
use Aspose\Cells\Cloud\Model\ChartPoint;
use Aspose\Cells\Cloud\Model\ChartPoints;
use Aspose\Cells\Cloud\Model\Charts;
use Aspose\Cells\Cloud\Model\ChartShape;
use Aspose\Cells\Cloud\Model\DataLabels;
use Aspose\Cells\Cloud\Model\DisplayUnitLabel;
use Aspose\Cells\Cloud\Model\DropBars;
use Aspose\Cells\Cloud\Model\ErrorBar;
use Aspose\Cells\Cloud\Model\Floor;
use Aspose\Cells\Cloud\Model\Legend;
use Aspose\Cells\Cloud\Model\LegendEntries;
use Aspose\Cells\Cloud\Model\LegendEntry;
use Aspose\Cells\Cloud\Model\Marker;
use Aspose\Cells\Cloud\Model\PlotArea;
use Aspose\Cells\Cloud\Model\Series;
use Aspose\Cells\Cloud\Model\SeriesItems;
use Aspose\Cells\Cloud\Model\Sparkline;
use Aspose\Cells\Cloud\Model\SparklineGroup;
use Aspose\Cells\Cloud\Model\SparklineGroups;
use Aspose\Cells\Cloud\Model\TickLabels;
use Aspose\Cells\Cloud\Model\Title;
use Aspose\Cells\Cloud\Model\Trendline;
use Aspose\Cells\Cloud\Model\Trendlines;
use Aspose\Cells\Cloud\Model\Walls;
use Aspose\Cells\Cloud\Model\AnalyzedColumnDescription;
use Aspose\Cells\Cloud\Model\AnalyzedResult;
use Aspose\Cells\Cloud\Model\AnalyzedTableDescription;
use Aspose\Cells\Cloud\Model\DiscoverChart;
use Aspose\Cells\Cloud\Model\DiscoverPivotTable;
use Aspose\Cells\Cloud\Model\ExcelDataStatistics;
use Aspose\Cells\Cloud\Model\WorksheetDataStatistics;

class CellsApi
{    

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;
    protected $headerSelector;

    protected $_clientId;
    protected $_clientSecret;
    protected $_appVersion;
    protected $_getAccessTokenTime;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        $clientId,$clientSecret,$version ="v3.0",$baseUrl="https://api.aspose.cloud"
    ) {
        $this->_clientId = $clientId;
        $this->_clientSecret = $clientSecret;
        $this->_appVersion = $version;
        $this->_baseUrl = substr($baseUrl,-1)=="/"?substr($baseUrl,0,strlen($baseUrl)-1):$baseUrl;

        $this->client =  new Client();
        $this->config =  new Configuration();
        $this->headerSelector =  new HeaderSelector();
        $grantType = "client_credentials";
        $this->config->setHost($this->_baseUrl."/");
        $defaultHost =  $this->config->getHost();
        $this->config->setHost($this->_baseUrl);
        if(  empty( $clientId)  || empty( $clientId) ) {
            $this->_needAuth = false;
        }else{
            $this->config ->setAccessToken ( $this->getAccessToken($grantType, $clientId, $clientSecret,$version));
        }
        $this->_getAccessTokenTime = date('y-m-d h:i:s');
        $this->config->setHost( $defaultHost );
    }

    public function checkAccessToken(){
        if((strtotime(date('y-m-d h:i:s'))-strtotime($this->_getAccessTokenTime))>86400){
            $this->config ->setAccessToken ( $this->getAccessToken( "client_credentials",$this->_appSid, $this->_appKey, $this->_appVersion));
            $this->_getAccessTokenTime = date('y-m-d h:i:s');
        }
    }


    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /// <summary>
    /// AI task decomposition: Convert user objectives to sequential action plans with formatted file export.
    /// </summary>
    /// <param name="request">Request. <see cref="DecomposeUserTaskRequest" /></param>
    public function decomposeUserTask( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Translates the entire spreadsheet to the specified target language.
    /// </summary>
    /// <param name="request">Request. <see cref="TranslateSpreadsheetRequest" /></param>
    public function translateSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Translates text file content to the specified target language.
    /// </summary>
    /// <param name="request">Request. <see cref="TranslateTextFileRequest" /></param>
    public function translateTextFile( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// The Aggregate by Color API provides a convenient way to perform calculations on cells that share the same fill or font color. This API supports a range of aggregate operations, including count, sum, maximum value, minimum value, and average value, enabling you to analyze and summarize data based on color distinctions.
    /// </summary>
    /// <param name="request">Request. <see cref="AggregateCellsByColorRequest" /></param>
    public function aggregateCellsByColor( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AggregateResultByColorResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="MathCalculateRequest" /></param>
    public function mathCalculate( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Get Access Token Result: The Cells Cloud Get Token API acts as a proxy service,
    /// forwarding user requests to the Aspose Cloud authentication server and returning the resulting access token to the client.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAccessTokenRequest" /></param>
    public function postAccessToken( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Check the Health Status of Aspose.Cells Cloud Service.
    /// </summary>
    /// <param name="request">Request. <see cref="GetAsposeCellsCloudStatusRequest" /></param>
    public function getAsposeCellsCloudStatus( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Check the Health Status of Aspose.Cells Cloud Service.
    /// </summary>
    /// <param name="request">Request. <see cref="CheckCloudServiceHealthRequest" /></param>
    public function checkCloudServiceHealth( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Converts a spreadsheet in cloud storage to the specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="ExportSpreadsheetAsFormatRequest" /></param>
    public function exportSpreadsheetAsFormat( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a worksheet of spreadsheet in cloud storage to the specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="ExportWorksheetAsFormatRequest" /></param>
    public function exportWorksheetAsFormat( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a chart of spreadsheet in cloud storage to the specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="ExportChartAsFormatRequest" /></param>
    public function exportChartAsFormat( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a table of spreadsheet in cloud storage to the specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="ExportTableAsFormatRequest" /></param>
    public function exportTableAsFormat( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts the range of spreadsheet in cloud storage to the specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="ExportRangeAsFormatRequest" /></param>
    public function exportRangeAsFormat( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a spreadsheet on a local drive to the specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertSpreadsheetRequest" /></param>
    public function convertSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a spreadsheet on a local drive to the pdf file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertSpreadsheetToPdfRequest" /></param>
    public function convertSpreadsheetToPdf( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a spreadsheet on a local drive to the JSON file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertSpreadsheetToJsonRequest" /></param>
    public function convertSpreadsheetToJson( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a spreadsheet on a local drive to the csv file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertSpreadsheetToCsvRequest" /></param>
    public function convertSpreadsheetToCsv( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a worksheet of spreadsheet on a local drive to the image format.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertWorksheetToImageRequest" /></param>
    public function convertWorksheetToImage( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a worksheet of spreadsheet on a local drive to the pdf file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertWorksheetToPdfRequest" /></param>
    public function convertWorksheetToPdf( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a worksheet of spreadsheet on a local drive to the JSON file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertWorksheetToJsonRequest" /></param>
    public function convertWorksheetToJson( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a worksheet of spreadsheet on a local drive to the CSV file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertWorksheetToCsvRequest" /></param>
    public function convertWorksheetToCsv( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a worksheet of spreadsheet on a local drive to the html file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertWorksheetToHtmlRequest" /></param>
    public function convertWorksheetToHtml( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a worksheet of spreadsheet on a local drive to the HTML table file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertWorksheetToHtmlTableRequest" /></param>
    public function convertWorksheetToHtmlTable( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a table of spreadsheet on a local drive to the image file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertTableToImageRequest" /></param>
    public function convertTableToImage( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a table of spreadsheet on a local drive to the pdf file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertTableToPdfRequest" /></param>
    public function convertTableToPdf( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a table of spreadsheet on a local drive to the csv file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertTableToCsvRequest" /></param>
    public function convertTableToCsv( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a table of spreadsheet on a local drive to the html file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertTableToHtmlRequest" /></param>
    public function convertTableToHtml( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a table of spreadsheet on a local drive to the json file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertTableToJsonRequest" /></param>
    public function convertTableToJson( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a range of spreadsheet on a local drive to the image file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertRangeToImageRequest" /></param>
    public function convertRangeToImage( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a range of spreadsheet on a local drive to the pdf file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertRangeToPdfRequest" /></param>
    public function convertRangeToPdf( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a range of spreadsheet on a local drive to the csv file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertRangeToCsvRequest" /></param>
    public function convertRangeToCsv( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a range of spreadsheet on a local drive to the html file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertRangeToHtmlRequest" /></param>
    public function convertRangeToHtml( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a range of spreadsheet on a local drive to the json file.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertRangeToJsonRequest" /></param>
    public function convertRangeToJson( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a chart of spreadsheet on a local drive to image.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertChartToImageRequest" /></param>
    public function convertChartToImage( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a chart of spreadsheet on a local drive to pdf.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertChartToPdfRequest" /></param>
    public function convertChartToPdf( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Converts a spreadsheet in cloud storage to the specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="SaveSpreadsheetAsRequest" /></param>
    public function saveSpreadsheetAs( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Merge local spreadsheet files into a specified format file.
    /// </summary>
    /// <param name="request">Request. <see cref="MergeSpreadsheetsRequest" /></param>
    public function mergeSpreadsheets( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Merge spreadsheet files in folder of cloud storage into a specified format file.
    /// </summary>
    /// <param name="request">Request. <see cref="MergeSpreadsheetsInRemoteFolderRequest" /></param>
    public function mergeSpreadsheetsInRemoteFolder( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Merge a spreadsheet file into other spreadsheet in cloud storage, and output a specified format file.
    /// </summary>
    /// <param name="request">Request. <see cref="MergeRemoteSpreadsheetRequest" /></param>
    public function mergeRemoteSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Split a local spreadsheet into the specified format, multi-file.
    /// </summary>
    /// <param name="request">Request. <see cref="SplitSpreadsheetRequest" /></param>
    public function splitSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Split an Excel worksheet tale into multiple sheets by column value.
    /// </summary>
    /// <param name="request">Request. <see cref="SplitTableRequest" /></param>
    public function splitTable( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Split a spreadsheet in cloud storage into the specified format, multi-file.
    /// </summary>
    /// <param name="request">Request. <see cref="SplitRemoteSpreadsheetRequest" /></param>
    public function splitRemoteSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Import data into a spreadsheet from a supported data file format.
    /// </summary>
    /// <param name="request">Request. <see cref="ImportDataIntoSpreadsheetRequest" /></param>
    public function importDataIntoSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Import JSON data file into the local spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="ImportJSONDataIntoSpreadsheetRequest" /></param>
    public function importJSONDataIntoSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Import XML data file into the local spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="ImportXMLDataIntoSpreadsheetRequest" /></param>
    public function importXMLDataIntoSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Import CSV data file into the local spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="ImportCSVDataIntoSpreadsheetRequest" /></param>
    public function importCSVDataIntoSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Get an asymmetric public key.
    /// </summary>
    /// <param name="request">Request. <see cref="GetPublicKeyRequest" /></param>
    public function getPublicKey( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudPublicKeyResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// The Web API allows users to create a new spreadsheet with a specified name. Optionally, a template can be provided to initialize the spreadsheet with predefined content or formatting.
    /// </summary>
    /// <param name="request">Request. <see cref="CreateSpreadsheetRequest" /></param>
    public function createSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Fetches a complete list of worksheets from the currently active local spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetsWithLocalSpreadsheetRequest" /></param>
    public function getWorksheetsWithLocalSpreadsheet( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// The Web API enables users to add a new worksheet to a workbook, specifying the worksheet's type, position, and name. This function provides flexibility in managing workbook structure by allowing detailed control over worksheet addition.
    /// </summary>
    /// <param name="request">Request. <see cref="AddWorksheetToSpreadsheetRequest" /></param>
    public function addWorksheetToSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// The Web API endpoint allows users to delete a specified worksheet from a workbook. This function provides a straightforward way to manage workbook structure by removing unnecessary or redundant worksheets.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetFromSpreadsheetRequest" /></param>
    public function deleteWorksheetFromSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// The Web API endpoint allows users to rename a specified worksheet within a workbook. This function provides a straightforward way to update worksheet names, enhancing workbook organization and readability.
    /// </summary>
    /// <param name="request">Request. <see cref="RenameWorksheetInSpreadsheetRequest" /></param>
    public function renameWorksheetInSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// The Web API endpoint allows users to move a specified worksheet within a workbook. This function provides a straightforward way to move a worksheet, enhancing workbook organization.
    /// </summary>
    /// <param name="request">Request. <see cref="MoveWorksheetInSpreadsheetRequest" /></param>
    public function moveWorksheetInSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// The Web API endpoint allows users to compress a spreadsheet to reduce its file size. This function provides a straightforward way to optimize the storage and performance of spreadsheets by applying a specified compression level.
    /// </summary>
    /// <param name="request">Request. <see cref="CompressSpreadsheetRequest" /></param>
    public function compressSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// The Web API endpoint allows users to repair a spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="RepairSpreadsheetRequest" /></param>
    public function repairSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Get all merged cell area form a remote spreadsheet worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetMergedCellsInRemotedWorksheetRequest" /></param>
    public function getMergedCellsInRemotedWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellArea[]';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get all merged cell area form a local spreadsheet worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetMergedCellsInWorksheetRequest" /></param>
    public function getMergedCellsInWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellArea[]';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="AcceptAllRevisionsRequest" /></param>
    public function acceptAllRevisions( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="AcceptAllRevisionsInRemoteSpreadsheetRequest" /></param>
    public function acceptAllRevisionsInRemoteSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Applies dual-layer password protection to Excel spreadsheets, supporting both open and modify passwords with encryption.
    /// </summary>
    /// <param name="request">Request. <see cref="ProtectSpreadsheetRequest" /></param>
    public function protectSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Removes dual-layer password protection from Excel spreadsheets, supporting both open and modify passwords with encryption.
    /// </summary>
    /// <param name="request">Request. <see cref="UnprotectSpreadsheetRequest" /></param>
    public function unprotectSpreadsheet( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="SpreadsheetDigitalsignatureRequest" /></param>
    public function spreadsheetDigitalsignature( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Get all text items in the remote spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchAllTextItemsInRemoteSpreadsheetRequest" /></param>
    public function searchAllTextItemsInRemoteSpreadsheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SearchResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get all text items in the remote spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchSpreadsheetAllTextItemsRequest" /></param>
    public function searchSpreadsheetAllTextItems( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SearchResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search text in the local spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchSpreadsheetContentRequest" /></param>
    public function searchSpreadsheetContent( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SearchResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search text in the remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchContentInRemoteSpreadsheetRequest" /></param>
    public function searchContentInRemoteSpreadsheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SearchResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search text in the worksheet of remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchContentInRemoteWorksheetRequest" /></param>
    public function searchContentInRemoteWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SearchResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search text in the range of remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchContentInRemoteRangeRequest" /></param>
    public function searchContentInRemoteRange( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SearchResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Replace text in the local spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="ReplaceSpreadsheetContentRequest" /></param>
    public function replaceSpreadsheetContent( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Replace text in the remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="ReplaceContentInRemoteSpreadsheetRequest" /></param>
    public function replaceContentInRemoteSpreadsheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Replace text in the worksheet of remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="ReplaceContentInRemoteWorksheetRequest" /></param>
    public function replaceContentInRemoteWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Replace text in the range of remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="ReplaceContentInRemoteRangeRequest" /></param>
    public function replaceContentInRemoteRange( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search broken links in the local spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchSpreadsheetBrokenLinksRequest" /></param>
    public function searchSpreadsheetBrokenLinks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\BrokenLinksResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search broken links in the remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchBrokenLinksInRemoteSpreadsheetRequest" /></param>
    public function searchBrokenLinksInRemoteSpreadsheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\BrokenLinksResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search broken links in the worksheet of remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchBrokenLinksInRemoteWorksheetRequest" /></param>
    public function searchBrokenLinksInRemoteWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\BrokenLinksResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search broken links in the range of remoted spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="SearchBrokenLinksInRemoteRangeRequest" /></param>
    public function searchBrokenLinksInRemoteRange( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\BrokenLinksResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get the specifications
    /// </summary>
    /// <param name="request">Request. <see cref="SpecRequest" /></param>
    public function spec( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="CodegenSpecRequest" /></param>
    public function codegenSpec( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// The TrimSpreadsheetContent API is designed to process and trim content within a spreadsheet. This API allows users to remove extra spaces, line breaks, or other unnecessary characters from the content of selected cells. It is particularly useful for cleaning up data entries and ensuring consistency in spreadsheet formatting
    /// </summary>
    /// <param name="request">Request. <see cref="TrimCharacterRequest" /></param>
    public function trimCharacter( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Specify changing the text case in a spreadsheet to switch between uppercase, lowercase, capitalizing the first letter of each word, or capitalizing the first letter of a sentence, and adjust the text according to specific needs.
    /// </summary>
    /// <param name="request">Request. <see cref="UpdateWordCaseRequest" /></param>
    public function updateWordCase( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Deletes user-defined characters, predefined symbol sets, or any substring from every cell in the chosen range while preserving formulas, formatting and data-validation.
    /// </summary>
    /// <param name="request">Request. <see cref="RemoveCharactersRequest" /></param>
    public function removeCharacters( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Deletes characters from every cell in the target range by position (first/last N, before/after a substring, or between two delimiters) while preserving formulas, formatting and data-validation.
    /// </summary>
    /// <param name="request">Request. <see cref="RemoveCharactersByPositionRequest" /></param>
    public function removeCharactersByPosition( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Finds and removes repeated substrings inside every cell of the chosen range, using user-defined or preset delimiters, while preserving formulas, formatting and data-validation.
    /// </summary>
    /// <param name="request">Request. <see cref="RemoveDuplicateSubstringsRequest" /></param>
    public function removeDuplicateSubstrings( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Specify appending text to multiple cells at once, allowing you to add prefixes, suffixes, labels, or any specific characters. You can choose the exact position of the text—in the beginning, at the end, or before or after certain characters in the cell.
    /// </summary>
    /// <param name="request">Request. <see cref="AddTextRequest" /></param>
    public function addText( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Indicates converting the numbers stored as text into the correct number format, replacing unwanted characters and line breaks with the desired characters, and converting accented characters to their equivalent characters without accents.
    /// </summary>
    /// <param name="request">Request. <see cref="ConvertTextRequest" /></param>
    public function convertText( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Indicates extracting substrings, text characters, and numbers from a spreadsheet cell into another cell without having to use complex FIND, MIN, LEFT, or RIGHT formulas.
    /// </summary>
    /// <param name="request">Request. <see cref="ExtractTextRequest" /></param>
    public function extractText( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Indicates performing text segmentation on the specified area according to the segmentation method, and outputting to the designated interval.
    /// </summary>
    /// <param name="request">Request. <see cref="SplitTextRequest" /></param>
    public function splitText( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Delete all blank rows that do not contain any data or other objects.
    /// </summary>
    /// <param name="request">Request. <see cref="RemoveSpreadsheetBlankRowsRequest" /></param>
    public function removeSpreadsheetBlankRows( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Delete all blank rows that do not contain any data or other objects.
    /// </summary>
    /// <param name="request">Request. <see cref="RemoveSpreadsheetBlankColumnsRequest" /></param>
    public function removeSpreadsheetBlankColumns( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Delete all blank rows that do not contain any data or other objects.
    /// </summary>
    /// <param name="request">Request. <see cref="RemoveSpreadsheetBlankWorksheetsRequest" /></param>
    public function removeSpreadsheetBlankWorksheets( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Removes duplicate values in the worksheet/range/table.
    /// </summary>
    /// <param name="request">Request. <see cref="RemoveDuplicatesRequest" /></param>
    public function removeDuplicates( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// The Swap Ranges for Excel API provides a powerful tool to move any two columns, rows, ranges, or individual cells within an Excel file. This API allows users to re-arrange their tables quickly and efficiently, ensuring that the original data formatting is preserved and all existing formulas continue to function correctly. By leveraging this API, users can streamline their data manipulation tasks and maintain the integrity of their spreadsheets.
    /// </summary>
    /// <param name="request">Request. <see cref="SwapRangeRequest" /></param>
    public function swapRange( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Transposes a specified data range (rows become columns, columns become rows).
    /// </summary>
    /// <param name="request">Request. <see cref="FlipDataRequest" /></param>
    public function flipData( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Switch rows and columns in the spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="TransposeDataRequest" /></param>
    public function transposeData( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Switch rows and columns in the spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="UnpivotRangeRequest" /></param>
    public function unpivotRange( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Switch rows and columns in the spreadsheet.
    /// </summary>
    /// <param name="request">Request. <see cref="UnpivotTableRequest" /></param>
    public function unpivotTable( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="DownloadFileRequest" /></param>
    public function downloadFile( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="UploadFileRequest" /></param>
    public function uploadFile( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesUploadResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="CopyFileRequest" /></param>
    public function copyFile( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="MoveFileRequest" /></param>
    public function moveFile( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteFileRequest" /></param>
    public function deleteFile( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="GetFilesListRequest" /></param>
    public function getFilesList( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesList';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="CreateFolderRequest" /></param>
    public function createFolder( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="CopyFolderRequest" /></param>
    public function copyFolder( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="MoveFolderRequest" /></param>
    public function moveFolder( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteFolderRequest" /></param>
    public function deleteFolder( $request)
    {
        $this->checkAccessToken();
        $returnType = '';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="StorageExistsRequest" /></param>
    public function storageExists( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\StorageExist';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="ObjectExistsRequest" /></param>
    public function objectExists( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ObjectExist';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="GetDiscUsageRequest" /></param>
    public function getDiscUsage( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\DiscUsage';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="GetFileVersionsRequest" /></param>
    public function getFileVersions( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileVersions';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Perform business analysis of data in Excel files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAnalyzeExcelRequest" /></param>
    public function postAnalyzeExcel( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AnalyzedResult[]';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the description of auto filters from a worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetAutoFilterRequest" /></param>
    public function getWorksheetAutoFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AutoFilterResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Apply a date filter in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetDateFilterRequest" /></param>
    public function putWorksheetDateFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a filter for a column in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetFilterRequest" /></param>
    public function putWorksheetFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add an icon filter in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetIconFilterRequest" /></param>
    public function putWorksheetIconFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Filter a list with custom criteria in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetCustomFilterRequest" /></param>
    public function putWorksheetCustomFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a dynamic filter in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetDynamicFilterRequest" /></param>
    public function putWorksheetDynamicFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Filter the top 10 items in the list in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetFilterTop10Request" /></param>
    public function putWorksheetFilterTop10( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a color filter in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetColorFilterRequest" /></param>
    public function putWorksheetColorFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Match all blank cells in the list.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetMatchBlanksRequest" /></param>
    public function postWorksheetMatchBlanks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Match all not blank cells in the list.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetMatchNonBlanksRequest" /></param>
    public function postWorksheetMatchNonBlanks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Refresh auto filters in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetAutoFilterRefreshRequest" /></param>
    public function postWorksheetAutoFilterRefresh( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Remove a date filter in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetDateFilterRequest" /></param>
    public function deleteWorksheetDateFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a filter for a column in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetFilterRequest" /></param>
    public function deleteWorksheetFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get autoshapes description in worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetAutoshapesRequest" /></param>
    public function getWorksheetAutoshapes( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AutoShapesResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get autoshape description in some format.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetAutoshapeWithFormatRequest" /></param>
    public function getWorksheetAutoshapeWithFormat( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Batch converting files that meet specific matching conditions.
    /// </summary>
    /// <param name="request">Request. <see cref="PostBatchConvertRequest" /></param>
    public function postBatchConvert( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Batch protecting files that meet specific matching conditions.
    /// </summary>
    /// <param name="request">Request. <see cref="PostBatchProtectRequest" /></param>
    public function postBatchProtect( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Batch locking files that meet specific matching conditions.
    /// </summary>
    /// <param name="request">Request. <see cref="PostBatchLockRequest" /></param>
    public function postBatchLock( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Batch unlocking files that meet specific matching conditions.
    /// </summary>
    /// <param name="request">Request. <see cref="PostBatchUnlockRequest" /></param>
    public function postBatchUnlock( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Batch splitting files that meet specific matching conditions.
    /// </summary>
    /// <param name="request">Request. <see cref="PostBatchSplitRequest" /></param>
    public function postBatchSplit( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Clear cell area contents in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostClearContentsRequest" /></param>
    public function postClearContents( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Clear cell formats in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostClearFormatsRequest" /></param>
    public function postClearFormats( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update cell range styles in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUpdateWorksheetRangeStyleRequest" /></param>
    public function postUpdateWorksheetRangeStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Merge cells in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetMergeRequest" /></param>
    public function postWorksheetMerge( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Unmerge cells in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetUnmergeRequest" /></param>
    public function postWorksheetUnmerge( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve cell descriptions in a specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetCellsRequest" /></param>
    public function getWorksheetCells( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve cell data using either cell reference or method name in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetCellRequest" /></param>
    public function getWorksheetCell( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve cell style descriptions in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetCellStyleRequest" /></param>
    public function getWorksheetCellStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\StyleResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set cell value using cell name in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellSetValueRequest" /></param>
    public function postWorksheetCellSetValue( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set cell style using cell name in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUpdateWorksheetCellStyleRequest" /></param>
    public function postUpdateWorksheetCellStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set the value of the range in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostSetCellRangeValueRequest" /></param>
    public function postSetCellRangeValue( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Copy data from a source cell to a destination cell in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostCopyCellIntoCellRequest" /></param>
    public function postCopyCellIntoCell( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the HTML string containing data and specific formats in this cell.
    /// </summary>
    /// <param name="request">Request. <see cref="GetCellHtmlStringRequest" /></param>
    public function getCellHtmlString( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set the HTML string containing data and specific formats in this cell.
    /// </summary>
    /// <param name="request">Request. <see cref="PostSetCellHtmlStringRequest" /></param>
    public function postSetCellHtmlString( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Calculate cell formula in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostCellCalculateRequest" /></param>
    public function postCellCalculate( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set cell characters in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostCellCharactersRequest" /></param>
    public function postCellCharacters( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of worksheet columns.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetColumnsRequest" /></param>
    public function getWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ColumnsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set worksheet column width.
    /// </summary>
    /// <param name="request">Request. <see cref="PostSetWorksheetColumnWidthRequest" /></param>
    public function postSetWorksheetColumnWidth( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve worksheet column data by column index.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetColumnRequest" /></param>
    public function getWorksheetColumn( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ColumnResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Insert worksheet columns in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutInsertWorksheetColumnsRequest" /></param>
    public function putInsertWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete worksheet columns in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetColumnsRequest" /></param>
    public function deleteWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Hide worksheet columns in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostHideWorksheetColumnsRequest" /></param>
    public function postHideWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Unhide worksheet columns in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUnhideWorksheetColumnsRequest" /></param>
    public function postUnhideWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Group worksheet columns in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostGroupWorksheetColumnsRequest" /></param>
    public function postGroupWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Ungroup worksheet columns.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUngroupWorksheetColumnsRequest" /></param>
    public function postUngroupWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Copy data from source columns to destination columns in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostCopyWorksheetColumnsRequest" /></param>
    public function postCopyWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set column style in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostColumnStyleRequest" /></param>
    public function postColumnStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetRowsRequest" /></param>
    public function getWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\RowsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve row data by the row's index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetRowRequest" /></param>
    public function getWorksheetRow( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\RowResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a row in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetRowRequest" /></param>
    public function deleteWorksheetRow( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete several rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetRowsRequest" /></param>
    public function deleteWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Insert several new rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutInsertWorksheetRowsRequest" /></param>
    public function putInsertWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Insert a new row in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutInsertWorksheetRowRequest" /></param>
    public function putInsertWorksheetRow( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update height of rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUpdateWorksheetRowRequest" /></param>
    public function postUpdateWorksheetRow( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Hide rows in worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostHideWorksheetRowsRequest" /></param>
    public function postHideWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Unhide rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUnhideWorksheetRowsRequest" /></param>
    public function postUnhideWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Group rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostGroupWorksheetRowsRequest" /></param>
    public function postGroupWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Ungroup rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUngroupWorksheetRowsRequest" /></param>
    public function postUngroupWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Copy data and formats from specific entire rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostCopyWorksheetRowsRequest" /></param>
    public function postCopyWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Apply formats to an entire row in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostRowStyleRequest" /></param>
    public function postRowStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve cell descriptions in a specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="GetCellsCloudServicesHealthCheckRequest" /></param>
    public function getCellsCloudServicesHealthCheck( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Aspose.Cells Cloud service health status check.
    /// </summary>
    /// <param name="request">Request. <see cref="GetCellsCloudServiceStatusRequest" /></param>
    public function getCellsCloudServiceStatus( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve chart area description in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetChartAreaRequest" /></param>
    public function getChartArea( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ChartAreaResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve chart area fill format description in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetChartAreaFillFormatRequest" /></param>
    public function getChartAreaFillFormat( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FillFormatResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve chart area border description.
    /// </summary>
    /// <param name="request">Request. <see cref="GetChartAreaBorderRequest" /></param>
    public function getChartAreaBorder( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\LineResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of charts in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetChartsRequest" /></param>
    public function getWorksheetCharts( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ChartsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the chart in a specified format.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetChartRequest" /></param>
    public function getWorksheetChart( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Add a new chart in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetChartRequest" /></param>
    public function putWorksheetChart( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a chart by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetChartRequest" /></param>
    public function deleteWorksheetChart( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update chart properties in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetChartRequest" /></param>
    public function postWorksheetChart( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve chart legend description in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetChartLegendRequest" /></param>
    public function getWorksheetChartLegend( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\LegendResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update chart legend in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetChartLegendRequest" /></param>
    public function postWorksheetChartLegend( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Show chart legend in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetChartLegendRequest" /></param>
    public function putWorksheetChartLegend( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Hides chart legend in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetChartLegendRequest" /></param>
    public function deleteWorksheetChartLegend( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Clear the charts in the worksheets.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetChartsRequest" /></param>
    public function deleteWorksheetCharts( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve chart title description in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetChartTitleRequest" /></param>
    public function getWorksheetChartTitle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\TitleResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update chart title in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetChartTitleRequest" /></param>
    public function postWorksheetChartTitle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set chart title in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetChartTitleRequest" /></param>
    public function putWorksheetChartTitle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Hide chart title in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetChartTitleRequest" /></param>
    public function deleteWorksheetChartTitle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of chart seriesaxis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="GetChartSeriesAxisRequest" /></param>
    public function getChartSeriesAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AxisResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of chart series axis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="GetChartCategoryAxisRequest" /></param>
    public function getChartCategoryAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AxisResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve chart value axis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="GetChartValueAxisRequest" /></param>
    public function getChartValueAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AxisResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve chart second category axis in the chart
    /// </summary>
    /// <param name="request">Request. <see cref="GetChartSecondCategoryAxisRequest" /></param>
    public function getChartSecondCategoryAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AxisResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve chart second value axis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="GetChartSecondValueAxisRequest" /></param>
    public function getChartSecondValueAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\AxisResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update chart series axis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="PostChartSeriesAxisRequest" /></param>
    public function postChartSeriesAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update chart category axis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="PostChartCategoryAxisRequest" /></param>
    public function postChartCategoryAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update chart value axis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="PostChartValueAxisRequest" /></param>
    public function postChartValueAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update chart sencond category axis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="PostChartSecondCategoryAxisRequest" /></param>
    public function postChartSecondCategoryAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update chart sencond value axis in the chart.
    /// </summary>
    /// <param name="request">Request. <see cref="PostChartSecondValueAxisRequest" /></param>
    public function postChartSecondValueAxis( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of conditional formattings in a worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetConditionalFormattingsRequest" /></param>
    public function getWorksheetConditionalFormattings( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ConditionalFormattingsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve conditional formatting descriptions in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetConditionalFormattingRequest" /></param>
    public function getWorksheetConditionalFormatting( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ConditionalFormattingResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add conditional formatting in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetConditionalFormattingRequest" /></param>
    public function putWorksheetConditionalFormatting( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a format condition in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetFormatConditionRequest" /></param>
    public function putWorksheetFormatCondition( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a cell area for the format condition in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetFormatConditionAreaRequest" /></param>
    public function putWorksheetFormatConditionArea( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a condition for the format condition in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetFormatConditionConditionRequest" /></param>
    public function putWorksheetFormatConditionCondition( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Clear all conditional formattings in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetConditionalFormattingsRequest" /></param>
    public function deleteWorksheetConditionalFormattings( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Remove a conditional formatting.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetConditionalFormattingRequest" /></param>
    public function deleteWorksheetConditionalFormatting( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Remove cell area from conditional formatting.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetConditionalFormattingAreaRequest" /></param>
    public function deleteWorksheetConditionalFormattingArea( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve workbooks in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorkbookRequest" /></param>
    public function getWorkbook( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Convert the workbook from the requested content into files in different formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PutConvertWorkbookRequest" /></param>
    public function putConvertWorkbook( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Save an Excel file in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookSaveAsRequest" /></param>
    public function postWorkbookSaveAs( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SaveResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to PDF files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToPDFRequest" /></param>
    public function postConvertWorkbookToPDF( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to PNG files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToPNGRequest" /></param>
    public function postConvertWorkbookToPNG( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to Docx files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToDocxRequest" /></param>
    public function postConvertWorkbookToDocx( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to Pptx files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToPptxRequest" /></param>
    public function postConvertWorkbookToPptx( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to HTML files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToHtmlRequest" /></param>
    public function postConvertWorkbookToHtml( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to Markdown files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToMarkdownRequest" /></param>
    public function postConvertWorkbookToMarkdown( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to Json files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToJsonRequest" /></param>
    public function postConvertWorkbookToJson( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to SQL Script files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToSQLRequest" /></param>
    public function postConvertWorkbookToSQL( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert Excel file to Csv files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookToCSVRequest" /></param>
    public function postConvertWorkbookToCSV( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorksheetToImageRequest" /></param>
    public function postConvertWorksheetToImage( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookRequest" /></param>
    public function postConvertWorkbook( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Export Excel internal elements or the workbook itself to various format files.
    /// </summary>
    /// <param name="request">Request. <see cref="CheckWrokbookExternalReferenceRequest" /></param>
    public function checkWrokbookExternalReference( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CheckedExternalReferenceResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="CheckWorkbookFormulaErrorsRequest" /></param>
    public function checkWorkbookFormulaErrors( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CheckedFormulaErrorsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Export Excel internal elements or the workbook itself to various format files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostExportRequest" /></param>
    public function postExport( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Export XML data from an Excel file.
    /// When there are XML Maps in an Excel file, export XML data. When there is no XML map in the Excel file, convert the Excel file to an XML file.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookExportXMLRequest" /></param>
    public function postWorkbookExportXML( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Import a JSON data file into the workbook. The JSON data file can either be a cloud file or data from an HTTP URI.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookImportJsonRequest" /></param>
    public function postWorkbookImportJson( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Import an XML data file into an Excel file. The XML data file can either be a cloud file or data from an HTTP URI.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookImportXMLRequest" /></param>
    public function postWorkbookImportXML( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Import data into the Excel file.
    /// </summary>
    /// <param name="request">Request. <see cref="PostImportDataRequest" /></param>
    public function postImportData( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Data cleaning of spreadsheet files is a data management process used to identify, correct, and remove errors, incompleteness, duplicates, or inaccuracies in tables and ranges.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookDataCleansingRequest" /></param>
    public function postWorkbookDataCleansing( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Data cleansing of spreadsheet files is a data management process used to identify, correct, and remove errors, incompleteness, duplicates, or inaccuracies in tables and ranges.
    /// </summary>
    /// <param name="request">Request. <see cref="PostDataCleansingRequest" /></param>
    public function postDataCleansing( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Data deduplication of spreadsheet files is mainly used to eliminate duplicate data in tables and ranges.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookDataDeduplicationRequest" /></param>
    public function postWorkbookDataDeduplication( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Data deduplication of spreadsheet files is mainly used to eliminate duplicate data in tables and ranges.
    /// </summary>
    /// <param name="request">Request. <see cref="PostDataDeduplicationRequest" /></param>
    public function postDataDeduplication( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Data filling for spreadsheet files is primarily used to fill empty data in tables and ranges.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookDataFillRequest" /></param>
    public function postWorkbookDataFill( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Data filling for spreadsheet files is primarily used to fill empty data in tables and ranges.
    /// </summary>
    /// <param name="request">Request. <see cref="PostDataFillRequest" /></param>
    public function postDataFill( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Deleting incomplete rows of spreadsheet files is mainly used to eliminate incomplete rows in tables and ranges.
    /// </summary>
    /// <param name="request">Request. <see cref="PostDeleteIncompleteRowsRequest" /></param>
    public function postDeleteIncompleteRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Transform spreadsheet data is mainly used to pivot columns, unpivot columns.
    /// </summary>
    /// <param name="request">Request. <see cref="PostDataTransformationRequest" /></param>
    public function postDataTransformation( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of hyperlinks in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetHyperlinksRequest" /></param>
    public function getWorksheetHyperlinks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\HyperlinksResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve hyperlink description by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetHyperlinkRequest" /></param>
    public function getWorksheetHyperlink( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\HyperlinkResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete hyperlink by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetHyperlinkRequest" /></param>
    public function deleteWorksheetHyperlink( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update hyperlink by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetHyperlinkRequest" /></param>
    public function postWorksheetHyperlink( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add hyperlink in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetHyperlinkRequest" /></param>
    public function putWorksheetHyperlink( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete all hyperlinks in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetHyperlinksRequest" /></param>
    public function deleteWorksheetHyperlinks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Assemble data files with template files to generate files in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAssembleRequest" /></param>
    public function postAssemble( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Compress files and generate target files in various formats, supported file formats are include Xls, Xlsx, Xlsm, Xlsb, Ods and more.
    /// </summary>
    /// <param name="request">Request. <see cref="PostCompressRequest" /></param>
    public function postCompress( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Merge cells in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostMergeRequest" /></param>
    public function postMerge( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Split Excel spreadsheet files based on worksheets and create output files in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostSplitRequest" /></param>
    public function postSplit( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search for specified text within Excel files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostSearchRequest" /></param>
    public function postSearch( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\TextItem[]';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Replace specified text with new text in Excel files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostReplaceRequest" /></param>
    public function postReplace( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Import data into an Excel file and generate output files in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostImportRequest" /></param>
    public function postImport( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add Text Watermark to Excel files and generate output files in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWatermarkRequest" /></param>
    public function postWatermark( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Clear internal elements in Excel files and generate output files in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostClearObjectsRequest" /></param>
    public function postClearObjects( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Reverse rows or columns in Excel files and create output files in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostReverseRequest" /></param>
    public function postReverse( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Repair abnormal files and generate files in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostRepairRequest" /></param>
    public function postRepair( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Rotate rows, columns, or other objects in Excel files and save them in various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostRotateRequest" /></param>
    public function postRotate( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update document properties in Excel file, and save them is various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="PostMetadataRequest" /></param>
    public function postMetadata( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get cells document properties.
    /// </summary>
    /// <param name="request">Request. <see cref="GetMetadataRequest" /></param>
    public function getMetadata( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsDocumentProperty[]';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete cells document properties in Excel file, and save them is various formats.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteMetadataRequest" /></param>
    public function deleteMetadata( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of ListObjects in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetListObjectsRequest" /></param>
    public function getWorksheetListObjects( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ListObjectsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve list object description by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetListObjectRequest" /></param>
    public function getWorksheetListObject( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Add a ListObject in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetListObjectRequest" /></param>
    public function putWorksheetListObject( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete ListObjects in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetListObjectsRequest" /></param>
    public function deleteWorksheetListObjects( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete list object by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetListObjectRequest" /></param>
    public function deleteWorksheetListObject( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update list object by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetListObjectRequest" /></param>
    public function postWorksheetListObject( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Convert list object to range in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetListObjectConvertToRangeRequest" /></param>
    public function postWorksheetListObjectConvertToRange( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Create a pivot table with a list object in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetListObjectSummarizeWithPivotTableRequest" /></param>
    public function postWorksheetListObjectSummarizeWithPivotTable( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Sort list object in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetListObjectSortTableRequest" /></param>
    public function postWorksheetListObjectSortTable( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Remove duplicates in list object.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetListObjectRemoveDuplicatesRequest" /></param>
    public function postWorksheetListObjectRemoveDuplicates( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Insert slicer for list object.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetListObjectInsertSlicerRequest" /></param>
    public function postWorksheetListObjectInsertSlicer( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update list column in list object.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetListColumnRequest" /></param>
    public function postWorksheetListColumn( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update total of list columns in the table.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetListColumnsTotalRequest" /></param>
    public function postWorksheetListColumnsTotal( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of OLE objects in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetOleObjectsRequest" /></param>
    public function getWorksheetOleObjects( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\OleObjectsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the OLE object in a specified format in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetOleObjectRequest" /></param>
    public function getWorksheetOleObject( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Delete all OLE objects in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetOleObjectsRequest" /></param>
    public function deleteWorksheetOleObjects( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete an OLE object in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetOleObjectRequest" /></param>
    public function deleteWorksheetOleObject( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update an OLE object in worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUpdateWorksheetOleObjectRequest" /></param>
    public function postUpdateWorksheetOleObject( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add an OLE object in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetOleObjectRequest" /></param>
    public function putWorksheetOleObject( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of vertical page breaks in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetVerticalPageBreaksRequest" /></param>
    public function getVerticalPageBreaks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\VerticalPageBreaksResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of horizontal page breaks in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetHorizontalPageBreaksRequest" /></param>
    public function getHorizontalPageBreaks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\HorizontalPageBreaksResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve a vertical page break description in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetVerticalPageBreakRequest" /></param>
    public function getVerticalPageBreak( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\VerticalPageBreakResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve a horizontal page break descripton in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetHorizontalPageBreakRequest" /></param>
    public function getHorizontalPageBreak( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\HorizontalPageBreakResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a vertical page break in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutVerticalPageBreakRequest" /></param>
    public function putVerticalPageBreak( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a horizontal page breaks in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutHorizontalPageBreakRequest" /></param>
    public function putHorizontalPageBreak( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete vertical page breaks in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteVerticalPageBreaksRequest" /></param>
    public function deleteVerticalPageBreaks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete horizontal page breaks in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteHorizontalPageBreaksRequest" /></param>
    public function deleteHorizontalPageBreaks( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a vertical page break in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteVerticalPageBreakRequest" /></param>
    public function deleteVerticalPageBreak( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a horizontal page break in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteHorizontalPageBreakRequest" /></param>
    public function deleteHorizontalPageBreak( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve page setup description in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetPageSetupRequest" /></param>
    public function getPageSetup( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PageSetupResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update page setup in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostPageSetupRequest" /></param>
    public function postPageSetup( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Clear header and footer in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteHeaderFooterRequest" /></param>
    public function deleteHeaderFooter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve page header description in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetHeaderRequest" /></param>
    public function getHeader( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PageSectionsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update page header in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostHeaderRequest" /></param>
    public function postHeader( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve page footer description in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetFooterRequest" /></param>
    public function getFooter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PageSectionsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update page footer in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostFooterRequest" /></param>
    public function postFooter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set the scale at which the page will fit wide when printed on the sheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostFitWideToPagesRequest" /></param>
    public function postFitWideToPages( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set the scale at which the page will fit tall when printed on the sheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostFitTallToPagesRequest" /></param>
    public function postFitTallToPages( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of pictures in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetPicturesRequest" /></param>
    public function getWorksheetPictures( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PicturesResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve a picture by number in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetPictureWithFormatRequest" /></param>
    public function getWorksheetPictureWithFormat( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Add a new picture in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetAddPictureRequest" /></param>
    public function putWorksheetAddPicture( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// add new picture in the cells.
    /// </summary>
    /// <param name="request">Request. <see cref="AddPictureInCellRequest" /></param>
    public function addPictureInCell( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update a picture by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetPictureRequest" /></param>
    public function postWorksheetPicture( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a picture object by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetPictureRequest" /></param>
    public function deleteWorksheetPicture( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete all pictures in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetPicturesRequest" /></param>
    public function deleteWorksheetPictures( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of pivottables  in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetPivotTablesRequest" /></param>
    public function getWorksheetPivotTables( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PivotTablesResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve PivotTable information by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetPivotTableRequest" /></param>
    public function getWorksheetPivotTable( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PivotTableResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of pivot fields in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="GetPivotTableFieldRequest" /></param>
    public function getPivotTableField( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PivotFieldResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Gets PivotTable filters in worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetPivotTableFiltersRequest" /></param>
    public function getWorksheetPivotTableFilters( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PivotFiltersResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve PivotTable filters in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetPivotTableFilterRequest" /></param>
    public function getWorksheetPivotTableFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\PivotFilterResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a PivotTable in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetPivotTableRequest" /></param>
    public function putWorksheetPivotTable( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a pivot field in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="PutPivotTableFieldRequest" /></param>
    public function putPivotTableField( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a pivot filter to the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetPivotTableFilterRequest" /></param>
    public function putWorksheetPivotTableFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Hide a pivot field item in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="PostPivotTableFieldHideItemRequest" /></param>
    public function postPivotTableFieldHideItem( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Move a pivot field in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="PostPivotTableFieldMoveToRequest" /></param>
    public function postPivotTableFieldMoveTo( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update cell style in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="PostPivotTableCellStyleRequest" /></param>
    public function postPivotTableCellStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update style in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="PostPivotTableStyleRequest" /></param>
    public function postPivotTableStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update pivot fields in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="PostPivotTableUpdatePivotFieldsRequest" /></param>
    public function postPivotTableUpdatePivotFields( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update pivot field in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="PostPivotTableUpdatePivotFieldRequest" /></param>
    public function postPivotTableUpdatePivotField( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Calculate pivottable's data to cells.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetPivotTableCalculateRequest" /></param>
    public function postWorksheetPivotTableCalculate( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Move PivotTable in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetPivotTableMoveRequest" /></param>
    public function postWorksheetPivotTableMove( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete PivotTables in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetPivotTablesRequest" /></param>
    public function deleteWorksheetPivotTables( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete PivotTable by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetPivotTableRequest" /></param>
    public function deleteWorksheetPivotTable( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a pivot field in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="DeletePivotTableFieldRequest" /></param>
    public function deletePivotTableField( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete all pivot filters in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetPivotTableFiltersRequest" /></param>
    public function deleteWorksheetPivotTableFilters( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a pivot filter in the PivotTable.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetPivotTableFilterRequest" /></param>
    public function deleteWorksheetPivotTableFilter( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of Excel file properties.
    /// </summary>
    /// <param name="request">Request. <see cref="GetDocumentPropertiesRequest" /></param>
    public function getDocumentProperties( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsDocumentPropertiesResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set or add an Excel property.
    /// </summary>
    /// <param name="request">Request. <see cref="PutDocumentPropertyRequest" /></param>
    public function putDocumentProperty( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get Excel property by name.
    /// </summary>
    /// <param name="request">Request. <see cref="GetDocumentPropertyRequest" /></param>
    public function getDocumentProperty( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsDocumentPropertyResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete an Excel property.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteDocumentPropertyRequest" /></param>
    public function deleteDocumentProperty( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete all custom document properties and reset built-in ones.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteDocumentPropertiesRequest" /></param>
    public function deleteDocumentProperties( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Excel file digital signature.
    /// </summary>
    /// <param name="request">Request. <see cref="PostDigitalSignatureRequest" /></param>
    public function postDigitalSignature( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Excel Encryption.
    /// </summary>
    /// <param name="request">Request. <see cref="PostEncryptWorkbookRequest" /></param>
    public function postEncryptWorkbook( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Excel files decryption.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteDecryptWorkbookRequest" /></param>
    public function deleteDecryptWorkbook( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Excel protection.
    /// </summary>
    /// <param name="request">Request. <see cref="PostProtectWorkbookRequest" /></param>
    public function postProtectWorkbook( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Excel unprotection.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteUnProtectWorkbookRequest" /></param>
    public function deleteUnProtectWorkbook( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Excel file write protection.
    /// </summary>
    /// <param name="request">Request. <see cref="PutDocumentProtectFromChangesRequest" /></param>
    public function putDocumentProtectFromChanges( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Excel file cancel write protection.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteDocumentUnProtectFromChangesRequest" /></param>
    public function deleteDocumentUnProtectFromChanges( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Unlock Excel files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUnlockRequest" /></param>
    public function postUnlock( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Lock Excel files.
    /// </summary>
    /// <param name="request">Request. <see cref="PostLockRequest" /></param>
    public function postLock( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Excel files encryption.
    /// </summary>
    /// <param name="request">Request. <see cref="PostProtectRequest" /></param>
    public function postProtect( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FilesResult';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Copy content from the source range to the destination range in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangesCopyRequest" /></param>
    public function postWorksheetCellsRangesCopy( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Merge a range of cells into a single cell.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeMergeRequest" /></param>
    public function postWorksheetCellsRangeMerge( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Unmerge merged cells within this range.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeUnMergeRequest" /></param>
    public function postWorksheetCellsRangeUnMerge( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set the style for the specified range.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeStyleRequest" /></param>
    public function postWorksheetCellsRangeStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the values of cells within the specified range.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetCellsRangeValueRequest" /></param>
    public function getWorksheetCellsRangeValue( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\RangeValueResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Assign a value to the range; if necessary, the value will be converted to another data type, and the cell's number format will be reset.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeValueRequest" /></param>
    public function postWorksheetCellsRangeValue( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Move the current range to the destination range.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeMoveToRequest" /></param>
    public function postWorksheetCellsRangeMoveTo( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Perform data sorting around a range of cells.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeSortRequest" /></param>
    public function postWorksheetCellsRangeSort( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Apply an outline border around a range of cells.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeOutlineBorderRequest" /></param>
    public function postWorksheetCellsRangeOutlineBorder( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set the column width of the specified range.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeColumnWidthRequest" /></param>
    public function postWorksheetCellsRangeColumnWidth( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Sets row height of range.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeRowHeightRequest" /></param>
    public function postWorksheetCellsRangeRowHeight( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCellsRangeToImageRequest" /></param>
    public function postWorksheetCellsRangeToImage( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Insert a range of cells and shift existing cells based on the specified shift option.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetCellsRangeRequest" /></param>
    public function putWorksheetCellsRange( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a range of cells and shift existing cells based on the specified shift option.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetCellsRangeRequest" /></param>
    public function deleteWorksheetCellsRange( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of shapes in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetShapesRequest" /></param>
    public function getWorksheetShapes( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ShapesResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve description of shape in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetShapeRequest" /></param>
    public function getWorksheetShape( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ShapeResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a shape in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetShapeRequest" /></param>
    public function putWorksheetShape( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete all shapes in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetShapesRequest" /></param>
    public function deleteWorksheetShapes( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a shape in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetShapeRequest" /></param>
    public function deleteWorksheetShape( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update a shape in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetShapeRequest" /></param>
    public function postWorksheetShape( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Group shapes in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetGroupShapeRequest" /></param>
    public function postWorksheetGroupShape( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Ungroup shapes in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetUngroupShapeRequest" /></param>
    public function postWorksheetUngroupShape( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of sparkline groups in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetSparklineGroupsRequest" /></param>
    public function getWorksheetSparklineGroups( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SparklineGroupsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve description of a sparkline group in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetSparklineGroupRequest" /></param>
    public function getWorksheetSparklineGroup( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SparklineGroupResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete sparkline groups in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetSparklineGroupsRequest" /></param>
    public function deleteWorksheetSparklineGroups( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a sparkline group in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetSparklineGroupRequest" /></param>
    public function deleteWorksheetSparklineGroup( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a sparkline group in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetSparklineGroupRequest" /></param>
    public function putWorksheetSparklineGroup( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update a sparkline group in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetSparklineGroupRequest" /></param>
    public function postWorksheetSparklineGroup( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostCharacterCountRequest" /></param>
    public function postCharacterCount( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostWordsCountRequest" /></param>
    public function postWordsCount( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSpecifyWordsCountRequest" /></param>
    public function postSpecifyWordsCount( $request)
    {
        $this->checkAccessToken();
        $returnType = 'string';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Run tasks.
    /// </summary>
    /// <param name="request">Request. <see cref="PostRunTaskRequest" /></param>
    public function postRunTask( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Adds text content to a specified location within a document. It requires an object that defines the text to be added and the insertion location.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAddTextContentRequest" /></param>
    public function postAddTextContent( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// The PostTrimContent API is designed to process and trim content within a specified range in a spreadsheet. This API allows users to remove extra spaces, line breaks, or other unnecessary characters from the content of selected cells. It is particularly useful for cleaning up data entries and ensuring consistency in spreadsheet formatting
    /// </summary>
    /// <param name="request">Request. <see cref="PostTrimContentRequest" /></param>
    public function postTrimContent( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Managing inconsistent text case in spreadsheets (Excel, Google Sheets, CSV) can be frustrating, especially with large datasets. The PostUpdateWordCase WEB API solves this by automating text case conversions, ensuring clean and standardized data.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUpdateWordCaseRequest" /></param>
    public function postUpdateWordCase( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// A comprehensive set of tools for cleaning text content within selected cells. It allows users to remove specific characters, character sets, and substrings, ensuring that the text is standardized and free from unwanted symbols or sequences.
    /// </summary>
    /// <param name="request">Request. <see cref="PostRemoveCharactersRequest" /></param>
    public function postRemoveCharacters( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Enhance Excel data through essential text conversions: convert text to numbers, replace characters and line breaks, and remove accents.
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertTextRequest" /></param>
    public function postConvertText( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Efficiently remove duplicate substrings from Excel cells. Select a range, specify delimiters, and apply options to eliminate repeated text segments.
    /// </summary>
    /// <param name="request">Request. <see cref="PostRemoveDuplicatesRequest" /></param>
    public function postRemoveDuplicates( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Effortlessly extract text and numbers from Excel cells with precise options. This API allows extraction of first/last characters, text between delimiters, and numbers from strings, with output as static values or formulas.
    /// </summary>
    /// <param name="request">Request. <see cref="PostExtractTextRequest" /></param>
    public function postExtractText( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Efficiently divides Excel cell content into columns or rows based on specified delimiters or patterns. Supports Character-based splitting, Custom string splitting, Mask and wildcard splitting for pattern-based division, Line break division, Column or row splitting, Delimiter removal or retention.
    /// </summary>
    /// <param name="request">Request. <see cref="PostSplitTextRequest" /></param>
    public function postSplitText( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\FileInfo';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the description of the default style for the workbook .
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorkbookDefaultStyleRequest" /></param>
    public function getWorkbookDefaultStyle( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\StyleResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve text items in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorkbookTextItemsRequest" /></param>
    public function getWorkbookTextItems( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\TextItemsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve named ranges in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorkbookNamesRequest" /></param>
    public function getWorkbookNames( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\NamesResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Define a new name in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorkbookNameRequest" /></param>
    public function putWorkbookName( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve description of a named range in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorkbookNameRequest" /></param>
    public function getWorkbookName( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\NameResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update a named range in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookNameRequest" /></param>
    public function postWorkbookName( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the value of a named range in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorkbookNameValueRequest" /></param>
    public function getWorkbookNameValue( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\RangeValueResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete all named ranges in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorkbookNamesRequest" /></param>
    public function deleteWorkbookNames( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a named range in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorkbookNameRequest" /></param>
    public function deleteWorkbookName( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Merge a workbook into the existing workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbooksMergeRequest" /></param>
    public function postWorkbooksMerge( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\WorkbookResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search for text in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbooksTextSearchRequest" /></param>
    public function postWorkbooksTextSearch( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\TextItemsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Replace text in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookTextReplaceRequest" /></param>
    public function postWorkbookTextReplace( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\WorkbookReplaceResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Smart marker processing.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookGetSmartMarkerResultRequest" /></param>
    public function postWorkbookGetSmartMarkerResult( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Create a new workbook using different methods.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorkbookCreateRequest" /></param>
    public function putWorkbookCreate( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Split the workbook with a specific format.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookSplitRequest" /></param>
    public function postWorkbookSplit( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SplitResultResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Calculate all formulas in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookCalculateFormulaRequest" /></param>
    public function postWorkbookCalculateFormula( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Autofit rows in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAutofitWorkbookRowsRequest" /></param>
    public function postAutofitWorkbookRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Autofit columns in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAutofitWorkbookColumnsRequest" /></param>
    public function postAutofitWorkbookColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of workbook settings.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorkbookSettingsRequest" /></param>
    public function getWorkbookSettings( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\WorkbookSettingsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update setting in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorkbookSettingsRequest" /></param>
    public function postWorkbookSettings( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set background in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorkbookBackgroundRequest" /></param>
    public function putWorkbookBackground( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete background in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorkbookBackgroundRequest" /></param>
    public function deleteWorkbookBackground( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set water marker in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorkbookWaterMarkerRequest" /></param>
    public function putWorkbookWaterMarker( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get page count in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="GetPageCountRequest" /></param>
    public function getPageCount( $request)
    {
        $this->checkAccessToken();
        $returnType = 'int';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get all style in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="GetAllStylesRequest" /></param>
    public function getAllStyles( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\StylesResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the description of worksheets from a workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetsRequest" /></param>
    public function getWorksheets( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\WorksheetsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the worksheet in a specified format from the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetWithFormatRequest" /></param>
    public function getWorksheetWithFormat( $request , $localOutPath = null)
    {
        $this->checkAccessToken();
        $returnType = '\SplFileObject';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        if ($localOutPath === null) {  
                return  $response;
            }else{
                copy($response->getPathname(),$localOutPath);
                return $localOutPath;
            }}

    /// <summary>
    /// Change worksheet visibility in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PutChangeVisibilityWorksheetRequest" /></param>
    public function putChangeVisibilityWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set active worksheet index in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PutActiveWorksheetRequest" /></param>
    public function putActiveWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Insert a new worksheet in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PutInsertNewWorksheetRequest" /></param>
    public function putInsertNewWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a new worksheet in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PutAddNewWorksheetRequest" /></param>
    public function putAddNewWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a worksheet in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetRequest" /></param>
    public function deleteWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete matched worksheets in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetsRequest" /></param>
    public function deleteWorksheets( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Move worksheet in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostMoveWorksheetRequest" /></param>
    public function postMoveWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Protect worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutProtectWorksheetRequest" /></param>
    public function putProtectWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Unprotect worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteUnprotectWorksheetRequest" /></param>
    public function deleteUnprotectWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve text items in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetTextItemsRequest" /></param>
    public function getWorksheetTextItems( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\TextItemsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the description of comments in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetCommentsRequest" /></param>
    public function getWorksheetComments( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CommentsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve the description of comment in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetCommentRequest" /></param>
    public function getWorksheetComment( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CommentResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add cell comment in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetCommentRequest" /></param>
    public function putWorksheetComment( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CommentResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update cell comment in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCommentRequest" /></param>
    public function postWorksheetComment( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete cell comment in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetCommentRequest" /></param>
    public function deleteWorksheetComment( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete all comments in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetCommentsRequest" /></param>
    public function deleteWorksheetComments( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get worksheet merged cells.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetMergedCellsRequest" /></param>
    public function getWorksheetMergedCells( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\MergedCellsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve description of a merged cell by its index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetMergedCellRequest" /></param>
    public function getWorksheetMergedCell( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\MergedCellResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Calculate formula in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetCalculateFormulaRequest" /></param>
    public function getWorksheetCalculateFormula( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SingleValueResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Calculate formula in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetCalculateFormulaRequest" /></param>
    public function postWorksheetCalculateFormula( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\SingleValueResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Search for text in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetTextSearchRequest" /></param>
    public function postWorksheetTextSearch( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\TextItemsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Replace old text with new text in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetTextReplaceRequest" /></param>
    public function postWorksheetTextReplace( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\WorksheetReplaceResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Sort a range in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetRangeSortRequest" /></param>
    public function postWorksheetRangeSort( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Autofit a row in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAutofitWorksheetRowRequest" /></param>
    public function postAutofitWorksheetRow( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Autofit rows in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAutofitWorksheetRowsRequest" /></param>
    public function postAutofitWorksheetRows( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Autofit columns in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostAutofitWorksheetColumnsRequest" /></param>
    public function postAutofitWorksheetColumns( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set background image in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetBackgroundRequest" /></param>
    public function putWorksheetBackground( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete background image in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetBackgroundRequest" /></param>
    public function deleteWorksheetBackground( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Set freeze panes in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetFreezePanesRequest" /></param>
    public function putWorksheetFreezePanes( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Unfreeze panes in worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetFreezePanesRequest" /></param>
    public function deleteWorksheetFreezePanes( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Copy contents and formats from another worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostCopyWorksheetRequest" /></param>
    public function postCopyWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Rename worksheet in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostRenameWorksheetRequest" /></param>
    public function postRenameWorksheet( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update worksheet properties in the workbook.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUpdateWorksheetPropertyRequest" /></param>
    public function postUpdateWorksheetProperty( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of ranges in the worksheets.
    /// </summary>
    /// <param name="request">Request. <see cref="GetNamedRangesRequest" /></param>
    public function getNamedRanges( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\RangesResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve values in range.
    /// </summary>
    /// <param name="request">Request. <see cref="GetNamedRangeValueRequest" /></param>
    public function getNamedRangeValue( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\RangeValueResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update the scaling percentage in the worksheet. It should be between 10 and 400.
    /// </summary>
    /// <param name="request">Request. <see cref="PostUpdateWorksheetZoomRequest" /></param>
    public function postUpdateWorksheetZoom( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Get page count in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetPageCountRequest" /></param>
    public function getWorksheetPageCount( $request)
    {
        $this->checkAccessToken();
        $returnType = 'int';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve descriptions of validations in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetValidationsRequest" /></param>
    public function getWorksheetValidations( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ValidationsResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Retrieve a validation by its index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="GetWorksheetValidationRequest" /></param>
    public function getWorksheetValidation( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\ValidationResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Add a validation at index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PutWorksheetValidationRequest" /></param>
    public function putWorksheetValidation( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Update a validation by index in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="PostWorksheetValidationRequest" /></param>
    public function postWorksheetValidation( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete a validation by index in worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetValidationRequest" /></param>
    public function deleteWorksheetValidation( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    /// <summary>
    /// Delete all validations in the worksheet.
    /// </summary>
    /// <param name="request">Request. <see cref="DeleteWorksheetValidationsRequest" /></param>
    public function deleteWorksheetValidations( $request)
    {
        $this->checkAccessToken();
        $returnType = '\Aspose\Cells\Cloud\Model\CellsCloudResponse';
        $requesData = $request->createHttpRequest($this->headerSelector, $this->config);
        list($response) = $this->execute($requesData,$returnType);
        return  $response;}

    private function execute( $request , $returnType)
    {
     try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else if ($returnType === '') { 
                return [
                   null,
                    $response->getStatusCode(),
                    $response->getHeaders()
                ];
            } else {
                $content = $responseBody->getContents();
                if ( $request->getMethod() !== 'GET' ){
                    if ($returnType !== 'string') {
                        $content = json_decode($content);
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
    public function getAccessToken($grant_type, $client_id, $client_secret ,$version = "v3.0")
    {
        $returnType = '\Aspose\Cells\Cloud\Model\AccessTokenResponse';

        if ($grant_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_type when calling oAuthPost'
            );
        }
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling oAuthPost'
            );
        }
        // verify the required parameter 'client_secret' is set
        if ($client_secret === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_secret when calling oAuthPost'
            );
        }

        $resourcePath = '/v3.0/cells/connect/token';
        if($version === 'v1.1'){
            $resourcePath = '/oauth2/token';
        }
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = ObjectSerializer::toFormValue($client_secret);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if($this->config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $this->config->getAccessToken();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        $request =  new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();                
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            $AccessTokenResponse =  ObjectSerializer::deserialize($content, $returnType, []);
            return $AccessTokenResponse->getAccessToken();
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Aspose\Cells\Cloud\Model\AccessTokenResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }            
    }      

}
