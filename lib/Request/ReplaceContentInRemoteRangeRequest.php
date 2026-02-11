<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReplaceContentInRemoteRangeRequest.cs">
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
 * Request model for  ReplaceContentInRemoteRange operation.
 */

class ReplaceContentInRemoteRangeRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * name : The name of the workbook file to be replace.
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
    * searchText : The searched text.
    */ 
    public $search_text;

    public function getSearchText()
    {
        return $this->search_text;
    }

    public function setSearchText($value)
    {
        $this->search_text = $value;
    }

    /*
    * replaceText : The replaced text.
    */ 
    public $replace_text;

    public function getReplaceText()
    {
        return $this->replace_text;
    }

    public function setReplaceText($value)
    {
        $this->replace_text = $value;
    }

    /*
    * worksheet : The worksheet name.
    */ 
    public $worksheet;

    public function getWorksheet()
    {
        return $this->worksheet;
    }

    public function setWorksheet($value)
    {
        $this->worksheet = $value;
    }

    /*
    * cellArea : The cell area for the replace.
    */ 
    public $cell_area;

    public function getCellArea()
    {
        return $this->cell_area;
    }

    public function setCellArea($value)
    {
        $this->cell_area = $value;
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

    public function __construct( $name = null,$search_text = null,$replace_text = null,$worksheet = null,$cell_area = null )
    {        
        $this->name = $name; 
        $this->search_text = $search_text; 
        $this->replace_text = $replace_text; 
        $this->worksheet = $worksheet; 
        $this->cell_area = $cell_area; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling ReplaceContentInRemoteRange'
            );
        }


        // verify the required parameter 'search_text' is set
        if ($this->search_text === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_text when calling ReplaceContentInRemoteRange'
            );
        }


        // verify the required parameter 'replace_text' is set
        if ($this->replace_text === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $replace_text when calling ReplaceContentInRemoteRange'
            );
        }


        // verify the required parameter 'worksheet' is set
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $worksheet when calling ReplaceContentInRemoteRange'
            );
        }


        // verify the required parameter 'cell_area' is set
        if ($this->cell_area === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cell_area when calling ReplaceContentInRemoteRange'
            );
        }


        $resourcePath = 'v4.0/cells/{name}/worksheets/{worksheet}/ranges/{cellArea}/replace/content';
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
        // worksheet params
        if ($this->worksheet !== null) {
            $resourcePath = str_replace(
                '{' . 'worksheet' . '}',
                ObjectSerializer::toPathValue($this->worksheet),
                $resourcePath
            );
        }
        // cell_area params
        if ($this->cell_area !== null) {
            $resourcePath = str_replace(
                '{' . 'cellArea' . '}',
                ObjectSerializer::toPathValue($this->cell_area),
                $resourcePath
            );
        }
        // query params : search_text
        if ($this->search_text !== null) {
            $queryParams['searchText'] = ObjectSerializer::toQueryValue($this->search_text);
        }
        // query params : replace_text
        if ($this->replace_text !== null) {
            $queryParams['replaceText'] = ObjectSerializer::toQueryValue($this->replace_text);
        }
        // query params : folder
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        // query params : storage_name
        if ($this->storage_name !== null) {
            $queryParams['storageName'] = ObjectSerializer::toQueryValue($this->storage_name);
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