<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="GradientFill.php">
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

class GradientFill
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GradientFill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fill_type' => 'string',
        'direction_type' => 'string',
        'angle' => 'float',
        'gradient_stops' => '\\Aspose\\Cells\\Cloud\\Model\\GradientFillStop[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fill_type' => null,
        'direction_type' => null,
        'angle' => 'float',
        'gradient_stops' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'fill_type' => 'FillType',
        'direction_type' => 'DirectionType',
        'angle' => 'Angle',
        'gradient_stops' => 'GradientStops',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'fill_type' => 'setFillType',
        'direction_type' => 'setDirectionType',
        'angle' => 'setAngle',
        'gradient_stops' => 'setGradientStops',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'fill_type' => 'getFillType',
        'direction_type' => 'getDirectionType',
        'angle' => 'getAngle',
        'gradient_stops' => 'getGradientStops',
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
        $this->container['fill_type'] = isset($data['fill_type']) ? $data['fill_type'] : null;
        $this->container['direction_type'] = isset($data['direction_type']) ? $data['direction_type'] : null;
        $this->container['angle'] = isset($data['angle']) ? $data['angle'] : null;
        $this->container['gradient_stops'] = isset($data['gradient_stops']) ? $data['gradient_stops'] : null;
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
     * Gets fill_type.
     *
     * @return string|null
     */
    public function getFillType()
    {
        return $this->container['fill_type'];
    }

    /**
     * Sets fill_type.
     *
     * @param string|null $fill_type
     *
     * @return $this
     */
    public function setFillType($fill_type)
    {
        $this->container['fill_type'] = $fill_type;
        return $this;
    }

    /**
     * Gets direction_type.
     *
     * @return string|null
     */
    public function getDirectionType()
    {
        return $this->container['direction_type'];
    }

    /**
     * Sets direction_type.
     *
     * @param string|null $direction_type
     *
     * @return $this
     */
    public function setDirectionType($direction_type)
    {
        $this->container['direction_type'] = $direction_type;
        return $this;
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
     * Gets gradient_stops.
     *
     * @return \Aspose\Cells\Cloud\Model\GradientFillStop[]|null
     */
    public function getGradientStops()
    {
        return $this->container['gradient_stops'];
    }

    /**
     * Sets gradient_stops.
     *
     * @param \Aspose\Cells\Cloud\Model\GradientFillStop[]|null $gradient_stops
     *
     * @return $this
     */
    public function setGradientStops($gradient_stops)
    {
        $this->container['gradient_stops'] = $gradient_stops;
        return $this;
    }
}
