<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ExtractTextOptions.php">
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

class ExtractTextOptions extends BaseOperateOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtractTextOptions';

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
        'extract_text_type' => 'string',
        'before_text' => 'string',
        'after_text' => 'string',
        'before_position' => 'int',
        'after_position' => 'int',
        'out_position_range' => 'string',
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
        'extract_text_type' => null,
        'before_text' => null,
        'after_text' => null,
        'before_position' => 'int32',
        'after_position' => 'int32',
        'out_position_range' => null,
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
        'extract_text_type' => 'ExtractTextType',
        'before_text' => 'BeforeText',
        'after_text' => 'AfterText',
        'before_position' => 'BeforePosition',
        'after_position' => 'AfterPosition',
        'out_position_range' => 'OutPositionRange',
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
        'extract_text_type' => 'setExtractTextType',
        'before_text' => 'setBeforeText',
        'after_text' => 'setAfterText',
        'before_position' => 'setBeforePosition',
        'after_position' => 'setAfterPosition',
        'out_position_range' => 'setOutPositionRange',
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
        'extract_text_type' => 'getExtractTextType',
        'before_text' => 'getBeforeText',
        'after_text' => 'getAfterText',
        'before_position' => 'getBeforePosition',
        'after_position' => 'getAfterPosition',
        'out_position_range' => 'getOutPositionRange',
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
        $this->container['extract_text_type'] = isset($data['extract_text_type']) ? $data['extract_text_type'] : null;
        $this->container['before_text'] = isset($data['before_text']) ? $data['before_text'] : null;
        $this->container['after_text'] = isset($data['after_text']) ? $data['after_text'] : null;
        $this->container['before_position'] = isset($data['before_position']) ? $data['before_position'] : null;
        $this->container['after_position'] = isset($data['after_position']) ? $data['after_position'] : null;
        $this->container['out_position_range'] = isset($data['out_position_range']) ? $data['out_position_range'] : null;
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
     * Gets extract_text_type.
     *
     * @return string|null
     */
    public function getExtractTextType()
    {
        return $this->container['extract_text_type'];
    }

    /**
     * Sets extract_text_type.
     *
     * @param string|null $extract_text_type
     *
     * @return $this
     */
    public function setExtractTextType($extract_text_type)
    {
        $this->container['extract_text_type'] = $extract_text_type;
        return $this;
    }

    /**
     * Gets before_text.
     *
     * @return string|null
     */
    public function getBeforeText()
    {
        return $this->container['before_text'];
    }

    /**
     * Sets before_text.
     *
     * @param string|null $before_text
     *
     * @return $this
     */
    public function setBeforeText($before_text)
    {
        $this->container['before_text'] = $before_text;
        return $this;
    }

    /**
     * Gets after_text.
     *
     * @return string|null
     */
    public function getAfterText()
    {
        return $this->container['after_text'];
    }

    /**
     * Sets after_text.
     *
     * @param string|null $after_text
     *
     * @return $this
     */
    public function setAfterText($after_text)
    {
        $this->container['after_text'] = $after_text;
        return $this;
    }

    /**
     * Gets before_position.
     *
     * @return int|null
     */
    public function getBeforePosition()
    {
        return $this->container['before_position'];
    }

    /**
     * Sets before_position.
     *
     * @param int|null $before_position
     *
     * @return $this
     */
    public function setBeforePosition($before_position)
    {
        $this->container['before_position'] = $before_position;
        return $this;
    }

    /**
     * Gets after_position.
     *
     * @return int|null
     */
    public function getAfterPosition()
    {
        return $this->container['after_position'];
    }

    /**
     * Sets after_position.
     *
     * @param int|null $after_position
     *
     * @return $this
     */
    public function setAfterPosition($after_position)
    {
        $this->container['after_position'] = $after_position;
        return $this;
    }

    /**
     * Gets out_position_range.
     *
     * @return string|null
     */
    public function getOutPositionRange()
    {
        return $this->container['out_position_range'];
    }

    /**
     * Sets out_position_range.
     *
     * @param string|null $out_position_range
     *
     * @return $this
     */
    public function setOutPositionRange($out_position_range)
    {
        $this->container['out_position_range'] = $out_position_range;
        return $this;
    }
}
