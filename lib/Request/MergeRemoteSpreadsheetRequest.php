<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MergeRemoteSpreadsheetRequest.cs">
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
 * Request model for  MergeRemoteSpreadsheet operation.
 */

class MergeRemoteSpreadsheetRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * name : The name of the workbook file to be split.
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
    * mergedSpreadsheet : 
    */ 
    public $merged_spreadsheet;

    public function getMergedSpreadsheet()
    {
        return $this->merged_spreadsheet;
    }

    public function setMergedSpreadsheet($value)
    {
        $this->merged_spreadsheet = $value;
    }

    /*
    * folder : The folder path where the workbook is stored.
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
    * outFormat : The out file format.
    */ 
    public $out_format;

    public function getOutFormat()
    {
        return $this->out_format;
    }

    public function setOutFormat($value)
    {
        $this->out_format = $value;
    }

    /*
    * mergeInOneSheet : Whether to combine all data into a single worksheet.
    */ 
    public $merge_in_one_sheet;

    public function getMergeInOneSheet()
    {
        return $this->merge_in_one_sheet;
    }

    public function setMergeInOneSheet($value)
    {
        $this->merge_in_one_sheet = $value;
    }

    /*
    * storageName : (Optional) The name of the storage if using custom cloud storage. Use default storage if omitted.
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
    * outPath : (Optional) The folder path where the workbook is stored. The default is null.
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
    * outStorageName : Output file Storage Name.
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
    * fontsLocation : Use Custom fonts.
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

    /*
    * region : The spreadsheet region setting.
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
    * password : The password for opening spreadsheet file.
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

    public function __construct( $name = null,$merged_spreadsheet = null )
    {        
        $this->name = $name; 
        $this->merged_spreadsheet = $merged_spreadsheet; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling MergeRemoteSpreadsheet'
            );
        }


        // verify the required parameter 'merged_spreadsheet' is set
        if ($this->merged_spreadsheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merged_spreadsheet when calling MergeRemoteSpreadsheet'
            );
        }


        $resourcePath = 'v4.0/cells/{name}/merge/spreadsheet';
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
        // query params : merged_spreadsheet
        if ($this->merged_spreadsheet !== null) {
            $queryParams['mergedSpreadsheet'] = ObjectSerializer::toQueryValue($this->merged_spreadsheet);
        }
        // query params : folder
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        // query params : out_format
        if ($this->out_format !== null) {
            $queryParams['outFormat'] = ObjectSerializer::toQueryValue($this->out_format);
        }
        // query params : merge_in_one_sheet
        if ($this->merge_in_one_sheet !== null) {
            $queryParams['mergeInOneSheet'] = ObjectSerializer::toQueryValue($this->merge_in_one_sheet);
        }
        // query params : storage_name
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
        }
        // query params : out_path
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        // query params : out_storage_name
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
        }
        // query params : fonts_location
        if ($this->fonts_location !== null) {
            $queryParams['fontsLocation'] = ObjectSerializer::toQueryValue($this->fonts_location);
        }
        // query params : region
        if ($this->region !== null) {
            $queryParams['region'] = ObjectSerializer::toQueryValue($this->region);
        }
        // query params : password
        if ($this->password !== null) {
            $queryParams['password'] = ObjectSerializer::toQueryValue($this->password);
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
            'PUT',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}