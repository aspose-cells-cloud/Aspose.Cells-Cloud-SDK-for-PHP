<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ShadowEffect.php">
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

class ShadowEffect
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShadowEffect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'angle' => 'float',
        'blur' => 'float',
        'color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'distance' => 'float',
        'preset_type' => 'string',
        'size' => 'float',
        'transparency' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'angle' => 'float',
        'blur' => 'float',
        'color' => null,
        'distance' => 'float',
        'preset_type' => null,
        'size' => 'float',
        'transparency' => 'float',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'angle' => 'Angle',
        'blur' => 'Blur',
        'color' => 'Color',
        'distance' => 'Distance',
        'preset_type' => 'PresetType',
        'size' => 'Size',
        'transparency' => 'Transparency',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'angle' => 'setAngle',
        'blur' => 'setBlur',
        'color' => 'setColor',
        'distance' => 'setDistance',
        'preset_type' => 'setPresetType',
        'size' => 'setSize',
        'transparency' => 'setTransparency',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'angle' => 'getAngle',
        'blur' => 'getBlur',
        'color' => 'getColor',
        'distance' => 'getDistance',
        'preset_type' => 'getPresetType',
        'size' => 'getSize',
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
        $this->container['angle'] = isset($data['angle']) ? $data['angle'] : null;
        $this->container['blur'] = isset($data['blur']) ? $data['blur'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['preset_type'] = isset($data['preset_type']) ? $data['preset_type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
     * Gets angle.
     *
     * @return float|null
     */
    public function getAngle()
    {
        return $this->container['angle'];
    }

    /**
     * Sets angle.
     *
     * @param float|null $angle
     *
     * @return $this
     */
    public function setAngle($angle)
    {
        $this->container['angle'] = $angle;
        return $this;
    }

    /**
     * Gets blur.
     *
     * @return float|null
     */
    public function getBlur()
    {
        return $this->container['blur'];
    }

    /**
     * Sets blur.
     *
     * @param float|null $blur
     *
     * @return $this
     */
    public function setBlur($blur)
    {
        $this->container['blur'] = $blur;
        return $this;
    }

    /**
     * Gets color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
     * Gets distance.
     *
     * @return float|null
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance.
     *
     * @param float|null $distance
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;
        return $this;
    }

    /**
     * Gets preset_type.
     *
     * @return string|null
     */
    public function getPresetType()
    {
        return $this->container['preset_type'];
    }

    /**
     * Sets preset_type.
     *
     * @param string|null $preset_type
     *
     * @return $this
     */
    public function setPresetType($preset_type)
    {
        $this->container['preset_type'] = $preset_type;
        return $this;
    }

    /**
     * Gets size.
     *
     * @return float|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param float|null $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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
