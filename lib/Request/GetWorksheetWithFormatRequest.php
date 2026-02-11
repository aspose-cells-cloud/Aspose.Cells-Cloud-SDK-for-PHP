<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GetWorksheetWithFormatRequest.cs">
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
 * Request model for  GetWorksheetWithFormat operation.
 */

class GetWorksheetWithFormatRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * name : The file name.
    */ 
    public $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    /*
    * sheetName : The worksheet name.
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
    * format : Export format(CSV/XLS/HTML/MHTML/ODS/PDF/XML/TXT/TIFF/XLSB/XLSM/XLSX/XLTM/XLTX/XPS/PNG/JPG/JPEG/GIF/EMF/BMP/MD[Markdown]/Numbers).
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
    * verticalResolution : Image vertical resolution.
    */ 
    public $vertical_resolution;

    public function getVerticalResolution()
    {
        return $this->vertical_resolution;
    }

    public function setVerticalResolution($value)
    {
        $this->vertical_resolution = $value;
    }

    /*
    * horizontalResolution : Image horizontal resolution.
    */ 
    public $horizontal_resolution;

    public function getHorizontalResolution()
    {
        return $this->horizontal_resolution;
    }

    public function setHorizontalResolution($value)
    {
        $this->horizontal_resolution = $value;
    }

    /*
    * area : Represents the range to be printed.
    */ 
    public $area;

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($value)
    {
        $this->area = $value;
    }

    /*
    * pageIndex : Represents the page to be printed
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
    * onePagePerSheet : 
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
    * printHeadings : 
    */ 
    public $print_headings;

    public function getPrintHeadings()
    {
        return $this->print_headings;
    }

    public function setPrintHeadings($value)
    {
        $this->print_headings = $value;
    }

    /*
    * folder : The folder where the file is situated.
    */ 
    public $folder;

    public function getFolder()
    {
        return $this->folder;
    }

    public function setFolder($value)
    {
        $this->folder = $value;
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

    public function __construct( $name = null,$sheet_name = null )
    {        
        $this->name = $name; 
        $this->sheet_name = $sheet_name; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling GetWorksheetWithFormat'
            );
        }


        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling GetWorksheetWithFormat'
            );
        }


        $resourcePath = 'v3.0/cells/{name}/worksheets/{sheetName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // name params
        if ($this->name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($this->name),
                $resourcePath
            );
        }
        // sheet_name params
        if ($this->sheet_name !== null) {
            $resourcePath = str_replace(
                '{' . 'sheetName' . '}',
                ObjectSerializer::toPathValue($this->sheet_name),
                $resourcePath
            );
        }
        // query params : format
        if ($this->format !== null) {
            $queryParams['format'] = ObjectSerializer::toQueryValue($this->format);
        }
        // query params : vertical_resolution
        if ($this->vertical_resolution !== null) {
            $queryParams['verticalResolution'] = ObjectSerializer::toQueryValue($this->vertical_resolution);
        }
        // query params : horizontal_resolution
        if ($this->horizontal_resolution !== null) {
            $queryParams['horizontalResolution'] = ObjectSerializer::toQueryValue($this->horizontal_resolution);
        }
        // query params : area
        if ($this->area !== null) {
            $queryParams['area'] = ObjectSerializer::toQueryValue($this->area);
        }
        // query params : page_index
        if ($this->page_index !== null) {
            $queryParams['pageIndex'] = ObjectSerializer::toQueryValue($this->page_index);
        }
        // query params : one_page_per_sheet
        if ($this->one_page_per_sheet !== null) {
            $queryParams['onePagePerSheet'] = ObjectSerializer::toQueryValue($this->one_page_per_sheet);
        }
        // query params : print_headings
        if ($this->print_headings !== null) {
            $queryParams['printHeadings'] = ObjectSerializer::toQueryValue($this->print_headings);
        }
        // query params : folder
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        // query params : storage_name
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
        if( $this->expandQueryParameters !== null){
            foreach($this->expandQueryParameters as $queryName => $queryValue) {
                $queryParams[$queryName] = ObjectSerializer::toQueryValue($queryValue);
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
        $defaultHeaders['x-aspose-client-version'] = '26.2';
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}