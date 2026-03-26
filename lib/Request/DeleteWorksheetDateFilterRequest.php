<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DeleteWorksheetDateFilterRequest.cs">
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
 * Request model for  DeleteWorksheetDateFilter operation.
 */

class DeleteWorksheetDateFilterRequest extends BaseApiRequest
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
    * fieldIndex : The integer offset of the field on which you want to base the filter (from the left of the list; the leftmost field is field 0).
    */ 
    public $field_index;

    public function getFieldIndex()
    {
        return $this->field_index;
    }

    public function setFieldIndex($value)
    {
        $this->field_index = $value;
    }

    /*
    * dateTimeGroupingType : Specifies how to group dateTime values.
    */ 
    public $date_time_grouping_type;

    public function getDateTimeGroupingType()
    {
        return $this->date_time_grouping_type;
    }

    public function setDateTimeGroupingType($value)
    {
        $this->date_time_grouping_type = $value;
    }

    /*
    * year : The year.
    */ 
    public $year;

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($value)
    {
        $this->year = $value;
    }

    /*
    * month : The month.
    */ 
    public $month;

    public function getMonth()
    {
        return $this->month;
    }

    public function setMonth($value)
    {
        $this->month = $value;
    }

    /*
    * day : The day.
    */ 
    public $day;

    public function getDay()
    {
        return $this->day;
    }

    public function setDay($value)
    {
        $this->day = $value;
    }

    /*
    * hour : The hour.
    */ 
    public $hour;

    public function getHour()
    {
        return $this->hour;
    }

    public function setHour($value)
    {
        $this->hour = $value;
    }

    /*
    * minute : The minute.
    */ 
    public $minute;

    public function getMinute()
    {
        return $this->minute;
    }

    public function setMinute($value)
    {
        $this->minute = $value;
    }

    /*
    * second : The second.
    */ 
    public $second;

    public function getSecond()
    {
        return $this->second;
    }

    public function setSecond($value)
    {
        $this->second = $value;
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

    public function __construct( $name = null,$sheet_name = null,$field_index = null,$date_time_grouping_type = null )
    {        
        $this->name = $name; 
        $this->sheet_name = $sheet_name; 
        $this->field_index = $field_index; 
        $this->date_time_grouping_type = $date_time_grouping_type; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling DeleteWorksheetDateFilter'
            );
        }


        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling DeleteWorksheetDateFilter'
            );
        }


        // verify the required parameter 'field_index' is set
        if ($this->field_index === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_index when calling DeleteWorksheetDateFilter'
            );
        }


        // verify the required parameter 'date_time_grouping_type' is set
        if ($this->date_time_grouping_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_time_grouping_type when calling DeleteWorksheetDateFilter'
            );
        }


        $resourcePath = 'v3.0/cells/{name}/worksheets/{sheetName}/autoFilter/dateFilter';
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
        // query params : field_index
        if ($this->field_index !== null) {
            $queryParams['fieldIndex'] = ObjectSerializer::toQueryValue($this->field_index);
        }
        // query params : date_time_grouping_type
        if ($this->date_time_grouping_type !== null) {
            $queryParams['dateTimeGroupingType'] = ObjectSerializer::toQueryValue($this->date_time_grouping_type);
        }
        // query params : year
        if ($this->year !== null) {
            $queryParams['year'] = ObjectSerializer::toQueryValue($this->year);
        }
        // query params : month
        if ($this->month !== null) {
            $queryParams['month'] = ObjectSerializer::toQueryValue($this->month);
        }
        // query params : day
        if ($this->day !== null) {
            $queryParams['day'] = ObjectSerializer::toQueryValue($this->day);
        }
        // query params : hour
        if ($this->hour !== null) {
            $queryParams['hour'] = ObjectSerializer::toQueryValue($this->hour);
        }
        // query params : minute
        if ($this->minute !== null) {
            $queryParams['minute'] = ObjectSerializer::toQueryValue($this->minute);
        }
        // query params : second
        if ($this->second !== null) {
            $queryParams['second'] = ObjectSerializer::toQueryValue($this->second);
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
        $defaultHeaders['x-aspose-client-version'] = '26.3.1';
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}