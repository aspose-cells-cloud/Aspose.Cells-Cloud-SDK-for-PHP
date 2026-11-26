<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Converter.php">
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

namespace Aspose\Cells\Cloud\Converter;

use Aspose\Cells\Cloud\RequestOptions;
use Aspose\Cells\Cloud\SdkUtil;
use Aspose\Cells\Cloud\Request\ConvertSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\ExportSpreadsheetAsFormatRequest;
use Aspose\Cells\Cloud\Request\ExportWorksheetAsFormatRequest;

/**
 * High-level spreadsheet conversion and export helpers (v4.0 API).
 *
 * Example::
 *
 *     $client = new \Aspose\Cells\Cloud\Api\AsposeCellsCloudApi($id, $secret);
 *     \Aspose\Cells\Cloud\Converter\Converter::convert_to_pdf(
 *         $client,
 *         new \Aspose\Cells\Cloud\DataSource\FilePathSource('Book1.xlsx'),
 *         new \Aspose\Cells\Cloud\DataSource\FilePathSink('Book1.pdf'),
 *         [\Aspose\Cells\Cloud\Converter\Options::password('secret')]
 *     );
 */
class Converter
{
    /**
     * Converts a local spreadsheet to $format and writes the result to $sink.
     *
     * @param object $client
     * @param mixed  $src    DataSource / path / bytes / stream
     * @param mixed  $sink   DataSink / path / stream
     * @param string $format
     * @param array|callable $options
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function convert($client, $src, $sink, $format, $options = [])
    {
        SdkUtil::require_param($format, 'format is required');
        $data = SdkUtil::read_source($src);

        $request = new ConvertSpreadsheetRequest($data, $format);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Converts a spreadsheet to PDF.
     *
     * @return void
     */
    public static function convert_to_pdf($client, $src, $sink, $options = [])
    {
        self::convert($client, $src, $sink, Formats::FORMAT_PDF, $options);
    }

    /**
     * Converts a spreadsheet to CSV.
     *
     * @return void
     */
    public static function convert_to_csv($client, $src, $sink, $options = [])
    {
        self::convert($client, $src, $sink, Formats::FORMAT_CSV, $options);
    }

    /**
     * Converts a spreadsheet to JSON.
     *
     * @return void
     */
    public static function convert_to_json($client, $src, $sink, $options = [])
    {
        self::convert($client, $src, $sink, Formats::FORMAT_JSON, $options);
    }

    /**
     * Converts a spreadsheet to HTML.
     *
     * @return void
     */
    public static function convert_to_html($client, $src, $sink, $options = [])
    {
        self::convert($client, $src, $sink, Formats::FORMAT_HTML, $options);
    }

    /**
     * Converts a spreadsheet to XLSX.
     *
     * @return void
     */
    public static function convert_to_xlsx($client, $src, $sink, $options = [])
    {
        self::convert($client, $src, $sink, Formats::FORMAT_XLSX, $options);
    }

    /**
     * Converts a spreadsheet to PNG.
     *
     * @return void
     */
    public static function convert_to_png($client, $src, $sink, $options = [])
    {
        self::convert($client, $src, $sink, Formats::FORMAT_PNG, $options);
    }

    /**
     * Converts a spreadsheet to DOCX.
     *
     * @return void
     */
    public static function convert_to_docx($client, $src, $sink, $options = [])
    {
        self::convert($client, $src, $sink, Formats::FORMAT_DOCX, $options);
    }

    /**
     * Converts a spreadsheet to SQL.
     *
     * @return void
     */
    public static function convert_to_sql($client, $src, $sink, $options = [])
    {
        self::convert($client, $src, $sink, Formats::FORMAT_SQL, $options);
    }

    /**
     * Exports a cloud workbook to $format and writes the result to $sink.
     *
     * @param object             $client
     * @param string|WorkbookRef $ref   cloud workbook reference or file name
     * @param mixed              $sink
     * @param string             $format
     * @param array|callable     $options
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function workbook($client, $ref, $sink, $format, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name, 'workbook name is required');
        SdkUtil::require_param($format, 'format is required');

        $request = new ExportSpreadsheetAsFormatRequest($name, $format);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        $response = SdkUtil::execute_prepared($client, $context, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Alias of {@see workbook()}.
     *
     * @return void
     */
    public static function workbook_export($client, $ref, $sink, $format, $options = [])
    {
        self::workbook($client, $ref, $sink, $format, $options);
    }

    /**
     * Exports one worksheet of a cloud workbook to $format.
     *
     * @param object             $client
     * @param string|WorkbookRef $ref
     * @param string             $worksheet_name
     * @param mixed              $sink
     * @param string             $format
     * @param array|callable     $options
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function worksheet($client, $ref, $worksheet_name, $sink, $format, $options = [])
    {
        list($name, $folder, $storage_name) = SdkUtil::split_workbook_ref($ref);
        SdkUtil::require_param($name, 'workbook name is required');
        SdkUtil::require_param($worksheet_name, 'worksheet name is required');
        SdkUtil::require_param($format, 'format is required');

        $request = new ExportWorksheetAsFormatRequest($name, $worksheet_name, $format);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, SdkUtil::workbook_params($folder, $storage_name));
        $response = SdkUtil::execute_prepared($client, $context, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Alias of {@see worksheet()}.
     *
     * @return void
     */
    public static function worksheet_export($client, $ref, $worksheet_name, $sink, $format, $options = [])
    {
        self::worksheet($client, $ref, $worksheet_name, $sink, $format, $options);
    }
}
