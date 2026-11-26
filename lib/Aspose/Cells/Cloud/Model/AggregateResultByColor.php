<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AggregateResultByColor.php">
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

class AggregateResultByColor
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AggregateResultByColor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aggregate_operation' => 'string',
        'color_name' => 'string',
        'count' => 'int',
        'sum' => 'float',
        'max_value' => 'float',
        'min_value' => 'float',
        'average_value' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aggregate_operation' => null,
        'color_name' => null,
        'count' => 'int32',
        'sum' => 'float',
        'max_value' => 'float',
        'min_value' => 'float',
        'average_value' => 'float',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'aggregate_operation' => 'AggregateOperation',
        'color_name' => 'ColorName',
        'count' => 'Count',
        'sum' => 'Sum',
        'max_value' => 'MaxValue',
        'min_value' => 'MinValue',
        'average_value' => 'AverageValue',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'aggregate_operation' => 'setAggregateOperation',
        'color_name' => 'setColorName',
        'count' => 'setCount',
        'sum' => 'setSum',
        'max_value' => 'setMaxValue',
        'min_value' => 'setMinValue',
        'average_value' => 'setAverageValue',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'aggregate_operation' => 'getAggregateOperation',
        'color_name' => 'getColorName',
        'count' => 'getCount',
        'sum' => 'getSum',
        'max_value' => 'getMaxValue',
        'min_value' => 'getMinValue',
        'average_value' => 'getAverageValue',
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
        $this->container['aggregate_operation'] = isset($data['aggregate_operation']) ? $data['aggregate_operation'] : null;
        $this->container['color_name'] = isset($data['color_name']) ? $data['color_name'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['sum'] = isset($data['sum']) ? $data['sum'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['average_value'] = isset($data['average_value']) ? $data['average_value'] : null;
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
     * Gets aggregate_operation.
     *
     * @return string|null
     */
    public function getAggregateOperation()
    {
        return $this->container['aggregate_operation'];
    }

    /**
     * Sets aggregate_operation.
     *
     * @param string|null $aggregate_operation
     *
     * @return $this
     */
    public function setAggregateOperation($aggregate_operation)
    {
        $this->container['aggregate_operation'] = $aggregate_operation;
        return $this;
    }

    /**
     * Gets color_name.
     *
     * @return string|null
     */
    public function getColorName()
    {
        return $this->container['color_name'];
    }

    /**
     * Sets color_name.
     *
     * @param string|null $color_name
     *
     * @return $this
     */
    public function setColorName($color_name)
    {
        $this->container['color_name'] = $color_name;
        return $this;
    }

    /**
     * Gets count.
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count.
     *
     * @param int|null $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
     * Gets sum.
     *
     * @return float|null
     */
    public function getSum()
    {
        return $this->container['sum'];
    }

    /**
     * Sets sum.
     *
     * @param float|null $sum
     *
     * @return $this
     */
    public function setSum($sum)
    {
        $this->container['sum'] = $sum;
        return $this;
    }

    /**
     * Gets max_value.
     *
     * @return float|null
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value.
     *
     * @param float|null $max_value
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;
        return $this;
    }

    /**
     * Gets min_value.
     *
     * @return float|null
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value.
     *
     * @param float|null $min_value
     *
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;
        return $this;
    }

    /**
     * Gets average_value.
     *
     * @return float|null
     */
    public function getAverageValue()
    {
        return $this->container['average_value'];
    }

    /**
     * Sets average_value.
     *
     * @param float|null $average_value
     *
     * @return $this
     */
    public function setAverageValue($average_value)
    {
        $this->container['average_value'] = $average_value;
        return $this;
    }
}
