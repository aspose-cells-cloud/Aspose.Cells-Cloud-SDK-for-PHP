<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataTransformationRequest.php">
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

class DataTransformationRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataTransformationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file_info' => '\\Aspose\\Cells\\Cloud\\Model\\FileInfo',
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'load_data' => '\\Aspose\\Cells\\Cloud\\Model\\LoadData',
        'applied_steps' => '\\Aspose\\Cells\\Cloud\\Model\\AppliedStep[]',
        'region' => 'string',
        'out_format' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file_info' => null,
        'data_source' => null,
        'load_data' => null,
        'applied_steps' => null,
        'region' => null,
        'out_format' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'file_info' => 'FileInfo',
        'data_source' => 'DataSource',
        'load_data' => 'LoadData',
        'applied_steps' => 'AppliedSteps',
        'region' => 'Region',
        'out_format' => 'OutFormat',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'file_info' => 'setFileInfo',
        'data_source' => 'setDataSource',
        'load_data' => 'setLoadData',
        'applied_steps' => 'setAppliedSteps',
        'region' => 'setRegion',
        'out_format' => 'setOutFormat',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'file_info' => 'getFileInfo',
        'data_source' => 'getDataSource',
        'load_data' => 'getLoadData',
        'applied_steps' => 'getAppliedSteps',
        'region' => 'getRegion',
        'out_format' => 'getOutFormat',
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
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['load_data'] = isset($data['load_data']) ? $data['load_data'] : null;
        $this->container['applied_steps'] = isset($data['applied_steps']) ? $data['applied_steps'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['out_format'] = isset($data['out_format']) ? $data['out_format'] : null;
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
     * Gets load_data.
     *
     * @return \Aspose\Cells\Cloud\Model\LoadData|null
     */
    public function getLoadData()
    {
        return $this->container['load_data'];
    }

    /**
     * Sets load_data.
     *
     * @param \Aspose\Cells\Cloud\Model\LoadData|null $load_data
     *
     * @return $this
     */
    public function setLoadData($load_data)
    {
        $this->container['load_data'] = $load_data;
        return $this;
    }

    /**
     * Gets applied_steps.
     *
     * @return \Aspose\Cells\Cloud\Model\AppliedStep[]|null
     */
    public function getAppliedSteps()
    {
        return $this->container['applied_steps'];
    }

    /**
     * Sets applied_steps.
     *
     * @param \Aspose\Cells\Cloud\Model\AppliedStep[]|null $applied_steps
     *
     * @return $this
     */
    public function setAppliedSteps($applied_steps)
    {
        $this->container['applied_steps'] = $applied_steps;
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
     * Gets out_format.
     *
     * @return string|null
     */
    public function getOutFormat()
    {
        return $this->container['out_format'];
    }

    /**
     * Sets out_format.
     *
     * @param string|null $out_format
     *
     * @return $this
     */
    public function setOutFormat($out_format)
    {
        $this->container['out_format'] = $out_format;
        return $this;
    }
}
