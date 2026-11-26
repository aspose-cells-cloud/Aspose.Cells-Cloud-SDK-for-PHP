<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="IconSet.php">
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

class IconSet
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IconSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cf_icons' => '\\Aspose\\Cells\\Cloud\\Model\\ConditionalFormattingIcon[]',
        'cfvos' => '\\Aspose\\Cells\\Cloud\\Model\\ConditionalFormattingValue[]',
        'is_custom' => 'bool',
        'reverse' => 'bool',
        'show_value' => 'bool',
        'icon_set_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cf_icons' => null,
        'cfvos' => null,
        'is_custom' => null,
        'reverse' => null,
        'show_value' => null,
        'icon_set_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'cf_icons' => 'CfIcons',
        'cfvos' => 'Cfvos',
        'is_custom' => 'IsCustom',
        'reverse' => 'Reverse',
        'show_value' => 'ShowValue',
        'icon_set_type' => 'IconSetType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'cf_icons' => 'setCfIcons',
        'cfvos' => 'setCfvos',
        'is_custom' => 'setIsCustom',
        'reverse' => 'setReverse',
        'show_value' => 'setShowValue',
        'icon_set_type' => 'setIconSetType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'cf_icons' => 'getCfIcons',
        'cfvos' => 'getCfvos',
        'is_custom' => 'getIsCustom',
        'reverse' => 'getReverse',
        'show_value' => 'getShowValue',
        'icon_set_type' => 'getIconSetType',
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
        $this->container['cf_icons'] = isset($data['cf_icons']) ? $data['cf_icons'] : null;
        $this->container['cfvos'] = isset($data['cfvos']) ? $data['cfvos'] : null;
        $this->container['is_custom'] = isset($data['is_custom']) ? $data['is_custom'] : null;
        $this->container['reverse'] = isset($data['reverse']) ? $data['reverse'] : null;
        $this->container['show_value'] = isset($data['show_value']) ? $data['show_value'] : null;
        $this->container['icon_set_type'] = isset($data['icon_set_type']) ? $data['icon_set_type'] : null;
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
     * Gets cf_icons.
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingIcon[]|null
     */
    public function getCfIcons()
    {
        return $this->container['cf_icons'];
    }

    /**
     * Sets cf_icons.
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingIcon[]|null $cf_icons
     *
     * @return $this
     */
    public function setCfIcons($cf_icons)
    {
        $this->container['cf_icons'] = $cf_icons;
        return $this;
    }

    /**
     * Gets cfvos.
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue[]|null
     */
    public function getCfvos()
    {
        return $this->container['cfvos'];
    }

    /**
     * Sets cfvos.
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue[]|null $cfvos
     *
     * @return $this
     */
    public function setCfvos($cfvos)
    {
        $this->container['cfvos'] = $cfvos;
        return $this;
    }

    /**
     * Gets is_custom.
     *
     * @return bool|null
     */
    public function getIsCustom()
    {
        return $this->container['is_custom'];
    }

    /**
     * Sets is_custom.
     *
     * @param bool|null $is_custom
     *
     * @return $this
     */
    public function setIsCustom($is_custom)
    {
        $this->container['is_custom'] = $is_custom;
        return $this;
    }

    /**
     * Gets reverse.
     *
     * @return bool|null
     */
    public function getReverse()
    {
        return $this->container['reverse'];
    }

    /**
     * Sets reverse.
     *
     * @param bool|null $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->container['reverse'] = $reverse;
        return $this;
    }

    /**
     * Gets show_value.
     *
     * @return bool|null
     */
    public function getShowValue()
    {
        return $this->container['show_value'];
    }

    /**
     * Sets show_value.
     *
     * @param bool|null $show_value
     *
     * @return $this
     */
    public function setShowValue($show_value)
    {
        $this->container['show_value'] = $show_value;
        return $this;
    }

    /**
     * Gets icon_set_type.
     *
     * @return string|null
     */
    public function getIconSetType()
    {
        return $this->container['icon_set_type'];
    }

    /**
     * Sets icon_set_type.
     *
     * @param string|null $icon_set_type
     *
     * @return $this
     */
    public function setIconSetType($icon_set_type)
    {
        $this->container['icon_set_type'] = $icon_set_type;
        return $this;
    }
}
