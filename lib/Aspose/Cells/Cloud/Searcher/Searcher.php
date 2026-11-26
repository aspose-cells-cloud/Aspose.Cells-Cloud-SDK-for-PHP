<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Searcher.php">
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

namespace Aspose\Cells\Cloud\Searcher;

use Aspose\Cells\Cloud\RequestOptions;
use Aspose\Cells\Cloud\SdkUtil;
use Aspose\Cells\Cloud\Request\ReplaceContentInRemoteRangeRequest;
use Aspose\Cells\Cloud\Request\ReplaceContentInRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ReplaceContentInRemoteWorksheetRequest;
use Aspose\Cells\Cloud\Request\ReplaceSpreadsheetContentRequest;
use Aspose\Cells\Cloud\Request\SearchContentInRemoteRangeRequest;
use Aspose\Cells\Cloud\Request\SearchContentInRemoteWorksheetRequest;
use Aspose\Cells\Cloud\Request\SearchSpreadsheetContentRequest;
use Aspose\Cells\Cloud\RichResponse;

/**
 * Find-and-replace helpers for local and cloud spreadsheets (v4.0 API).
 */
class Searcher
{
    /**
     * Extracts text items from a search/content response body.
     *
     * @param RichResponse $response
     *
     * @return TextItem[]
     */
    private static function decode_text_items($response)
    {
        $payload = $response->getJson();
        if (!is_array($payload)) {
            $payload = [];
        }
        $raw = isset($payload['TextItems']) && is_array($payload['TextItems'])
            ? $payload['TextItems']
            : [];

        $items = [];
        foreach ($raw as $item) {
            if (!is_array($item)) {
                $item = (array)$item;
            }
            $items[] = new TextItem(
                isset($item['Content']) ? $item['Content'] : '',
                isset($item['Worksheet']) ? $item['Worksheet'] : '',
                isset($item['Position']) ? $item['Position'] : ''
            );
        }
        return $items;
    }

    /**
     * Searches a local spreadsheet for $text within $worksheet.
     *
     * @throws \InvalidArgumentException
     *
     * @return TextItem[]
     */
    public static function search($client, $src, $worksheet, $text, $options = [])
    {
        SdkUtil::require_param($worksheet, 'worksheet is required');
        SdkUtil::require_param($text, 'text is required');
        $data = SdkUtil::read_source($src);

        $request = new SearchSpreadsheetContentRequest($data, $text);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, \Aspose\Cells\Cloud\Options::common_parameter('worksheet', $worksheet));
        $response = SdkUtil::execute_prepared($client, $context, $options);
        return self::decode_text_items($response);
    }

    /**
     * Replaces text in a local spreadsheet and writes the result to $sink.
     *
     * @return void
     */
    public static function replace($client, $src, $sink, $old_value, $new_value, $options = [])
    {
        $data = SdkUtil::read_source($src);

        $request = new ReplaceSpreadsheetContentRequest($data, $old_value, $new_value);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Searches text in a worksheet of a cloud workbook.
     *
     * @throws \InvalidArgumentException
     *
     * @return TextItem[]
     */
    public static function search_worksheet($client, $ref, $worksheet, $text, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name && $worksheet && $text,
            'workbook name, worksheet and text are required');

        $request = new SearchContentInRemoteWorksheetRequest($name, $worksheet, $text);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        $response = SdkUtil::execute_prepared($client, $context, $options);
        return self::decode_text_items($response);
    }

    /**
     * Searches text in a cell range of a cloud worksheet.
     *
     * @throws \InvalidArgumentException
     *
     * @return TextItem[]
     */
    public static function search_range($client, $ref, $worksheet, $cell_area, $text, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name && $worksheet && $cell_area && $text,
            'workbook name, worksheet, cell area and text are required');

        $request = new SearchContentInRemoteRangeRequest($name, $worksheet, $cell_area, $text);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        $response = SdkUtil::execute_prepared($client, $context, $options);
        return self::decode_text_items($response);
    }

    /**
     * Replaces text in a cloud workbook in place.
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function replace_workbook($client, $ref, $old_value, $new_value, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name && $old_value && $new_value,
            'workbook name, old value and new value are required');

        $request = new ReplaceContentInRemoteSpreadsheetRequest($name, $old_value, $new_value);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        SdkUtil::execute_prepared($client, $context, $options);
    }

    /**
     * Replaces text in a worksheet of a cloud workbook in place.
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function replace_worksheet($client, $ref, $worksheet, $old_value, $new_value, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name && $worksheet && $old_value && $new_value,
            'workbook name, worksheet, old value and new value are required');

        $request = new ReplaceContentInRemoteWorksheetRequest($name, $worksheet, $old_value, $new_value);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        SdkUtil::execute_prepared($client, $context, $options);
    }

    /**
     * Replaces text in a cell range of a cloud worksheet in place.
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function replace_range($client, $ref, $worksheet, $cell_area, $old_value, $new_value, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name && $worksheet && $cell_area && $old_value && $new_value,
            'workbook name, worksheet, cell area, old value and new value are required');

        $request = new ReplaceContentInRemoteRangeRequest($name, $old_value, $new_value, $worksheet, $cell_area);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        SdkUtil::execute_prepared($client, $context, $options);
    }
}
