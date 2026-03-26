<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutConvertWorkbookRequest.cs">
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

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Cells\Cloud\ObjectSerializer;
use Aspose\Cells\Cloud\HeaderSelector;
use Asapose\Cells\Cloud\Configuration;

/*
 * Request model for  PutConvertWorkbook operation.
 */

class PutConvertWorkbookRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * File : File to upload
    */ 
    public $file;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($value)
    {
        $this->file = $value;
    }

    /*
    * format : The format to convert(CSV/XLS/HTML/MHTML/ODS/PDF/XML/TXT/TIFF/XLSB/XLSM/XLSX/XLTM/XLTX/XPS/PNG/JPG/JPEG/GIF/EMF/BMP/MD[Markdown]/Numbers).
    */ 
    public $format;

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($value)
    {
        $this->format = $value;
    }

    /*
    * password : The password needed to open an Excel file.
    */ 
    public $password;

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }

    /*
    * outPath : Path to save the result. If it's a single file, the `outPath` should encompass both the filename and extension. In the case of multiple files, the `outPath` should only include the folder.
    */ 
    public $out_path;

    public function getOutPath()
    {
        return $this->out_path;
    }

    public function setOutPath($value)
    {
        $this->out_path = $value;
    }

    /*
    * storageName : The storage name where the file is situated.
    */ 
    public $storage_name;

    public function getStorageName()
    {
        return $this->storage_name;
    }

    public function setStorageName($value)
    {
        $this->storage_name = $value;
    }

    /*
    * checkExcelRestriction : Whether check restriction of excel file when user modify cells related objects.
    */ 
    public $check_excel_restriction;

    public function getCheckExcelRestriction()
    {
        return $this->check_excel_restriction;
    }

    public function setCheckExcelRestriction($value)
    {
        $this->check_excel_restriction = $value;
    }

    /*
    * streamFormat : The format of the input file stream. 
    */ 
    public $stream_format;

    public function getStreamFormat()
    {
        return $this->stream_format;
    }

    public function setStreamFormat($value)
    {
        $this->stream_format = $value;
    }

    /*
    * region : The regional settings for workbook.
    */ 
    public $region;

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($value)
    {
        $this->region = $value;
    }

    /*
    * pageWideFitOnPerSheet : The page wide fit on worksheet.
    */ 
    public $page_wide_fit_on_per_sheet;

    public function getPageWideFitOnPerSheet()
    {
        return $this->page_wide_fit_on_per_sheet;
    }

    public function setPageWideFitOnPerSheet($value)
    {
        $this->page_wide_fit_on_per_sheet = $value;
    }

    /*
    * pageTallFitOnPerSheet : The page tall fit on worksheet.
    */ 
    public $page_tall_fit_on_per_sheet;

    public function getPageTallFitOnPerSheet()
    {
        return $this->page_tall_fit_on_per_sheet;
    }

    public function setPageTallFitOnPerSheet($value)
    {
        $this->page_tall_fit_on_per_sheet = $value;
    }

    /*
    * sheetName : Convert the specified worksheet. 
    */ 
    public $sheet_name;

    public function getSheetName()
    {
        return $this->sheet_name;
    }

    public function setSheetName($value)
    {
        $this->sheet_name = $value;
    }

    /*
    * pageIndex : Convert the specified page  of worksheet, sheetName is required. 
    */ 
    public $page_index;

    public function getPageIndex()
    {
        return $this->page_index;
    }

    public function setPageIndex($value)
    {
        $this->page_index = $value;
    }

    /*
    * onePagePerSheet : When converting to PDF format, one page per sheet. 
    */ 
    public $one_page_per_sheet;

    public function getOnePagePerSheet()
    {
        return $this->one_page_per_sheet;
    }

    public function setOnePagePerSheet($value)
    {
        $this->one_page_per_sheet = $value;
    }

    /*
    * AutoRowsFit : Auto-fits all rows in this workbook.
    */ 
    public $auto_rows_fit;

    public function getAutoRowsFit()
    {
        return $this->auto_rows_fit;
    }

    public function setAutoRowsFit($value)
    {
        $this->auto_rows_fit = $value;
    }

    /*
    * AutoColumnsFit : Auto-fits the columns width in this workbook.
    */ 
    public $auto_columns_fit;

    public function getAutoColumnsFit()
    {
        return $this->auto_columns_fit;
    }

    public function setAutoColumnsFit($value)
    {
        $this->auto_columns_fit = $value;
    }

    /*
    * FontsLocation : Use Custom fonts.
    */ 
    public $fonts_location;

    public function getFontsLocation()
    {
        return $this->fonts_location;
    }

    public function setFontsLocation($value)
    {
        $this->fonts_location = $value;
    }

    public function __construct( $file = null,$format = null )
    {        
        $this->file = $file; 
        $this->format = $format; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'file' is set
        if ($this->file === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling PutConvertWorkbook'
            );
        }


        // verify the required parameter 'format' is set
        if ($this->format === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $format when calling PutConvertWorkbook'
            );
        }


        $resourcePath = 'v3.0/cells/convert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // query params : format
        if ($this->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($this->format);
        }
        // query params : password
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
        }
        // query params : out_path
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        // query params : storage_name
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
        // query params : check_excel_restriction
        if ($this->check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($this->check_excel_restriction);
        }
        // query params : stream_format
        if ($this->stream_format !== null) {
            $queryParams['streamFormat'] = ObjectSerializer::toQueryValue($this->stream_format);
        }
        // query params : region
        if ($this->region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($this->region);
        }
        // query params : page_wide_fit_on_per_sheet
        if ($this->page_wide_fit_on_per_sheet !== null) {
            $queryParams['pageWideFitOnPerSheet'] = ObjectSerializer::toQueryValue($this->page_wide_fit_on_per_sheet);
        }
        // query params : page_tall_fit_on_per_sheet
        if ($this->page_tall_fit_on_per_sheet !== null) {
            $queryParams['pageTallFitOnPerSheet'] = ObjectSerializer::toQueryValue($this->page_tall_fit_on_per_sheet);
        }
        // query params : sheet_name
        if ($this->sheet_name !== null) {
            $queryParams['sheetName'] = ObjectSerializer::toQueryValue($this->sheet_name);
        }
        // query params : page_index
        if ($this->page_index !== null) {
            $queryParams['pageIndex'] = ObjectSerializer::toQueryValue($this->page_index);
        }
        // query params : one_page_per_sheet
        if ($this->one_page_per_sheet !== null) {
            $queryParams['onePagePerSheet'] = ObjectSerializer::toQueryValue($this->one_page_per_sheet);
        }
        // query params : auto_rows_fit
        if ($this->auto_rows_fit !== null) {
            $queryParams['AutoRowsFit'] = ObjectSerializer::toQueryValue($this->auto_rows_fit);
        }
        // query params : auto_columns_fit
        if ($this->auto_columns_fit !== null) {
            $queryParams['AutoColumnsFit'] = ObjectSerializer::toQueryValue($this->auto_columns_fit);
        }
        // query params : fonts_location
        if ($this->fonts_location !== null) {
            $queryParams['FontsLocation'] = ObjectSerializer::toQueryValue($this->fonts_location);
        }
        if( $this->expandQueryParameters !== null){
            foreach($this->expandQueryParameters as $queryName => $queryValue) {
                $queryParams[$queryName] = ObjectSerializer::toQueryValue($queryValue);
            }
        }
        if ($this->file !== null) {
            $multipart = true;
            if( is_array($this->file)){
                foreach($this->file as $key => $value) {
                    $formParams[basename($key)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams[basename($this->file)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($this->file), 'rb');
            }
        }

    // body params
        $_tempBody = null;
        $_tempBodyName =null;
        if ($multipart) {
            $headers = $headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                if (isset($_tempBody)) {
                    $httpBody = $_tempBody;
                    $multipartContents[] = [
                        'name' =>$_tempBodyName ,
                        'filename' =>$_tempBodyName ,
                        'contents' => json_encode( ObjectSerializer::sanitizeForSerialization($httpBody)) 
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }elseif (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
            else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }

        }

        $defaultHeaders = [];
        if ($config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $config->getUserAgent();
        }
        if($config->getAccessToken()!==''){
            $defaultHeaders['Authorization']= 'Bearer ' . $config->getAccessToken();
        }
        $defaultHeaders['x-aspose-client'] = 'php sdk';
        $defaultHeaders['x-aspose-client-version'] = '26.3.1';
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PUT',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}