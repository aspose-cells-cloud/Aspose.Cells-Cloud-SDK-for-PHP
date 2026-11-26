<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Line.php">
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

class Line
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Line';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'begin_arrow_length' => 'string',
        'begin_arrow_width' => 'string',
        'begin_type' => 'string',
        'cap_type' => 'string',
        'color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'compound_type' => 'string',
        'dash_type' => 'string',
        'end_arrow_length' => 'string',
        'end_arrow_width' => 'string',
        'end_type' => 'string',
        'gradient_fill' => '\\Aspose\\Cells\\Cloud\\Model\\GradientFill',
        'is_auto' => 'bool',
        'is_automatic_color' => 'bool',
        'is_visible' => 'bool',
        'join_type' => 'string',
        'style' => 'string',
        'transparency' => 'float',
        'weight' => 'string',
        'weight_pt' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'begin_arrow_length' => null,
        'begin_arrow_width' => null,
        'begin_type' => null,
        'cap_type' => null,
        'color' => null,
        'compound_type' => null,
        'dash_type' => null,
        'end_arrow_length' => null,
        'end_arrow_width' => null,
        'end_type' => null,
        'gradient_fill' => null,
        'is_auto' => null,
        'is_automatic_color' => null,
        'is_visible' => null,
        'join_type' => null,
        'style' => null,
        'transparency' => 'float',
        'weight' => null,
        'weight_pt' => 'float',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'begin_arrow_length' => 'BeginArrowLength',
        'begin_arrow_width' => 'BeginArrowWidth',
        'begin_type' => 'BeginType',
        'cap_type' => 'CapType',
        'color' => 'Color',
        'compound_type' => 'CompoundType',
        'dash_type' => 'DashType',
        'end_arrow_length' => 'EndArrowLength',
        'end_arrow_width' => 'EndArrowWidth',
        'end_type' => 'EndType',
        'gradient_fill' => 'GradientFill',
        'is_auto' => 'IsAuto',
        'is_automatic_color' => 'IsAutomaticColor',
        'is_visible' => 'IsVisible',
        'join_type' => 'JoinType',
        'style' => 'Style',
        'transparency' => 'Transparency',
        'weight' => 'Weight',
        'weight_pt' => 'WeightPt',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'begin_arrow_length' => 'setBeginArrowLength',
        'begin_arrow_width' => 'setBeginArrowWidth',
        'begin_type' => 'setBeginType',
        'cap_type' => 'setCapType',
        'color' => 'setColor',
        'compound_type' => 'setCompoundType',
        'dash_type' => 'setDashType',
        'end_arrow_length' => 'setEndArrowLength',
        'end_arrow_width' => 'setEndArrowWidth',
        'end_type' => 'setEndType',
        'gradient_fill' => 'setGradientFill',
        'is_auto' => 'setIsAuto',
        'is_automatic_color' => 'setIsAutomaticColor',
        'is_visible' => 'setIsVisible',
        'join_type' => 'setJoinType',
        'style' => 'setStyle',
        'transparency' => 'setTransparency',
        'weight' => 'setWeight',
        'weight_pt' => 'setWeightPt',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'begin_arrow_length' => 'getBeginArrowLength',
        'begin_arrow_width' => 'getBeginArrowWidth',
        'begin_type' => 'getBeginType',
        'cap_type' => 'getCapType',
        'color' => 'getColor',
        'compound_type' => 'getCompoundType',
        'dash_type' => 'getDashType',
        'end_arrow_length' => 'getEndArrowLength',
        'end_arrow_width' => 'getEndArrowWidth',
        'end_type' => 'getEndType',
        'gradient_fill' => 'getGradientFill',
        'is_auto' => 'getIsAuto',
        'is_automatic_color' => 'getIsAutomaticColor',
        'is_visible' => 'getIsVisible',
        'join_type' => 'getJoinType',
        'style' => 'getStyle',
        'transparency' => 'getTransparency',
        'weight' => 'getWeight',
        'weight_pt' => 'getWeightPt',
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
        $this->container['begin_arrow_length'] = isset($data['begin_arrow_length']) ? $data['begin_arrow_length'] : null;
        $this->container['begin_arrow_width'] = isset($data['begin_arrow_width']) ? $data['begin_arrow_width'] : null;
        $this->container['begin_type'] = isset($data['begin_type']) ? $data['begin_type'] : null;
        $this->container['cap_type'] = isset($data['cap_type']) ? $data['cap_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['compound_type'] = isset($data['compound_type']) ? $data['compound_type'] : null;
        $this->container['dash_type'] = isset($data['dash_type']) ? $data['dash_type'] : null;
        $this->container['end_arrow_length'] = isset($data['end_arrow_length']) ? $data['end_arrow_length'] : null;
        $this->container['end_arrow_width'] = isset($data['end_arrow_width']) ? $data['end_arrow_width'] : null;
        $this->container['end_type'] = isset($data['end_type']) ? $data['end_type'] : null;
        $this->container['gradient_fill'] = isset($data['gradient_fill']) ? $data['gradient_fill'] : null;
        $this->container['is_auto'] = isset($data['is_auto']) ? $data['is_auto'] : null;
        $this->container['is_automatic_color'] = isset($data['is_automatic_color']) ? $data['is_automatic_color'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['join_type'] = isset($data['join_type']) ? $data['join_type'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['weight_pt'] = isset($data['weight_pt']) ? $data['weight_pt'] : null;
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
     * Gets begin_arrow_length.
     *
     * @return string|null
     */
    public function getBeginArrowLength()
    {
        return $this->container['begin_arrow_length'];
    }

    /**
     * Sets begin_arrow_length.
     *
     * @param string|null $begin_arrow_length
     *
     * @return $this
     */
    public function setBeginArrowLength($begin_arrow_length)
    {
        $this->container['begin_arrow_length'] = $begin_arrow_length;
        return $this;
    }

    /**
     * Gets begin_arrow_width.
     *
     * @return string|null
     */
    public function getBeginArrowWidth()
    {
        return $this->container['begin_arrow_width'];
    }

    /**
     * Sets begin_arrow_width.
     *
     * @param string|null $begin_arrow_width
     *
     * @return $this
     */
    public function setBeginArrowWidth($begin_arrow_width)
    {
        $this->container['begin_arrow_width'] = $begin_arrow_width;
        return $this;
    }

    /**
     * Gets begin_type.
     *
     * @return string|null
     */
    public function getBeginType()
    {
        return $this->container['begin_type'];
    }

    /**
     * Sets begin_type.
     *
     * @param string|null $begin_type
     *
     * @return $this
     */
    public function setBeginType($begin_type)
    {
        $this->container['begin_type'] = $begin_type;
        return $this;
    }

    /**
     * Gets cap_type.
     *
     * @return string|null
     */
    public function getCapType()
    {
        return $this->container['cap_type'];
    }

    /**
     * Sets cap_type.
     *
     * @param string|null $cap_type
     *
     * @return $this
     */
    public function setCapType($cap_type)
    {
        $this->container['cap_type'] = $cap_type;
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
     * Gets compound_type.
     *
     * @return string|null
     */
    public function getCompoundType()
    {
        return $this->container['compound_type'];
    }

    /**
     * Sets compound_type.
     *
     * @param string|null $compound_type
     *
     * @return $this
     */
    public function setCompoundType($compound_type)
    {
        $this->container['compound_type'] = $compound_type;
        return $this;
    }

    /**
     * Gets dash_type.
     *
     * @return string|null
     */
    public function getDashType()
    {
        return $this->container['dash_type'];
    }

    /**
     * Sets dash_type.
     *
     * @param string|null $dash_type
     *
     * @return $this
     */
    public function setDashType($dash_type)
    {
        $this->container['dash_type'] = $dash_type;
        return $this;
    }

    /**
     * Gets end_arrow_length.
     *
     * @return string|null
     */
    public function getEndArrowLength()
    {
        return $this->container['end_arrow_length'];
    }

    /**
     * Sets end_arrow_length.
     *
     * @param string|null $end_arrow_length
     *
     * @return $this
     */
    public function setEndArrowLength($end_arrow_length)
    {
        $this->container['end_arrow_length'] = $end_arrow_length;
        return $this;
    }

    /**
     * Gets end_arrow_width.
     *
     * @return string|null
     */
    public function getEndArrowWidth()
    {
        return $this->container['end_arrow_width'];
    }

    /**
     * Sets end_arrow_width.
     *
     * @param string|null $end_arrow_width
     *
     * @return $this
     */
    public function setEndArrowWidth($end_arrow_width)
    {
        $this->container['end_arrow_width'] = $end_arrow_width;
        return $this;
    }

    /**
     * Gets end_type.
     *
     * @return string|null
     */
    public function getEndType()
    {
        return $this->container['end_type'];
    }

    /**
     * Sets end_type.
     *
     * @param string|null $end_type
     *
     * @return $this
     */
    public function setEndType($end_type)
    {
        $this->container['end_type'] = $end_type;
        return $this;
    }

    /**
     * Gets gradient_fill.
     *
     * @return \Aspose\Cells\Cloud\Model\GradientFill|null
     */
    public function getGradientFill()
    {
        return $this->container['gradient_fill'];
    }

    /**
     * Sets gradient_fill.
     *
     * @param \Aspose\Cells\Cloud\Model\GradientFill|null $gradient_fill
     *
     * @return $this
     */
    public function setGradientFill($gradient_fill)
    {
        $this->container['gradient_fill'] = $gradient_fill;
        return $this;
    }

    /**
     * Gets is_auto.
     *
     * @return bool|null
     */
    public function getIsAuto()
    {
        return $this->container['is_auto'];
    }

    /**
     * Sets is_auto.
     *
     * @param bool|null $is_auto
     *
     * @return $this
     */
    public function setIsAuto($is_auto)
    {
        $this->container['is_auto'] = $is_auto;
        return $this;
    }

    /**
     * Gets is_automatic_color.
     *
     * @return bool|null
     */
    public function getIsAutomaticColor()
    {
        return $this->container['is_automatic_color'];
    }

    /**
     * Sets is_automatic_color.
     *
     * @param bool|null $is_automatic_color
     *
     * @return $this
     */
    public function setIsAutomaticColor($is_automatic_color)
    {
        $this->container['is_automatic_color'] = $is_automatic_color;
        return $this;
    }

    /**
     * Gets is_visible.
     *
     * @return bool|null
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible.
     *
     * @param bool|null $is_visible
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;
        return $this;
    }

    /**
     * Gets join_type.
     *
     * @return string|null
     */
    public function getJoinType()
    {
        return $this->container['join_type'];
    }

    /**
     * Sets join_type.
     *
     * @param string|null $join_type
     *
     * @return $this
     */
    public function setJoinType($join_type)
    {
        $this->container['join_type'] = $join_type;
        return $this;
    }

    /**
     * Gets style.
     *
     * @return string|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style.
     *
     * @param string|null $style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;
        return $this;
    }

    /**
     * Gets transparency.
     *
     * @return float|null
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /**
     * Sets transparency.
     *
     * @param float|null $transparency
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;
        return $this;
    }

    /**
     * Gets weight.
     *
     * @return string|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param string|null $weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
     * Gets weight_pt.
     *
     * @return float|null
     */
    public function getWeightPt()
    {
        return $this->container['weight_pt'];
    }

    /**
     * Sets weight_pt.
     *
     * @param float|null $weight_pt
     *
     * @return $this
     */
    public function setWeightPt($weight_pt)
    {
        $this->container['weight_pt'] = $weight_pt;
        return $this;
    }
}
