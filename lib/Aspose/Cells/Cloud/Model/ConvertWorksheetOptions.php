<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertWorksheetOptions.php">
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

class ConvertWorksheetOptions extends BaseOperateOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConvertWorksheetOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'file_info' => '\\Aspose\\Cells\\Cloud\\Model\\FileInfo',
        'worksheet_name' => 'string',
        'page_setup' => '\\Aspose\\Cells\\Cloud\\Model\\PageSetup',
        'image_or_print_options' => '\\Aspose\\Cells\\Cloud\\Model\\ImageOrPrintOptions',
        'convert_format' => 'string',
        'check_excel_restriction' => 'bool',
        'region' => 'string',
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
        'worksheet_name' => null,
        'page_setup' => null,
        'image_or_print_options' => null,
        'convert_format' => null,
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
        'name' => 'Name',
        'data_source' => 'DataSource',
        'file_info' => 'FileInfo',
        'worksheet_name' => 'WorksheetName',
        'page_setup' => 'PageSetup',
        'image_or_print_options' => 'ImageOrPrintOptions',
        'convert_format' => 'ConvertFormat',
        'check_excel_restriction' => 'CheckExcelRestriction',
        'region' => 'Region',
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
        'worksheet_name' => 'setWorksheetName',
        'page_setup' => 'setPageSetup',
        'image_or_print_options' => 'setImageOrPrintOptions',
        'convert_format' => 'setConvertFormat',
        'check_excel_restriction' => 'setCheckExcelRestriction',
        'region' => 'setRegion',
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
        'worksheet_name' => 'getWorksheetName',
        'page_setup' => 'getPageSetup',
        'image_or_print_options' => 'getImageOrPrintOptions',
        'convert_format' => 'getConvertFormat',
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
        parent::__construct($data);
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['worksheet_name'] = isset($data['worksheet_name']) ? $data['worksheet_name'] : null;
        $this->container['page_setup'] = isset($data['page_setup']) ? $data['page_setup'] : null;
        $this->container['image_or_print_options'] = isset($data['image_or_print_options']) ? $data['image_or_print_options'] : null;
        $this->container['convert_format'] = isset($data['convert_format']) ? $data['convert_format'] : null;
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
     * Gets worksheet_name.
     *
     * @return string|null
     */
    public function getWorksheetName()
    {
        return $this->container['worksheet_name'];
    }

    /**
     * Sets worksheet_name.
     *
     * @param string|null $worksheet_name
     *
     * @return $this
     */
    public function setWorksheetName($worksheet_name)
    {
        $this->container['worksheet_name'] = $worksheet_name;
        return $this;
    }

    /**
     * Gets page_setup.
     *
     * @return \Aspose\Cells\Cloud\Model\PageSetup|null
     */
    public function getPageSetup()
    {
        return $this->container['page_setup'];
    }

    /**
     * Sets page_setup.
     *
     * @param \Aspose\Cells\Cloud\Model\PageSetup|null $page_setup
     *
     * @return $this
     */
    public function setPageSetup($page_setup)
    {
        $this->container['page_setup'] = $page_setup;
        return $this;
    }

    /**
     * Gets image_or_print_options.
     *
     * @return \Aspose\Cells\Cloud\Model\ImageOrPrintOptions|null
     */
    public function getImageOrPrintOptions()
    {
        return $this->container['image_or_print_options'];
    }

    /**
     * Sets image_or_print_options.
     *
     * @param \Aspose\Cells\Cloud\Model\ImageOrPrintOptions|null $image_or_print_options
     *
     * @return $this
     */
    public function setImageOrPrintOptions($image_or_print_options)
    {
        $this->container['image_or_print_options'] = $image_or_print_options;
        return $this;
    }

    /**
     * Gets convert_format.
     *
     * @return string|null
     */
    public function getConvertFormat()
    {
        return $this->container['convert_format'];
    }

    /**
     * Sets convert_format.
     *
     * @param string|null $convert_format
     *
     * @return $this
     */
    public function setConvertFormat($convert_format)
    {
        $this->container['convert_format'] = $convert_format;
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
