<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ColorFilter.php">
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

class ColorFilter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ColorFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter_by_fill_color' => 'bool',
        'pattern' => 'string',
        'color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'foreground_color_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'background_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filter_by_fill_color' => null,
        'pattern' => null,
        'color' => null,
        'foreground_color_color' => null,
        'background_color' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'filter_by_fill_color' => 'FilterByFillColor',
        'pattern' => 'Pattern',
        'color' => 'Color',
        'foreground_color_color' => 'ForegroundColorColor',
        'background_color' => 'BackgroundColor',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'filter_by_fill_color' => 'setFilterByFillColor',
        'pattern' => 'setPattern',
        'color' => 'setColor',
        'foreground_color_color' => 'setForegroundColorColor',
        'background_color' => 'setBackgroundColor',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'filter_by_fill_color' => 'getFilterByFillColor',
        'pattern' => 'getPattern',
        'color' => 'getColor',
        'foreground_color_color' => 'getForegroundColorColor',
        'background_color' => 'getBackgroundColor',
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
        $this->container['filter_by_fill_color'] = isset($data['filter_by_fill_color']) ? $data['filter_by_fill_color'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['foreground_color_color'] = isset($data['foreground_color_color']) ? $data['foreground_color_color'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
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
     * Gets filter_by_fill_color.
     *
     * @return bool|null
     */
    public function getFilterByFillColor()
    {
        return $this->container['filter_by_fill_color'];
    }

    /**
     * Sets filter_by_fill_color.
     *
     * @param bool|null $filter_by_fill_color
     *
     * @return $this
     */
    public function setFilterByFillColor($filter_by_fill_color)
    {
        $this->container['filter_by_fill_color'] = $filter_by_fill_color;
        return $this;
    }

    /**
     * Gets pattern.
     *
     * @return string|null
     */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern.
     *
     * @param string|null $pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
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
     * Gets foreground_color_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getForegroundColorColor()
    {
        return $this->container['foreground_color_color'];
    }

    /**
     * Sets foreground_color_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $foreground_color_color
     *
     * @return $this
     */
    public function setForegroundColorColor($foreground_color_color)
    {
        $this->container['foreground_color_color'] = $foreground_color_color;
        return $this;
    }

    /**
     * Gets background_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $background_color
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;
        return $this;
    }
}
