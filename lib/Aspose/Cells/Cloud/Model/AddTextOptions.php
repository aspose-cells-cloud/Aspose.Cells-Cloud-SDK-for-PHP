<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AddTextOptions.php">
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

class AddTextOptions extends BaseOperateOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddTextOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'data_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'file_info' => '\\Aspose\\Cells\\Cloud\\Model\\FileInfo',
        'scope_options' => '\\Aspose\\Cells\\Cloud\\Model\\ScopeOptions',
        'text' => 'string',
        'select_poistion' => 'string',
        'select_text' => 'string',
        'skip_empty_cells' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'data_source' => null,
        'file_info' => null,
        'scope_options' => null,
        'text' => null,
        'select_poistion' => null,
        'select_text' => null,
        'skip_empty_cells' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'name' => 'Name',
        'data_source' => 'DataSource',
        'file_info' => 'FileInfo',
        'scope_options' => 'ScopeOptions',
        'text' => 'Text',
        'select_poistion' => 'SelectPoistion',
        'select_text' => 'SelectText',
        'skip_empty_cells' => 'SkipEmptyCells',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'name' => 'setName',
        'data_source' => 'setDataSource',
        'file_info' => 'setFileInfo',
        'scope_options' => 'setScopeOptions',
        'text' => 'setText',
        'select_poistion' => 'setSelectPoistion',
        'select_text' => 'setSelectText',
        'skip_empty_cells' => 'setSkipEmptyCells',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'name' => 'getName',
        'data_source' => 'getDataSource',
        'file_info' => 'getFileInfo',
        'scope_options' => 'getScopeOptions',
        'text' => 'getText',
        'select_poistion' => 'getSelectPoistion',
        'select_text' => 'getSelectText',
        'skip_empty_cells' => 'getSkipEmptyCells',
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
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['file_info'] = isset($data['file_info']) ? $data['file_info'] : null;
        $this->container['scope_options'] = isset($data['scope_options']) ? $data['scope_options'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['select_poistion'] = isset($data['select_poistion']) ? $data['select_poistion'] : null;
        $this->container['select_text'] = isset($data['select_text']) ? $data['select_text'] : null;
        $this->container['skip_empty_cells'] = isset($data['skip_empty_cells']) ? $data['skip_empty_cells'] : null;
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
     * Gets data_source.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource|null
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSource|null $data_source
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;
        return $this;
    }

    /**
     * Gets file_info.
     *
     * @return \Aspose\Cells\Cloud\Model\FileInfo|null
     */
    public function getFileInfo()
    {
        return $this->container['file_info'];
    }

    /**
     * Sets file_info.
     *
     * @param \Aspose\Cells\Cloud\Model\FileInfo|null $file_info
     *
     * @return $this
     */
    public function setFileInfo($file_info)
    {
        $this->container['file_info'] = $file_info;
        return $this;
    }

    /**
     * Gets scope_options.
     *
     * @return \Aspose\Cells\Cloud\Model\ScopeOptions|null
     */
    public function getScopeOptions()
    {
        return $this->container['scope_options'];
    }

    /**
     * Sets scope_options.
     *
     * @param \Aspose\Cells\Cloud\Model\ScopeOptions|null $scope_options
     *
     * @return $this
     */
    public function setScopeOptions($scope_options)
    {
        $this->container['scope_options'] = $scope_options;
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
     * Gets select_poistion.
     *
     * @return string|null
     */
    public function getSelectPoistion()
    {
        return $this->container['select_poistion'];
    }

    /**
     * Sets select_poistion.
     *
     * @param string|null $select_poistion
     *
     * @return $this
     */
    public function setSelectPoistion($select_poistion)
    {
        $this->container['select_poistion'] = $select_poistion;
        return $this;
    }

    /**
     * Gets select_text.
     *
     * @return string|null
     */
    public function getSelectText()
    {
        return $this->container['select_text'];
    }

    /**
     * Sets select_text.
     *
     * @param string|null $select_text
     *
     * @return $this
     */
    public function setSelectText($select_text)
    {
        $this->container['select_text'] = $select_text;
        return $this;
    }

    /**
     * Gets skip_empty_cells.
     *
     * @return bool|null
     */
    public function getSkipEmptyCells()
    {
        return $this->container['skip_empty_cells'];
    }

    /**
     * Sets skip_empty_cells.
     *
     * @param bool|null $skip_empty_cells
     *
     * @return $this
     */
    public function setSkipEmptyCells($skip_empty_cells)
    {
        $this->container['skip_empty_cells'] = $skip_empty_cells;
        return $this;
    }
}
