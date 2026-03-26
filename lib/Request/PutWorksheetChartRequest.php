<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PutWorksheetChartRequest.cs">
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
 * Request model for  PutWorksheetChart operation.
 */

class PutWorksheetChartRequest extends BaseApiRequest
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
    * chartType : Chart type, please refer property Type in chart resource.
    */ 
    public $chart_type;

    public function getChartType()
    {
        return $this->chart_type;
    }

    public function setChartType($value)
    {
        $this->chart_type = $value;
    }

    /*
    * upperLeftRow : Upper-left row for the new chart.
    */ 
    public $upper_left_row;

    public function getUpperLeftRow()
    {
        return $this->upper_left_row;
    }

    public function setUpperLeftRow($value)
    {
        $this->upper_left_row = $value;
    }

    /*
    * upperLeftColumn : Upper-left column for the new chart.
    */ 
    public $upper_left_column;

    public function getUpperLeftColumn()
    {
        return $this->upper_left_column;
    }

    public function setUpperLeftColumn($value)
    {
        $this->upper_left_column = $value;
    }

    /*
    * lowerRightRow : Lower-left row for the new chart.
    */ 
    public $lower_right_row;

    public function getLowerRightRow()
    {
        return $this->lower_right_row;
    }

    public function setLowerRightRow($value)
    {
        $this->lower_right_row = $value;
    }

    /*
    * lowerRightColumn : Lower-left column for the new chart.
    */ 
    public $lower_right_column;

    public function getLowerRightColumn()
    {
        return $this->lower_right_column;
    }

    public function setLowerRightColumn($value)
    {
        $this->lower_right_column = $value;
    }

    /*
    * area : Specify the values from which to plot the data series.
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
    * isVertical : Specify whether to plot the series from a range of cell values by row or by column. 
    */ 
    public $is_vertical;

    public function getIsVertical()
    {
        return $this->is_vertical;
    }

    public function setIsVertical($value)
    {
        $this->is_vertical = $value;
    }

    /*
    * categoryData : Get or set the range of category axis values. It can be a range of cells (e.g., "D1:E10").
    */ 
    public $category_data;

    public function getCategoryData()
    {
        return $this->category_data;
    }

    public function setCategoryData($value)
    {
        $this->category_data = $value;
    }

    /*
    * isAutoGetSerialName : Specify whether to auto-update the serial name.
    */ 
    public $is_auto_get_serial_name;

    public function getIsAutoGetSerialName()
    {
        return $this->is_auto_get_serial_name;
    }

    public function setIsAutoGetSerialName($value)
    {
        $this->is_auto_get_serial_name = $value;
    }

    /*
    * title : Specify the chart title name.
    */ 
    public $title;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($value)
    {
        $this->title = $value;
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
    * dataLabels : Represents the specified chart's data label values display behavior. True to display the values, False to hide them.
    */ 
    public $data_labels;

    public function getDataLabels()
    {
        return $this->data_labels;
    }

    public function setDataLabels($value)
    {
        $this->data_labels = $value;
    }

    /*
    * dataLabelsPosition : Represents data label position (Center/InsideBase/InsideEnd/OutsideEnd/Above/Below/Left/Right/BestFit/Moved).
    */ 
    public $data_labels_position;

    public function getDataLabelsPosition()
    {
        return $this->data_labels_position;
    }

    public function setDataLabelsPosition($value)
    {
        $this->data_labels_position = $value;
    }

    /*
    * pivotTableSheet : The source is the data of the pivotTable. If PivotSource is not empty, the chart is a PivotChart.
    */ 
    public $pivot_table_sheet;

    public function getPivotTableSheet()
    {
        return $this->pivot_table_sheet;
    }

    public function setPivotTableSheet($value)
    {
        $this->pivot_table_sheet = $value;
    }

    /*
    * pivotTableName : The pivot table name.
    */ 
    public $pivot_table_name;

    public function getPivotTableName()
    {
        return $this->pivot_table_name;
    }

    public function setPivotTableName($value)
    {
        $this->pivot_table_name = $value;
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

    public function __construct( $name = null,$sheet_name = null,$chart_type = null )
    {        
        $this->name = $name; 
        $this->sheet_name = $sheet_name; 
        $this->chart_type = $chart_type; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling PutWorksheetChart'
            );
        }


        // verify the required parameter 'sheet_name' is set
        if ($this->sheet_name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sheet_name when calling PutWorksheetChart'
            );
        }


        // verify the required parameter 'chart_type' is set
        if ($this->chart_type === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $chart_type when calling PutWorksheetChart'
            );
        }


        $resourcePath = 'v3.0/cells/{name}/worksheets/{sheetName}/charts';
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
        // query params : chart_type
        if ($this->chart_type !== null) {
            $queryParams['chartType'] = ObjectSerializer::toQueryValue($this->chart_type);
        }
        // query params : upper_left_row
        if ($this->upper_left_row !== null) {
            $queryParams['upperLeftRow'] = ObjectSerializer::toQueryValue($this->upper_left_row);
        }
        // query params : upper_left_column
        if ($this->upper_left_column !== null) {
            $queryParams['upperLeftColumn'] = ObjectSerializer::toQueryValue($this->upper_left_column);
        }
        // query params : lower_right_row
        if ($this->lower_right_row !== null) {
            $queryParams['lowerRightRow'] = ObjectSerializer::toQueryValue($this->lower_right_row);
        }
        // query params : lower_right_column
        if ($this->lower_right_column !== null) {
            $queryParams['lowerRightColumn'] = ObjectSerializer::toQueryValue($this->lower_right_column);
        }
        // query params : area
        if ($this->area !== null) {
            $queryParams['area'] = ObjectSerializer::toQueryValue($this->area);
        }
        // query params : is_vertical
        if ($this->is_vertical !== null) {
            $queryParams['isVertical'] = ObjectSerializer::toQueryValue($this->is_vertical);
        }
        // query params : category_data
        if ($this->category_data !== null) {
            $queryParams['categoryData'] = ObjectSerializer::toQueryValue($this->category_data);
        }
        // query params : is_auto_get_serial_name
        if ($this->is_auto_get_serial_name !== null) {
            $queryParams['isAutoGetSerialName'] = ObjectSerializer::toQueryValue($this->is_auto_get_serial_name);
        }
        // query params : title
        if ($this->title !== null) {
            $queryParams['title'] = ObjectSerializer::toQueryValue($this->title);
        }
        // query params : folder
        if ($this->folder !== null) {
            $queryParams['folder'] = ObjectSerializer::toQueryValue($this->folder);
        }
        // query params : data_labels
        if ($this->data_labels !== null) {
            $queryParams['dataLabels'] = ObjectSerializer::toQueryValue($this->data_labels);
        }
        // query params : data_labels_position
        if ($this->data_labels_position !== null) {
            $queryParams['dataLabelsPosition'] = ObjectSerializer::toQueryValue($this->data_labels_position);
        }
        // query params : pivot_table_sheet
        if ($this->pivot_table_sheet !== null) {
            $queryParams['pivotTableSheet'] = ObjectSerializer::toQueryValue($this->pivot_table_sheet);
        }
        // query params : pivot_table_name
        if ($this->pivot_table_name !== null) {
            $queryParams['pivotTableName'] = ObjectSerializer::toQueryValue($this->pivot_table_name);
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
            'PUT',
            $config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );    
    }

}