<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Top10Filter.php">
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

class Top10Filter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Top10Filter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'field_index' => 'int',
        'criteria' => 'string',
        'is_percent' => 'bool',
        'is_top' => 'bool',
        'items' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'field_index' => 'int32',
        'criteria' => null,
        'is_percent' => null,
        'is_top' => null,
        'items' => 'int32',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'field_index' => 'FieldIndex',
        'criteria' => 'Criteria',
        'is_percent' => 'IsPercent',
        'is_top' => 'IsTop',
        'items' => 'Items',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'field_index' => 'setFieldIndex',
        'criteria' => 'setCriteria',
        'is_percent' => 'setIsPercent',
        'is_top' => 'setIsTop',
        'items' => 'setItems',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'field_index' => 'getFieldIndex',
        'criteria' => 'getCriteria',
        'is_percent' => 'getIsPercent',
        'is_top' => 'getIsTop',
        'items' => 'getItems',
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
        $this->container['field_index'] = isset($data['field_index']) ? $data['field_index'] : null;
        $this->container['criteria'] = isset($data['criteria']) ? $data['criteria'] : null;
        $this->container['is_percent'] = isset($data['is_percent']) ? $data['is_percent'] : null;
        $this->container['is_top'] = isset($data['is_top']) ? $data['is_top'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets field_index.
     *
     * @return int|null
     */
    public function getFieldIndex()
    {
        return $this->container['field_index'];
    }

    /**
     * Sets field_index.
     *
     * @param int|null $field_index
     *
     * @return $this
     */
    public function setFieldIndex($field_index)
    {
        $this->container['field_index'] = $field_index;
        return $this;
    }

    /**
     * Gets criteria.
     *
     * @return string|null
     */
    public function getCriteria()
    {
        return $this->container['criteria'];
    }

    /**
     * Sets criteria.
     *
     * @param string|null $criteria
     *
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->container['criteria'] = $criteria;
        return $this;
    }

    /**
     * Gets is_percent.
     *
     * @return bool|null
     */
    public function getIsPercent()
    {
        return $this->container['is_percent'];
    }

    /**
     * Sets is_percent.
     *
     * @param bool|null $is_percent
     *
     * @return $this
     */
    public function setIsPercent($is_percent)
    {
        $this->container['is_percent'] = $is_percent;
        return $this;
    }

    /**
     * Gets is_top.
     *
     * @return bool|null
     */
    public function getIsTop()
    {
        return $this->container['is_top'];
    }

    /**
     * Sets is_top.
     *
     * @param bool|null $is_top
     *
     * @return $this
     */
    public function setIsTop($is_top)
    {
        $this->container['is_top'] = $is_top;
        return $this;
    }

    /**
     * Gets items.
     *
     * @return int|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param int|null $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;
        return $this;
    }
}
