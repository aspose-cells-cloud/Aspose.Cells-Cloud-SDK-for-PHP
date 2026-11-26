<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Worksheet.php">
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

class Worksheet
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Worksheet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\\Aspose\\Cells\\Cloud\\Model\\Link[]',
        'display_right_to_left' => 'bool',
        'display_zeros' => 'bool',
        'first_visible_column' => 'int',
        'first_visible_row' => 'int',
        'name' => 'string',
        'index' => 'int',
        'is_gridlines_visible' => 'bool',
        'is_outline_shown' => 'bool',
        'is_page_break_preview' => 'bool',
        'is_visible' => 'bool',
        'is_protected' => 'bool',
        'is_row_column_headers_visible' => 'bool',
        'is_ruler_visible' => 'bool',
        'is_selected' => 'bool',
        'tab_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'transition_entry' => 'bool',
        'transition_evaluation' => 'bool',
        'type' => 'string',
        'view_type' => 'string',
        'visibility_type' => 'string',
        'zoom' => 'int',
        'cells' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'charts' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'auto_shapes' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'ole_objects' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'comments' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'pictures' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'merged_cells' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'validations' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'conditional_formattings' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'hyperlinks' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'display_right_to_left' => null,
        'display_zeros' => null,
        'first_visible_column' => 'int32',
        'first_visible_row' => 'int32',
        'name' => null,
        'index' => 'int32',
        'is_gridlines_visible' => null,
        'is_outline_shown' => null,
        'is_page_break_preview' => null,
        'is_visible' => null,
        'is_protected' => null,
        'is_row_column_headers_visible' => null,
        'is_ruler_visible' => null,
        'is_selected' => null,
        'tab_color' => null,
        'transition_entry' => null,
        'transition_evaluation' => null,
        'type' => null,
        'view_type' => null,
        'visibility_type' => null,
        'zoom' => 'int32',
        'cells' => null,
        'charts' => null,
        'auto_shapes' => null,
        'ole_objects' => null,
        'comments' => null,
        'pictures' => null,
        'merged_cells' => null,
        'validations' => null,
        'conditional_formattings' => null,
        'hyperlinks' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'links' => 'Links',
        'display_right_to_left' => 'DisplayRightToLeft',
        'display_zeros' => 'DisplayZeros',
        'first_visible_column' => 'FirstVisibleColumn',
        'first_visible_row' => 'FirstVisibleRow',
        'name' => 'Name',
        'index' => 'Index',
        'is_gridlines_visible' => 'IsGridlinesVisible',
        'is_outline_shown' => 'IsOutlineShown',
        'is_page_break_preview' => 'IsPageBreakPreview',
        'is_visible' => 'IsVisible',
        'is_protected' => 'IsProtected',
        'is_row_column_headers_visible' => 'IsRowColumnHeadersVisible',
        'is_ruler_visible' => 'IsRulerVisible',
        'is_selected' => 'IsSelected',
        'tab_color' => 'TabColor',
        'transition_entry' => 'TransitionEntry',
        'transition_evaluation' => 'TransitionEvaluation',
        'type' => 'Type',
        'view_type' => 'ViewType',
        'visibility_type' => 'VisibilityType',
        'zoom' => 'Zoom',
        'cells' => 'Cells',
        'charts' => 'Charts',
        'auto_shapes' => 'AutoShapes',
        'ole_objects' => 'OleObjects',
        'comments' => 'Comments',
        'pictures' => 'Pictures',
        'merged_cells' => 'MergedCells',
        'validations' => 'Validations',
        'conditional_formattings' => 'ConditionalFormattings',
        'hyperlinks' => 'Hyperlinks',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'links' => 'setLinks',
        'display_right_to_left' => 'setDisplayRightToLeft',
        'display_zeros' => 'setDisplayZeros',
        'first_visible_column' => 'setFirstVisibleColumn',
        'first_visible_row' => 'setFirstVisibleRow',
        'name' => 'setName',
        'index' => 'setIndex',
        'is_gridlines_visible' => 'setIsGridlinesVisible',
        'is_outline_shown' => 'setIsOutlineShown',
        'is_page_break_preview' => 'setIsPageBreakPreview',
        'is_visible' => 'setIsVisible',
        'is_protected' => 'setIsProtected',
        'is_row_column_headers_visible' => 'setIsRowColumnHeadersVisible',
        'is_ruler_visible' => 'setIsRulerVisible',
        'is_selected' => 'setIsSelected',
        'tab_color' => 'setTabColor',
        'transition_entry' => 'setTransitionEntry',
        'transition_evaluation' => 'setTransitionEvaluation',
        'type' => 'setType',
        'view_type' => 'setViewType',
        'visibility_type' => 'setVisibilityType',
        'zoom' => 'setZoom',
        'cells' => 'setCells',
        'charts' => 'setCharts',
        'auto_shapes' => 'setAutoShapes',
        'ole_objects' => 'setOleObjects',
        'comments' => 'setComments',
        'pictures' => 'setPictures',
        'merged_cells' => 'setMergedCells',
        'validations' => 'setValidations',
        'conditional_formattings' => 'setConditionalFormattings',
        'hyperlinks' => 'setHyperlinks',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'links' => 'getLinks',
        'display_right_to_left' => 'getDisplayRightToLeft',
        'display_zeros' => 'getDisplayZeros',
        'first_visible_column' => 'getFirstVisibleColumn',
        'first_visible_row' => 'getFirstVisibleRow',
        'name' => 'getName',
        'index' => 'getIndex',
        'is_gridlines_visible' => 'getIsGridlinesVisible',
        'is_outline_shown' => 'getIsOutlineShown',
        'is_page_break_preview' => 'getIsPageBreakPreview',
        'is_visible' => 'getIsVisible',
        'is_protected' => 'getIsProtected',
        'is_row_column_headers_visible' => 'getIsRowColumnHeadersVisible',
        'is_ruler_visible' => 'getIsRulerVisible',
        'is_selected' => 'getIsSelected',
        'tab_color' => 'getTabColor',
        'transition_entry' => 'getTransitionEntry',
        'transition_evaluation' => 'getTransitionEvaluation',
        'type' => 'getType',
        'view_type' => 'getViewType',
        'visibility_type' => 'getVisibilityType',
        'zoom' => 'getZoom',
        'cells' => 'getCells',
        'charts' => 'getCharts',
        'auto_shapes' => 'getAutoShapes',
        'ole_objects' => 'getOleObjects',
        'comments' => 'getComments',
        'pictures' => 'getPictures',
        'merged_cells' => 'getMergedCells',
        'validations' => 'getValidations',
        'conditional_formattings' => 'getConditionalFormattings',
        'hyperlinks' => 'getHyperlinks',
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['display_right_to_left'] = isset($data['display_right_to_left']) ? $data['display_right_to_left'] : null;
        $this->container['display_zeros'] = isset($data['display_zeros']) ? $data['display_zeros'] : null;
        $this->container['first_visible_column'] = isset($data['first_visible_column']) ? $data['first_visible_column'] : null;
        $this->container['first_visible_row'] = isset($data['first_visible_row']) ? $data['first_visible_row'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['is_gridlines_visible'] = isset($data['is_gridlines_visible']) ? $data['is_gridlines_visible'] : null;
        $this->container['is_outline_shown'] = isset($data['is_outline_shown']) ? $data['is_outline_shown'] : null;
        $this->container['is_page_break_preview'] = isset($data['is_page_break_preview']) ? $data['is_page_break_preview'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['is_protected'] = isset($data['is_protected']) ? $data['is_protected'] : null;
        $this->container['is_row_column_headers_visible'] = isset($data['is_row_column_headers_visible']) ? $data['is_row_column_headers_visible'] : null;
        $this->container['is_ruler_visible'] = isset($data['is_ruler_visible']) ? $data['is_ruler_visible'] : null;
        $this->container['is_selected'] = isset($data['is_selected']) ? $data['is_selected'] : null;
        $this->container['tab_color'] = isset($data['tab_color']) ? $data['tab_color'] : null;
        $this->container['transition_entry'] = isset($data['transition_entry']) ? $data['transition_entry'] : null;
        $this->container['transition_evaluation'] = isset($data['transition_evaluation']) ? $data['transition_evaluation'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['view_type'] = isset($data['view_type']) ? $data['view_type'] : null;
        $this->container['visibility_type'] = isset($data['visibility_type']) ? $data['visibility_type'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['cells'] = isset($data['cells']) ? $data['cells'] : null;
        $this->container['charts'] = isset($data['charts']) ? $data['charts'] : null;
        $this->container['auto_shapes'] = isset($data['auto_shapes']) ? $data['auto_shapes'] : null;
        $this->container['ole_objects'] = isset($data['ole_objects']) ? $data['ole_objects'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['pictures'] = isset($data['pictures']) ? $data['pictures'] : null;
        $this->container['merged_cells'] = isset($data['merged_cells']) ? $data['merged_cells'] : null;
        $this->container['validations'] = isset($data['validations']) ? $data['validations'] : null;
        $this->container['conditional_formattings'] = isset($data['conditional_formattings']) ? $data['conditional_formattings'] : null;
        $this->container['hyperlinks'] = isset($data['hyperlinks']) ? $data['hyperlinks'] : null;
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
     * Gets links.
     *
     * @return \Aspose\Cells\Cloud\Model\Link[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links.
     *
     * @param \Aspose\Cells\Cloud\Model\Link[]|null $links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
     * Gets display_right_to_left.
     *
     * @return bool|null
     */
    public function getDisplayRightToLeft()
    {
        return $this->container['display_right_to_left'];
    }

    /**
     * Sets display_right_to_left.
     *
     * @param bool|null $display_right_to_left
     *
     * @return $this
     */
    public function setDisplayRightToLeft($display_right_to_left)
    {
        $this->container['display_right_to_left'] = $display_right_to_left;
        return $this;
    }

    /**
     * Gets display_zeros.
     *
     * @return bool|null
     */
    public function getDisplayZeros()
    {
        return $this->container['display_zeros'];
    }

    /**
     * Sets display_zeros.
     *
     * @param bool|null $display_zeros
     *
     * @return $this
     */
    public function setDisplayZeros($display_zeros)
    {
        $this->container['display_zeros'] = $display_zeros;
        return $this;
    }

    /**
     * Gets first_visible_column.
     *
     * @return int|null
     */
    public function getFirstVisibleColumn()
    {
        return $this->container['first_visible_column'];
    }

    /**
     * Sets first_visible_column.
     *
     * @param int|null $first_visible_column
     *
     * @return $this
     */
    public function setFirstVisibleColumn($first_visible_column)
    {
        $this->container['first_visible_column'] = $first_visible_column;
        return $this;
    }

    /**
     * Gets first_visible_row.
     *
     * @return int|null
     */
    public function getFirstVisibleRow()
    {
        return $this->container['first_visible_row'];
    }

    /**
     * Sets first_visible_row.
     *
     * @param int|null $first_visible_row
     *
     * @return $this
     */
    public function setFirstVisibleRow($first_visible_row)
    {
        $this->container['first_visible_row'] = $first_visible_row;
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
     * Gets index.
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index.
     *
     * @param int|null $index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
     * Gets is_gridlines_visible.
     *
     * @return bool|null
     */
    public function getIsGridlinesVisible()
    {
        return $this->container['is_gridlines_visible'];
    }

    /**
     * Sets is_gridlines_visible.
     *
     * @param bool|null $is_gridlines_visible
     *
     * @return $this
     */
    public function setIsGridlinesVisible($is_gridlines_visible)
    {
        $this->container['is_gridlines_visible'] = $is_gridlines_visible;
        return $this;
    }

    /**
     * Gets is_outline_shown.
     *
     * @return bool|null
     */
    public function getIsOutlineShown()
    {
        return $this->container['is_outline_shown'];
    }

    /**
     * Sets is_outline_shown.
     *
     * @param bool|null $is_outline_shown
     *
     * @return $this
     */
    public function setIsOutlineShown($is_outline_shown)
    {
        $this->container['is_outline_shown'] = $is_outline_shown;
        return $this;
    }

    /**
     * Gets is_page_break_preview.
     *
     * @return bool|null
     */
    public function getIsPageBreakPreview()
    {
        return $this->container['is_page_break_preview'];
    }

    /**
     * Sets is_page_break_preview.
     *
     * @param bool|null $is_page_break_preview
     *
     * @return $this
     */
    public function setIsPageBreakPreview($is_page_break_preview)
    {
        $this->container['is_page_break_preview'] = $is_page_break_preview;
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
     * Gets is_protected.
     *
     * @return bool|null
     */
    public function getIsProtected()
    {
        return $this->container['is_protected'];
    }

    /**
     * Sets is_protected.
     *
     * @param bool|null $is_protected
     *
     * @return $this
     */
    public function setIsProtected($is_protected)
    {
        $this->container['is_protected'] = $is_protected;
        return $this;
    }

    /**
     * Gets is_row_column_headers_visible.
     *
     * @return bool|null
     */
    public function getIsRowColumnHeadersVisible()
    {
        return $this->container['is_row_column_headers_visible'];
    }

    /**
     * Sets is_row_column_headers_visible.
     *
     * @param bool|null $is_row_column_headers_visible
     *
     * @return $this
     */
    public function setIsRowColumnHeadersVisible($is_row_column_headers_visible)
    {
        $this->container['is_row_column_headers_visible'] = $is_row_column_headers_visible;
        return $this;
    }

    /**
     * Gets is_ruler_visible.
     *
     * @return bool|null
     */
    public function getIsRulerVisible()
    {
        return $this->container['is_ruler_visible'];
    }

    /**
     * Sets is_ruler_visible.
     *
     * @param bool|null $is_ruler_visible
     *
     * @return $this
     */
    public function setIsRulerVisible($is_ruler_visible)
    {
        $this->container['is_ruler_visible'] = $is_ruler_visible;
        return $this;
    }

    /**
     * Gets is_selected.
     *
     * @return bool|null
     */
    public function getIsSelected()
    {
        return $this->container['is_selected'];
    }

    /**
     * Sets is_selected.
     *
     * @param bool|null $is_selected
     *
     * @return $this
     */
    public function setIsSelected($is_selected)
    {
        $this->container['is_selected'] = $is_selected;
        return $this;
    }

    /**
     * Gets tab_color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getTabColor()
    {
        return $this->container['tab_color'];
    }

    /**
     * Sets tab_color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $tab_color
     *
     * @return $this
     */
    public function setTabColor($tab_color)
    {
        $this->container['tab_color'] = $tab_color;
        return $this;
    }

    /**
     * Gets transition_entry.
     *
     * @return bool|null
     */
    public function getTransitionEntry()
    {
        return $this->container['transition_entry'];
    }

    /**
     * Sets transition_entry.
     *
     * @param bool|null $transition_entry
     *
     * @return $this
     */
    public function setTransitionEntry($transition_entry)
    {
        $this->container['transition_entry'] = $transition_entry;
        return $this;
    }

    /**
     * Gets transition_evaluation.
     *
     * @return bool|null
     */
    public function getTransitionEvaluation()
    {
        return $this->container['transition_evaluation'];
    }

    /**
     * Sets transition_evaluation.
     *
     * @param bool|null $transition_evaluation
     *
     * @return $this
     */
    public function setTransitionEvaluation($transition_evaluation)
    {
        $this->container['transition_evaluation'] = $transition_evaluation;
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
     * Gets view_type.
     *
     * @return string|null
     */
    public function getViewType()
    {
        return $this->container['view_type'];
    }

    /**
     * Sets view_type.
     *
     * @param string|null $view_type
     *
     * @return $this
     */
    public function setViewType($view_type)
    {
        $this->container['view_type'] = $view_type;
        return $this;
    }

    /**
     * Gets visibility_type.
     *
     * @return string|null
     */
    public function getVisibilityType()
    {
        return $this->container['visibility_type'];
    }

    /**
     * Sets visibility_type.
     *
     * @param string|null $visibility_type
     *
     * @return $this
     */
    public function setVisibilityType($visibility_type)
    {
        $this->container['visibility_type'] = $visibility_type;
        return $this;
    }

    /**
     * Gets zoom.
     *
     * @return int|null
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /**
     * Sets zoom.
     *
     * @param int|null $zoom
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;
        return $this;
    }

    /**
     * Gets cells.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getCells()
    {
        return $this->container['cells'];
    }

    /**
     * Sets cells.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $cells
     *
     * @return $this
     */
    public function setCells($cells)
    {
        $this->container['cells'] = $cells;
        return $this;
    }

    /**
     * Gets charts.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getCharts()
    {
        return $this->container['charts'];
    }

    /**
     * Sets charts.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $charts
     *
     * @return $this
     */
    public function setCharts($charts)
    {
        $this->container['charts'] = $charts;
        return $this;
    }

    /**
     * Gets auto_shapes.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getAutoShapes()
    {
        return $this->container['auto_shapes'];
    }

    /**
     * Sets auto_shapes.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $auto_shapes
     *
     * @return $this
     */
    public function setAutoShapes($auto_shapes)
    {
        $this->container['auto_shapes'] = $auto_shapes;
        return $this;
    }

    /**
     * Gets ole_objects.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getOleObjects()
    {
        return $this->container['ole_objects'];
    }

    /**
     * Sets ole_objects.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $ole_objects
     *
     * @return $this
     */
    public function setOleObjects($ole_objects)
    {
        $this->container['ole_objects'] = $ole_objects;
        return $this;
    }

    /**
     * Gets comments.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
        return $this;
    }

    /**
     * Gets pictures.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getPictures()
    {
        return $this->container['pictures'];
    }

    /**
     * Sets pictures.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $pictures
     *
     * @return $this
     */
    public function setPictures($pictures)
    {
        $this->container['pictures'] = $pictures;
        return $this;
    }

    /**
     * Gets merged_cells.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getMergedCells()
    {
        return $this->container['merged_cells'];
    }

    /**
     * Sets merged_cells.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $merged_cells
     *
     * @return $this
     */
    public function setMergedCells($merged_cells)
    {
        $this->container['merged_cells'] = $merged_cells;
        return $this;
    }

    /**
     * Gets validations.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getValidations()
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $validations
     *
     * @return $this
     */
    public function setValidations($validations)
    {
        $this->container['validations'] = $validations;
        return $this;
    }

    /**
     * Gets conditional_formattings.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getConditionalFormattings()
    {
        return $this->container['conditional_formattings'];
    }

    /**
     * Sets conditional_formattings.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $conditional_formattings
     *
     * @return $this
     */
    public function setConditionalFormattings($conditional_formattings)
    {
        $this->container['conditional_formattings'] = $conditional_formattings;
        return $this;
    }

    /**
     * Gets hyperlinks.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getHyperlinks()
    {
        return $this->container['hyperlinks'];
    }

    /**
     * Sets hyperlinks.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $hyperlinks
     *
     * @return $this
     */
    public function setHyperlinks($hyperlinks)
    {
        $this->container['hyperlinks'] = $hyperlinks;
        return $this;
    }
}
