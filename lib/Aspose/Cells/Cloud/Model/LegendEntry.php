<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LegendEntry.php">
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

class LegendEntry extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LegendEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_scale_font' => 'bool',
        'background_mode' => 'string',
        'font' => '\\Aspose\\Cells\\Cloud\\Model\\Font',
        'is_deleted' => 'bool',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_scale_font' => null,
        'background_mode' => null,
        'font' => null,
        'is_deleted' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'auto_scale_font' => 'AutoScaleFont',
        'background_mode' => 'BackgroundMode',
        'font' => 'Font',
        'is_deleted' => 'IsDeleted',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'auto_scale_font' => 'setAutoScaleFont',
        'background_mode' => 'setBackgroundMode',
        'font' => 'setFont',
        'is_deleted' => 'setIsDeleted',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'auto_scale_font' => 'getAutoScaleFont',
        'background_mode' => 'getBackgroundMode',
        'font' => 'getFont',
        'is_deleted' => 'getIsDeleted',
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
        $this->container['auto_scale_font'] = isset($data['auto_scale_font']) ? $data['auto_scale_font'] : null;
        $this->container['background_mode'] = isset($data['background_mode']) ? $data['background_mode'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : null;
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
     * Gets auto_scale_font.
     *
     * @return bool|null
     */
    public function getAutoScaleFont()
    {
        return $this->container['auto_scale_font'];
    }

    /**
     * Sets auto_scale_font.
     *
     * @param bool|null $auto_scale_font
     *
     * @return $this
     */
    public function setAutoScaleFont($auto_scale_font)
    {
        $this->container['auto_scale_font'] = $auto_scale_font;
        return $this;
    }

    /**
     * Gets background_mode.
     *
     * @return string|null
     */
    public function getBackgroundMode()
    {
        return $this->container['background_mode'];
    }

    /**
     * Sets background_mode.
     *
     * @param string|null $background_mode
     *
     * @return $this
     */
    public function setBackgroundMode($background_mode)
    {
        $this->container['background_mode'] = $background_mode;
        return $this;
    }

    /**
     * Gets font.
     *
     * @return \Aspose\Cells\Cloud\Model\Font|null
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font.
     *
     * @param \Aspose\Cells\Cloud\Model\Font|null $font
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;
        return $this;
    }

    /**
     * Gets is_deleted.
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted.
     *
     * @param bool|null $is_deleted
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;
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
