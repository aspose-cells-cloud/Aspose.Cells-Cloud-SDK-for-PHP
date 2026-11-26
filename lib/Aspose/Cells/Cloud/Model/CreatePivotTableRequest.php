<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CreatePivotTableRequest.php">
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

class CreatePivotTableRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreatePivotTableRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'source_data' => 'string',
        'dest_cell_name' => 'string',
        'use_same_source' => 'bool',
        'pivot_field_rows' => 'int[]',
        'pivot_field_columns' => 'int[]',
        'pivot_field_data' => 'int[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'source_data' => null,
        'dest_cell_name' => null,
        'use_same_source' => null,
        'pivot_field_rows' => null,
        'pivot_field_columns' => null,
        'pivot_field_data' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'name' => 'Name',
        'source_data' => 'SourceData',
        'dest_cell_name' => 'DestCellName',
        'use_same_source' => 'UseSameSource',
        'pivot_field_rows' => 'PivotFieldRows',
        'pivot_field_columns' => 'PivotFieldColumns',
        'pivot_field_data' => 'PivotFieldData',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'name' => 'setName',
        'source_data' => 'setSourceData',
        'dest_cell_name' => 'setDestCellName',
        'use_same_source' => 'setUseSameSource',
        'pivot_field_rows' => 'setPivotFieldRows',
        'pivot_field_columns' => 'setPivotFieldColumns',
        'pivot_field_data' => 'setPivotFieldData',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'name' => 'getName',
        'source_data' => 'getSourceData',
        'dest_cell_name' => 'getDestCellName',
        'use_same_source' => 'getUseSameSource',
        'pivot_field_rows' => 'getPivotFieldRows',
        'pivot_field_columns' => 'getPivotFieldColumns',
        'pivot_field_data' => 'getPivotFieldData',
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
        $this->container['source_data'] = isset($data['source_data']) ? $data['source_data'] : null;
        $this->container['dest_cell_name'] = isset($data['dest_cell_name']) ? $data['dest_cell_name'] : null;
        $this->container['use_same_source'] = isset($data['use_same_source']) ? $data['use_same_source'] : null;
        $this->container['pivot_field_rows'] = isset($data['pivot_field_rows']) ? $data['pivot_field_rows'] : null;
        $this->container['pivot_field_columns'] = isset($data['pivot_field_columns']) ? $data['pivot_field_columns'] : null;
        $this->container['pivot_field_data'] = isset($data['pivot_field_data']) ? $data['pivot_field_data'] : null;
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
     * Gets source_data.
     *
     * @return string|null
     */
    public function getSourceData()
    {
        return $this->container['source_data'];
    }

    /**
     * Sets source_data.
     *
     * @param string|null $source_data
     *
     * @return $this
     */
    public function setSourceData($source_data)
    {
        $this->container['source_data'] = $source_data;
        return $this;
    }

    /**
     * Gets dest_cell_name.
     *
     * @return string|null
     */
    public function getDestCellName()
    {
        return $this->container['dest_cell_name'];
    }

    /**
     * Sets dest_cell_name.
     *
     * @param string|null $dest_cell_name
     *
     * @return $this
     */
    public function setDestCellName($dest_cell_name)
    {
        $this->container['dest_cell_name'] = $dest_cell_name;
        return $this;
    }

    /**
     * Gets use_same_source.
     *
     * @return bool|null
     */
    public function getUseSameSource()
    {
        return $this->container['use_same_source'];
    }

    /**
     * Sets use_same_source.
     *
     * @param bool|null $use_same_source
     *
     * @return $this
     */
    public function setUseSameSource($use_same_source)
    {
        $this->container['use_same_source'] = $use_same_source;
        return $this;
    }

    /**
     * Gets pivot_field_rows.
     *
     * @return int[]|null
     */
    public function getPivotFieldRows()
    {
        return $this->container['pivot_field_rows'];
    }

    /**
     * Sets pivot_field_rows.
     *
     * @param int[]|null $pivot_field_rows
     *
     * @return $this
     */
    public function setPivotFieldRows($pivot_field_rows)
    {
        $this->container['pivot_field_rows'] = $pivot_field_rows;
        return $this;
    }

    /**
     * Gets pivot_field_columns.
     *
     * @return int[]|null
     */
    public function getPivotFieldColumns()
    {
        return $this->container['pivot_field_columns'];
    }

    /**
     * Sets pivot_field_columns.
     *
     * @param int[]|null $pivot_field_columns
     *
     * @return $this
     */
    public function setPivotFieldColumns($pivot_field_columns)
    {
        $this->container['pivot_field_columns'] = $pivot_field_columns;
        return $this;
    }

    /**
     * Gets pivot_field_data.
     *
     * @return int[]|null
     */
    public function getPivotFieldData()
    {
        return $this->container['pivot_field_data'];
    }

    /**
     * Sets pivot_field_data.
     *
     * @param int[]|null $pivot_field_data
     *
     * @return $this
     */
    public function setPivotFieldData($pivot_field_data)
    {
        $this->container['pivot_field_data'] = $pivot_field_data;
        return $this;
    }
}
