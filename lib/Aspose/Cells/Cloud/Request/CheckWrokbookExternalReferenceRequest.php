<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CheckWrokbookExternalReferenceRequest.php">
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

class CheckWrokbookExternalReferenceRequest
{
    /**
     * checkExternalReferenceOptions
     *
     * @var CheckExternalReferenceOptions|null
     */
    public $check_external_reference_options;

    public function __construct($check_external_reference_options = null)
    {
        $this->check_external_reference_options = $check_external_reference_options;
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
        $resourcePath = '/v3.0/cells/checkexternalreference';
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
        return $queryParams;
    }

    /**
     * The HTTP body for the request, serialized for JSON transport.
     *
     * @return string|null
     */
    public function getBody()
    {
        if ($this->check_external_reference_options === null) {
            return null;
        }
        $sanitized = ObjectSerializer::sanitizeForSerialization($this->check_external_reference_options);
        if (is_string($sanitized)) {
            return $sanitized;
        }
        return json_encode($sanitized);
    }

    /**
     * Verify that all required parameters are set.
     *
     * @throws \InvalidArgumentException when a required parameter is missing
     * @return bool
     */
    public function validate()
    {
        if ($this->check_external_reference_options === null) {
            throw new \InvalidArgumentException('Missing the required parameter $check_external_reference_options when calling CheckWrokbookExternalReference');
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
        $httpBody = $this->getBody();

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
