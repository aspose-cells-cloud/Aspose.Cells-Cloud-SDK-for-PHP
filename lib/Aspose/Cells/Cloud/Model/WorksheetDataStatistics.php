<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorksheetDataStatistics.php">
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

class WorksheetDataStatistics
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorksheetDataStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'charts_count' => 'int',
        'tables_count' => 'int',
        'pivot_tables_count' => 'int',
        'shapes_count' => 'int',
        'hyperlinks_count' => 'int',
        'query_tables_count' => 'int',
        'cells_count' => 'int',
        'cells_count_in_table' => 'int',
        'cells_count_is_formula' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'charts_count' => 'int32',
        'tables_count' => 'int32',
        'pivot_tables_count' => 'int32',
        'shapes_count' => 'int32',
        'hyperlinks_count' => 'int32',
        'query_tables_count' => 'int32',
        'cells_count' => 'int32',
        'cells_count_in_table' => 'int32',
        'cells_count_is_formula' => 'int32',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'name' => 'Name',
        'charts_count' => 'ChartsCount',
        'tables_count' => 'TablesCount',
        'pivot_tables_count' => 'PivotTablesCount',
        'shapes_count' => 'ShapesCount',
        'hyperlinks_count' => 'HyperlinksCount',
        'query_tables_count' => 'QueryTablesCount',
        'cells_count' => 'CellsCount',
        'cells_count_in_table' => 'CellsCountInTable',
        'cells_count_is_formula' => 'CellsCountIsFormula',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'name' => 'setName',
        'charts_count' => 'setChartsCount',
        'tables_count' => 'setTablesCount',
        'pivot_tables_count' => 'setPivotTablesCount',
        'shapes_count' => 'setShapesCount',
        'hyperlinks_count' => 'setHyperlinksCount',
        'query_tables_count' => 'setQueryTablesCount',
        'cells_count' => 'setCellsCount',
        'cells_count_in_table' => 'setCellsCountInTable',
        'cells_count_is_formula' => 'setCellsCountIsFormula',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'name' => 'getName',
        'charts_count' => 'getChartsCount',
        'tables_count' => 'getTablesCount',
        'pivot_tables_count' => 'getPivotTablesCount',
        'shapes_count' => 'getShapesCount',
        'hyperlinks_count' => 'getHyperlinksCount',
        'query_tables_count' => 'getQueryTablesCount',
        'cells_count' => 'getCellsCount',
        'cells_count_in_table' => 'getCellsCountInTable',
        'cells_count_is_formula' => 'getCellsCountIsFormula',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['charts_count'] = isset($data['charts_count']) ? $data['charts_count'] : null;
        $this->container['tables_count'] = isset($data['tables_count']) ? $data['tables_count'] : null;
        $this->container['pivot_tables_count'] = isset($data['pivot_tables_count']) ? $data['pivot_tables_count'] : null;
        $this->container['shapes_count'] = isset($data['shapes_count']) ? $data['shapes_count'] : null;
        $this->container['hyperlinks_count'] = isset($data['hyperlinks_count']) ? $data['hyperlinks_count'] : null;
        $this->container['query_tables_count'] = isset($data['query_tables_count']) ? $data['query_tables_count'] : null;
        $this->container['cells_count'] = isset($data['cells_count']) ? $data['cells_count'] : null;
        $this->container['cells_count_in_table'] = isset($data['cells_count_in_table']) ? $data['cells_count_in_table'] : null;
        $this->container['cells_count_is_formula'] = isset($data['cells_count_is_formula']) ? $data['cells_count_is_formula'] : null;
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
     * Gets charts_count.
     *
     * @return int|null
     */
    public function getChartsCount()
    {
        return $this->container['charts_count'];
    }

    /**
     * Sets charts_count.
     *
     * @param int|null $charts_count
     *
     * @return $this
     */
    public function setChartsCount($charts_count)
    {
        $this->container['charts_count'] = $charts_count;
        return $this;
    }

    /**
     * Gets tables_count.
     *
     * @return int|null
     */
    public function getTablesCount()
    {
        return $this->container['tables_count'];
    }

    /**
     * Sets tables_count.
     *
     * @param int|null $tables_count
     *
     * @return $this
     */
    public function setTablesCount($tables_count)
    {
        $this->container['tables_count'] = $tables_count;
        return $this;
    }

    /**
     * Gets pivot_tables_count.
     *
     * @return int|null
     */
    public function getPivotTablesCount()
    {
        return $this->container['pivot_tables_count'];
    }

    /**
     * Sets pivot_tables_count.
     *
     * @param int|null $pivot_tables_count
     *
     * @return $this
     */
    public function setPivotTablesCount($pivot_tables_count)
    {
        $this->container['pivot_tables_count'] = $pivot_tables_count;
        return $this;
    }

    /**
     * Gets shapes_count.
     *
     * @return int|null
     */
    public function getShapesCount()
    {
        return $this->container['shapes_count'];
    }

    /**
     * Sets shapes_count.
     *
     * @param int|null $shapes_count
     *
     * @return $this
     */
    public function setShapesCount($shapes_count)
    {
        $this->container['shapes_count'] = $shapes_count;
        return $this;
    }

    /**
     * Gets hyperlinks_count.
     *
     * @return int|null
     */
    public function getHyperlinksCount()
    {
        return $this->container['hyperlinks_count'];
    }

    /**
     * Sets hyperlinks_count.
     *
     * @param int|null $hyperlinks_count
     *
     * @return $this
     */
    public function setHyperlinksCount($hyperlinks_count)
    {
        $this->container['hyperlinks_count'] = $hyperlinks_count;
        return $this;
    }

    /**
     * Gets query_tables_count.
     *
     * @return int|null
     */
    public function getQueryTablesCount()
    {
        return $this->container['query_tables_count'];
    }

    /**
     * Sets query_tables_count.
     *
     * @param int|null $query_tables_count
     *
     * @return $this
     */
    public function setQueryTablesCount($query_tables_count)
    {
        $this->container['query_tables_count'] = $query_tables_count;
        return $this;
    }

    /**
     * Gets cells_count.
     *
     * @return int|null
     */
    public function getCellsCount()
    {
        return $this->container['cells_count'];
    }

    /**
     * Sets cells_count.
     *
     * @param int|null $cells_count
     *
     * @return $this
     */
    public function setCellsCount($cells_count)
    {
        $this->container['cells_count'] = $cells_count;
        return $this;
    }

    /**
     * Gets cells_count_in_table.
     *
     * @return int|null
     */
    public function getCellsCountInTable()
    {
        return $this->container['cells_count_in_table'];
    }

    /**
     * Sets cells_count_in_table.
     *
     * @param int|null $cells_count_in_table
     *
     * @return $this
     */
    public function setCellsCountInTable($cells_count_in_table)
    {
        $this->container['cells_count_in_table'] = $cells_count_in_table;
        return $this;
    }

    /**
     * Gets cells_count_is_formula.
     *
     * @return int|null
     */
    public function getCellsCountIsFormula()
    {
        return $this->container['cells_count_is_formula'];
    }

    /**
     * Sets cells_count_is_formula.
     *
     * @param int|null $cells_count_is_formula
     *
     * @return $this
     */
    public function setCellsCountIsFormula($cells_count_is_formula)
    {
        $this->container['cells_count_is_formula'] = $cells_count_is_formula;
        return $this;
    }
}
