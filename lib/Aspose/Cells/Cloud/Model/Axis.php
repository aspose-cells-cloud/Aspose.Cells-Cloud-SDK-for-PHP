<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Axis.php">
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

class Axis extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Axis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area' => '\\Aspose\\Cells\\Cloud\\Model\\Area',
        'axis_between_categories' => 'bool',
        'axis_line' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'base_unit_scale' => 'string',
        'category_type' => 'string',
        'cross_at' => 'float',
        'cross_type' => 'string',
        'display_unit' => 'string',
        'display_unit_label' => '\\Aspose\\Cells\\Cloud\\Model\\DisplayUnitLabel',
        'has_multi_level_labels' => 'bool',
        'is_automatic_major_unit' => 'bool',
        'is_automatic_max_value' => 'bool',
        'is_automatic_minor_unit' => 'bool',
        'is_automatic_min_value' => 'bool',
        'is_display_unit_label_shown' => 'bool',
        'is_logarithmic' => 'bool',
        'is_plot_order_reversed' => 'bool',
        'is_visible' => 'bool',
        'log_base' => 'float',
        'major_grid_lines' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'major_tick_mark' => 'string',
        'major_unit' => 'float',
        'major_unit_scale' => 'string',
        'max_value' => 'float',
        'minor_grid_lines' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'minor_tick_mark' => 'string',
        'minor_unit' => 'float',
        'minor_unit_scale' => 'string',
        'min_value' => 'float',
        'tick_label_position' => 'string',
        'tick_labels' => '\\Aspose\\Cells\\Cloud\\Model\\TickLabels',
        'tick_label_spacing' => 'int',
        'tick_mark_spacing' => 'int',
        'title' => '\\Aspose\\Cells\\Cloud\\Model\\Title',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area' => null,
        'axis_between_categories' => null,
        'axis_line' => null,
        'base_unit_scale' => null,
        'category_type' => null,
        'cross_at' => 'float',
        'cross_type' => null,
        'display_unit' => null,
        'display_unit_label' => null,
        'has_multi_level_labels' => null,
        'is_automatic_major_unit' => null,
        'is_automatic_max_value' => null,
        'is_automatic_minor_unit' => null,
        'is_automatic_min_value' => null,
        'is_display_unit_label_shown' => null,
        'is_logarithmic' => null,
        'is_plot_order_reversed' => null,
        'is_visible' => null,
        'log_base' => 'float',
        'major_grid_lines' => null,
        'major_tick_mark' => null,
        'major_unit' => 'float',
        'major_unit_scale' => null,
        'max_value' => 'float',
        'minor_grid_lines' => null,
        'minor_tick_mark' => null,
        'minor_unit' => 'float',
        'minor_unit_scale' => null,
        'min_value' => 'float',
        'tick_label_position' => null,
        'tick_labels' => null,
        'tick_label_spacing' => 'int32',
        'tick_mark_spacing' => 'int32',
        'title' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'area' => 'Area',
        'axis_between_categories' => 'AxisBetweenCategories',
        'axis_line' => 'AxisLine',
        'base_unit_scale' => 'BaseUnitScale',
        'category_type' => 'CategoryType',
        'cross_at' => 'CrossAt',
        'cross_type' => 'CrossType',
        'display_unit' => 'DisplayUnit',
        'display_unit_label' => 'DisplayUnitLabel',
        'has_multi_level_labels' => 'HasMultiLevelLabels',
        'is_automatic_major_unit' => 'IsAutomaticMajorUnit',
        'is_automatic_max_value' => 'IsAutomaticMaxValue',
        'is_automatic_minor_unit' => 'IsAutomaticMinorUnit',
        'is_automatic_min_value' => 'IsAutomaticMinValue',
        'is_display_unit_label_shown' => 'IsDisplayUnitLabelShown',
        'is_logarithmic' => 'IsLogarithmic',
        'is_plot_order_reversed' => 'IsPlotOrderReversed',
        'is_visible' => 'IsVisible',
        'log_base' => 'LogBase',
        'major_grid_lines' => 'MajorGridLines',
        'major_tick_mark' => 'MajorTickMark',
        'major_unit' => 'MajorUnit',
        'major_unit_scale' => 'MajorUnitScale',
        'max_value' => 'MaxValue',
        'minor_grid_lines' => 'MinorGridLines',
        'minor_tick_mark' => 'MinorTickMark',
        'minor_unit' => 'MinorUnit',
        'minor_unit_scale' => 'MinorUnitScale',
        'min_value' => 'MinValue',
        'tick_label_position' => 'TickLabelPosition',
        'tick_labels' => 'TickLabels',
        'tick_label_spacing' => 'TickLabelSpacing',
        'tick_mark_spacing' => 'TickMarkSpacing',
        'title' => 'Title',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'area' => 'setArea',
        'axis_between_categories' => 'setAxisBetweenCategories',
        'axis_line' => 'setAxisLine',
        'base_unit_scale' => 'setBaseUnitScale',
        'category_type' => 'setCategoryType',
        'cross_at' => 'setCrossAt',
        'cross_type' => 'setCrossType',
        'display_unit' => 'setDisplayUnit',
        'display_unit_label' => 'setDisplayUnitLabel',
        'has_multi_level_labels' => 'setHasMultiLevelLabels',
        'is_automatic_major_unit' => 'setIsAutomaticMajorUnit',
        'is_automatic_max_value' => 'setIsAutomaticMaxValue',
        'is_automatic_minor_unit' => 'setIsAutomaticMinorUnit',
        'is_automatic_min_value' => 'setIsAutomaticMinValue',
        'is_display_unit_label_shown' => 'setIsDisplayUnitLabelShown',
        'is_logarithmic' => 'setIsLogarithmic',
        'is_plot_order_reversed' => 'setIsPlotOrderReversed',
        'is_visible' => 'setIsVisible',
        'log_base' => 'setLogBase',
        'major_grid_lines' => 'setMajorGridLines',
        'major_tick_mark' => 'setMajorTickMark',
        'major_unit' => 'setMajorUnit',
        'major_unit_scale' => 'setMajorUnitScale',
        'max_value' => 'setMaxValue',
        'minor_grid_lines' => 'setMinorGridLines',
        'minor_tick_mark' => 'setMinorTickMark',
        'minor_unit' => 'setMinorUnit',
        'minor_unit_scale' => 'setMinorUnitScale',
        'min_value' => 'setMinValue',
        'tick_label_position' => 'setTickLabelPosition',
        'tick_labels' => 'setTickLabels',
        'tick_label_spacing' => 'setTickLabelSpacing',
        'tick_mark_spacing' => 'setTickMarkSpacing',
        'title' => 'setTitle',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'area' => 'getArea',
        'axis_between_categories' => 'getAxisBetweenCategories',
        'axis_line' => 'getAxisLine',
        'base_unit_scale' => 'getBaseUnitScale',
        'category_type' => 'getCategoryType',
        'cross_at' => 'getCrossAt',
        'cross_type' => 'getCrossType',
        'display_unit' => 'getDisplayUnit',
        'display_unit_label' => 'getDisplayUnitLabel',
        'has_multi_level_labels' => 'getHasMultiLevelLabels',
        'is_automatic_major_unit' => 'getIsAutomaticMajorUnit',
        'is_automatic_max_value' => 'getIsAutomaticMaxValue',
        'is_automatic_minor_unit' => 'getIsAutomaticMinorUnit',
        'is_automatic_min_value' => 'getIsAutomaticMinValue',
        'is_display_unit_label_shown' => 'getIsDisplayUnitLabelShown',
        'is_logarithmic' => 'getIsLogarithmic',
        'is_plot_order_reversed' => 'getIsPlotOrderReversed',
        'is_visible' => 'getIsVisible',
        'log_base' => 'getLogBase',
        'major_grid_lines' => 'getMajorGridLines',
        'major_tick_mark' => 'getMajorTickMark',
        'major_unit' => 'getMajorUnit',
        'major_unit_scale' => 'getMajorUnitScale',
        'max_value' => 'getMaxValue',
        'minor_grid_lines' => 'getMinorGridLines',
        'minor_tick_mark' => 'getMinorTickMark',
        'minor_unit' => 'getMinorUnit',
        'minor_unit_scale' => 'getMinorUnitScale',
        'min_value' => 'getMinValue',
        'tick_label_position' => 'getTickLabelPosition',
        'tick_labels' => 'getTickLabels',
        'tick_label_spacing' => 'getTickLabelSpacing',
        'tick_mark_spacing' => 'getTickMarkSpacing',
        'title' => 'getTitle',
        'link' => 'getLink',
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['axis_between_categories'] = isset($data['axis_between_categories']) ? $data['axis_between_categories'] : null;
        $this->container['axis_line'] = isset($data['axis_line']) ? $data['axis_line'] : null;
        $this->container['base_unit_scale'] = isset($data['base_unit_scale']) ? $data['base_unit_scale'] : null;
        $this->container['category_type'] = isset($data['category_type']) ? $data['category_type'] : null;
        $this->container['cross_at'] = isset($data['cross_at']) ? $data['cross_at'] : null;
        $this->container['cross_type'] = isset($data['cross_type']) ? $data['cross_type'] : null;
        $this->container['display_unit'] = isset($data['display_unit']) ? $data['display_unit'] : null;
        $this->container['display_unit_label'] = isset($data['display_unit_label']) ? $data['display_unit_label'] : null;
        $this->container['has_multi_level_labels'] = isset($data['has_multi_level_labels']) ? $data['has_multi_level_labels'] : null;
        $this->container['is_automatic_major_unit'] = isset($data['is_automatic_major_unit']) ? $data['is_automatic_major_unit'] : null;
        $this->container['is_automatic_max_value'] = isset($data['is_automatic_max_value']) ? $data['is_automatic_max_value'] : null;
        $this->container['is_automatic_minor_unit'] = isset($data['is_automatic_minor_unit']) ? $data['is_automatic_minor_unit'] : null;
        $this->container['is_automatic_min_value'] = isset($data['is_automatic_min_value']) ? $data['is_automatic_min_value'] : null;
        $this->container['is_display_unit_label_shown'] = isset($data['is_display_unit_label_shown']) ? $data['is_display_unit_label_shown'] : null;
        $this->container['is_logarithmic'] = isset($data['is_logarithmic']) ? $data['is_logarithmic'] : null;
        $this->container['is_plot_order_reversed'] = isset($data['is_plot_order_reversed']) ? $data['is_plot_order_reversed'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['log_base'] = isset($data['log_base']) ? $data['log_base'] : null;
        $this->container['major_grid_lines'] = isset($data['major_grid_lines']) ? $data['major_grid_lines'] : null;
        $this->container['major_tick_mark'] = isset($data['major_tick_mark']) ? $data['major_tick_mark'] : null;
        $this->container['major_unit'] = isset($data['major_unit']) ? $data['major_unit'] : null;
        $this->container['major_unit_scale'] = isset($data['major_unit_scale']) ? $data['major_unit_scale'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['minor_grid_lines'] = isset($data['minor_grid_lines']) ? $data['minor_grid_lines'] : null;
        $this->container['minor_tick_mark'] = isset($data['minor_tick_mark']) ? $data['minor_tick_mark'] : null;
        $this->container['minor_unit'] = isset($data['minor_unit']) ? $data['minor_unit'] : null;
        $this->container['minor_unit_scale'] = isset($data['minor_unit_scale']) ? $data['minor_unit_scale'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['tick_label_position'] = isset($data['tick_label_position']) ? $data['tick_label_position'] : null;
        $this->container['tick_labels'] = isset($data['tick_labels']) ? $data['tick_labels'] : null;
        $this->container['tick_label_spacing'] = isset($data['tick_label_spacing']) ? $data['tick_label_spacing'] : null;
        $this->container['tick_mark_spacing'] = isset($data['tick_mark_spacing']) ? $data['tick_mark_spacing'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
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
     * Gets area.
     *
     * @return \Aspose\Cells\Cloud\Model\Area|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area.
     *
     * @param \Aspose\Cells\Cloud\Model\Area|null $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
     * Gets axis_between_categories.
     *
     * @return bool|null
     */
    public function getAxisBetweenCategories()
    {
        return $this->container['axis_between_categories'];
    }

    /**
     * Sets axis_between_categories.
     *
     * @param bool|null $axis_between_categories
     *
     * @return $this
     */
    public function setAxisBetweenCategories($axis_between_categories)
    {
        $this->container['axis_between_categories'] = $axis_between_categories;
        return $this;
    }

    /**
     * Gets axis_line.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getAxisLine()
    {
        return $this->container['axis_line'];
    }

    /**
     * Sets axis_line.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $axis_line
     *
     * @return $this
     */
    public function setAxisLine($axis_line)
    {
        $this->container['axis_line'] = $axis_line;
        return $this;
    }

    /**
     * Gets base_unit_scale.
     *
     * @return string|null
     */
    public function getBaseUnitScale()
    {
        return $this->container['base_unit_scale'];
    }

    /**
     * Sets base_unit_scale.
     *
     * @param string|null $base_unit_scale
     *
     * @return $this
     */
    public function setBaseUnitScale($base_unit_scale)
    {
        $this->container['base_unit_scale'] = $base_unit_scale;
        return $this;
    }

    /**
     * Gets category_type.
     *
     * @return string|null
     */
    public function getCategoryType()
    {
        return $this->container['category_type'];
    }

    /**
     * Sets category_type.
     *
     * @param string|null $category_type
     *
     * @return $this
     */
    public function setCategoryType($category_type)
    {
        $this->container['category_type'] = $category_type;
        return $this;
    }

    /**
     * Gets cross_at.
     *
     * @return float|null
     */
    public function getCrossAt()
    {
        return $this->container['cross_at'];
    }

    /**
     * Sets cross_at.
     *
     * @param float|null $cross_at
     *
     * @return $this
     */
    public function setCrossAt($cross_at)
    {
        $this->container['cross_at'] = $cross_at;
        return $this;
    }

    /**
     * Gets cross_type.
     *
     * @return string|null
     */
    public function getCrossType()
    {
        return $this->container['cross_type'];
    }

    /**
     * Sets cross_type.
     *
     * @param string|null $cross_type
     *
     * @return $this
     */
    public function setCrossType($cross_type)
    {
        $this->container['cross_type'] = $cross_type;
        return $this;
    }

    /**
     * Gets display_unit.
     *
     * @return string|null
     */
    public function getDisplayUnit()
    {
        return $this->container['display_unit'];
    }

    /**
     * Sets display_unit.
     *
     * @param string|null $display_unit
     *
     * @return $this
     */
    public function setDisplayUnit($display_unit)
    {
        $this->container['display_unit'] = $display_unit;
        return $this;
    }

    /**
     * Gets display_unit_label.
     *
     * @return \Aspose\Cells\Cloud\Model\DisplayUnitLabel|null
     */
    public function getDisplayUnitLabel()
    {
        return $this->container['display_unit_label'];
    }

    /**
     * Sets display_unit_label.
     *
     * @param \Aspose\Cells\Cloud\Model\DisplayUnitLabel|null $display_unit_label
     *
     * @return $this
     */
    public function setDisplayUnitLabel($display_unit_label)
    {
        $this->container['display_unit_label'] = $display_unit_label;
        return $this;
    }

    /**
     * Gets has_multi_level_labels.
     *
     * @return bool|null
     */
    public function getHasMultiLevelLabels()
    {
        return $this->container['has_multi_level_labels'];
    }

    /**
     * Sets has_multi_level_labels.
     *
     * @param bool|null $has_multi_level_labels
     *
     * @return $this
     */
    public function setHasMultiLevelLabels($has_multi_level_labels)
    {
        $this->container['has_multi_level_labels'] = $has_multi_level_labels;
        return $this;
    }

    /**
     * Gets is_automatic_major_unit.
     *
     * @return bool|null
     */
    public function getIsAutomaticMajorUnit()
    {
        return $this->container['is_automatic_major_unit'];
    }

    /**
     * Sets is_automatic_major_unit.
     *
     * @param bool|null $is_automatic_major_unit
     *
     * @return $this
     */
    public function setIsAutomaticMajorUnit($is_automatic_major_unit)
    {
        $this->container['is_automatic_major_unit'] = $is_automatic_major_unit;
        return $this;
    }

    /**
     * Gets is_automatic_max_value.
     *
     * @return bool|null
     */
    public function getIsAutomaticMaxValue()
    {
        return $this->container['is_automatic_max_value'];
    }

    /**
     * Sets is_automatic_max_value.
     *
     * @param bool|null $is_automatic_max_value
     *
     * @return $this
     */
    public function setIsAutomaticMaxValue($is_automatic_max_value)
    {
        $this->container['is_automatic_max_value'] = $is_automatic_max_value;
        return $this;
    }

    /**
     * Gets is_automatic_minor_unit.
     *
     * @return bool|null
     */
    public function getIsAutomaticMinorUnit()
    {
        return $this->container['is_automatic_minor_unit'];
    }

    /**
     * Sets is_automatic_minor_unit.
     *
     * @param bool|null $is_automatic_minor_unit
     *
     * @return $this
     */
    public function setIsAutomaticMinorUnit($is_automatic_minor_unit)
    {
        $this->container['is_automatic_minor_unit'] = $is_automatic_minor_unit;
        return $this;
    }

    /**
     * Gets is_automatic_min_value.
     *
     * @return bool|null
     */
    public function getIsAutomaticMinValue()
    {
        return $this->container['is_automatic_min_value'];
    }

    /**
     * Sets is_automatic_min_value.
     *
     * @param bool|null $is_automatic_min_value
     *
     * @return $this
     */
    public function setIsAutomaticMinValue($is_automatic_min_value)
    {
        $this->container['is_automatic_min_value'] = $is_automatic_min_value;
        return $this;
    }

    /**
     * Gets is_display_unit_label_shown.
     *
     * @return bool|null
     */
    public function getIsDisplayUnitLabelShown()
    {
        return $this->container['is_display_unit_label_shown'];
    }

    /**
     * Sets is_display_unit_label_shown.
     *
     * @param bool|null $is_display_unit_label_shown
     *
     * @return $this
     */
    public function setIsDisplayUnitLabelShown($is_display_unit_label_shown)
    {
        $this->container['is_display_unit_label_shown'] = $is_display_unit_label_shown;
        return $this;
    }

    /**
     * Gets is_logarithmic.
     *
     * @return bool|null
     */
    public function getIsLogarithmic()
    {
        return $this->container['is_logarithmic'];
    }

    /**
     * Sets is_logarithmic.
     *
     * @param bool|null $is_logarithmic
     *
     * @return $this
     */
    public function setIsLogarithmic($is_logarithmic)
    {
        $this->container['is_logarithmic'] = $is_logarithmic;
        return $this;
    }

    /**
     * Gets is_plot_order_reversed.
     *
     * @return bool|null
     */
    public function getIsPlotOrderReversed()
    {
        return $this->container['is_plot_order_reversed'];
    }

    /**
     * Sets is_plot_order_reversed.
     *
     * @param bool|null $is_plot_order_reversed
     *
     * @return $this
     */
    public function setIsPlotOrderReversed($is_plot_order_reversed)
    {
        $this->container['is_plot_order_reversed'] = $is_plot_order_reversed;
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
     * Gets log_base.
     *
     * @return float|null
     */
    public function getLogBase()
    {
        return $this->container['log_base'];
    }

    /**
     * Sets log_base.
     *
     * @param float|null $log_base
     *
     * @return $this
     */
    public function setLogBase($log_base)
    {
        $this->container['log_base'] = $log_base;
        return $this;
    }

    /**
     * Gets major_grid_lines.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getMajorGridLines()
    {
        return $this->container['major_grid_lines'];
    }

    /**
     * Sets major_grid_lines.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $major_grid_lines
     *
     * @return $this
     */
    public function setMajorGridLines($major_grid_lines)
    {
        $this->container['major_grid_lines'] = $major_grid_lines;
        return $this;
    }

    /**
     * Gets major_tick_mark.
     *
     * @return string|null
     */
    public function getMajorTickMark()
    {
        return $this->container['major_tick_mark'];
    }

    /**
     * Sets major_tick_mark.
     *
     * @param string|null $major_tick_mark
     *
     * @return $this
     */
    public function setMajorTickMark($major_tick_mark)
    {
        $this->container['major_tick_mark'] = $major_tick_mark;
        return $this;
    }

    /**
     * Gets major_unit.
     *
     * @return float|null
     */
    public function getMajorUnit()
    {
        return $this->container['major_unit'];
    }

    /**
     * Sets major_unit.
     *
     * @param float|null $major_unit
     *
     * @return $this
     */
    public function setMajorUnit($major_unit)
    {
        $this->container['major_unit'] = $major_unit;
        return $this;
    }

    /**
     * Gets major_unit_scale.
     *
     * @return string|null
     */
    public function getMajorUnitScale()
    {
        return $this->container['major_unit_scale'];
    }

    /**
     * Sets major_unit_scale.
     *
     * @param string|null $major_unit_scale
     *
     * @return $this
     */
    public function setMajorUnitScale($major_unit_scale)
    {
        $this->container['major_unit_scale'] = $major_unit_scale;
        return $this;
    }

    /**
     * Gets max_value.
     *
     * @return float|null
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value.
     *
     * @param float|null $max_value
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;
        return $this;
    }

    /**
     * Gets minor_grid_lines.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getMinorGridLines()
    {
        return $this->container['minor_grid_lines'];
    }

    /**
     * Sets minor_grid_lines.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $minor_grid_lines
     *
     * @return $this
     */
    public function setMinorGridLines($minor_grid_lines)
    {
        $this->container['minor_grid_lines'] = $minor_grid_lines;
        return $this;
    }

    /**
     * Gets minor_tick_mark.
     *
     * @return string|null
     */
    public function getMinorTickMark()
    {
        return $this->container['minor_tick_mark'];
    }

    /**
     * Sets minor_tick_mark.
     *
     * @param string|null $minor_tick_mark
     *
     * @return $this
     */
    public function setMinorTickMark($minor_tick_mark)
    {
        $this->container['minor_tick_mark'] = $minor_tick_mark;
        return $this;
    }

    /**
     * Gets minor_unit.
     *
     * @return float|null
     */
    public function getMinorUnit()
    {
        return $this->container['minor_unit'];
    }

    /**
     * Sets minor_unit.
     *
     * @param float|null $minor_unit
     *
     * @return $this
     */
    public function setMinorUnit($minor_unit)
    {
        $this->container['minor_unit'] = $minor_unit;
        return $this;
    }

    /**
     * Gets minor_unit_scale.
     *
     * @return string|null
     */
    public function getMinorUnitScale()
    {
        return $this->container['minor_unit_scale'];
    }

    /**
     * Sets minor_unit_scale.
     *
     * @param string|null $minor_unit_scale
     *
     * @return $this
     */
    public function setMinorUnitScale($minor_unit_scale)
    {
        $this->container['minor_unit_scale'] = $minor_unit_scale;
        return $this;
    }

    /**
     * Gets min_value.
     *
     * @return float|null
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value.
     *
     * @param float|null $min_value
     *
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;
        return $this;
    }

    /**
     * Gets tick_label_position.
     *
     * @return string|null
     */
    public function getTickLabelPosition()
    {
        return $this->container['tick_label_position'];
    }

    /**
     * Sets tick_label_position.
     *
     * @param string|null $tick_label_position
     *
     * @return $this
     */
    public function setTickLabelPosition($tick_label_position)
    {
        $this->container['tick_label_position'] = $tick_label_position;
        return $this;
    }

    /**
     * Gets tick_labels.
     *
     * @return \Aspose\Cells\Cloud\Model\TickLabels|null
     */
    public function getTickLabels()
    {
        return $this->container['tick_labels'];
    }

    /**
     * Sets tick_labels.
     *
     * @param \Aspose\Cells\Cloud\Model\TickLabels|null $tick_labels
     *
     * @return $this
     */
    public function setTickLabels($tick_labels)
    {
        $this->container['tick_labels'] = $tick_labels;
        return $this;
    }

    /**
     * Gets tick_label_spacing.
     *
     * @return int|null
     */
    public function getTickLabelSpacing()
    {
        return $this->container['tick_label_spacing'];
    }

    /**
     * Sets tick_label_spacing.
     *
     * @param int|null $tick_label_spacing
     *
     * @return $this
     */
    public function setTickLabelSpacing($tick_label_spacing)
    {
        $this->container['tick_label_spacing'] = $tick_label_spacing;
        return $this;
    }

    /**
     * Gets tick_mark_spacing.
     *
     * @return int|null
     */
    public function getTickMarkSpacing()
    {
        return $this->container['tick_mark_spacing'];
    }

    /**
     * Sets tick_mark_spacing.
     *
     * @param int|null $tick_mark_spacing
     *
     * @return $this
     */
    public function setTickMarkSpacing($tick_mark_spacing)
    {
        $this->container['tick_mark_spacing'] = $tick_mark_spacing;
        return $this;
    }

    /**
     * Gets title.
     *
     * @return \Aspose\Cells\Cloud\Model\Title|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param \Aspose\Cells\Cloud\Model\Title|null $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
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
}
