<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UnpivotColumn.php">
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

class UnpivotColumn extends AppliedOperate
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnpivotColumn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unpivot_column_names' => 'string[]',
        'column_map_name' => 'string',
        'value_map_name' => 'string',
        'applied_operate_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unpivot_column_names' => null,
        'column_map_name' => null,
        'value_map_name' => null,
        'applied_operate_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'unpivot_column_names' => 'UnpivotColumnNames',
        'column_map_name' => 'ColumnMapName',
        'value_map_name' => 'ValueMapName',
        'applied_operate_type' => 'AppliedOperateType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'unpivot_column_names' => 'setUnpivotColumnNames',
        'column_map_name' => 'setColumnMapName',
        'value_map_name' => 'setValueMapName',
        'applied_operate_type' => 'setAppliedOperateType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'unpivot_column_names' => 'getUnpivotColumnNames',
        'column_map_name' => 'getColumnMapName',
        'value_map_name' => 'getValueMapName',
        'applied_operate_type' => 'getAppliedOperateType',
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
        $this->container['unpivot_column_names'] = isset($data['unpivot_column_names']) ? $data['unpivot_column_names'] : null;
        $this->container['column_map_name'] = isset($data['column_map_name']) ? $data['column_map_name'] : null;
        $this->container['value_map_name'] = isset($data['value_map_name']) ? $data['value_map_name'] : null;
        $this->container['applied_operate_type'] = isset($data['applied_operate_type']) ? $data['applied_operate_type'] : null;
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
     * Gets unpivot_column_names.
     *
     * @return string[]|null
     */
    public function getUnpivotColumnNames()
    {
        return $this->container['unpivot_column_names'];
    }

    /**
     * Sets unpivot_column_names.
     *
     * @param string[]|null $unpivot_column_names
     *
     * @return $this
     */
    public function setUnpivotColumnNames($unpivot_column_names)
    {
        $this->container['unpivot_column_names'] = $unpivot_column_names;
        return $this;
    }

    /**
     * Gets column_map_name.
     *
     * @return string|null
     */
    public function getColumnMapName()
    {
        return $this->container['column_map_name'];
    }

    /**
     * Sets column_map_name.
     *
     * @param string|null $column_map_name
     *
     * @return $this
     */
    public function setColumnMapName($column_map_name)
    {
        $this->container['column_map_name'] = $column_map_name;
        return $this;
    }

    /**
     * Gets value_map_name.
     *
     * @return string|null
     */
    public function getValueMapName()
    {
        return $this->container['value_map_name'];
    }

    /**
     * Sets value_map_name.
     *
     * @param string|null $value_map_name
     *
     * @return $this
     */
    public function setValueMapName($value_map_name)
    {
        $this->container['value_map_name'] = $value_map_name;
        return $this;
    }

    /**
     * Gets applied_operate_type.
     *
     * @return string|null
     */
    public function getAppliedOperateType()
    {
        return $this->container['applied_operate_type'];
    }

    /**
     * Sets applied_operate_type.
     *
     * @param string|null $applied_operate_type
     *
     * @return $this
     */
    public function setAppliedOperateType($applied_operate_type)
    {
        $this->container['applied_operate_type'] = $applied_operate_type;
        return $this;
    }
}
