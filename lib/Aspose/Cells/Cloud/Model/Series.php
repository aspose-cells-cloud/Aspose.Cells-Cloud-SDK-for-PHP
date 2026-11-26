<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Series.php">
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

class Series extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Series';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area' => '\\Aspose\\Cells\\Cloud\\Model\\Area',
        'bar3_d_shape_type' => 'string',
        'border' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'bubble_scale' => 'int',
        'bubble_sizes' => 'string',
        'count_of_data_values' => 'int',
        'data_labels' => '\\Aspose\\Cells\\Cloud\\Model\\DataLabels',
        'display_name' => 'string',
        'doughnut_hole_size' => 'int',
        'down_bars' => '\\Aspose\\Cells\\Cloud\\Model\\DropBars',
        'drop_lines' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'explosion' => 'int',
        'first_slice_angle' => 'int',
        'gap_width' => 'int',
        'has3_d_effect' => 'bool',
        'has_drop_lines' => 'bool',
        'has_hi_lo_lines' => 'bool',
        'has_leader_lines' => 'bool',
        'has_radar_axis_labels' => 'bool',
        'has_series_lines' => 'bool',
        'has_up_down_bars' => 'bool',
        'hi_lo_lines' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'is_auto_split' => 'bool',
        'is_color_varied' => 'bool',
        'leader_lines' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'legend_entry' => '\\Aspose\\Cells\\Cloud\\Model\\LegendEntry',
        'marker' => '\\Aspose\\Cells\\Cloud\\Model\\Marker',
        'name' => 'string',
        'overlap' => 'int',
        'plot_on_second_axis' => 'bool',
        'points' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'second_plot_size' => 'int',
        'series_lines' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'shadow' => 'bool',
        'show_negative_bubbles' => 'bool',
        'size_represents' => 'string',
        'smooth' => 'bool',
        'split_type' => 'string',
        'split_value' => 'float',
        'trend_lines' => '\\Aspose\\Cells\\Cloud\\Model\\Trendlines',
        'type' => 'string',
        'up_bars' => '\\Aspose\\Cells\\Cloud\\Model\\DropBars',
        'values' => 'string',
        'x_error_bar' => '\\Aspose\\Cells\\Cloud\\Model\\ErrorBar',
        'x_values' => 'string',
        'y_error_bar' => '\\Aspose\\Cells\\Cloud\\Model\\ErrorBar',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area' => null,
        'bar3_d_shape_type' => null,
        'border' => null,
        'bubble_scale' => 'int32',
        'bubble_sizes' => null,
        'count_of_data_values' => 'int32',
        'data_labels' => null,
        'display_name' => null,
        'doughnut_hole_size' => 'int32',
        'down_bars' => null,
        'drop_lines' => null,
        'explosion' => 'int32',
        'first_slice_angle' => 'int32',
        'gap_width' => 'int32',
        'has3_d_effect' => null,
        'has_drop_lines' => null,
        'has_hi_lo_lines' => null,
        'has_leader_lines' => null,
        'has_radar_axis_labels' => null,
        'has_series_lines' => null,
        'has_up_down_bars' => null,
        'hi_lo_lines' => null,
        'is_auto_split' => null,
        'is_color_varied' => null,
        'leader_lines' => null,
        'legend_entry' => null,
        'marker' => null,
        'name' => null,
        'overlap' => 'int32',
        'plot_on_second_axis' => null,
        'points' => null,
        'second_plot_size' => 'int32',
        'series_lines' => null,
        'shadow' => null,
        'show_negative_bubbles' => null,
        'size_represents' => null,
        'smooth' => null,
        'split_type' => null,
        'split_value' => 'float',
        'trend_lines' => null,
        'type' => null,
        'up_bars' => null,
        'values' => null,
        'x_error_bar' => null,
        'x_values' => null,
        'y_error_bar' => null,
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
        'bar3_d_shape_type' => 'Bar3DShapeType',
        'border' => 'Border',
        'bubble_scale' => 'BubbleScale',
        'bubble_sizes' => 'BubbleSizes',
        'count_of_data_values' => 'CountOfDataValues',
        'data_labels' => 'DataLabels',
        'display_name' => 'DisplayName',
        'doughnut_hole_size' => 'DoughnutHoleSize',
        'down_bars' => 'DownBars',
        'drop_lines' => 'DropLines',
        'explosion' => 'Explosion',
        'first_slice_angle' => 'FirstSliceAngle',
        'gap_width' => 'GapWidth',
        'has3_d_effect' => 'Has3DEffect',
        'has_drop_lines' => 'HasDropLines',
        'has_hi_lo_lines' => 'HasHiLoLines',
        'has_leader_lines' => 'HasLeaderLines',
        'has_radar_axis_labels' => 'HasRadarAxisLabels',
        'has_series_lines' => 'HasSeriesLines',
        'has_up_down_bars' => 'HasUpDownBars',
        'hi_lo_lines' => 'HiLoLines',
        'is_auto_split' => 'IsAutoSplit',
        'is_color_varied' => 'IsColorVaried',
        'leader_lines' => 'LeaderLines',
        'legend_entry' => 'LegendEntry',
        'marker' => 'Marker',
        'name' => 'Name',
        'overlap' => 'Overlap',
        'plot_on_second_axis' => 'PlotOnSecondAxis',
        'points' => 'Points',
        'second_plot_size' => 'SecondPlotSize',
        'series_lines' => 'SeriesLines',
        'shadow' => 'Shadow',
        'show_negative_bubbles' => 'ShowNegativeBubbles',
        'size_represents' => 'SizeRepresents',
        'smooth' => 'Smooth',
        'split_type' => 'SplitType',
        'split_value' => 'SplitValue',
        'trend_lines' => 'TrendLines',
        'type' => 'Type',
        'up_bars' => 'UpBars',
        'values' => 'Values',
        'x_error_bar' => 'XErrorBar',
        'x_values' => 'XValues',
        'y_error_bar' => 'YErrorBar',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'area' => 'setArea',
        'bar3_d_shape_type' => 'setBar3DShapeType',
        'border' => 'setBorder',
        'bubble_scale' => 'setBubbleScale',
        'bubble_sizes' => 'setBubbleSizes',
        'count_of_data_values' => 'setCountOfDataValues',
        'data_labels' => 'setDataLabels',
        'display_name' => 'setDisplayName',
        'doughnut_hole_size' => 'setDoughnutHoleSize',
        'down_bars' => 'setDownBars',
        'drop_lines' => 'setDropLines',
        'explosion' => 'setExplosion',
        'first_slice_angle' => 'setFirstSliceAngle',
        'gap_width' => 'setGapWidth',
        'has3_d_effect' => 'setHas3DEffect',
        'has_drop_lines' => 'setHasDropLines',
        'has_hi_lo_lines' => 'setHasHiLoLines',
        'has_leader_lines' => 'setHasLeaderLines',
        'has_radar_axis_labels' => 'setHasRadarAxisLabels',
        'has_series_lines' => 'setHasSeriesLines',
        'has_up_down_bars' => 'setHasUpDownBars',
        'hi_lo_lines' => 'setHiLoLines',
        'is_auto_split' => 'setIsAutoSplit',
        'is_color_varied' => 'setIsColorVaried',
        'leader_lines' => 'setLeaderLines',
        'legend_entry' => 'setLegendEntry',
        'marker' => 'setMarker',
        'name' => 'setName',
        'overlap' => 'setOverlap',
        'plot_on_second_axis' => 'setPlotOnSecondAxis',
        'points' => 'setPoints',
        'second_plot_size' => 'setSecondPlotSize',
        'series_lines' => 'setSeriesLines',
        'shadow' => 'setShadow',
        'show_negative_bubbles' => 'setShowNegativeBubbles',
        'size_represents' => 'setSizeRepresents',
        'smooth' => 'setSmooth',
        'split_type' => 'setSplitType',
        'split_value' => 'setSplitValue',
        'trend_lines' => 'setTrendLines',
        'type' => 'setType',
        'up_bars' => 'setUpBars',
        'values' => 'setValues',
        'x_error_bar' => 'setXErrorBar',
        'x_values' => 'setXValues',
        'y_error_bar' => 'setYErrorBar',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'area' => 'getArea',
        'bar3_d_shape_type' => 'getBar3DShapeType',
        'border' => 'getBorder',
        'bubble_scale' => 'getBubbleScale',
        'bubble_sizes' => 'getBubbleSizes',
        'count_of_data_values' => 'getCountOfDataValues',
        'data_labels' => 'getDataLabels',
        'display_name' => 'getDisplayName',
        'doughnut_hole_size' => 'getDoughnutHoleSize',
        'down_bars' => 'getDownBars',
        'drop_lines' => 'getDropLines',
        'explosion' => 'getExplosion',
        'first_slice_angle' => 'getFirstSliceAngle',
        'gap_width' => 'getGapWidth',
        'has3_d_effect' => 'getHas3DEffect',
        'has_drop_lines' => 'getHasDropLines',
        'has_hi_lo_lines' => 'getHasHiLoLines',
        'has_leader_lines' => 'getHasLeaderLines',
        'has_radar_axis_labels' => 'getHasRadarAxisLabels',
        'has_series_lines' => 'getHasSeriesLines',
        'has_up_down_bars' => 'getHasUpDownBars',
        'hi_lo_lines' => 'getHiLoLines',
        'is_auto_split' => 'getIsAutoSplit',
        'is_color_varied' => 'getIsColorVaried',
        'leader_lines' => 'getLeaderLines',
        'legend_entry' => 'getLegendEntry',
        'marker' => 'getMarker',
        'name' => 'getName',
        'overlap' => 'getOverlap',
        'plot_on_second_axis' => 'getPlotOnSecondAxis',
        'points' => 'getPoints',
        'second_plot_size' => 'getSecondPlotSize',
        'series_lines' => 'getSeriesLines',
        'shadow' => 'getShadow',
        'show_negative_bubbles' => 'getShowNegativeBubbles',
        'size_represents' => 'getSizeRepresents',
        'smooth' => 'getSmooth',
        'split_type' => 'getSplitType',
        'split_value' => 'getSplitValue',
        'trend_lines' => 'getTrendLines',
        'type' => 'getType',
        'up_bars' => 'getUpBars',
        'values' => 'getValues',
        'x_error_bar' => 'getXErrorBar',
        'x_values' => 'getXValues',
        'y_error_bar' => 'getYErrorBar',
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
        $this->container['bar3_d_shape_type'] = isset($data['bar3_d_shape_type']) ? $data['bar3_d_shape_type'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['bubble_scale'] = isset($data['bubble_scale']) ? $data['bubble_scale'] : null;
        $this->container['bubble_sizes'] = isset($data['bubble_sizes']) ? $data['bubble_sizes'] : null;
        $this->container['count_of_data_values'] = isset($data['count_of_data_values']) ? $data['count_of_data_values'] : null;
        $this->container['data_labels'] = isset($data['data_labels']) ? $data['data_labels'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['doughnut_hole_size'] = isset($data['doughnut_hole_size']) ? $data['doughnut_hole_size'] : null;
        $this->container['down_bars'] = isset($data['down_bars']) ? $data['down_bars'] : null;
        $this->container['drop_lines'] = isset($data['drop_lines']) ? $data['drop_lines'] : null;
        $this->container['explosion'] = isset($data['explosion']) ? $data['explosion'] : null;
        $this->container['first_slice_angle'] = isset($data['first_slice_angle']) ? $data['first_slice_angle'] : null;
        $this->container['gap_width'] = isset($data['gap_width']) ? $data['gap_width'] : null;
        $this->container['has3_d_effect'] = isset($data['has3_d_effect']) ? $data['has3_d_effect'] : null;
        $this->container['has_drop_lines'] = isset($data['has_drop_lines']) ? $data['has_drop_lines'] : null;
        $this->container['has_hi_lo_lines'] = isset($data['has_hi_lo_lines']) ? $data['has_hi_lo_lines'] : null;
        $this->container['has_leader_lines'] = isset($data['has_leader_lines']) ? $data['has_leader_lines'] : null;
        $this->container['has_radar_axis_labels'] = isset($data['has_radar_axis_labels']) ? $data['has_radar_axis_labels'] : null;
        $this->container['has_series_lines'] = isset($data['has_series_lines']) ? $data['has_series_lines'] : null;
        $this->container['has_up_down_bars'] = isset($data['has_up_down_bars']) ? $data['has_up_down_bars'] : null;
        $this->container['hi_lo_lines'] = isset($data['hi_lo_lines']) ? $data['hi_lo_lines'] : null;
        $this->container['is_auto_split'] = isset($data['is_auto_split']) ? $data['is_auto_split'] : null;
        $this->container['is_color_varied'] = isset($data['is_color_varied']) ? $data['is_color_varied'] : null;
        $this->container['leader_lines'] = isset($data['leader_lines']) ? $data['leader_lines'] : null;
        $this->container['legend_entry'] = isset($data['legend_entry']) ? $data['legend_entry'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['overlap'] = isset($data['overlap']) ? $data['overlap'] : null;
        $this->container['plot_on_second_axis'] = isset($data['plot_on_second_axis']) ? $data['plot_on_second_axis'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['second_plot_size'] = isset($data['second_plot_size']) ? $data['second_plot_size'] : null;
        $this->container['series_lines'] = isset($data['series_lines']) ? $data['series_lines'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['show_negative_bubbles'] = isset($data['show_negative_bubbles']) ? $data['show_negative_bubbles'] : null;
        $this->container['size_represents'] = isset($data['size_represents']) ? $data['size_represents'] : null;
        $this->container['smooth'] = isset($data['smooth']) ? $data['smooth'] : null;
        $this->container['split_type'] = isset($data['split_type']) ? $data['split_type'] : null;
        $this->container['split_value'] = isset($data['split_value']) ? $data['split_value'] : null;
        $this->container['trend_lines'] = isset($data['trend_lines']) ? $data['trend_lines'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['up_bars'] = isset($data['up_bars']) ? $data['up_bars'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['x_error_bar'] = isset($data['x_error_bar']) ? $data['x_error_bar'] : null;
        $this->container['x_values'] = isset($data['x_values']) ? $data['x_values'] : null;
        $this->container['y_error_bar'] = isset($data['y_error_bar']) ? $data['y_error_bar'] : null;
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
     * Gets bar3_d_shape_type.
     *
     * @return string|null
     */
    public function getBar3DShapeType()
    {
        return $this->container['bar3_d_shape_type'];
    }

    /**
     * Sets bar3_d_shape_type.
     *
     * @param string|null $bar3_d_shape_type
     *
     * @return $this
     */
    public function setBar3DShapeType($bar3_d_shape_type)
    {
        $this->container['bar3_d_shape_type'] = $bar3_d_shape_type;
        return $this;
    }

    /**
     * Gets border.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $border
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;
        return $this;
    }

    /**
     * Gets bubble_scale.
     *
     * @return int|null
     */
    public function getBubbleScale()
    {
        return $this->container['bubble_scale'];
    }

    /**
     * Sets bubble_scale.
     *
     * @param int|null $bubble_scale
     *
     * @return $this
     */
    public function setBubbleScale($bubble_scale)
    {
        $this->container['bubble_scale'] = $bubble_scale;
        return $this;
    }

    /**
     * Gets bubble_sizes.
     *
     * @return string|null
     */
    public function getBubbleSizes()
    {
        return $this->container['bubble_sizes'];
    }

    /**
     * Sets bubble_sizes.
     *
     * @param string|null $bubble_sizes
     *
     * @return $this
     */
    public function setBubbleSizes($bubble_sizes)
    {
        $this->container['bubble_sizes'] = $bubble_sizes;
        return $this;
    }

    /**
     * Gets count_of_data_values.
     *
     * @return int|null
     */
    public function getCountOfDataValues()
    {
        return $this->container['count_of_data_values'];
    }

    /**
     * Sets count_of_data_values.
     *
     * @param int|null $count_of_data_values
     *
     * @return $this
     */
    public function setCountOfDataValues($count_of_data_values)
    {
        $this->container['count_of_data_values'] = $count_of_data_values;
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
     * Gets display_name.
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name.
     *
     * @param string|null $display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;
        return $this;
    }

    /**
     * Gets doughnut_hole_size.
     *
     * @return int|null
     */
    public function getDoughnutHoleSize()
    {
        return $this->container['doughnut_hole_size'];
    }

    /**
     * Sets doughnut_hole_size.
     *
     * @param int|null $doughnut_hole_size
     *
     * @return $this
     */
    public function setDoughnutHoleSize($doughnut_hole_size)
    {
        $this->container['doughnut_hole_size'] = $doughnut_hole_size;
        return $this;
    }

    /**
     * Gets down_bars.
     *
     * @return \Aspose\Cells\Cloud\Model\DropBars|null
     */
    public function getDownBars()
    {
        return $this->container['down_bars'];
    }

    /**
     * Sets down_bars.
     *
     * @param \Aspose\Cells\Cloud\Model\DropBars|null $down_bars
     *
     * @return $this
     */
    public function setDownBars($down_bars)
    {
        $this->container['down_bars'] = $down_bars;
        return $this;
    }

    /**
     * Gets drop_lines.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getDropLines()
    {
        return $this->container['drop_lines'];
    }

    /**
     * Sets drop_lines.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $drop_lines
     *
     * @return $this
     */
    public function setDropLines($drop_lines)
    {
        $this->container['drop_lines'] = $drop_lines;
        return $this;
    }

    /**
     * Gets explosion.
     *
     * @return int|null
     */
    public function getExplosion()
    {
        return $this->container['explosion'];
    }

    /**
     * Sets explosion.
     *
     * @param int|null $explosion
     *
     * @return $this
     */
    public function setExplosion($explosion)
    {
        $this->container['explosion'] = $explosion;
        return $this;
    }

    /**
     * Gets first_slice_angle.
     *
     * @return int|null
     */
    public function getFirstSliceAngle()
    {
        return $this->container['first_slice_angle'];
    }

    /**
     * Sets first_slice_angle.
     *
     * @param int|null $first_slice_angle
     *
     * @return $this
     */
    public function setFirstSliceAngle($first_slice_angle)
    {
        $this->container['first_slice_angle'] = $first_slice_angle;
        return $this;
    }

    /**
     * Gets gap_width.
     *
     * @return int|null
     */
    public function getGapWidth()
    {
        return $this->container['gap_width'];
    }

    /**
     * Sets gap_width.
     *
     * @param int|null $gap_width
     *
     * @return $this
     */
    public function setGapWidth($gap_width)
    {
        $this->container['gap_width'] = $gap_width;
        return $this;
    }

    /**
     * Gets has3_d_effect.
     *
     * @return bool|null
     */
    public function getHas3DEffect()
    {
        return $this->container['has3_d_effect'];
    }

    /**
     * Sets has3_d_effect.
     *
     * @param bool|null $has3_d_effect
     *
     * @return $this
     */
    public function setHas3DEffect($has3_d_effect)
    {
        $this->container['has3_d_effect'] = $has3_d_effect;
        return $this;
    }

    /**
     * Gets has_drop_lines.
     *
     * @return bool|null
     */
    public function getHasDropLines()
    {
        return $this->container['has_drop_lines'];
    }

    /**
     * Sets has_drop_lines.
     *
     * @param bool|null $has_drop_lines
     *
     * @return $this
     */
    public function setHasDropLines($has_drop_lines)
    {
        $this->container['has_drop_lines'] = $has_drop_lines;
        return $this;
    }

    /**
     * Gets has_hi_lo_lines.
     *
     * @return bool|null
     */
    public function getHasHiLoLines()
    {
        return $this->container['has_hi_lo_lines'];
    }

    /**
     * Sets has_hi_lo_lines.
     *
     * @param bool|null $has_hi_lo_lines
     *
     * @return $this
     */
    public function setHasHiLoLines($has_hi_lo_lines)
    {
        $this->container['has_hi_lo_lines'] = $has_hi_lo_lines;
        return $this;
    }

    /**
     * Gets has_leader_lines.
     *
     * @return bool|null
     */
    public function getHasLeaderLines()
    {
        return $this->container['has_leader_lines'];
    }

    /**
     * Sets has_leader_lines.
     *
     * @param bool|null $has_leader_lines
     *
     * @return $this
     */
    public function setHasLeaderLines($has_leader_lines)
    {
        $this->container['has_leader_lines'] = $has_leader_lines;
        return $this;
    }

    /**
     * Gets has_radar_axis_labels.
     *
     * @return bool|null
     */
    public function getHasRadarAxisLabels()
    {
        return $this->container['has_radar_axis_labels'];
    }

    /**
     * Sets has_radar_axis_labels.
     *
     * @param bool|null $has_radar_axis_labels
     *
     * @return $this
     */
    public function setHasRadarAxisLabels($has_radar_axis_labels)
    {
        $this->container['has_radar_axis_labels'] = $has_radar_axis_labels;
        return $this;
    }

    /**
     * Gets has_series_lines.
     *
     * @return bool|null
     */
    public function getHasSeriesLines()
    {
        return $this->container['has_series_lines'];
    }

    /**
     * Sets has_series_lines.
     *
     * @param bool|null $has_series_lines
     *
     * @return $this
     */
    public function setHasSeriesLines($has_series_lines)
    {
        $this->container['has_series_lines'] = $has_series_lines;
        return $this;
    }

    /**
     * Gets has_up_down_bars.
     *
     * @return bool|null
     */
    public function getHasUpDownBars()
    {
        return $this->container['has_up_down_bars'];
    }

    /**
     * Sets has_up_down_bars.
     *
     * @param bool|null $has_up_down_bars
     *
     * @return $this
     */
    public function setHasUpDownBars($has_up_down_bars)
    {
        $this->container['has_up_down_bars'] = $has_up_down_bars;
        return $this;
    }

    /**
     * Gets hi_lo_lines.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getHiLoLines()
    {
        return $this->container['hi_lo_lines'];
    }

    /**
     * Sets hi_lo_lines.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $hi_lo_lines
     *
     * @return $this
     */
    public function setHiLoLines($hi_lo_lines)
    {
        $this->container['hi_lo_lines'] = $hi_lo_lines;
        return $this;
    }

    /**
     * Gets is_auto_split.
     *
     * @return bool|null
     */
    public function getIsAutoSplit()
    {
        return $this->container['is_auto_split'];
    }

    /**
     * Sets is_auto_split.
     *
     * @param bool|null $is_auto_split
     *
     * @return $this
     */
    public function setIsAutoSplit($is_auto_split)
    {
        $this->container['is_auto_split'] = $is_auto_split;
        return $this;
    }

    /**
     * Gets is_color_varied.
     *
     * @return bool|null
     */
    public function getIsColorVaried()
    {
        return $this->container['is_color_varied'];
    }

    /**
     * Sets is_color_varied.
     *
     * @param bool|null $is_color_varied
     *
     * @return $this
     */
    public function setIsColorVaried($is_color_varied)
    {
        $this->container['is_color_varied'] = $is_color_varied;
        return $this;
    }

    /**
     * Gets leader_lines.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getLeaderLines()
    {
        return $this->container['leader_lines'];
    }

    /**
     * Sets leader_lines.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $leader_lines
     *
     * @return $this
     */
    public function setLeaderLines($leader_lines)
    {
        $this->container['leader_lines'] = $leader_lines;
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
     * Gets marker.
     *
     * @return \Aspose\Cells\Cloud\Model\Marker|null
     */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
     * Sets marker.
     *
     * @param \Aspose\Cells\Cloud\Model\Marker|null $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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
     * Gets overlap.
     *
     * @return int|null
     */
    public function getOverlap()
    {
        return $this->container['overlap'];
    }

    /**
     * Sets overlap.
     *
     * @param int|null $overlap
     *
     * @return $this
     */
    public function setOverlap($overlap)
    {
        $this->container['overlap'] = $overlap;
        return $this;
    }

    /**
     * Gets plot_on_second_axis.
     *
     * @return bool|null
     */
    public function getPlotOnSecondAxis()
    {
        return $this->container['plot_on_second_axis'];
    }

    /**
     * Sets plot_on_second_axis.
     *
     * @param bool|null $plot_on_second_axis
     *
     * @return $this
     */
    public function setPlotOnSecondAxis($plot_on_second_axis)
    {
        $this->container['plot_on_second_axis'] = $plot_on_second_axis;
        return $this;
    }

    /**
     * Gets points.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;
        return $this;
    }

    /**
     * Gets second_plot_size.
     *
     * @return int|null
     */
    public function getSecondPlotSize()
    {
        return $this->container['second_plot_size'];
    }

    /**
     * Sets second_plot_size.
     *
     * @param int|null $second_plot_size
     *
     * @return $this
     */
    public function setSecondPlotSize($second_plot_size)
    {
        $this->container['second_plot_size'] = $second_plot_size;
        return $this;
    }

    /**
     * Gets series_lines.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getSeriesLines()
    {
        return $this->container['series_lines'];
    }

    /**
     * Sets series_lines.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $series_lines
     *
     * @return $this
     */
    public function setSeriesLines($series_lines)
    {
        $this->container['series_lines'] = $series_lines;
        return $this;
    }

    /**
     * Gets shadow.
     *
     * @return bool|null
     */
    public function getShadow()
    {
        return $this->container['shadow'];
    }

    /**
     * Sets shadow.
     *
     * @param bool|null $shadow
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;
        return $this;
    }

    /**
     * Gets show_negative_bubbles.
     *
     * @return bool|null
     */
    public function getShowNegativeBubbles()
    {
        return $this->container['show_negative_bubbles'];
    }

    /**
     * Sets show_negative_bubbles.
     *
     * @param bool|null $show_negative_bubbles
     *
     * @return $this
     */
    public function setShowNegativeBubbles($show_negative_bubbles)
    {
        $this->container['show_negative_bubbles'] = $show_negative_bubbles;
        return $this;
    }

    /**
     * Gets size_represents.
     *
     * @return string|null
     */
    public function getSizeRepresents()
    {
        return $this->container['size_represents'];
    }

    /**
     * Sets size_represents.
     *
     * @param string|null $size_represents
     *
     * @return $this
     */
    public function setSizeRepresents($size_represents)
    {
        $this->container['size_represents'] = $size_represents;
        return $this;
    }

    /**
     * Gets smooth.
     *
     * @return bool|null
     */
    public function getSmooth()
    {
        return $this->container['smooth'];
    }

    /**
     * Sets smooth.
     *
     * @param bool|null $smooth
     *
     * @return $this
     */
    public function setSmooth($smooth)
    {
        $this->container['smooth'] = $smooth;
        return $this;
    }

    /**
     * Gets split_type.
     *
     * @return string|null
     */
    public function getSplitType()
    {
        return $this->container['split_type'];
    }

    /**
     * Sets split_type.
     *
     * @param string|null $split_type
     *
     * @return $this
     */
    public function setSplitType($split_type)
    {
        $this->container['split_type'] = $split_type;
        return $this;
    }

    /**
     * Gets split_value.
     *
     * @return float|null
     */
    public function getSplitValue()
    {
        return $this->container['split_value'];
    }

    /**
     * Sets split_value.
     *
     * @param float|null $split_value
     *
     * @return $this
     */
    public function setSplitValue($split_value)
    {
        $this->container['split_value'] = $split_value;
        return $this;
    }

    /**
     * Gets trend_lines.
     *
     * @return \Aspose\Cells\Cloud\Model\Trendlines|null
     */
    public function getTrendLines()
    {
        return $this->container['trend_lines'];
    }

    /**
     * Sets trend_lines.
     *
     * @param \Aspose\Cells\Cloud\Model\Trendlines|null $trend_lines
     *
     * @return $this
     */
    public function setTrendLines($trend_lines)
    {
        $this->container['trend_lines'] = $trend_lines;
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
     * Gets up_bars.
     *
     * @return \Aspose\Cells\Cloud\Model\DropBars|null
     */
    public function getUpBars()
    {
        return $this->container['up_bars'];
    }

    /**
     * Sets up_bars.
     *
     * @param \Aspose\Cells\Cloud\Model\DropBars|null $up_bars
     *
     * @return $this
     */
    public function setUpBars($up_bars)
    {
        $this->container['up_bars'] = $up_bars;
        return $this;
    }

    /**
     * Gets values.
     *
     * @return string|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values.
     *
     * @param string|null $values
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
     * Gets x_error_bar.
     *
     * @return \Aspose\Cells\Cloud\Model\ErrorBar|null
     */
    public function getXErrorBar()
    {
        return $this->container['x_error_bar'];
    }

    /**
     * Sets x_error_bar.
     *
     * @param \Aspose\Cells\Cloud\Model\ErrorBar|null $x_error_bar
     *
     * @return $this
     */
    public function setXErrorBar($x_error_bar)
    {
        $this->container['x_error_bar'] = $x_error_bar;
        return $this;
    }

    /**
     * Gets x_values.
     *
     * @return string|null
     */
    public function getXValues()
    {
        return $this->container['x_values'];
    }

    /**
     * Sets x_values.
     *
     * @param string|null $x_values
     *
     * @return $this
     */
    public function setXValues($x_values)
    {
        $this->container['x_values'] = $x_values;
        return $this;
    }

    /**
     * Gets y_error_bar.
     *
     * @return \Aspose\Cells\Cloud\Model\ErrorBar|null
     */
    public function getYErrorBar()
    {
        return $this->container['y_error_bar'];
    }

    /**
     * Sets y_error_bar.
     *
     * @param \Aspose\Cells\Cloud\Model\ErrorBar|null $y_error_bar
     *
     * @return $this
     */
    public function setYErrorBar($y_error_bar)
    {
        $this->container['y_error_bar'] = $y_error_bar;
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
