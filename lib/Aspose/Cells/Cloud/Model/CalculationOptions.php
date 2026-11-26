<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CalculationOptions.php">
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

class CalculationOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CalculationOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'calc_stack_size' => 'int',
        'ignore_error' => 'bool',
        'precision_strategy' => 'string',
        'recursive' => 'bool',
        'custom_engine' => '\\Aspose\\Cells\\Cloud\\Model\\AbstractCalculationEngine',
        'calculation_monitor' => '\\Aspose\\Cells\\Cloud\\Model\\AbstractCalculationMonitor',
        'linked_data_sources' => '\\Aspose\\Cells\\Cloud\\Model\\Workbook[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'calc_stack_size' => 'int32',
        'ignore_error' => null,
        'precision_strategy' => null,
        'recursive' => null,
        'custom_engine' => null,
        'calculation_monitor' => null,
        'linked_data_sources' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'calc_stack_size' => 'CalcStackSize',
        'ignore_error' => 'IgnoreError',
        'precision_strategy' => 'PrecisionStrategy',
        'recursive' => 'Recursive',
        'custom_engine' => 'CustomEngine',
        'calculation_monitor' => 'CalculationMonitor',
        'linked_data_sources' => 'LinkedDataSources',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'calc_stack_size' => 'setCalcStackSize',
        'ignore_error' => 'setIgnoreError',
        'precision_strategy' => 'setPrecisionStrategy',
        'recursive' => 'setRecursive',
        'custom_engine' => 'setCustomEngine',
        'calculation_monitor' => 'setCalculationMonitor',
        'linked_data_sources' => 'setLinkedDataSources',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'calc_stack_size' => 'getCalcStackSize',
        'ignore_error' => 'getIgnoreError',
        'precision_strategy' => 'getPrecisionStrategy',
        'recursive' => 'getRecursive',
        'custom_engine' => 'getCustomEngine',
        'calculation_monitor' => 'getCalculationMonitor',
        'linked_data_sources' => 'getLinkedDataSources',
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
        $this->container['calc_stack_size'] = isset($data['calc_stack_size']) ? $data['calc_stack_size'] : null;
        $this->container['ignore_error'] = isset($data['ignore_error']) ? $data['ignore_error'] : null;
        $this->container['precision_strategy'] = isset($data['precision_strategy']) ? $data['precision_strategy'] : null;
        $this->container['recursive'] = isset($data['recursive']) ? $data['recursive'] : null;
        $this->container['custom_engine'] = isset($data['custom_engine']) ? $data['custom_engine'] : null;
        $this->container['calculation_monitor'] = isset($data['calculation_monitor']) ? $data['calculation_monitor'] : null;
        $this->container['linked_data_sources'] = isset($data['linked_data_sources']) ? $data['linked_data_sources'] : null;
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
     * Gets calc_stack_size.
     *
     * @return int|null
     */
    public function getCalcStackSize()
    {
        return $this->container['calc_stack_size'];
    }

    /**
     * Sets calc_stack_size.
     *
     * @param int|null $calc_stack_size
     *
     * @return $this
     */
    public function setCalcStackSize($calc_stack_size)
    {
        $this->container['calc_stack_size'] = $calc_stack_size;
        return $this;
    }

    /**
     * Gets ignore_error.
     *
     * @return bool|null
     */
    public function getIgnoreError()
    {
        return $this->container['ignore_error'];
    }

    /**
     * Sets ignore_error.
     *
     * @param bool|null $ignore_error
     *
     * @return $this
     */
    public function setIgnoreError($ignore_error)
    {
        $this->container['ignore_error'] = $ignore_error;
        return $this;
    }

    /**
     * Gets precision_strategy.
     *
     * @return string|null
     */
    public function getPrecisionStrategy()
    {
        return $this->container['precision_strategy'];
    }

    /**
     * Sets precision_strategy.
     *
     * @param string|null $precision_strategy
     *
     * @return $this
     */
    public function setPrecisionStrategy($precision_strategy)
    {
        $this->container['precision_strategy'] = $precision_strategy;
        return $this;
    }

    /**
     * Gets recursive.
     *
     * @return bool|null
     */
    public function getRecursive()
    {
        return $this->container['recursive'];
    }

    /**
     * Sets recursive.
     *
     * @param bool|null $recursive
     *
     * @return $this
     */
    public function setRecursive($recursive)
    {
        $this->container['recursive'] = $recursive;
        return $this;
    }

    /**
     * Gets custom_engine.
     *
     * @return \Aspose\Cells\Cloud\Model\AbstractCalculationEngine|null
     */
    public function getCustomEngine()
    {
        return $this->container['custom_engine'];
    }

    /**
     * Sets custom_engine.
     *
     * @param \Aspose\Cells\Cloud\Model\AbstractCalculationEngine|null $custom_engine
     *
     * @return $this
     */
    public function setCustomEngine($custom_engine)
    {
        $this->container['custom_engine'] = $custom_engine;
        return $this;
    }

    /**
     * Gets calculation_monitor.
     *
     * @return \Aspose\Cells\Cloud\Model\AbstractCalculationMonitor|null
     */
    public function getCalculationMonitor()
    {
        return $this->container['calculation_monitor'];
    }

    /**
     * Sets calculation_monitor.
     *
     * @param \Aspose\Cells\Cloud\Model\AbstractCalculationMonitor|null $calculation_monitor
     *
     * @return $this
     */
    public function setCalculationMonitor($calculation_monitor)
    {
        $this->container['calculation_monitor'] = $calculation_monitor;
        return $this;
    }

    /**
     * Gets linked_data_sources.
     *
     * @return \Aspose\Cells\Cloud\Model\Workbook[]|null
     */
    public function getLinkedDataSources()
    {
        return $this->container['linked_data_sources'];
    }

    /**
     * Sets linked_data_sources.
     *
     * @param \Aspose\Cells\Cloud\Model\Workbook[]|null $linked_data_sources
     *
     * @return $this
     */
    public function setLinkedDataSources($linked_data_sources)
    {
        $this->container['linked_data_sources'] = $linked_data_sources;
        return $this;
    }
}
