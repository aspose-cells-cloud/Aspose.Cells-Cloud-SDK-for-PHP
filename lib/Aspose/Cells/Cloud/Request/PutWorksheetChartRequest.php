<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetChartRequest.php">
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

namespace Aspose\Cells\Cloud\Request;

use Aspose\Cells\Cloud\ObjectSerializer;

class PutWorksheetChartRequest
{
    /**
     * name
     *
     * @var string|null
     */
    public $name;

    /**
     * sheetName
     *
     * @var string|null
     */
    public $sheet_name;

    /**
     * chartType
     *
     * @var string|null
     */
    public $chart_type;

    /**
     * upperLeftRow
     *
     * @var int|null
     */
    public $upper_left_row;

    /**
     * upperLeftColumn
     *
     * @var int|null
     */
    public $upper_left_column;

    /**
     * lowerRightRow
     *
     * @var int|null
     */
    public $lower_right_row;

    /**
     * lowerRightColumn
     *
     * @var int|null
     */
    public $lower_right_column;

    /**
     * area
     *
     * @var string|null
     */
    public $area;

    /**
     * isVertical
     *
     * @var bool|null
     */
    public $is_vertical;

    /**
     * categoryData
     *
     * @var string|null
     */
    public $category_data;

    /**
     * isAutoGetSerialName
     *
     * @var bool|null
     */
    public $is_auto_get_serial_name;

    /**
     * title
     *
     * @var string|null
     */
    public $title;

    /**
     * folder
     *
     * @var string|null
     */
    public $folder;

    /**
     * dataLabels
     *
     * @var bool|null
     */
    public $data_labels;

    /**
     * dataLabelsPosition
     *
     * @var string|null
     */
    public $data_labels_position;

    /**
     * pivotTableSheet
     *
     * @var string|null
     */
    public $pivot_table_sheet;

    /**
     * pivotTableName
     *
     * @var string|null
     */
    public $pivot_table_name;

    /**
     * storageName
     *
     * @var string|null
     */
    public $storage_name;

    public function __construct($name = null, $sheet_name = null, $chart_type = null, $upper_left_row = null, $upper_left_column = null, $lower_right_row = null, $lower_right_column = null, $area = null, $is_vertical = null, $category_data = null, $is_auto_get_serial_name = null, $title = null, $folder = null, $data_labels = null, $data_labels_position = null, $pivot_table_sheet = null, $pivot_table_name = null, $storage_name = null)
    {
        $this->name = $name;
        $this->sheet_name = $sheet_name;
        $this->chart_type = $chart_type;
        $this->upper_left_row = $upper_left_row;
        $this->upper_left_column = $upper_left_column;
        $this->lower_right_row = $lower_right_row;
        $this->lower_right_column = $lower_right_column;
        $this->area = $area;
        $this->is_vertical = $is_vertical;
        $this->category_data = $category_data;
        $this->is_auto_get_serial_name = $is_auto_get_serial_name;
        $this->title = $title;
        $this->folder = $folder;
        $this->data_labels = $data_labels;
        $this->data_labels_position = $data_labels_position;
        $this->pivot_table_sheet = $pivot_table_sheet;
        $this->pivot_table_name = $pivot_table_name;
        $this->storage_name = $storage_name;
    }

    /**
     * The HTTP method for this operation.
     *
     * @return string
     */
    public function getMethod()
    {
        return 'PUT';
    }

    /**
     * The resource path, with path parameters substituted.
     *
     * @return string
     */
    public function getPath()
    {
        $resourcePath = '/v3.0/cells/{name}/worksheets/{sheetName}/charts';
        if ($this->name !== null) {
            $resourcePath = str_replace('{name}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }
        if ($this->sheet_name !== null) {
            $resourcePath = str_replace('{sheetName}', ObjectSerializer::toPathValue($this->sheet_name), $resourcePath);
        }
        return $resourcePath;
    }

    /**
     * Query parameters for the request (null values are skipped).
     *
     * @return array
     */
    public function getQueryParams()
    {
        $queryParams = [];
        if ($this->chart_type !== null) {
            $queryParams['chartType'] = ObjectSerializer::toQueryValue($this->chart_type);
        }
        if ($this->upper_left_row !== null) {
            $queryParams['upperLeftRow'] = ObjectSerializer::toQueryValue($this->upper_left_row);
        }
        if ($this->upper_left_column !== null) {
            $queryParams['upperLeftColumn'] = ObjectSerializer::toQueryValue($this->upper_left_column);
        }
        if ($this->lower_right_row !== null) {
            $queryParams['lowerRightRow'] = ObjectSerializer::toQueryValue($this->lower_right_row);
        }
        if ($this->lower_right_column !== null) {
            $queryParams['lowerRightColumn'] = ObjectSerializer::toQueryValue($this->lower_right_column);
        }
        if ($this->area !== null) {
            $queryParams['area'] = ObjectSerializer::toQueryValue($this->area);
        }
        if ($this->is_vertical !== null) {
            $queryParams['isVertical'] = ObjectSerializer::toQueryValue($this->is_vertical);
        }
        if ($this->category_data !== null) {
            $queryParams['categoryData'] = ObjectSerializer::toQueryValue($this->category_data);
        }
        if ($this->is_auto_get_serial_name !== null) {
            $queryParams['isAutoGetSerialName'] = ObjectSerializer::toQueryValue($this->is_auto_get_serial_name);
        }
        if ($this->title !== null) {
            $queryParams['title'] = ObjectSerializer::toQueryValue($this->title);
        }
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        if ($this->data_labels !== null) {
            $queryParams['dataLabels'] = ObjectSerializer::toQueryValue($this->data_labels);
        }
        if ($this->data_labels_position !== null) {
            $queryParams['dataLabelsPosition'] = ObjectSerializer::toQueryValue($this->data_labels_position);
        }
        if ($this->pivot_table_sheet !== null) {
            $queryParams['pivotTableSheet'] = ObjectSerializer::toQueryValue($this->pivot_table_sheet);
        }
        if ($this->pivot_table_name !== null) {
            $queryParams['pivotTableName'] = ObjectSerializer::toQueryValue($this->pivot_table_name);
        }
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
        return $queryParams;
    }

    /**
     * Verify that all required parameters are set.
     *
     * @throws \InvalidArgumentException when a required parameter is missing
     * @return bool
     */
    public function validate()
    {
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling PutWorksheetChart');
        }
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sheet_name when calling PutWorksheetChart');
        }
        if ($this->chart_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chart_type when calling PutWorksheetChart');
        }
        return true;
    }

    /**
     * Build the PSR-7 request executed by AsposeCellsCloudApi.
     *
     * @param \Aspose\Cells\Cloud\HeaderSelector $headerSelector
     * @param \Aspose\Cells\Cloud\Configuration $config
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createHttpRequest($headerSelector, $config)
    {
        $this->validate();

        $resourcePath = $this->getPath();
        $queryParams = $this->getQueryParams();
        $httpBody = null;

        $headers = $headerSelector->selectHeaders(['application/json'], ['application/json']);

        $accessToken = $config->getAccessToken();
        if ($accessToken !== null && $accessToken !== '') {
            $headers['Authorization'] = 'Bearer ' . $accessToken;
        }
        $headers['User-Agent'] = $config->getUserAgent();

        $url = $config->getHost() . $resourcePath;
        if (count($queryParams) > 0) {
            $url .= '?' . http_build_query($queryParams);
        }

        return new \GuzzleHttp\Psr7\Request('PUT', $url, $headers, $httpBody);
    }
}
