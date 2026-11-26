<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Validation.php">
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

class Validation extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Validation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alert_style' => 'string',
        'area_list' => '\\Aspose\\Cells\\Cloud\\Model\\CellArea[]',
        'error_message' => 'string',
        'error_title' => 'string',
        'formula1' => 'string',
        'formula2' => 'string',
        'ignore_blank' => 'bool',
        'in_cell_drop_down' => 'bool',
        'input_message' => 'string',
        'input_title' => 'string',
        'operator' => 'string',
        'show_error' => 'bool',
        'show_input' => 'bool',
        'type' => 'string',
        'value1' => 'string',
        'value2' => 'string',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alert_style' => null,
        'area_list' => null,
        'error_message' => null,
        'error_title' => null,
        'formula1' => null,
        'formula2' => null,
        'ignore_blank' => null,
        'in_cell_drop_down' => null,
        'input_message' => null,
        'input_title' => null,
        'operator' => null,
        'show_error' => null,
        'show_input' => null,
        'type' => null,
        'value1' => null,
        'value2' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'alert_style' => 'AlertStyle',
        'area_list' => 'AreaList',
        'error_message' => 'ErrorMessage',
        'error_title' => 'ErrorTitle',
        'formula1' => 'Formula1',
        'formula2' => 'Formula2',
        'ignore_blank' => 'IgnoreBlank',
        'in_cell_drop_down' => 'InCellDropDown',
        'input_message' => 'InputMessage',
        'input_title' => 'InputTitle',
        'operator' => 'Operator',
        'show_error' => 'ShowError',
        'show_input' => 'ShowInput',
        'type' => 'Type',
        'value1' => 'Value1',
        'value2' => 'Value2',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'alert_style' => 'setAlertStyle',
        'area_list' => 'setAreaList',
        'error_message' => 'setErrorMessage',
        'error_title' => 'setErrorTitle',
        'formula1' => 'setFormula1',
        'formula2' => 'setFormula2',
        'ignore_blank' => 'setIgnoreBlank',
        'in_cell_drop_down' => 'setInCellDropDown',
        'input_message' => 'setInputMessage',
        'input_title' => 'setInputTitle',
        'operator' => 'setOperator',
        'show_error' => 'setShowError',
        'show_input' => 'setShowInput',
        'type' => 'setType',
        'value1' => 'setValue1',
        'value2' => 'setValue2',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'alert_style' => 'getAlertStyle',
        'area_list' => 'getAreaList',
        'error_message' => 'getErrorMessage',
        'error_title' => 'getErrorTitle',
        'formula1' => 'getFormula1',
        'formula2' => 'getFormula2',
        'ignore_blank' => 'getIgnoreBlank',
        'in_cell_drop_down' => 'getInCellDropDown',
        'input_message' => 'getInputMessage',
        'input_title' => 'getInputTitle',
        'operator' => 'getOperator',
        'show_error' => 'getShowError',
        'show_input' => 'getShowInput',
        'type' => 'getType',
        'value1' => 'getValue1',
        'value2' => 'getValue2',
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
        $this->container['alert_style'] = isset($data['alert_style']) ? $data['alert_style'] : null;
        $this->container['area_list'] = isset($data['area_list']) ? $data['area_list'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['error_title'] = isset($data['error_title']) ? $data['error_title'] : null;
        $this->container['formula1'] = isset($data['formula1']) ? $data['formula1'] : null;
        $this->container['formula2'] = isset($data['formula2']) ? $data['formula2'] : null;
        $this->container['ignore_blank'] = isset($data['ignore_blank']) ? $data['ignore_blank'] : null;
        $this->container['in_cell_drop_down'] = isset($data['in_cell_drop_down']) ? $data['in_cell_drop_down'] : null;
        $this->container['input_message'] = isset($data['input_message']) ? $data['input_message'] : null;
        $this->container['input_title'] = isset($data['input_title']) ? $data['input_title'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['show_error'] = isset($data['show_error']) ? $data['show_error'] : null;
        $this->container['show_input'] = isset($data['show_input']) ? $data['show_input'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value1'] = isset($data['value1']) ? $data['value1'] : null;
        $this->container['value2'] = isset($data['value2']) ? $data['value2'] : null;
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
     * Gets alert_style.
     *
     * @return string|null
     */
    public function getAlertStyle()
    {
        return $this->container['alert_style'];
    }

    /**
     * Sets alert_style.
     *
     * @param string|null $alert_style
     *
     * @return $this
     */
    public function setAlertStyle($alert_style)
    {
        $this->container['alert_style'] = $alert_style;
        return $this;
    }

    /**
     * Gets area_list.
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea[]|null
     */
    public function getAreaList()
    {
        return $this->container['area_list'];
    }

    /**
     * Sets area_list.
     *
     * @param \Aspose\Cells\Cloud\Model\CellArea[]|null $area_list
     *
     * @return $this
     */
    public function setAreaList($area_list)
    {
        $this->container['area_list'] = $area_list;
        return $this;
    }

    /**
     * Gets error_message.
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message.
     *
     * @param string|null $error_message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;
        return $this;
    }

    /**
     * Gets error_title.
     *
     * @return string|null
     */
    public function getErrorTitle()
    {
        return $this->container['error_title'];
    }

    /**
     * Sets error_title.
     *
     * @param string|null $error_title
     *
     * @return $this
     */
    public function setErrorTitle($error_title)
    {
        $this->container['error_title'] = $error_title;
        return $this;
    }

    /**
     * Gets formula1.
     *
     * @return string|null
     */
    public function getFormula1()
    {
        return $this->container['formula1'];
    }

    /**
     * Sets formula1.
     *
     * @param string|null $formula1
     *
     * @return $this
     */
    public function setFormula1($formula1)
    {
        $this->container['formula1'] = $formula1;
        return $this;
    }

    /**
     * Gets formula2.
     *
     * @return string|null
     */
    public function getFormula2()
    {
        return $this->container['formula2'];
    }

    /**
     * Sets formula2.
     *
     * @param string|null $formula2
     *
     * @return $this
     */
    public function setFormula2($formula2)
    {
        $this->container['formula2'] = $formula2;
        return $this;
    }

    /**
     * Gets ignore_blank.
     *
     * @return bool|null
     */
    public function getIgnoreBlank()
    {
        return $this->container['ignore_blank'];
    }

    /**
     * Sets ignore_blank.
     *
     * @param bool|null $ignore_blank
     *
     * @return $this
     */
    public function setIgnoreBlank($ignore_blank)
    {
        $this->container['ignore_blank'] = $ignore_blank;
        return $this;
    }

    /**
     * Gets in_cell_drop_down.
     *
     * @return bool|null
     */
    public function getInCellDropDown()
    {
        return $this->container['in_cell_drop_down'];
    }

    /**
     * Sets in_cell_drop_down.
     *
     * @param bool|null $in_cell_drop_down
     *
     * @return $this
     */
    public function setInCellDropDown($in_cell_drop_down)
    {
        $this->container['in_cell_drop_down'] = $in_cell_drop_down;
        return $this;
    }

    /**
     * Gets input_message.
     *
     * @return string|null
     */
    public function getInputMessage()
    {
        return $this->container['input_message'];
    }

    /**
     * Sets input_message.
     *
     * @param string|null $input_message
     *
     * @return $this
     */
    public function setInputMessage($input_message)
    {
        $this->container['input_message'] = $input_message;
        return $this;
    }

    /**
     * Gets input_title.
     *
     * @return string|null
     */
    public function getInputTitle()
    {
        return $this->container['input_title'];
    }

    /**
     * Sets input_title.
     *
     * @param string|null $input_title
     *
     * @return $this
     */
    public function setInputTitle($input_title)
    {
        $this->container['input_title'] = $input_title;
        return $this;
    }

    /**
     * Gets operator.
     *
     * @return string|null
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator.
     *
     * @param string|null $operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
     * Gets show_error.
     *
     * @return bool|null
     */
    public function getShowError()
    {
        return $this->container['show_error'];
    }

    /**
     * Sets show_error.
     *
     * @param bool|null $show_error
     *
     * @return $this
     */
    public function setShowError($show_error)
    {
        $this->container['show_error'] = $show_error;
        return $this;
    }

    /**
     * Gets show_input.
     *
     * @return bool|null
     */
    public function getShowInput()
    {
        return $this->container['show_input'];
    }

    /**
     * Sets show_input.
     *
     * @param bool|null $show_input
     *
     * @return $this
     */
    public function setShowInput($show_input)
    {
        $this->container['show_input'] = $show_input;
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
     * Gets value1.
     *
     * @return string|null
     */
    public function getValue1()
    {
        return $this->container['value1'];
    }

    /**
     * Sets value1.
     *
     * @param string|null $value1
     *
     * @return $this
     */
    public function setValue1($value1)
    {
        $this->container['value1'] = $value1;
        return $this;
    }

    /**
     * Gets value2.
     *
     * @return string|null
     */
    public function getValue2()
    {
        return $this->container['value2'];
    }

    /**
     * Sets value2.
     *
     * @param string|null $value2
     *
     * @return $this
     */
    public function setValue2($value2)
    {
        $this->container['value2'] = $value2;
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
