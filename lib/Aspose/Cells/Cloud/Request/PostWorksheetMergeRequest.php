<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostWorksheetMergeRequest.php">
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

class PostWorksheetMergeRequest
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
     * startRow
     *
     * @var int|null
     */
    public $start_row;

    /**
     * startColumn
     *
     * @var int|null
     */
    public $start_column;

    /**
     * totalRows
     *
     * @var int|null
     */
    public $total_rows;

    /**
     * totalColumns
     *
     * @var int|null
     */
    public $total_columns;

    /**
     * folder
     *
     * @var string|null
     */
    public $folder;

    /**
     * storageName
     *
     * @var string|null
     */
    public $storage_name;

    public function __construct($name = null, $sheet_name = null, $start_row = null, $start_column = null, $total_rows = null, $total_columns = null, $folder = null, $storage_name = null)
    {
        $this->name = $name;
        $this->sheet_name = $sheet_name;
        $this->start_row = $start_row;
        $this->start_column = $start_column;
        $this->total_rows = $total_rows;
        $this->total_columns = $total_columns;
        $this->folder = $folder;
        $this->storage_name = $storage_name;
    }

    /**
     * The HTTP method for this operation.
     *
     * @return string
     */
    public function getMethod()
    {
        return 'POST';
    }

    /**
     * The resource path, with path parameters substituted.
     *
     * @return string
     */
    public function getPath()
    {
        $resourcePath = '/v3.0/cells/{name}/worksheets/{sheetName}/cells/merge';
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
        if ($this->start_row !== null) {
            $queryParams['startRow'] = ObjectSerializer::toQueryValue($this->start_row);
        }
        if ($this->start_column !== null) {
            $queryParams['startColumn'] = ObjectSerializer::toQueryValue($this->start_column);
        }
        if ($this->total_rows !== null) {
            $queryParams['totalRows'] = ObjectSerializer::toQueryValue($this->total_rows);
        }
        if ($this->total_columns !== null) {
            $queryParams['totalColumns'] = ObjectSerializer::toQueryValue($this->total_columns);
        }
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling PostWorksheetMerge');
        }
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sheet_name when calling PostWorksheetMerge');
        }
        if ($this->start_row === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_row when calling PostWorksheetMerge');
        }
        if ($this->start_column === null) {
            throw new \InvalidArgumentException('Missing the required parameter $start_column when calling PostWorksheetMerge');
        }
        if ($this->total_rows === null) {
            throw new \InvalidArgumentException('Missing the required parameter $total_rows when calling PostWorksheetMerge');
        }
        if ($this->total_columns === null) {
            throw new \InvalidArgumentException('Missing the required parameter $total_columns when calling PostWorksheetMerge');
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

        return new \GuzzleHttp\Psr7\Request('POST', $url, $headers, $httpBody);
    }
}
