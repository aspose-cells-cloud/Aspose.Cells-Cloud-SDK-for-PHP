<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TrimCharacterRequest.cs">
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
 * Request model for  TrimCharacter operation.
 */

class TrimCharacterRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * Spreadsheet : Upload spreadsheet file.
    */ 
    public $spreadsheet;

    public function getSpreadsheet()
    {
        return $this->spreadsheet;
    }

    public function setSpreadsheet($value)
    {
        $this->spreadsheet = $value;
    }

    /*
    * trimContent : Specify the trim content.
    */ 
    public $trim_content;

    public function getTrimContent()
    {
        return $this->trim_content;
    }

    public function setTrimContent($value)
    {
        $this->trim_content = $value;
    }

    /*
    * trimLeading : Specify to trim content from the beginning.
    */ 
    public $trim_leading;

    public function getTrimLeading()
    {
        return $this->trim_leading;
    }

    public function setTrimLeading($value)
    {
        $this->trim_leading = $value;
    }

    /*
    * trimTrailing : Specify to trim content from the end.
    */ 
    public $trim_trailing;

    public function getTrimTrailing()
    {
        return $this->trim_trailing;
    }

    public function setTrimTrailing($value)
    {
        $this->trim_trailing = $value;
    }

    /*
    * trimSpaceBetweenWordTo1 : Remove excess spaces between words within a cell.
    */ 
    public $trim_space_between_word_to1;

    public function getTrimSpaceBetweenWordTo1()
    {
        return $this->trim_space_between_word_to1;
    }

    public function setTrimSpaceBetweenWordTo1($value)
    {
        $this->trim_space_between_word_to1 = $value;
    }

    /*
    * trimNonBreakingSpaces : Remove non-breaking spaces.
    */ 
    public $trim_non_breaking_spaces;

    public function getTrimNonBreakingSpaces()
    {
        return $this->trim_non_breaking_spaces;
    }

    public function setTrimNonBreakingSpaces($value)
    {
        $this->trim_non_breaking_spaces = $value;
    }

    /*
    * removeExtraLineBreaks : Remove extra line breaks.
    */ 
    public $remove_extra_line_breaks;

    public function getRemoveExtraLineBreaks()
    {
        return $this->remove_extra_line_breaks;
    }

    public function setRemoveExtraLineBreaks($value)
    {
        $this->remove_extra_line_breaks = $value;
    }

    /*
    * removeAllLineBreaks : Remove all line breaks.
    */ 
    public $remove_all_line_breaks;

    public function getRemoveAllLineBreaks()
    {
        return $this->remove_all_line_breaks;
    }

    public function setRemoveAllLineBreaks($value)
    {
        $this->remove_all_line_breaks = $value;
    }

    /*
    * worksheet : Specify the worksheet of spreadsheet.
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
    * range : Specify the worksheet range of spreadsheet.
    */ 
    public $range;

    public function getRange()
    {
        return $this->range;
    }

    public function setRange($value)
    {
        $this->range = $value;
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

    public function __construct( $spreadsheet = null )
    {        
        $this->spreadsheet = $spreadsheet; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'spreadsheet' is set
        if ($this->spreadsheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $spreadsheet when calling TrimCharacter'
            );
        }


        $resourcePath = 'v4.0/cells/content/trim';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;    
        // query params : trim_content
        if ($this->trim_content !== null) {
            $queryParams['trimContent'] = ObjectSerializer::toQueryValue($this->trim_content);
        }
        // query params : trim_leading
        if ($this->trim_leading !== null) {
            $queryParams['trimLeading'] = ObjectSerializer::toQueryValue($this->trim_leading);
        }
        // query params : trim_trailing
        if ($this->trim_trailing !== null) {
            $queryParams['trimTrailing'] = ObjectSerializer::toQueryValue($this->trim_trailing);
        }
        // query params : trim_space_between_word_to1
        if ($this->trim_space_between_word_to1 !== null) {
            $queryParams['trimSpaceBetweenWordTo1'] = ObjectSerializer::toQueryValue($this->trim_space_between_word_to1);
        }
        // query params : trim_non_breaking_spaces
        if ($this->trim_non_breaking_spaces !== null) {
            $queryParams['trimNonBreakingSpaces'] = ObjectSerializer::toQueryValue($this->trim_non_breaking_spaces);
        }
        // query params : remove_extra_line_breaks
        if ($this->remove_extra_line_breaks !== null) {
            $queryParams['removeExtraLineBreaks'] = ObjectSerializer::toQueryValue($this->remove_extra_line_breaks);
        }
        // query params : remove_all_line_breaks
        if ($this->remove_all_line_breaks !== null) {
            $queryParams['removeAllLineBreaks'] = ObjectSerializer::toQueryValue($this->remove_all_line_breaks);
        }
        // query params : worksheet
        if ($this->worksheet !== null) {
            $queryParams['worksheet'] = ObjectSerializer::toQueryValue($this->worksheet);
        }
        // query params : range
        if ($this->range !== null) {
            $queryParams['range'] = ObjectSerializer::toQueryValue($this->range);
        }
        // query params : out_path
        if ($this->out_path !== null) {
            $queryParams['outPath'] = ObjectSerializer::toQueryValue($this->out_path);
        }
        // query params : out_storage_name
        if ($this->out_storage_name !== null) {
            $queryParams['outStorageName'] = ObjectSerializer::toQueryValue($this->out_storage_name);
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
        if ($this->spreadsheet !== null) {
            $multipart = true;
            if( is_array($this->spreadsheet)){
                foreach($this->spreadsheet as $key => $value) {
                    $formParams[basename($key)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($value), 'rb');
                }
            }else {
                $formParams[basename($this->spreadsheet)] = \GuzzleHttp\Psr7\Utils::tryFopen(ObjectSerializer::toFormValue($this->spreadsheet), 'rb');
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