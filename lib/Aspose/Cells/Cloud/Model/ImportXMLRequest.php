<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImportXMLRequest.php">
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

class ImportXMLRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportXMLRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'xml_file_source' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource',
        'import_position' => '\\Aspose\\Cells\\Cloud\\Model\\ImportPosition',
        'xml_content' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'xml_file_source' => null,
        'import_position' => null,
        'xml_content' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'xml_file_source' => 'XMLFileSource',
        'import_position' => 'ImportPosition',
        'xml_content' => 'XMLContent',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'xml_file_source' => 'setXmlFileSource',
        'import_position' => 'setImportPosition',
        'xml_content' => 'setXmlContent',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'xml_file_source' => 'getXmlFileSource',
        'import_position' => 'getImportPosition',
        'xml_content' => 'getXmlContent',
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
        $this->container['xml_file_source'] = isset($data['xml_file_source']) ? $data['xml_file_source'] : null;
        $this->container['import_position'] = isset($data['import_position']) ? $data['import_position'] : null;
        $this->container['xml_content'] = isset($data['xml_content']) ? $data['xml_content'] : null;
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
     * Gets xml_file_source.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource|null
     */
    public function getXmlFileSource()
    {
        return $this->container['xml_file_source'];
    }

    /**
     * Sets xml_file_source.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSource|null $xml_file_source
     *
     * @return $this
     */
    public function setXmlFileSource($xml_file_source)
    {
        $this->container['xml_file_source'] = $xml_file_source;
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
     * Gets xml_content.
     *
     * @return string|null
     */
    public function getXmlContent()
    {
        return $this->container['xml_content'];
    }

    /**
     * Sets xml_content.
     *
     * @param string|null $xml_content
     *
     * @return $this
     */
    public function setXmlContent($xml_content)
    {
        $this->container['xml_content'] = $xml_content;
        return $this;
    }
}
