<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ChartPoint.php">
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

class ChartPoint extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChartPoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'area' => '\\Aspose\\Cells\\Cloud\\Model\\Area',
        'border' => '\\Aspose\\Cells\\Cloud\\Model\\Line',
        'data_labels' => '\\Aspose\\Cells\\Cloud\\Model\\DataLabels',
        'explosion' => 'int',
        'marker' => '\\Aspose\\Cells\\Cloud\\Model\\Marker',
        'shadow' => 'bool',
        'x_value' => 'object',
        'y_value' => 'object',
        'is_in_secondary_plot' => 'bool',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'area' => null,
        'border' => null,
        'data_labels' => null,
        'explosion' => 'int32',
        'marker' => null,
        'shadow' => null,
        'x_value' => null,
        'y_value' => null,
        'is_in_secondary_plot' => null,
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'area' => 'Area',
        'border' => 'Border',
        'data_labels' => 'DataLabels',
        'explosion' => 'Explosion',
        'marker' => 'Marker',
        'shadow' => 'Shadow',
        'x_value' => 'XValue',
        'y_value' => 'YValue',
        'is_in_secondary_plot' => 'IsInSecondaryPlot',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'area' => 'setArea',
        'border' => 'setBorder',
        'data_labels' => 'setDataLabels',
        'explosion' => 'setExplosion',
        'marker' => 'setMarker',
        'shadow' => 'setShadow',
        'x_value' => 'setXValue',
        'y_value' => 'setYValue',
        'is_in_secondary_plot' => 'setIsInSecondaryPlot',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'area' => 'getArea',
        'border' => 'getBorder',
        'data_labels' => 'getDataLabels',
        'explosion' => 'getExplosion',
        'marker' => 'getMarker',
        'shadow' => 'getShadow',
        'x_value' => 'getXValue',
        'y_value' => 'getYValue',
        'is_in_secondary_plot' => 'getIsInSecondaryPlot',
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['data_labels'] = isset($data['data_labels']) ? $data['data_labels'] : null;
        $this->container['explosion'] = isset($data['explosion']) ? $data['explosion'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['shadow'] = isset($data['shadow']) ? $data['shadow'] : null;
        $this->container['x_value'] = isset($data['x_value']) ? $data['x_value'] : null;
        $this->container['y_value'] = isset($data['y_value']) ? $data['y_value'] : null;
        $this->container['is_in_secondary_plot'] = isset($data['is_in_secondary_plot']) ? $data['is_in_secondary_plot'] : null;
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
     * Gets data_labels.
     *
     * @return \Aspose\Cells\Cloud\Model\DataLabels|null
     */
    public function getDataLabels()
    {
        return $this->container['data_labels'];
    }

    /**
     * Sets data_labels.
     *
     * @param \Aspose\Cells\Cloud\Model\DataLabels|null $data_labels
     *
     * @return $this
     */
    public function setDataLabels($data_labels)
    {
        $this->container['data_labels'] = $data_labels;
        return $this;
    }

    /**
     * Gets explosion.
     *
     * @return int|null
     */
    public function getExplosion()
    {
        return $this->container['explosion'];
    }

    /**
     * Sets explosion.
     *
     * @param int|null $explosion
     *
     * @return $this
     */
    public function setExplosion($explosion)
    {
        $this->container['explosion'] = $explosion;
        return $this;
    }

    /**
     * Gets marker.
     *
     * @return \Aspose\Cells\Cloud\Model\Marker|null
     */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
     * Sets marker.
     *
     * @param \Aspose\Cells\Cloud\Model\Marker|null $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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
     * Gets x_value.
     *
     * @return object|null
     */
    public function getXValue()
    {
        return $this->container['x_value'];
    }

    /**
     * Sets x_value.
     *
     * @param object|null $x_value
     *
     * @return $this
     */
    public function setXValue($x_value)
    {
        $this->container['x_value'] = $x_value;
        return $this;
    }

    /**
     * Gets y_value.
     *
     * @return object|null
     */
    public function getYValue()
    {
        return $this->container['y_value'];
    }

    /**
     * Sets y_value.
     *
     * @param object|null $y_value
     *
     * @return $this
     */
    public function setYValue($y_value)
    {
        $this->container['y_value'] = $y_value;
        return $this;
    }

    /**
     * Gets is_in_secondary_plot.
     *
     * @return bool|null
     */
    public function getIsInSecondaryPlot()
    {
        return $this->container['is_in_secondary_plot'];
    }

    /**
     * Sets is_in_secondary_plot.
     *
     * @param bool|null $is_in_secondary_plot
     *
     * @return $this
     */
    public function setIsInSecondaryPlot($is_in_secondary_plot)
    {
        $this->container['is_in_secondary_plot'] = $is_in_secondary_plot;
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
