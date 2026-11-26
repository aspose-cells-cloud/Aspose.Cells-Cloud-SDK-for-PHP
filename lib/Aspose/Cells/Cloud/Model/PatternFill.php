<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PatternFill.php">
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

class PatternFill
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PatternFill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pattern' => 'string',
        'background_cells_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'foreground_cells_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'foreground_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'background_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'back_transparency' => 'float',
        'fore_transparency' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pattern' => null,
        'background_cells_color' => null,
        'foreground_cells_color' => null,
        'foreground_color' => null,
        'background_color' => null,
        'back_transparency' => 'float',
        'fore_transparency' => 'float',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'pattern' => 'Pattern',
        'background_cells_color' => 'BackgroundCellsColor',
        'foreground_cells_color' => 'ForegroundCellsColor',
        'foreground_color' => 'ForegroundColor',
        'background_color' => 'BackgroundColor',
        'back_transparency' => 'BackTransparency',
        'fore_transparency' => 'ForeTransparency',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'pattern' => 'setPattern',
        'background_cells_color' => 'setBackgroundCellsColor',
        'foreground_cells_color' => 'setForegroundCellsColor',
        'foreground_color' => 'setForegroundColor',
        'background_color' => 'setBackgroundColor',
        'back_transparency' => 'setBackTransparency',
        'fore_transparency' => 'setForeTransparency',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'pattern' => 'getPattern',
        'background_cells_color' => 'getBackgroundCellsColor',
        'foreground_cells_color' => 'getForegroundCellsColor',
        'foreground_color' => 'getForegroundColor',
        'background_color' => 'getBackgroundColor',
        'back_transparency' => 'getBackTransparency',
        'fore_transparency' => 'getForeTransparency',
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
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['background_cells_color'] = isset($data['background_cells_color']) ? $data['background_cells_color'] : null;
        $this->container['foreground_cells_color'] = isset($data['foreground_cells_color']) ? $data['foreground_cells_color'] : null;
        $this->container['foreground_color'] = isset($data['foreground_color']) ? $data['foreground_color'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['back_transparency'] = isset($data['back_transparency']) ? $data['back_transparency'] : null;
        $this->container['fore_transparency'] = isset($data['fore_transparency']) ? $data['fore_transparency'] : null;
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
     * Gets background_cells_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getBackgroundCellsColor()
    {
        return $this->container['background_cells_color'];
    }

    /**
     * Sets background_cells_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $background_cells_color
     *
     * @return $this
     */
    public function setBackgroundCellsColor($background_cells_color)
    {
        $this->container['background_cells_color'] = $background_cells_color;
        return $this;
    }

    /**
     * Gets foreground_cells_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getForegroundCellsColor()
    {
        return $this->container['foreground_cells_color'];
    }

    /**
     * Sets foreground_cells_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $foreground_cells_color
     *
     * @return $this
     */
    public function setForegroundCellsColor($foreground_cells_color)
    {
        $this->container['foreground_cells_color'] = $foreground_cells_color;
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
     * Gets back_transparency.
     *
     * @return float|null
     */
    public function getBackTransparency()
    {
        return $this->container['back_transparency'];
    }

    /**
     * Sets back_transparency.
     *
     * @param float|null $back_transparency
     *
     * @return $this
     */
    public function setBackTransparency($back_transparency)
    {
        $this->container['back_transparency'] = $back_transparency;
        return $this;
    }

    /**
     * Gets fore_transparency.
     *
     * @return float|null
     */
    public function getForeTransparency()
    {
        return $this->container['fore_transparency'];
    }

    /**
     * Sets fore_transparency.
     *
     * @param float|null $fore_transparency
     *
     * @return $this
     */
    public function setForeTransparency($fore_transparency)
    {
        $this->container['fore_transparency'] = $fore_transparency;
        return $this;
    }
}
