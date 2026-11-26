<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataSorter.php">
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

namespace Aspose\Cells\Cloud\Model;


use \Aspose\Cells\Cloud\ObjectSerializer;

class DataSorter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataSorter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'case_sensitive' => 'bool',
        'has_headers' => 'bool',
        'key_list' => '\\Aspose\\Cells\\Cloud\\Model\\SortKey[]',
        'sort_left_to_right' => 'bool',
        'sort_as_number' => 'bool',
        'keys' => '\\Aspose\\Cells\\Cloud\\Model\\DataSorterKey[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'case_sensitive' => null,
        'has_headers' => null,
        'key_list' => null,
        'sort_left_to_right' => null,
        'sort_as_number' => null,
        'keys' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'case_sensitive' => 'CaseSensitive',
        'has_headers' => 'HasHeaders',
        'key_list' => 'KeyList',
        'sort_left_to_right' => 'SortLeftToRight',
        'sort_as_number' => 'SortAsNumber',
        'keys' => 'Keys',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'case_sensitive' => 'setCaseSensitive',
        'has_headers' => 'setHasHeaders',
        'key_list' => 'setKeyList',
        'sort_left_to_right' => 'setSortLeftToRight',
        'sort_as_number' => 'setSortAsNumber',
        'keys' => 'setKeys',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'case_sensitive' => 'getCaseSensitive',
        'has_headers' => 'getHasHeaders',
        'key_list' => 'getKeyList',
        'sort_left_to_right' => 'getSortLeftToRight',
        'sort_as_number' => 'getSortAsNumber',
        'keys' => 'getKeys',
    ];

    public static function getModelName()
    {
        return self::$swaggerModelName;
    }

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    /**
      * Associative array for storing property values
      *
      * @var mixed[]
      */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     */
    public function __construct(?array $data = null)
    {
        $this->container['case_sensitive'] = isset($data['case_sensitive']) ? $data['case_sensitive'] : null;
        $this->container['has_headers'] = isset($data['has_headers']) ? $data['has_headers'] : null;
        $this->container['key_list'] = isset($data['key_list']) ? $data['key_list'] : null;
        $this->container['sort_left_to_right'] = isset($data['sort_left_to_right']) ? $data['sort_left_to_right'] : null;
        $this->container['sort_as_number'] = isset($data['sort_as_number']) ? $data['sort_as_number'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     *
     * @return bool
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets case_sensitive.
     *
     * @return bool|null
     */
    public function getCaseSensitive()
    {
        return $this->container['case_sensitive'];
    }

    /**
     * Sets case_sensitive.
     *
     * @param bool|null $case_sensitive
     *
     * @return $this
     */
    public function setCaseSensitive($case_sensitive)
    {
        $this->container['case_sensitive'] = $case_sensitive;
        return $this;
    }

    /**
     * Gets has_headers.
     *
     * @return bool|null
     */
    public function getHasHeaders()
    {
        return $this->container['has_headers'];
    }

    /**
     * Sets has_headers.
     *
     * @param bool|null $has_headers
     *
     * @return $this
     */
    public function setHasHeaders($has_headers)
    {
        $this->container['has_headers'] = $has_headers;
        return $this;
    }

    /**
     * Gets key_list.
     *
     * @return \Aspose\Cells\Cloud\Model\SortKey[]|null
     */
    public function getKeyList()
    {
        return $this->container['key_list'];
    }

    /**
     * Sets key_list.
     *
     * @param \Aspose\Cells\Cloud\Model\SortKey[]|null $key_list
     *
     * @return $this
     */
    public function setKeyList($key_list)
    {
        $this->container['key_list'] = $key_list;
        return $this;
    }

    /**
     * Gets sort_left_to_right.
     *
     * @return bool|null
     */
    public function getSortLeftToRight()
    {
        return $this->container['sort_left_to_right'];
    }

    /**
     * Sets sort_left_to_right.
     *
     * @param bool|null $sort_left_to_right
     *
     * @return $this
     */
    public function setSortLeftToRight($sort_left_to_right)
    {
        $this->container['sort_left_to_right'] = $sort_left_to_right;
        return $this;
    }

    /**
     * Gets sort_as_number.
     *
     * @return bool|null
     */
    public function getSortAsNumber()
    {
        return $this->container['sort_as_number'];
    }

    /**
     * Sets sort_as_number.
     *
     * @param bool|null $sort_as_number
     *
     * @return $this
     */
    public function setSortAsNumber($sort_as_number)
    {
        $this->container['sort_as_number'] = $sort_as_number;
        return $this;
    }

    /**
     * Gets keys.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSorterKey[]|null
     */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
     * Sets keys.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSorterKey[]|null $keys
     *
     * @return $this
     */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
        return $this;
    }
}
