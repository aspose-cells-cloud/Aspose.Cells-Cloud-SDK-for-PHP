<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SaveFilesToCloudResult.php">
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

class SaveFilesToCloudResult extends TaskRunResult
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SaveFilesToCloudResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'saved_files' => '\\Aspose\\Cells\\Cloud\\Model\\Link[]',
        'description' => 'string',
        'out_file_list' => '\\Aspose\\Cells\\Cloud\\Model\\DataSource[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'saved_files' => null,
        'description' => null,
        'out_file_list' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'saved_files' => 'SavedFiles',
        'description' => 'Description',
        'out_file_list' => 'OutFileList',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'saved_files' => 'setSavedFiles',
        'description' => 'setDescription',
        'out_file_list' => 'setOutFileList',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'saved_files' => 'getSavedFiles',
        'description' => 'getDescription',
        'out_file_list' => 'getOutFileList',
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
        $this->container['saved_files'] = isset($data['saved_files']) ? $data['saved_files'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['out_file_list'] = isset($data['out_file_list']) ? $data['out_file_list'] : null;
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
     * Gets saved_files.
     *
     * @return \Aspose\Cells\Cloud\Model\Link[]|null
     */
    public function getSavedFiles()
    {
        return $this->container['saved_files'];
    }

    /**
     * Sets saved_files.
     *
     * @param \Aspose\Cells\Cloud\Model\Link[]|null $saved_files
     *
     * @return $this
     */
    public function setSavedFiles($saved_files)
    {
        $this->container['saved_files'] = $saved_files;
        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
     * Gets out_file_list.
     *
     * @return \Aspose\Cells\Cloud\Model\DataSource[]|null
     */
    public function getOutFileList()
    {
        return $this->container['out_file_list'];
    }

    /**
     * Sets out_file_list.
     *
     * @param \Aspose\Cells\Cloud\Model\DataSource[]|null $out_file_list
     *
     * @return $this
     */
    public function setOutFileList($out_file_list)
    {
        $this->container['out_file_list'] = $out_file_list;
        return $this;
    }
}
