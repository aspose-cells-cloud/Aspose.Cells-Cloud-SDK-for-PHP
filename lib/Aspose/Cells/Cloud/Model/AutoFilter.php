<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AutoFilter.php">
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

class AutoFilter extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter_columns' => '\\Aspose\\Cells\\Cloud\\Model\\FilterColumn[]',
        'range' => 'string',
        'sorter' => '\\Aspose\\Cells\\Cloud\\Model\\DataSorter',
        'show_filter_button' => 'bool',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filter_columns' => null,
        'range' => null,
        'sorter' => null,
        'show_filter_button' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'filter_columns' => 'FilterColumns',
        'range' => 'Range',
        'sorter' => 'Sorter',
        'show_filter_button' => 'ShowFilterButton',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'filter_columns' => 'setFilterColumns',
        'range' => 'setRange',
        'sorter' => 'setSorter',
        'show_filter_button' => 'setShowFilterButton',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'filter_columns' => 'getFilterColumns',
        'range' => 'getRange',
        'sorter' => 'getSorter',
        'show_filter_button' => 'getShowFilterButton',
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
        $this->container['filter_columns'] = isset($data['filter_columns']) ? $data['filter_columns'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['sorter'] = isset($data['sorter']) ? $data['sorter'] : null;
        $this->container['show_filter_button'] = isset($data['show_filter_button']) ? $data['show_filter_button'] : null;
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
     * Gets filter_columns.
     *
     * @return \Aspose\Cells\Cloud\Model\FilterColumn[]|null
     */
    public function getFilterColumns()
    {
        return $this->container['filter_columns'];
    }

    /**
     * Sets filter_columns.
     *
     * @param \Aspose\Cells\Cloud\Model\FilterColumn[]|null $filter_columns
     *
     * @return $this
     */
    public function setFilterColumns($filter_columns)
    {
        $this->container['filter_columns'] = $filter_columns;
        return $this;
    }

    /**
     * Gets range.
     *
     * @return string|null
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range.
     *
     * @param string|null $range
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;
        return $this;
    }

    /**
     * Gets sorter.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSorter|null
     */
    public function getSorter()
    {
        return $this->container['sorter'];
    }

    /**
     * Sets sorter.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSorter|null $sorter
     *
     * @return $this
     */
    public function setSorter($sorter)
    {
        $this->container['sorter'] = $sorter;
        return $this;
    }

    /**
     * Gets show_filter_button.
     *
     * @return bool|null
     */
    public function getShowFilterButton()
    {
        return $this->container['show_filter_button'];
    }

    /**
     * Sets show_filter_button.
     *
     * @param bool|null $show_filter_button
     *
     * @return $this
     */
    public function setShowFilterButton($show_filter_button)
    {
        $this->container['show_filter_button'] = $show_filter_button;
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
