<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataBar.php">
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

class DataBar
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataBar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'axis_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'axis_position' => 'string',
        'bar_border' => '\\Aspose\\Cells\\Cloud\\Model\\DataBarBorder',
        'bar_fill_type' => 'string',
        'color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'direction' => 'string',
        'max_cfvo' => '\\Aspose\\Cells\\Cloud\\Model\\ConditionalFormattingValue',
        'max_length' => 'int',
        'min_cfvo' => '\\Aspose\\Cells\\Cloud\\Model\\ConditionalFormattingValue',
        'min_length' => 'int',
        'negative_bar_format' => '\\Aspose\\Cells\\Cloud\\Model\\NegativeBarFormat',
        'show_value' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'axis_color' => null,
        'axis_position' => null,
        'bar_border' => null,
        'bar_fill_type' => null,
        'color' => null,
        'direction' => null,
        'max_cfvo' => null,
        'max_length' => 'int32',
        'min_cfvo' => null,
        'min_length' => 'int32',
        'negative_bar_format' => null,
        'show_value' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'axis_color' => 'AxisColor',
        'axis_position' => 'AxisPosition',
        'bar_border' => 'BarBorder',
        'bar_fill_type' => 'BarFillType',
        'color' => 'Color',
        'direction' => 'Direction',
        'max_cfvo' => 'MaxCfvo',
        'max_length' => 'MaxLength',
        'min_cfvo' => 'MinCfvo',
        'min_length' => 'MinLength',
        'negative_bar_format' => 'NegativeBarFormat',
        'show_value' => 'ShowValue',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'axis_color' => 'setAxisColor',
        'axis_position' => 'setAxisPosition',
        'bar_border' => 'setBarBorder',
        'bar_fill_type' => 'setBarFillType',
        'color' => 'setColor',
        'direction' => 'setDirection',
        'max_cfvo' => 'setMaxCfvo',
        'max_length' => 'setMaxLength',
        'min_cfvo' => 'setMinCfvo',
        'min_length' => 'setMinLength',
        'negative_bar_format' => 'setNegativeBarFormat',
        'show_value' => 'setShowValue',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'axis_color' => 'getAxisColor',
        'axis_position' => 'getAxisPosition',
        'bar_border' => 'getBarBorder',
        'bar_fill_type' => 'getBarFillType',
        'color' => 'getColor',
        'direction' => 'getDirection',
        'max_cfvo' => 'getMaxCfvo',
        'max_length' => 'getMaxLength',
        'min_cfvo' => 'getMinCfvo',
        'min_length' => 'getMinLength',
        'negative_bar_format' => 'getNegativeBarFormat',
        'show_value' => 'getShowValue',
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
        $this->container['axis_color'] = isset($data['axis_color']) ? $data['axis_color'] : null;
        $this->container['axis_position'] = isset($data['axis_position']) ? $data['axis_position'] : null;
        $this->container['bar_border'] = isset($data['bar_border']) ? $data['bar_border'] : null;
        $this->container['bar_fill_type'] = isset($data['bar_fill_type']) ? $data['bar_fill_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['max_cfvo'] = isset($data['max_cfvo']) ? $data['max_cfvo'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['min_cfvo'] = isset($data['min_cfvo']) ? $data['min_cfvo'] : null;
        $this->container['min_length'] = isset($data['min_length']) ? $data['min_length'] : null;
        $this->container['negative_bar_format'] = isset($data['negative_bar_format']) ? $data['negative_bar_format'] : null;
        $this->container['show_value'] = isset($data['show_value']) ? $data['show_value'] : null;
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
     * Gets axis_color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getAxisColor()
    {
        return $this->container['axis_color'];
    }

    /**
     * Sets axis_color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $axis_color
     *
     * @return $this
     */
    public function setAxisColor($axis_color)
    {
        $this->container['axis_color'] = $axis_color;
        return $this;
    }

    /**
     * Gets axis_position.
     *
     * @return string|null
     */
    public function getAxisPosition()
    {
        return $this->container['axis_position'];
    }

    /**
     * Sets axis_position.
     *
     * @param string|null $axis_position
     *
     * @return $this
     */
    public function setAxisPosition($axis_position)
    {
        $this->container['axis_position'] = $axis_position;
        return $this;
    }

    /**
     * Gets bar_border.
     *
     * @return \Aspose\Cells\Cloud\Model\DataBarBorder|null
     */
    public function getBarBorder()
    {
        return $this->container['bar_border'];
    }

    /**
     * Sets bar_border.
     *
     * @param \Aspose\Cells\Cloud\Model\DataBarBorder|null $bar_border
     *
     * @return $this
     */
    public function setBarBorder($bar_border)
    {
        $this->container['bar_border'] = $bar_border;
        return $this;
    }

    /**
     * Gets bar_fill_type.
     *
     * @return string|null
     */
    public function getBarFillType()
    {
        return $this->container['bar_fill_type'];
    }

    /**
     * Sets bar_fill_type.
     *
     * @param string|null $bar_fill_type
     *
     * @return $this
     */
    public function setBarFillType($bar_fill_type)
    {
        $this->container['bar_fill_type'] = $bar_fill_type;
        return $this;
    }

    /**
     * Gets color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
     * Gets direction.
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction.
     *
     * @param string|null $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
     * Gets max_cfvo.
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null
     */
    public function getMaxCfvo()
    {
        return $this->container['max_cfvo'];
    }

    /**
     * Sets max_cfvo.
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null $max_cfvo
     *
     * @return $this
     */
    public function setMaxCfvo($max_cfvo)
    {
        $this->container['max_cfvo'] = $max_cfvo;
        return $this;
    }

    /**
     * Gets max_length.
     *
     * @return int|null
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length.
     *
     * @param int|null $max_length
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;
        return $this;
    }

    /**
     * Gets min_cfvo.
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null
     */
    public function getMinCfvo()
    {
        return $this->container['min_cfvo'];
    }

    /**
     * Sets min_cfvo.
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null $min_cfvo
     *
     * @return $this
     */
    public function setMinCfvo($min_cfvo)
    {
        $this->container['min_cfvo'] = $min_cfvo;
        return $this;
    }

    /**
     * Gets min_length.
     *
     * @return int|null
     */
    public function getMinLength()
    {
        return $this->container['min_length'];
    }

    /**
     * Sets min_length.
     *
     * @param int|null $min_length
     *
     * @return $this
     */
    public function setMinLength($min_length)
    {
        $this->container['min_length'] = $min_length;
        return $this;
    }

    /**
     * Gets negative_bar_format.
     *
     * @return \Aspose\Cells\Cloud\Model\NegativeBarFormat|null
     */
    public function getNegativeBarFormat()
    {
        return $this->container['negative_bar_format'];
    }

    /**
     * Sets negative_bar_format.
     *
     * @param \Aspose\Cells\Cloud\Model\NegativeBarFormat|null $negative_bar_format
     *
     * @return $this
     */
    public function setNegativeBarFormat($negative_bar_format)
    {
        $this->container['negative_bar_format'] = $negative_bar_format;
        return $this;
    }

    /**
     * Gets show_value.
     *
     * @return bool|null
     */
    public function getShowValue()
    {
        return $this->container['show_value'];
    }

    /**
     * Sets show_value.
     *
     * @param bool|null $show_value
     *
     * @return $this
     */
    public function setShowValue($show_value)
    {
        $this->container['show_value'] = $show_value;
        return $this;
    }
}
