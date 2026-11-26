<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExtractTextRequest.php">
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

class ExtractTextRequest
{
    /**
     * Spreadsheet
     *
     * @var \SplFileObject|null
     */
    public $spreadsheet;

    /**
     * extractTextType
     *
     * @var string|null
     */
    public $extract_text_type;

    /**
     * outPositionRange
     *
     * @var string|null
     */
    public $out_position_range;

    /**
     * beforeText
     *
     * @var string|null
     */
    public $before_text;

    /**
     * afterText
     *
     * @var string|null
     */
    public $after_text;

    /**
     * beforePosition
     *
     * @var int|null
     */
    public $before_position;

    /**
     * afterPosition
     *
     * @var int|null
     */
    public $after_position;

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

    public function __construct($spreadsheet = null, $extract_text_type = null, $out_position_range = null, $before_text = null, $after_text = null, $before_position = null, $after_position = null, $worksheet = null, $range = null, $out_path = null, $out_storage_name = null, $region = null, $password = null)
    {
        $this->spreadsheet = $spreadsheet;
        $this->extract_text_type = $extract_text_type;
        $this->out_position_range = $out_position_range;
        $this->before_text = $before_text;
        $this->after_text = $after_text;
        $this->before_position = $before_position;
        $this->after_position = $after_position;
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
        $resourcePath = '/v4.0/cells/content/extract/text';
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
        if ($this->extract_text_type !== null) {
            $queryParams['extractTextType'] = ObjectSerializer::toQueryValue($this->extract_text_type);
        }
        if ($this->out_position_range !== null) {
            $queryParams['outPositionRange'] = ObjectSerializer::toQueryValue($this->out_position_range);
        }
        if ($this->before_text !== null) {
            $queryParams['beforeText'] = ObjectSerializer::toQueryValue($this->before_text);
        }
        if ($this->after_text !== null) {
            $queryParams['afterText'] = ObjectSerializer::toQueryValue($this->after_text);
        }
        if ($this->before_position !== null) {
            $queryParams['beforePosition'] = ObjectSerializer::toQueryValue($this->before_position);
        }
        if ($this->after_position !== null) {
            $queryParams['afterPosition'] = ObjectSerializer::toQueryValue($this->after_position);
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
            throw new \InvalidArgumentException('Missing the required parameter $spreadsheet when calling ExtractText');
        }
        if ($this->extract_text_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extract_text_type when calling ExtractText');
        }
        if ($this->out_position_range === null) {
            throw new \InvalidArgumentException('Missing the required parameter $out_position_range when calling ExtractText');
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
