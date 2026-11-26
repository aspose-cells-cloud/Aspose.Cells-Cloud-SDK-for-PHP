<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ColorScale.php">
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

class ColorScale
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ColorScale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_cfvo' => '\\Aspose\\Cells\\Cloud\\Model\\ConditionalFormattingValue',
        'max_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'mid_cfvo' => '\\Aspose\\Cells\\Cloud\\Model\\ConditionalFormattingValue',
        'mid_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'min_cfvo' => '\\Aspose\\Cells\\Cloud\\Model\\ConditionalFormattingValue',
        'min_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_cfvo' => null,
        'max_color' => null,
        'mid_cfvo' => null,
        'mid_color' => null,
        'min_cfvo' => null,
        'min_color' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'max_cfvo' => 'MaxCfvo',
        'max_color' => 'MaxColor',
        'mid_cfvo' => 'MidCfvo',
        'mid_color' => 'MidColor',
        'min_cfvo' => 'MinCfvo',
        'min_color' => 'MinColor',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'max_cfvo' => 'setMaxCfvo',
        'max_color' => 'setMaxColor',
        'mid_cfvo' => 'setMidCfvo',
        'mid_color' => 'setMidColor',
        'min_cfvo' => 'setMinCfvo',
        'min_color' => 'setMinColor',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'max_cfvo' => 'getMaxCfvo',
        'max_color' => 'getMaxColor',
        'mid_cfvo' => 'getMidCfvo',
        'mid_color' => 'getMidColor',
        'min_cfvo' => 'getMinCfvo',
        'min_color' => 'getMinColor',
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
        $this->container['max_cfvo'] = isset($data['max_cfvo']) ? $data['max_cfvo'] : null;
        $this->container['max_color'] = isset($data['max_color']) ? $data['max_color'] : null;
        $this->container['mid_cfvo'] = isset($data['mid_cfvo']) ? $data['mid_cfvo'] : null;
        $this->container['mid_color'] = isset($data['mid_color']) ? $data['mid_color'] : null;
        $this->container['min_cfvo'] = isset($data['min_cfvo']) ? $data['min_cfvo'] : null;
        $this->container['min_color'] = isset($data['min_color']) ? $data['min_color'] : null;
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
     * Gets max_cfvo.
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null
     */
    public function getMaxCfvo()
    {
        return $this->container['max_cfvo'];
    }

    /**
     * Sets max_cfvo.
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null $max_cfvo
     *
     * @return $this
     */
    public function setMaxCfvo($max_cfvo)
    {
        $this->container['max_cfvo'] = $max_cfvo;
        return $this;
    }

    /**
     * Gets max_color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getMaxColor()
    {
        return $this->container['max_color'];
    }

    /**
     * Sets max_color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $max_color
     *
     * @return $this
     */
    public function setMaxColor($max_color)
    {
        $this->container['max_color'] = $max_color;
        return $this;
    }

    /**
     * Gets mid_cfvo.
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null
     */
    public function getMidCfvo()
    {
        return $this->container['mid_cfvo'];
    }

    /**
     * Sets mid_cfvo.
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null $mid_cfvo
     *
     * @return $this
     */
    public function setMidCfvo($mid_cfvo)
    {
        $this->container['mid_cfvo'] = $mid_cfvo;
        return $this;
    }

    /**
     * Gets mid_color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getMidColor()
    {
        return $this->container['mid_color'];
    }

    /**
     * Sets mid_color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $mid_color
     *
     * @return $this
     */
    public function setMidColor($mid_color)
    {
        $this->container['mid_color'] = $mid_color;
        return $this;
    }

    /**
     * Gets min_cfvo.
     *
     * @return \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null
     */
    public function getMinCfvo()
    {
        return $this->container['min_cfvo'];
    }

    /**
     * Sets min_cfvo.
     *
     * @param \Aspose\Cells\Cloud\Model\ConditionalFormattingValue|null $min_cfvo
     *
     * @return $this
     */
    public function setMinCfvo($min_cfvo)
    {
        $this->container['min_cfvo'] = $min_cfvo;
        return $this;
    }

    /**
     * Gets min_color.
     *
     * @return \Aspose\Cells\Cloud\Model\Color|null
     */
    public function getMinColor()
    {
        return $this->container['min_color'];
    }

    /**
     * Sets min_color.
     *
     * @param \Aspose\Cells\Cloud\Model\Color|null $min_color
     *
     * @return $this
     */
    public function setMinColor($min_color)
    {
        $this->container['min_color'] = $min_color;
        return $this;
    }
}
