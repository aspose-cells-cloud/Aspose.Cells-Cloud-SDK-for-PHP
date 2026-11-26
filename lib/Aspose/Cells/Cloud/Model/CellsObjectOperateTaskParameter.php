<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellsObjectOperateTaskParameter.php">
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

class CellsObjectOperateTaskParameter extends TaskParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CellsObjectOperateTaskParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operate_object' => '\\Aspose\\Cells\\Cloud\\Model\\OperateObject',
        'operate_parameter' => '\\Aspose\\Cells\\Cloud\\Model\\OperateParameter',
        'destination_data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'destination_workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operate_object' => null,
        'operate_parameter' => null,
        'destination_data_source' => null,
        'destination_workbook' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'operate_object' => 'OperateObject',
        'operate_parameter' => 'OperateParameter',
        'destination_data_source' => 'DestinationDataSource',
        'destination_workbook' => 'DestinationWorkbook',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'operate_object' => 'setOperateObject',
        'operate_parameter' => 'setOperateParameter',
        'destination_data_source' => 'setDestinationDataSource',
        'destination_workbook' => 'setDestinationWorkbook',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'operate_object' => 'getOperateObject',
        'operate_parameter' => 'getOperateParameter',
        'destination_data_source' => 'getDestinationDataSource',
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
        $this->container['operate_object'] = isset($data['operate_object']) ? $data['operate_object'] : null;
        $this->container['operate_parameter'] = isset($data['operate_parameter']) ? $data['operate_parameter'] : null;
        $this->container['destination_data_source'] = isset($data['destination_data_source']) ? $data['destination_data_source'] : null;
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
     * Gets operate_object.
     *
     * @return \Aspose\Cells\Cloud\Model\OperateObject|null
     */
    public function getOperateObject()
    {
        return $this->container['operate_object'];
    }

    /**
     * Sets operate_object.
     *
     * @param \Aspose\Cells\Cloud\Model\OperateObject|null $operate_object
     *
     * @return $this
     */
    public function setOperateObject($operate_object)
    {
        $this->container['operate_object'] = $operate_object;
        return $this;
    }

    /**
     * Gets operate_parameter.
     *
     * @return \Aspose\Cells\Cloud\Model\OperateParameter|null
     */
    public function getOperateParameter()
    {
        return $this->container['operate_parameter'];
    }

    /**
     * Sets operate_parameter.
     *
     * @param \Aspose\Cells\Cloud\Model\OperateParameter|null $operate_parameter
     *
     * @return $this
     */
    public function setOperateParameter($operate_parameter)
    {
        $this->container['operate_parameter'] = $operate_parameter;
        return $this;
    }

    /**
     * Gets destination_data_source.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource|null
     */
    public function getDestinationDataSource()
    {
        return $this->container['destination_data_source'];
    }

    /**
     * Sets destination_data_source.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSource|null $destination_data_source
     *
     * @return $this
     */
    public function setDestinationDataSource($destination_data_source)
    {
        $this->container['destination_data_source'] = $destination_data_source;
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
