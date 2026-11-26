<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImportJsonRequest.php">
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

class ImportJsonRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportJsonRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'json_file_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'import_position' => '\\Aspose\\Cells\\Cloud\\Model\\ImportPosition',
        'json_content' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'json_file_source' => null,
        'import_position' => null,
        'json_content' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'json_file_source' => 'JsonFileSource',
        'import_position' => 'ImportPosition',
        'json_content' => 'JsonContent',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'json_file_source' => 'setJsonFileSource',
        'import_position' => 'setImportPosition',
        'json_content' => 'setJsonContent',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'json_file_source' => 'getJsonFileSource',
        'import_position' => 'getImportPosition',
        'json_content' => 'getJsonContent',
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
        $this->container['json_file_source'] = isset($data['json_file_source']) ? $data['json_file_source'] : null;
        $this->container['import_position'] = isset($data['import_position']) ? $data['import_position'] : null;
        $this->container['json_content'] = isset($data['json_content']) ? $data['json_content'] : null;
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
     * Gets json_file_source.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource|null
     */
    public function getJsonFileSource()
    {
        return $this->container['json_file_source'];
    }

    /**
     * Sets json_file_source.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSource|null $json_file_source
     *
     * @return $this
     */
    public function setJsonFileSource($json_file_source)
    {
        $this->container['json_file_source'] = $json_file_source;
        return $this;
    }

    /**
     * Gets import_position.
     *
     * @return \Aspose\Cells\Cloud\Model\ImportPosition|null
     */
    public function getImportPosition()
    {
        return $this->container['import_position'];
    }

    /**
     * Sets import_position.
     *
     * @param \Aspose\Cells\Cloud\Model\ImportPosition|null $import_position
     *
     * @return $this
     */
    public function setImportPosition($import_position)
    {
        $this->container['import_position'] = $import_position;
        return $this;
    }

    /**
     * Gets json_content.
     *
     * @return string|null
     */
    public function getJsonContent()
    {
        return $this->container['json_content'];
    }

    /**
     * Sets json_content.
     *
     * @param string|null $json_content
     *
     * @return $this
     */
    public function setJsonContent($json_content)
    {
        $this->container['json_content'] = $json_content;
        return $this;
    }
}
