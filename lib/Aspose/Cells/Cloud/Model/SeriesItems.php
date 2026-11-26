<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SeriesItems.php">
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

class SeriesItems extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SeriesItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category_data' => 'string',
        'is_color_varied' => 'bool',
        'second_catergory_data' => 'string',
        'series_list' => '\\Aspose\\Cells\\Cloud\\Model\\Series[]',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category_data' => null,
        'is_color_varied' => null,
        'second_catergory_data' => null,
        'series_list' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'category_data' => 'CategoryData',
        'is_color_varied' => 'IsColorVaried',
        'second_catergory_data' => 'SecondCatergoryData',
        'series_list' => 'SeriesList',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'category_data' => 'setCategoryData',
        'is_color_varied' => 'setIsColorVaried',
        'second_catergory_data' => 'setSecondCatergoryData',
        'series_list' => 'setSeriesList',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'category_data' => 'getCategoryData',
        'is_color_varied' => 'getIsColorVaried',
        'second_catergory_data' => 'getSecondCatergoryData',
        'series_list' => 'getSeriesList',
        'link' => 'getLink',
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
        $this->container['category_data'] = isset($data['category_data']) ? $data['category_data'] : null;
        $this->container['is_color_varied'] = isset($data['is_color_varied']) ? $data['is_color_varied'] : null;
        $this->container['second_catergory_data'] = isset($data['second_catergory_data']) ? $data['second_catergory_data'] : null;
        $this->container['series_list'] = isset($data['series_list']) ? $data['series_list'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
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
     * Gets category_data.
     *
     * @return string|null
     */
    public function getCategoryData()
    {
        return $this->container['category_data'];
    }

    /**
     * Sets category_data.
     *
     * @param string|null $category_data
     *
     * @return $this
     */
    public function setCategoryData($category_data)
    {
        $this->container['category_data'] = $category_data;
        return $this;
    }

    /**
     * Gets is_color_varied.
     *
     * @return bool|null
     */
    public function getIsColorVaried()
    {
        return $this->container['is_color_varied'];
    }

    /**
     * Sets is_color_varied.
     *
     * @param bool|null $is_color_varied
     *
     * @return $this
     */
    public function setIsColorVaried($is_color_varied)
    {
        $this->container['is_color_varied'] = $is_color_varied;
        return $this;
    }

    /**
     * Gets second_catergory_data.
     *
     * @return string|null
     */
    public function getSecondCatergoryData()
    {
        return $this->container['second_catergory_data'];
    }

    /**
     * Sets second_catergory_data.
     *
     * @param string|null $second_catergory_data
     *
     * @return $this
     */
    public function setSecondCatergoryData($second_catergory_data)
    {
        $this->container['second_catergory_data'] = $second_catergory_data;
        return $this;
    }

    /**
     * Gets series_list.
     *
     * @return \Aspose\Cells\Cloud\Model\Series[]|null
     */
    public function getSeriesList()
    {
        return $this->container['series_list'];
    }

    /**
     * Sets series_list.
     *
     * @param \Aspose\Cells\Cloud\Model\Series[]|null $series_list
     *
     * @return $this
     */
    public function setSeriesList($series_list)
    {
        $this->container['series_list'] = $series_list;
        return $this;
    }

    /**
     * Gets link.
     *
     * @return \Aspose\Cells\Cloud\Model\Link|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link.
     *
     * @param \Aspose\Cells\Cloud\Model\Link|null $link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }
}
