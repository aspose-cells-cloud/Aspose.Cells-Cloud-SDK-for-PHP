<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SortKey.php">
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

class SortKey
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SortKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'key' => 'int',
        'sort_order' => 'string',
        'custom_list' => 'string[]',
        'order' => 'string',
        'index' => 'int',
        'type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'key' => 'int32',
        'sort_order' => null,
        'custom_list' => null,
        'order' => null,
        'index' => 'int32',
        'type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'key' => 'Key',
        'sort_order' => 'SortOrder',
        'custom_list' => 'CustomList',
        'order' => 'Order',
        'index' => 'Index',
        'type' => 'Type',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'key' => 'setKey',
        'sort_order' => 'setSortOrder',
        'custom_list' => 'setCustomList',
        'order' => 'setOrder',
        'index' => 'setIndex',
        'type' => 'setType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'key' => 'getKey',
        'sort_order' => 'getSortOrder',
        'custom_list' => 'getCustomList',
        'order' => 'getOrder',
        'index' => 'getIndex',
        'type' => 'getType',
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['custom_list'] = isset($data['custom_list']) ? $data['custom_list'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets key.
     *
     * @return int|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key.
     *
     * @param int|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
     * Gets sort_order.
     *
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order.
     *
     * @param string|null $sort_order
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;
        return $this;
    }

    /**
     * Gets custom_list.
     *
     * @return string[]|null
     */
    public function getCustomList()
    {
        return $this->container['custom_list'];
    }

    /**
     * Sets custom_list.
     *
     * @param string[]|null $custom_list
     *
     * @return $this
     */
    public function setCustomList($custom_list)
    {
        $this->container['custom_list'] = $custom_list;
        return $this;
    }

    /**
     * Gets order.
     *
     * @return string|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order.
     *
     * @param string|null $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
     * Gets index.
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index.
     *
     * @param int|null $index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
     * Gets type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }
}
