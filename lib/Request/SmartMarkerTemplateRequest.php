<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SmartMarkerTemplateRequest.cs">
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
 * Request model for  SmartMarkerTemplate operation.
 */

class SmartMarkerTemplateRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * datafile : Upload smartmarker template json data file.
    */ 
    public $datafile;

    public function getDatafile()
    {
        return $this->datafile;
    }

    public function setDatafile($value)
    {
        $this->datafile = $value;
    }

    /*
    * templatefile : Upload smartmarker template file.
    */ 
    public $templatefile;

    public function getTemplatefile()
    {
        return $this->templatefile;
    }

    public function setTemplatefile($value)
    {
        $this->templatefile = $value;
    }

    /*
    * region : Spreadsheet region/language setting (e.g., `en-US`, `fr-FR`). Influences number formatting, date parsing, and locale‑specific behavior.
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

    public function __construct( $datafile = null,$templatefile = null )
    {        
        $this->datafile = $datafile; 
        $this->templatefile = $templatefile; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'datafile' is set
        if ($this->datafile === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $datafile when calling SmartMarkerTemplate'
            );
        }


        // verify the required parameter 'templatefile' is set
        if ($this->templatefile === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $templatefile when calling SmartMarkerTemplate'
            );
        }


        $resourcePath = 'v4.0/cells/report/smart/template';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
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
        if ($this->datafile !== null) {
            $multipart = true;
            if( is_array($this->datafile)){
                foreach($this->datafile as $key => $value) {
                    $formParams[basename($key)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams[basename($this->datafile)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($this->datafile), 'rb');
            }
        }
        if ($this->templatefile !== null) {
            $multipart = true;
            if( is_array($this->templatefile)){
                foreach($this->templatefile as $key => $value) {
                    $formParams[basename($key)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams[basename($this->templatefile)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($this->templatefile), 'rb');
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
        $defaultHeaders['x-aspose-client-version'] = '26.9';
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