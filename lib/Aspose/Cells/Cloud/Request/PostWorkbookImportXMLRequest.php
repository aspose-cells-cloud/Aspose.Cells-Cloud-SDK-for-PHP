<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostWorkbookImportXMLRequest.php">
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

class PostWorkbookImportXMLRequest
{
    /**
     * name
     *
     * @var string|null
     */
    public $name;

    /**
     * importXMLRequest
     *
     * @var ImportXMLRequest|null
     */
    public $import_xml_request;

    /**
     * password
     *
     * @var string|null
     */
    public $password;

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
     * checkExcelRestriction
     *
     * @var bool|null
     */
    public $check_excel_restriction;

    /**
     * region
     *
     * @var string|null
     */
    public $region;

    public function __construct($name = null, $import_xml_request = null, $password = null, $folder = null, $storage_name = null, $out_path = null, $out_storage_name = null, $check_excel_restriction = null, $region = null)
    {
        $this->name = $name;
        $this->import_xml_request = $import_xml_request;
        $this->password = $password;
        $this->folder = $folder;
        $this->storage_name = $storage_name;
        $this->out_path = $out_path;
        $this->out_storage_name = $out_storage_name;
        $this->check_excel_restriction = $check_excel_restriction;
        $this->region = $region;
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
        $resourcePath = '/v3.0/cells/{name}/importxml';
        if ($this->name !== null) {
            $resourcePath = str_replace('{name}', ObjectSerializer::toPathValue($this->name), $resourcePath);
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
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
        }
        if ($this->check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($this->check_excel_restriction);
        }
        if ($this->region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($this->region);
        }
        return $queryParams;
    }

    /**
     * The HTTP body for the request, serialized for JSON transport.
     *
     * @return string|null
     */
    public function getBody()
    {
        if ($this->import_xml_request === null) {
            return null;
        }
        $sanitized = ObjectSerializer::sanitizeForSerialization($this->import_xml_request);
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
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling PostWorkbookImportXML');
        }
        if ($this->import_xml_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $import_xml_request when calling PostWorkbookImportXML');
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
