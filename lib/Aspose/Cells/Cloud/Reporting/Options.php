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

namespace Aspose\Cells\Cloud\Reporting;

use Aspose\Cells\Cloud\Options as BaseOptions;

/**
 * Options for reporting and AI analysis operations.
 */
class Options extends BaseOptions
{
    /**
     * Restricts an analysis/calculation to a worksheet.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function worksheet($value)
    {
        return self::common_parameter('worksheet', $value);
    }

    /**
     * Restricts an analysis/calculation to a cell range (A1 style).
     *
     * @param string $value
     *
     * @return callable
     */
    public static function range_($value)
    {
        return self::common_parameter('range', $value);
    }

    /**
     * Alias of {@see range_()}.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function range($value)
    {
        return self::range_($value);
    }

    /**
     * Sets the aggregation/calculation operation (e.g. "count", "sum").
     *
     * @param string $value
     *
     * @return callable
     */
    public static function operation($value)
    {
        return self::common_parameter('operation', $value);
    }

    /**
     * Sets the color position (e.g. "fill" or "font").
     *
     * @param string $value
     *
     * @return callable
     */
    public static function color_position($value)
    {
        return self::common_parameter('colorPosition', $value);
    }

    /**
     * Scopes an AI analysis/calculation to a worksheet by name.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function sheet_name($value)
    {
        return self::common_parameter('sheetName', $value);
    }

    /**
     * Names the category column produced by categorize.
     *
     * @param string $value
     *
     * @return callable
     */
    public static function new_column_name($value)
    {
        return self::common_parameter('newColumnName', $value);
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
