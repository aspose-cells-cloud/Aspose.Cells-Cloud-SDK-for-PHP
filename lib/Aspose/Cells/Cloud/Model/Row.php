<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Row.php">
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

class Row extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group_level' => 'int',
        'height' => 'float',
        'index' => 'int',
        'is_blank' => 'bool',
        'is_height_matched' => 'bool',
        'is_hidden' => 'bool',
        'style' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group_level' => 'int32',
        'height' => 'float',
        'index' => 'int32',
        'is_blank' => null,
        'is_height_matched' => null,
        'is_hidden' => null,
        'style' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'group_level' => 'GroupLevel',
        'height' => 'Height',
        'index' => 'Index',
        'is_blank' => 'IsBlank',
        'is_height_matched' => 'IsHeightMatched',
        'is_hidden' => 'IsHidden',
        'style' => 'Style',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'group_level' => 'setGroupLevel',
        'height' => 'setHeight',
        'index' => 'setIndex',
        'is_blank' => 'setIsBlank',
        'is_height_matched' => 'setIsHeightMatched',
        'is_hidden' => 'setIsHidden',
        'style' => 'setStyle',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'group_level' => 'getGroupLevel',
        'height' => 'getHeight',
        'index' => 'getIndex',
        'is_blank' => 'getIsBlank',
        'is_height_matched' => 'getIsHeightMatched',
        'is_hidden' => 'getIsHidden',
        'style' => 'getStyle',
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
        $this->container['group_level'] = isset($data['group_level']) ? $data['group_level'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['is_blank'] = isset($data['is_blank']) ? $data['is_blank'] : null;
        $this->container['is_height_matched'] = isset($data['is_height_matched']) ? $data['is_height_matched'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
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
     * Gets group_level.
     *
     * @return int|null
     */
    public function getGroupLevel()
    {
        return $this->container['group_level'];
    }

    /**
     * Sets group_level.
     *
     * @param int|null $group_level
     *
     * @return $this
     */
    public function setGroupLevel($group_level)
    {
        $this->container['group_level'] = $group_level;
        return $this;
    }

    /**
     * Gets height.
     *
     * @return float|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param float|null $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
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
     * Gets is_blank.
     *
     * @return bool|null
     */
    public function getIsBlank()
    {
        return $this->container['is_blank'];
    }

    /**
     * Sets is_blank.
     *
     * @param bool|null $is_blank
     *
     * @return $this
     */
    public function setIsBlank($is_blank)
    {
        $this->container['is_blank'] = $is_blank;
        return $this;
    }

    /**
     * Gets is_height_matched.
     *
     * @return bool|null
     */
    public function getIsHeightMatched()
    {
        return $this->container['is_height_matched'];
    }

    /**
     * Sets is_height_matched.
     *
     * @param bool|null $is_height_matched
     *
     * @return $this
     */
    public function setIsHeightMatched($is_height_matched)
    {
        $this->container['is_height_matched'] = $is_height_matched;
        return $this;
    }

    /**
     * Gets is_hidden.
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden.
     *
     * @param bool|null $is_hidden
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;
        return $this;
    }

    /**
     * Gets style.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;
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
