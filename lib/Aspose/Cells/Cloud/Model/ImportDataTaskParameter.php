<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImportDataTaskParameter.php">
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

class ImportDataTaskParameter extends TaskParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportDataTaskParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'import_option' => '\\Aspose\\Cells\\Cloud\\Model\\ImportOption',
        'target_data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'destination_workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source' => null,
        'workbook' => null,
        'import_option' => null,
        'target_data_source' => null,
        'destination_workbook' => null,
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
        'import_option' => 'ImportOption',
        'target_data_source' => 'TargetDataSource',
        'destination_workbook' => 'DestinationWorkbook',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'data_source' => 'setDataSource',
        'workbook' => 'setWorkbook',
        'import_option' => 'setImportOption',
        'target_data_source' => 'setTargetDataSource',
        'destination_workbook' => 'setDestinationWorkbook',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'data_source' => 'getDataSource',
        'workbook' => 'getWorkbook',
        'import_option' => 'getImportOption',
        'target_data_source' => 'getTargetDataSource',
        'destination_workbook' => 'getDestinationWorkbook',
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
        $this->container['import_option'] = isset($data['import_option']) ? $data['import_option'] : null;
        $this->container['target_data_source'] = isset($data['target_data_source']) ? $data['target_data_source'] : null;
        $this->container['destination_workbook'] = isset($data['destination_workbook']) ? $data['destination_workbook'] : null;
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
     * Gets import_option.
     *
     * @return \Aspose\Cells\Cloud\Model\ImportOption|null
     */
    public function getImportOption()
    {
        return $this->container['import_option'];
    }

    /**
     * Sets import_option.
     *
     * @param \Aspose\Cells\Cloud\Model\ImportOption|null $import_option
     *
     * @return $this
     */
    public function setImportOption($import_option)
    {
        $this->container['import_option'] = $import_option;
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
}
