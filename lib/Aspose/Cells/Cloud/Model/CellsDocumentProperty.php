<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellsDocumentProperty.php">
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

class CellsDocumentProperty
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CellsDocumentProperty';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'value' => 'string',
        'is_linked_to_content' => 'string',
        'source' => 'string',
        'type' => 'string',
        'is_generated_name' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'value' => null,
        'is_linked_to_content' => null,
        'source' => null,
        'type' => null,
        'is_generated_name' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'name' => 'Name',
        'value' => 'Value',
        'is_linked_to_content' => 'IsLinkedToContent',
        'source' => 'Source',
        'type' => 'Type',
        'is_generated_name' => 'IsGeneratedName',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'name' => 'setName',
        'value' => 'setValue',
        'is_linked_to_content' => 'setIsLinkedToContent',
        'source' => 'setSource',
        'type' => 'setType',
        'is_generated_name' => 'setIsGeneratedName',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'name' => 'getName',
        'value' => 'getValue',
        'is_linked_to_content' => 'getIsLinkedToContent',
        'source' => 'getSource',
        'type' => 'getType',
        'is_generated_name' => 'getIsGeneratedName',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['is_linked_to_content'] = isset($data['is_linked_to_content']) ? $data['is_linked_to_content'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_generated_name'] = isset($data['is_generated_name']) ? $data['is_generated_name'] : null;
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
     * Gets value.
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value.
     *
     * @param string|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
     * Gets is_linked_to_content.
     *
     * @return string|null
     */
    public function getIsLinkedToContent()
    {
        return $this->container['is_linked_to_content'];
    }

    /**
     * Sets is_linked_to_content.
     *
     * @param string|null $is_linked_to_content
     *
     * @return $this
     */
    public function setIsLinkedToContent($is_linked_to_content)
    {
        $this->container['is_linked_to_content'] = $is_linked_to_content;
        return $this;
    }

    /**
     * Gets source.
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source.
     *
     * @param string|null $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
     * Gets type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
     * Gets is_generated_name.
     *
     * @return string|null
     */
    public function getIsGeneratedName()
    {
        return $this->container['is_generated_name'];
    }

    /**
     * Sets is_generated_name.
     *
     * @param string|null $is_generated_name
     *
     * @return $this
     */
    public function setIsGeneratedName($is_generated_name)
    {
        $this->container['is_generated_name'] = $is_generated_name;
        return $this;
    }
}
