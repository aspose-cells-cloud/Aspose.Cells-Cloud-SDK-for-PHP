<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Options.php">
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

use Aspose\Cells\Cloud\Options as BaseOptions;

/**
 * Options for conversion and export operations.
 */
class Options extends BaseOptions
{
    /**
     * Sets the workbook open password.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function password($value)
    {
        return self::common_parameter('password', $value);
    }

    /**
     * Sets the region.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function region($value)
    {
        return self::common_parameter('region', $value);
    }

    /**
     * Sets the location of the fonts used for conversion (wire: FontsLocation).
     *
     * @param string $value
     *
     * @return callable
     */
    public static function fonts_location($value)
    {
        return self::common_parameter('FontsLocation', $value);
    }

    /**
     * Writes the output file to this cloud path instead of returning it.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function out_path($value)
    {
        return self::common_parameter('outPath', $value);
    }

    /**
     * Sets the cloud storage name for the output file.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function out_storage_name($value)
    {
        return self::common_parameter('outStorageName', $value);
    }

    /**
     * Sets the cloud storage name that contains the workbook.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function storage_name($value)
    {
        return self::common_parameter('storageName', $value);
    }

    /**
     * Sets the cloud folder that contains the workbook.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function folder($value)
    {
        return self::common_parameter('folder', $value);
    }

    /**
     * Fits rows automatically before conversion.
     *
     * @param bool $value
     *
     * @return callable
     */
    public static function auto_rows_fit($value)
    {
        return self::common_parameter('AutoRowsFit', $value);
    }

    /**
     * Fits columns automatically before conversion.
     *
     * @param bool $value
     *
     * @return callable
     */
    public static function auto_columns_fit($value)
    {
        return self::common_parameter('AutoColumnsFit', $value);
    }

    /**
     * Checks the Excel restriction before conversion.
     *
     * The generated convert/export requests expose no matching property, so
     * the value is appended as an implicit query parameter (parity with the
     * other SDK languages).
     *
     * @param bool $value
     *
     * @return callable
     */
    public static function check_excel_restriction($value)
    {
        return self::query_parameter('checkExcelRestriction', $value);
    }

    /**
     * Fits each worksheet onto one page for PDF output.
     *
     * The generated convert/export requests expose no matching property, so
     * the value is appended as an implicit query parameter (parity with the
     * other SDK languages).
     *
     * @param bool $value
     *
     * @return callable
     */
    public static function one_page_per_sheet($value)
    {
        return self::query_parameter('onePagePerSheet', $value);
    }
}
