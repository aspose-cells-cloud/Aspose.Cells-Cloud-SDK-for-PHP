<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TrimCharacterInRemoteSpreadsheetRequest.cs">
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
 * Request model for  TrimCharacterInRemoteSpreadsheet operation.
 */

class TrimCharacterInRemoteSpreadsheetRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * name : Specify the spreadsheet name on remote server.
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
    * folder : Specify the spreadsheet storage position on remote server
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

    public function __construct( $name = null,$worksheet = null,$range = null )
    {        
        $this->name = $name; 
        $this->worksheet = $worksheet; 
        $this->range = $range; 
    }

    public function createHttpRequest($headerSelector,$config)
    {
        // verify the required parameter 'name' is set
        if ($this->name === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling TrimCharacterInRemoteSpreadsheet'
            );
        }


        // verify the required parameter 'worksheet' is set
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $worksheet when calling TrimCharacterInRemoteSpreadsheet'
            );
        }


        // verify the required parameter 'range' is set
        if ($this->range === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $range when calling TrimCharacterInRemoteSpreadsheet'
            );
        }


        $resourcePath = 'v4.0/cells/{name}/worksheets/{worksheet}/range/{range}/content/trim';
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
        // range params
        if ($this->range !== null) {
            $resourcePath = str_replace(
                '{' . 'range' . '}',
                ObjectSerializer::toPathValue($this->range),
                $resourcePath
            );
        }
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
        $defaultHeaders['x-aspose-client-version'] = '26.8';
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