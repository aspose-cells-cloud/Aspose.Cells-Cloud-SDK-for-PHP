<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RemoveCharactersByPositionInRemoteSpreadsheetRequest.cs">
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
 * Request model for  RemoveCharactersByPositionInRemoteSpreadsheet operation.
 */

class RemoveCharactersByPositionInRemoteSpreadsheetRequest extends BaseApiRequest
{
    public $expandQueryParameters;

    public function setExpandQueryParameters($name,$value)
    {
        $this->expandQueryParameters[$name] = $value;
    }

    /*
    * name : (Required) The name of the workbook file to be retrieved.
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
    * theFirstNCharacters : 
    */ 
    public $the_first_n_characters;

    public function getTheFirstNCharacters()
    {
        return $this->the_first_n_characters;
    }

    public function setTheFirstNCharacters($value)
    {
        $this->the_first_n_characters = $value;
    }

    /*
    * theLastNCharacters : 
    */ 
    public $the_last_n_characters;

    public function getTheLastNCharacters()
    {
        return $this->the_last_n_characters;
    }

    public function setTheLastNCharacters($value)
    {
        $this->the_last_n_characters = $value;
    }

    /*
    * allCharactersBeforeText : 
    */ 
    public $all_characters_before_text;

    public function getAllCharactersBeforeText()
    {
        return $this->all_characters_before_text;
    }

    public function setAllCharactersBeforeText($value)
    {
        $this->all_characters_before_text = $value;
    }

    /*
    * allCharactersAfterText : 
    */ 
    public $all_characters_after_text;

    public function getAllCharactersAfterText()
    {
        return $this->all_characters_after_text;
    }

    public function setAllCharactersAfterText($value)
    {
        $this->all_characters_after_text = $value;
    }

    /*
    * caseSensitive : 
    */ 
    public $case_sensitive;

    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    public function setCaseSensitive($value)
    {
        $this->case_sensitive = $value;
    }

    /*
    * folder : (Optional) The folder path where the workbook is stored. The default is null.
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
                'Missing the required parameter $name when calling RemoveCharactersByPositionInRemoteSpreadsheet'
            );
        }


        // verify the required parameter 'worksheet' is set
        if ($this->worksheet === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $worksheet when calling RemoveCharactersByPositionInRemoteSpreadsheet'
            );
        }


        // verify the required parameter 'range' is set
        if ($this->range === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $range when calling RemoveCharactersByPositionInRemoteSpreadsheet'
            );
        }


        $resourcePath = 'v4.0/cells/{name}/worksheets/{worksheet}/range/{range}/content/remove/characters-by-position';
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
        // query params : the_first_n_characters
        if ($this->the_first_n_characters !== null) {
            $queryParams['theFirstNCharacters'] = ObjectSerializer::toQueryValue($this->the_first_n_characters);
        }
        // query params : the_last_n_characters
        if ($this->the_last_n_characters !== null) {
            $queryParams['theLastNCharacters'] = ObjectSerializer::toQueryValue($this->the_last_n_characters);
        }
        // query params : all_characters_before_text
        if ($this->all_characters_before_text !== null) {
            $queryParams['allCharactersBeforeText'] = ObjectSerializer::toQueryValue($this->all_characters_before_text);
        }
        // query params : all_characters_after_text
        if ($this->all_characters_after_text !== null) {
            $queryParams['allCharactersAfterText'] = ObjectSerializer::toQueryValue($this->all_characters_after_text);
        }
        // query params : case_sensitive
        if ($this->case_sensitive !== null) {
            $queryParams['caseSensitive'] = ObjectSerializer::toQueryValue($this->case_sensitive);
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