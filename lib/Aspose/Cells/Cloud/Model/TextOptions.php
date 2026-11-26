<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextOptions.php">
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

class TextOptions extends Font
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fill' => '\\Aspose\\Cells\\Cloud\\Model\\FillFormat',
        'kerning' => 'float',
        'outline' => '\\Aspose\\Cells\\Cloud\\Model\\LineFormat',
        'shadow' => '\\Aspose\\Cells\\Cloud\\Model\\ShadowEffect',
        'spacing' => 'float',
        'underline_color' => '\\Aspose\\Cells\\Cloud\\Model\\CellsColor',
        'color' => '\\Aspose\\Cells\\Cloud\\Model\\Color',
        'double_size' => 'float',
        'is_bold' => 'bool',
        'is_italic' => 'bool',
        'is_strikeout' => 'bool',
        'is_subscript' => 'bool',
        'is_superscript' => 'bool',
        'name' => 'string',
        'size' => 'int',
        'underline' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fill' => null,
        'kerning' => 'float',
        'outline' => null,
        'shadow' => null,
        'spacing' => 'float',
        'underline_color' => null,
        'color' => null,
        'double_size' => 'float',
        'is_bold' => null,
        'is_italic' => null,
        'is_strikeout' => null,
        'is_subscript' => null,
        'is_superscript' => null,
        'name' => null,
        'size' => 'int32',
        'underline' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'fill' => 'Fill',
        'kerning' => 'Kerning',
        'outline' => 'Outline',
        'shadow' => 'Shadow',
        'spacing' => 'Spacing',
        'underline_color' => 'UnderlineColor',
        'color' => 'Color',
        'double_size' => 'DoubleSize',
        'is_bold' => 'IsBold',
        'is_italic' => 'IsItalic',
        'is_strikeout' => 'IsStrikeout',
        'is_subscript' => 'IsSubscript',
        'is_superscript' => 'IsSuperscript',
        'name' => 'Name',
        'size' => 'Size',
        'underline' => 'Underline',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'fill' => 'setFill',
        'kerning' => 'setKerning',
        'outline' => 'setOutline',
        'shadow' => 'setShadow',
        'spacing' => 'setSpacing',
        'underline_color' => 'setUnderlineColor',
        'color' => 'setColor',
        'double_size' => 'setDoubleSize',
        'is_bold' => 'setIsBold',
        'is_italic' => 'setIsItalic',
        'is_strikeout' => 'setIsStrikeout',
        'is_subscript' => 'setIsSubscript',
        'is_superscript' => 'setIsSuperscript',
        'name' => 'setName',
        'size' => 'setSize',
        'underline' => 'setUnderline',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'fill' => 'getFill',
        'kerning' => 'getKerning',
        'outline' => 'getOutline',
        'shadow' => 'getShadow',
        'spacing' => 'getSpacing',
        'underline_color' => 'getUnderlineColor',
        'color' => 'getColor',
        'double_size' => 'getDoubleSize',
        'is_bold' => 'getIsBold',
        'is_italic' => 'getIsItalic',
        'is_strikeout' => 'getIsStrikeout',
        'is_subscript' => 'getIsSubscript',
        'is_superscript' => 'getIsSuperscript',
        'name' => 'getName',
        'size' => 'getSize',
        'underline' => 'getUnderline',
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
        parent::__construct($data);
        $this->container['fill'] = isset($data['fill']) ? $data['fill'] : null;
        $this->container['kerning'] = isset($data['kerning']) ? $data['kerning'] : null;
        $this->container['outline'] = isset($data['outline']) ? $data['outline'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['spacing'] = isset($data['spacing']) ? $data['spacing'] : null;
        $this->container['underline_color'] = isset($data['underline_color']) ? $data['underline_color'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['double_size'] = isset($data['double_size']) ? $data['double_size'] : null;
        $this->container['is_bold'] = isset($data['is_bold']) ? $data['is_bold'] : null;
        $this->container['is_italic'] = isset($data['is_italic']) ? $data['is_italic'] : null;
        $this->container['is_strikeout'] = isset($data['is_strikeout']) ? $data['is_strikeout'] : null;
        $this->container['is_subscript'] = isset($data['is_subscript']) ? $data['is_subscript'] : null;
        $this->container['is_superscript'] = isset($data['is_superscript']) ? $data['is_superscript'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();
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
     * Gets fill.
     *
     * @return \Aspose\Cells\Cloud\Model\FillFormat|null
     */
    public function getFill()
    {
        return $this->container['fill'];
    }

    /**
     * Sets fill.
     *
     * @param \Aspose\Cells\Cloud\Model\FillFormat|null $fill
     *
     * @return $this
     */
    public function setFill($fill)
    {
        $this->container['fill'] = $fill;
        return $this;
    }

    /**
     * Gets kerning.
     *
     * @return float|null
     */
    public function getKerning()
    {
        return $this->container['kerning'];
    }

    /**
     * Sets kerning.
     *
     * @param float|null $kerning
     *
     * @return $this
     */
    public function setKerning($kerning)
    {
        $this->container['kerning'] = $kerning;
        return $this;
    }

    /**
     * Gets outline.
     *
     * @return \Aspose\Cells\Cloud\Model\LineFormat|null
     */
    public function getOutline()
    {
        return $this->container['outline'];
    }

    /**
     * Sets outline.
     *
     * @param \Aspose\Cells\Cloud\Model\LineFormat|null $outline
     *
     * @return $this
     */
    public function setOutline($outline)
    {
        $this->container['outline'] = $outline;
        return $this;
    }

    /**
     * Gets shadow.
     *
     * @return \Aspose\Cells\Cloud\Model\ShadowEffect|null
     */
    public function getShadow()
    {
        return $this->container['shadow'];
    }

    /**
     * Sets shadow.
     *
     * @param \Aspose\Cells\Cloud\Model\ShadowEffect|null $shadow
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;
        return $this;
    }

    /**
     * Gets spacing.
     *
     * @return float|null
     */
    public function getSpacing()
    {
        return $this->container['spacing'];
    }

    /**
     * Sets spacing.
     *
     * @param float|null $spacing
     *
     * @return $this
     */
    public function setSpacing($spacing)
    {
        $this->container['spacing'] = $spacing;
        return $this;
    }

    /**
     * Gets underline_color.
     *
     * @return \Aspose\Cells\Cloud\Model\CellsColor|null
     */
    public function getUnderlineColor()
    {
        return $this->container['underline_color'];
    }

    /**
     * Sets underline_color.
     *
     * @param \Aspose\Cells\Cloud\Model\CellsColor|null $underline_color
     *
     * @return $this
     */
    public function setUnderlineColor($underline_color)
    {
        $this->container['underline_color'] = $underline_color;
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
     * Gets double_size.
     *
     * @return float|null
     */
    public function getDoubleSize()
    {
        return $this->container['double_size'];
    }

    /**
     * Sets double_size.
     *
     * @param float|null $double_size
     *
     * @return $this
     */
    public function setDoubleSize($double_size)
    {
        $this->container['double_size'] = $double_size;
        return $this;
    }

    /**
     * Gets is_bold.
     *
     * @return bool|null
     */
    public function getIsBold()
    {
        return $this->container['is_bold'];
    }

    /**
     * Sets is_bold.
     *
     * @param bool|null $is_bold
     *
     * @return $this
     */
    public function setIsBold($is_bold)
    {
        $this->container['is_bold'] = $is_bold;
        return $this;
    }

    /**
     * Gets is_italic.
     *
     * @return bool|null
     */
    public function getIsItalic()
    {
        return $this->container['is_italic'];
    }

    /**
     * Sets is_italic.
     *
     * @param bool|null $is_italic
     *
     * @return $this
     */
    public function setIsItalic($is_italic)
    {
        $this->container['is_italic'] = $is_italic;
        return $this;
    }

    /**
     * Gets is_strikeout.
     *
     * @return bool|null
     */
    public function getIsStrikeout()
    {
        return $this->container['is_strikeout'];
    }

    /**
     * Sets is_strikeout.
     *
     * @param bool|null $is_strikeout
     *
     * @return $this
     */
    public function setIsStrikeout($is_strikeout)
    {
        $this->container['is_strikeout'] = $is_strikeout;
        return $this;
    }

    /**
     * Gets is_subscript.
     *
     * @return bool|null
     */
    public function getIsSubscript()
    {
        return $this->container['is_subscript'];
    }

    /**
     * Sets is_subscript.
     *
     * @param bool|null $is_subscript
     *
     * @return $this
     */
    public function setIsSubscript($is_subscript)
    {
        $this->container['is_subscript'] = $is_subscript;
        return $this;
    }

    /**
     * Gets is_superscript.
     *
     * @return bool|null
     */
    public function getIsSuperscript()
    {
        return $this->container['is_superscript'];
    }

    /**
     * Sets is_superscript.
     *
     * @param bool|null $is_superscript
     *
     * @return $this
     */
    public function setIsSuperscript($is_superscript)
    {
        $this->container['is_superscript'] = $is_superscript;
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
     * Gets size.
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param int|null $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
     * Gets underline.
     *
     * @return string|null
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /**
     * Sets underline.
     *
     * @param string|null $underline
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;
        return $this;
    }
}
