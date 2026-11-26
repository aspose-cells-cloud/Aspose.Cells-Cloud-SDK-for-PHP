<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OperateObjectPosition.php">
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

class OperateObjectPosition
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OperateObjectPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'sheet_name' => 'string',
        'chart_index' => 'int',
        'shape_index' => 'int',
        'cell_name' => 'string',
        'list_object_index' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source' => null,
        'workbook' => null,
        'sheet_name' => null,
        'chart_index' => 'int32',
        'shape_index' => 'int32',
        'cell_name' => null,
        'list_object_index' => 'int32',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'data_source' => 'DataSource',
        'workbook' => 'Workbook',
        'sheet_name' => 'SheetName',
        'chart_index' => 'ChartIndex',
        'shape_index' => 'ShapeIndex',
        'cell_name' => 'CellName',
        'list_object_index' => 'ListObjectIndex',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'data_source' => 'setDataSource',
        'workbook' => 'setWorkbook',
        'sheet_name' => 'setSheetName',
        'chart_index' => 'setChartIndex',
        'shape_index' => 'setShapeIndex',
        'cell_name' => 'setCellName',
        'list_object_index' => 'setListObjectIndex',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'data_source' => 'getDataSource',
        'workbook' => 'getWorkbook',
        'sheet_name' => 'getSheetName',
        'chart_index' => 'getChartIndex',
        'shape_index' => 'getShapeIndex',
        'cell_name' => 'getCellName',
        'list_object_index' => 'getListObjectIndex',
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
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['workbook'] = isset($data['workbook']) ? $data['workbook'] : null;
        $this->container['sheet_name'] = isset($data['sheet_name']) ? $data['sheet_name'] : null;
        $this->container['chart_index'] = isset($data['chart_index']) ? $data['chart_index'] : null;
        $this->container['shape_index'] = isset($data['shape_index']) ? $data['shape_index'] : null;
        $this->container['cell_name'] = isset($data['cell_name']) ? $data['cell_name'] : null;
        $this->container['list_object_index'] = isset($data['list_object_index']) ? $data['list_object_index'] : null;
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
     * Gets data_source.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource|null
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSource|null $data_source
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;
        return $this;
    }

    /**
     * Gets workbook.
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource|null
     */
    public function getWorkbook()
    {
        return $this->container['workbook'];
    }

    /**
     * Sets workbook.
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource|null $workbook
     *
     * @return $this
     */
    public function setWorkbook($workbook)
    {
        $this->container['workbook'] = $workbook;
        return $this;
    }

    /**
     * Gets sheet_name.
     *
     * @return string|null
     */
    public function getSheetName()
    {
        return $this->container['sheet_name'];
    }

    /**
     * Sets sheet_name.
     *
     * @param string|null $sheet_name
     *
     * @return $this
     */
    public function setSheetName($sheet_name)
    {
        $this->container['sheet_name'] = $sheet_name;
        return $this;
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
     * Gets shape_index.
     *
     * @return int|null
     */
    public function getShapeIndex()
    {
        return $this->container['shape_index'];
    }

    /**
     * Sets shape_index.
     *
     * @param int|null $shape_index
     *
     * @return $this
     */
    public function setShapeIndex($shape_index)
    {
        $this->container['shape_index'] = $shape_index;
        return $this;
    }

    /**
     * Gets cell_name.
     *
     * @return string|null
     */
    public function getCellName()
    {
        return $this->container['cell_name'];
    }

    /**
     * Sets cell_name.
     *
     * @param string|null $cell_name
     *
     * @return $this
     */
    public function setCellName($cell_name)
    {
        $this->container['cell_name'] = $cell_name;
        return $this;
    }

    /**
     * Gets list_object_index.
     *
     * @return int|null
     */
    public function getListObjectIndex()
    {
        return $this->container['list_object_index'];
    }

    /**
     * Sets list_object_index.
     *
     * @param int|null $list_object_index
     *
     * @return $this
     */
    public function setListObjectIndex($list_object_index)
    {
        $this->container['list_object_index'] = $list_object_index;
        return $this;
    }
}
