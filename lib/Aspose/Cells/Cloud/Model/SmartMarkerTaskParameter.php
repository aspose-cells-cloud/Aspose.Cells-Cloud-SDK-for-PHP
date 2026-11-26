<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SmartMarkerTaskParameter.php">
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

class SmartMarkerTaskParameter extends TaskParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmartMarkerTaskParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'source_workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'destination_workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'xml_file' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'target_data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'xml_file_data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'source_workbook' => null,
        'destination_workbook' => null,
        'xml_file' => null,
        'data_source' => null,
        'target_data_source' => null,
        'xml_file_data_source' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'source_workbook' => 'SourceWorkbook',
        'destination_workbook' => 'DestinationWorkbook',
        'xml_file' => 'xmlFile',
        'data_source' => 'DataSource',
        'target_data_source' => 'TargetDataSource',
        'xml_file_data_source' => 'XMLFileDataSource',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'source_workbook' => 'setSourceWorkbook',
        'destination_workbook' => 'setDestinationWorkbook',
        'xml_file' => 'setXmlFile',
        'data_source' => 'setDataSource',
        'target_data_source' => 'setTargetDataSource',
        'xml_file_data_source' => 'setXmlFileDataSource',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'source_workbook' => 'getSourceWorkbook',
        'destination_workbook' => 'getDestinationWorkbook',
        'xml_file' => 'getXmlFile',
        'data_source' => 'getDataSource',
        'target_data_source' => 'getTargetDataSource',
        'xml_file_data_source' => 'getXmlFileDataSource',
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
        $this->container['source_workbook'] = isset($data['source_workbook']) ? $data['source_workbook'] : null;
        $this->container['destination_workbook'] = isset($data['destination_workbook']) ? $data['destination_workbook'] : null;
        $this->container['xml_file'] = isset($data['xml_file']) ? $data['xml_file'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['target_data_source'] = isset($data['target_data_source']) ? $data['target_data_source'] : null;
        $this->container['xml_file_data_source'] = isset($data['xml_file_data_source']) ? $data['xml_file_data_source'] : null;
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
     * Gets source_workbook.
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource|null
     */
    public function getSourceWorkbook()
    {
        return $this->container['source_workbook'];
    }

    /**
     * Sets source_workbook.
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource|null $source_workbook
     *
     * @return $this
     */
    public function setSourceWorkbook($source_workbook)
    {
        $this->container['source_workbook'] = $source_workbook;
        return $this;
    }

    /**
     * Gets destination_workbook.
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource|null
     */
    public function getDestinationWorkbook()
    {
        return $this->container['destination_workbook'];
    }

    /**
     * Sets destination_workbook.
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource|null $destination_workbook
     *
     * @return $this
     */
    public function setDestinationWorkbook($destination_workbook)
    {
        $this->container['destination_workbook'] = $destination_workbook;
        return $this;
    }

    /**
     * Gets xml_file.
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource|null
     */
    public function getXmlFile()
    {
        return $this->container['xml_file'];
    }

    /**
     * Sets xml_file.
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource|null $xml_file
     *
     * @return $this
     */
    public function setXmlFile($xml_file)
    {
        $this->container['xml_file'] = $xml_file;
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
     * Gets xml_file_data_source.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource|null
     */
    public function getXmlFileDataSource()
    {
        return $this->container['xml_file_data_source'];
    }

    /**
     * Sets xml_file_data_source.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSource|null $xml_file_data_source
     *
     * @return $this
     */
    public function setXmlFileDataSource($xml_file_data_source)
    {
        $this->container['xml_file_data_source'] = $xml_file_data_source;
        return $this;
    }
}
