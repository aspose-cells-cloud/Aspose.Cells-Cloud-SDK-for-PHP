<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CustomParserConfig.php">
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

class CustomParserConfig
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomParserConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'column_index' => 'int',
        'parse_method' => 'string',
        'custom_style' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'column_index' => 'int32',
        'parse_method' => null,
        'custom_style' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'column_index' => 'ColumnIndex',
        'parse_method' => 'ParseMethod',
        'custom_style' => 'CustomStyle',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'column_index' => 'setColumnIndex',
        'parse_method' => 'setParseMethod',
        'custom_style' => 'setCustomStyle',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'column_index' => 'getColumnIndex',
        'parse_method' => 'getParseMethod',
        'custom_style' => 'getCustomStyle',
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
        $this->container['column_index'] = isset($data['column_index']) ? $data['column_index'] : null;
        $this->container['parse_method'] = isset($data['parse_method']) ? $data['parse_method'] : null;
        $this->container['custom_style'] = isset($data['custom_style']) ? $data['custom_style'] : null;
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
     * Gets column_index.
     *
     * @return int|null
     */
    public function getColumnIndex()
    {
        return $this->container['column_index'];
    }

    /**
     * Sets column_index.
     *
     * @param int|null $column_index
     *
     * @return $this
     */
    public function setColumnIndex($column_index)
    {
        $this->container['column_index'] = $column_index;
        return $this;
    }

    /**
     * Gets parse_method.
     *
     * @return string|null
     */
    public function getParseMethod()
    {
        return $this->container['parse_method'];
    }

    /**
     * Sets parse_method.
     *
     * @param string|null $parse_method
     *
     * @return $this
     */
    public function setParseMethod($parse_method)
    {
        $this->container['parse_method'] = $parse_method;
        return $this;
    }

    /**
     * Gets custom_style.
     *
     * @return string|null
     */
    public function getCustomStyle()
    {
        return $this->container['custom_style'];
    }

    /**
     * Sets custom_style.
     *
     * @param string|null $custom_style
     *
     * @return $this
     */
    public function setCustomStyle($custom_style)
    {
        $this->container['custom_style'] = $custom_style;
        return $this;
    }
}
