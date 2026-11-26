<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Rows.php">
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

class Rows extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Rows';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_row' => 'int',
        'rows_count' => 'int',
        'rows_list' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement[]',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_row' => 'int32',
        'rows_count' => 'int32',
        'rows_list' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'max_row' => 'MaxRow',
        'rows_count' => 'RowsCount',
        'rows_list' => 'RowsList',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'max_row' => 'setMaxRow',
        'rows_count' => 'setRowsCount',
        'rows_list' => 'setRowsList',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'max_row' => 'getMaxRow',
        'rows_count' => 'getRowsCount',
        'rows_list' => 'getRowsList',
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
        $this->container['max_row'] = isset($data['max_row']) ? $data['max_row'] : null;
        $this->container['rows_count'] = isset($data['rows_count']) ? $data['rows_count'] : null;
        $this->container['rows_list'] = isset($data['rows_list']) ? $data['rows_list'] : null;
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
     * Gets max_row.
     *
     * @return int|null
     */
    public function getMaxRow()
    {
        return $this->container['max_row'];
    }

    /**
     * Sets max_row.
     *
     * @param int|null $max_row
     *
     * @return $this
     */
    public function setMaxRow($max_row)
    {
        $this->container['max_row'] = $max_row;
        return $this;
    }

    /**
     * Gets rows_count.
     *
     * @return int|null
     */
    public function getRowsCount()
    {
        return $this->container['rows_count'];
    }

    /**
     * Sets rows_count.
     *
     * @param int|null $rows_count
     *
     * @return $this
     */
    public function setRowsCount($rows_count)
    {
        $this->container['rows_count'] = $rows_count;
        return $this;
    }

    /**
     * Gets rows_list.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement[]|null
     */
    public function getRowsList()
    {
        return $this->container['rows_list'];
    }

    /**
     * Sets rows_list.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement[]|null $rows_list
     *
     * @return $this
     */
    public function setRowsList($rows_list)
    {
        $this->container['rows_list'] = $rows_list;
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
