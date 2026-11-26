<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SplitTableRequest.php">
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

class SplitTableRequest
{
    /**
     * Spreadsheet
     *
     * @var \SplFileObject|null
     */
    public $spreadsheet;

    /**
     * worksheet
     *
     * @var string|null
     */
    public $worksheet;

    /**
     * tableName
     *
     * @var string|null
     */
    public $table_name;

    /**
     * splitColumnName
     *
     * @var string|null
     */
    public $split_column_name;

    /**
     * saveSplitColumn
     *
     * @var bool|null
     */
    public $save_split_column;

    /**
     * splitRowNumber
     *
     * @var int|null
     */
    public $split_row_number;

    /**
     * toNewWorkbook
     *
     * @var bool|null
     */
    public $to_new_workbook;

    /**
     * toMultipleFiles
     *
     * @var bool|null
     */
    public $to_multiple_files;

    /**
     * outPath
     *
     * @var string|null
     */
    public $out_path;

    /**
     * outStorageName
     *
     * @var string|null
     */
    public $out_storage_name;

    /**
     * fontsLocation
     *
     * @var string|null
     */
    public $fonts_location;

    /**
     * region
     *
     * @var string|null
     */
    public $region;

    /**
     * password
     *
     * @var string|null
     */
    public $password;

    public function __construct($spreadsheet = null, $worksheet = null, $table_name = null, $split_column_name = null, $save_split_column = null, $split_row_number = null, $to_new_workbook = null, $to_multiple_files = null, $out_path = null, $out_storage_name = null, $fonts_location = null, $region = null, $password = null)
    {
        $this->spreadsheet = $spreadsheet;
        $this->worksheet = $worksheet;
        $this->table_name = $table_name;
        $this->split_column_name = $split_column_name;
        $this->save_split_column = $save_split_column;
        $this->split_row_number = $split_row_number;
        $this->to_new_workbook = $to_new_workbook;
        $this->to_multiple_files = $to_multiple_files;
        $this->out_path = $out_path;
        $this->out_storage_name = $out_storage_name;
        $this->fonts_location = $fonts_location;
        $this->region = $region;
        $this->password = $password;
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
        $resourcePath = '/v4.0/cells/split/table';
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
        if ($this->worksheet !== null) {
            $queryParams['worksheet'] = ObjectSerializer::toQueryValue($this->worksheet);
        }
        if ($this->table_name !== null) {
            $queryParams['tableName'] = ObjectSerializer::toQueryValue($this->table_name);
        }
        if ($this->split_column_name !== null) {
            $queryParams['splitColumnName'] = ObjectSerializer::toQueryValue($this->split_column_name);
        }
        if ($this->save_split_column !== null) {
            $queryParams['saveSplitColumn'] = ObjectSerializer::toQueryValue($this->save_split_column);
        }
        if ($this->split_row_number !== null) {
            $queryParams['splitRowNumber'] = ObjectSerializer::toQueryValue($this->split_row_number);
        }
        if ($this->to_new_workbook !== null) {
            $queryParams['toNewWorkbook'] = ObjectSerializer::toQueryValue($this->to_new_workbook);
        }
        if ($this->to_multiple_files !== null) {
            $queryParams['toMultipleFiles'] = ObjectSerializer::toQueryValue($this->to_multiple_files);
        }
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
        }
        if ($this->fonts_location !== null) {
            $queryParams['fontsLocation'] = ObjectSerializer::toQueryValue($this->fonts_location);
        }
        if ($this->region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($this->region);
        }
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        return $queryParams;
    }

    /**
     * Multipart elements for the request body.
     *
     * @return array[]
     */
    public function getFormParams()
    {
        $formParams = [];
        if ($this->spreadsheet !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toMultipartFiles($this->spreadsheet, 'Spreadsheet'));
        }
        return $formParams;
    }

    /**
     * Verify that all required parameters are set.
     *
     * @throws \InvalidArgumentException when a required parameter is missing
     * @return bool
     */
    public function validate()
    {
        if ($this->spreadsheet === null) {
            throw new \InvalidArgumentException('Missing the required parameter $spreadsheet when calling SplitTable');
        }
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException('Missing the required parameter $worksheet when calling SplitTable');
        }
        if ($this->table_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $table_name when calling SplitTable');
        }
        if ($this->split_column_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $split_column_name when calling SplitTable');
        }
        if ($this->save_split_column === null) {
            throw new \InvalidArgumentException('Missing the required parameter $save_split_column when calling SplitTable');
        }
        if ($this->split_row_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $split_row_number when calling SplitTable');
        }
        if ($this->to_new_workbook === null) {
            throw new \InvalidArgumentException('Missing the required parameter $to_new_workbook when calling SplitTable');
        }
        if ($this->to_multiple_files === null) {
            throw new \InvalidArgumentException('Missing the required parameter $to_multiple_files when calling SplitTable');
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

        $headers = $headerSelector->selectHeadersForMultipart(['application/json']);
        $formParams = $this->getFormParams();
        if (count($formParams) > 0) {
            $httpBody = new \GuzzleHttp\Psr7\MultipartStream($formParams);
        }

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
