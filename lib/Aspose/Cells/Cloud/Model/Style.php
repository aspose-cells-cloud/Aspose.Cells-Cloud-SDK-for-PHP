<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Style.php">
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

class Style
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Style';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'font' => '\\Aspose\\Cells\\Cloud\\Model\\Font',
        'name' => 'string',
        'culture_custom' => 'string',
        'custom' => 'string',
        'background_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'foreground_color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'is_formula_hidden' => 'bool',
        'is_date_time' => 'bool',
        'is_text_wrapped' => 'bool',
        'is_gradient' => 'bool',
        'is_locked' => 'bool',
        'is_percent' => 'bool',
        'shrink_to_fit' => 'bool',
        'indent_level' => 'int',
        'number' => 'int',
        'rotation_angle' => 'int',
        'pattern' => 'string',
        'text_direction' => 'string',
        'vertical_alignment' => 'string',
        'horizontal_alignment' => 'string',
        'border_collection' => '\\Aspose\\Cells\\Cloud\\Model\\Border[]',
        'background_theme_color' => '\\Aspose\\Cells\\Cloud\\Model\\ThemeColor',
        'foreground_theme_color' => '\\Aspose\\Cells\\Cloud\\Model\\ThemeColor',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'font' => null,
        'name' => null,
        'culture_custom' => null,
        'custom' => null,
        'background_color' => null,
        'foreground_color' => null,
        'is_formula_hidden' => null,
        'is_date_time' => null,
        'is_text_wrapped' => null,
        'is_gradient' => null,
        'is_locked' => null,
        'is_percent' => null,
        'shrink_to_fit' => null,
        'indent_level' => 'int32',
        'number' => 'int32',
        'rotation_angle' => 'int32',
        'pattern' => null,
        'text_direction' => null,
        'vertical_alignment' => null,
        'horizontal_alignment' => null,
        'border_collection' => null,
        'background_theme_color' => null,
        'foreground_theme_color' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'font' => 'Font',
        'name' => 'Name',
        'culture_custom' => 'CultureCustom',
        'custom' => 'Custom',
        'background_color' => 'BackgroundColor',
        'foreground_color' => 'ForegroundColor',
        'is_formula_hidden' => 'IsFormulaHidden',
        'is_date_time' => 'IsDateTime',
        'is_text_wrapped' => 'IsTextWrapped',
        'is_gradient' => 'IsGradient',
        'is_locked' => 'IsLocked',
        'is_percent' => 'IsPercent',
        'shrink_to_fit' => 'ShrinkToFit',
        'indent_level' => 'IndentLevel',
        'number' => 'Number',
        'rotation_angle' => 'RotationAngle',
        'pattern' => 'Pattern',
        'text_direction' => 'TextDirection',
        'vertical_alignment' => 'VerticalAlignment',
        'horizontal_alignment' => 'HorizontalAlignment',
        'border_collection' => 'BorderCollection',
        'background_theme_color' => 'BackgroundThemeColor',
        'foreground_theme_color' => 'ForegroundThemeColor',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'font' => 'setFont',
        'name' => 'setName',
        'culture_custom' => 'setCultureCustom',
        'custom' => 'setCustom',
        'background_color' => 'setBackgroundColor',
        'foreground_color' => 'setForegroundColor',
        'is_formula_hidden' => 'setIsFormulaHidden',
        'is_date_time' => 'setIsDateTime',
        'is_text_wrapped' => 'setIsTextWrapped',
        'is_gradient' => 'setIsGradient',
        'is_locked' => 'setIsLocked',
        'is_percent' => 'setIsPercent',
        'shrink_to_fit' => 'setShrinkToFit',
        'indent_level' => 'setIndentLevel',
        'number' => 'setNumber',
        'rotation_angle' => 'setRotationAngle',
        'pattern' => 'setPattern',
        'text_direction' => 'setTextDirection',
        'vertical_alignment' => 'setVerticalAlignment',
        'horizontal_alignment' => 'setHorizontalAlignment',
        'border_collection' => 'setBorderCollection',
        'background_theme_color' => 'setBackgroundThemeColor',
        'foreground_theme_color' => 'setForegroundThemeColor',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'font' => 'getFont',
        'name' => 'getName',
        'culture_custom' => 'getCultureCustom',
        'custom' => 'getCustom',
        'background_color' => 'getBackgroundColor',
        'foreground_color' => 'getForegroundColor',
        'is_formula_hidden' => 'getIsFormulaHidden',
        'is_date_time' => 'getIsDateTime',
        'is_text_wrapped' => 'getIsTextWrapped',
        'is_gradient' => 'getIsGradient',
        'is_locked' => 'getIsLocked',
        'is_percent' => 'getIsPercent',
        'shrink_to_fit' => 'getShrinkToFit',
        'indent_level' => 'getIndentLevel',
        'number' => 'getNumber',
        'rotation_angle' => 'getRotationAngle',
        'pattern' => 'getPattern',
        'text_direction' => 'getTextDirection',
        'vertical_alignment' => 'getVerticalAlignment',
        'horizontal_alignment' => 'getHorizontalAlignment',
        'border_collection' => 'getBorderCollection',
        'background_theme_color' => 'getBackgroundThemeColor',
        'foreground_theme_color' => 'getForegroundThemeColor',
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
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['culture_custom'] = isset($data['culture_custom']) ? $data['culture_custom'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['foreground_color'] = isset($data['foreground_color']) ? $data['foreground_color'] : null;
        $this->container['is_formula_hidden'] = isset($data['is_formula_hidden']) ? $data['is_formula_hidden'] : null;
        $this->container['is_date_time'] = isset($data['is_date_time']) ? $data['is_date_time'] : null;
        $this->container['is_text_wrapped'] = isset($data['is_text_wrapped']) ? $data['is_text_wrapped'] : null;
        $this->container['is_gradient'] = isset($data['is_gradient']) ? $data['is_gradient'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['is_percent'] = isset($data['is_percent']) ? $data['is_percent'] : null;
        $this->container['shrink_to_fit'] = isset($data['shrink_to_fit']) ? $data['shrink_to_fit'] : null;
        $this->container['indent_level'] = isset($data['indent_level']) ? $data['indent_level'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['text_direction'] = isset($data['text_direction']) ? $data['text_direction'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['horizontal_alignment'] = isset($data['horizontal_alignment']) ? $data['horizontal_alignment'] : null;
        $this->container['border_collection'] = isset($data['border_collection']) ? $data['border_collection'] : null;
        $this->container['background_theme_color'] = isset($data['background_theme_color']) ? $data['background_theme_color'] : null;
        $this->container['foreground_theme_color'] = isset($data['foreground_theme_color']) ? $data['foreground_theme_color'] : null;
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
     * Gets font.
     *
     * @return \Aspose\Cells\Cloud\Model\Font|null
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font.
     *
     * @param \Aspose\Cells\Cloud\Model\Font|null $font
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;
        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets culture_custom.
     *
     * @return string|null
     */
    public function getCultureCustom()
    {
        return $this->container['culture_custom'];
    }

    /**
     * Sets culture_custom.
     *
     * @param string|null $culture_custom
     *
     * @return $this
     */
    public function setCultureCustom($culture_custom)
    {
        $this->container['culture_custom'] = $culture_custom;
        return $this;
    }

    /**
     * Gets custom.
     *
     * @return string|null
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom.
     *
     * @param string|null $custom
     *
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;
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
     * Gets is_formula_hidden.
     *
     * @return bool|null
     */
    public function getIsFormulaHidden()
    {
        return $this->container['is_formula_hidden'];
    }

    /**
     * Sets is_formula_hidden.
     *
     * @param bool|null $is_formula_hidden
     *
     * @return $this
     */
    public function setIsFormulaHidden($is_formula_hidden)
    {
        $this->container['is_formula_hidden'] = $is_formula_hidden;
        return $this;
    }

    /**
     * Gets is_date_time.
     *
     * @return bool|null
     */
    public function getIsDateTime()
    {
        return $this->container['is_date_time'];
    }

    /**
     * Sets is_date_time.
     *
     * @param bool|null $is_date_time
     *
     * @return $this
     */
    public function setIsDateTime($is_date_time)
    {
        $this->container['is_date_time'] = $is_date_time;
        return $this;
    }

    /**
     * Gets is_text_wrapped.
     *
     * @return bool|null
     */
    public function getIsTextWrapped()
    {
        return $this->container['is_text_wrapped'];
    }

    /**
     * Sets is_text_wrapped.
     *
     * @param bool|null $is_text_wrapped
     *
     * @return $this
     */
    public function setIsTextWrapped($is_text_wrapped)
    {
        $this->container['is_text_wrapped'] = $is_text_wrapped;
        return $this;
    }

    /**
     * Gets is_gradient.
     *
     * @return bool|null
     */
    public function getIsGradient()
    {
        return $this->container['is_gradient'];
    }

    /**
     * Sets is_gradient.
     *
     * @param bool|null $is_gradient
     *
     * @return $this
     */
    public function setIsGradient($is_gradient)
    {
        $this->container['is_gradient'] = $is_gradient;
        return $this;
    }

    /**
     * Gets is_locked.
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked.
     *
     * @param bool|null $is_locked
     *
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;
        return $this;
    }

    /**
     * Gets is_percent.
     *
     * @return bool|null
     */
    public function getIsPercent()
    {
        return $this->container['is_percent'];
    }

    /**
     * Sets is_percent.
     *
     * @param bool|null $is_percent
     *
     * @return $this
     */
    public function setIsPercent($is_percent)
    {
        $this->container['is_percent'] = $is_percent;
        return $this;
    }

    /**
     * Gets shrink_to_fit.
     *
     * @return bool|null
     */
    public function getShrinkToFit()
    {
        return $this->container['shrink_to_fit'];
    }

    /**
     * Sets shrink_to_fit.
     *
     * @param bool|null $shrink_to_fit
     *
     * @return $this
     */
    public function setShrinkToFit($shrink_to_fit)
    {
        $this->container['shrink_to_fit'] = $shrink_to_fit;
        return $this;
    }

    /**
     * Gets indent_level.
     *
     * @return int|null
     */
    public function getIndentLevel()
    {
        return $this->container['indent_level'];
    }

    /**
     * Sets indent_level.
     *
     * @param int|null $indent_level
     *
     * @return $this
     */
    public function setIndentLevel($indent_level)
    {
        $this->container['indent_level'] = $indent_level;
        return $this;
    }

    /**
     * Gets number.
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number.
     *
     * @param int|null $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
     * Gets rotation_angle.
     *
     * @return int|null
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle.
     *
     * @param int|null $rotation_angle
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;
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
     * Gets text_direction.
     *
     * @return string|null
     */
    public function getTextDirection()
    {
        return $this->container['text_direction'];
    }

    /**
     * Sets text_direction.
     *
     * @param string|null $text_direction
     *
     * @return $this
     */
    public function setTextDirection($text_direction)
    {
        $this->container['text_direction'] = $text_direction;
        return $this;
    }

    /**
     * Gets vertical_alignment.
     *
     * @return string|null
     */
    public function getVerticalAlignment()
    {
        return $this->container['vertical_alignment'];
    }

    /**
     * Sets vertical_alignment.
     *
     * @param string|null $vertical_alignment
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;
        return $this;
    }

    /**
     * Gets horizontal_alignment.
     *
     * @return string|null
     */
    public function getHorizontalAlignment()
    {
        return $this->container['horizontal_alignment'];
    }

    /**
     * Sets horizontal_alignment.
     *
     * @param string|null $horizontal_alignment
     *
     * @return $this
     */
    public function setHorizontalAlignment($horizontal_alignment)
    {
        $this->container['horizontal_alignment'] = $horizontal_alignment;
        return $this;
    }

    /**
     * Gets border_collection.
     *
     * @return \Aspose\Cells\Cloud\Model\Border[]|null
     */
    public function getBorderCollection()
    {
        return $this->container['border_collection'];
    }

    /**
     * Sets border_collection.
     *
     * @param \Aspose\Cells\Cloud\Model\Border[]|null $border_collection
     *
     * @return $this
     */
    public function setBorderCollection($border_collection)
    {
        $this->container['border_collection'] = $border_collection;
        return $this;
    }

    /**
     * Gets background_theme_color.
     *
     * @return \Aspose\Cells\Cloud\Model\ThemeColor|null
     */
    public function getBackgroundThemeColor()
    {
        return $this->container['background_theme_color'];
    }

    /**
     * Sets background_theme_color.
     *
     * @param \Aspose\Cells\Cloud\Model\ThemeColor|null $background_theme_color
     *
     * @return $this
     */
    public function setBackgroundThemeColor($background_theme_color)
    {
        $this->container['background_theme_color'] = $background_theme_color;
        return $this;
    }

    /**
     * Gets foreground_theme_color.
     *
     * @return \Aspose\Cells\Cloud\Model\ThemeColor|null
     */
    public function getForegroundThemeColor()
    {
        return $this->container['foreground_theme_color'];
    }

    /**
     * Sets foreground_theme_color.
     *
     * @param \Aspose\Cells\Cloud\Model\ThemeColor|null $foreground_theme_color
     *
     * @return $this
     */
    public function setForegroundThemeColor($foreground_theme_color)
    {
        $this->container['foreground_theme_color'] = $foreground_theme_color;
        return $this;
    }
}
