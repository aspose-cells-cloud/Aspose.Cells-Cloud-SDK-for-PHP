<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostWorkbookSaveAsRequest.php">
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

class PostWorkbookSaveAsRequest
{
    /**
     * name
     *
     * @var string|null
     */
    public $name;

    /**
     * newfilename
     *
     * @var string|null
     */
    public $newfilename;

    /**
     * saveOptions
     *
     * @var SaveOptions|null
     */
    public $save_options;

    /**
     * isAutoFitRows
     *
     * @var bool|null
     */
    public $is_auto_fit_rows;

    /**
     * isAutoFitColumns
     *
     * @var bool|null
     */
    public $is_auto_fit_columns;

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
     * onePagePerSheet
     *
     * @var bool|null
     */
    public $one_page_per_sheet;

    /**
     * FontsLocation
     *
     * @var string|null
     */
    public $fonts_location;

    public function __construct($name = null, $newfilename = null, $save_options = null, $is_auto_fit_rows = null, $is_auto_fit_columns = null, $folder = null, $storage_name = null, $out_storage_name = null, $check_excel_restriction = null, $region = null, $page_wide_fit_on_per_sheet = null, $page_tall_fit_on_per_sheet = null, $one_page_per_sheet = null, $fonts_location = null)
    {
        $this->name = $name;
        $this->newfilename = $newfilename;
        $this->save_options = $save_options;
        $this->is_auto_fit_rows = $is_auto_fit_rows;
        $this->is_auto_fit_columns = $is_auto_fit_columns;
        $this->folder = $folder;
        $this->storage_name = $storage_name;
        $this->out_storage_name = $out_storage_name;
        $this->check_excel_restriction = $check_excel_restriction;
        $this->region = $region;
        $this->page_wide_fit_on_per_sheet = $page_wide_fit_on_per_sheet;
        $this->page_tall_fit_on_per_sheet = $page_tall_fit_on_per_sheet;
        $this->one_page_per_sheet = $one_page_per_sheet;
        $this->fonts_location = $fonts_location;
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
        $resourcePath = '/v3.0/cells/{name}/SaveAs';
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
        if ($this->newfilename !== null) {
            $queryParams['newfilename'] = ObjectSerializer::toQueryValue($this->newfilename);
        }
        if ($this->is_auto_fit_rows !== null) {
            $queryParams['isAutoFitRows'] = ObjectSerializer::toQueryValue($this->is_auto_fit_rows);
        }
        if ($this->is_auto_fit_columns !== null) {
            $queryParams['isAutoFitColumns'] = ObjectSerializer::toQueryValue($this->is_auto_fit_columns);
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
        if ($this->check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($this->check_excel_restriction);
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
        if ($this->one_page_per_sheet !== null) {
            $queryParams['onePagePerSheet'] = ObjectSerializer::toQueryValue($this->one_page_per_sheet);
        }
        if ($this->fonts_location !== null) {
            $queryParams['FontsLocation'] = ObjectSerializer::toQueryValue($this->fonts_location);
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
        if ($this->save_options === null) {
            return null;
        }
        $sanitized = ObjectSerializer::sanitizeForSerialization($this->save_options);
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
            throw new \InvalidArgumentException('Missing the required parameter $name when calling PostWorkbookSaveAs');
        }
        if ($this->newfilename === null) {
            throw new \InvalidArgumentException('Missing the required parameter $newfilename when calling PostWorkbookSaveAs');
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
