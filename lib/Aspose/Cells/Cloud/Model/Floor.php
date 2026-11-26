<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Floor.php">
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

class Floor extends Area
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Floor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'border' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'background_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'fill_format' => '\\Aspose\\Cells\\Cloud\\Model\\FillFormat',
        'foreground_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'format' => 'string',
        'invert_if_negative' => 'bool',
        'transparency' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'border' => null,
        'background_color' => null,
        'fill_format' => null,
        'foreground_color' => null,
        'format' => null,
        'invert_if_negative' => null,
        'transparency' => 'float',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'border' => 'Border',
        'background_color' => 'BackgroundColor',
        'fill_format' => 'FillFormat',
        'foreground_color' => 'ForegroundColor',
        'format' => 'Format',
        'invert_if_negative' => 'InvertIfNegative',
        'transparency' => 'Transparency',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'border' => 'setBorder',
        'background_color' => 'setBackgroundColor',
        'fill_format' => 'setFillFormat',
        'foreground_color' => 'setForegroundColor',
        'format' => 'setFormat',
        'invert_if_negative' => 'setInvertIfNegative',
        'transparency' => 'setTransparency',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'border' => 'getBorder',
        'background_color' => 'getBackgroundColor',
        'fill_format' => 'getFillFormat',
        'foreground_color' => 'getForegroundColor',
        'format' => 'getFormat',
        'invert_if_negative' => 'getInvertIfNegative',
        'transparency' => 'getTransparency',
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
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['fill_format'] = isset($data['fill_format']) ? $data['fill_format'] : null;
        $this->container['foreground_color'] = isset($data['foreground_color']) ? $data['foreground_color'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['invert_if_negative'] = isset($data['invert_if_negative']) ? $data['invert_if_negative'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
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
     * Gets border.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $border
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;
        return $this;
    }

    /**
     * Gets background_color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $background_color
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;
        return $this;
    }

    /**
     * Gets fill_format.
     *
     * @return \Aspose\Cells\Cloud\Model\FillFormat|null
     */
    public function getFillFormat()
    {
        return $this->container['fill_format'];
    }

    /**
     * Sets fill_format.
     *
     * @param \Aspose\Cells\Cloud\Model\FillFormat|null $fill_format
     *
     * @return $this
     */
    public function setFillFormat($fill_format)
    {
        $this->container['fill_format'] = $fill_format;
        return $this;
    }

    /**
     * Gets foreground_color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getForegroundColor()
    {
        return $this->container['foreground_color'];
    }

    /**
     * Sets foreground_color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $foreground_color
     *
     * @return $this
     */
    public function setForegroundColor($foreground_color)
    {
        $this->container['foreground_color'] = $foreground_color;
        return $this;
    }

    /**
     * Gets format.
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format.
     *
     * @param string|null $format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
     * Gets invert_if_negative.
     *
     * @return bool|null
     */
    public function getInvertIfNegative()
    {
        return $this->container['invert_if_negative'];
    }

    /**
     * Sets invert_if_negative.
     *
     * @param bool|null $invert_if_negative
     *
     * @return $this
     */
    public function setInvertIfNegative($invert_if_negative)
    {
        $this->container['invert_if_negative'] = $invert_if_negative;
        return $this;
    }

    /**
     * Gets transparency.
     *
     * @return float|null
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /**
     * Sets transparency.
     *
     * @param float|null $transparency
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;
        return $this;
    }
}
