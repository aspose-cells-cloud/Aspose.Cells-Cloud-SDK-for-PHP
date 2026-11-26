<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GenerateReportRequest.php">
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

class GenerateReportRequest
{
    /**
     * data
     *
     * @var \SplFileObject|null
     */
    public $data;

    /**
     * template
     *
     * @var \SplFileObject|null
     */
    public $template;

    /**
     * format
     *
     * @var string|null
     */
    public $format;

    /**
     * reportObjectName
     *
     * @var string|null
     */
    public $report_object_name;

    /**
     * filename
     *
     * @var string|null
     */
    public $filename;

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
     * AutoRowsFit
     *
     * @var bool|null
     */
    public $auto_rows_fit;

    /**
     * AutoColumnsFit
     *
     * @var bool|null
     */
    public $auto_columns_fit;

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

    public function __construct($data = null, $template = null, $format = null, $report_object_name = null, $filename = null, $out_path = null, $out_storage_name = null, $auto_rows_fit = null, $auto_columns_fit = null, $region = null, $password = null)
    {
        $this->data = $data;
        $this->template = $template;
        $this->format = $format;
        $this->report_object_name = $report_object_name;
        $this->filename = $filename;
        $this->out_path = $out_path;
        $this->out_storage_name = $out_storage_name;
        $this->auto_rows_fit = $auto_rows_fit;
        $this->auto_columns_fit = $auto_columns_fit;
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
        $resourcePath = '/v4.0/cells/report/generate';
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
        if ($this->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($this->format);
        }
        if ($this->report_object_name !== null) {
            $queryParams['reportObjectName'] = ObjectSerializer::toQueryValue($this->report_object_name);
        }
        if ($this->filename !== null) {
            $queryParams['filename'] = ObjectSerializer::toQueryValue($this->filename);
        }
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
        }
        if ($this->auto_rows_fit !== null) {
            $queryParams['AutoRowsFit'] = ObjectSerializer::toQueryValue($this->auto_rows_fit);
        }
        if ($this->auto_columns_fit !== null) {
            $queryParams['AutoColumnsFit'] = ObjectSerializer::toQueryValue($this->auto_columns_fit);
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
        if ($this->data !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toMultipartFiles($this->data, 'data'));
        }
        if ($this->template !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toMultipartFiles($this->template, 'template'));
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
        if ($this->data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling GenerateReport');
        }
        if ($this->template === null) {
            throw new \InvalidArgumentException('Missing the required parameter $template when calling GenerateReport');
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
