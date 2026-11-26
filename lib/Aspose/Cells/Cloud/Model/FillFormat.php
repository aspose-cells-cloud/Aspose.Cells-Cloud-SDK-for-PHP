<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FillFormat.php">
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

class FillFormat
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FillFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'solid_fill' => '\\Aspose\\Cells\\Cloud\\Model\\SolidFill',
        'pattern_fill' => '\\Aspose\\Cells\\Cloud\\Model\\PatternFill',
        'texture_fill' => '\\Aspose\\Cells\\Cloud\\Model\\TextureFill',
        'gradient_fill' => '\\Aspose\\Cells\\Cloud\\Model\\GradientFill',
        'image_data' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'solid_fill' => null,
        'pattern_fill' => null,
        'texture_fill' => null,
        'gradient_fill' => null,
        'image_data' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'type' => 'Type',
        'solid_fill' => 'SolidFill',
        'pattern_fill' => 'PatternFill',
        'texture_fill' => 'TextureFill',
        'gradient_fill' => 'GradientFill',
        'image_data' => 'ImageData',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'type' => 'setType',
        'solid_fill' => 'setSolidFill',
        'pattern_fill' => 'setPatternFill',
        'texture_fill' => 'setTextureFill',
        'gradient_fill' => 'setGradientFill',
        'image_data' => 'setImageData',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'type' => 'getType',
        'solid_fill' => 'getSolidFill',
        'pattern_fill' => 'getPatternFill',
        'texture_fill' => 'getTextureFill',
        'gradient_fill' => 'getGradientFill',
        'image_data' => 'getImageData',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['solid_fill'] = isset($data['solid_fill']) ? $data['solid_fill'] : null;
        $this->container['pattern_fill'] = isset($data['pattern_fill']) ? $data['pattern_fill'] : null;
        $this->container['texture_fill'] = isset($data['texture_fill']) ? $data['texture_fill'] : null;
        $this->container['gradient_fill'] = isset($data['gradient_fill']) ? $data['gradient_fill'] : null;
        $this->container['image_data'] = isset($data['image_data']) ? $data['image_data'] : null;
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
     * Gets solid_fill.
     *
     * @return \Aspose\Cells\Cloud\Model\SolidFill|null
     */
    public function getSolidFill()
    {
        return $this->container['solid_fill'];
    }

    /**
     * Sets solid_fill.
     *
     * @param \Aspose\Cells\Cloud\Model\SolidFill|null $solid_fill
     *
     * @return $this
     */
    public function setSolidFill($solid_fill)
    {
        $this->container['solid_fill'] = $solid_fill;
        return $this;
    }

    /**
     * Gets pattern_fill.
     *
     * @return \Aspose\Cells\Cloud\Model\PatternFill|null
     */
    public function getPatternFill()
    {
        return $this->container['pattern_fill'];
    }

    /**
     * Sets pattern_fill.
     *
     * @param \Aspose\Cells\Cloud\Model\PatternFill|null $pattern_fill
     *
     * @return $this
     */
    public function setPatternFill($pattern_fill)
    {
        $this->container['pattern_fill'] = $pattern_fill;
        return $this;
    }

    /**
     * Gets texture_fill.
     *
     * @return \Aspose\Cells\Cloud\Model\TextureFill|null
     */
    public function getTextureFill()
    {
        return $this->container['texture_fill'];
    }

    /**
     * Sets texture_fill.
     *
     * @param \Aspose\Cells\Cloud\Model\TextureFill|null $texture_fill
     *
     * @return $this
     */
    public function setTextureFill($texture_fill)
    {
        $this->container['texture_fill'] = $texture_fill;
        return $this;
    }

    /**
     * Gets gradient_fill.
     *
     * @return \Aspose\Cells\Cloud\Model\GradientFill|null
     */
    public function getGradientFill()
    {
        return $this->container['gradient_fill'];
    }

    /**
     * Sets gradient_fill.
     *
     * @param \Aspose\Cells\Cloud\Model\GradientFill|null $gradient_fill
     *
     * @return $this
     */
    public function setGradientFill($gradient_fill)
    {
        $this->container['gradient_fill'] = $gradient_fill;
        return $this;
    }

    /**
     * Gets image_data.
     *
     * @return string|null
     */
    public function getImageData()
    {
        return $this->container['image_data'];
    }

    /**
     * Sets image_data.
     *
     * @param string|null $image_data
     *
     * @return $this
     */
    public function setImageData($image_data)
    {
        $this->container['image_data'] = $image_data;
        return $this;
    }
}
