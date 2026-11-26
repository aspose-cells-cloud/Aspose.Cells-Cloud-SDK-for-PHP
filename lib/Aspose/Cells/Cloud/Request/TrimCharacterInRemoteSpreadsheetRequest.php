<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TrimCharacterInRemoteSpreadsheetRequest.php">
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

class TrimCharacterInRemoteSpreadsheetRequest
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
     * range
     *
     * @var string|null
     */
    public $range;

    /**
     * trimContent
     *
     * @var string|null
     */
    public $trim_content;

    /**
     * trimLeading
     *
     * @var bool|null
     */
    public $trim_leading;

    /**
     * trimTrailing
     *
     * @var bool|null
     */
    public $trim_trailing;

    /**
     * trimSpaceBetweenWordTo1
     *
     * @var bool|null
     */
    public $trim_space_between_word_to1;

    /**
     * trimNonBreakingSpaces
     *
     * @var bool|null
     */
    public $trim_non_breaking_spaces;

    /**
     * removeExtraLineBreaks
     *
     * @var bool|null
     */
    public $remove_extra_line_breaks;

    /**
     * removeAllLineBreaks
     *
     * @var bool|null
     */
    public $remove_all_line_breaks;

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

    public function __construct($name = null, $worksheet = null, $range = null, $trim_content = null, $trim_leading = null, $trim_trailing = null, $trim_space_between_word_to1 = null, $trim_non_breaking_spaces = null, $remove_extra_line_breaks = null, $remove_all_line_breaks = null, $folder = null, $storage_name = null, $region = null, $password = null)
    {
        $this->name = $name;
        $this->worksheet = $worksheet;
        $this->range = $range;
        $this->trim_content = $trim_content;
        $this->trim_leading = $trim_leading;
        $this->trim_trailing = $trim_trailing;
        $this->trim_space_between_word_to1 = $trim_space_between_word_to1;
        $this->trim_non_breaking_spaces = $trim_non_breaking_spaces;
        $this->remove_extra_line_breaks = $remove_extra_line_breaks;
        $this->remove_all_line_breaks = $remove_all_line_breaks;
        $this->folder = $folder;
        $this->storage_name = $storage_name;
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
        $resourcePath = '/v4.0/cells/{name}/worksheets/{worksheet}/range/{range}/content/trim';
        if ($this->name !== null) {
            $resourcePath = str_replace('{name}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }
        if ($this->worksheet !== null) {
            $resourcePath = str_replace('{worksheet}', ObjectSerializer::toPathValue($this->worksheet), $resourcePath);
        }
        if ($this->range !== null) {
            $resourcePath = str_replace('{range}', ObjectSerializer::toPathValue($this->range), $resourcePath);
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
        if ($this->trim_content !== null) {
            $queryParams['trimContent'] = ObjectSerializer::toQueryValue($this->trim_content);
        }
        if ($this->trim_leading !== null) {
            $queryParams['trimLeading'] = ObjectSerializer::toQueryValue($this->trim_leading);
        }
        if ($this->trim_trailing !== null) {
            $queryParams['trimTrailing'] = ObjectSerializer::toQueryValue($this->trim_trailing);
        }
        if ($this->trim_space_between_word_to1 !== null) {
            $queryParams['trimSpaceBetweenWordTo1'] = ObjectSerializer::toQueryValue($this->trim_space_between_word_to1);
        }
        if ($this->trim_non_breaking_spaces !== null) {
            $queryParams['trimNonBreakingSpaces'] = ObjectSerializer::toQueryValue($this->trim_non_breaking_spaces);
        }
        if ($this->remove_extra_line_breaks !== null) {
            $queryParams['removeExtraLineBreaks'] = ObjectSerializer::toQueryValue($this->remove_extra_line_breaks);
        }
        if ($this->remove_all_line_breaks !== null) {
            $queryParams['removeAllLineBreaks'] = ObjectSerializer::toQueryValue($this->remove_all_line_breaks);
        }
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling TrimCharacterInRemoteSpreadsheet');
        }
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException('Missing the required parameter $worksheet when calling TrimCharacterInRemoteSpreadsheet');
        }
        if ($this->range === null) {
            throw new \InvalidArgumentException('Missing the required parameter $range when calling TrimCharacterInRemoteSpreadsheet');
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
