<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Columns.php">
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

class Columns extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Columns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_column' => 'int',
        'columns_count' => 'int',
        'columns_list' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement[]',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_column' => 'int32',
        'columns_count' => 'int32',
        'columns_list' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'max_column' => 'MaxColumn',
        'columns_count' => 'ColumnsCount',
        'columns_list' => 'ColumnsList',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'max_column' => 'setMaxColumn',
        'columns_count' => 'setColumnsCount',
        'columns_list' => 'setColumnsList',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'max_column' => 'getMaxColumn',
        'columns_count' => 'getColumnsCount',
        'columns_list' => 'getColumnsList',
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
        $this->container['max_column'] = isset($data['max_column']) ? $data['max_column'] : null;
        $this->container['columns_count'] = isset($data['columns_count']) ? $data['columns_count'] : null;
        $this->container['columns_list'] = isset($data['columns_list']) ? $data['columns_list'] : null;
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
     * Gets max_column.
     *
     * @return int|null
     */
    public function getMaxColumn()
    {
        return $this->container['max_column'];
    }

    /**
     * Sets max_column.
     *
     * @param int|null $max_column
     *
     * @return $this
     */
    public function setMaxColumn($max_column)
    {
        $this->container['max_column'] = $max_column;
        return $this;
    }

    /**
     * Gets columns_count.
     *
     * @return int|null
     */
    public function getColumnsCount()
    {
        return $this->container['columns_count'];
    }

    /**
     * Sets columns_count.
     *
     * @param int|null $columns_count
     *
     * @return $this
     */
    public function setColumnsCount($columns_count)
    {
        $this->container['columns_count'] = $columns_count;
        return $this;
    }

    /**
     * Gets columns_list.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement[]|null
     */
    public function getColumnsList()
    {
        return $this->container['columns_list'];
    }

    /**
     * Sets columns_list.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement[]|null $columns_list
     *
     * @return $this
     */
    public function setColumnsList($columns_list)
    {
        $this->container['columns_list'] = $columns_list;
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
