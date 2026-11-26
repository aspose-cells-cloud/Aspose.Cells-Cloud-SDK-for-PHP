<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataCleansing.php">
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

namespace Aspose\Cells\Cloud\DataCleansing;

use Aspose\Cells\Cloud\SdkUtil;
use Aspose\Cells\Cloud\Request\RemoveDuplicatesRequest;
use Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankColumnsRequest;
use Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankRowsRequest;
use Aspose\Cells\Cloud\Request\RemoveSpreadsheetBlankWorksheetsRequest;

/**
 * High-level spreadsheet cleansing helpers.
 *
 * A local spreadsheet is uploaded, the server removes the targeted content and
 * returns the cleaned workbook bytes, which are written to the sink.
 */
class DataCleansing
{
    /**
     * Uploads $src, runs $request and writes the cleaned workbook to $sink.
     *
     * @param object         $client
     * @param mixed          $sink
     * @param object         $request generated request with the spreadsheet set
     * @param array|callable $options
     *
     * @return void
     */
    private static function clean($client, $sink, $request, $options)
    {
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Removes blank rows and writes the cleaned workbook to $sink.
     *
     * @return void
     */
    public static function remove_blank_rows($client, $src, $sink, $options = [])
    {
        $data = SdkUtil::read_source($src);
        self::clean($client, $sink, new RemoveSpreadsheetBlankRowsRequest($data), $options);
    }

    /**
     * Removes blank columns and writes the cleaned workbook to $sink.
     *
     * @return void
     */
    public static function remove_blank_columns($client, $src, $sink, $options = [])
    {
        $data = SdkUtil::read_source($src);
        self::clean($client, $sink, new RemoveSpreadsheetBlankColumnsRequest($data), $options);
    }

    /**
     * Removes blank worksheets and writes the cleaned workbook to $sink.
     *
     * @return void
     */
    public static function remove_blank_worksheets($client, $src, $sink, $options = [])
    {
        $data = SdkUtil::read_source($src);
        self::clean($client, $sink, new RemoveSpreadsheetBlankWorksheetsRequest($data), $options);
    }

    /**
     * Removes duplicate rows and writes the cleaned workbook to $sink.
     *
     * Scope the removal with Options::worksheet(), Options::range_() or
     * Options::table().
     *
     * @return void
     */
    public static function remove_duplicates($client, $src, $sink, $options = [])
    {
        $data = SdkUtil::read_source($src);
        self::clean($client, $sink, new RemoveDuplicatesRequest($data), $options);
    }
}
