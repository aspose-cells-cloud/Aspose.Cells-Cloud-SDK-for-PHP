<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TextBox.php">
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

class TextBox extends Shape
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TextBox';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'mso_drawing_type' => 'string',
        'auto_shape_type' => 'string',
        'placement' => 'string',
        'upper_left_row' => 'int',
        'top' => 'int',
        'upper_left_column' => 'int',
        'left' => 'int',
        'lower_right_row' => 'int',
        'bottom' => 'int',
        'lower_right_column' => 'int',
        'right' => 'int',
        'width' => 'int',
        'height' => 'int',
        'x' => 'int',
        'y' => 'int',
        'rotation_angle' => 'float',
        'html_text' => 'string',
        'text' => 'string',
        'alternative_text' => 'string',
        'text_horizontal_alignment' => 'string',
        'text_horizontal_overflow' => 'string',
        'text_orientation_type' => 'string',
        'text_vertical_alignment' => 'string',
        'text_vertical_overflow' => 'string',
        'is_group' => 'bool',
        'is_hidden' => 'bool',
        'is_lock_aspect_ratio' => 'bool',
        'is_locked' => 'bool',
        'is_printable' => 'bool',
        'is_text_wrapped' => 'bool',
        'is_word_art' => 'bool',
        'linked_cell' => 'string',
        'z_order_position' => 'int',
        'font' => '\\Aspose\\Cells\\Cloud\\Model\\Font',
        'hyperlink' => 'string',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'mso_drawing_type' => null,
        'auto_shape_type' => null,
        'placement' => null,
        'upper_left_row' => 'int32',
        'top' => 'int32',
        'upper_left_column' => 'int32',
        'left' => 'int32',
        'lower_right_row' => 'int32',
        'bottom' => 'int32',
        'lower_right_column' => 'int32',
        'right' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'x' => 'int32',
        'y' => 'int32',
        'rotation_angle' => 'float',
        'html_text' => null,
        'text' => null,
        'alternative_text' => null,
        'text_horizontal_alignment' => null,
        'text_horizontal_overflow' => null,
        'text_orientation_type' => null,
        'text_vertical_alignment' => null,
        'text_vertical_overflow' => null,
        'is_group' => null,
        'is_hidden' => null,
        'is_lock_aspect_ratio' => null,
        'is_locked' => null,
        'is_printable' => null,
        'is_text_wrapped' => null,
        'is_word_art' => null,
        'linked_cell' => null,
        'z_order_position' => 'int32',
        'font' => null,
        'hyperlink' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'name' => 'Name',
        'mso_drawing_type' => 'MsoDrawingType',
        'auto_shape_type' => 'AutoShapeType',
        'placement' => 'Placement',
        'upper_left_row' => 'UpperLeftRow',
        'top' => 'Top',
        'upper_left_column' => 'UpperLeftColumn',
        'left' => 'Left',
        'lower_right_row' => 'LowerRightRow',
        'bottom' => 'Bottom',
        'lower_right_column' => 'LowerRightColumn',
        'right' => 'Right',
        'width' => 'Width',
        'height' => 'Height',
        'x' => 'X',
        'y' => 'Y',
        'rotation_angle' => 'RotationAngle',
        'html_text' => 'HtmlText',
        'text' => 'Text',
        'alternative_text' => 'AlternativeText',
        'text_horizontal_alignment' => 'TextHorizontalAlignment',
        'text_horizontal_overflow' => 'TextHorizontalOverflow',
        'text_orientation_type' => 'TextOrientationType',
        'text_vertical_alignment' => 'TextVerticalAlignment',
        'text_vertical_overflow' => 'TextVerticalOverflow',
        'is_group' => 'IsGroup',
        'is_hidden' => 'IsHidden',
        'is_lock_aspect_ratio' => 'IsLockAspectRatio',
        'is_locked' => 'IsLocked',
        'is_printable' => 'IsPrintable',
        'is_text_wrapped' => 'IsTextWrapped',
        'is_word_art' => 'IsWordArt',
        'linked_cell' => 'LinkedCell',
        'z_order_position' => 'ZOrderPosition',
        'font' => 'Font',
        'hyperlink' => 'Hyperlink',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'name' => 'setName',
        'mso_drawing_type' => 'setMsoDrawingType',
        'auto_shape_type' => 'setAutoShapeType',
        'placement' => 'setPlacement',
        'upper_left_row' => 'setUpperLeftRow',
        'top' => 'setTop',
        'upper_left_column' => 'setUpperLeftColumn',
        'left' => 'setLeft',
        'lower_right_row' => 'setLowerRightRow',
        'bottom' => 'setBottom',
        'lower_right_column' => 'setLowerRightColumn',
        'right' => 'setRight',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'x' => 'setX',
        'y' => 'setY',
        'rotation_angle' => 'setRotationAngle',
        'html_text' => 'setHtmlText',
        'text' => 'setText',
        'alternative_text' => 'setAlternativeText',
        'text_horizontal_alignment' => 'setTextHorizontalAlignment',
        'text_horizontal_overflow' => 'setTextHorizontalOverflow',
        'text_orientation_type' => 'setTextOrientationType',
        'text_vertical_alignment' => 'setTextVerticalAlignment',
        'text_vertical_overflow' => 'setTextVerticalOverflow',
        'is_group' => 'setIsGroup',
        'is_hidden' => 'setIsHidden',
        'is_lock_aspect_ratio' => 'setIsLockAspectRatio',
        'is_locked' => 'setIsLocked',
        'is_printable' => 'setIsPrintable',
        'is_text_wrapped' => 'setIsTextWrapped',
        'is_word_art' => 'setIsWordArt',
        'linked_cell' => 'setLinkedCell',
        'z_order_position' => 'setZOrderPosition',
        'font' => 'setFont',
        'hyperlink' => 'setHyperlink',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'name' => 'getName',
        'mso_drawing_type' => 'getMsoDrawingType',
        'auto_shape_type' => 'getAutoShapeType',
        'placement' => 'getPlacement',
        'upper_left_row' => 'getUpperLeftRow',
        'top' => 'getTop',
        'upper_left_column' => 'getUpperLeftColumn',
        'left' => 'getLeft',
        'lower_right_row' => 'getLowerRightRow',
        'bottom' => 'getBottom',
        'lower_right_column' => 'getLowerRightColumn',
        'right' => 'getRight',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'x' => 'getX',
        'y' => 'getY',
        'rotation_angle' => 'getRotationAngle',
        'html_text' => 'getHtmlText',
        'text' => 'getText',
        'alternative_text' => 'getAlternativeText',
        'text_horizontal_alignment' => 'getTextHorizontalAlignment',
        'text_horizontal_overflow' => 'getTextHorizontalOverflow',
        'text_orientation_type' => 'getTextOrientationType',
        'text_vertical_alignment' => 'getTextVerticalAlignment',
        'text_vertical_overflow' => 'getTextVerticalOverflow',
        'is_group' => 'getIsGroup',
        'is_hidden' => 'getIsHidden',
        'is_lock_aspect_ratio' => 'getIsLockAspectRatio',
        'is_locked' => 'getIsLocked',
        'is_printable' => 'getIsPrintable',
        'is_text_wrapped' => 'getIsTextWrapped',
        'is_word_art' => 'getIsWordArt',
        'linked_cell' => 'getLinkedCell',
        'z_order_position' => 'getZOrderPosition',
        'font' => 'getFont',
        'hyperlink' => 'getHyperlink',
        'link' => 'getLink',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mso_drawing_type'] = isset($data['mso_drawing_type']) ? $data['mso_drawing_type'] : null;
        $this->container['auto_shape_type'] = isset($data['auto_shape_type']) ? $data['auto_shape_type'] : null;
        $this->container['placement'] = isset($data['placement']) ? $data['placement'] : null;
        $this->container['upper_left_row'] = isset($data['upper_left_row']) ? $data['upper_left_row'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['upper_left_column'] = isset($data['upper_left_column']) ? $data['upper_left_column'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['lower_right_row'] = isset($data['lower_right_row']) ? $data['lower_right_row'] : null;
        $this->container['bottom'] = isset($data['bottom']) ? $data['bottom'] : null;
        $this->container['lower_right_column'] = isset($data['lower_right_column']) ? $data['lower_right_column'] : null;
        $this->container['right'] = isset($data['right']) ? $data['right'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['html_text'] = isset($data['html_text']) ? $data['html_text'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['alternative_text'] = isset($data['alternative_text']) ? $data['alternative_text'] : null;
        $this->container['text_horizontal_alignment'] = isset($data['text_horizontal_alignment']) ? $data['text_horizontal_alignment'] : null;
        $this->container['text_horizontal_overflow'] = isset($data['text_horizontal_overflow']) ? $data['text_horizontal_overflow'] : null;
        $this->container['text_orientation_type'] = isset($data['text_orientation_type']) ? $data['text_orientation_type'] : null;
        $this->container['text_vertical_alignment'] = isset($data['text_vertical_alignment']) ? $data['text_vertical_alignment'] : null;
        $this->container['text_vertical_overflow'] = isset($data['text_vertical_overflow']) ? $data['text_vertical_overflow'] : null;
        $this->container['is_group'] = isset($data['is_group']) ? $data['is_group'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['is_lock_aspect_ratio'] = isset($data['is_lock_aspect_ratio']) ? $data['is_lock_aspect_ratio'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['is_printable'] = isset($data['is_printable']) ? $data['is_printable'] : null;
        $this->container['is_text_wrapped'] = isset($data['is_text_wrapped']) ? $data['is_text_wrapped'] : null;
        $this->container['is_word_art'] = isset($data['is_word_art']) ? $data['is_word_art'] : null;
        $this->container['linked_cell'] = isset($data['linked_cell']) ? $data['linked_cell'] : null;
        $this->container['z_order_position'] = isset($data['z_order_position']) ? $data['z_order_position'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['hyperlink'] = isset($data['hyperlink']) ? $data['hyperlink'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
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
     * Gets mso_drawing_type.
     *
     * @return string|null
     */
    public function getMsoDrawingType()
    {
        return $this->container['mso_drawing_type'];
    }

    /**
     * Sets mso_drawing_type.
     *
     * @param string|null $mso_drawing_type
     *
     * @return $this
     */
    public function setMsoDrawingType($mso_drawing_type)
    {
        $this->container['mso_drawing_type'] = $mso_drawing_type;
        return $this;
    }

    /**
     * Gets auto_shape_type.
     *
     * @return string|null
     */
    public function getAutoShapeType()
    {
        return $this->container['auto_shape_type'];
    }

    /**
     * Sets auto_shape_type.
     *
     * @param string|null $auto_shape_type
     *
     * @return $this
     */
    public function setAutoShapeType($auto_shape_type)
    {
        $this->container['auto_shape_type'] = $auto_shape_type;
        return $this;
    }

    /**
     * Gets placement.
     *
     * @return string|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement.
     *
     * @param string|null $placement
     *
     * @return $this
     */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;
        return $this;
    }

    /**
     * Gets upper_left_row.
     *
     * @return int|null
     */
    public function getUpperLeftRow()
    {
        return $this->container['upper_left_row'];
    }

    /**
     * Sets upper_left_row.
     *
     * @param int|null $upper_left_row
     *
     * @return $this
     */
    public function setUpperLeftRow($upper_left_row)
    {
        $this->container['upper_left_row'] = $upper_left_row;
        return $this;
    }

    /**
     * Gets top.
     *
     * @return int|null
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top.
     *
     * @param int|null $top
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
     * Gets upper_left_column.
     *
     * @return int|null
     */
    public function getUpperLeftColumn()
    {
        return $this->container['upper_left_column'];
    }

    /**
     * Sets upper_left_column.
     *
     * @param int|null $upper_left_column
     *
     * @return $this
     */
    public function setUpperLeftColumn($upper_left_column)
    {
        $this->container['upper_left_column'] = $upper_left_column;
        return $this;
    }

    /**
     * Gets left.
     *
     * @return int|null
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left.
     *
     * @param int|null $left
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;
        return $this;
    }

    /**
     * Gets lower_right_row.
     *
     * @return int|null
     */
    public function getLowerRightRow()
    {
        return $this->container['lower_right_row'];
    }

    /**
     * Sets lower_right_row.
     *
     * @param int|null $lower_right_row
     *
     * @return $this
     */
    public function setLowerRightRow($lower_right_row)
    {
        $this->container['lower_right_row'] = $lower_right_row;
        return $this;
    }

    /**
     * Gets bottom.
     *
     * @return int|null
     */
    public function getBottom()
    {
        return $this->container['bottom'];
    }

    /**
     * Sets bottom.
     *
     * @param int|null $bottom
     *
     * @return $this
     */
    public function setBottom($bottom)
    {
        $this->container['bottom'] = $bottom;
        return $this;
    }

    /**
     * Gets lower_right_column.
     *
     * @return int|null
     */
    public function getLowerRightColumn()
    {
        return $this->container['lower_right_column'];
    }

    /**
     * Sets lower_right_column.
     *
     * @param int|null $lower_right_column
     *
     * @return $this
     */
    public function setLowerRightColumn($lower_right_column)
    {
        $this->container['lower_right_column'] = $lower_right_column;
        return $this;
    }

    /**
     * Gets right.
     *
     * @return int|null
     */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
     * Sets right.
     *
     * @param int|null $right
     *
     * @return $this
     */
    public function setRight($right)
    {
        $this->container['right'] = $right;
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

    /**
     * Gets rotation_angle.
     *
     * @return float|null
     */
    public function getRotationAngle()
    {
        return $this->container['rotation_angle'];
    }

    /**
     * Sets rotation_angle.
     *
     * @param float|null $rotation_angle
     *
     * @return $this
     */
    public function setRotationAngle($rotation_angle)
    {
        $this->container['rotation_angle'] = $rotation_angle;
        return $this;
    }

    /**
     * Gets html_text.
     *
     * @return string|null
     */
    public function getHtmlText()
    {
        return $this->container['html_text'];
    }

    /**
     * Sets html_text.
     *
     * @param string|null $html_text
     *
     * @return $this
     */
    public function setHtmlText($html_text)
    {
        $this->container['html_text'] = $html_text;
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
     * Gets alternative_text.
     *
     * @return string|null
     */
    public function getAlternativeText()
    {
        return $this->container['alternative_text'];
    }

    /**
     * Sets alternative_text.
     *
     * @param string|null $alternative_text
     *
     * @return $this
     */
    public function setAlternativeText($alternative_text)
    {
        $this->container['alternative_text'] = $alternative_text;
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
     * Gets text_horizontal_overflow.
     *
     * @return string|null
     */
    public function getTextHorizontalOverflow()
    {
        return $this->container['text_horizontal_overflow'];
    }

    /**
     * Sets text_horizontal_overflow.
     *
     * @param string|null $text_horizontal_overflow
     *
     * @return $this
     */
    public function setTextHorizontalOverflow($text_horizontal_overflow)
    {
        $this->container['text_horizontal_overflow'] = $text_horizontal_overflow;
        return $this;
    }

    /**
     * Gets text_orientation_type.
     *
     * @return string|null
     */
    public function getTextOrientationType()
    {
        return $this->container['text_orientation_type'];
    }

    /**
     * Sets text_orientation_type.
     *
     * @param string|null $text_orientation_type
     *
     * @return $this
     */
    public function setTextOrientationType($text_orientation_type)
    {
        $this->container['text_orientation_type'] = $text_orientation_type;
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
     * Gets text_vertical_overflow.
     *
     * @return string|null
     */
    public function getTextVerticalOverflow()
    {
        return $this->container['text_vertical_overflow'];
    }

    /**
     * Sets text_vertical_overflow.
     *
     * @param string|null $text_vertical_overflow
     *
     * @return $this
     */
    public function setTextVerticalOverflow($text_vertical_overflow)
    {
        $this->container['text_vertical_overflow'] = $text_vertical_overflow;
        return $this;
    }

    /**
     * Gets is_group.
     *
     * @return bool|null
     */
    public function getIsGroup()
    {
        return $this->container['is_group'];
    }

    /**
     * Sets is_group.
     *
     * @param bool|null $is_group
     *
     * @return $this
     */
    public function setIsGroup($is_group)
    {
        $this->container['is_group'] = $is_group;
        return $this;
    }

    /**
     * Gets is_hidden.
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden.
     *
     * @param bool|null $is_hidden
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;
        return $this;
    }

    /**
     * Gets is_lock_aspect_ratio.
     *
     * @return bool|null
     */
    public function getIsLockAspectRatio()
    {
        return $this->container['is_lock_aspect_ratio'];
    }

    /**
     * Sets is_lock_aspect_ratio.
     *
     * @param bool|null $is_lock_aspect_ratio
     *
     * @return $this
     */
    public function setIsLockAspectRatio($is_lock_aspect_ratio)
    {
        $this->container['is_lock_aspect_ratio'] = $is_lock_aspect_ratio;
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
     * Gets is_printable.
     *
     * @return bool|null
     */
    public function getIsPrintable()
    {
        return $this->container['is_printable'];
    }

    /**
     * Sets is_printable.
     *
     * @param bool|null $is_printable
     *
     * @return $this
     */
    public function setIsPrintable($is_printable)
    {
        $this->container['is_printable'] = $is_printable;
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
     * Gets is_word_art.
     *
     * @return bool|null
     */
    public function getIsWordArt()
    {
        return $this->container['is_word_art'];
    }

    /**
     * Sets is_word_art.
     *
     * @param bool|null $is_word_art
     *
     * @return $this
     */
    public function setIsWordArt($is_word_art)
    {
        $this->container['is_word_art'] = $is_word_art;
        return $this;
    }

    /**
     * Gets linked_cell.
     *
     * @return string|null
     */
    public function getLinkedCell()
    {
        return $this->container['linked_cell'];
    }

    /**
     * Sets linked_cell.
     *
     * @param string|null $linked_cell
     *
     * @return $this
     */
    public function setLinkedCell($linked_cell)
    {
        $this->container['linked_cell'] = $linked_cell;
        return $this;
    }

    /**
     * Gets z_order_position.
     *
     * @return int|null
     */
    public function getZOrderPosition()
    {
        return $this->container['z_order_position'];
    }

    /**
     * Sets z_order_position.
     *
     * @param int|null $z_order_position
     *
     * @return $this
     */
    public function setZOrderPosition($z_order_position)
    {
        $this->container['z_order_position'] = $z_order_position;
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
     * Gets hyperlink.
     *
     * @return string|null
     */
    public function getHyperlink()
    {
        return $this->container['hyperlink'];
    }

    /**
     * Sets hyperlink.
     *
     * @param string|null $hyperlink
     *
     * @return $this
     */
    public function setHyperlink($hyperlink)
    {
        $this->container['hyperlink'] = $hyperlink;
        return $this;
    }

    /**
     * Gets link.
     *
     * @return \Aspose\Cells\Cloud\Model\Link|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link.
     *
     * @param \Aspose\Cells\Cloud\Model\Link|null $link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }
}
