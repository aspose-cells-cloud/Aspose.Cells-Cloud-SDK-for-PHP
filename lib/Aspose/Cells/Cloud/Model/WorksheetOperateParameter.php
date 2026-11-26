<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorksheetOperateParameter.php">
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

class WorksheetOperateParameter extends OperateParameter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorksheetOperateParameter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'sheet_type' => 'string',
        'new_name' => 'string',
        'moving_request' => '\\Aspose\\Cells\\Cloud\\Model\\WorksheetMovingRequest',
        'operate_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'sheet_type' => null,
        'new_name' => null,
        'moving_request' => null,
        'operate_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'name' => 'Name',
        'sheet_type' => 'SheetType',
        'new_name' => 'NewName',
        'moving_request' => 'MovingRequest',
        'operate_type' => 'OperateType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'name' => 'setName',
        'sheet_type' => 'setSheetType',
        'new_name' => 'setNewName',
        'moving_request' => 'setMovingRequest',
        'operate_type' => 'setOperateType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'name' => 'getName',
        'sheet_type' => 'getSheetType',
        'new_name' => 'getNewName',
        'moving_request' => 'getMovingRequest',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sheet_type'] = isset($data['sheet_type']) ? $data['sheet_type'] : null;
        $this->container['new_name'] = isset($data['new_name']) ? $data['new_name'] : null;
        $this->container['moving_request'] = isset($data['moving_request']) ? $data['moving_request'] : null;
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
     * Gets sheet_type.
     *
     * @return string|null
     */
    public function getSheetType()
    {
        return $this->container['sheet_type'];
    }

    /**
     * Sets sheet_type.
     *
     * @param string|null $sheet_type
     *
     * @return $this
     */
    public function setSheetType($sheet_type)
    {
        $this->container['sheet_type'] = $sheet_type;
        return $this;
    }

    /**
     * Gets new_name.
     *
     * @return string|null
     */
    public function getNewName()
    {
        return $this->container['new_name'];
    }

    /**
     * Sets new_name.
     *
     * @param string|null $new_name
     *
     * @return $this
     */
    public function setNewName($new_name)
    {
        $this->container['new_name'] = $new_name;
        return $this;
    }

    /**
     * Gets moving_request.
     *
     * @return \Aspose\Cells\Cloud\Model\WorksheetMovingRequest|null
     */
    public function getMovingRequest()
    {
        return $this->container['moving_request'];
    }

    /**
     * Sets moving_request.
     *
     * @param \Aspose\Cells\Cloud\Model\WorksheetMovingRequest|null $moving_request
     *
     * @return $this
     */
    public function setMovingRequest($moving_request)
    {
        $this->container['moving_request'] = $moving_request;
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
