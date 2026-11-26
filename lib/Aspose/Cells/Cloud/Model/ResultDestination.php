<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ResultDestination.php">
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

class ResultDestination
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResultDestination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_type' => 'string',
        'input_file' => 'string',
        'output_file' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_type' => null,
        'input_file' => null,
        'output_file' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'destination_type' => 'DestinationType',
        'input_file' => 'InputFile',
        'output_file' => 'OutputFile',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'destination_type' => 'setDestinationType',
        'input_file' => 'setInputFile',
        'output_file' => 'setOutputFile',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'destination_type' => 'getDestinationType',
        'input_file' => 'getInputFile',
        'output_file' => 'getOutputFile',
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
        $this->container['destination_type'] = isset($data['destination_type']) ? $data['destination_type'] : null;
        $this->container['input_file'] = isset($data['input_file']) ? $data['input_file'] : null;
        $this->container['output_file'] = isset($data['output_file']) ? $data['output_file'] : null;
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
     * Gets destination_type.
     *
     * @return string|null
     */
    public function getDestinationType()
    {
        return $this->container['destination_type'];
    }

    /**
     * Sets destination_type.
     *
     * @param string|null $destination_type
     *
     * @return $this
     */
    public function setDestinationType($destination_type)
    {
        $this->container['destination_type'] = $destination_type;
        return $this;
    }

    /**
     * Gets input_file.
     *
     * @return string|null
     */
    public function getInputFile()
    {
        return $this->container['input_file'];
    }

    /**
     * Sets input_file.
     *
     * @param string|null $input_file
     *
     * @return $this
     */
    public function setInputFile($input_file)
    {
        $this->container['input_file'] = $input_file;
        return $this;
    }

    /**
     * Gets output_file.
     *
     * @return string|null
     */
    public function getOutputFile()
    {
        return $this->container['output_file'];
    }

    /**
     * Sets output_file.
     *
     * @param string|null $output_file
     *
     * @return $this
     */
    public function setOutputFile($output_file)
    {
        $this->container['output_file'] = $output_file;
        return $this;
    }
}
