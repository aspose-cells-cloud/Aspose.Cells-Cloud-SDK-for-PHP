<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="FileVersion.php">
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

class FileVersion extends StorageFile
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version_id' => 'string',
        'is_latest' => 'bool',
        'name' => 'string',
        'is_folder' => 'bool',
        'modified_date' => '\\DateTime',
        'size' => 'int',
        'path' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version_id' => null,
        'is_latest' => null,
        'name' => null,
        'is_folder' => null,
        'modified_date' => 'date-time',
        'size' => 'int64',
        'path' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'version_id' => 'VersionId',
        'is_latest' => 'IsLatest',
        'name' => 'Name',
        'is_folder' => 'IsFolder',
        'modified_date' => 'ModifiedDate',
        'size' => 'Size',
        'path' => 'Path',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'version_id' => 'setVersionId',
        'is_latest' => 'setIsLatest',
        'name' => 'setName',
        'is_folder' => 'setIsFolder',
        'modified_date' => 'setModifiedDate',
        'size' => 'setSize',
        'path' => 'setPath',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'version_id' => 'getVersionId',
        'is_latest' => 'getIsLatest',
        'name' => 'getName',
        'is_folder' => 'getIsFolder',
        'modified_date' => 'getModifiedDate',
        'size' => 'getSize',
        'path' => 'getPath',
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
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['is_latest'] = isset($data['is_latest']) ? $data['is_latest'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['is_folder'] = isset($data['is_folder']) ? $data['is_folder'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
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
     * Gets version_id.
     *
     * @return string|null
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id.
     *
     * @param string|null $version_id
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;
        return $this;
    }

    /**
     * Gets is_latest.
     *
     * @return bool|null
     */
    public function getIsLatest()
    {
        return $this->container['is_latest'];
    }

    /**
     * Sets is_latest.
     *
     * @param bool|null $is_latest
     *
     * @return $this
     */
    public function setIsLatest($is_latest)
    {
        $this->container['is_latest'] = $is_latest;
        return $this;
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
     * Gets is_folder.
     *
     * @return bool|null
     */
    public function getIsFolder()
    {
        return $this->container['is_folder'];
    }

    /**
     * Sets is_folder.
     *
     * @param bool|null $is_folder
     *
     * @return $this
     */
    public function setIsFolder($is_folder)
    {
        $this->container['is_folder'] = $is_folder;
        return $this;
    }

    /**
     * Gets modified_date.
     *
     * @return \DateTime|null
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date.
     *
     * @param \DateTime|null $modified_date
     *
     * @return $this
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;
        return $this;
    }

    /**
     * Gets size.
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param int|null $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
     * Gets path.
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path.
     *
     * @param string|null $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }
}
