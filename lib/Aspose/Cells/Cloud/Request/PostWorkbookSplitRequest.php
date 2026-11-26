<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostWorkbookSplitRequest.php">
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

class PostWorkbookSplitRequest
{
    /**
     * name
     *
     * @var string|null
     */
    public $name;

    /**
     * format
     *
     * @var string|null
     */
    public $format;

    /**
     * outFolder
     *
     * @var string|null
     */
    public $out_folder;

    /**
     * from
     *
     * @var int|null
     */
    public $from;

    /**
     * to
     *
     * @var int|null
     */
    public $to;

    /**
     * horizontalResolution
     *
     * @var int|null
     */
    public $horizontal_resolution;

    /**
     * verticalResolution
     *
     * @var int|null
     */
    public $vertical_resolution;

    /**
     * splitNameRule
     *
     * @var string|null
     */
    public $split_name_rule;

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
     * outStorageName
     *
     * @var string|null
     */
    public $out_storage_name;

    public function __construct($name = null, $format = null, $out_folder = null, $from = null, $to = null, $horizontal_resolution = null, $vertical_resolution = null, $split_name_rule = null, $folder = null, $storage_name = null, $out_storage_name = null)
    {
        $this->name = $name;
        $this->format = $format;
        $this->out_folder = $out_folder;
        $this->from = $from;
        $this->to = $to;
        $this->horizontal_resolution = $horizontal_resolution;
        $this->vertical_resolution = $vertical_resolution;
        $this->split_name_rule = $split_name_rule;
        $this->folder = $folder;
        $this->storage_name = $storage_name;
        $this->out_storage_name = $out_storage_name;
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
        $resourcePath = '/v3.0/cells/{name}/split';
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
        if ($this->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($this->format);
        }
        if ($this->out_folder !== null) {
            $queryParams['outFolder'] = ObjectSerializer::toQueryValue($this->out_folder);
        }
        if ($this->from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($this->from);
        }
        if ($this->to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($this->to);
        }
        if ($this->horizontal_resolution !== null) {
            $queryParams['horizontalResolution'] = ObjectSerializer::toQueryValue($this->horizontal_resolution);
        }
        if ($this->vertical_resolution !== null) {
            $queryParams['verticalResolution'] = ObjectSerializer::toQueryValue($this->vertical_resolution);
        }
        if ($this->split_name_rule !== null) {
            $queryParams['splitNameRule'] = ObjectSerializer::toQueryValue($this->split_name_rule);
        }
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling PostWorkbookSplit');
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
