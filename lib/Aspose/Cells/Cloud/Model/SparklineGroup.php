<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SparklineGroup.php">
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

class SparklineGroup
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SparklineGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'display_hidden' => 'bool',
        'first_point_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'high_point_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'horizontal_axis_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'horizontal_axis_date_range' => 'string',
        'last_point_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'line_weight' => 'float',
        'low_point_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'markers_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'negative_points_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'plot_empty_cells_type' => 'string',
        'plot_right_to_left' => 'bool',
        'preset_style' => 'string',
        'series_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'show_first_point' => 'bool',
        'show_high_point' => 'bool',
        'show_horizontal_axis' => 'bool',
        'show_last_point' => 'bool',
        'show_low_point' => 'bool',
        'show_markers' => 'bool',
        'show_negative_points' => 'bool',
        'sparkline_collection' => '\\Aspose\\Cells\\Cloud\\Model\\Sparkline[]',
        'type' => 'string',
        'vertical_axis_max_value' => 'float',
        'vertical_axis_max_value_type' => 'string',
        'vertical_axis_min_value' => 'float',
        'vertical_axis_min_value_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'display_hidden' => null,
        'first_point_color' => null,
        'high_point_color' => null,
        'horizontal_axis_color' => null,
        'horizontal_axis_date_range' => null,
        'last_point_color' => null,
        'line_weight' => 'float',
        'low_point_color' => null,
        'markers_color' => null,
        'negative_points_color' => null,
        'plot_empty_cells_type' => null,
        'plot_right_to_left' => null,
        'preset_style' => null,
        'series_color' => null,
        'show_first_point' => null,
        'show_high_point' => null,
        'show_horizontal_axis' => null,
        'show_last_point' => null,
        'show_low_point' => null,
        'show_markers' => null,
        'show_negative_points' => null,
        'sparkline_collection' => null,
        'type' => null,
        'vertical_axis_max_value' => 'float',
        'vertical_axis_max_value_type' => null,
        'vertical_axis_min_value' => 'float',
        'vertical_axis_min_value_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'display_hidden' => 'DisplayHidden',
        'first_point_color' => 'FirstPointColor',
        'high_point_color' => 'HighPointColor',
        'horizontal_axis_color' => 'HorizontalAxisColor',
        'horizontal_axis_date_range' => 'HorizontalAxisDateRange',
        'last_point_color' => 'LastPointColor',
        'line_weight' => 'LineWeight',
        'low_point_color' => 'LowPointColor',
        'markers_color' => 'MarkersColor',
        'negative_points_color' => 'NegativePointsColor',
        'plot_empty_cells_type' => 'PlotEmptyCellsType',
        'plot_right_to_left' => 'PlotRightToLeft',
        'preset_style' => 'PresetStyle',
        'series_color' => 'SeriesColor',
        'show_first_point' => 'ShowFirstPoint',
        'show_high_point' => 'ShowHighPoint',
        'show_horizontal_axis' => 'ShowHorizontalAxis',
        'show_last_point' => 'ShowLastPoint',
        'show_low_point' => 'ShowLowPoint',
        'show_markers' => 'ShowMarkers',
        'show_negative_points' => 'ShowNegativePoints',
        'sparkline_collection' => 'SparklineCollection',
        'type' => 'Type',
        'vertical_axis_max_value' => 'VerticalAxisMaxValue',
        'vertical_axis_max_value_type' => 'VerticalAxisMaxValueType',
        'vertical_axis_min_value' => 'VerticalAxisMinValue',
        'vertical_axis_min_value_type' => 'VerticalAxisMinValueType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'display_hidden' => 'setDisplayHidden',
        'first_point_color' => 'setFirstPointColor',
        'high_point_color' => 'setHighPointColor',
        'horizontal_axis_color' => 'setHorizontalAxisColor',
        'horizontal_axis_date_range' => 'setHorizontalAxisDateRange',
        'last_point_color' => 'setLastPointColor',
        'line_weight' => 'setLineWeight',
        'low_point_color' => 'setLowPointColor',
        'markers_color' => 'setMarkersColor',
        'negative_points_color' => 'setNegativePointsColor',
        'plot_empty_cells_type' => 'setPlotEmptyCellsType',
        'plot_right_to_left' => 'setPlotRightToLeft',
        'preset_style' => 'setPresetStyle',
        'series_color' => 'setSeriesColor',
        'show_first_point' => 'setShowFirstPoint',
        'show_high_point' => 'setShowHighPoint',
        'show_horizontal_axis' => 'setShowHorizontalAxis',
        'show_last_point' => 'setShowLastPoint',
        'show_low_point' => 'setShowLowPoint',
        'show_markers' => 'setShowMarkers',
        'show_negative_points' => 'setShowNegativePoints',
        'sparkline_collection' => 'setSparklineCollection',
        'type' => 'setType',
        'vertical_axis_max_value' => 'setVerticalAxisMaxValue',
        'vertical_axis_max_value_type' => 'setVerticalAxisMaxValueType',
        'vertical_axis_min_value' => 'setVerticalAxisMinValue',
        'vertical_axis_min_value_type' => 'setVerticalAxisMinValueType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'display_hidden' => 'getDisplayHidden',
        'first_point_color' => 'getFirstPointColor',
        'high_point_color' => 'getHighPointColor',
        'horizontal_axis_color' => 'getHorizontalAxisColor',
        'horizontal_axis_date_range' => 'getHorizontalAxisDateRange',
        'last_point_color' => 'getLastPointColor',
        'line_weight' => 'getLineWeight',
        'low_point_color' => 'getLowPointColor',
        'markers_color' => 'getMarkersColor',
        'negative_points_color' => 'getNegativePointsColor',
        'plot_empty_cells_type' => 'getPlotEmptyCellsType',
        'plot_right_to_left' => 'getPlotRightToLeft',
        'preset_style' => 'getPresetStyle',
        'series_color' => 'getSeriesColor',
        'show_first_point' => 'getShowFirstPoint',
        'show_high_point' => 'getShowHighPoint',
        'show_horizontal_axis' => 'getShowHorizontalAxis',
        'show_last_point' => 'getShowLastPoint',
        'show_low_point' => 'getShowLowPoint',
        'show_markers' => 'getShowMarkers',
        'show_negative_points' => 'getShowNegativePoints',
        'sparkline_collection' => 'getSparklineCollection',
        'type' => 'getType',
        'vertical_axis_max_value' => 'getVerticalAxisMaxValue',
        'vertical_axis_max_value_type' => 'getVerticalAxisMaxValueType',
        'vertical_axis_min_value' => 'getVerticalAxisMinValue',
        'vertical_axis_min_value_type' => 'getVerticalAxisMinValueType',
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
        $this->container['display_hidden'] = isset($data['display_hidden']) ? $data['display_hidden'] : null;
        $this->container['first_point_color'] = isset($data['first_point_color']) ? $data['first_point_color'] : null;
        $this->container['high_point_color'] = isset($data['high_point_color']) ? $data['high_point_color'] : null;
        $this->container['horizontal_axis_color'] = isset($data['horizontal_axis_color']) ? $data['horizontal_axis_color'] : null;
        $this->container['horizontal_axis_date_range'] = isset($data['horizontal_axis_date_range']) ? $data['horizontal_axis_date_range'] : null;
        $this->container['last_point_color'] = isset($data['last_point_color']) ? $data['last_point_color'] : null;
        $this->container['line_weight'] = isset($data['line_weight']) ? $data['line_weight'] : null;
        $this->container['low_point_color'] = isset($data['low_point_color']) ? $data['low_point_color'] : null;
        $this->container['markers_color'] = isset($data['markers_color']) ? $data['markers_color'] : null;
        $this->container['negative_points_color'] = isset($data['negative_points_color']) ? $data['negative_points_color'] : null;
        $this->container['plot_empty_cells_type'] = isset($data['plot_empty_cells_type']) ? $data['plot_empty_cells_type'] : null;
        $this->container['plot_right_to_left'] = isset($data['plot_right_to_left']) ? $data['plot_right_to_left'] : null;
        $this->container['preset_style'] = isset($data['preset_style']) ? $data['preset_style'] : null;
        $this->container['series_color'] = isset($data['series_color']) ? $data['series_color'] : null;
        $this->container['show_first_point'] = isset($data['show_first_point']) ? $data['show_first_point'] : null;
        $this->container['show_high_point'] = isset($data['show_high_point']) ? $data['show_high_point'] : null;
        $this->container['show_horizontal_axis'] = isset($data['show_horizontal_axis']) ? $data['show_horizontal_axis'] : null;
        $this->container['show_last_point'] = isset($data['show_last_point']) ? $data['show_last_point'] : null;
        $this->container['show_low_point'] = isset($data['show_low_point']) ? $data['show_low_point'] : null;
        $this->container['show_markers'] = isset($data['show_markers']) ? $data['show_markers'] : null;
        $this->container['show_negative_points'] = isset($data['show_negative_points']) ? $data['show_negative_points'] : null;
        $this->container['sparkline_collection'] = isset($data['sparkline_collection']) ? $data['sparkline_collection'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vertical_axis_max_value'] = isset($data['vertical_axis_max_value']) ? $data['vertical_axis_max_value'] : null;
        $this->container['vertical_axis_max_value_type'] = isset($data['vertical_axis_max_value_type']) ? $data['vertical_axis_max_value_type'] : null;
        $this->container['vertical_axis_min_value'] = isset($data['vertical_axis_min_value']) ? $data['vertical_axis_min_value'] : null;
        $this->container['vertical_axis_min_value_type'] = isset($data['vertical_axis_min_value_type']) ? $data['vertical_axis_min_value_type'] : null;
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
     * Gets display_hidden.
     *
     * @return bool|null
     */
    public function getDisplayHidden()
    {
        return $this->container['display_hidden'];
    }

    /**
     * Sets display_hidden.
     *
     * @param bool|null $display_hidden
     *
     * @return $this
     */
    public function setDisplayHidden($display_hidden)
    {
        $this->container['display_hidden'] = $display_hidden;
        return $this;
    }

    /**
     * Gets first_point_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getFirstPointColor()
    {
        return $this->container['first_point_color'];
    }

    /**
     * Sets first_point_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $first_point_color
     *
     * @return $this
     */
    public function setFirstPointColor($first_point_color)
    {
        $this->container['first_point_color'] = $first_point_color;
        return $this;
    }

    /**
     * Gets high_point_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getHighPointColor()
    {
        return $this->container['high_point_color'];
    }

    /**
     * Sets high_point_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $high_point_color
     *
     * @return $this
     */
    public function setHighPointColor($high_point_color)
    {
        $this->container['high_point_color'] = $high_point_color;
        return $this;
    }

    /**
     * Gets horizontal_axis_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getHorizontalAxisColor()
    {
        return $this->container['horizontal_axis_color'];
    }

    /**
     * Sets horizontal_axis_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $horizontal_axis_color
     *
     * @return $this
     */
    public function setHorizontalAxisColor($horizontal_axis_color)
    {
        $this->container['horizontal_axis_color'] = $horizontal_axis_color;
        return $this;
    }

    /**
     * Gets horizontal_axis_date_range.
     *
     * @return string|null
     */
    public function getHorizontalAxisDateRange()
    {
        return $this->container['horizontal_axis_date_range'];
    }

    /**
     * Sets horizontal_axis_date_range.
     *
     * @param string|null $horizontal_axis_date_range
     *
     * @return $this
     */
    public function setHorizontalAxisDateRange($horizontal_axis_date_range)
    {
        $this->container['horizontal_axis_date_range'] = $horizontal_axis_date_range;
        return $this;
    }

    /**
     * Gets last_point_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getLastPointColor()
    {
        return $this->container['last_point_color'];
    }

    /**
     * Sets last_point_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $last_point_color
     *
     * @return $this
     */
    public function setLastPointColor($last_point_color)
    {
        $this->container['last_point_color'] = $last_point_color;
        return $this;
    }

    /**
     * Gets line_weight.
     *
     * @return float|null
     */
    public function getLineWeight()
    {
        return $this->container['line_weight'];
    }

    /**
     * Sets line_weight.
     *
     * @param float|null $line_weight
     *
     * @return $this
     */
    public function setLineWeight($line_weight)
    {
        $this->container['line_weight'] = $line_weight;
        return $this;
    }

    /**
     * Gets low_point_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getLowPointColor()
    {
        return $this->container['low_point_color'];
    }

    /**
     * Sets low_point_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $low_point_color
     *
     * @return $this
     */
    public function setLowPointColor($low_point_color)
    {
        $this->container['low_point_color'] = $low_point_color;
        return $this;
    }

    /**
     * Gets markers_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getMarkersColor()
    {
        return $this->container['markers_color'];
    }

    /**
     * Sets markers_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $markers_color
     *
     * @return $this
     */
    public function setMarkersColor($markers_color)
    {
        $this->container['markers_color'] = $markers_color;
        return $this;
    }

    /**
     * Gets negative_points_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getNegativePointsColor()
    {
        return $this->container['negative_points_color'];
    }

    /**
     * Sets negative_points_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $negative_points_color
     *
     * @return $this
     */
    public function setNegativePointsColor($negative_points_color)
    {
        $this->container['negative_points_color'] = $negative_points_color;
        return $this;
    }

    /**
     * Gets plot_empty_cells_type.
     *
     * @return string|null
     */
    public function getPlotEmptyCellsType()
    {
        return $this->container['plot_empty_cells_type'];
    }

    /**
     * Sets plot_empty_cells_type.
     *
     * @param string|null $plot_empty_cells_type
     *
     * @return $this
     */
    public function setPlotEmptyCellsType($plot_empty_cells_type)
    {
        $this->container['plot_empty_cells_type'] = $plot_empty_cells_type;
        return $this;
    }

    /**
     * Gets plot_right_to_left.
     *
     * @return bool|null
     */
    public function getPlotRightToLeft()
    {
        return $this->container['plot_right_to_left'];
    }

    /**
     * Sets plot_right_to_left.
     *
     * @param bool|null $plot_right_to_left
     *
     * @return $this
     */
    public function setPlotRightToLeft($plot_right_to_left)
    {
        $this->container['plot_right_to_left'] = $plot_right_to_left;
        return $this;
    }

    /**
     * Gets preset_style.
     *
     * @return string|null
     */
    public function getPresetStyle()
    {
        return $this->container['preset_style'];
    }

    /**
     * Sets preset_style.
     *
     * @param string|null $preset_style
     *
     * @return $this
     */
    public function setPresetStyle($preset_style)
    {
        $this->container['preset_style'] = $preset_style;
        return $this;
    }

    /**
     * Gets series_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getSeriesColor()
    {
        return $this->container['series_color'];
    }

    /**
     * Sets series_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $series_color
     *
     * @return $this
     */
    public function setSeriesColor($series_color)
    {
        $this->container['series_color'] = $series_color;
        return $this;
    }

    /**
     * Gets show_first_point.
     *
     * @return bool|null
     */
    public function getShowFirstPoint()
    {
        return $this->container['show_first_point'];
    }

    /**
     * Sets show_first_point.
     *
     * @param bool|null $show_first_point
     *
     * @return $this
     */
    public function setShowFirstPoint($show_first_point)
    {
        $this->container['show_first_point'] = $show_first_point;
        return $this;
    }

    /**
     * Gets show_high_point.
     *
     * @return bool|null
     */
    public function getShowHighPoint()
    {
        return $this->container['show_high_point'];
    }

    /**
     * Sets show_high_point.
     *
     * @param bool|null $show_high_point
     *
     * @return $this
     */
    public function setShowHighPoint($show_high_point)
    {
        $this->container['show_high_point'] = $show_high_point;
        return $this;
    }

    /**
     * Gets show_horizontal_axis.
     *
     * @return bool|null
     */
    public function getShowHorizontalAxis()
    {
        return $this->container['show_horizontal_axis'];
    }

    /**
     * Sets show_horizontal_axis.
     *
     * @param bool|null $show_horizontal_axis
     *
     * @return $this
     */
    public function setShowHorizontalAxis($show_horizontal_axis)
    {
        $this->container['show_horizontal_axis'] = $show_horizontal_axis;
        return $this;
    }

    /**
     * Gets show_last_point.
     *
     * @return bool|null
     */
    public function getShowLastPoint()
    {
        return $this->container['show_last_point'];
    }

    /**
     * Sets show_last_point.
     *
     * @param bool|null $show_last_point
     *
     * @return $this
     */
    public function setShowLastPoint($show_last_point)
    {
        $this->container['show_last_point'] = $show_last_point;
        return $this;
    }

    /**
     * Gets show_low_point.
     *
     * @return bool|null
     */
    public function getShowLowPoint()
    {
        return $this->container['show_low_point'];
    }

    /**
     * Sets show_low_point.
     *
     * @param bool|null $show_low_point
     *
     * @return $this
     */
    public function setShowLowPoint($show_low_point)
    {
        $this->container['show_low_point'] = $show_low_point;
        return $this;
    }

    /**
     * Gets show_markers.
     *
     * @return bool|null
     */
    public function getShowMarkers()
    {
        return $this->container['show_markers'];
    }

    /**
     * Sets show_markers.
     *
     * @param bool|null $show_markers
     *
     * @return $this
     */
    public function setShowMarkers($show_markers)
    {
        $this->container['show_markers'] = $show_markers;
        return $this;
    }

    /**
     * Gets show_negative_points.
     *
     * @return bool|null
     */
    public function getShowNegativePoints()
    {
        return $this->container['show_negative_points'];
    }

    /**
     * Sets show_negative_points.
     *
     * @param bool|null $show_negative_points
     *
     * @return $this
     */
    public function setShowNegativePoints($show_negative_points)
    {
        $this->container['show_negative_points'] = $show_negative_points;
        return $this;
    }

    /**
     * Gets sparkline_collection.
     *
     * @return \Aspose\Cells\Cloud\Model\Sparkline[]|null
     */
    public function getSparklineCollection()
    {
        return $this->container['sparkline_collection'];
    }

    /**
     * Sets sparkline_collection.
     *
     * @param \Aspose\Cells\Cloud\Model\Sparkline[]|null $sparkline_collection
     *
     * @return $this
     */
    public function setSparklineCollection($sparkline_collection)
    {
        $this->container['sparkline_collection'] = $sparkline_collection;
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
     * Gets vertical_axis_max_value.
     *
     * @return float|null
     */
    public function getVerticalAxisMaxValue()
    {
        return $this->container['vertical_axis_max_value'];
    }

    /**
     * Sets vertical_axis_max_value.
     *
     * @param float|null $vertical_axis_max_value
     *
     * @return $this
     */
    public function setVerticalAxisMaxValue($vertical_axis_max_value)
    {
        $this->container['vertical_axis_max_value'] = $vertical_axis_max_value;
        return $this;
    }

    /**
     * Gets vertical_axis_max_value_type.
     *
     * @return string|null
     */
    public function getVerticalAxisMaxValueType()
    {
        return $this->container['vertical_axis_max_value_type'];
    }

    /**
     * Sets vertical_axis_max_value_type.
     *
     * @param string|null $vertical_axis_max_value_type
     *
     * @return $this
     */
    public function setVerticalAxisMaxValueType($vertical_axis_max_value_type)
    {
        $this->container['vertical_axis_max_value_type'] = $vertical_axis_max_value_type;
        return $this;
    }

    /**
     * Gets vertical_axis_min_value.
     *
     * @return float|null
     */
    public function getVerticalAxisMinValue()
    {
        return $this->container['vertical_axis_min_value'];
    }

    /**
     * Sets vertical_axis_min_value.
     *
     * @param float|null $vertical_axis_min_value
     *
     * @return $this
     */
    public function setVerticalAxisMinValue($vertical_axis_min_value)
    {
        $this->container['vertical_axis_min_value'] = $vertical_axis_min_value;
        return $this;
    }

    /**
     * Gets vertical_axis_min_value_type.
     *
     * @return string|null
     */
    public function getVerticalAxisMinValueType()
    {
        return $this->container['vertical_axis_min_value_type'];
    }

    /**
     * Sets vertical_axis_min_value_type.
     *
     * @param string|null $vertical_axis_min_value_type
     *
     * @return $this
     */
    public function setVerticalAxisMinValueType($vertical_axis_min_value_type)
    {
        $this->container['vertical_axis_min_value_type'] = $vertical_axis_min_value_type;
        return $this;
    }
}
