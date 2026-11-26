<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PivotFilter.php">
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

class PivotFilter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PivotFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_filter' => '\\Aspose\\Cells\\Cloud\\Model\\AutoFilter',
        'evaluation_order' => 'int',
        'field_index' => 'int',
        'filter_type' => 'string',
        'value_field_index' => 'int',
        'member_property_field_index' => 'int',
        'name' => 'string',
        'value1' => 'string',
        'value2' => 'string',
        'top10_filter' => '\\Aspose\\Cells\\Cloud\\Model\\Top10Filter',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_filter' => null,
        'evaluation_order' => 'int32',
        'field_index' => 'int32',
        'filter_type' => null,
        'value_field_index' => 'int32',
        'member_property_field_index' => 'int32',
        'name' => null,
        'value1' => null,
        'value2' => null,
        'top10_filter' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'auto_filter' => 'AutoFilter',
        'evaluation_order' => 'EvaluationOrder',
        'field_index' => 'FieldIndex',
        'filter_type' => 'FilterType',
        'value_field_index' => 'ValueFieldIndex',
        'member_property_field_index' => 'MemberPropertyFieldIndex',
        'name' => 'Name',
        'value1' => 'Value1',
        'value2' => 'Value2',
        'top10_filter' => 'Top10Filter',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'auto_filter' => 'setAutoFilter',
        'evaluation_order' => 'setEvaluationOrder',
        'field_index' => 'setFieldIndex',
        'filter_type' => 'setFilterType',
        'value_field_index' => 'setValueFieldIndex',
        'member_property_field_index' => 'setMemberPropertyFieldIndex',
        'name' => 'setName',
        'value1' => 'setValue1',
        'value2' => 'setValue2',
        'top10_filter' => 'setTop10Filter',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'auto_filter' => 'getAutoFilter',
        'evaluation_order' => 'getEvaluationOrder',
        'field_index' => 'getFieldIndex',
        'filter_type' => 'getFilterType',
        'value_field_index' => 'getValueFieldIndex',
        'member_property_field_index' => 'getMemberPropertyFieldIndex',
        'name' => 'getName',
        'value1' => 'getValue1',
        'value2' => 'getValue2',
        'top10_filter' => 'getTop10Filter',
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
        $this->container['auto_filter'] = isset($data['auto_filter']) ? $data['auto_filter'] : null;
        $this->container['evaluation_order'] = isset($data['evaluation_order']) ? $data['evaluation_order'] : null;
        $this->container['field_index'] = isset($data['field_index']) ? $data['field_index'] : null;
        $this->container['filter_type'] = isset($data['filter_type']) ? $data['filter_type'] : null;
        $this->container['value_field_index'] = isset($data['value_field_index']) ? $data['value_field_index'] : null;
        $this->container['member_property_field_index'] = isset($data['member_property_field_index']) ? $data['member_property_field_index'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value1'] = isset($data['value1']) ? $data['value1'] : null;
        $this->container['value2'] = isset($data['value2']) ? $data['value2'] : null;
        $this->container['top10_filter'] = isset($data['top10_filter']) ? $data['top10_filter'] : null;
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
     * Gets evaluation_order.
     *
     * @return int|null
     */
    public function getEvaluationOrder()
    {
        return $this->container['evaluation_order'];
    }

    /**
     * Sets evaluation_order.
     *
     * @param int|null $evaluation_order
     *
     * @return $this
     */
    public function setEvaluationOrder($evaluation_order)
    {
        $this->container['evaluation_order'] = $evaluation_order;
        return $this;
    }

    /**
     * Gets field_index.
     *
     * @return int|null
     */
    public function getFieldIndex()
    {
        return $this->container['field_index'];
    }

    /**
     * Sets field_index.
     *
     * @param int|null $field_index
     *
     * @return $this
     */
    public function setFieldIndex($field_index)
    {
        $this->container['field_index'] = $field_index;
        return $this;
    }

    /**
     * Gets filter_type.
     *
     * @return string|null
     */
    public function getFilterType()
    {
        return $this->container['filter_type'];
    }

    /**
     * Sets filter_type.
     *
     * @param string|null $filter_type
     *
     * @return $this
     */
    public function setFilterType($filter_type)
    {
        $this->container['filter_type'] = $filter_type;
        return $this;
    }

    /**
     * Gets value_field_index.
     *
     * @return int|null
     */
    public function getValueFieldIndex()
    {
        return $this->container['value_field_index'];
    }

    /**
     * Sets value_field_index.
     *
     * @param int|null $value_field_index
     *
     * @return $this
     */
    public function setValueFieldIndex($value_field_index)
    {
        $this->container['value_field_index'] = $value_field_index;
        return $this;
    }

    /**
     * Gets member_property_field_index.
     *
     * @return int|null
     */
    public function getMemberPropertyFieldIndex()
    {
        return $this->container['member_property_field_index'];
    }

    /**
     * Sets member_property_field_index.
     *
     * @param int|null $member_property_field_index
     *
     * @return $this
     */
    public function setMemberPropertyFieldIndex($member_property_field_index)
    {
        $this->container['member_property_field_index'] = $member_property_field_index;
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
     * Gets top10_filter.
     *
     * @return \Aspose\Cells\Cloud\Model\Top10Filter|null
     */
    public function getTop10Filter()
    {
        return $this->container['top10_filter'];
    }

    /**
     * Sets top10_filter.
     *
     * @param \Aspose\Cells\Cloud\Model\Top10Filter|null $top10_filter
     *
     * @return $this
     */
    public function setTop10Filter($top10_filter)
    {
        $this->container['top10_filter'] = $top10_filter;
        return $this;
    }
}
