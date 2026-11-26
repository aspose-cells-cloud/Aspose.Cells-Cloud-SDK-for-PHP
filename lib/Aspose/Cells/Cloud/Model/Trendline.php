<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Trendline.php">
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

class Trendline extends Line
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Trendline';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
        'backward' => 'float',
        'data_labels' => '\\Aspose\\Cells\\Cloud\\Model\\DataLabels',
        'display_equation' => 'bool',
        'display_r_squared' => 'bool',
        'forward' => 'float',
        'intercept' => 'float',
        'is_name_auto' => 'bool',
        'legend_entry' => '\\Aspose\\Cells\\Cloud\\Model\\LegendEntry',
        'name' => 'string',
        'order' => 'int',
        'period' => 'int',
        'type' => 'string',
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
        'link' => null,
        'backward' => 'float',
        'data_labels' => null,
        'display_equation' => null,
        'display_r_squared' => null,
        'forward' => 'float',
        'intercept' => 'float',
        'is_name_auto' => null,
        'legend_entry' => null,
        'name' => null,
        'order' => 'int32',
        'period' => 'int32',
        'type' => null,
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
        'link' => 'link',
        'backward' => 'Backward',
        'data_labels' => 'DataLabels',
        'display_equation' => 'DisplayEquation',
        'display_r_squared' => 'DisplayRSquared',
        'forward' => 'Forward',
        'intercept' => 'Intercept',
        'is_name_auto' => 'IsNameAuto',
        'legend_entry' => 'LegendEntry',
        'name' => 'Name',
        'order' => 'Order',
        'period' => 'Period',
        'type' => 'Type',
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
        'link' => 'setLink',
        'backward' => 'setBackward',
        'data_labels' => 'setDataLabels',
        'display_equation' => 'setDisplayEquation',
        'display_r_squared' => 'setDisplayRSquared',
        'forward' => 'setForward',
        'intercept' => 'setIntercept',
        'is_name_auto' => 'setIsNameAuto',
        'legend_entry' => 'setLegendEntry',
        'name' => 'setName',
        'order' => 'setOrder',
        'period' => 'setPeriod',
        'type' => 'setType',
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
        'link' => 'getLink',
        'backward' => 'getBackward',
        'data_labels' => 'getDataLabels',
        'display_equation' => 'getDisplayEquation',
        'display_r_squared' => 'getDisplayRSquared',
        'forward' => 'getForward',
        'intercept' => 'getIntercept',
        'is_name_auto' => 'getIsNameAuto',
        'legend_entry' => 'getLegendEntry',
        'name' => 'getName',
        'order' => 'getOrder',
        'period' => 'getPeriod',
        'type' => 'getType',
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
        parent::__construct($data);
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['backward'] = isset($data['backward']) ? $data['backward'] : null;
        $this->container['data_labels'] = isset($data['data_labels']) ? $data['data_labels'] : null;
        $this->container['display_equation'] = isset($data['display_equation']) ? $data['display_equation'] : null;
        $this->container['display_r_squared'] = isset($data['display_r_squared']) ? $data['display_r_squared'] : null;
        $this->container['forward'] = isset($data['forward']) ? $data['forward'] : null;
        $this->container['intercept'] = isset($data['intercept']) ? $data['intercept'] : null;
        $this->container['is_name_auto'] = isset($data['is_name_auto']) ? $data['is_name_auto'] : null;
        $this->container['legend_entry'] = isset($data['legend_entry']) ? $data['legend_entry'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        $invalidProperties = parent::listInvalidProperties();
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
     * Gets link.
     *
     * @return \Aspose\Cells\Cloud\Model\Link|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link.
     *
     * @param \Aspose\Cells\Cloud\Model\Link|null $link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
     * Gets backward.
     *
     * @return float|null
     */
    public function getBackward()
    {
        return $this->container['backward'];
    }

    /**
     * Sets backward.
     *
     * @param float|null $backward
     *
     * @return $this
     */
    public function setBackward($backward)
    {
        $this->container['backward'] = $backward;
        return $this;
    }

    /**
     * Gets data_labels.
     *
     * @return \Aspose\Cells\Cloud\Model\DataLabels|null
     */
    public function getDataLabels()
    {
        return $this->container['data_labels'];
    }

    /**
     * Sets data_labels.
     *
     * @param \Aspose\Cells\Cloud\Model\DataLabels|null $data_labels
     *
     * @return $this
     */
    public function setDataLabels($data_labels)
    {
        $this->container['data_labels'] = $data_labels;
        return $this;
    }

    /**
     * Gets display_equation.
     *
     * @return bool|null
     */
    public function getDisplayEquation()
    {
        return $this->container['display_equation'];
    }

    /**
     * Sets display_equation.
     *
     * @param bool|null $display_equation
     *
     * @return $this
     */
    public function setDisplayEquation($display_equation)
    {
        $this->container['display_equation'] = $display_equation;
        return $this;
    }

    /**
     * Gets display_r_squared.
     *
     * @return bool|null
     */
    public function getDisplayRSquared()
    {
        return $this->container['display_r_squared'];
    }

    /**
     * Sets display_r_squared.
     *
     * @param bool|null $display_r_squared
     *
     * @return $this
     */
    public function setDisplayRSquared($display_r_squared)
    {
        $this->container['display_r_squared'] = $display_r_squared;
        return $this;
    }

    /**
     * Gets forward.
     *
     * @return float|null
     */
    public function getForward()
    {
        return $this->container['forward'];
    }

    /**
     * Sets forward.
     *
     * @param float|null $forward
     *
     * @return $this
     */
    public function setForward($forward)
    {
        $this->container['forward'] = $forward;
        return $this;
    }

    /**
     * Gets intercept.
     *
     * @return float|null
     */
    public function getIntercept()
    {
        return $this->container['intercept'];
    }

    /**
     * Sets intercept.
     *
     * @param float|null $intercept
     *
     * @return $this
     */
    public function setIntercept($intercept)
    {
        $this->container['intercept'] = $intercept;
        return $this;
    }

    /**
     * Gets is_name_auto.
     *
     * @return bool|null
     */
    public function getIsNameAuto()
    {
        return $this->container['is_name_auto'];
    }

    /**
     * Sets is_name_auto.
     *
     * @param bool|null $is_name_auto
     *
     * @return $this
     */
    public function setIsNameAuto($is_name_auto)
    {
        $this->container['is_name_auto'] = $is_name_auto;
        return $this;
    }

    /**
     * Gets legend_entry.
     *
     * @return \Aspose\Cells\Cloud\Model\LegendEntry|null
     */
    public function getLegendEntry()
    {
        return $this->container['legend_entry'];
    }

    /**
     * Sets legend_entry.
     *
     * @param \Aspose\Cells\Cloud\Model\LegendEntry|null $legend_entry
     *
     * @return $this
     */
    public function setLegendEntry($legend_entry)
    {
        $this->container['legend_entry'] = $legend_entry;
        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets order.
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order.
     *
     * @param int|null $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
     * Gets period.
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period.
     *
     * @param int|null $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
     * Gets type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
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
