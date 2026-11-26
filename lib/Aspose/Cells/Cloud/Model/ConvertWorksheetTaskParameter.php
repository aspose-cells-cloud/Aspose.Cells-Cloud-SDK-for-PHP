<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ConvertWorksheetTaskParameter.php">
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

class ConvertWorksheetTaskParameter extends TaskParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConvertWorksheetTaskParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'workbook' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'sheet' => 'string',
        'target_data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'target' => '\\Aspose\\Cells\\Cloud\\Model\\FileSource',
        'format' => 'string',
        'area' => 'string',
        'page_index' => 'int',
        'vertical_resolution' => 'int',
        'horizontal_resolution' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_source' => null,
        'workbook' => null,
        'sheet' => null,
        'target_data_source' => null,
        'target' => null,
        'format' => null,
        'area' => null,
        'page_index' => 'int32',
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
        'data_source' => 'DataSource',
        'workbook' => 'Workbook',
        'sheet' => 'Sheet',
        'target_data_source' => 'TargetDataSource',
        'target' => 'Target',
        'format' => 'Format',
        'area' => 'Area',
        'page_index' => 'PageIndex',
        'vertical_resolution' => 'VerticalResolution',
        'horizontal_resolution' => 'HorizontalResolution',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'data_source' => 'setDataSource',
        'workbook' => 'setWorkbook',
        'sheet' => 'setSheet',
        'target_data_source' => 'setTargetDataSource',
        'target' => 'setTarget',
        'format' => 'setFormat',
        'area' => 'setArea',
        'page_index' => 'setPageIndex',
        'vertical_resolution' => 'setVerticalResolution',
        'horizontal_resolution' => 'setHorizontalResolution',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'data_source' => 'getDataSource',
        'workbook' => 'getWorkbook',
        'sheet' => 'getSheet',
        'target_data_source' => 'getTargetDataSource',
        'target' => 'getTarget',
        'format' => 'getFormat',
        'area' => 'getArea',
        'page_index' => 'getPageIndex',
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
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['workbook'] = isset($data['workbook']) ? $data['workbook'] : null;
        $this->container['sheet'] = isset($data['sheet']) ? $data['sheet'] : null;
        $this->container['target_data_source'] = isset($data['target_data_source']) ? $data['target_data_source'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
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
     * Gets sheet.
     *
     * @return string|null
     */
    public function getSheet()
    {
        return $this->container['sheet'];
    }

    /**
     * Sets sheet.
     *
     * @param string|null $sheet
     *
     * @return $this
     */
    public function setSheet($sheet)
    {
        $this->container['sheet'] = $sheet;
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
     * Gets target.
     *
     * @return \Aspose\Cells\Cloud\Model\FileSource|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target.
     *
     * @param \Aspose\Cells\Cloud\Model\FileSource|null $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
     * Gets format.
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format.
     *
     * @param string|null $format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
     * Gets area.
     *
     * @return string|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area.
     *
     * @param string|null $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
     * Gets page_index.
     *
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index.
     *
     * @param int|null $page_index
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;
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
