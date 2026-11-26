<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataDeduplicationRequest.php">
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

class DataDeduplicationRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataDeduplicationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file' => '\\Aspose\\Cells\\Cloud\\Model\\FileInfo',
        'deduplication_region' => '\\Aspose\\Cells\\Cloud\\Model\\DeduplicationRegion',
        'out_file_format' => 'string',
        'check_excel_restriction' => 'bool',
        'region' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file' => null,
        'deduplication_region' => null,
        'out_file_format' => null,
        'check_excel_restriction' => null,
        'region' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'file' => 'File',
        'deduplication_region' => 'DeduplicationRegion',
        'out_file_format' => 'OutFileFormat',
        'check_excel_restriction' => 'CheckExcelRestriction',
        'region' => 'Region',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'file' => 'setFile',
        'deduplication_region' => 'setDeduplicationRegion',
        'out_file_format' => 'setOutFileFormat',
        'check_excel_restriction' => 'setCheckExcelRestriction',
        'region' => 'setRegion',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'file' => 'getFile',
        'deduplication_region' => 'getDeduplicationRegion',
        'out_file_format' => 'getOutFileFormat',
        'check_excel_restriction' => 'getCheckExcelRestriction',
        'region' => 'getRegion',
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['deduplication_region'] = isset($data['deduplication_region']) ? $data['deduplication_region'] : null;
        $this->container['out_file_format'] = isset($data['out_file_format']) ? $data['out_file_format'] : null;
        $this->container['check_excel_restriction'] = isset($data['check_excel_restriction']) ? $data['check_excel_restriction'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
     * Gets file.
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file.
     *
     * @param \Aspose\Cells\Cloud\Model\FileInfo|null $file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
     * Gets deduplication_region.
     *
     * @return \Aspose\Cells\Cloud\Model\DeduplicationRegion|null
     */
    public function getDeduplicationRegion()
    {
        return $this->container['deduplication_region'];
    }

    /**
     * Sets deduplication_region.
     *
     * @param \Aspose\Cells\Cloud\Model\DeduplicationRegion|null $deduplication_region
     *
     * @return $this
     */
    public function setDeduplicationRegion($deduplication_region)
    {
        $this->container['deduplication_region'] = $deduplication_region;
        return $this;
    }

    /**
     * Gets out_file_format.
     *
     * @return string|null
     */
    public function getOutFileFormat()
    {
        return $this->container['out_file_format'];
    }

    /**
     * Sets out_file_format.
     *
     * @param string|null $out_file_format
     *
     * @return $this
     */
    public function setOutFileFormat($out_file_format)
    {
        $this->container['out_file_format'] = $out_file_format;
        return $this;
    }

    /**
     * Gets check_excel_restriction.
     *
     * @return bool|null
     */
    public function getCheckExcelRestriction()
    {
        return $this->container['check_excel_restriction'];
    }

    /**
     * Sets check_excel_restriction.
     *
     * @param bool|null $check_excel_restriction
     *
     * @return $this
     */
    public function setCheckExcelRestriction($check_excel_restriction)
    {
        $this->container['check_excel_restriction'] = $check_excel_restriction;
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
}
