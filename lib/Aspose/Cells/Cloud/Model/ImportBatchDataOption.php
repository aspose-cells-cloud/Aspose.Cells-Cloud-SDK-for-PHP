<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImportBatchDataOption.php">
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

class ImportBatchDataOption extends ImportOption
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportBatchDataOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_data' => '\\Aspose\\Cells\\Cloud\\Model\\CellValue[]',
        'destination_worksheet' => 'string',
        'is_insert' => 'bool',
        'import_data_type' => 'string',
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'source' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batch_data' => null,
        'destination_worksheet' => null,
        'is_insert' => null,
        'import_data_type' => null,
        'data_source' => null,
        'source' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'batch_data' => 'BatchData',
        'destination_worksheet' => 'DestinationWorksheet',
        'is_insert' => 'IsInsert',
        'import_data_type' => 'ImportDataType',
        'data_source' => 'DataSource',
        'source' => 'Source',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'batch_data' => 'setBatchData',
        'destination_worksheet' => 'setDestinationWorksheet',
        'is_insert' => 'setIsInsert',
        'import_data_type' => 'setImportDataType',
        'data_source' => 'setDataSource',
        'source' => 'setSource',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'batch_data' => 'getBatchData',
        'destination_worksheet' => 'getDestinationWorksheet',
        'is_insert' => 'getIsInsert',
        'import_data_type' => 'getImportDataType',
        'data_source' => 'getDataSource',
        'source' => 'getSource',
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
        $this->container['batch_data'] = isset($data['batch_data']) ? $data['batch_data'] : null;
        $this->container['destination_worksheet'] = isset($data['destination_worksheet']) ? $data['destination_worksheet'] : null;
        $this->container['is_insert'] = isset($data['is_insert']) ? $data['is_insert'] : null;
        $this->container['import_data_type'] = isset($data['import_data_type']) ? $data['import_data_type'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
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
     * Gets batch_data.
     *
     * @return \Aspose\Cells\Cloud\Model\CellValue[]|null
     */
    public function getBatchData()
    {
        return $this->container['batch_data'];
    }

    /**
     * Sets batch_data.
     *
     * @param \Aspose\Cells\Cloud\Model\CellValue[]|null $batch_data
     *
     * @return $this
     */
    public function setBatchData($batch_data)
    {
        $this->container['batch_data'] = $batch_data;
        return $this;
    }

    /**
     * Gets destination_worksheet.
     *
     * @return string|null
     */
    public function getDestinationWorksheet()
    {
        return $this->container['destination_worksheet'];
    }

    /**
     * Sets destination_worksheet.
     *
     * @param string|null $destination_worksheet
     *
     * @return $this
     */
    public function setDestinationWorksheet($destination_worksheet)
    {
        $this->container['destination_worksheet'] = $destination_worksheet;
        return $this;
    }

    /**
     * Gets is_insert.
     *
     * @return bool|null
     */
    public function getIsInsert()
    {
        return $this->container['is_insert'];
    }

    /**
     * Sets is_insert.
     *
     * @param bool|null $is_insert
     *
     * @return $this
     */
    public function setIsInsert($is_insert)
    {
        $this->container['is_insert'] = $is_insert;
        return $this;
    }

    /**
     * Gets import_data_type.
     *
     * @return string|null
     */
    public function getImportDataType()
    {
        return $this->container['import_data_type'];
    }

    /**
     * Sets import_data_type.
     *
     * @param string|null $import_data_type
     *
     * @return $this
     */
    public function setImportDataType($import_data_type)
    {
        $this->container['import_data_type'] = $import_data_type;
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
     * Gets source.
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source.
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource|null $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }
}
