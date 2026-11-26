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

namespace Aspose\Cells\Cloud\DataProcessing;

use Aspose\Cells\Cloud\Options as BaseOptions;

/**
 * Options for import, merge and split operations.
 */
class Options extends BaseOptions
{
    /**
     * Inserts data instead of overwriting the target cells.
     *
     * @param bool $value
     *
     * @return callable
     */
    public static function insert($value)
    {
        return self::common_parameter('insert', $value);
    }

    /**
     * Converts imported numeric strings to numeric cell values.
     *
     * @param bool $value
     *
     * @return callable
     */
    public static function convert_numeric_data($value)
    {
        return self::common_parameter('convertNumericData', $value);
    }

    /**
     * Sets the column delimiter for CSV imports (default ",").
     *
     * @param string $value
     *
     * @return callable
     */
    public static function splitter($value)
    {
        return self::common_parameter('splitter', $value);
    }

    /**
     * Sets the target format of merged or split output.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function out_format($value)
    {
        return self::common_parameter('outFormat', $value);
    }

    /**
     * Merges all worksheets into a single sheet.
     *
     * @param bool $value
     *
     * @return callable
     */
    public static function merge_in_one_sheet($value)
    {
        return self::common_parameter('mergeInOneSheet', $value);
    }

    /**
     * Starts a split at the given zero-based worksheet index.
     *
     * @param int $value
     *
     * @return callable
     */
    public static function from_($value)
    {
        return self::common_parameter('from', $value);
    }

    /**
     * Alias of {@see from_()}.
     *
     * @param int $value
     *
     * @return callable
     */
    public static function from($value)
    {
        return self::from_($value);
    }

    /**
     * Ends a split at the given zero-based worksheet index.
     *
     * @param int $value
     *
     * @return callable
     */
    public static function to($value)
    {
        return self::common_parameter('to', $value);
    }

    /**
     * Sets the fonts location used for merge/split output (wire: fontsLocation).
     *
     * @param string $value
     *
     * @return callable
     */
    public static function fonts_location($value)
    {
        return self::common_parameter('fontsLocation', $value);
    }

    /**
     * Writes the output to this cloud path instead of returning it.
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
}
