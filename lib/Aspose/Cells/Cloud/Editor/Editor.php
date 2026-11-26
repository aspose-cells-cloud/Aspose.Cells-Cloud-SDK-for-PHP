<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Editor.php">
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

namespace Aspose\Cells\Cloud\Editor;

use Aspose\Cells\Cloud\RequestOptions;
use Aspose\Cells\Cloud\SdkUtil;
use Aspose\Cells\Cloud\Request\AddWorksheetToSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\CreateSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\DeleteWorksheetFromSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\GetWorksheetsWithLocalSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\MoveWorksheetInSpreadsheetRequest;
use Aspose\Cells\Cloud\Request\RenameWorksheetInSpreadsheetRequest;

/**
 * Worksheet-management helpers for local spreadsheets (v4.0 API).
 */
class Editor
{
    /**
     * Adds a worksheet and writes the updated workbook to $sink.
     *
     * Position the sheet with Options::position().
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function add_worksheet($client, $src, $sink, $sheet_name, $options = [])
    {
        SdkUtil::require_param($sheet_name, 'sheet name is required');
        $data = SdkUtil::read_source($src);

        $request = new AddWorksheetToSpreadsheetRequest($data);
        $context = new RequestOptions($request);
        SdkUtil::apply_options($context, \Aspose\Cells\Cloud\Options::common_parameter('sheetName', $sheet_name));
        $response = SdkUtil::execute_prepared($client, $context, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Deletes a worksheet and writes the updated workbook to $sink.
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function delete_worksheet($client, $src, $sink, $sheet_name, $options = [])
    {
        SdkUtil::require_param($sheet_name, 'sheet name is required');
        $data = SdkUtil::read_source($src);

        $request = new DeleteWorksheetFromSpreadsheetRequest($data, $sheet_name);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Renames a worksheet and writes the updated workbook to $sink.
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function rename_worksheet($client, $src, $sink, $old_name, $new_name, $options = [])
    {
        SdkUtil::require_param($old_name && $new_name, 'old and new sheet names are required');
        $data = SdkUtil::read_source($src);

        $request = new RenameWorksheetInSpreadsheetRequest($data, $old_name, $new_name);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Moves a worksheet to a zero-based position in the updated workbook.
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function move_worksheet($client, $src, $sink, $worksheet, $position, $options = [])
    {
        SdkUtil::require_param($worksheet, 'worksheet name is required');
        $data = SdkUtil::read_source($src);

        $request = new MoveWorksheetInSpreadsheetRequest($data, $worksheet, $position);
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }

    /**
     * Returns the worksheets of a local spreadsheet.
     *
     * @param object         $client
     * @param mixed          $src
     * @param array|callable $options
     *
     * @return Worksheet[]
     */
    public static function list_worksheets($client, $src, $options = [])
    {
        $data = SdkUtil::read_source($src);

        $request = new GetWorksheetsWithLocalSpreadsheetRequest($data);
        $response = SdkUtil::execute($client, $request, $options);
        $payload = $response->getJson();
        if (!is_array($payload)) {
            $payload = [];
        }

        $worksheets = [];
        foreach ($payload as $item) {
            if (!is_array($item)) {
                $item = (array)$item;
            }
            $worksheets[] = new Worksheet(
                isset($item['WorksheetName']) ? $item['WorksheetName'] : '',
                isset($item['SheetType']) ? $item['SheetType'] : ''
            );
        }
        return $worksheets;
    }

    /**
     * Creates a new workbook and writes it to $sink.
     *
     * Initialize it from a cloud template with Options::template().
     *
     * @return void
     */
    public static function create_spreadsheet($client, $sink, $options = [])
    {
        $request = new CreateSpreadsheetRequest();
        $response = SdkUtil::execute($client, $request, $options);
        SdkUtil::write_sink($sink, $response->toBytes());
    }
}
