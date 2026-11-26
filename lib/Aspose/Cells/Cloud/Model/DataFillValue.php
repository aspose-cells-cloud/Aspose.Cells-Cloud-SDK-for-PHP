<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DataFillValue.php">
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

class DataFillValue
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DataFillValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_boolean' => 'bool',
        'default_string' => 'string',
        'default_number' => 'int',
        'default_double' => 'float',
        'default_date' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_boolean' => null,
        'default_string' => null,
        'default_number' => 'int32',
        'default_double' => 'float',
        'default_date' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'default_boolean' => 'DefaultBoolean',
        'default_string' => 'DefaultString',
        'default_number' => 'DefaultNumber',
        'default_double' => 'DefaultDouble',
        'default_date' => 'DefaultDate',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'default_boolean' => 'setDefaultBoolean',
        'default_string' => 'setDefaultString',
        'default_number' => 'setDefaultNumber',
        'default_double' => 'setDefaultDouble',
        'default_date' => 'setDefaultDate',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'default_boolean' => 'getDefaultBoolean',
        'default_string' => 'getDefaultString',
        'default_number' => 'getDefaultNumber',
        'default_double' => 'getDefaultDouble',
        'default_date' => 'getDefaultDate',
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
        $this->container['default_boolean'] = isset($data['default_boolean']) ? $data['default_boolean'] : null;
        $this->container['default_string'] = isset($data['default_string']) ? $data['default_string'] : null;
        $this->container['default_number'] = isset($data['default_number']) ? $data['default_number'] : null;
        $this->container['default_double'] = isset($data['default_double']) ? $data['default_double'] : null;
        $this->container['default_date'] = isset($data['default_date']) ? $data['default_date'] : null;
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
     * Gets default_boolean.
     *
     * @return bool|null
     */
    public function getDefaultBoolean()
    {
        return $this->container['default_boolean'];
    }

    /**
     * Sets default_boolean.
     *
     * @param bool|null $default_boolean
     *
     * @return $this
     */
    public function setDefaultBoolean($default_boolean)
    {
        $this->container['default_boolean'] = $default_boolean;
        return $this;
    }

    /**
     * Gets default_string.
     *
     * @return string|null
     */
    public function getDefaultString()
    {
        return $this->container['default_string'];
    }

    /**
     * Sets default_string.
     *
     * @param string|null $default_string
     *
     * @return $this
     */
    public function setDefaultString($default_string)
    {
        $this->container['default_string'] = $default_string;
        return $this;
    }

    /**
     * Gets default_number.
     *
     * @return int|null
     */
    public function getDefaultNumber()
    {
        return $this->container['default_number'];
    }

    /**
     * Sets default_number.
     *
     * @param int|null $default_number
     *
     * @return $this
     */
    public function setDefaultNumber($default_number)
    {
        $this->container['default_number'] = $default_number;
        return $this;
    }

    /**
     * Gets default_double.
     *
     * @return float|null
     */
    public function getDefaultDouble()
    {
        return $this->container['default_double'];
    }

    /**
     * Sets default_double.
     *
     * @param float|null $default_double
     *
     * @return $this
     */
    public function setDefaultDouble($default_double)
    {
        $this->container['default_double'] = $default_double;
        return $this;
    }

    /**
     * Gets default_date.
     *
     * @return string|null
     */
    public function getDefaultDate()
    {
        return $this->container['default_date'];
    }

    /**
     * Sets default_date.
     *
     * @param string|null $default_date
     *
     * @return $this
     */
    public function setDefaultDate($default_date)
    {
        $this->container['default_date'] = $default_date;
        return $this;
    }
}
