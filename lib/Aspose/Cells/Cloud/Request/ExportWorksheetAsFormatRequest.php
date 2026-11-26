<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExportWorksheetAsFormatRequest.php">
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

class ExportWorksheetAsFormatRequest
{
    /**
     * name
     *
     * @var string|null
     */
    public $name;

    /**
     * worksheet
     *
     * @var string|null
     */
    public $worksheet;

    /**
     * format
     *
     * @var string|null
     */
    public $format;

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
     * fontsLocation
     *
     * @var string|null
     */
    public $fonts_location;

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

    public function __construct($name = null, $worksheet = null, $format = null, $folder = null, $storage_name = null, $out_path = null, $out_storage_name = null, $fonts_location = null, $auto_rows_fit = null, $auto_columns_fit = null, $region = null, $password = null)
    {
        $this->name = $name;
        $this->worksheet = $worksheet;
        $this->format = $format;
        $this->folder = $folder;
        $this->storage_name = $storage_name;
        $this->out_path = $out_path;
        $this->out_storage_name = $out_storage_name;
        $this->fonts_location = $fonts_location;
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
        return 'GET';
    }

    /**
     * The resource path, with path parameters substituted.
     *
     * @return string
     */
    public function getPath()
    {
        $resourcePath = '/v4.0/cells/{name}/worksheets/{worksheet}';
        if ($this->name !== null) {
            $resourcePath = str_replace('{name}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }
        if ($this->worksheet !== null) {
            $resourcePath = str_replace('{worksheet}', ObjectSerializer::toPathValue($this->worksheet), $resourcePath);
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
        if ($this->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($this->format);
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
        if ($this->fonts_location !== null) {
            $queryParams['fontsLocation'] = ObjectSerializer::toQueryValue($this->fonts_location);
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
     * Verify that all required parameters are set.
     *
     * @throws \InvalidArgumentException when a required parameter is missing
     * @return bool
     */
    public function validate()
    {
        if ($this->name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling ExportWorksheetAsFormat');
        }
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException('Missing the required parameter $worksheet when calling ExportWorksheetAsFormat');
        }
        if ($this->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling ExportWorksheetAsFormat');
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

        return new \GuzzleHttp\Psr7\Request('GET', $url, $headers, $httpBody);
    }
}
