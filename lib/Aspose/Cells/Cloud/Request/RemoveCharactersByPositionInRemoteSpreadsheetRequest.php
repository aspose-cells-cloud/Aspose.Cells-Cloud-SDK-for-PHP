<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RemoveCharactersByPositionInRemoteSpreadsheetRequest.php">
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

class RemoveCharactersByPositionInRemoteSpreadsheetRequest
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
     * theFirstNCharacters
     *
     * @var int|null
     */
    public $the_first_n_characters;

    /**
     * theLastNCharacters
     *
     * @var int|null
     */
    public $the_last_n_characters;

    /**
     * allCharactersBeforeText
     *
     * @var string|null
     */
    public $all_characters_before_text;

    /**
     * allCharactersAfterText
     *
     * @var string|null
     */
    public $all_characters_after_text;

    /**
     * caseSensitive
     *
     * @var bool|null
     */
    public $case_sensitive;

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

    public function __construct($name = null, $worksheet = null, $range = null, $the_first_n_characters = null, $the_last_n_characters = null, $all_characters_before_text = null, $all_characters_after_text = null, $case_sensitive = null, $folder = null, $storage_name = null, $region = null, $password = null)
    {
        $this->name = $name;
        $this->worksheet = $worksheet;
        $this->range = $range;
        $this->the_first_n_characters = $the_first_n_characters;
        $this->the_last_n_characters = $the_last_n_characters;
        $this->all_characters_before_text = $all_characters_before_text;
        $this->all_characters_after_text = $all_characters_after_text;
        $this->case_sensitive = $case_sensitive;
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
        $resourcePath = '/v4.0/cells/{name}/worksheets/{worksheet}/range/{range}/content/remove/characters-by-position';
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
        if ($this->the_first_n_characters !== null) {
            $queryParams['theFirstNCharacters'] = ObjectSerializer::toQueryValue($this->the_first_n_characters);
        }
        if ($this->the_last_n_characters !== null) {
            $queryParams['theLastNCharacters'] = ObjectSerializer::toQueryValue($this->the_last_n_characters);
        }
        if ($this->all_characters_before_text !== null) {
            $queryParams['allCharactersBeforeText'] = ObjectSerializer::toQueryValue($this->all_characters_before_text);
        }
        if ($this->all_characters_after_text !== null) {
            $queryParams['allCharactersAfterText'] = ObjectSerializer::toQueryValue($this->all_characters_after_text);
        }
        if ($this->case_sensitive !== null) {
            $queryParams['caseSensitive'] = ObjectSerializer::toQueryValue($this->case_sensitive);
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling RemoveCharactersByPositionInRemoteSpreadsheet');
        }
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException('Missing the required parameter $worksheet when calling RemoveCharactersByPositionInRemoteSpreadsheet');
        }
        if ($this->range === null) {
            throw new \InvalidArgumentException('Missing the required parameter $range when calling RemoveCharactersByPositionInRemoteSpreadsheet');
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
