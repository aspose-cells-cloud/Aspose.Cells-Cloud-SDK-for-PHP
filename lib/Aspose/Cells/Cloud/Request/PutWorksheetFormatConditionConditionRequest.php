<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetFormatConditionConditionRequest.php">
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

class PutWorksheetFormatConditionConditionRequest
{
    /**
     * name
     *
     * @var string|null
     */
    public $name;

    /**
     * sheetName
     *
     * @var string|null
     */
    public $sheet_name;

    /**
     * index
     *
     * @var int|null
     */
    public $index;

    /**
     * type
     *
     * @var string|null
     */
    public $type;

    /**
     * operatorType
     *
     * @var string|null
     */
    public $operator_type;

    /**
     * formula1
     *
     * @var string|null
     */
    public $formula1;

    /**
     * formula2
     *
     * @var string|null
     */
    public $formula2;

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

    public function __construct($name = null, $sheet_name = null, $index = null, $type = null, $operator_type = null, $formula1 = null, $formula2 = null, $folder = null, $storage_name = null)
    {
        $this->name = $name;
        $this->sheet_name = $sheet_name;
        $this->index = $index;
        $this->type = $type;
        $this->operator_type = $operator_type;
        $this->formula1 = $formula1;
        $this->formula2 = $formula2;
        $this->folder = $folder;
        $this->storage_name = $storage_name;
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
        $resourcePath = '/v3.0/cells/{name}/worksheets/{sheetName}/conditionalFormattings/{index}/condition';
        if ($this->name !== null) {
            $resourcePath = str_replace('{name}', ObjectSerializer::toPathValue($this->name), $resourcePath);
        }
        if ($this->sheet_name !== null) {
            $resourcePath = str_replace('{sheetName}', ObjectSerializer::toPathValue($this->sheet_name), $resourcePath);
        }
        if ($this->index !== null) {
            $resourcePath = str_replace('{index}', ObjectSerializer::toPathValue($this->index), $resourcePath);
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
        if ($this->type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($this->type);
        }
        if ($this->operator_type !== null) {
            $queryParams['operatorType'] = ObjectSerializer::toQueryValue($this->operator_type);
        }
        if ($this->formula1 !== null) {
            $queryParams['formula1'] = ObjectSerializer::toQueryValue($this->formula1);
        }
        if ($this->formula2 !== null) {
            $queryParams['formula2'] = ObjectSerializer::toQueryValue($this->formula2);
        }
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling PutWorksheetFormatConditionCondition');
        }
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sheet_name when calling PutWorksheetFormatConditionCondition');
        }
        if ($this->index === null) {
            throw new \InvalidArgumentException('Missing the required parameter $index when calling PutWorksheetFormatConditionCondition');
        }
        if ($this->type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling PutWorksheetFormatConditionCondition');
        }
        if ($this->operator_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operator_type when calling PutWorksheetFormatConditionCondition');
        }
        if ($this->formula1 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $formula1 when calling PutWorksheetFormatConditionCondition');
        }
        if ($this->formula2 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $formula2 when calling PutWorksheetFormatConditionCondition');
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
