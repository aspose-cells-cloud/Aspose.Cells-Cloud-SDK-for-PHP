<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListObject.php">
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

class ListObject extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_filter' => '\\Aspose\\Cells\\Cloud\\Model\\AutoFilter',
        'display_name' => 'string',
        'start_column' => 'int',
        'start_row' => 'int',
        'end_column' => 'int',
        'end_row' => 'int',
        'list_columns' => '\\Aspose\\Cells\\Cloud\\Model\\ListColumn[]',
        'show_header_row' => 'bool',
        'show_table_style_column_stripes' => 'bool',
        'show_table_style_first_column' => 'bool',
        'show_table_style_last_column' => 'bool',
        'show_table_style_row_stripes' => 'bool',
        'show_totals' => 'bool',
        'table_style_name' => 'string',
        'table_style_type' => 'string',
        'data_range' => '\\Aspose\\Cells\\Cloud\\Model\\Range',
        'data_source_type' => 'string',
        'comment' => 'string',
        'xml_map' => '\\Aspose\\Cells\\Cloud\\Model\\XmlMap',
        'alternative_text' => 'string',
        'alternative_description' => 'string',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_filter' => null,
        'display_name' => null,
        'start_column' => 'int32',
        'start_row' => 'int32',
        'end_column' => 'int32',
        'end_row' => 'int32',
        'list_columns' => null,
        'show_header_row' => null,
        'show_table_style_column_stripes' => null,
        'show_table_style_first_column' => null,
        'show_table_style_last_column' => null,
        'show_table_style_row_stripes' => null,
        'show_totals' => null,
        'table_style_name' => null,
        'table_style_type' => null,
        'data_range' => null,
        'data_source_type' => null,
        'comment' => null,
        'xml_map' => null,
        'alternative_text' => null,
        'alternative_description' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'auto_filter' => 'AutoFilter',
        'display_name' => 'DisplayName',
        'start_column' => 'StartColumn',
        'start_row' => 'StartRow',
        'end_column' => 'EndColumn',
        'end_row' => 'EndRow',
        'list_columns' => 'ListColumns',
        'show_header_row' => 'ShowHeaderRow',
        'show_table_style_column_stripes' => 'ShowTableStyleColumnStripes',
        'show_table_style_first_column' => 'ShowTableStyleFirstColumn',
        'show_table_style_last_column' => 'ShowTableStyleLastColumn',
        'show_table_style_row_stripes' => 'ShowTableStyleRowStripes',
        'show_totals' => 'ShowTotals',
        'table_style_name' => 'TableStyleName',
        'table_style_type' => 'TableStyleType',
        'data_range' => 'DataRange',
        'data_source_type' => 'DataSourceType',
        'comment' => 'Comment',
        'xml_map' => 'XmlMap',
        'alternative_text' => 'AlternativeText',
        'alternative_description' => 'AlternativeDescription',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'auto_filter' => 'setAutoFilter',
        'display_name' => 'setDisplayName',
        'start_column' => 'setStartColumn',
        'start_row' => 'setStartRow',
        'end_column' => 'setEndColumn',
        'end_row' => 'setEndRow',
        'list_columns' => 'setListColumns',
        'show_header_row' => 'setShowHeaderRow',
        'show_table_style_column_stripes' => 'setShowTableStyleColumnStripes',
        'show_table_style_first_column' => 'setShowTableStyleFirstColumn',
        'show_table_style_last_column' => 'setShowTableStyleLastColumn',
        'show_table_style_row_stripes' => 'setShowTableStyleRowStripes',
        'show_totals' => 'setShowTotals',
        'table_style_name' => 'setTableStyleName',
        'table_style_type' => 'setTableStyleType',
        'data_range' => 'setDataRange',
        'data_source_type' => 'setDataSourceType',
        'comment' => 'setComment',
        'xml_map' => 'setXmlMap',
        'alternative_text' => 'setAlternativeText',
        'alternative_description' => 'setAlternativeDescription',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'auto_filter' => 'getAutoFilter',
        'display_name' => 'getDisplayName',
        'start_column' => 'getStartColumn',
        'start_row' => 'getStartRow',
        'end_column' => 'getEndColumn',
        'end_row' => 'getEndRow',
        'list_columns' => 'getListColumns',
        'show_header_row' => 'getShowHeaderRow',
        'show_table_style_column_stripes' => 'getShowTableStyleColumnStripes',
        'show_table_style_first_column' => 'getShowTableStyleFirstColumn',
        'show_table_style_last_column' => 'getShowTableStyleLastColumn',
        'show_table_style_row_stripes' => 'getShowTableStyleRowStripes',
        'show_totals' => 'getShowTotals',
        'table_style_name' => 'getTableStyleName',
        'table_style_type' => 'getTableStyleType',
        'data_range' => 'getDataRange',
        'data_source_type' => 'getDataSourceType',
        'comment' => 'getComment',
        'xml_map' => 'getXmlMap',
        'alternative_text' => 'getAlternativeText',
        'alternative_description' => 'getAlternativeDescription',
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
        $this->container['auto_filter'] = isset($data['auto_filter']) ? $data['auto_filter'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['start_column'] = isset($data['start_column']) ? $data['start_column'] : null;
        $this->container['start_row'] = isset($data['start_row']) ? $data['start_row'] : null;
        $this->container['end_column'] = isset($data['end_column']) ? $data['end_column'] : null;
        $this->container['end_row'] = isset($data['end_row']) ? $data['end_row'] : null;
        $this->container['list_columns'] = isset($data['list_columns']) ? $data['list_columns'] : null;
        $this->container['show_header_row'] = isset($data['show_header_row']) ? $data['show_header_row'] : null;
        $this->container['show_table_style_column_stripes'] = isset($data['show_table_style_column_stripes']) ? $data['show_table_style_column_stripes'] : null;
        $this->container['show_table_style_first_column'] = isset($data['show_table_style_first_column']) ? $data['show_table_style_first_column'] : null;
        $this->container['show_table_style_last_column'] = isset($data['show_table_style_last_column']) ? $data['show_table_style_last_column'] : null;
        $this->container['show_table_style_row_stripes'] = isset($data['show_table_style_row_stripes']) ? $data['show_table_style_row_stripes'] : null;
        $this->container['show_totals'] = isset($data['show_totals']) ? $data['show_totals'] : null;
        $this->container['table_style_name'] = isset($data['table_style_name']) ? $data['table_style_name'] : null;
        $this->container['table_style_type'] = isset($data['table_style_type']) ? $data['table_style_type'] : null;
        $this->container['data_range'] = isset($data['data_range']) ? $data['data_range'] : null;
        $this->container['data_source_type'] = isset($data['data_source_type']) ? $data['data_source_type'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['xml_map'] = isset($data['xml_map']) ? $data['xml_map'] : null;
        $this->container['alternative_text'] = isset($data['alternative_text']) ? $data['alternative_text'] : null;
        $this->container['alternative_description'] = isset($data['alternative_description']) ? $data['alternative_description'] : null;
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
     * Gets auto_filter.
     *
     * @return \Aspose\Cells\Cloud\Model\AutoFilter|null
     */
    public function getAutoFilter()
    {
        return $this->container['auto_filter'];
    }

    /**
     * Sets auto_filter.
     *
     * @param \Aspose\Cells\Cloud\Model\AutoFilter|null $auto_filter
     *
     * @return $this
     */
    public function setAutoFilter($auto_filter)
    {
        $this->container['auto_filter'] = $auto_filter;
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
     * Gets start_column.
     *
     * @return int|null
     */
    public function getStartColumn()
    {
        return $this->container['start_column'];
    }

    /**
     * Sets start_column.
     *
     * @param int|null $start_column
     *
     * @return $this
     */
    public function setStartColumn($start_column)
    {
        $this->container['start_column'] = $start_column;
        return $this;
    }

    /**
     * Gets start_row.
     *
     * @return int|null
     */
    public function getStartRow()
    {
        return $this->container['start_row'];
    }

    /**
     * Sets start_row.
     *
     * @param int|null $start_row
     *
     * @return $this
     */
    public function setStartRow($start_row)
    {
        $this->container['start_row'] = $start_row;
        return $this;
    }

    /**
     * Gets end_column.
     *
     * @return int|null
     */
    public function getEndColumn()
    {
        return $this->container['end_column'];
    }

    /**
     * Sets end_column.
     *
     * @param int|null $end_column
     *
     * @return $this
     */
    public function setEndColumn($end_column)
    {
        $this->container['end_column'] = $end_column;
        return $this;
    }

    /**
     * Gets end_row.
     *
     * @return int|null
     */
    public function getEndRow()
    {
        return $this->container['end_row'];
    }

    /**
     * Sets end_row.
     *
     * @param int|null $end_row
     *
     * @return $this
     */
    public function setEndRow($end_row)
    {
        $this->container['end_row'] = $end_row;
        return $this;
    }

    /**
     * Gets list_columns.
     *
     * @return \Aspose\Cells\Cloud\Model\ListColumn[]|null
     */
    public function getListColumns()
    {
        return $this->container['list_columns'];
    }

    /**
     * Sets list_columns.
     *
     * @param \Aspose\Cells\Cloud\Model\ListColumn[]|null $list_columns
     *
     * @return $this
     */
    public function setListColumns($list_columns)
    {
        $this->container['list_columns'] = $list_columns;
        return $this;
    }

    /**
     * Gets show_header_row.
     *
     * @return bool|null
     */
    public function getShowHeaderRow()
    {
        return $this->container['show_header_row'];
    }

    /**
     * Sets show_header_row.
     *
     * @param bool|null $show_header_row
     *
     * @return $this
     */
    public function setShowHeaderRow($show_header_row)
    {
        $this->container['show_header_row'] = $show_header_row;
        return $this;
    }

    /**
     * Gets show_table_style_column_stripes.
     *
     * @return bool|null
     */
    public function getShowTableStyleColumnStripes()
    {
        return $this->container['show_table_style_column_stripes'];
    }

    /**
     * Sets show_table_style_column_stripes.
     *
     * @param bool|null $show_table_style_column_stripes
     *
     * @return $this
     */
    public function setShowTableStyleColumnStripes($show_table_style_column_stripes)
    {
        $this->container['show_table_style_column_stripes'] = $show_table_style_column_stripes;
        return $this;
    }

    /**
     * Gets show_table_style_first_column.
     *
     * @return bool|null
     */
    public function getShowTableStyleFirstColumn()
    {
        return $this->container['show_table_style_first_column'];
    }

    /**
     * Sets show_table_style_first_column.
     *
     * @param bool|null $show_table_style_first_column
     *
     * @return $this
     */
    public function setShowTableStyleFirstColumn($show_table_style_first_column)
    {
        $this->container['show_table_style_first_column'] = $show_table_style_first_column;
        return $this;
    }

    /**
     * Gets show_table_style_last_column.
     *
     * @return bool|null
     */
    public function getShowTableStyleLastColumn()
    {
        return $this->container['show_table_style_last_column'];
    }

    /**
     * Sets show_table_style_last_column.
     *
     * @param bool|null $show_table_style_last_column
     *
     * @return $this
     */
    public function setShowTableStyleLastColumn($show_table_style_last_column)
    {
        $this->container['show_table_style_last_column'] = $show_table_style_last_column;
        return $this;
    }

    /**
     * Gets show_table_style_row_stripes.
     *
     * @return bool|null
     */
    public function getShowTableStyleRowStripes()
    {
        return $this->container['show_table_style_row_stripes'];
    }

    /**
     * Sets show_table_style_row_stripes.
     *
     * @param bool|null $show_table_style_row_stripes
     *
     * @return $this
     */
    public function setShowTableStyleRowStripes($show_table_style_row_stripes)
    {
        $this->container['show_table_style_row_stripes'] = $show_table_style_row_stripes;
        return $this;
    }

    /**
     * Gets show_totals.
     *
     * @return bool|null
     */
    public function getShowTotals()
    {
        return $this->container['show_totals'];
    }

    /**
     * Sets show_totals.
     *
     * @param bool|null $show_totals
     *
     * @return $this
     */
    public function setShowTotals($show_totals)
    {
        $this->container['show_totals'] = $show_totals;
        return $this;
    }

    /**
     * Gets table_style_name.
     *
     * @return string|null
     */
    public function getTableStyleName()
    {
        return $this->container['table_style_name'];
    }

    /**
     * Sets table_style_name.
     *
     * @param string|null $table_style_name
     *
     * @return $this
     */
    public function setTableStyleName($table_style_name)
    {
        $this->container['table_style_name'] = $table_style_name;
        return $this;
    }

    /**
     * Gets table_style_type.
     *
     * @return string|null
     */
    public function getTableStyleType()
    {
        return $this->container['table_style_type'];
    }

    /**
     * Sets table_style_type.
     *
     * @param string|null $table_style_type
     *
     * @return $this
     */
    public function setTableStyleType($table_style_type)
    {
        $this->container['table_style_type'] = $table_style_type;
        return $this;
    }

    /**
     * Gets data_range.
     *
     * @return \Aspose\Cells\Cloud\Model\Range|null
     */
    public function getDataRange()
    {
        return $this->container['data_range'];
    }

    /**
     * Sets data_range.
     *
     * @param \Aspose\Cells\Cloud\Model\Range|null $data_range
     *
     * @return $this
     */
    public function setDataRange($data_range)
    {
        $this->container['data_range'] = $data_range;
        return $this;
    }

    /**
     * Gets data_source_type.
     *
     * @return string|null
     */
    public function getDataSourceType()
    {
        return $this->container['data_source_type'];
    }

    /**
     * Sets data_source_type.
     *
     * @param string|null $data_source_type
     *
     * @return $this
     */
    public function setDataSourceType($data_source_type)
    {
        $this->container['data_source_type'] = $data_source_type;
        return $this;
    }

    /**
     * Gets comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment.
     *
     * @param string|null $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
     * Gets xml_map.
     *
     * @return \Aspose\Cells\Cloud\Model\XmlMap|null
     */
    public function getXmlMap()
    {
        return $this->container['xml_map'];
    }

    /**
     * Sets xml_map.
     *
     * @param \Aspose\Cells\Cloud\Model\XmlMap|null $xml_map
     *
     * @return $this
     */
    public function setXmlMap($xml_map)
    {
        $this->container['xml_map'] = $xml_map;
        return $this;
    }

    /**
     * Gets alternative_text.
     *
     * @return string|null
     */
    public function getAlternativeText()
    {
        return $this->container['alternative_text'];
    }

    /**
     * Sets alternative_text.
     *
     * @param string|null $alternative_text
     *
     * @return $this
     */
    public function setAlternativeText($alternative_text)
    {
        $this->container['alternative_text'] = $alternative_text;
        return $this;
    }

    /**
     * Gets alternative_description.
     *
     * @return string|null
     */
    public function getAlternativeDescription()
    {
        return $this->container['alternative_description'];
    }

    /**
     * Sets alternative_description.
     *
     * @param string|null $alternative_description
     *
     * @return $this
     */
    public function setAlternativeDescription($alternative_description)
    {
        $this->container['alternative_description'] = $alternative_description;
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
