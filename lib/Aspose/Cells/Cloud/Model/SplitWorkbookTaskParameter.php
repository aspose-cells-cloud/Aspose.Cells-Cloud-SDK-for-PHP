<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SplitWorkbookTaskParameter.php">
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

class SplitWorkbookTaskParameter extends TaskParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SplitWorkbookTaskParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'destination_file_position' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'target_data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'destination_file_format' => 'string',
        'split_name_rule' => 'string',
        'vertical_resolution' => 'int',
        'horizontal_resolution' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'workbook' => null,
        'destination_file_position' => null,
        'data_source' => null,
        'target_data_source' => null,
        'destination_file_format' => null,
        'split_name_rule' => null,
        'vertical_resolution' => 'int32',
        'horizontal_resolution' => 'int32',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'workbook' => 'Workbook',
        'destination_file_position' => 'DestinationFilePosition',
        'data_source' => 'DataSource',
        'target_data_source' => 'TargetDataSource',
        'destination_file_format' => 'DestinationFileFormat',
        'split_name_rule' => 'SplitNameRule',
        'vertical_resolution' => 'VerticalResolution',
        'horizontal_resolution' => 'HorizontalResolution',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'workbook' => 'setWorkbook',
        'destination_file_position' => 'setDestinationFilePosition',
        'data_source' => 'setDataSource',
        'target_data_source' => 'setTargetDataSource',
        'destination_file_format' => 'setDestinationFileFormat',
        'split_name_rule' => 'setSplitNameRule',
        'vertical_resolution' => 'setVerticalResolution',
        'horizontal_resolution' => 'setHorizontalResolution',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'workbook' => 'getWorkbook',
        'destination_file_position' => 'getDestinationFilePosition',
        'data_source' => 'getDataSource',
        'target_data_source' => 'getTargetDataSource',
        'destination_file_format' => 'getDestinationFileFormat',
        'split_name_rule' => 'getSplitNameRule',
        'vertical_resolution' => 'getVerticalResolution',
        'horizontal_resolution' => 'getHorizontalResolution',
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
        $this->container['workbook'] = isset($data['workbook']) ? $data['workbook'] : null;
        $this->container['destination_file_position'] = isset($data['destination_file_position']) ? $data['destination_file_position'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['target_data_source'] = isset($data['target_data_source']) ? $data['target_data_source'] : null;
        $this->container['destination_file_format'] = isset($data['destination_file_format']) ? $data['destination_file_format'] : null;
        $this->container['split_name_rule'] = isset($data['split_name_rule']) ? $data['split_name_rule'] : null;
        $this->container['vertical_resolution'] = isset($data['vertical_resolution']) ? $data['vertical_resolution'] : null;
        $this->container['horizontal_resolution'] = isset($data['horizontal_resolution']) ? $data['horizontal_resolution'] : null;
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
     * Gets destination_file_position.
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource|null
     */
    public function getDestinationFilePosition()
    {
        return $this->container['destination_file_position'];
    }

    /**
     * Sets destination_file_position.
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource|null $destination_file_position
     *
     * @return $this
     */
    public function setDestinationFilePosition($destination_file_position)
    {
        $this->container['destination_file_position'] = $destination_file_position;
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
     * Gets target_data_source.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource|null
     */
    public function getTargetDataSource()
    {
        return $this->container['target_data_source'];
    }

    /**
     * Sets target_data_source.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSource|null $target_data_source
     *
     * @return $this
     */
    public function setTargetDataSource($target_data_source)
    {
        $this->container['target_data_source'] = $target_data_source;
        return $this;
    }

    /**
     * Gets destination_file_format.
     *
     * @return string|null
     */
    public function getDestinationFileFormat()
    {
        return $this->container['destination_file_format'];
    }

    /**
     * Sets destination_file_format.
     *
     * @param string|null $destination_file_format
     *
     * @return $this
     */
    public function setDestinationFileFormat($destination_file_format)
    {
        $this->container['destination_file_format'] = $destination_file_format;
        return $this;
    }

    /**
     * Gets split_name_rule.
     *
     * @return string|null
     */
    public function getSplitNameRule()
    {
        return $this->container['split_name_rule'];
    }

    /**
     * Sets split_name_rule.
     *
     * @param string|null $split_name_rule
     *
     * @return $this
     */
    public function setSplitNameRule($split_name_rule)
    {
        $this->container['split_name_rule'] = $split_name_rule;
        return $this;
    }

    /**
     * Gets vertical_resolution.
     *
     * @return int|null
     */
    public function getVerticalResolution()
    {
        return $this->container['vertical_resolution'];
    }

    /**
     * Sets vertical_resolution.
     *
     * @param int|null $vertical_resolution
     *
     * @return $this
     */
    public function setVerticalResolution($vertical_resolution)
    {
        $this->container['vertical_resolution'] = $vertical_resolution;
        return $this;
    }

    /**
     * Gets horizontal_resolution.
     *
     * @return int|null
     */
    public function getHorizontalResolution()
    {
        return $this->container['horizontal_resolution'];
    }

    /**
     * Sets horizontal_resolution.
     *
     * @param int|null $horizontal_resolution
     *
     * @return $this
     */
    public function setHorizontalResolution($horizontal_resolution)
    {
        $this->container['horizontal_resolution'] = $horizontal_resolution;
        return $this;
    }
}
