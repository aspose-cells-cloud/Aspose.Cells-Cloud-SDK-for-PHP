<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataProcessing.php">
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

namespace Aspose\Cells\Cloud\DataProcessing;

use Aspose\Cells\Cloud\RequestOptions;
use Aspose\Cells\Cloud\SdkUtil;
use Aspose\Cells\Cloud\Request\ImportCSVDataIntoSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ImportDataIntoSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ImportJSONDataIntoSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ImportXMLDataIntoSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\MergeRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\MergeSpreadsheetsRequest;
use Aspose\Cells\Cloud\Request\SplitRemoteSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\SplitSpreadsheetRequest;

/**
 * Data import helpers that merge a data file into a template spreadsheet,
 * plus merge/split helpers.
 */
class DataProcessing
{
    /**
     * Shared import implementation.
     *
     * @param object         $client
     * @param mixed          $datafile
     * @param mixed          $template
     * @param mixed          $sink
     * @param string         $worksheet
     * @param string         $startcell
     * @param callable       $builder  builds the request from (datafile, template, worksheet, startcell)
     * @param array|callable $options
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    private static function import_local($client, $datafile, $template, $sink,
                                         $worksheet, $startcell, $builder, $options)
    {
        SdkUtil::require_param($worksheet, 'worksheet is required');
        SdkUtil::require_param($startcell, 'start cell is required');

        $data = SdkUtil::read_source($datafile);
        $template_data = SdkUtil::read_source($template);

        $request = $builder($data, $template_data, $worksheet, $startcell);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Imports XML data into a template spreadsheet at worksheet/startcell.
     *
     * @return void
     */
    public static function import_xml($client, $datafile, $template, $sink, $worksheet, $startcell, $options = [])
    {
        self::import_local($client, $datafile, $template, $sink, $worksheet, $startcell,
            function ($d, $t, $w, $s) {
                return new ImportXMLDataIntoSpreadsheetRequest($d, $t, $w, $s);
            }, $options);
    }

    /**
     * Imports JSON data into a template spreadsheet at worksheet/startcell.
     *
     * @return void
     */
    public static function import_json($client, $datafile, $template, $sink, $worksheet, $startcell, $options = [])
    {
        self::import_local($client, $datafile, $template, $sink, $worksheet, $startcell,
            function ($d, $t, $w, $s) {
                return new ImportJSONDataIntoSpreadsheetRequest($d, $t, $w, $s);
            }, $options);
    }

    /**
     * Imports CSV data into a template spreadsheet at worksheet/startcell.
     *
     * @return void
     */
    public static function import_csv($client, $datafile, $template, $sink, $worksheet, $startcell, $options = [])
    {
        self::import_local($client, $datafile, $template, $sink, $worksheet, $startcell,
            function ($d, $t, $w, $s) {
                return new ImportCSVDataIntoSpreadsheetRequest($d, $t, $w, $s);
            }, $options);
    }

    /**
     * Imports data whose format the server infers into a template spreadsheet.
     *
     * @return void
     */
    public static function import_data($client, $datafile, $template, $sink, $worksheet, $startcell, $options = [])
    {
        self::import_local($client, $datafile, $template, $sink, $worksheet, $startcell,
            function ($d, $t, $w, $s) {
                return new ImportDataIntoSpreadsheetRequest($d, $t, $w, $s);
            }, $options);
    }

    /**
     * Merges the worksheets of a local spreadsheet into one output workbook.
     *
     * Set the target format with Options::out_format().
     *
     * @return void
     */
    public static function merge_spreadsheet($client, $src, $sink, $options = [])
    {
        $data = SdkUtil::read_source($src);
        $request = new MergeSpreadsheetsRequest($data);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Merges a cloud spreadsheet into another cloud workbook.
     *
     * Set the target format with Options::out_format().
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function merge_remote_spreadsheet($client, $ref, $merged_spreadsheet, $sink, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name, 'workbook name is required');
        SdkUtil::require_param($merged_spreadsheet, 'merged spreadsheet name is required');

        $request = new MergeRemoteSpreadsheetRequest($name, $merged_spreadsheet);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        $response = SdkUtil::execute_prepared($client, $context, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Splits a local spreadsheet by worksheets.
     *
     * Set the target format with Options::out_format(); optionally scope the
     * split with Options::from_() and Options::to().
     *
     * @return void
     */
    public static function split_spreadsheet($client, $src, $sink, $options = [])
    {
        $data = SdkUtil::read_source($src);
        $request = new SplitSpreadsheetRequest($data);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Splits a cloud spreadsheet into files written under $out_path.
     *
     * @param object             $client
     * @param string|WorkbookRef $ref
     * @param string             $out_path
     * @param array|callable     $options
     *
     * @throws \InvalidArgumentException
     *
     * @return \Aspose\Cells\Cloud\RichResponse raw response (file list)
     */
    public static function split_remote_spreadsheet($client, $ref, $out_path, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name, 'workbook name is required');
        SdkUtil::require_param($out_path, 'out_path is required');

        $request = new SplitRemoteSpreadsheetRequest($name);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        SdkUtil::apply_options($context, \Aspose\Cells\Cloud\Options::common_parameter('outPath', $out_path));
        return SdkUtil::execute_prepared($client, $context, $options);
    }
}
