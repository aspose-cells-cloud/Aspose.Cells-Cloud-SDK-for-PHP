<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutConvertWorkbookRequest.php">
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

class PutConvertWorkbookRequest
{
    /**
     * File
     *
     * @var \SplFileObject|null
     */
    public $file;

    /**
     * format
     *
     * @var string|null
     */
    public $format;

    /**
     * password
     *
     * @var string|null
     */
    public $password;

    /**
     * outPath
     *
     * @var string|null
     */
    public $out_path;

    /**
     * storageName
     *
     * @var string|null
     */
    public $storage_name;

    /**
     * checkExcelRestriction
     *
     * @var bool|null
     */
    public $check_excel_restriction;

    /**
     * streamFormat
     *
     * @var string|null
     */
    public $stream_format;

    /**
     * region
     *
     * @var string|null
     */
    public $region;

    /**
     * pageWideFitOnPerSheet
     *
     * @var bool|null
     */
    public $page_wide_fit_on_per_sheet;

    /**
     * pageTallFitOnPerSheet
     *
     * @var bool|null
     */
    public $page_tall_fit_on_per_sheet;

    /**
     * sheetName
     *
     * @var string|null
     */
    public $sheet_name;

    /**
     * pageIndex
     *
     * @var int|null
     */
    public $page_index;

    /**
     * onePagePerSheet
     *
     * @var bool|null
     */
    public $one_page_per_sheet;

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
     * FontsLocation
     *
     * @var string|null
     */
    public $fonts_location;

    public function __construct($file = null, $format = null, $password = null, $out_path = null, $storage_name = null, $check_excel_restriction = null, $stream_format = null, $region = null, $page_wide_fit_on_per_sheet = null, $page_tall_fit_on_per_sheet = null, $sheet_name = null, $page_index = null, $one_page_per_sheet = null, $auto_rows_fit = null, $auto_columns_fit = null, $fonts_location = null)
    {
        $this->file = $file;
        $this->format = $format;
        $this->password = $password;
        $this->out_path = $out_path;
        $this->storage_name = $storage_name;
        $this->check_excel_restriction = $check_excel_restriction;
        $this->stream_format = $stream_format;
        $this->region = $region;
        $this->page_wide_fit_on_per_sheet = $page_wide_fit_on_per_sheet;
        $this->page_tall_fit_on_per_sheet = $page_tall_fit_on_per_sheet;
        $this->sheet_name = $sheet_name;
        $this->page_index = $page_index;
        $this->one_page_per_sheet = $one_page_per_sheet;
        $this->auto_rows_fit = $auto_rows_fit;
        $this->auto_columns_fit = $auto_columns_fit;
        $this->fonts_location = $fonts_location;
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
        $resourcePath = '/v3.0/cells/convert';
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
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
        if ($this->check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($this->check_excel_restriction);
        }
        if ($this->stream_format !== null) {
            $queryParams['streamFormat'] = ObjectSerializer::toQueryValue($this->stream_format);
        }
        if ($this->region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($this->region);
        }
        if ($this->page_wide_fit_on_per_sheet !== null) {
            $queryParams['pageWideFitOnPerSheet'] = ObjectSerializer::toQueryValue($this->page_wide_fit_on_per_sheet);
        }
        if ($this->page_tall_fit_on_per_sheet !== null) {
            $queryParams['pageTallFitOnPerSheet'] = ObjectSerializer::toQueryValue($this->page_tall_fit_on_per_sheet);
        }
        if ($this->sheet_name !== null) {
            $queryParams['sheetName'] = ObjectSerializer::toQueryValue($this->sheet_name);
        }
        if ($this->page_index !== null) {
            $queryParams['pageIndex'] = ObjectSerializer::toQueryValue($this->page_index);
        }
        if ($this->one_page_per_sheet !== null) {
            $queryParams['onePagePerSheet'] = ObjectSerializer::toQueryValue($this->one_page_per_sheet);
        }
        if ($this->auto_rows_fit !== null) {
            $queryParams['AutoRowsFit'] = ObjectSerializer::toQueryValue($this->auto_rows_fit);
        }
        if ($this->auto_columns_fit !== null) {
            $queryParams['AutoColumnsFit'] = ObjectSerializer::toQueryValue($this->auto_columns_fit);
        }
        if ($this->fonts_location !== null) {
            $queryParams['FontsLocation'] = ObjectSerializer::toQueryValue($this->fonts_location);
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
            throw new \InvalidArgumentException('Missing the required parameter $file when calling PutConvertWorkbook');
        }
        if ($this->format === null) {
            throw new \InvalidArgumentException('Missing the required parameter $format when calling PutConvertWorkbook');
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
