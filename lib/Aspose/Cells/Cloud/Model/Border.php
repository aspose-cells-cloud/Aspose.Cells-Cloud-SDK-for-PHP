<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Border.php">
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

class Border
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Border';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_style' => 'string',
        'color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'border_type' => 'string',
        'theme_color' => '\\Aspose\\Cells\\Cloud\\Model\\ThemeColor',
        'argb_color' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_style' => null,
        'color' => null,
        'border_type' => null,
        'theme_color' => null,
        'argb_color' => 'int32',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'line_style' => 'LineStyle',
        'color' => 'Color',
        'border_type' => 'BorderType',
        'theme_color' => 'ThemeColor',
        'argb_color' => 'ArgbColor',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'line_style' => 'setLineStyle',
        'color' => 'setColor',
        'border_type' => 'setBorderType',
        'theme_color' => 'setThemeColor',
        'argb_color' => 'setArgbColor',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'line_style' => 'getLineStyle',
        'color' => 'getColor',
        'border_type' => 'getBorderType',
        'theme_color' => 'getThemeColor',
        'argb_color' => 'getArgbColor',
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
        $this->container['line_style'] = isset($data['line_style']) ? $data['line_style'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['border_type'] = isset($data['border_type']) ? $data['border_type'] : null;
        $this->container['theme_color'] = isset($data['theme_color']) ? $data['theme_color'] : null;
        $this->container['argb_color'] = isset($data['argb_color']) ? $data['argb_color'] : null;
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
     * Gets line_style.
     *
     * @return string|null
     */
    public function getLineStyle()
    {
        return $this->container['line_style'];
    }

    /**
     * Sets line_style.
     *
     * @param string|null $line_style
     *
     * @return $this
     */
    public function setLineStyle($line_style)
    {
        $this->container['line_style'] = $line_style;
        return $this;
    }

    /**
     * Gets color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
     * Gets border_type.
     *
     * @return string|null
     */
    public function getBorderType()
    {
        return $this->container['border_type'];
    }

    /**
     * Sets border_type.
     *
     * @param string|null $border_type
     *
     * @return $this
     */
    public function setBorderType($border_type)
    {
        $this->container['border_type'] = $border_type;
        return $this;
    }

    /**
     * Gets theme_color.
     *
     * @return \Aspose\Cells\Cloud\Model\ThemeColor|null
     */
    public function getThemeColor()
    {
        return $this->container['theme_color'];
    }

    /**
     * Sets theme_color.
     *
     * @param \Aspose\Cells\Cloud\Model\ThemeColor|null $theme_color
     *
     * @return $this
     */
    public function setThemeColor($theme_color)
    {
        $this->container['theme_color'] = $theme_color;
        return $this;
    }

    /**
     * Gets argb_color.
     *
     * @return int|null
     */
    public function getArgbColor()
    {
        return $this->container['argb_color'];
    }

    /**
     * Sets argb_color.
     *
     * @param int|null $argb_color
     *
     * @return $this
     */
    public function setArgbColor($argb_color)
    {
        $this->container['argb_color'] = $argb_color;
        return $this;
    }
}
