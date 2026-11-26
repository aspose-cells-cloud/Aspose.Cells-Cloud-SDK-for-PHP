<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AnalyzedResult.php">
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

class AnalyzedResult
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyzedResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filename' => 'string',
        'description' => 'string',
        'basic_statistics' => '\\Aspose\\Cells\\Cloud\\Model\\ExcelDataStatistics',
        'results' => '\\Aspose\\Cells\\Cloud\\Model\\AnalyzedTableDescription[]',
        'suggested_file' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filename' => null,
        'description' => null,
        'basic_statistics' => null,
        'results' => null,
        'suggested_file' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'filename' => 'Filename',
        'description' => 'Description',
        'basic_statistics' => 'BasicStatistics',
        'results' => 'Results',
        'suggested_file' => 'SuggestedFile',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'filename' => 'setFilename',
        'description' => 'setDescription',
        'basic_statistics' => 'setBasicStatistics',
        'results' => 'setResults',
        'suggested_file' => 'setSuggestedFile',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'filename' => 'getFilename',
        'description' => 'getDescription',
        'basic_statistics' => 'getBasicStatistics',
        'results' => 'getResults',
        'suggested_file' => 'getSuggestedFile',
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
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['basic_statistics'] = isset($data['basic_statistics']) ? $data['basic_statistics'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['suggested_file'] = isset($data['suggested_file']) ? $data['suggested_file'] : null;
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
     * Gets filename.
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename.
     *
     * @param string|null $filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;
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
     * Gets basic_statistics.
     *
     * @return \Aspose\Cells\Cloud\Model\ExcelDataStatistics|null
     */
    public function getBasicStatistics()
    {
        return $this->container['basic_statistics'];
    }

    /**
     * Sets basic_statistics.
     *
     * @param \Aspose\Cells\Cloud\Model\ExcelDataStatistics|null $basic_statistics
     *
     * @return $this
     */
    public function setBasicStatistics($basic_statistics)
    {
        $this->container['basic_statistics'] = $basic_statistics;
        return $this;
    }

    /**
     * Gets results.
     *
     * @return \Aspose\Cells\Cloud\Model\AnalyzedTableDescription[]|null
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results.
     *
     * @param \Aspose\Cells\Cloud\Model\AnalyzedTableDescription[]|null $results
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;
        return $this;
    }

    /**
     * Gets suggested_file.
     *
     * @return string|null
     */
    public function getSuggestedFile()
    {
        return $this->container['suggested_file'];
    }

    /**
     * Sets suggested_file.
     *
     * @param string|null $suggested_file
     *
     * @return $this
     */
    public function setSuggestedFile($suggested_file)
    {
        $this->container['suggested_file'] = $suggested_file;
        return $this;
    }
}
