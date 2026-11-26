<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CheckExternalReferenceOptions.php">
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

class CheckExternalReferenceOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckExternalReferenceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'file_info' => '\\Aspose\\Cells\\Cloud\\Model\\FileInfo',
        'worksheet' => 'string',
        'ranged__table' => 'string',
        'chart_index' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source' => null,
        'file_info' => null,
        'worksheet' => null,
        'ranged__table' => null,
        'chart_index' => 'int32',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'data_source' => 'DataSource',
        'file_info' => 'FileInfo',
        'worksheet' => 'Worksheet',
        'ranged__table' => 'Ranged_Table',
        'chart_index' => 'ChartIndex',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'data_source' => 'setDataSource',
        'file_info' => 'setFileInfo',
        'worksheet' => 'setWorksheet',
        'ranged__table' => 'setRangedTable',
        'chart_index' => 'setChartIndex',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'data_source' => 'getDataSource',
        'file_info' => 'getFileInfo',
        'worksheet' => 'getWorksheet',
        'ranged__table' => 'getRangedTable',
        'chart_index' => 'getChartIndex',
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
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['worksheet'] = isset($data['worksheet']) ? $data['worksheet'] : null;
        $this->container['ranged__table'] = isset($data['ranged__table']) ? $data['ranged__table'] : null;
        $this->container['chart_index'] = isset($data['chart_index']) ? $data['chart_index'] : null;
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
     * Gets file_info.
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo|null
     */
    public function getFileInfo()
    {
        return $this->container['file_info'];
    }

    /**
     * Sets file_info.
     *
     * @param \Aspose\Cells\Cloud\Model\FileInfo|null $file_info
     *
     * @return $this
     */
    public function setFileInfo($file_info)
    {
        $this->container['file_info'] = $file_info;
        return $this;
    }

    /**
     * Gets worksheet.
     *
     * @return string|null
     */
    public function getWorksheet()
    {
        return $this->container['worksheet'];
    }

    /**
     * Sets worksheet.
     *
     * @param string|null $worksheet
     *
     * @return $this
     */
    public function setWorksheet($worksheet)
    {
        $this->container['worksheet'] = $worksheet;
        return $this;
    }

    /**
     * Gets ranged__table.
     *
     * @return string|null
     */
    public function getRangedTable()
    {
        return $this->container['ranged__table'];
    }

    /**
     * Sets ranged__table.
     *
     * @param string|null $ranged__table
     *
     * @return $this
     */
    public function setRangedTable($ranged__table)
    {
        $this->container['ranged__table'] = $ranged__table;
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
}
