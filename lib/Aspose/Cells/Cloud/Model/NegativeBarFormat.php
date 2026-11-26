<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="NegativeBarFormat.php">
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

class NegativeBarFormat
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NegativeBarFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'border_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'border_color_type' => 'string',
        'color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'color_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'border_color' => null,
        'border_color_type' => null,
        'color' => null,
        'color_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'border_color' => 'BorderColor',
        'border_color_type' => 'BorderColorType',
        'color' => 'Color',
        'color_type' => 'ColorType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'border_color' => 'setBorderColor',
        'border_color_type' => 'setBorderColorType',
        'color' => 'setColor',
        'color_type' => 'setColorType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'border_color' => 'getBorderColor',
        'border_color_type' => 'getBorderColorType',
        'color' => 'getColor',
        'color_type' => 'getColorType',
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
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
        $this->container['border_color_type'] = isset($data['border_color_type']) ? $data['border_color_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['color_type'] = isset($data['color_type']) ? $data['color_type'] : null;
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
     * Gets border_color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getBorderColor()
    {
        return $this->container['border_color'];
    }

    /**
     * Sets border_color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $border_color
     *
     * @return $this
     */
    public function setBorderColor($border_color)
    {
        $this->container['border_color'] = $border_color;
        return $this;
    }

    /**
     * Gets border_color_type.
     *
     * @return string|null
     */
    public function getBorderColorType()
    {
        return $this->container['border_color_type'];
    }

    /**
     * Sets border_color_type.
     *
     * @param string|null $border_color_type
     *
     * @return $this
     */
    public function setBorderColorType($border_color_type)
    {
        $this->container['border_color_type'] = $border_color_type;
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
     * Gets color_type.
     *
     * @return string|null
     */
    public function getColorType()
    {
        return $this->container['color_type'];
    }

    /**
     * Sets color_type.
     *
     * @param string|null $color_type
     *
     * @return $this
     */
    public function setColorType($color_type)
    {
        $this->container['color_type'] = $color_type;
        return $this;
    }
}
