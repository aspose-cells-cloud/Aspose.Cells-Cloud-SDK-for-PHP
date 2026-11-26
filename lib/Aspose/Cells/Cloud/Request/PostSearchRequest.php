<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostSearchRequest.php">
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

class PostSearchRequest
{
    /**
     * File
     *
     * @var \SplFileObject|null
     */
    public $file;

    /**
     * text
     *
     * @var string|null
     */
    public $text;

    /**
     * password
     *
     * @var string|null
     */
    public $password;

    /**
     * sheetname
     *
     * @var string|null
     */
    public $sheetname;

    /**
     * checkExcelRestriction
     *
     * @var bool|null
     */
    public $check_excel_restriction;

    public function __construct($file = null, $text = null, $password = null, $sheetname = null, $check_excel_restriction = null)
    {
        $this->file = $file;
        $this->text = $text;
        $this->password = $password;
        $this->sheetname = $sheetname;
        $this->check_excel_restriction = $check_excel_restriction;
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
        $resourcePath = '/v3.0/cells/search';
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
        if ($this->text !== null) {
            $queryParams['text'] = ObjectSerializer::toQueryValue($this->text);
        }
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        if ($this->sheetname !== null) {
            $queryParams['sheetname'] = ObjectSerializer::toQueryValue($this->sheetname);
        }
        if ($this->check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($this->check_excel_restriction);
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
        if ($this->file !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toMultipartFiles($this->file, 'File'));
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
        if ($this->file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling PostSearch');
        }
        if ($this->text === null) {
            throw new \InvalidArgumentException('Missing the required parameter $text when calling PostSearch');
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

        return new \GuzzleHttp\Psr7\Request('POST', $url, $headers, $httpBody);
    }
}
