<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellsColor.php">
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

class CellsColor
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CellsColor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'color_index' => 'int',
        'is_shape_color' => 'bool',
        'tint' => 'float',
        'argb' => 'int',
        'theme_color' => '\\Aspose\\Cells\\Cloud\\Model\\ThemeColor',
        'type' => 'string',
        'transparency' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'color' => null,
        'color_index' => 'int32',
        'is_shape_color' => null,
        'tint' => 'float',
        'argb' => 'int32',
        'theme_color' => null,
        'type' => null,
        'transparency' => 'float',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'color' => 'Color',
        'color_index' => 'ColorIndex',
        'is_shape_color' => 'IsShapeColor',
        'tint' => 'tint',
        'argb' => 'Argb',
        'theme_color' => 'ThemeColor',
        'type' => 'Type',
        'transparency' => 'Transparency',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'color' => 'setColor',
        'color_index' => 'setColorIndex',
        'is_shape_color' => 'setIsShapeColor',
        'tint' => 'setTint',
        'argb' => 'setArgb',
        'theme_color' => 'setThemeColor',
        'type' => 'setType',
        'transparency' => 'setTransparency',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'color' => 'getColor',
        'color_index' => 'getColorIndex',
        'is_shape_color' => 'getIsShapeColor',
        'tint' => 'getTint',
        'argb' => 'getArgb',
        'theme_color' => 'getThemeColor',
        'type' => 'getType',
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['color_index'] = isset($data['color_index']) ? $data['color_index'] : null;
        $this->container['is_shape_color'] = isset($data['is_shape_color']) ? $data['is_shape_color'] : null;
        $this->container['tint'] = isset($data['tint']) ? $data['tint'] : null;
        $this->container['argb'] = isset($data['argb']) ? $data['argb'] : null;
        $this->container['theme_color'] = isset($data['theme_color']) ? $data['theme_color'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
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
     * Gets color_index.
     *
     * @return int|null
     */
    public function getColorIndex()
    {
        return $this->container['color_index'];
    }

    /**
     * Sets color_index.
     *
     * @param int|null $color_index
     *
     * @return $this
     */
    public function setColorIndex($color_index)
    {
        $this->container['color_index'] = $color_index;
        return $this;
    }

    /**
     * Gets is_shape_color.
     *
     * @return bool|null
     */
    public function getIsShapeColor()
    {
        return $this->container['is_shape_color'];
    }

    /**
     * Sets is_shape_color.
     *
     * @param bool|null $is_shape_color
     *
     * @return $this
     */
    public function setIsShapeColor($is_shape_color)
    {
        $this->container['is_shape_color'] = $is_shape_color;
        return $this;
    }

    /**
     * Gets tint.
     *
     * @return float|null
     */
    public function getTint()
    {
        return $this->container['tint'];
    }

    /**
     * Sets tint.
     *
     * @param float|null $tint
     *
     * @return $this
     */
    public function setTint($tint)
    {
        $this->container['tint'] = $tint;
        return $this;
    }

    /**
     * Gets argb.
     *
     * @return int|null
     */
    public function getArgb()
    {
        return $this->container['argb'];
    }

    /**
     * Sets argb.
     *
     * @param int|null $argb
     *
     * @return $this
     */
    public function setArgb($argb)
    {
        $this->container['argb'] = $argb;
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
