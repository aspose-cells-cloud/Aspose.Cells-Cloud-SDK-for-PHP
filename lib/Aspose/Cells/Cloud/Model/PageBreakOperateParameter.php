<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageBreakOperateParameter.php">
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

class PageBreakOperateParameter extends OperateParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageBreakOperateParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'page_break_type' => 'string',
        'index' => 'int',
        'row' => 'int',
        'column' => 'int',
        'start_index' => 'int',
        'end_index' => 'int',
        'operate_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'page_break_type' => null,
        'index' => 'int32',
        'row' => 'int32',
        'column' => 'int32',
        'start_index' => 'int32',
        'end_index' => 'int32',
        'operate_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'page_break_type' => 'PageBreakType',
        'index' => 'Index',
        'row' => 'Row',
        'column' => 'Column',
        'start_index' => 'StartIndex',
        'end_index' => 'EndIndex',
        'operate_type' => 'OperateType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'page_break_type' => 'setPageBreakType',
        'index' => 'setIndex',
        'row' => 'setRow',
        'column' => 'setColumn',
        'start_index' => 'setStartIndex',
        'end_index' => 'setEndIndex',
        'operate_type' => 'setOperateType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'page_break_type' => 'getPageBreakType',
        'index' => 'getIndex',
        'row' => 'getRow',
        'column' => 'getColumn',
        'start_index' => 'getStartIndex',
        'end_index' => 'getEndIndex',
        'operate_type' => 'getOperateType',
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
        $this->container['page_break_type'] = isset($data['page_break_type']) ? $data['page_break_type'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : null;
        $this->container['end_index'] = isset($data['end_index']) ? $data['end_index'] : null;
        $this->container['operate_type'] = isset($data['operate_type']) ? $data['operate_type'] : null;
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
     * Gets page_break_type.
     *
     * @return string|null
     */
    public function getPageBreakType()
    {
        return $this->container['page_break_type'];
    }

    /**
     * Sets page_break_type.
     *
     * @param string|null $page_break_type
     *
     * @return $this
     */
    public function setPageBreakType($page_break_type)
    {
        $this->container['page_break_type'] = $page_break_type;
        return $this;
    }

    /**
     * Gets index.
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index.
     *
     * @param int|null $index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
     * Gets row.
     *
     * @return int|null
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row.
     *
     * @param int|null $row
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;
        return $this;
    }

    /**
     * Gets column.
     *
     * @return int|null
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column.
     *
     * @param int|null $column
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;
        return $this;
    }

    /**
     * Gets start_index.
     *
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index.
     *
     * @param int|null $start_index
     *
     * @return $this
     */
    public function setStartIndex($start_index)
    {
        $this->container['start_index'] = $start_index;
        return $this;
    }

    /**
     * Gets end_index.
     *
     * @return int|null
     */
    public function getEndIndex()
    {
        return $this->container['end_index'];
    }

    /**
     * Sets end_index.
     *
     * @param int|null $end_index
     *
     * @return $this
     */
    public function setEndIndex($end_index)
    {
        $this->container['end_index'] = $end_index;
        return $this;
    }

    /**
     * Gets operate_type.
     *
     * @return string|null
     */
    public function getOperateType()
    {
        return $this->container['operate_type'];
    }

    /**
     * Sets operate_type.
     *
     * @param string|null $operate_type
     *
     * @return $this
     */
    public function setOperateType($operate_type)
    {
        $this->container['operate_type'] = $operate_type;
        return $this;
    }
}
