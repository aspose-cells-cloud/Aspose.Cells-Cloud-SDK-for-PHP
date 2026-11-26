<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RangeSetOutlineBorderRequest.php">
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

class RangeSetOutlineBorderRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RangeSetOutlineBorderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'range' => '\\Aspose\\Cells\\Cloud\\Model\\Range',
        'border_edge' => 'string',
        'border_style' => 'string',
        'border_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'range' => null,
        'border_edge' => null,
        'border_style' => null,
        'border_color' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'range' => 'Range',
        'border_edge' => 'borderEdge',
        'border_style' => 'borderStyle',
        'border_color' => 'borderColor',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'range' => 'setRange',
        'border_edge' => 'setBorderEdge',
        'border_style' => 'setBorderStyle',
        'border_color' => 'setBorderColor',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'range' => 'getRange',
        'border_edge' => 'getBorderEdge',
        'border_style' => 'getBorderStyle',
        'border_color' => 'getBorderColor',
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
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['border_edge'] = isset($data['border_edge']) ? $data['border_edge'] : null;
        $this->container['border_style'] = isset($data['border_style']) ? $data['border_style'] : null;
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
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
     * Gets range.
     *
     * @return \Aspose\Cells\Cloud\Model\Range|null
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range.
     *
     * @param \Aspose\Cells\Cloud\Model\Range|null $range
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;
        return $this;
    }

    /**
     * Gets border_edge.
     *
     * @return string|null
     */
    public function getBorderEdge()
    {
        return $this->container['border_edge'];
    }

    /**
     * Sets border_edge.
     *
     * @param string|null $border_edge
     *
     * @return $this
     */
    public function setBorderEdge($border_edge)
    {
        $this->container['border_edge'] = $border_edge;
        return $this;
    }

    /**
     * Gets border_style.
     *
     * @return string|null
     */
    public function getBorderStyle()
    {
        return $this->container['border_style'];
    }

    /**
     * Sets border_style.
     *
     * @param string|null $border_style
     *
     * @return $this
     */
    public function setBorderStyle($border_style)
    {
        $this->container['border_style'] = $border_style;
        return $this;
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
}
