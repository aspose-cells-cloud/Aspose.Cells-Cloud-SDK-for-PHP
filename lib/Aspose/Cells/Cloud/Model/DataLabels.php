<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataLabels.php">
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

class DataLabels extends ChartFrame
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataLabels';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_auto_text' => 'bool',
        'is_deleted' => 'bool',
        'linked_source' => 'string',
        'number' => 'int',
        'number_format' => 'string',
        'number_format_linked' => 'bool',
        'position' => 'string',
        'rotation_angle' => 'int',
        'separator' => 'string',
        'show_bubble_size' => 'bool',
        'show_category_name' => 'bool',
        'show_legend_key' => 'bool',
        'show_percentage' => 'bool',
        'show_series_name' => 'bool',
        'show_value' => 'bool',
        'text' => 'string',
        'text_direction' => 'string',
        'text_horizontal_alignment' => 'string',
        'text_vertical_alignment' => 'string',
        'area' => '\\Aspose\\Cells\\Cloud\\Model\\Area',
        'auto_scale_font' => 'bool',
        'background_mode' => 'string',
        'border' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'font' => '\\Aspose\\Cells\\Cloud\\Model\\Font',
        'is_automatic_size' => 'bool',
        'is_inner_mode' => 'bool',
        'shadow' => 'bool',
        'width' => 'int',
        'height' => 'int',
        'x' => 'int',
        'y' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_auto_text' => null,
        'is_deleted' => null,
        'linked_source' => null,
        'number' => 'int32',
        'number_format' => null,
        'number_format_linked' => null,
        'position' => null,
        'rotation_angle' => 'int32',
        'separator' => null,
        'show_bubble_size' => null,
        'show_category_name' => null,
        'show_legend_key' => null,
        'show_percentage' => null,
        'show_series_name' => null,
        'show_value' => null,
        'text' => null,
        'text_direction' => null,
        'text_horizontal_alignment' => null,
        'text_vertical_alignment' => null,
        'area' => null,
        'auto_scale_font' => null,
        'background_mode' => null,
        'border' => null,
        'font' => null,
        'is_automatic_size' => null,
        'is_inner_mode' => null,
        'shadow' => null,
        'width' => 'int32',
        'height' => 'int32',
        'x' => 'int32',
        'y' => 'int32',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'is_auto_text' => 'IsAutoText',
        'is_deleted' => 'IsDeleted',
        'linked_source' => 'LinkedSource',
        'number' => 'Number',
        'number_format' => 'NumberFormat',
        'number_format_linked' => 'NumberFormatLinked',
        'position' => 'Position',
        'rotation_angle' => 'RotationAngle',
        'separator' => 'Separator',
        'show_bubble_size' => 'ShowBubbleSize',
        'show_category_name' => 'ShowCategoryName',
        'show_legend_key' => 'ShowLegendKey',
        'show_percentage' => 'ShowPercentage',
        'show_series_name' => 'ShowSeriesName',
        'show_value' => 'ShowValue',
        'text' => 'Text',
        'text_direction' => 'TextDirection',
        'text_horizontal_alignment' => 'TextHorizontalAlignment',
        'text_vertical_alignment' => 'TextVerticalAlignment',
        'area' => 'Area',
        'auto_scale_font' => 'AutoScaleFont',
        'background_mode' => 'BackgroundMode',
        'border' => 'Border',
        'font' => 'Font',
        'is_automatic_size' => 'IsAutomaticSize',
        'is_inner_mode' => 'IsInnerMode',
        'shadow' => 'Shadow',
        'width' => 'Width',
        'height' => 'Height',
        'x' => 'X',
        'y' => 'Y',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'is_auto_text' => 'setIsAutoText',
        'is_deleted' => 'setIsDeleted',
        'linked_source' => 'setLinkedSource',
        'number' => 'setNumber',
        'number_format' => 'setNumberFormat',
        'number_format_linked' => 'setNumberFormatLinked',
        'position' => 'setPosition',
        'rotation_angle' => 'setRotationAngle',
        'separator' => 'setSeparator',
        'show_bubble_size' => 'setShowBubbleSize',
        'show_category_name' => 'setShowCategoryName',
        'show_legend_key' => 'setShowLegendKey',
        'show_percentage' => 'setShowPercentage',
        'show_series_name' => 'setShowSeriesName',
        'show_value' => 'setShowValue',
        'text' => 'setText',
        'text_direction' => 'setTextDirection',
        'text_horizontal_alignment' => 'setTextHorizontalAlignment',
        'text_vertical_alignment' => 'setTextVerticalAlignment',
        'area' => 'setArea',
        'auto_scale_font' => 'setAutoScaleFont',
        'background_mode' => 'setBackgroundMode',
        'border' => 'setBorder',
        'font' => 'setFont',
        'is_automatic_size' => 'setIsAutomaticSize',
        'is_inner_mode' => 'setIsInnerMode',
        'shadow' => 'setShadow',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'x' => 'setX',
        'y' => 'setY',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'is_auto_text' => 'getIsAutoText',
        'is_deleted' => 'getIsDeleted',
        'linked_source' => 'getLinkedSource',
        'number' => 'getNumber',
        'number_format' => 'getNumberFormat',
        'number_format_linked' => 'getNumberFormatLinked',
        'position' => 'getPosition',
        'rotation_angle' => 'getRotationAngle',
        'separator' => 'getSeparator',
        'show_bubble_size' => 'getShowBubbleSize',
        'show_category_name' => 'getShowCategoryName',
        'show_legend_key' => 'getShowLegendKey',
        'show_percentage' => 'getShowPercentage',
        'show_series_name' => 'getShowSeriesName',
        'show_value' => 'getShowValue',
        'text' => 'getText',
        'text_direction' => 'getTextDirection',
        'text_horizontal_alignment' => 'getTextHorizontalAlignment',
        'text_vertical_alignment' => 'getTextVerticalAlignment',
        'area' => 'getArea',
        'auto_scale_font' => 'getAutoScaleFont',
        'background_mode' => 'getBackgroundMode',
        'border' => 'getBorder',
        'font' => 'getFont',
        'is_automatic_size' => 'getIsAutomaticSize',
        'is_inner_mode' => 'getIsInnerMode',
        'shadow' => 'getShadow',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'x' => 'getX',
        'y' => 'getY',
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
        $this->container['is_auto_text'] = isset($data['is_auto_text']) ? $data['is_auto_text'] : null;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : null;
        $this->container['linked_source'] = isset($data['linked_source']) ? $data['linked_source'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['number_format'] = isset($data['number_format']) ? $data['number_format'] : null;
        $this->container['number_format_linked'] = isset($data['number_format_linked']) ? $data['number_format_linked'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
        $this->container['show_bubble_size'] = isset($data['show_bubble_size']) ? $data['show_bubble_size'] : null;
        $this->container['show_category_name'] = isset($data['show_category_name']) ? $data['show_category_name'] : null;
        $this->container['show_legend_key'] = isset($data['show_legend_key']) ? $data['show_legend_key'] : null;
        $this->container['show_percentage'] = isset($data['show_percentage']) ? $data['show_percentage'] : null;
        $this->container['show_series_name'] = isset($data['show_series_name']) ? $data['show_series_name'] : null;
        $this->container['show_value'] = isset($data['show_value']) ? $data['show_value'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['text_direction'] = isset($data['text_direction']) ? $data['text_direction'] : null;
        $this->container['text_horizontal_alignment'] = isset($data['text_horizontal_alignment']) ? $data['text_horizontal_alignment'] : null;
        $this->container['text_vertical_alignment'] = isset($data['text_vertical_alignment']) ? $data['text_vertical_alignment'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['auto_scale_font'] = isset($data['auto_scale_font']) ? $data['auto_scale_font'] : null;
        $this->container['background_mode'] = isset($data['background_mode']) ? $data['background_mode'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['is_automatic_size'] = isset($data['is_automatic_size']) ? $data['is_automatic_size'] : null;
        $this->container['is_inner_mode'] = isset($data['is_inner_mode']) ? $data['is_inner_mode'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
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
     * Gets is_auto_text.
     *
     * @return bool|null
     */
    public function getIsAutoText()
    {
        return $this->container['is_auto_text'];
    }

    /**
     * Sets is_auto_text.
     *
     * @param bool|null $is_auto_text
     *
     * @return $this
     */
    public function setIsAutoText($is_auto_text)
    {
        $this->container['is_auto_text'] = $is_auto_text;
        return $this;
    }

    /**
     * Gets is_deleted.
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted.
     *
     * @param bool|null $is_deleted
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;
        return $this;
    }

    /**
     * Gets linked_source.
     *
     * @return string|null
     */
    public function getLinkedSource()
    {
        return $this->container['linked_source'];
    }

    /**
     * Sets linked_source.
     *
     * @param string|null $linked_source
     *
     * @return $this
     */
    public function setLinkedSource($linked_source)
    {
        $this->container['linked_source'] = $linked_source;
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
     * Gets number_format.
     *
     * @return string|null
     */
    public function getNumberFormat()
    {
        return $this->container['number_format'];
    }

    /**
     * Sets number_format.
     *
     * @param string|null $number_format
     *
     * @return $this
     */
    public function setNumberFormat($number_format)
    {
        $this->container['number_format'] = $number_format;
        return $this;
    }

    /**
     * Gets number_format_linked.
     *
     * @return bool|null
     */
    public function getNumberFormatLinked()
    {
        return $this->container['number_format_linked'];
    }

    /**
     * Sets number_format_linked.
     *
     * @param bool|null $number_format_linked
     *
     * @return $this
     */
    public function setNumberFormatLinked($number_format_linked)
    {
        $this->container['number_format_linked'] = $number_format_linked;
        return $this;
    }

    /**
     * Gets position.
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position.
     *
     * @param string|null $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
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
     * Gets separator.
     *
     * @return string|null
     */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /**
     * Sets separator.
     *
     * @param string|null $separator
     *
     * @return $this
     */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;
        return $this;
    }

    /**
     * Gets show_bubble_size.
     *
     * @return bool|null
     */
    public function getShowBubbleSize()
    {
        return $this->container['show_bubble_size'];
    }

    /**
     * Sets show_bubble_size.
     *
     * @param bool|null $show_bubble_size
     *
     * @return $this
     */
    public function setShowBubbleSize($show_bubble_size)
    {
        $this->container['show_bubble_size'] = $show_bubble_size;
        return $this;
    }

    /**
     * Gets show_category_name.
     *
     * @return bool|null
     */
    public function getShowCategoryName()
    {
        return $this->container['show_category_name'];
    }

    /**
     * Sets show_category_name.
     *
     * @param bool|null $show_category_name
     *
     * @return $this
     */
    public function setShowCategoryName($show_category_name)
    {
        $this->container['show_category_name'] = $show_category_name;
        return $this;
    }

    /**
     * Gets show_legend_key.
     *
     * @return bool|null
     */
    public function getShowLegendKey()
    {
        return $this->container['show_legend_key'];
    }

    /**
     * Sets show_legend_key.
     *
     * @param bool|null $show_legend_key
     *
     * @return $this
     */
    public function setShowLegendKey($show_legend_key)
    {
        $this->container['show_legend_key'] = $show_legend_key;
        return $this;
    }

    /**
     * Gets show_percentage.
     *
     * @return bool|null
     */
    public function getShowPercentage()
    {
        return $this->container['show_percentage'];
    }

    /**
     * Sets show_percentage.
     *
     * @param bool|null $show_percentage
     *
     * @return $this
     */
    public function setShowPercentage($show_percentage)
    {
        $this->container['show_percentage'] = $show_percentage;
        return $this;
    }

    /**
     * Gets show_series_name.
     *
     * @return bool|null
     */
    public function getShowSeriesName()
    {
        return $this->container['show_series_name'];
    }

    /**
     * Sets show_series_name.
     *
     * @param bool|null $show_series_name
     *
     * @return $this
     */
    public function setShowSeriesName($show_series_name)
    {
        $this->container['show_series_name'] = $show_series_name;
        return $this;
    }

    /**
     * Gets show_value.
     *
     * @return bool|null
     */
    public function getShowValue()
    {
        return $this->container['show_value'];
    }

    /**
     * Sets show_value.
     *
     * @param bool|null $show_value
     *
     * @return $this
     */
    public function setShowValue($show_value)
    {
        $this->container['show_value'] = $show_value;
        return $this;
    }

    /**
     * Gets text.
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text.
     *
     * @param string|null $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;
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
     * Gets text_horizontal_alignment.
     *
     * @return string|null
     */
    public function getTextHorizontalAlignment()
    {
        return $this->container['text_horizontal_alignment'];
    }

    /**
     * Sets text_horizontal_alignment.
     *
     * @param string|null $text_horizontal_alignment
     *
     * @return $this
     */
    public function setTextHorizontalAlignment($text_horizontal_alignment)
    {
        $this->container['text_horizontal_alignment'] = $text_horizontal_alignment;
        return $this;
    }

    /**
     * Gets text_vertical_alignment.
     *
     * @return string|null
     */
    public function getTextVerticalAlignment()
    {
        return $this->container['text_vertical_alignment'];
    }

    /**
     * Sets text_vertical_alignment.
     *
     * @param string|null $text_vertical_alignment
     *
     * @return $this
     */
    public function setTextVerticalAlignment($text_vertical_alignment)
    {
        $this->container['text_vertical_alignment'] = $text_vertical_alignment;
        return $this;
    }

    /**
     * Gets area.
     *
     * @return \Aspose\Cells\Cloud\Model\Area|null
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area.
     *
     * @param \Aspose\Cells\Cloud\Model\Area|null $area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
     * Gets auto_scale_font.
     *
     * @return bool|null
     */
    public function getAutoScaleFont()
    {
        return $this->container['auto_scale_font'];
    }

    /**
     * Sets auto_scale_font.
     *
     * @param bool|null $auto_scale_font
     *
     * @return $this
     */
    public function setAutoScaleFont($auto_scale_font)
    {
        $this->container['auto_scale_font'] = $auto_scale_font;
        return $this;
    }

    /**
     * Gets background_mode.
     *
     * @return string|null
     */
    public function getBackgroundMode()
    {
        return $this->container['background_mode'];
    }

    /**
     * Sets background_mode.
     *
     * @param string|null $background_mode
     *
     * @return $this
     */
    public function setBackgroundMode($background_mode)
    {
        $this->container['background_mode'] = $background_mode;
        return $this;
    }

    /**
     * Gets border.
     *
     * @return \Aspose\Cells\Cloud\Model\Line|null
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border.
     *
     * @param \Aspose\Cells\Cloud\Model\Line|null $border
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;
        return $this;
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
     * Gets is_automatic_size.
     *
     * @return bool|null
     */
    public function getIsAutomaticSize()
    {
        return $this->container['is_automatic_size'];
    }

    /**
     * Sets is_automatic_size.
     *
     * @param bool|null $is_automatic_size
     *
     * @return $this
     */
    public function setIsAutomaticSize($is_automatic_size)
    {
        $this->container['is_automatic_size'] = $is_automatic_size;
        return $this;
    }

    /**
     * Gets is_inner_mode.
     *
     * @return bool|null
     */
    public function getIsInnerMode()
    {
        return $this->container['is_inner_mode'];
    }

    /**
     * Sets is_inner_mode.
     *
     * @param bool|null $is_inner_mode
     *
     * @return $this
     */
    public function setIsInnerMode($is_inner_mode)
    {
        $this->container['is_inner_mode'] = $is_inner_mode;
        return $this;
    }

    /**
     * Gets shadow.
     *
     * @return bool|null
     */
    public function getShadow()
    {
        return $this->container['shadow'];
    }

    /**
     * Sets shadow.
     *
     * @param bool|null $shadow
     *
     * @return $this
     */
    public function setShadow($shadow)
    {
        $this->container['shadow'] = $shadow;
        return $this;
    }

    /**
     * Gets width.
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width.
     *
     * @param int|null $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
     * Gets height.
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param int|null $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
     * Gets x.
     *
     * @return int|null
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x.
     *
     * @param int|null $x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;
        return $this;
    }

    /**
     * Gets y.
     *
     * @return int|null
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y.
     *
     * @param int|null $y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;
        return $this;
    }
}
