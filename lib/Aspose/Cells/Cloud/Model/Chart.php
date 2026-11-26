<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Chart.php">
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

class Chart extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_scaling' => 'bool',
        'back_wall' => '\\Aspose\\Cells\\Cloud\\Model\\Walls',
        'category_axis' => '\\Aspose\\Cells\\Cloud\\Model\\Axis',
        'chart_area' => '\\Aspose\\Cells\\Cloud\\Model\\ChartArea',
        'chart_data_table' => '\\Aspose\\Cells\\Cloud\\Model\\ChartDataTable',
        'chart_object' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'depth_percent' => 'int',
        'elevation' => 'int',
        'first_slice_angle' => 'int',
        'floor' => '\\Aspose\\Cells\\Cloud\\Model\\Floor',
        'gap_depth' => 'int',
        'gap_width' => 'int',
        'height_percent' => 'int',
        'hide_pivot_field_buttons' => 'bool',
        'is3_d' => 'bool',
        'is_rectangular_cornered' => 'bool',
        'legend' => '\\Aspose\\Cells\\Cloud\\Model\\Legend',
        'name' => 'string',
        'n_series' => '\\Aspose\\Cells\\Cloud\\Model\\SeriesItems',
        'page_setup' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'perspective' => 'int',
        'pivot_source' => 'string',
        'placement' => 'string',
        'plot_area' => '\\Aspose\\Cells\\Cloud\\Model\\PlotArea',
        'plot_empty_cells_type' => 'string',
        'plot_visible_cells' => 'bool',
        'print_size' => 'string',
        'right_angle_axes' => 'bool',
        'rotation_angle' => 'int',
        'second_category_axis' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'second_value_axis' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'series_axis' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'shapes' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'show_data_table' => 'bool',
        'show_legend' => 'bool',
        'side_wall' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'size_with_window' => 'bool',
        'style' => 'int',
        'title' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'type' => 'string',
        'value_axis' => '\\Aspose\\Cells\\Cloud\\Model\\Axis',
        'walls' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'walls_and_gridlines2_d' => 'bool',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_scaling' => null,
        'back_wall' => null,
        'category_axis' => null,
        'chart_area' => null,
        'chart_data_table' => null,
        'chart_object' => null,
        'depth_percent' => 'int32',
        'elevation' => 'int32',
        'first_slice_angle' => 'int32',
        'floor' => null,
        'gap_depth' => 'int32',
        'gap_width' => 'int32',
        'height_percent' => 'int32',
        'hide_pivot_field_buttons' => null,
        'is3_d' => null,
        'is_rectangular_cornered' => null,
        'legend' => null,
        'name' => null,
        'n_series' => null,
        'page_setup' => null,
        'perspective' => 'int32',
        'pivot_source' => null,
        'placement' => null,
        'plot_area' => null,
        'plot_empty_cells_type' => null,
        'plot_visible_cells' => null,
        'print_size' => null,
        'right_angle_axes' => null,
        'rotation_angle' => 'int32',
        'second_category_axis' => null,
        'second_value_axis' => null,
        'series_axis' => null,
        'shapes' => null,
        'show_data_table' => null,
        'show_legend' => null,
        'side_wall' => null,
        'size_with_window' => null,
        'style' => 'int32',
        'title' => null,
        'type' => null,
        'value_axis' => null,
        'walls' => null,
        'walls_and_gridlines2_d' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'auto_scaling' => 'AutoScaling',
        'back_wall' => 'BackWall',
        'category_axis' => 'CategoryAxis',
        'chart_area' => 'ChartArea',
        'chart_data_table' => 'ChartDataTable',
        'chart_object' => 'ChartObject',
        'depth_percent' => 'DepthPercent',
        'elevation' => 'Elevation',
        'first_slice_angle' => 'FirstSliceAngle',
        'floor' => 'Floor',
        'gap_depth' => 'GapDepth',
        'gap_width' => 'GapWidth',
        'height_percent' => 'HeightPercent',
        'hide_pivot_field_buttons' => 'HidePivotFieldButtons',
        'is3_d' => 'Is3D',
        'is_rectangular_cornered' => 'IsRectangularCornered',
        'legend' => 'Legend',
        'name' => 'Name',
        'n_series' => 'NSeries',
        'page_setup' => 'PageSetup',
        'perspective' => 'Perspective',
        'pivot_source' => 'PivotSource',
        'placement' => 'Placement',
        'plot_area' => 'PlotArea',
        'plot_empty_cells_type' => 'PlotEmptyCellsType',
        'plot_visible_cells' => 'PlotVisibleCells',
        'print_size' => 'PrintSize',
        'right_angle_axes' => 'RightAngleAxes',
        'rotation_angle' => 'RotationAngle',
        'second_category_axis' => 'SecondCategoryAxis',
        'second_value_axis' => 'SecondValueAxis',
        'series_axis' => 'SeriesAxis',
        'shapes' => 'Shapes',
        'show_data_table' => 'ShowDataTable',
        'show_legend' => 'ShowLegend',
        'side_wall' => 'SideWall',
        'size_with_window' => 'SizeWithWindow',
        'style' => 'Style',
        'title' => 'Title',
        'type' => 'Type',
        'value_axis' => 'ValueAxis',
        'walls' => 'Walls',
        'walls_and_gridlines2_d' => 'WallsAndGridlines2D',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'auto_scaling' => 'setAutoScaling',
        'back_wall' => 'setBackWall',
        'category_axis' => 'setCategoryAxis',
        'chart_area' => 'setChartArea',
        'chart_data_table' => 'setChartDataTable',
        'chart_object' => 'setChartObject',
        'depth_percent' => 'setDepthPercent',
        'elevation' => 'setElevation',
        'first_slice_angle' => 'setFirstSliceAngle',
        'floor' => 'setFloor',
        'gap_depth' => 'setGapDepth',
        'gap_width' => 'setGapWidth',
        'height_percent' => 'setHeightPercent',
        'hide_pivot_field_buttons' => 'setHidePivotFieldButtons',
        'is3_d' => 'setIs3D',
        'is_rectangular_cornered' => 'setIsRectangularCornered',
        'legend' => 'setLegend',
        'name' => 'setName',
        'n_series' => 'setNSeries',
        'page_setup' => 'setPageSetup',
        'perspective' => 'setPerspective',
        'pivot_source' => 'setPivotSource',
        'placement' => 'setPlacement',
        'plot_area' => 'setPlotArea',
        'plot_empty_cells_type' => 'setPlotEmptyCellsType',
        'plot_visible_cells' => 'setPlotVisibleCells',
        'print_size' => 'setPrintSize',
        'right_angle_axes' => 'setRightAngleAxes',
        'rotation_angle' => 'setRotationAngle',
        'second_category_axis' => 'setSecondCategoryAxis',
        'second_value_axis' => 'setSecondValueAxis',
        'series_axis' => 'setSeriesAxis',
        'shapes' => 'setShapes',
        'show_data_table' => 'setShowDataTable',
        'show_legend' => 'setShowLegend',
        'side_wall' => 'setSideWall',
        'size_with_window' => 'setSizeWithWindow',
        'style' => 'setStyle',
        'title' => 'setTitle',
        'type' => 'setType',
        'value_axis' => 'setValueAxis',
        'walls' => 'setWalls',
        'walls_and_gridlines2_d' => 'setWallsAndGridlines2D',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'auto_scaling' => 'getAutoScaling',
        'back_wall' => 'getBackWall',
        'category_axis' => 'getCategoryAxis',
        'chart_area' => 'getChartArea',
        'chart_data_table' => 'getChartDataTable',
        'chart_object' => 'getChartObject',
        'depth_percent' => 'getDepthPercent',
        'elevation' => 'getElevation',
        'first_slice_angle' => 'getFirstSliceAngle',
        'floor' => 'getFloor',
        'gap_depth' => 'getGapDepth',
        'gap_width' => 'getGapWidth',
        'height_percent' => 'getHeightPercent',
        'hide_pivot_field_buttons' => 'getHidePivotFieldButtons',
        'is3_d' => 'getIs3D',
        'is_rectangular_cornered' => 'getIsRectangularCornered',
        'legend' => 'getLegend',
        'name' => 'getName',
        'n_series' => 'getNSeries',
        'page_setup' => 'getPageSetup',
        'perspective' => 'getPerspective',
        'pivot_source' => 'getPivotSource',
        'placement' => 'getPlacement',
        'plot_area' => 'getPlotArea',
        'plot_empty_cells_type' => 'getPlotEmptyCellsType',
        'plot_visible_cells' => 'getPlotVisibleCells',
        'print_size' => 'getPrintSize',
        'right_angle_axes' => 'getRightAngleAxes',
        'rotation_angle' => 'getRotationAngle',
        'second_category_axis' => 'getSecondCategoryAxis',
        'second_value_axis' => 'getSecondValueAxis',
        'series_axis' => 'getSeriesAxis',
        'shapes' => 'getShapes',
        'show_data_table' => 'getShowDataTable',
        'show_legend' => 'getShowLegend',
        'side_wall' => 'getSideWall',
        'size_with_window' => 'getSizeWithWindow',
        'style' => 'getStyle',
        'title' => 'getTitle',
        'type' => 'getType',
        'value_axis' => 'getValueAxis',
        'walls' => 'getWalls',
        'walls_and_gridlines2_d' => 'getWallsAndGridlines2D',
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
        $this->container['auto_scaling'] = isset($data['auto_scaling']) ? $data['auto_scaling'] : null;
        $this->container['back_wall'] = isset($data['back_wall']) ? $data['back_wall'] : null;
        $this->container['category_axis'] = isset($data['category_axis']) ? $data['category_axis'] : null;
        $this->container['chart_area'] = isset($data['chart_area']) ? $data['chart_area'] : null;
        $this->container['chart_data_table'] = isset($data['chart_data_table']) ? $data['chart_data_table'] : null;
        $this->container['chart_object'] = isset($data['chart_object']) ? $data['chart_object'] : null;
        $this->container['depth_percent'] = isset($data['depth_percent']) ? $data['depth_percent'] : null;
        $this->container['elevation'] = isset($data['elevation']) ? $data['elevation'] : null;
        $this->container['first_slice_angle'] = isset($data['first_slice_angle']) ? $data['first_slice_angle'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['gap_depth'] = isset($data['gap_depth']) ? $data['gap_depth'] : null;
        $this->container['gap_width'] = isset($data['gap_width']) ? $data['gap_width'] : null;
        $this->container['height_percent'] = isset($data['height_percent']) ? $data['height_percent'] : null;
        $this->container['hide_pivot_field_buttons'] = isset($data['hide_pivot_field_buttons']) ? $data['hide_pivot_field_buttons'] : null;
        $this->container['is3_d'] = isset($data['is3_d']) ? $data['is3_d'] : null;
        $this->container['is_rectangular_cornered'] = isset($data['is_rectangular_cornered']) ? $data['is_rectangular_cornered'] : null;
        $this->container['legend'] = isset($data['legend']) ? $data['legend'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['n_series'] = isset($data['n_series']) ? $data['n_series'] : null;
        $this->container['page_setup'] = isset($data['page_setup']) ? $data['page_setup'] : null;
        $this->container['perspective'] = isset($data['perspective']) ? $data['perspective'] : null;
        $this->container['pivot_source'] = isset($data['pivot_source']) ? $data['pivot_source'] : null;
        $this->container['placement'] = isset($data['placement']) ? $data['placement'] : null;
        $this->container['plot_area'] = isset($data['plot_area']) ? $data['plot_area'] : null;
        $this->container['plot_empty_cells_type'] = isset($data['plot_empty_cells_type']) ? $data['plot_empty_cells_type'] : null;
        $this->container['plot_visible_cells'] = isset($data['plot_visible_cells']) ? $data['plot_visible_cells'] : null;
        $this->container['print_size'] = isset($data['print_size']) ? $data['print_size'] : null;
        $this->container['right_angle_axes'] = isset($data['right_angle_axes']) ? $data['right_angle_axes'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['second_category_axis'] = isset($data['second_category_axis']) ? $data['second_category_axis'] : null;
        $this->container['second_value_axis'] = isset($data['second_value_axis']) ? $data['second_value_axis'] : null;
        $this->container['series_axis'] = isset($data['series_axis']) ? $data['series_axis'] : null;
        $this->container['shapes'] = isset($data['shapes']) ? $data['shapes'] : null;
        $this->container['show_data_table'] = isset($data['show_data_table']) ? $data['show_data_table'] : null;
        $this->container['show_legend'] = isset($data['show_legend']) ? $data['show_legend'] : null;
        $this->container['side_wall'] = isset($data['side_wall']) ? $data['side_wall'] : null;
        $this->container['size_with_window'] = isset($data['size_with_window']) ? $data['size_with_window'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value_axis'] = isset($data['value_axis']) ? $data['value_axis'] : null;
        $this->container['walls'] = isset($data['walls']) ? $data['walls'] : null;
        $this->container['walls_and_gridlines2_d'] = isset($data['walls_and_gridlines2_d']) ? $data['walls_and_gridlines2_d'] : null;
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
     * Gets auto_scaling.
     *
     * @return bool|null
     */
    public function getAutoScaling()
    {
        return $this->container['auto_scaling'];
    }

    /**
     * Sets auto_scaling.
     *
     * @param bool|null $auto_scaling
     *
     * @return $this
     */
    public function setAutoScaling($auto_scaling)
    {
        $this->container['auto_scaling'] = $auto_scaling;
        return $this;
    }

    /**
     * Gets back_wall.
     *
     * @return \Aspose\Cells\Cloud\Model\Walls|null
     */
    public function getBackWall()
    {
        return $this->container['back_wall'];
    }

    /**
     * Sets back_wall.
     *
     * @param \Aspose\Cells\Cloud\Model\Walls|null $back_wall
     *
     * @return $this
     */
    public function setBackWall($back_wall)
    {
        $this->container['back_wall'] = $back_wall;
        return $this;
    }

    /**
     * Gets category_axis.
     *
     * @return \Aspose\Cells\Cloud\Model\Axis|null
     */
    public function getCategoryAxis()
    {
        return $this->container['category_axis'];
    }

    /**
     * Sets category_axis.
     *
     * @param \Aspose\Cells\Cloud\Model\Axis|null $category_axis
     *
     * @return $this
     */
    public function setCategoryAxis($category_axis)
    {
        $this->container['category_axis'] = $category_axis;
        return $this;
    }

    /**
     * Gets chart_area.
     *
     * @return \Aspose\Cells\Cloud\Model\ChartArea|null
     */
    public function getChartArea()
    {
        return $this->container['chart_area'];
    }

    /**
     * Sets chart_area.
     *
     * @param \Aspose\Cells\Cloud\Model\ChartArea|null $chart_area
     *
     * @return $this
     */
    public function setChartArea($chart_area)
    {
        $this->container['chart_area'] = $chart_area;
        return $this;
    }

    /**
     * Gets chart_data_table.
     *
     * @return \Aspose\Cells\Cloud\Model\ChartDataTable|null
     */
    public function getChartDataTable()
    {
        return $this->container['chart_data_table'];
    }

    /**
     * Sets chart_data_table.
     *
     * @param \Aspose\Cells\Cloud\Model\ChartDataTable|null $chart_data_table
     *
     * @return $this
     */
    public function setChartDataTable($chart_data_table)
    {
        $this->container['chart_data_table'] = $chart_data_table;
        return $this;
    }

    /**
     * Gets chart_object.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getChartObject()
    {
        return $this->container['chart_object'];
    }

    /**
     * Sets chart_object.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $chart_object
     *
     * @return $this
     */
    public function setChartObject($chart_object)
    {
        $this->container['chart_object'] = $chart_object;
        return $this;
    }

    /**
     * Gets depth_percent.
     *
     * @return int|null
     */
    public function getDepthPercent()
    {
        return $this->container['depth_percent'];
    }

    /**
     * Sets depth_percent.
     *
     * @param int|null $depth_percent
     *
     * @return $this
     */
    public function setDepthPercent($depth_percent)
    {
        $this->container['depth_percent'] = $depth_percent;
        return $this;
    }

    /**
     * Gets elevation.
     *
     * @return int|null
     */
    public function getElevation()
    {
        return $this->container['elevation'];
    }

    /**
     * Sets elevation.
     *
     * @param int|null $elevation
     *
     * @return $this
     */
    public function setElevation($elevation)
    {
        $this->container['elevation'] = $elevation;
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
     * Gets floor.
     *
     * @return \Aspose\Cells\Cloud\Model\Floor|null
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor.
     *
     * @param \Aspose\Cells\Cloud\Model\Floor|null $floor
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;
        return $this;
    }

    /**
     * Gets gap_depth.
     *
     * @return int|null
     */
    public function getGapDepth()
    {
        return $this->container['gap_depth'];
    }

    /**
     * Sets gap_depth.
     *
     * @param int|null $gap_depth
     *
     * @return $this
     */
    public function setGapDepth($gap_depth)
    {
        $this->container['gap_depth'] = $gap_depth;
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
     * Gets height_percent.
     *
     * @return int|null
     */
    public function getHeightPercent()
    {
        return $this->container['height_percent'];
    }

    /**
     * Sets height_percent.
     *
     * @param int|null $height_percent
     *
     * @return $this
     */
    public function setHeightPercent($height_percent)
    {
        $this->container['height_percent'] = $height_percent;
        return $this;
    }

    /**
     * Gets hide_pivot_field_buttons.
     *
     * @return bool|null
     */
    public function getHidePivotFieldButtons()
    {
        return $this->container['hide_pivot_field_buttons'];
    }

    /**
     * Sets hide_pivot_field_buttons.
     *
     * @param bool|null $hide_pivot_field_buttons
     *
     * @return $this
     */
    public function setHidePivotFieldButtons($hide_pivot_field_buttons)
    {
        $this->container['hide_pivot_field_buttons'] = $hide_pivot_field_buttons;
        return $this;
    }

    /**
     * Gets is3_d.
     *
     * @return bool|null
     */
    public function getIs3D()
    {
        return $this->container['is3_d'];
    }

    /**
     * Sets is3_d.
     *
     * @param bool|null $is3_d
     *
     * @return $this
     */
    public function setIs3D($is3_d)
    {
        $this->container['is3_d'] = $is3_d;
        return $this;
    }

    /**
     * Gets is_rectangular_cornered.
     *
     * @return bool|null
     */
    public function getIsRectangularCornered()
    {
        return $this->container['is_rectangular_cornered'];
    }

    /**
     * Sets is_rectangular_cornered.
     *
     * @param bool|null $is_rectangular_cornered
     *
     * @return $this
     */
    public function setIsRectangularCornered($is_rectangular_cornered)
    {
        $this->container['is_rectangular_cornered'] = $is_rectangular_cornered;
        return $this;
    }

    /**
     * Gets legend.
     *
     * @return \Aspose\Cells\Cloud\Model\Legend|null
     */
    public function getLegend()
    {
        return $this->container['legend'];
    }

    /**
     * Sets legend.
     *
     * @param \Aspose\Cells\Cloud\Model\Legend|null $legend
     *
     * @return $this
     */
    public function setLegend($legend)
    {
        $this->container['legend'] = $legend;
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
     * Gets n_series.
     *
     * @return \Aspose\Cells\Cloud\Model\SeriesItems|null
     */
    public function getNSeries()
    {
        return $this->container['n_series'];
    }

    /**
     * Sets n_series.
     *
     * @param \Aspose\Cells\Cloud\Model\SeriesItems|null $n_series
     *
     * @return $this
     */
    public function setNSeries($n_series)
    {
        $this->container['n_series'] = $n_series;
        return $this;
    }

    /**
     * Gets page_setup.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getPageSetup()
    {
        return $this->container['page_setup'];
    }

    /**
     * Sets page_setup.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $page_setup
     *
     * @return $this
     */
    public function setPageSetup($page_setup)
    {
        $this->container['page_setup'] = $page_setup;
        return $this;
    }

    /**
     * Gets perspective.
     *
     * @return int|null
     */
    public function getPerspective()
    {
        return $this->container['perspective'];
    }

    /**
     * Sets perspective.
     *
     * @param int|null $perspective
     *
     * @return $this
     */
    public function setPerspective($perspective)
    {
        $this->container['perspective'] = $perspective;
        return $this;
    }

    /**
     * Gets pivot_source.
     *
     * @return string|null
     */
    public function getPivotSource()
    {
        return $this->container['pivot_source'];
    }

    /**
     * Sets pivot_source.
     *
     * @param string|null $pivot_source
     *
     * @return $this
     */
    public function setPivotSource($pivot_source)
    {
        $this->container['pivot_source'] = $pivot_source;
        return $this;
    }

    /**
     * Gets placement.
     *
     * @return string|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement.
     *
     * @param string|null $placement
     *
     * @return $this
     */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;
        return $this;
    }

    /**
     * Gets plot_area.
     *
     * @return \Aspose\Cells\Cloud\Model\PlotArea|null
     */
    public function getPlotArea()
    {
        return $this->container['plot_area'];
    }

    /**
     * Sets plot_area.
     *
     * @param \Aspose\Cells\Cloud\Model\PlotArea|null $plot_area
     *
     * @return $this
     */
    public function setPlotArea($plot_area)
    {
        $this->container['plot_area'] = $plot_area;
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
     * Gets plot_visible_cells.
     *
     * @return bool|null
     */
    public function getPlotVisibleCells()
    {
        return $this->container['plot_visible_cells'];
    }

    /**
     * Sets plot_visible_cells.
     *
     * @param bool|null $plot_visible_cells
     *
     * @return $this
     */
    public function setPlotVisibleCells($plot_visible_cells)
    {
        $this->container['plot_visible_cells'] = $plot_visible_cells;
        return $this;
    }

    /**
     * Gets print_size.
     *
     * @return string|null
     */
    public function getPrintSize()
    {
        return $this->container['print_size'];
    }

    /**
     * Sets print_size.
     *
     * @param string|null $print_size
     *
     * @return $this
     */
    public function setPrintSize($print_size)
    {
        $this->container['print_size'] = $print_size;
        return $this;
    }

    /**
     * Gets right_angle_axes.
     *
     * @return bool|null
     */
    public function getRightAngleAxes()
    {
        return $this->container['right_angle_axes'];
    }

    /**
     * Sets right_angle_axes.
     *
     * @param bool|null $right_angle_axes
     *
     * @return $this
     */
    public function setRightAngleAxes($right_angle_axes)
    {
        $this->container['right_angle_axes'] = $right_angle_axes;
        return $this;
    }

    /**
     * Gets rotation_angle.
     *
     * @return int|null
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle.
     *
     * @param int|null $rotation_angle
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;
        return $this;
    }

    /**
     * Gets second_category_axis.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getSecondCategoryAxis()
    {
        return $this->container['second_category_axis'];
    }

    /**
     * Sets second_category_axis.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $second_category_axis
     *
     * @return $this
     */
    public function setSecondCategoryAxis($second_category_axis)
    {
        $this->container['second_category_axis'] = $second_category_axis;
        return $this;
    }

    /**
     * Gets second_value_axis.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getSecondValueAxis()
    {
        return $this->container['second_value_axis'];
    }

    /**
     * Sets second_value_axis.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $second_value_axis
     *
     * @return $this
     */
    public function setSecondValueAxis($second_value_axis)
    {
        $this->container['second_value_axis'] = $second_value_axis;
        return $this;
    }

    /**
     * Gets series_axis.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getSeriesAxis()
    {
        return $this->container['series_axis'];
    }

    /**
     * Sets series_axis.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $series_axis
     *
     * @return $this
     */
    public function setSeriesAxis($series_axis)
    {
        $this->container['series_axis'] = $series_axis;
        return $this;
    }

    /**
     * Gets shapes.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getShapes()
    {
        return $this->container['shapes'];
    }

    /**
     * Sets shapes.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $shapes
     *
     * @return $this
     */
    public function setShapes($shapes)
    {
        $this->container['shapes'] = $shapes;
        return $this;
    }

    /**
     * Gets show_data_table.
     *
     * @return bool|null
     */
    public function getShowDataTable()
    {
        return $this->container['show_data_table'];
    }

    /**
     * Sets show_data_table.
     *
     * @param bool|null $show_data_table
     *
     * @return $this
     */
    public function setShowDataTable($show_data_table)
    {
        $this->container['show_data_table'] = $show_data_table;
        return $this;
    }

    /**
     * Gets show_legend.
     *
     * @return bool|null
     */
    public function getShowLegend()
    {
        return $this->container['show_legend'];
    }

    /**
     * Sets show_legend.
     *
     * @param bool|null $show_legend
     *
     * @return $this
     */
    public function setShowLegend($show_legend)
    {
        $this->container['show_legend'] = $show_legend;
        return $this;
    }

    /**
     * Gets side_wall.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getSideWall()
    {
        return $this->container['side_wall'];
    }

    /**
     * Sets side_wall.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $side_wall
     *
     * @return $this
     */
    public function setSideWall($side_wall)
    {
        $this->container['side_wall'] = $side_wall;
        return $this;
    }

    /**
     * Gets size_with_window.
     *
     * @return bool|null
     */
    public function getSizeWithWindow()
    {
        return $this->container['size_with_window'];
    }

    /**
     * Sets size_with_window.
     *
     * @param bool|null $size_with_window
     *
     * @return $this
     */
    public function setSizeWithWindow($size_with_window)
    {
        $this->container['size_with_window'] = $size_with_window;
        return $this;
    }

    /**
     * Gets style.
     *
     * @return int|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style.
     *
     * @param int|null $style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;
        return $this;
    }

    /**
     * Gets title.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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
     * Gets value_axis.
     *
     * @return \Aspose\Cells\Cloud\Model\Axis|null
     */
    public function getValueAxis()
    {
        return $this->container['value_axis'];
    }

    /**
     * Sets value_axis.
     *
     * @param \Aspose\Cells\Cloud\Model\Axis|null $value_axis
     *
     * @return $this
     */
    public function setValueAxis($value_axis)
    {
        $this->container['value_axis'] = $value_axis;
        return $this;
    }

    /**
     * Gets walls.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getWalls()
    {
        return $this->container['walls'];
    }

    /**
     * Sets walls.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $walls
     *
     * @return $this
     */
    public function setWalls($walls)
    {
        $this->container['walls'] = $walls;
        return $this;
    }

    /**
     * Gets walls_and_gridlines2_d.
     *
     * @return bool|null
     */
    public function getWallsAndGridlines2D()
    {
        return $this->container['walls_and_gridlines2_d'];
    }

    /**
     * Sets walls_and_gridlines2_d.
     *
     * @param bool|null $walls_and_gridlines2_d
     *
     * @return $this
     */
    public function setWallsAndGridlines2D($walls_and_gridlines2_d)
    {
        $this->container['walls_and_gridlines2_d'] = $walls_and_gridlines2_d;
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
