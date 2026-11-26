<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AnalyzedColumnDescription.php">
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

class AnalyzedColumnDescription
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyzedColumnDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'index' => 'int',
        'column_index' => 'int',
        'title' => 'string',
        'repetition_rate' => 'float',
        'column_data_data_type' => 'string',
        'number_category_type' => 'string',
        'text_category_type' => 'string',
        'style_number' => 'int',
        'column_data_exception_description' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'index' => 'int32',
        'column_index' => 'int32',
        'title' => null,
        'repetition_rate' => 'float',
        'column_data_data_type' => null,
        'number_category_type' => null,
        'text_category_type' => null,
        'style_number' => 'int32',
        'column_data_exception_description' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'index' => 'Index',
        'column_index' => 'ColumnIndex',
        'title' => 'Title',
        'repetition_rate' => 'RepetitionRate',
        'column_data_data_type' => 'ColumnDataDataType',
        'number_category_type' => 'NumberCategoryType',
        'text_category_type' => 'TextCategoryType',
        'style_number' => 'StyleNumber',
        'column_data_exception_description' => 'columnDataExceptionDescription',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'index' => 'setIndex',
        'column_index' => 'setColumnIndex',
        'title' => 'setTitle',
        'repetition_rate' => 'setRepetitionRate',
        'column_data_data_type' => 'setColumnDataDataType',
        'number_category_type' => 'setNumberCategoryType',
        'text_category_type' => 'setTextCategoryType',
        'style_number' => 'setStyleNumber',
        'column_data_exception_description' => 'setColumnDataExceptionDescription',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'index' => 'getIndex',
        'column_index' => 'getColumnIndex',
        'title' => 'getTitle',
        'repetition_rate' => 'getRepetitionRate',
        'column_data_data_type' => 'getColumnDataDataType',
        'number_category_type' => 'getNumberCategoryType',
        'text_category_type' => 'getTextCategoryType',
        'style_number' => 'getStyleNumber',
        'column_data_exception_description' => 'getColumnDataExceptionDescription',
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['column_index'] = isset($data['column_index']) ? $data['column_index'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['repetition_rate'] = isset($data['repetition_rate']) ? $data['repetition_rate'] : null;
        $this->container['column_data_data_type'] = isset($data['column_data_data_type']) ? $data['column_data_data_type'] : null;
        $this->container['number_category_type'] = isset($data['number_category_type']) ? $data['number_category_type'] : null;
        $this->container['text_category_type'] = isset($data['text_category_type']) ? $data['text_category_type'] : null;
        $this->container['style_number'] = isset($data['style_number']) ? $data['style_number'] : null;
        $this->container['column_data_exception_description'] = isset($data['column_data_exception_description']) ? $data['column_data_exception_description'] : null;
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
     * Gets column_index.
     *
     * @return int|null
     */
    public function getColumnIndex()
    {
        return $this->container['column_index'];
    }

    /**
     * Sets column_index.
     *
     * @param int|null $column_index
     *
     * @return $this
     */
    public function setColumnIndex($column_index)
    {
        $this->container['column_index'] = $column_index;
        return $this;
    }

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string|null $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
     * Gets repetition_rate.
     *
     * @return float|null
     */
    public function getRepetitionRate()
    {
        return $this->container['repetition_rate'];
    }

    /**
     * Sets repetition_rate.
     *
     * @param float|null $repetition_rate
     *
     * @return $this
     */
    public function setRepetitionRate($repetition_rate)
    {
        $this->container['repetition_rate'] = $repetition_rate;
        return $this;
    }

    /**
     * Gets column_data_data_type.
     *
     * @return string|null
     */
    public function getColumnDataDataType()
    {
        return $this->container['column_data_data_type'];
    }

    /**
     * Sets column_data_data_type.
     *
     * @param string|null $column_data_data_type
     *
     * @return $this
     */
    public function setColumnDataDataType($column_data_data_type)
    {
        $this->container['column_data_data_type'] = $column_data_data_type;
        return $this;
    }

    /**
     * Gets number_category_type.
     *
     * @return string|null
     */
    public function getNumberCategoryType()
    {
        return $this->container['number_category_type'];
    }

    /**
     * Sets number_category_type.
     *
     * @param string|null $number_category_type
     *
     * @return $this
     */
    public function setNumberCategoryType($number_category_type)
    {
        $this->container['number_category_type'] = $number_category_type;
        return $this;
    }

    /**
     * Gets text_category_type.
     *
     * @return string|null
     */
    public function getTextCategoryType()
    {
        return $this->container['text_category_type'];
    }

    /**
     * Sets text_category_type.
     *
     * @param string|null $text_category_type
     *
     * @return $this
     */
    public function setTextCategoryType($text_category_type)
    {
        $this->container['text_category_type'] = $text_category_type;
        return $this;
    }

    /**
     * Gets style_number.
     *
     * @return int|null
     */
    public function getStyleNumber()
    {
        return $this->container['style_number'];
    }

    /**
     * Sets style_number.
     *
     * @param int|null $style_number
     *
     * @return $this
     */
    public function setStyleNumber($style_number)
    {
        $this->container['style_number'] = $style_number;
        return $this;
    }

    /**
     * Gets column_data_exception_description.
     *
     * @return string|null
     */
    public function getColumnDataExceptionDescription()
    {
        return $this->container['column_data_exception_description'];
    }

    /**
     * Sets column_data_exception_description.
     *
     * @param string|null $column_data_exception_description
     *
     * @return $this
     */
    public function setColumnDataExceptionDescription($column_data_exception_description)
    {
        $this->container['column_data_exception_description'] = $column_data_exception_description;
        return $this;
    }
}
