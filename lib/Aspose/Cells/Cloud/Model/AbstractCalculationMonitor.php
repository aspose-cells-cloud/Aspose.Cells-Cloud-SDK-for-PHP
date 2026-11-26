<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AbstractCalculationMonitor.php">
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

class AbstractCalculationMonitor
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AbstractCalculationMonitor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'original_value' => 'object',
        'value_changed' => 'bool',
        'calculated_value' => 'object',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'original_value' => null,
        'value_changed' => null,
        'calculated_value' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'original_value' => 'OriginalValue',
        'value_changed' => 'ValueChanged',
        'calculated_value' => 'CalculatedValue',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'original_value' => 'setOriginalValue',
        'value_changed' => 'setValueChanged',
        'calculated_value' => 'setCalculatedValue',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'original_value' => 'getOriginalValue',
        'value_changed' => 'getValueChanged',
        'calculated_value' => 'getCalculatedValue',
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
        $this->container['original_value'] = isset($data['original_value']) ? $data['original_value'] : null;
        $this->container['value_changed'] = isset($data['value_changed']) ? $data['value_changed'] : null;
        $this->container['calculated_value'] = isset($data['calculated_value']) ? $data['calculated_value'] : null;
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
     * Gets original_value.
     *
     * @return object|null
     */
    public function getOriginalValue()
    {
        return $this->container['original_value'];
    }

    /**
     * Sets original_value.
     *
     * @param object|null $original_value
     *
     * @return $this
     */
    public function setOriginalValue($original_value)
    {
        $this->container['original_value'] = $original_value;
        return $this;
    }

    /**
     * Gets value_changed.
     *
     * @return bool|null
     */
    public function getValueChanged()
    {
        return $this->container['value_changed'];
    }

    /**
     * Sets value_changed.
     *
     * @param bool|null $value_changed
     *
     * @return $this
     */
    public function setValueChanged($value_changed)
    {
        $this->container['value_changed'] = $value_changed;
        return $this;
    }

    /**
     * Gets calculated_value.
     *
     * @return object|null
     */
    public function getCalculatedValue()
    {
        return $this->container['calculated_value'];
    }

    /**
     * Sets calculated_value.
     *
     * @param object|null $calculated_value
     *
     * @return $this
     */
    public function setCalculatedValue($calculated_value)
    {
        $this->container['calculated_value'] = $calculated_value;
        return $this;
    }
}
