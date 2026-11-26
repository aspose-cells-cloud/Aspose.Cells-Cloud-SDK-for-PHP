<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PivotField.php">
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

class PivotField
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PivotField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_show_count' => 'int',
        'auto_show_field' => 'int',
        'auto_sort_field' => 'int',
        'base_field' => 'int',
        'base_index' => 'int',
        'base_item' => 'int',
        'base_item_position' => 'string',
        'current_page_item' => 'int',
        'data_display_format' => 'string',
        'display_name' => 'string',
        'drag_to_column' => 'bool',
        'drag_to_data' => 'bool',
        'drag_to_hide' => 'bool',
        'drag_to_page' => 'bool',
        'drag_to_row' => 'bool',
        'function' => 'string',
        'insert_blank_row' => 'bool',
        'is_ascend_show' => 'bool',
        'is_ascend_sort' => 'bool',
        'is_auto_show' => 'bool',
        'is_auto_sort' => 'bool',
        'is_auto_subtotals' => 'bool',
        'is_calculated_field' => 'bool',
        'is_include_new_items_in_filter' => 'bool',
        'is_insert_page_breaks_between_items' => 'bool',
        'is_multiple_item_selection_allowed' => 'bool',
        'is_repeat_item_labels' => 'bool',
        'item_count' => 'int',
        'items' => 'string[]',
        'name' => 'string',
        'number' => 'int',
        'number_format' => 'string',
        'original_items' => 'string[]',
        'pivot_items' => '\\Aspose\\Cells\\Cloud\\Model\\PivotItem[]',
        'position' => 'int',
        'show_all_items' => 'bool',
        'show_compact' => 'bool',
        'show_in_outline_form' => 'bool',
        'show_subtotal_at_top' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_show_count' => 'int32',
        'auto_show_field' => 'int32',
        'auto_sort_field' => 'int32',
        'base_field' => 'int32',
        'base_index' => 'int32',
        'base_item' => 'int32',
        'base_item_position' => null,
        'current_page_item' => 'int32',
        'data_display_format' => null,
        'display_name' => null,
        'drag_to_column' => null,
        'drag_to_data' => null,
        'drag_to_hide' => null,
        'drag_to_page' => null,
        'drag_to_row' => null,
        'function' => null,
        'insert_blank_row' => null,
        'is_ascend_show' => null,
        'is_ascend_sort' => null,
        'is_auto_show' => null,
        'is_auto_sort' => null,
        'is_auto_subtotals' => null,
        'is_calculated_field' => null,
        'is_include_new_items_in_filter' => null,
        'is_insert_page_breaks_between_items' => null,
        'is_multiple_item_selection_allowed' => null,
        'is_repeat_item_labels' => null,
        'item_count' => 'int32',
        'items' => null,
        'name' => null,
        'number' => 'int32',
        'number_format' => null,
        'original_items' => null,
        'pivot_items' => null,
        'position' => 'int32',
        'show_all_items' => null,
        'show_compact' => null,
        'show_in_outline_form' => null,
        'show_subtotal_at_top' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'auto_show_count' => 'AutoShowCount',
        'auto_show_field' => 'AutoShowField',
        'auto_sort_field' => 'AutoSortField',
        'base_field' => 'BaseField',
        'base_index' => 'BaseIndex',
        'base_item' => 'BaseItem',
        'base_item_position' => 'BaseItemPosition',
        'current_page_item' => 'CurrentPageItem',
        'data_display_format' => 'DataDisplayFormat',
        'display_name' => 'DisplayName',
        'drag_to_column' => 'DragToColumn',
        'drag_to_data' => 'DragToData',
        'drag_to_hide' => 'DragToHide',
        'drag_to_page' => 'DragToPage',
        'drag_to_row' => 'DragToRow',
        'function' => 'Function',
        'insert_blank_row' => 'InsertBlankRow',
        'is_ascend_show' => 'IsAscendShow',
        'is_ascend_sort' => 'IsAscendSort',
        'is_auto_show' => 'IsAutoShow',
        'is_auto_sort' => 'IsAutoSort',
        'is_auto_subtotals' => 'IsAutoSubtotals',
        'is_calculated_field' => 'IsCalculatedField',
        'is_include_new_items_in_filter' => 'IsIncludeNewItemsInFilter',
        'is_insert_page_breaks_between_items' => 'IsInsertPageBreaksBetweenItems',
        'is_multiple_item_selection_allowed' => 'IsMultipleItemSelectionAllowed',
        'is_repeat_item_labels' => 'IsRepeatItemLabels',
        'item_count' => 'ItemCount',
        'items' => 'Items',
        'name' => 'Name',
        'number' => 'Number',
        'number_format' => 'NumberFormat',
        'original_items' => 'OriginalItems',
        'pivot_items' => 'PivotItems',
        'position' => 'Position',
        'show_all_items' => 'ShowAllItems',
        'show_compact' => 'ShowCompact',
        'show_in_outline_form' => 'ShowInOutlineForm',
        'show_subtotal_at_top' => 'ShowSubtotalAtTop',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'auto_show_count' => 'setAutoShowCount',
        'auto_show_field' => 'setAutoShowField',
        'auto_sort_field' => 'setAutoSortField',
        'base_field' => 'setBaseField',
        'base_index' => 'setBaseIndex',
        'base_item' => 'setBaseItem',
        'base_item_position' => 'setBaseItemPosition',
        'current_page_item' => 'setCurrentPageItem',
        'data_display_format' => 'setDataDisplayFormat',
        'display_name' => 'setDisplayName',
        'drag_to_column' => 'setDragToColumn',
        'drag_to_data' => 'setDragToData',
        'drag_to_hide' => 'setDragToHide',
        'drag_to_page' => 'setDragToPage',
        'drag_to_row' => 'setDragToRow',
        'function' => 'setFunction',
        'insert_blank_row' => 'setInsertBlankRow',
        'is_ascend_show' => 'setIsAscendShow',
        'is_ascend_sort' => 'setIsAscendSort',
        'is_auto_show' => 'setIsAutoShow',
        'is_auto_sort' => 'setIsAutoSort',
        'is_auto_subtotals' => 'setIsAutoSubtotals',
        'is_calculated_field' => 'setIsCalculatedField',
        'is_include_new_items_in_filter' => 'setIsIncludeNewItemsInFilter',
        'is_insert_page_breaks_between_items' => 'setIsInsertPageBreaksBetweenItems',
        'is_multiple_item_selection_allowed' => 'setIsMultipleItemSelectionAllowed',
        'is_repeat_item_labels' => 'setIsRepeatItemLabels',
        'item_count' => 'setItemCount',
        'items' => 'setItems',
        'name' => 'setName',
        'number' => 'setNumber',
        'number_format' => 'setNumberFormat',
        'original_items' => 'setOriginalItems',
        'pivot_items' => 'setPivotItems',
        'position' => 'setPosition',
        'show_all_items' => 'setShowAllItems',
        'show_compact' => 'setShowCompact',
        'show_in_outline_form' => 'setShowInOutlineForm',
        'show_subtotal_at_top' => 'setShowSubtotalAtTop',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'auto_show_count' => 'getAutoShowCount',
        'auto_show_field' => 'getAutoShowField',
        'auto_sort_field' => 'getAutoSortField',
        'base_field' => 'getBaseField',
        'base_index' => 'getBaseIndex',
        'base_item' => 'getBaseItem',
        'base_item_position' => 'getBaseItemPosition',
        'current_page_item' => 'getCurrentPageItem',
        'data_display_format' => 'getDataDisplayFormat',
        'display_name' => 'getDisplayName',
        'drag_to_column' => 'getDragToColumn',
        'drag_to_data' => 'getDragToData',
        'drag_to_hide' => 'getDragToHide',
        'drag_to_page' => 'getDragToPage',
        'drag_to_row' => 'getDragToRow',
        'function' => 'getFunction',
        'insert_blank_row' => 'getInsertBlankRow',
        'is_ascend_show' => 'getIsAscendShow',
        'is_ascend_sort' => 'getIsAscendSort',
        'is_auto_show' => 'getIsAutoShow',
        'is_auto_sort' => 'getIsAutoSort',
        'is_auto_subtotals' => 'getIsAutoSubtotals',
        'is_calculated_field' => 'getIsCalculatedField',
        'is_include_new_items_in_filter' => 'getIsIncludeNewItemsInFilter',
        'is_insert_page_breaks_between_items' => 'getIsInsertPageBreaksBetweenItems',
        'is_multiple_item_selection_allowed' => 'getIsMultipleItemSelectionAllowed',
        'is_repeat_item_labels' => 'getIsRepeatItemLabels',
        'item_count' => 'getItemCount',
        'items' => 'getItems',
        'name' => 'getName',
        'number' => 'getNumber',
        'number_format' => 'getNumberFormat',
        'original_items' => 'getOriginalItems',
        'pivot_items' => 'getPivotItems',
        'position' => 'getPosition',
        'show_all_items' => 'getShowAllItems',
        'show_compact' => 'getShowCompact',
        'show_in_outline_form' => 'getShowInOutlineForm',
        'show_subtotal_at_top' => 'getShowSubtotalAtTop',
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
        $this->container['auto_show_count'] = isset($data['auto_show_count']) ? $data['auto_show_count'] : null;
        $this->container['auto_show_field'] = isset($data['auto_show_field']) ? $data['auto_show_field'] : null;
        $this->container['auto_sort_field'] = isset($data['auto_sort_field']) ? $data['auto_sort_field'] : null;
        $this->container['base_field'] = isset($data['base_field']) ? $data['base_field'] : null;
        $this->container['base_index'] = isset($data['base_index']) ? $data['base_index'] : null;
        $this->container['base_item'] = isset($data['base_item']) ? $data['base_item'] : null;
        $this->container['base_item_position'] = isset($data['base_item_position']) ? $data['base_item_position'] : null;
        $this->container['current_page_item'] = isset($data['current_page_item']) ? $data['current_page_item'] : null;
        $this->container['data_display_format'] = isset($data['data_display_format']) ? $data['data_display_format'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['drag_to_column'] = isset($data['drag_to_column']) ? $data['drag_to_column'] : null;
        $this->container['drag_to_data'] = isset($data['drag_to_data']) ? $data['drag_to_data'] : null;
        $this->container['drag_to_hide'] = isset($data['drag_to_hide']) ? $data['drag_to_hide'] : null;
        $this->container['drag_to_page'] = isset($data['drag_to_page']) ? $data['drag_to_page'] : null;
        $this->container['drag_to_row'] = isset($data['drag_to_row']) ? $data['drag_to_row'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['insert_blank_row'] = isset($data['insert_blank_row']) ? $data['insert_blank_row'] : null;
        $this->container['is_ascend_show'] = isset($data['is_ascend_show']) ? $data['is_ascend_show'] : null;
        $this->container['is_ascend_sort'] = isset($data['is_ascend_sort']) ? $data['is_ascend_sort'] : null;
        $this->container['is_auto_show'] = isset($data['is_auto_show']) ? $data['is_auto_show'] : null;
        $this->container['is_auto_sort'] = isset($data['is_auto_sort']) ? $data['is_auto_sort'] : null;
        $this->container['is_auto_subtotals'] = isset($data['is_auto_subtotals']) ? $data['is_auto_subtotals'] : null;
        $this->container['is_calculated_field'] = isset($data['is_calculated_field']) ? $data['is_calculated_field'] : null;
        $this->container['is_include_new_items_in_filter'] = isset($data['is_include_new_items_in_filter']) ? $data['is_include_new_items_in_filter'] : null;
        $this->container['is_insert_page_breaks_between_items'] = isset($data['is_insert_page_breaks_between_items']) ? $data['is_insert_page_breaks_between_items'] : null;
        $this->container['is_multiple_item_selection_allowed'] = isset($data['is_multiple_item_selection_allowed']) ? $data['is_multiple_item_selection_allowed'] : null;
        $this->container['is_repeat_item_labels'] = isset($data['is_repeat_item_labels']) ? $data['is_repeat_item_labels'] : null;
        $this->container['item_count'] = isset($data['item_count']) ? $data['item_count'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['number_format'] = isset($data['number_format']) ? $data['number_format'] : null;
        $this->container['original_items'] = isset($data['original_items']) ? $data['original_items'] : null;
        $this->container['pivot_items'] = isset($data['pivot_items']) ? $data['pivot_items'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['show_all_items'] = isset($data['show_all_items']) ? $data['show_all_items'] : null;
        $this->container['show_compact'] = isset($data['show_compact']) ? $data['show_compact'] : null;
        $this->container['show_in_outline_form'] = isset($data['show_in_outline_form']) ? $data['show_in_outline_form'] : null;
        $this->container['show_subtotal_at_top'] = isset($data['show_subtotal_at_top']) ? $data['show_subtotal_at_top'] : null;
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
     * Gets auto_show_count.
     *
     * @return int|null
     */
    public function getAutoShowCount()
    {
        return $this->container['auto_show_count'];
    }

    /**
     * Sets auto_show_count.
     *
     * @param int|null $auto_show_count
     *
     * @return $this
     */
    public function setAutoShowCount($auto_show_count)
    {
        $this->container['auto_show_count'] = $auto_show_count;
        return $this;
    }

    /**
     * Gets auto_show_field.
     *
     * @return int|null
     */
    public function getAutoShowField()
    {
        return $this->container['auto_show_field'];
    }

    /**
     * Sets auto_show_field.
     *
     * @param int|null $auto_show_field
     *
     * @return $this
     */
    public function setAutoShowField($auto_show_field)
    {
        $this->container['auto_show_field'] = $auto_show_field;
        return $this;
    }

    /**
     * Gets auto_sort_field.
     *
     * @return int|null
     */
    public function getAutoSortField()
    {
        return $this->container['auto_sort_field'];
    }

    /**
     * Sets auto_sort_field.
     *
     * @param int|null $auto_sort_field
     *
     * @return $this
     */
    public function setAutoSortField($auto_sort_field)
    {
        $this->container['auto_sort_field'] = $auto_sort_field;
        return $this;
    }

    /**
     * Gets base_field.
     *
     * @return int|null
     */
    public function getBaseField()
    {
        return $this->container['base_field'];
    }

    /**
     * Sets base_field.
     *
     * @param int|null $base_field
     *
     * @return $this
     */
    public function setBaseField($base_field)
    {
        $this->container['base_field'] = $base_field;
        return $this;
    }

    /**
     * Gets base_index.
     *
     * @return int|null
     */
    public function getBaseIndex()
    {
        return $this->container['base_index'];
    }

    /**
     * Sets base_index.
     *
     * @param int|null $base_index
     *
     * @return $this
     */
    public function setBaseIndex($base_index)
    {
        $this->container['base_index'] = $base_index;
        return $this;
    }

    /**
     * Gets base_item.
     *
     * @return int|null
     */
    public function getBaseItem()
    {
        return $this->container['base_item'];
    }

    /**
     * Sets base_item.
     *
     * @param int|null $base_item
     *
     * @return $this
     */
    public function setBaseItem($base_item)
    {
        $this->container['base_item'] = $base_item;
        return $this;
    }

    /**
     * Gets base_item_position.
     *
     * @return string|null
     */
    public function getBaseItemPosition()
    {
        return $this->container['base_item_position'];
    }

    /**
     * Sets base_item_position.
     *
     * @param string|null $base_item_position
     *
     * @return $this
     */
    public function setBaseItemPosition($base_item_position)
    {
        $this->container['base_item_position'] = $base_item_position;
        return $this;
    }

    /**
     * Gets current_page_item.
     *
     * @return int|null
     */
    public function getCurrentPageItem()
    {
        return $this->container['current_page_item'];
    }

    /**
     * Sets current_page_item.
     *
     * @param int|null $current_page_item
     *
     * @return $this
     */
    public function setCurrentPageItem($current_page_item)
    {
        $this->container['current_page_item'] = $current_page_item;
        return $this;
    }

    /**
     * Gets data_display_format.
     *
     * @return string|null
     */
    public function getDataDisplayFormat()
    {
        return $this->container['data_display_format'];
    }

    /**
     * Sets data_display_format.
     *
     * @param string|null $data_display_format
     *
     * @return $this
     */
    public function setDataDisplayFormat($data_display_format)
    {
        $this->container['data_display_format'] = $data_display_format;
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
     * Gets drag_to_column.
     *
     * @return bool|null
     */
    public function getDragToColumn()
    {
        return $this->container['drag_to_column'];
    }

    /**
     * Sets drag_to_column.
     *
     * @param bool|null $drag_to_column
     *
     * @return $this
     */
    public function setDragToColumn($drag_to_column)
    {
        $this->container['drag_to_column'] = $drag_to_column;
        return $this;
    }

    /**
     * Gets drag_to_data.
     *
     * @return bool|null
     */
    public function getDragToData()
    {
        return $this->container['drag_to_data'];
    }

    /**
     * Sets drag_to_data.
     *
     * @param bool|null $drag_to_data
     *
     * @return $this
     */
    public function setDragToData($drag_to_data)
    {
        $this->container['drag_to_data'] = $drag_to_data;
        return $this;
    }

    /**
     * Gets drag_to_hide.
     *
     * @return bool|null
     */
    public function getDragToHide()
    {
        return $this->container['drag_to_hide'];
    }

    /**
     * Sets drag_to_hide.
     *
     * @param bool|null $drag_to_hide
     *
     * @return $this
     */
    public function setDragToHide($drag_to_hide)
    {
        $this->container['drag_to_hide'] = $drag_to_hide;
        return $this;
    }

    /**
     * Gets drag_to_page.
     *
     * @return bool|null
     */
    public function getDragToPage()
    {
        return $this->container['drag_to_page'];
    }

    /**
     * Sets drag_to_page.
     *
     * @param bool|null $drag_to_page
     *
     * @return $this
     */
    public function setDragToPage($drag_to_page)
    {
        $this->container['drag_to_page'] = $drag_to_page;
        return $this;
    }

    /**
     * Gets drag_to_row.
     *
     * @return bool|null
     */
    public function getDragToRow()
    {
        return $this->container['drag_to_row'];
    }

    /**
     * Sets drag_to_row.
     *
     * @param bool|null $drag_to_row
     *
     * @return $this
     */
    public function setDragToRow($drag_to_row)
    {
        $this->container['drag_to_row'] = $drag_to_row;
        return $this;
    }

    /**
     * Gets function.
     *
     * @return string|null
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function.
     *
     * @param string|null $function
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;
        return $this;
    }

    /**
     * Gets insert_blank_row.
     *
     * @return bool|null
     */
    public function getInsertBlankRow()
    {
        return $this->container['insert_blank_row'];
    }

    /**
     * Sets insert_blank_row.
     *
     * @param bool|null $insert_blank_row
     *
     * @return $this
     */
    public function setInsertBlankRow($insert_blank_row)
    {
        $this->container['insert_blank_row'] = $insert_blank_row;
        return $this;
    }

    /**
     * Gets is_ascend_show.
     *
     * @return bool|null
     */
    public function getIsAscendShow()
    {
        return $this->container['is_ascend_show'];
    }

    /**
     * Sets is_ascend_show.
     *
     * @param bool|null $is_ascend_show
     *
     * @return $this
     */
    public function setIsAscendShow($is_ascend_show)
    {
        $this->container['is_ascend_show'] = $is_ascend_show;
        return $this;
    }

    /**
     * Gets is_ascend_sort.
     *
     * @return bool|null
     */
    public function getIsAscendSort()
    {
        return $this->container['is_ascend_sort'];
    }

    /**
     * Sets is_ascend_sort.
     *
     * @param bool|null $is_ascend_sort
     *
     * @return $this
     */
    public function setIsAscendSort($is_ascend_sort)
    {
        $this->container['is_ascend_sort'] = $is_ascend_sort;
        return $this;
    }

    /**
     * Gets is_auto_show.
     *
     * @return bool|null
     */
    public function getIsAutoShow()
    {
        return $this->container['is_auto_show'];
    }

    /**
     * Sets is_auto_show.
     *
     * @param bool|null $is_auto_show
     *
     * @return $this
     */
    public function setIsAutoShow($is_auto_show)
    {
        $this->container['is_auto_show'] = $is_auto_show;
        return $this;
    }

    /**
     * Gets is_auto_sort.
     *
     * @return bool|null
     */
    public function getIsAutoSort()
    {
        return $this->container['is_auto_sort'];
    }

    /**
     * Sets is_auto_sort.
     *
     * @param bool|null $is_auto_sort
     *
     * @return $this
     */
    public function setIsAutoSort($is_auto_sort)
    {
        $this->container['is_auto_sort'] = $is_auto_sort;
        return $this;
    }

    /**
     * Gets is_auto_subtotals.
     *
     * @return bool|null
     */
    public function getIsAutoSubtotals()
    {
        return $this->container['is_auto_subtotals'];
    }

    /**
     * Sets is_auto_subtotals.
     *
     * @param bool|null $is_auto_subtotals
     *
     * @return $this
     */
    public function setIsAutoSubtotals($is_auto_subtotals)
    {
        $this->container['is_auto_subtotals'] = $is_auto_subtotals;
        return $this;
    }

    /**
     * Gets is_calculated_field.
     *
     * @return bool|null
     */
    public function getIsCalculatedField()
    {
        return $this->container['is_calculated_field'];
    }

    /**
     * Sets is_calculated_field.
     *
     * @param bool|null $is_calculated_field
     *
     * @return $this
     */
    public function setIsCalculatedField($is_calculated_field)
    {
        $this->container['is_calculated_field'] = $is_calculated_field;
        return $this;
    }

    /**
     * Gets is_include_new_items_in_filter.
     *
     * @return bool|null
     */
    public function getIsIncludeNewItemsInFilter()
    {
        return $this->container['is_include_new_items_in_filter'];
    }

    /**
     * Sets is_include_new_items_in_filter.
     *
     * @param bool|null $is_include_new_items_in_filter
     *
     * @return $this
     */
    public function setIsIncludeNewItemsInFilter($is_include_new_items_in_filter)
    {
        $this->container['is_include_new_items_in_filter'] = $is_include_new_items_in_filter;
        return $this;
    }

    /**
     * Gets is_insert_page_breaks_between_items.
     *
     * @return bool|null
     */
    public function getIsInsertPageBreaksBetweenItems()
    {
        return $this->container['is_insert_page_breaks_between_items'];
    }

    /**
     * Sets is_insert_page_breaks_between_items.
     *
     * @param bool|null $is_insert_page_breaks_between_items
     *
     * @return $this
     */
    public function setIsInsertPageBreaksBetweenItems($is_insert_page_breaks_between_items)
    {
        $this->container['is_insert_page_breaks_between_items'] = $is_insert_page_breaks_between_items;
        return $this;
    }

    /**
     * Gets is_multiple_item_selection_allowed.
     *
     * @return bool|null
     */
    public function getIsMultipleItemSelectionAllowed()
    {
        return $this->container['is_multiple_item_selection_allowed'];
    }

    /**
     * Sets is_multiple_item_selection_allowed.
     *
     * @param bool|null $is_multiple_item_selection_allowed
     *
     * @return $this
     */
    public function setIsMultipleItemSelectionAllowed($is_multiple_item_selection_allowed)
    {
        $this->container['is_multiple_item_selection_allowed'] = $is_multiple_item_selection_allowed;
        return $this;
    }

    /**
     * Gets is_repeat_item_labels.
     *
     * @return bool|null
     */
    public function getIsRepeatItemLabels()
    {
        return $this->container['is_repeat_item_labels'];
    }

    /**
     * Sets is_repeat_item_labels.
     *
     * @param bool|null $is_repeat_item_labels
     *
     * @return $this
     */
    public function setIsRepeatItemLabels($is_repeat_item_labels)
    {
        $this->container['is_repeat_item_labels'] = $is_repeat_item_labels;
        return $this;
    }

    /**
     * Gets item_count.
     *
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->container['item_count'];
    }

    /**
     * Sets item_count.
     *
     * @param int|null $item_count
     *
     * @return $this
     */
    public function setItemCount($item_count)
    {
        $this->container['item_count'] = $item_count;
        return $this;
    }

    /**
     * Gets items.
     *
     * @return string[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param string[]|null $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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
     * Gets number.
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number.
     *
     * @param int|null $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
     * Gets number_format.
     *
     * @return string|null
     */
    public function getNumberFormat()
    {
        return $this->container['number_format'];
    }

    /**
     * Sets number_format.
     *
     * @param string|null $number_format
     *
     * @return $this
     */
    public function setNumberFormat($number_format)
    {
        $this->container['number_format'] = $number_format;
        return $this;
    }

    /**
     * Gets original_items.
     *
     * @return string[]|null
     */
    public function getOriginalItems()
    {
        return $this->container['original_items'];
    }

    /**
     * Sets original_items.
     *
     * @param string[]|null $original_items
     *
     * @return $this
     */
    public function setOriginalItems($original_items)
    {
        $this->container['original_items'] = $original_items;
        return $this;
    }

    /**
     * Gets pivot_items.
     *
     * @return \Aspose\Cells\Cloud\Model\PivotItem[]|null
     */
    public function getPivotItems()
    {
        return $this->container['pivot_items'];
    }

    /**
     * Sets pivot_items.
     *
     * @param \Aspose\Cells\Cloud\Model\PivotItem[]|null $pivot_items
     *
     * @return $this
     */
    public function setPivotItems($pivot_items)
    {
        $this->container['pivot_items'] = $pivot_items;
        return $this;
    }

    /**
     * Gets position.
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position.
     *
     * @param int|null $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
     * Gets show_all_items.
     *
     * @return bool|null
     */
    public function getShowAllItems()
    {
        return $this->container['show_all_items'];
    }

    /**
     * Sets show_all_items.
     *
     * @param bool|null $show_all_items
     *
     * @return $this
     */
    public function setShowAllItems($show_all_items)
    {
        $this->container['show_all_items'] = $show_all_items;
        return $this;
    }

    /**
     * Gets show_compact.
     *
     * @return bool|null
     */
    public function getShowCompact()
    {
        return $this->container['show_compact'];
    }

    /**
     * Sets show_compact.
     *
     * @param bool|null $show_compact
     *
     * @return $this
     */
    public function setShowCompact($show_compact)
    {
        $this->container['show_compact'] = $show_compact;
        return $this;
    }

    /**
     * Gets show_in_outline_form.
     *
     * @return bool|null
     */
    public function getShowInOutlineForm()
    {
        return $this->container['show_in_outline_form'];
    }

    /**
     * Sets show_in_outline_form.
     *
     * @param bool|null $show_in_outline_form
     *
     * @return $this
     */
    public function setShowInOutlineForm($show_in_outline_form)
    {
        $this->container['show_in_outline_form'] = $show_in_outline_form;
        return $this;
    }

    /**
     * Gets show_subtotal_at_top.
     *
     * @return bool|null
     */
    public function getShowSubtotalAtTop()
    {
        return $this->container['show_subtotal_at_top'];
    }

    /**
     * Sets show_subtotal_at_top.
     *
     * @param bool|null $show_subtotal_at_top
     *
     * @return $this
     */
    public function setShowSubtotalAtTop($show_subtotal_at_top)
    {
        $this->container['show_subtotal_at_top'] = $show_subtotal_at_top;
        return $this;
    }
}
