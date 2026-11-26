<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Reporting.php">
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

use Aspose\Cells\Cloud\SdkUtil;
use Aspose\Cells\Cloud\Request\AggregateCellsByColorRequest;
use Aspose\Cells\Cloud\Request\CalculationFormulaRequest;
use Aspose\Cells\Cloud\Request\CategorizeSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\MathCalculateRequest;
use Aspose\Cells\Cloud\Request\ReportAIAnalysisRequest;
use Aspose\Cells\Cloud\Request\SummarizeSpreadsheetRequest;
use Aspose\Cells\Cloud\RichResponse;

/**
 * AI report-analysis and calculation helpers (v4.0 API).
 *
 * Response-returning operations return a {@see RichResponse}; use
 * getJson()/text() to read the payload.
 */
class Reporting
{
    /**
     * Runs an AI report analysis and returns the raw response (markdown text).
     *
     * @return RichResponse
     */
    public static function report_analysis($client, $src, $options = [])
    {
        $data = SdkUtil::read_source($src);
        $request = new ReportAIAnalysisRequest($data);
        return SdkUtil::execute($client, $request, $options);
    }

    /**
     * Generates an AI summary and writes the markdown text to $sink.
     *
     * @return void
     */
    public static function summarize($client, $src, $sink, $options = [])
    {
        $data = SdkUtil::read_source($src);
        $request = new SummarizeSpreadsheetRequest($data);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Aggregates cells by color and returns the raw response.
     *
     * @return RichResponse
     */
    public static function aggregate_by_color($client, $src, $options = [])
    {
        $data = SdkUtil::read_source($src);
        $request = new AggregateCellsByColorRequest($data);
        return SdkUtil::execute($client, $request, $options);
    }

    /**
     * Runs a math calculation over $value and returns the raw response.
     *
     * $operation is "Add", "Minus", "Multiply", "Divide" or "Percentage".
     *
     * @return RichResponse
     */
    public static function math_calculate($client, $src, $operation, $value, $options = [])
    {
        $data = SdkUtil::read_source($src);
        $request = new MathCalculateRequest($data, $operation, $value);
        return SdkUtil::execute($client, $request, $options);
    }

    /**
     * Evaluates $formula against $worksheet and returns the raw response.
     *
     * @return RichResponse
     */
    public static function calculate_formula($client, $src, $worksheet, $formula, $options = [])
    {
        $data = SdkUtil::read_source($src);
        $request = new CalculationFormulaRequest($data, $worksheet, $formula);
        return SdkUtil::execute($client, $request, $options);
    }

    /**
     * Classifies a column into logical groups and returns the raw response.
     *
     * @return RichResponse
     */
    public static function categorize_spreadsheet($client, $src, $target_column, $options = [])
    {
        $data = SdkUtil::read_source($src);
        $request = new CategorizeSpreadsheetRequest($data, $target_column);
        return SdkUtil::execute($client, $request, $options);
    }
}
