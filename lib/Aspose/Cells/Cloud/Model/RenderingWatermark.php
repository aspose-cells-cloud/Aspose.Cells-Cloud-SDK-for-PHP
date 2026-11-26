<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RenderingWatermark.php">
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

class RenderingWatermark
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RenderingWatermark';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rotation' => 'float',
        'scale_to_page_percent' => 'int',
        'opacity' => 'float',
        'is_background' => 'bool',
        'text' => 'string',
        'font' => '\\Aspose\\Cells\\Cloud\\Model\\RenderingFont',
        'image' => 'int[]',
        'h_alignment' => 'string',
        'v_alignment' => 'string',
        'offset_x' => 'float',
        'offset_y' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rotation' => 'float',
        'scale_to_page_percent' => 'int32',
        'opacity' => 'float',
        'is_background' => null,
        'text' => null,
        'font' => null,
        'image' => null,
        'h_alignment' => null,
        'v_alignment' => null,
        'offset_x' => 'float',
        'offset_y' => 'float',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'rotation' => 'Rotation',
        'scale_to_page_percent' => 'ScaleToPagePercent',
        'opacity' => 'Opacity',
        'is_background' => 'IsBackground',
        'text' => 'Text',
        'font' => 'Font',
        'image' => 'Image',
        'h_alignment' => 'HAlignment',
        'v_alignment' => 'VAlignment',
        'offset_x' => 'OffsetX',
        'offset_y' => 'OffsetY',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'rotation' => 'setRotation',
        'scale_to_page_percent' => 'setScaleToPagePercent',
        'opacity' => 'setOpacity',
        'is_background' => 'setIsBackground',
        'text' => 'setText',
        'font' => 'setFont',
        'image' => 'setImage',
        'h_alignment' => 'setHAlignment',
        'v_alignment' => 'setVAlignment',
        'offset_x' => 'setOffsetX',
        'offset_y' => 'setOffsetY',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'rotation' => 'getRotation',
        'scale_to_page_percent' => 'getScaleToPagePercent',
        'opacity' => 'getOpacity',
        'is_background' => 'getIsBackground',
        'text' => 'getText',
        'font' => 'getFont',
        'image' => 'getImage',
        'h_alignment' => 'getHAlignment',
        'v_alignment' => 'getVAlignment',
        'offset_x' => 'getOffsetX',
        'offset_y' => 'getOffsetY',
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
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['scale_to_page_percent'] = isset($data['scale_to_page_percent']) ? $data['scale_to_page_percent'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['is_background'] = isset($data['is_background']) ? $data['is_background'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['h_alignment'] = isset($data['h_alignment']) ? $data['h_alignment'] : null;
        $this->container['v_alignment'] = isset($data['v_alignment']) ? $data['v_alignment'] : null;
        $this->container['offset_x'] = isset($data['offset_x']) ? $data['offset_x'] : null;
        $this->container['offset_y'] = isset($data['offset_y']) ? $data['offset_y'] : null;
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
     * Gets rotation.
     *
     * @return float|null
     */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
     * Sets rotation.
     *
     * @param float|null $rotation
     *
     * @return $this
     */
    public function setRotation($rotation)
    {
        $this->container['rotation'] = $rotation;
        return $this;
    }

    /**
     * Gets scale_to_page_percent.
     *
     * @return int|null
     */
    public function getScaleToPagePercent()
    {
        return $this->container['scale_to_page_percent'];
    }

    /**
     * Sets scale_to_page_percent.
     *
     * @param int|null $scale_to_page_percent
     *
     * @return $this
     */
    public function setScaleToPagePercent($scale_to_page_percent)
    {
        $this->container['scale_to_page_percent'] = $scale_to_page_percent;
        return $this;
    }

    /**
     * Gets opacity.
     *
     * @return float|null
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity.
     *
     * @param float|null $opacity
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;
        return $this;
    }

    /**
     * Gets is_background.
     *
     * @return bool|null
     */
    public function getIsBackground()
    {
        return $this->container['is_background'];
    }

    /**
     * Sets is_background.
     *
     * @param bool|null $is_background
     *
     * @return $this
     */
    public function setIsBackground($is_background)
    {
        $this->container['is_background'] = $is_background;
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
     * Gets font.
     *
     * @return \Aspose\Cells\Cloud\Model\RenderingFont|null
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font.
     *
     * @param \Aspose\Cells\Cloud\Model\RenderingFont|null $font
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;
        return $this;
    }

    /**
     * Gets image.
     *
     * @return int[]|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param int[]|null $image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
     * Gets h_alignment.
     *
     * @return string|null
     */
    public function getHAlignment()
    {
        return $this->container['h_alignment'];
    }

    /**
     * Sets h_alignment.
     *
     * @param string|null $h_alignment
     *
     * @return $this
     */
    public function setHAlignment($h_alignment)
    {
        $this->container['h_alignment'] = $h_alignment;
        return $this;
    }

    /**
     * Gets v_alignment.
     *
     * @return string|null
     */
    public function getVAlignment()
    {
        return $this->container['v_alignment'];
    }

    /**
     * Sets v_alignment.
     *
     * @param string|null $v_alignment
     *
     * @return $this
     */
    public function setVAlignment($v_alignment)
    {
        $this->container['v_alignment'] = $v_alignment;
        return $this;
    }

    /**
     * Gets offset_x.
     *
     * @return float|null
     */
    public function getOffsetX()
    {
        return $this->container['offset_x'];
    }

    /**
     * Sets offset_x.
     *
     * @param float|null $offset_x
     *
     * @return $this
     */
    public function setOffsetX($offset_x)
    {
        $this->container['offset_x'] = $offset_x;
        return $this;
    }

    /**
     * Gets offset_y.
     *
     * @return float|null
     */
    public function getOffsetY()
    {
        return $this->container['offset_y'];
    }

    /**
     * Sets offset_y.
     *
     * @param float|null $offset_y
     *
     * @return $this
     */
    public function setOffsetY($offset_y)
    {
        $this->container['offset_y'] = $offset_y;
        return $this;
    }
}
