<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertTaskParameter.php">
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

class ConvertTaskParameter extends TaskParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConvertTaskParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'destination_file' => 'string',
        'region' => 'string',
        'save_options' => '\\Aspose\\Cells\\Cloud\\Model\\SaveOptions',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source' => null,
        'workbook' => null,
        'destination_file' => null,
        'region' => null,
        'save_options' => null,
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
        'destination_file' => 'DestinationFile',
        'region' => 'Region',
        'save_options' => 'SaveOptions',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'data_source' => 'setDataSource',
        'workbook' => 'setWorkbook',
        'destination_file' => 'setDestinationFile',
        'region' => 'setRegion',
        'save_options' => 'setSaveOptions',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'data_source' => 'getDataSource',
        'workbook' => 'getWorkbook',
        'destination_file' => 'getDestinationFile',
        'region' => 'getRegion',
        'save_options' => 'getSaveOptions',
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
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['workbook'] = isset($data['workbook']) ? $data['workbook'] : null;
        $this->container['destination_file'] = isset($data['destination_file']) ? $data['destination_file'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['save_options'] = isset($data['save_options']) ? $data['save_options'] : null;
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
     * Gets destination_file.
     *
     * @return string|null
     */
    public function getDestinationFile()
    {
        return $this->container['destination_file'];
    }

    /**
     * Sets destination_file.
     *
     * @param string|null $destination_file
     *
     * @return $this
     */
    public function setDestinationFile($destination_file)
    {
        $this->container['destination_file'] = $destination_file;
        return $this;
    }

    /**
     * Gets region.
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region.
     *
     * @param string|null $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
     * Gets save_options.
     *
     * @return \Aspose\Cells\Cloud\Model\SaveOptions|null
     */
    public function getSaveOptions()
    {
        return $this->container['save_options'];
    }

    /**
     * Sets save_options.
     *
     * @param \Aspose\Cells\Cloud\Model\SaveOptions|null $save_options
     *
     * @return $this
     */
    public function setSaveOptions($save_options)
    {
        $this->container['save_options'] = $save_options;
        return $this;
    }
}
