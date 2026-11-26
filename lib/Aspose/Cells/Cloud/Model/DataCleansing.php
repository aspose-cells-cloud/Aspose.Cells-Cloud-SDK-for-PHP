<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataCleansing.php">
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

class DataCleansing
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataCleansing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ranges' => '\\Aspose\\Cells\\Cloud\\Model\\Range[]',
        'need_fill_data' => 'bool',
        'data_fill' => '\\Aspose\\Cells\\Cloud\\Model\\DataFill',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ranges' => null,
        'need_fill_data' => null,
        'data_fill' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'ranges' => 'Ranges',
        'need_fill_data' => 'NeedFillData',
        'data_fill' => 'DataFill',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'ranges' => 'setRanges',
        'need_fill_data' => 'setNeedFillData',
        'data_fill' => 'setDataFill',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'ranges' => 'getRanges',
        'need_fill_data' => 'getNeedFillData',
        'data_fill' => 'getDataFill',
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
        $this->container['ranges'] = isset($data['ranges']) ? $data['ranges'] : null;
        $this->container['need_fill_data'] = isset($data['need_fill_data']) ? $data['need_fill_data'] : null;
        $this->container['data_fill'] = isset($data['data_fill']) ? $data['data_fill'] : null;
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
     * Gets ranges.
     *
     * @return \Aspose\Cells\Cloud\Model\Range[]|null
     */
    public function getRanges()
    {
        return $this->container['ranges'];
    }

    /**
     * Sets ranges.
     *
     * @param \Aspose\Cells\Cloud\Model\Range[]|null $ranges
     *
     * @return $this
     */
    public function setRanges($ranges)
    {
        $this->container['ranges'] = $ranges;
        return $this;
    }

    /**
     * Gets need_fill_data.
     *
     * @return bool|null
     */
    public function getNeedFillData()
    {
        return $this->container['need_fill_data'];
    }

    /**
     * Sets need_fill_data.
     *
     * @param bool|null $need_fill_data
     *
     * @return $this
     */
    public function setNeedFillData($need_fill_data)
    {
        $this->container['need_fill_data'] = $need_fill_data;
        return $this;
    }

    /**
     * Gets data_fill.
     *
     * @return \Aspose\Cells\Cloud\Model\DataFill|null
     */
    public function getDataFill()
    {
        return $this->container['data_fill'];
    }

    /**
     * Sets data_fill.
     *
     * @param \Aspose\Cells\Cloud\Model\DataFill|null $data_fill
     *
     * @return $this
     */
    public function setDataFill($data_fill)
    {
        $this->container['data_fill'] = $data_fill;
        return $this;
    }
}
