<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GlobalizationSettings.php">
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

class GlobalizationSettings
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GlobalizationSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart_settings' => '\\Aspose\\Cells\\Cloud\\Model\\ChartGlobalizationSettings',
        'pivot_settings' => '\\Aspose\\Cells\\Cloud\\Model\\PivotGlobalizationSettings',
        'list_separator' => 'string',
        'row_separator_of_formula_array' => 'string',
        'column_separator_of_formula_array' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chart_settings' => null,
        'pivot_settings' => null,
        'list_separator' => null,
        'row_separator_of_formula_array' => null,
        'column_separator_of_formula_array' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'chart_settings' => 'ChartSettings',
        'pivot_settings' => 'PivotSettings',
        'list_separator' => 'ListSeparator',
        'row_separator_of_formula_array' => 'RowSeparatorOfFormulaArray',
        'column_separator_of_formula_array' => 'ColumnSeparatorOfFormulaArray',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'chart_settings' => 'setChartSettings',
        'pivot_settings' => 'setPivotSettings',
        'list_separator' => 'setListSeparator',
        'row_separator_of_formula_array' => 'setRowSeparatorOfFormulaArray',
        'column_separator_of_formula_array' => 'setColumnSeparatorOfFormulaArray',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'chart_settings' => 'getChartSettings',
        'pivot_settings' => 'getPivotSettings',
        'list_separator' => 'getListSeparator',
        'row_separator_of_formula_array' => 'getRowSeparatorOfFormulaArray',
        'column_separator_of_formula_array' => 'getColumnSeparatorOfFormulaArray',
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
        $this->container['chart_settings'] = isset($data['chart_settings']) ? $data['chart_settings'] : null;
        $this->container['pivot_settings'] = isset($data['pivot_settings']) ? $data['pivot_settings'] : null;
        $this->container['list_separator'] = isset($data['list_separator']) ? $data['list_separator'] : null;
        $this->container['row_separator_of_formula_array'] = isset($data['row_separator_of_formula_array']) ? $data['row_separator_of_formula_array'] : null;
        $this->container['column_separator_of_formula_array'] = isset($data['column_separator_of_formula_array']) ? $data['column_separator_of_formula_array'] : null;
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
     * Gets chart_settings.
     *
     * @return \Aspose\Cells\Cloud\Model\ChartGlobalizationSettings|null
     */
    public function getChartSettings()
    {
        return $this->container['chart_settings'];
    }

    /**
     * Sets chart_settings.
     *
     * @param \Aspose\Cells\Cloud\Model\ChartGlobalizationSettings|null $chart_settings
     *
     * @return $this
     */
    public function setChartSettings($chart_settings)
    {
        $this->container['chart_settings'] = $chart_settings;
        return $this;
    }

    /**
     * Gets pivot_settings.
     *
     * @return \Aspose\Cells\Cloud\Model\PivotGlobalizationSettings|null
     */
    public function getPivotSettings()
    {
        return $this->container['pivot_settings'];
    }

    /**
     * Sets pivot_settings.
     *
     * @param \Aspose\Cells\Cloud\Model\PivotGlobalizationSettings|null $pivot_settings
     *
     * @return $this
     */
    public function setPivotSettings($pivot_settings)
    {
        $this->container['pivot_settings'] = $pivot_settings;
        return $this;
    }

    /**
     * Gets list_separator.
     *
     * @return string|null
     */
    public function getListSeparator()
    {
        return $this->container['list_separator'];
    }

    /**
     * Sets list_separator.
     *
     * @param string|null $list_separator
     *
     * @return $this
     */
    public function setListSeparator($list_separator)
    {
        $this->container['list_separator'] = $list_separator;
        return $this;
    }

    /**
     * Gets row_separator_of_formula_array.
     *
     * @return string|null
     */
    public function getRowSeparatorOfFormulaArray()
    {
        return $this->container['row_separator_of_formula_array'];
    }

    /**
     * Sets row_separator_of_formula_array.
     *
     * @param string|null $row_separator_of_formula_array
     *
     * @return $this
     */
    public function setRowSeparatorOfFormulaArray($row_separator_of_formula_array)
    {
        $this->container['row_separator_of_formula_array'] = $row_separator_of_formula_array;
        return $this;
    }

    /**
     * Gets column_separator_of_formula_array.
     *
     * @return string|null
     */
    public function getColumnSeparatorOfFormulaArray()
    {
        return $this->container['column_separator_of_formula_array'];
    }

    /**
     * Sets column_separator_of_formula_array.
     *
     * @param string|null $column_separator_of_formula_array
     *
     * @return $this
     */
    public function setColumnSeparatorOfFormulaArray($column_separator_of_formula_array)
    {
        $this->container['column_separator_of_formula_array'] = $column_separator_of_formula_array;
        return $this;
    }
}
