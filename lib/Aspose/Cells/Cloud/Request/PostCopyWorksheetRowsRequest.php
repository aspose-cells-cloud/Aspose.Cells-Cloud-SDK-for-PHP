<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostCopyWorksheetRowsRequest.php">
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

class PostCopyWorksheetRowsRequest
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
     * sourceRowIndex
     *
     * @var int|null
     */
    public $source_row_index;

    /**
     * destinationRowIndex
     *
     * @var int|null
     */
    public $destination_row_index;

    /**
     * rowNumber
     *
     * @var int|null
     */
    public $row_number;

    /**
     * worksheet
     *
     * @var string|null
     */
    public $worksheet;

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

    public function __construct($name = null, $sheet_name = null, $source_row_index = null, $destination_row_index = null, $row_number = null, $worksheet = null, $folder = null, $storage_name = null)
    {
        $this->name = $name;
        $this->sheet_name = $sheet_name;
        $this->source_row_index = $source_row_index;
        $this->destination_row_index = $destination_row_index;
        $this->row_number = $row_number;
        $this->worksheet = $worksheet;
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
        $resourcePath = '/v3.0/cells/{name}/worksheets/{sheetName}/cells/rows/copy';
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
        if ($this->source_row_index !== null) {
            $queryParams['sourceRowIndex'] = ObjectSerializer::toQueryValue($this->source_row_index);
        }
        if ($this->destination_row_index !== null) {
            $queryParams['destinationRowIndex'] = ObjectSerializer::toQueryValue($this->destination_row_index);
        }
        if ($this->row_number !== null) {
            $queryParams['rowNumber'] = ObjectSerializer::toQueryValue($this->row_number);
        }
        if ($this->worksheet !== null) {
            $queryParams['worksheet'] = ObjectSerializer::toQueryValue($this->worksheet);
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling PostCopyWorksheetRows');
        }
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sheet_name when calling PostCopyWorksheetRows');
        }
        if ($this->source_row_index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $source_row_index when calling PostCopyWorksheetRows');
        }
        if ($this->destination_row_index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $destination_row_index when calling PostCopyWorksheetRows');
        }
        if ($this->row_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $row_number when calling PostCopyWorksheetRows');
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
