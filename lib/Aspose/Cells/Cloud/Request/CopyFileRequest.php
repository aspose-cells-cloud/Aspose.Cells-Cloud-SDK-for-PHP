<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyFileRequest.php">
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

class CopyFileRequest
{
    /**
     * srcPath
     *
     * @var string|null
     */
    public $src_path;

    /**
     * destPath
     *
     * @var string|null
     */
    public $dest_path;

    /**
     * srcStorageName
     *
     * @var string|null
     */
    public $src_storage_name;

    /**
     * destStorageName
     *
     * @var string|null
     */
    public $dest_storage_name;

    /**
     * versionId
     *
     * @var string|null
     */
    public $version_id;

    public function __construct($src_path = null, $dest_path = null, $src_storage_name = null, $dest_storage_name = null, $version_id = null)
    {
        $this->src_path = $src_path;
        $this->dest_path = $dest_path;
        $this->src_storage_name = $src_storage_name;
        $this->dest_storage_name = $dest_storage_name;
        $this->version_id = $version_id;
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
        $resourcePath = '/v4.0/cells/storage/file/copy/{srcPath}';
        if ($this->src_path !== null) {
            $resourcePath = str_replace('{srcPath}', ObjectSerializer::toPathValue($this->src_path), $resourcePath);
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
        if ($this->dest_path !== null) {
            $queryParams['destPath'] = ObjectSerializer::toQueryValue($this->dest_path);
        }
        if ($this->src_storage_name !== null) {
            $queryParams['srcStorageName'] = ObjectSerializer::toQueryValue($this->src_storage_name);
        }
        if ($this->dest_storage_name !== null) {
            $queryParams['destStorageName'] = ObjectSerializer::toQueryValue($this->dest_storage_name);
        }
        if ($this->version_id !== null) {
            $queryParams['versionId'] = ObjectSerializer::toQueryValue($this->version_id);
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
        if ($this->src_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $src_path when calling CopyFile');
        }
        if ($this->dest_path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dest_path when calling CopyFile');
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
