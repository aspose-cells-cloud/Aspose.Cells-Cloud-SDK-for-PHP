<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostWorkbookSaveAsRequest.cs">
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
 * Request model for  PostWorkbookSaveAs operation.
 */

class PostWorkbookSaveAsRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * name : The workbook name.
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
    * newfilename : newfilename to save the result.The `newfilename` should encompass both the filename and extension.
    */ 
    public $newfilename;

    public function getNewfilename()
    {
        return $this->newfilename;
    }

    public function setNewfilename($value)
    {
        $this->newfilename = $value;
    }

    /*
    * saveOptions : 
    */ 
    public $save_options;

    public function getSaveOptions()
    {
        return $this->save_options;
    }

    public function setSaveOptions($value)
    {
        $this->save_options = $value;
    }

    /*
    * isAutoFitRows : Indicates if Autofit rows in workbook.
    */ 
    public $is_auto_fit_rows;

    public function getIsAutoFitRows()
    {
        return $this->is_auto_fit_rows;
    }

    public function setIsAutoFitRows($value)
    {
        $this->is_auto_fit_rows = $value;
    }

    /*
    * isAutoFitColumns : Indicates if Autofit columns in workbook.
    */ 
    public $is_auto_fit_columns;

    public function getIsAutoFitColumns()
    {
        return $this->is_auto_fit_columns;
    }

    public function setIsAutoFitColumns($value)
    {
        $this->is_auto_fit_columns = $value;
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

    /*
    * outStorageName : The storage name where the output file is situated.
    */ 
    public $out_storage_name;

    public function getOutStorageName()
    {
        return $this->out_storage_name;
    }

    public function setOutStorageName($value)
    {
        $this->out_storage_name = $value;
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

    public function __construct( $name = null,$newfilename = null )
    {        
        $this->name = $name; 
        $this->newfilename = $newfilename; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling PostWorkbookSaveAs'
            );
        }


        // verify the required parameter 'newfilename' is set
        if ($this->newfilename === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $newfilename when calling PostWorkbookSaveAs'
            );
        }


        $resourcePath = 'v3.0/cells/{name}/SaveAs';
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
        // query params : newfilename
        if ($this->newfilename !== null) {
            $queryParams['newfilename'] = ObjectSerializer::toQueryValue($this->newfilename);
        }
        // query params : is_auto_fit_rows
        if ($this->is_auto_fit_rows !== null) {
            $queryParams['isAutoFitRows'] = ObjectSerializer::toQueryValue($this->is_auto_fit_rows);
        }
        // query params : is_auto_fit_columns
        if ($this->is_auto_fit_columns !== null) {
            $queryParams['isAutoFitColumns'] = ObjectSerializer::toQueryValue($this->is_auto_fit_columns);
        }
        // query params : folder
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        // query params : storage_name
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
        // query params : out_storage_name
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
        }
        // query params : check_excel_restriction
        if ($this->check_excel_restriction !== null) {
            $queryParams['checkExcelRestriction'] = ObjectSerializer::toQueryValue($this->check_excel_restriction);
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
        // query params : one_page_per_sheet
        if ($this->one_page_per_sheet !== null) {
            $queryParams['onePagePerSheet'] = ObjectSerializer::toQueryValue($this->one_page_per_sheet);
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
    // body params
        $_tempBody = null;
        $_tempBodyName =null;
        if (isset($this->save_options)) {
            $_tempBody = $this->save_options;
            $_tempBodyName =str_replace('_','', 'save_options');
        }
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
            'POST',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}