<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TickLabels.php">
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

class TickLabels extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TickLabels';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_scale_font' => 'bool',
        'background_mode' => 'string',
        'font' => '\\Aspose\\Cells\\Cloud\\Model\\Font',
        'number' => 'int',
        'number_format' => 'string',
        'number_format_linked' => 'bool',
        'offset' => 'int',
        'rotation_angle' => 'int',
        'text_direction' => 'string',
        'reading_order' => 'string',
        'direction_type' => 'string',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_scale_font' => null,
        'background_mode' => null,
        'font' => null,
        'number' => 'int32',
        'number_format' => null,
        'number_format_linked' => null,
        'offset' => 'int32',
        'rotation_angle' => 'int32',
        'text_direction' => null,
        'reading_order' => null,
        'direction_type' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'auto_scale_font' => 'AutoScaleFont',
        'background_mode' => 'BackgroundMode',
        'font' => 'Font',
        'number' => 'Number',
        'number_format' => 'NumberFormat',
        'number_format_linked' => 'NumberFormatLinked',
        'offset' => 'Offset',
        'rotation_angle' => 'RotationAngle',
        'text_direction' => 'TextDirection',
        'reading_order' => 'ReadingOrder',
        'direction_type' => 'DirectionType',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'auto_scale_font' => 'setAutoScaleFont',
        'background_mode' => 'setBackgroundMode',
        'font' => 'setFont',
        'number' => 'setNumber',
        'number_format' => 'setNumberFormat',
        'number_format_linked' => 'setNumberFormatLinked',
        'offset' => 'setOffset',
        'rotation_angle' => 'setRotationAngle',
        'text_direction' => 'setTextDirection',
        'reading_order' => 'setReadingOrder',
        'direction_type' => 'setDirectionType',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'auto_scale_font' => 'getAutoScaleFont',
        'background_mode' => 'getBackgroundMode',
        'font' => 'getFont',
        'number' => 'getNumber',
        'number_format' => 'getNumberFormat',
        'number_format_linked' => 'getNumberFormatLinked',
        'offset' => 'getOffset',
        'rotation_angle' => 'getRotationAngle',
        'text_direction' => 'getTextDirection',
        'reading_order' => 'getReadingOrder',
        'direction_type' => 'getDirectionType',
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
        $this->container['auto_scale_font'] = isset($data['auto_scale_font']) ? $data['auto_scale_font'] : null;
        $this->container['background_mode'] = isset($data['background_mode']) ? $data['background_mode'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['number_format'] = isset($data['number_format']) ? $data['number_format'] : null;
        $this->container['number_format_linked'] = isset($data['number_format_linked']) ? $data['number_format_linked'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['rotation_angle'] = isset($data['rotation_angle']) ? $data['rotation_angle'] : null;
        $this->container['text_direction'] = isset($data['text_direction']) ? $data['text_direction'] : null;
        $this->container['reading_order'] = isset($data['reading_order']) ? $data['reading_order'] : null;
        $this->container['direction_type'] = isset($data['direction_type']) ? $data['direction_type'] : null;
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
     * Gets offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset.
     *
     * @param int|null $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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
     * Gets reading_order.
     *
     * @return string|null
     */
    public function getReadingOrder()
    {
        return $this->container['reading_order'];
    }

    /**
     * Sets reading_order.
     *
     * @param string|null $reading_order
     *
     * @return $this
     */
    public function setReadingOrder($reading_order)
    {
        $this->container['reading_order'] = $reading_order;
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
