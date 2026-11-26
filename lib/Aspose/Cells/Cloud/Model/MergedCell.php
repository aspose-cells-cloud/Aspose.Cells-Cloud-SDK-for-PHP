<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MergedCell.php">
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

class MergedCell extends LinkElement
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MergedCell';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'end_column' => 'int',
        'end_row' => 'int',
        'start_column' => 'int',
        'start_row' => 'int',
        'link' => '\\Aspose\\Cells\\Cloud\\Model\\Link',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'end_column' => 'int32',
        'end_row' => 'int32',
        'start_column' => 'int32',
        'start_row' => 'int32',
        'link' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'end_column' => 'EndColumn',
        'end_row' => 'EndRow',
        'start_column' => 'StartColumn',
        'start_row' => 'StartRow',
        'link' => 'link',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'end_column' => 'setEndColumn',
        'end_row' => 'setEndRow',
        'start_column' => 'setStartColumn',
        'start_row' => 'setStartRow',
        'link' => 'setLink',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'end_column' => 'getEndColumn',
        'end_row' => 'getEndRow',
        'start_column' => 'getStartColumn',
        'start_row' => 'getStartRow',
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
        $this->container['end_column'] = isset($data['end_column']) ? $data['end_column'] : null;
        $this->container['end_row'] = isset($data['end_row']) ? $data['end_row'] : null;
        $this->container['start_column'] = isset($data['start_column']) ? $data['start_column'] : null;
        $this->container['start_row'] = isset($data['start_row']) ? $data['start_row'] : null;
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
     * Gets end_column.
     *
     * @return int|null
     */
    public function getEndColumn()
    {
        return $this->container['end_column'];
    }

    /**
     * Sets end_column.
     *
     * @param int|null $end_column
     *
     * @return $this
     */
    public function setEndColumn($end_column)
    {
        $this->container['end_column'] = $end_column;
        return $this;
    }

    /**
     * Gets end_row.
     *
     * @return int|null
     */
    public function getEndRow()
    {
        return $this->container['end_row'];
    }

    /**
     * Sets end_row.
     *
     * @param int|null $end_row
     *
     * @return $this
     */
    public function setEndRow($end_row)
    {
        $this->container['end_row'] = $end_row;
        return $this;
    }

    /**
     * Gets start_column.
     *
     * @return int|null
     */
    public function getStartColumn()
    {
        return $this->container['start_column'];
    }

    /**
     * Sets start_column.
     *
     * @param int|null $start_column
     *
     * @return $this
     */
    public function setStartColumn($start_column)
    {
        $this->container['start_column'] = $start_column;
        return $this;
    }

    /**
     * Gets start_row.
     *
     * @return int|null
     */
    public function getStartRow()
    {
        return $this->container['start_row'];
    }

    /**
     * Sets start_row.
     *
     * @param int|null $start_row
     *
     * @return $this
     */
    public function setStartRow($start_row)
    {
        $this->container['start_row'] = $start_row;
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
