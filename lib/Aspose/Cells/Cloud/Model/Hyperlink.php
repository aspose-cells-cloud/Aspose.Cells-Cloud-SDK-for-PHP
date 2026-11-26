<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Hyperlink.php">
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

class Hyperlink extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hyperlink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => 'string',
        'area' => '\\Aspose\\Cells\\Cloud\\Model\\CellArea',
        'screen_tip' => 'string',
        'text_to_display' => 'string',
        'link_type' => 'string',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'area' => null,
        'screen_tip' => null,
        'text_to_display' => null,
        'link_type' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'address' => 'Address',
        'area' => 'Area',
        'screen_tip' => 'ScreenTip',
        'text_to_display' => 'TextToDisplay',
        'link_type' => 'LinkType',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'address' => 'setAddress',
        'area' => 'setArea',
        'screen_tip' => 'setScreenTip',
        'text_to_display' => 'setTextToDisplay',
        'link_type' => 'setLinkType',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'address' => 'getAddress',
        'area' => 'getArea',
        'screen_tip' => 'getScreenTip',
        'text_to_display' => 'getTextToDisplay',
        'link_type' => 'getLinkType',
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['screen_tip'] = isset($data['screen_tip']) ? $data['screen_tip'] : null;
        $this->container['text_to_display'] = isset($data['text_to_display']) ? $data['text_to_display'] : null;
        $this->container['link_type'] = isset($data['link_type']) ? $data['link_type'] : null;
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
     * Gets address.
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param string|null $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
     * Gets area.
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area.
     *
     * @param \Aspose\Cells\Cloud\Model\CellArea|null $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
     * Gets screen_tip.
     *
     * @return string|null
     */
    public function getScreenTip()
    {
        return $this->container['screen_tip'];
    }

    /**
     * Sets screen_tip.
     *
     * @param string|null $screen_tip
     *
     * @return $this
     */
    public function setScreenTip($screen_tip)
    {
        $this->container['screen_tip'] = $screen_tip;
        return $this;
    }

    /**
     * Gets text_to_display.
     *
     * @return string|null
     */
    public function getTextToDisplay()
    {
        return $this->container['text_to_display'];
    }

    /**
     * Sets text_to_display.
     *
     * @param string|null $text_to_display
     *
     * @return $this
     */
    public function setTextToDisplay($text_to_display)
    {
        $this->container['text_to_display'] = $text_to_display;
        return $this;
    }

    /**
     * Gets link_type.
     *
     * @return string|null
     */
    public function getLinkType()
    {
        return $this->container['link_type'];
    }

    /**
     * Sets link_type.
     *
     * @param string|null $link_type
     *
     * @return $this
     */
    public function setLinkType($link_type)
    {
        $this->container['link_type'] = $link_type;
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
