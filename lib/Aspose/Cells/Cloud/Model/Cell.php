<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Cell.php">
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

class Cell extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cell';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'row' => 'int',
        'column' => 'int',
        'value' => 'string',
        'type' => 'string',
        'formula' => 'string',
        'is_formula' => 'bool',
        'is_merged' => 'bool',
        'is_array_header' => 'bool',
        'is_in_array' => 'bool',
        'is_error_value' => 'bool',
        'is_in_table' => 'bool',
        'is_style_set' => 'bool',
        'html_string' => 'string',
        'style' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'worksheet' => 'string',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'row' => 'int32',
        'column' => 'int32',
        'value' => null,
        'type' => null,
        'formula' => null,
        'is_formula' => null,
        'is_merged' => null,
        'is_array_header' => null,
        'is_in_array' => null,
        'is_error_value' => null,
        'is_in_table' => null,
        'is_style_set' => null,
        'html_string' => null,
        'style' => null,
        'worksheet' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'name' => 'Name',
        'row' => 'Row',
        'column' => 'Column',
        'value' => 'Value',
        'type' => 'Type',
        'formula' => 'Formula',
        'is_formula' => 'IsFormula',
        'is_merged' => 'IsMerged',
        'is_array_header' => 'IsArrayHeader',
        'is_in_array' => 'IsInArray',
        'is_error_value' => 'IsErrorValue',
        'is_in_table' => 'IsInTable',
        'is_style_set' => 'IsStyleSet',
        'html_string' => 'HtmlString',
        'style' => 'Style',
        'worksheet' => 'Worksheet',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'name' => 'setName',
        'row' => 'setRow',
        'column' => 'setColumn',
        'value' => 'setValue',
        'type' => 'setType',
        'formula' => 'setFormula',
        'is_formula' => 'setIsFormula',
        'is_merged' => 'setIsMerged',
        'is_array_header' => 'setIsArrayHeader',
        'is_in_array' => 'setIsInArray',
        'is_error_value' => 'setIsErrorValue',
        'is_in_table' => 'setIsInTable',
        'is_style_set' => 'setIsStyleSet',
        'html_string' => 'setHtmlString',
        'style' => 'setStyle',
        'worksheet' => 'setWorksheet',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'name' => 'getName',
        'row' => 'getRow',
        'column' => 'getColumn',
        'value' => 'getValue',
        'type' => 'getType',
        'formula' => 'getFormula',
        'is_formula' => 'getIsFormula',
        'is_merged' => 'getIsMerged',
        'is_array_header' => 'getIsArrayHeader',
        'is_in_array' => 'getIsInArray',
        'is_error_value' => 'getIsErrorValue',
        'is_in_table' => 'getIsInTable',
        'is_style_set' => 'getIsStyleSet',
        'html_string' => 'getHtmlString',
        'style' => 'getStyle',
        'worksheet' => 'getWorksheet',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['formula'] = isset($data['formula']) ? $data['formula'] : null;
        $this->container['is_formula'] = isset($data['is_formula']) ? $data['is_formula'] : null;
        $this->container['is_merged'] = isset($data['is_merged']) ? $data['is_merged'] : null;
        $this->container['is_array_header'] = isset($data['is_array_header']) ? $data['is_array_header'] : null;
        $this->container['is_in_array'] = isset($data['is_in_array']) ? $data['is_in_array'] : null;
        $this->container['is_error_value'] = isset($data['is_error_value']) ? $data['is_error_value'] : null;
        $this->container['is_in_table'] = isset($data['is_in_table']) ? $data['is_in_table'] : null;
        $this->container['is_style_set'] = isset($data['is_style_set']) ? $data['is_style_set'] : null;
        $this->container['html_string'] = isset($data['html_string']) ? $data['html_string'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['worksheet'] = isset($data['worksheet']) ? $data['worksheet'] : null;
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
     * Gets row.
     *
     * @return int|null
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row.
     *
     * @param int|null $row
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;
        return $this;
    }

    /**
     * Gets column.
     *
     * @return int|null
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column.
     *
     * @param int|null $column
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;
        return $this;
    }

    /**
     * Gets value.
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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
     * Gets formula.
     *
     * @return string|null
     */
    public function getFormula()
    {
        return $this->container['formula'];
    }

    /**
     * Sets formula.
     *
     * @param string|null $formula
     *
     * @return $this
     */
    public function setFormula($formula)
    {
        $this->container['formula'] = $formula;
        return $this;
    }

    /**
     * Gets is_formula.
     *
     * @return bool|null
     */
    public function getIsFormula()
    {
        return $this->container['is_formula'];
    }

    /**
     * Sets is_formula.
     *
     * @param bool|null $is_formula
     *
     * @return $this
     */
    public function setIsFormula($is_formula)
    {
        $this->container['is_formula'] = $is_formula;
        return $this;
    }

    /**
     * Gets is_merged.
     *
     * @return bool|null
     */
    public function getIsMerged()
    {
        return $this->container['is_merged'];
    }

    /**
     * Sets is_merged.
     *
     * @param bool|null $is_merged
     *
     * @return $this
     */
    public function setIsMerged($is_merged)
    {
        $this->container['is_merged'] = $is_merged;
        return $this;
    }

    /**
     * Gets is_array_header.
     *
     * @return bool|null
     */
    public function getIsArrayHeader()
    {
        return $this->container['is_array_header'];
    }

    /**
     * Sets is_array_header.
     *
     * @param bool|null $is_array_header
     *
     * @return $this
     */
    public function setIsArrayHeader($is_array_header)
    {
        $this->container['is_array_header'] = $is_array_header;
        return $this;
    }

    /**
     * Gets is_in_array.
     *
     * @return bool|null
     */
    public function getIsInArray()
    {
        return $this->container['is_in_array'];
    }

    /**
     * Sets is_in_array.
     *
     * @param bool|null $is_in_array
     *
     * @return $this
     */
    public function setIsInArray($is_in_array)
    {
        $this->container['is_in_array'] = $is_in_array;
        return $this;
    }

    /**
     * Gets is_error_value.
     *
     * @return bool|null
     */
    public function getIsErrorValue()
    {
        return $this->container['is_error_value'];
    }

    /**
     * Sets is_error_value.
     *
     * @param bool|null $is_error_value
     *
     * @return $this
     */
    public function setIsErrorValue($is_error_value)
    {
        $this->container['is_error_value'] = $is_error_value;
        return $this;
    }

    /**
     * Gets is_in_table.
     *
     * @return bool|null
     */
    public function getIsInTable()
    {
        return $this->container['is_in_table'];
    }

    /**
     * Sets is_in_table.
     *
     * @param bool|null $is_in_table
     *
     * @return $this
     */
    public function setIsInTable($is_in_table)
    {
        $this->container['is_in_table'] = $is_in_table;
        return $this;
    }

    /**
     * Gets is_style_set.
     *
     * @return bool|null
     */
    public function getIsStyleSet()
    {
        return $this->container['is_style_set'];
    }

    /**
     * Sets is_style_set.
     *
     * @param bool|null $is_style_set
     *
     * @return $this
     */
    public function setIsStyleSet($is_style_set)
    {
        $this->container['is_style_set'] = $is_style_set;
        return $this;
    }

    /**
     * Gets html_string.
     *
     * @return string|null
     */
    public function getHtmlString()
    {
        return $this->container['html_string'];
    }

    /**
     * Sets html_string.
     *
     * @param string|null $html_string
     *
     * @return $this
     */
    public function setHtmlString($html_string)
    {
        $this->container['html_string'] = $html_string;
        return $this;
    }

    /**
     * Gets style.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;
        return $this;
    }

    /**
     * Gets worksheet.
     *
     * @return string|null
     */
    public function getWorksheet()
    {
        return $this->container['worksheet'];
    }

    /**
     * Sets worksheet.
     *
     * @param string|null $worksheet
     *
     * @return $this
     */
    public function setWorksheet($worksheet)
    {
        $this->container['worksheet'] = $worksheet;
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
