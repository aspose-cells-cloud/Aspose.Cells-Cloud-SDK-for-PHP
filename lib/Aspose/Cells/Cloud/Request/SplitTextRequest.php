<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SplitTextRequest.php">
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

class SplitTextRequest
{
    /**
     * Spreadsheet
     *
     * @var \SplFileObject|null
     */
    public $spreadsheet;

    /**
     * delimiters
     *
     * @var string|null
     */
    public $delimiters;

    /**
     * keepDelimitersInResultingCells
     *
     * @var bool|null
     */
    public $keep_delimiters_in_resulting_cells;

    /**
     * keepDelimitersPosition
     *
     * @var string|null
     */
    public $keep_delimiters_position;

    /**
     * HowToSplit
     *
     * @var string|null
     */
    public $how_to_split;

    /**
     * outPositionRange
     *
     * @var string|null
     */
    public $out_position_range;

    /**
     * worksheet
     *
     * @var string|null
     */
    public $worksheet;

    /**
     * range
     *
     * @var string|null
     */
    public $range;

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

    public function __construct($spreadsheet = null, $delimiters = null, $keep_delimiters_in_resulting_cells = null, $keep_delimiters_position = null, $how_to_split = null, $out_position_range = null, $worksheet = null, $range = null, $out_path = null, $out_storage_name = null, $region = null, $password = null)
    {
        $this->spreadsheet = $spreadsheet;
        $this->delimiters = $delimiters;
        $this->keep_delimiters_in_resulting_cells = $keep_delimiters_in_resulting_cells;
        $this->keep_delimiters_position = $keep_delimiters_position;
        $this->how_to_split = $how_to_split;
        $this->out_position_range = $out_position_range;
        $this->worksheet = $worksheet;
        $this->range = $range;
        $this->out_path = $out_path;
        $this->out_storage_name = $out_storage_name;
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
        $resourcePath = '/v4.0/cells/content/split/text';
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
        if ($this->delimiters !== null) {
            $queryParams['delimiters'] = ObjectSerializer::toQueryValue($this->delimiters);
        }
        if ($this->keep_delimiters_in_resulting_cells !== null) {
            $queryParams['keepDelimitersInResultingCells'] = ObjectSerializer::toQueryValue($this->keep_delimiters_in_resulting_cells);
        }
        if ($this->keep_delimiters_position !== null) {
            $queryParams['keepDelimitersPosition'] = ObjectSerializer::toQueryValue($this->keep_delimiters_position);
        }
        if ($this->how_to_split !== null) {
            $queryParams['HowToSplit'] = ObjectSerializer::toQueryValue($this->how_to_split);
        }
        if ($this->out_position_range !== null) {
            $queryParams['outPositionRange'] = ObjectSerializer::toQueryValue($this->out_position_range);
        }
        if ($this->worksheet !== null) {
            $queryParams['worksheet'] = ObjectSerializer::toQueryValue($this->worksheet);
        }
        if ($this->range !== null) {
            $queryParams['range'] = ObjectSerializer::toQueryValue($this->range);
        }
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
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
            throw new \InvalidArgumentException('Missing the required parameter $spreadsheet when calling SplitText');
        }
        if ($this->delimiters === null) {
            throw new \InvalidArgumentException('Missing the required parameter $delimiters when calling SplitText');
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
