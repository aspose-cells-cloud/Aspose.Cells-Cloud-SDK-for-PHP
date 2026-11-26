<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SplitTextOptions.php">
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

class SplitTextOptions extends BaseOperateOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SplitTextOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'file_info' => '\\Aspose\\Cells\\Cloud\\Model\\FileInfo',
        'worksheet' => 'string',
        'range' => 'string',
        'split_delimiters_type' => 'string',
        'custom_delimiter' => 'string',
        'keep_delimiters_in_resulting_cells' => 'bool',
        'keep_delimiters_position' => 'string',
        'how_to_split' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'data_source' => null,
        'file_info' => null,
        'worksheet' => null,
        'range' => null,
        'split_delimiters_type' => null,
        'custom_delimiter' => null,
        'keep_delimiters_in_resulting_cells' => null,
        'keep_delimiters_position' => null,
        'how_to_split' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'name' => 'Name',
        'data_source' => 'DataSource',
        'file_info' => 'FileInfo',
        'worksheet' => 'Worksheet',
        'range' => 'Range',
        'split_delimiters_type' => 'SplitDelimitersType',
        'custom_delimiter' => 'CustomDelimiter',
        'keep_delimiters_in_resulting_cells' => 'KeepDelimitersInResultingCells',
        'keep_delimiters_position' => 'KeepDelimitersPosition',
        'how_to_split' => 'HowToSplit',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'name' => 'setName',
        'data_source' => 'setDataSource',
        'file_info' => 'setFileInfo',
        'worksheet' => 'setWorksheet',
        'range' => 'setRange',
        'split_delimiters_type' => 'setSplitDelimitersType',
        'custom_delimiter' => 'setCustomDelimiter',
        'keep_delimiters_in_resulting_cells' => 'setKeepDelimitersInResultingCells',
        'keep_delimiters_position' => 'setKeepDelimitersPosition',
        'how_to_split' => 'setHowToSplit',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'name' => 'getName',
        'data_source' => 'getDataSource',
        'file_info' => 'getFileInfo',
        'worksheet' => 'getWorksheet',
        'range' => 'getRange',
        'split_delimiters_type' => 'getSplitDelimitersType',
        'custom_delimiter' => 'getCustomDelimiter',
        'keep_delimiters_in_resulting_cells' => 'getKeepDelimitersInResultingCells',
        'keep_delimiters_position' => 'getKeepDelimitersPosition',
        'how_to_split' => 'getHowToSplit',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['worksheet'] = isset($data['worksheet']) ? $data['worksheet'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['split_delimiters_type'] = isset($data['split_delimiters_type']) ? $data['split_delimiters_type'] : null;
        $this->container['custom_delimiter'] = isset($data['custom_delimiter']) ? $data['custom_delimiter'] : null;
        $this->container['keep_delimiters_in_resulting_cells'] = isset($data['keep_delimiters_in_resulting_cells']) ? $data['keep_delimiters_in_resulting_cells'] : null;
        $this->container['keep_delimiters_position'] = isset($data['keep_delimiters_position']) ? $data['keep_delimiters_position'] : null;
        $this->container['how_to_split'] = isset($data['how_to_split']) ? $data['how_to_split'] : null;
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
     * Gets range.
     *
     * @return string|null
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range.
     *
     * @param string|null $range
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;
        return $this;
    }

    /**
     * Gets split_delimiters_type.
     *
     * @return string|null
     */
    public function getSplitDelimitersType()
    {
        return $this->container['split_delimiters_type'];
    }

    /**
     * Sets split_delimiters_type.
     *
     * @param string|null $split_delimiters_type
     *
     * @return $this
     */
    public function setSplitDelimitersType($split_delimiters_type)
    {
        $this->container['split_delimiters_type'] = $split_delimiters_type;
        return $this;
    }

    /**
     * Gets custom_delimiter.
     *
     * @return string|null
     */
    public function getCustomDelimiter()
    {
        return $this->container['custom_delimiter'];
    }

    /**
     * Sets custom_delimiter.
     *
     * @param string|null $custom_delimiter
     *
     * @return $this
     */
    public function setCustomDelimiter($custom_delimiter)
    {
        $this->container['custom_delimiter'] = $custom_delimiter;
        return $this;
    }

    /**
     * Gets keep_delimiters_in_resulting_cells.
     *
     * @return bool|null
     */
    public function getKeepDelimitersInResultingCells()
    {
        return $this->container['keep_delimiters_in_resulting_cells'];
    }

    /**
     * Sets keep_delimiters_in_resulting_cells.
     *
     * @param bool|null $keep_delimiters_in_resulting_cells
     *
     * @return $this
     */
    public function setKeepDelimitersInResultingCells($keep_delimiters_in_resulting_cells)
    {
        $this->container['keep_delimiters_in_resulting_cells'] = $keep_delimiters_in_resulting_cells;
        return $this;
    }

    /**
     * Gets keep_delimiters_position.
     *
     * @return string|null
     */
    public function getKeepDelimitersPosition()
    {
        return $this->container['keep_delimiters_position'];
    }

    /**
     * Sets keep_delimiters_position.
     *
     * @param string|null $keep_delimiters_position
     *
     * @return $this
     */
    public function setKeepDelimitersPosition($keep_delimiters_position)
    {
        $this->container['keep_delimiters_position'] = $keep_delimiters_position;
        return $this;
    }

    /**
     * Gets how_to_split.
     *
     * @return string|null
     */
    public function getHowToSplit()
    {
        return $this->container['how_to_split'];
    }

    /**
     * Sets how_to_split.
     *
     * @param string|null $how_to_split
     *
     * @return $this
     */
    public function setHowToSplit($how_to_split)
    {
        $this->container['how_to_split'] = $how_to_split;
        return $this;
    }
}
