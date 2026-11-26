<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Workbook.php">
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

class Workbook
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Workbook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file_name' => 'string',
        'links' => '\\Aspose\\Cells\\Cloud\\Model\\Link[]',
        'worksheets' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'default_style' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'document_properties' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'names' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'settings' => '\\Aspose\\Cells\\Cloud\\Model\\LinkElement',
        'is_write_protected' => 'string',
        'is_protected' => 'string',
        'is_encryption' => 'string',
        'password' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file_name' => null,
        'links' => null,
        'worksheets' => null,
        'default_style' => null,
        'document_properties' => null,
        'names' => null,
        'settings' => null,
        'is_write_protected' => null,
        'is_protected' => null,
        'is_encryption' => null,
        'password' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'file_name' => 'FileName',
        'links' => 'Links',
        'worksheets' => 'Worksheets',
        'default_style' => 'DefaultStyle',
        'document_properties' => 'DocumentProperties',
        'names' => 'Names',
        'settings' => 'Settings',
        'is_write_protected' => 'IsWriteProtected',
        'is_protected' => 'IsProtected',
        'is_encryption' => 'IsEncryption',
        'password' => 'Password',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'file_name' => 'setFileName',
        'links' => 'setLinks',
        'worksheets' => 'setWorksheets',
        'default_style' => 'setDefaultStyle',
        'document_properties' => 'setDocumentProperties',
        'names' => 'setNames',
        'settings' => 'setSettings',
        'is_write_protected' => 'setIsWriteProtected',
        'is_protected' => 'setIsProtected',
        'is_encryption' => 'setIsEncryption',
        'password' => 'setPassword',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'file_name' => 'getFileName',
        'links' => 'getLinks',
        'worksheets' => 'getWorksheets',
        'default_style' => 'getDefaultStyle',
        'document_properties' => 'getDocumentProperties',
        'names' => 'getNames',
        'settings' => 'getSettings',
        'is_write_protected' => 'getIsWriteProtected',
        'is_protected' => 'getIsProtected',
        'is_encryption' => 'getIsEncryption',
        'password' => 'getPassword',
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
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['worksheets'] = isset($data['worksheets']) ? $data['worksheets'] : null;
        $this->container['default_style'] = isset($data['default_style']) ? $data['default_style'] : null;
        $this->container['document_properties'] = isset($data['document_properties']) ? $data['document_properties'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['is_write_protected'] = isset($data['is_write_protected']) ? $data['is_write_protected'] : null;
        $this->container['is_protected'] = isset($data['is_protected']) ? $data['is_protected'] : null;
        $this->container['is_encryption'] = isset($data['is_encryption']) ? $data['is_encryption'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
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
     * Gets file_name.
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name.
     *
     * @param string|null $file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;
        return $this;
    }

    /**
     * Gets links.
     *
     * @return \Aspose\Cells\Cloud\Model\Link[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links.
     *
     * @param \Aspose\Cells\Cloud\Model\Link[]|null $links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
     * Gets worksheets.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getWorksheets()
    {
        return $this->container['worksheets'];
    }

    /**
     * Sets worksheets.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $worksheets
     *
     * @return $this
     */
    public function setWorksheets($worksheets)
    {
        $this->container['worksheets'] = $worksheets;
        return $this;
    }

    /**
     * Gets default_style.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getDefaultStyle()
    {
        return $this->container['default_style'];
    }

    /**
     * Sets default_style.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $default_style
     *
     * @return $this
     */
    public function setDefaultStyle($default_style)
    {
        $this->container['default_style'] = $default_style;
        return $this;
    }

    /**
     * Gets document_properties.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getDocumentProperties()
    {
        return $this->container['document_properties'];
    }

    /**
     * Sets document_properties.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $document_properties
     *
     * @return $this
     */
    public function setDocumentProperties($document_properties)
    {
        $this->container['document_properties'] = $document_properties;
        return $this;
    }

    /**
     * Gets names.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getNames()
    {
        return $this->container['names'];
    }

    /**
     * Sets names.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $names
     *
     * @return $this
     */
    public function setNames($names)
    {
        $this->container['names'] = $names;
        return $this;
    }

    /**
     * Gets settings.
     *
     * @return \Aspose\Cells\Cloud\Model\LinkElement|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings.
     *
     * @param \Aspose\Cells\Cloud\Model\LinkElement|null $settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;
        return $this;
    }

    /**
     * Gets is_write_protected.
     *
     * @return string|null
     */
    public function getIsWriteProtected()
    {
        return $this->container['is_write_protected'];
    }

    /**
     * Sets is_write_protected.
     *
     * @param string|null $is_write_protected
     *
     * @return $this
     */
    public function setIsWriteProtected($is_write_protected)
    {
        $this->container['is_write_protected'] = $is_write_protected;
        return $this;
    }

    /**
     * Gets is_protected.
     *
     * @return string|null
     */
    public function getIsProtected()
    {
        return $this->container['is_protected'];
    }

    /**
     * Sets is_protected.
     *
     * @param string|null $is_protected
     *
     * @return $this
     */
    public function setIsProtected($is_protected)
    {
        $this->container['is_protected'] = $is_protected;
        return $this;
    }

    /**
     * Gets is_encryption.
     *
     * @return string|null
     */
    public function getIsEncryption()
    {
        return $this->container['is_encryption'];
    }

    /**
     * Sets is_encryption.
     *
     * @param string|null $is_encryption
     *
     * @return $this
     */
    public function setIsEncryption($is_encryption)
    {
        $this->container['is_encryption'] = $is_encryption;
        return $this;
    }

    /**
     * Gets password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password.
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }
}
