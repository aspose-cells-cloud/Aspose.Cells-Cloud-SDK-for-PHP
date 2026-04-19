<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetHyperlinkRequest.cs">
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
 * Request model for  PutWorksheetHyperlink operation.
 */

class PutWorksheetHyperlinkRequest extends BaseApiRequest
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
    * firstRow : First row of the hyperlink range.
    */ 
    public $first_row;

    public function getFirstRow()
    {
        return $this->first_row;
    }

    public function setFirstRow($value)
    {
        $this->first_row = $value;
    }

    /*
    * firstColumn : First column of the hyperlink range.
    */ 
    public $first_column;

    public function getFirstColumn()
    {
        return $this->first_column;
    }

    public function setFirstColumn($value)
    {
        $this->first_column = $value;
    }

    /*
    * totalRows : Number of rows in this hyperlink range.
    */ 
    public $total_rows;

    public function getTotalRows()
    {
        return $this->total_rows;
    }

    public function setTotalRows($value)
    {
        $this->total_rows = $value;
    }

    /*
    * totalColumns : Number of columns of this hyperlink range.
    */ 
    public $total_columns;

    public function getTotalColumns()
    {
        return $this->total_columns;
    }

    public function setTotalColumns($value)
    {
        $this->total_columns = $value;
    }

    /*
    * address : Address of the hyperlink.
    */ 
    public $address;

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($value)
    {
        $this->address = $value;
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

    public function __construct( $name = null,$sheet_name = null,$first_row = null,$first_column = null,$total_rows = null,$total_columns = null,$address = null )
    {        
        $this->name = $name; 
        $this->sheet_name = $sheet_name; 
        $this->first_row = $first_row; 
        $this->first_column = $first_column; 
        $this->total_rows = $total_rows; 
        $this->total_columns = $total_columns; 
        $this->address = $address; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling PutWorksheetHyperlink'
            );
        }


        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling PutWorksheetHyperlink'
            );
        }


        // verify the required parameter 'first_row' is set
        if ($this->first_row === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $first_row when calling PutWorksheetHyperlink'
            );
        }


        // verify the required parameter 'first_column' is set
        if ($this->first_column === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $first_column when calling PutWorksheetHyperlink'
            );
        }


        // verify the required parameter 'total_rows' is set
        if ($this->total_rows === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $total_rows when calling PutWorksheetHyperlink'
            );
        }


        // verify the required parameter 'total_columns' is set
        if ($this->total_columns === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $total_columns when calling PutWorksheetHyperlink'
            );
        }


        // verify the required parameter 'address' is set
        if ($this->address === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling PutWorksheetHyperlink'
            );
        }


        $resourcePath = 'v3.0/cells/{name}/worksheets/{sheetName}/hyperlinks';
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
        // query params : first_row
        if ($this->first_row !== null) {
            $queryParams['firstRow'] = ObjectSerializer::toQueryValue($this->first_row);
        }
        // query params : first_column
        if ($this->first_column !== null) {
            $queryParams['firstColumn'] = ObjectSerializer::toQueryValue($this->first_column);
        }
        // query params : total_rows
        if ($this->total_rows !== null) {
            $queryParams['totalRows'] = ObjectSerializer::toQueryValue($this->total_rows);
        }
        // query params : total_columns
        if ($this->total_columns !== null) {
            $queryParams['totalColumns'] = ObjectSerializer::toQueryValue($this->total_columns);
        }
        // query params : address
        if ($this->address !== null) {
            $queryParams['address'] = ObjectSerializer::toQueryValue($this->address);
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
        $defaultHeaders['x-aspose-client-version'] = '26.4';
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