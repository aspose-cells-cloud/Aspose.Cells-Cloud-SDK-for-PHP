<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ChartArea.php">
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

class ChartArea extends ChartFrame
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChartArea';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
