<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ChartOperateParameter.php">
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

class ChartOperateParameter extends OperateParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChartOperateParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart_index' => 'int',
        'chart_type' => 'string',
        'upper_left_row' => 'int',
        'upper_left_column' => 'int',
        'lower_right_row' => 'int',
        'lower_right_column' => 'int',
        'area' => 'string',
        'is_vertical' => 'bool',
        'category_data' => 'string',
        'is_auto_get_serial_name' => 'bool',
        'title' => 'string',
        'operate_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chart_index' => 'int32',
        'chart_type' => null,
        'upper_left_row' => 'int32',
        'upper_left_column' => 'int32',
        'lower_right_row' => 'int32',
        'lower_right_column' => 'int32',
        'area' => null,
        'is_vertical' => null,
        'category_data' => null,
        'is_auto_get_serial_name' => null,
        'title' => null,
        'operate_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'chart_index' => 'ChartIndex',
        'chart_type' => 'ChartType',
        'upper_left_row' => 'UpperLeftRow',
        'upper_left_column' => 'UpperLeftColumn',
        'lower_right_row' => 'LowerRightRow',
        'lower_right_column' => 'LowerRightColumn',
        'area' => 'Area',
        'is_vertical' => 'IsVertical',
        'category_data' => 'CategoryData',
        'is_auto_get_serial_name' => 'IsAutoGetSerialName',
        'title' => 'Title',
        'operate_type' => 'OperateType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'chart_index' => 'setChartIndex',
        'chart_type' => 'setChartType',
        'upper_left_row' => 'setUpperLeftRow',
        'upper_left_column' => 'setUpperLeftColumn',
        'lower_right_row' => 'setLowerRightRow',
        'lower_right_column' => 'setLowerRightColumn',
        'area' => 'setArea',
        'is_vertical' => 'setIsVertical',
        'category_data' => 'setCategoryData',
        'is_auto_get_serial_name' => 'setIsAutoGetSerialName',
        'title' => 'setTitle',
        'operate_type' => 'setOperateType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'chart_index' => 'getChartIndex',
        'chart_type' => 'getChartType',
        'upper_left_row' => 'getUpperLeftRow',
        'upper_left_column' => 'getUpperLeftColumn',
        'lower_right_row' => 'getLowerRightRow',
        'lower_right_column' => 'getLowerRightColumn',
        'area' => 'getArea',
        'is_vertical' => 'getIsVertical',
        'category_data' => 'getCategoryData',
        'is_auto_get_serial_name' => 'getIsAutoGetSerialName',
        'title' => 'getTitle',
        'operate_type' => 'getOperateType',
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
        $this->container['chart_index'] = isset($data['chart_index']) ? $data['chart_index'] : null;
        $this->container['chart_type'] = isset($data['chart_type']) ? $data['chart_type'] : null;
        $this->container['upper_left_row'] = isset($data['upper_left_row']) ? $data['upper_left_row'] : null;
        $this->container['upper_left_column'] = isset($data['upper_left_column']) ? $data['upper_left_column'] : null;
        $this->container['lower_right_row'] = isset($data['lower_right_row']) ? $data['lower_right_row'] : null;
        $this->container['lower_right_column'] = isset($data['lower_right_column']) ? $data['lower_right_column'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['is_vertical'] = isset($data['is_vertical']) ? $data['is_vertical'] : null;
        $this->container['category_data'] = isset($data['category_data']) ? $data['category_data'] : null;
        $this->container['is_auto_get_serial_name'] = isset($data['is_auto_get_serial_name']) ? $data['is_auto_get_serial_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['operate_type'] = isset($data['operate_type']) ? $data['operate_type'] : null;
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
     * Gets chart_index.
     *
     * @return int|null
     */
    public function getChartIndex()
    {
        return $this->container['chart_index'];
    }

    /**
     * Sets chart_index.
     *
     * @param int|null $chart_index
     *
     * @return $this
     */
    public function setChartIndex($chart_index)
    {
        $this->container['chart_index'] = $chart_index;
        return $this;
    }

    /**
     * Gets chart_type.
     *
     * @return string|null
     */
    public function getChartType()
    {
        return $this->container['chart_type'];
    }

    /**
     * Sets chart_type.
     *
     * @param string|null $chart_type
     *
     * @return $this
     */
    public function setChartType($chart_type)
    {
        $this->container['chart_type'] = $chart_type;
        return $this;
    }

    /**
     * Gets upper_left_row.
     *
     * @return int|null
     */
    public function getUpperLeftRow()
    {
        return $this->container['upper_left_row'];
    }

    /**
     * Sets upper_left_row.
     *
     * @param int|null $upper_left_row
     *
     * @return $this
     */
    public function setUpperLeftRow($upper_left_row)
    {
        $this->container['upper_left_row'] = $upper_left_row;
        return $this;
    }

    /**
     * Gets upper_left_column.
     *
     * @return int|null
     */
    public function getUpperLeftColumn()
    {
        return $this->container['upper_left_column'];
    }

    /**
     * Sets upper_left_column.
     *
     * @param int|null $upper_left_column
     *
     * @return $this
     */
    public function setUpperLeftColumn($upper_left_column)
    {
        $this->container['upper_left_column'] = $upper_left_column;
        return $this;
    }

    /**
     * Gets lower_right_row.
     *
     * @return int|null
     */
    public function getLowerRightRow()
    {
        return $this->container['lower_right_row'];
    }

    /**
     * Sets lower_right_row.
     *
     * @param int|null $lower_right_row
     *
     * @return $this
     */
    public function setLowerRightRow($lower_right_row)
    {
        $this->container['lower_right_row'] = $lower_right_row;
        return $this;
    }

    /**
     * Gets lower_right_column.
     *
     * @return int|null
     */
    public function getLowerRightColumn()
    {
        return $this->container['lower_right_column'];
    }

    /**
     * Sets lower_right_column.
     *
     * @param int|null $lower_right_column
     *
     * @return $this
     */
    public function setLowerRightColumn($lower_right_column)
    {
        $this->container['lower_right_column'] = $lower_right_column;
        return $this;
    }

    /**
     * Gets area.
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area.
     *
     * @param string|null $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
     * Gets is_vertical.
     *
     * @return bool|null
     */
    public function getIsVertical()
    {
        return $this->container['is_vertical'];
    }

    /**
     * Sets is_vertical.
     *
     * @param bool|null $is_vertical
     *
     * @return $this
     */
    public function setIsVertical($is_vertical)
    {
        $this->container['is_vertical'] = $is_vertical;
        return $this;
    }

    /**
     * Gets category_data.
     *
     * @return string|null
     */
    public function getCategoryData()
    {
        return $this->container['category_data'];
    }

    /**
     * Sets category_data.
     *
     * @param string|null $category_data
     *
     * @return $this
     */
    public function setCategoryData($category_data)
    {
        $this->container['category_data'] = $category_data;
        return $this;
    }

    /**
     * Gets is_auto_get_serial_name.
     *
     * @return bool|null
     */
    public function getIsAutoGetSerialName()
    {
        return $this->container['is_auto_get_serial_name'];
    }

    /**
     * Sets is_auto_get_serial_name.
     *
     * @param bool|null $is_auto_get_serial_name
     *
     * @return $this
     */
    public function setIsAutoGetSerialName($is_auto_get_serial_name)
    {
        $this->container['is_auto_get_serial_name'] = $is_auto_get_serial_name;
        return $this;
    }

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string|null $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
     * Gets operate_type.
     *
     * @return string|null
     */
    public function getOperateType()
    {
        return $this->container['operate_type'];
    }

    /**
     * Sets operate_type.
     *
     * @param string|null $operate_type
     *
     * @return $this
     */
    public function setOperateType($operate_type)
    {
        $this->container['operate_type'] = $operate_type;
        return $this;
    }
}
