<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetFormatConditionRequest.cs">
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
 * Request model for  PutWorksheetFormatCondition operation.
 */

class PutWorksheetFormatConditionRequest extends BaseApiRequest
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
    * index : Gets the Conditional Formatting element at the specified index.
    */ 
    public $index;

    public function getIndex()
    {
        return $this->index;
    }

    public function setIndex($value)
    {
        $this->index = $value;
    }

    /*
    * cellArea : Adds a conditional formatted cell range.
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
    * type : Format condition type(CellValue/Expression/ColorScale/DataBar/IconSet/Top10/UniqueValues/DuplicateValues/ContainsText/NotContainsText/BeginsWith/EndsWith/ContainsBlanks/NotContainsBlanks/ContainsErrors/NotContainsErrors/TimePeriod/AboveAverage).
    */ 
    public $type;

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    /*
    * operatorType : Represents the operator type of conditional format and data validation(Between/Equal/GreaterThan/GreaterOrEqual/LessThan/None/NotBetween/NotEqual).
    */ 
    public $operator_type;

    public function getOperatorType()
    {
        return $this->operator_type;
    }

    public function setOperatorType($value)
    {
        $this->operator_type = $value;
    }

    /*
    * formula1 : The value or expression associated with conditional formatting.
    */ 
    public $formula1;

    public function getFormula1()
    {
        return $this->formula1;
    }

    public function setFormula1($value)
    {
        $this->formula1 = $value;
    }

    /*
    * formula2 : The value or expression associated with conditional formatting.
    */ 
    public $formula2;

    public function getFormula2()
    {
        return $this->formula2;
    }

    public function setFormula2($value)
    {
        $this->formula2 = $value;
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

    public function __construct( $name = null,$sheet_name = null,$index = null,$cell_area = null,$type = null,$operator_type = null,$formula1 = null,$formula2 = null )
    {        
        $this->name = $name; 
        $this->sheet_name = $sheet_name; 
        $this->index = $index; 
        $this->cell_area = $cell_area; 
        $this->type = $type; 
        $this->operator_type = $operator_type; 
        $this->formula1 = $formula1; 
        $this->formula2 = $formula2; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling PutWorksheetFormatCondition'
            );
        }


        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling PutWorksheetFormatCondition'
            );
        }


        // verify the required parameter 'index' is set
        if ($this->index === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $index when calling PutWorksheetFormatCondition'
            );
        }


        // verify the required parameter 'cell_area' is set
        if ($this->cell_area === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cell_area when calling PutWorksheetFormatCondition'
            );
        }


        // verify the required parameter 'type' is set
        if ($this->type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling PutWorksheetFormatCondition'
            );
        }


        // verify the required parameter 'operator_type' is set
        if ($this->operator_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $operator_type when calling PutWorksheetFormatCondition'
            );
        }


        // verify the required parameter 'formula1' is set
        if ($this->formula1 === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $formula1 when calling PutWorksheetFormatCondition'
            );
        }


        // verify the required parameter 'formula2' is set
        if ($this->formula2 === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $formula2 when calling PutWorksheetFormatCondition'
            );
        }


        $resourcePath = 'v3.0/cells/{name}/worksheets/{sheetName}/conditionalFormattings/{index}';
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
        // index params
        if ($this->index !== null) {
            $resourcePath = str_replace(
                '{' . 'index' . '}',
                ObjectSerializer::toPathValue($this->index),
                $resourcePath
            );
        }
        // query params : cell_area
        if ($this->cell_area !== null) {
            $queryParams['cellArea'] = ObjectSerializer::toQueryValue($this->cell_area);
        }
        // query params : type
        if ($this->type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($this->type);
        }
        // query params : operator_type
        if ($this->operator_type !== null) {
            $queryParams['operatorType'] = ObjectSerializer::toQueryValue($this->operator_type);
        }
        // query params : formula1
        if ($this->formula1 !== null) {
            $queryParams['formula1'] = ObjectSerializer::toQueryValue($this->formula1);
        }
        // query params : formula2
        if ($this->formula2 !== null) {
            $queryParams['formula2'] = ObjectSerializer::toQueryValue($this->formula2);
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