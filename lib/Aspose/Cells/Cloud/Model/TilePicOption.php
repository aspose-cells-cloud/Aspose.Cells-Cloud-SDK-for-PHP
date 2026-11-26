<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="TilePicOption.php">
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

class TilePicOption
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TilePicOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'offset_x' => 'float',
        'offset_y' => 'float',
        'scale_x' => 'float',
        'scale_y' => 'float',
        'alignment_type' => 'string',
        'mirror_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'offset_x' => 'float',
        'offset_y' => 'float',
        'scale_x' => 'float',
        'scale_y' => 'float',
        'alignment_type' => null,
        'mirror_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'offset_x' => 'OffsetX',
        'offset_y' => 'OffsetY',
        'scale_x' => 'ScaleX',
        'scale_y' => 'ScaleY',
        'alignment_type' => 'AlignmentType',
        'mirror_type' => 'MirrorType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'offset_x' => 'setOffsetX',
        'offset_y' => 'setOffsetY',
        'scale_x' => 'setScaleX',
        'scale_y' => 'setScaleY',
        'alignment_type' => 'setAlignmentType',
        'mirror_type' => 'setMirrorType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'offset_x' => 'getOffsetX',
        'offset_y' => 'getOffsetY',
        'scale_x' => 'getScaleX',
        'scale_y' => 'getScaleY',
        'alignment_type' => 'getAlignmentType',
        'mirror_type' => 'getMirrorType',
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
        $this->container['offset_x'] = isset($data['offset_x']) ? $data['offset_x'] : null;
        $this->container['offset_y'] = isset($data['offset_y']) ? $data['offset_y'] : null;
        $this->container['scale_x'] = isset($data['scale_x']) ? $data['scale_x'] : null;
        $this->container['scale_y'] = isset($data['scale_y']) ? $data['scale_y'] : null;
        $this->container['alignment_type'] = isset($data['alignment_type']) ? $data['alignment_type'] : null;
        $this->container['mirror_type'] = isset($data['mirror_type']) ? $data['mirror_type'] : null;
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

    /**
     * Gets scale_x.
     *
     * @return float|null
     */
    public function getScaleX()
    {
        return $this->container['scale_x'];
    }

    /**
     * Sets scale_x.
     *
     * @param float|null $scale_x
     *
     * @return $this
     */
    public function setScaleX($scale_x)
    {
        $this->container['scale_x'] = $scale_x;
        return $this;
    }

    /**
     * Gets scale_y.
     *
     * @return float|null
     */
    public function getScaleY()
    {
        return $this->container['scale_y'];
    }

    /**
     * Sets scale_y.
     *
     * @param float|null $scale_y
     *
     * @return $this
     */
    public function setScaleY($scale_y)
    {
        $this->container['scale_y'] = $scale_y;
        return $this;
    }

    /**
     * Gets alignment_type.
     *
     * @return string|null
     */
    public function getAlignmentType()
    {
        return $this->container['alignment_type'];
    }

    /**
     * Sets alignment_type.
     *
     * @param string|null $alignment_type
     *
     * @return $this
     */
    public function setAlignmentType($alignment_type)
    {
        $this->container['alignment_type'] = $alignment_type;
        return $this;
    }

    /**
     * Gets mirror_type.
     *
     * @return string|null
     */
    public function getMirrorType()
    {
        return $this->container['mirror_type'];
    }

    /**
     * Sets mirror_type.
     *
     * @param string|null $mirror_type
     *
     * @return $this
     */
    public function setMirrorType($mirror_type)
    {
        $this->container['mirror_type'] = $mirror_type;
        return $this;
    }
}
