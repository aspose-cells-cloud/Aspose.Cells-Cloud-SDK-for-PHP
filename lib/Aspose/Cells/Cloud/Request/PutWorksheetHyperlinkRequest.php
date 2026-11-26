<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetHyperlinkRequest.php">
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

class PutWorksheetHyperlinkRequest
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
     * firstRow
     *
     * @var int|null
     */
    public $first_row;

    /**
     * firstColumn
     *
     * @var int|null
     */
    public $first_column;

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
     * address
     *
     * @var string|null
     */
    public $address;

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

    public function __construct($name = null, $sheet_name = null, $first_row = null, $first_column = null, $total_rows = null, $total_columns = null, $address = null, $folder = null, $storage_name = null)
    {
        $this->name = $name;
        $this->sheet_name = $sheet_name;
        $this->first_row = $first_row;
        $this->first_column = $first_column;
        $this->total_rows = $total_rows;
        $this->total_columns = $total_columns;
        $this->address = $address;
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
        return 'PUT';
    }

    /**
     * The resource path, with path parameters substituted.
     *
     * @return string
     */
    public function getPath()
    {
        $resourcePath = '/v3.0/cells/{name}/worksheets/{sheetName}/hyperlinks';
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
        if ($this->first_row !== null) {
            $queryParams['firstRow'] = ObjectSerializer::toQueryValue($this->first_row);
        }
        if ($this->first_column !== null) {
            $queryParams['firstColumn'] = ObjectSerializer::toQueryValue($this->first_column);
        }
        if ($this->total_rows !== null) {
            $queryParams['totalRows'] = ObjectSerializer::toQueryValue($this->total_rows);
        }
        if ($this->total_columns !== null) {
            $queryParams['totalColumns'] = ObjectSerializer::toQueryValue($this->total_columns);
        }
        if ($this->address !== null) {
            $queryParams['address'] = ObjectSerializer::toQueryValue($this->address);
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling PutWorksheetHyperlink');
        }
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sheet_name when calling PutWorksheetHyperlink');
        }
        if ($this->first_row === null) {
            throw new \InvalidArgumentException('Missing the required parameter $first_row when calling PutWorksheetHyperlink');
        }
        if ($this->first_column === null) {
            throw new \InvalidArgumentException('Missing the required parameter $first_column when calling PutWorksheetHyperlink');
        }
        if ($this->total_rows === null) {
            throw new \InvalidArgumentException('Missing the required parameter $total_rows when calling PutWorksheetHyperlink');
        }
        if ($this->total_columns === null) {
            throw new \InvalidArgumentException('Missing the required parameter $total_columns when calling PutWorksheetHyperlink');
        }
        if ($this->address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address when calling PutWorksheetHyperlink');
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
