<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RangeCopyRequest.php">
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

class RangeCopyRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RangeCopyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operate' => 'string',
        'source' => '\\Aspose\\Cells\\Cloud\\Model\\Range',
        'target' => '\\Aspose\\Cells\\Cloud\\Model\\Range',
        'target_workbook' => 'string',
        'paste_options' => '\\Aspose\\Cells\\Cloud\\Model\\PasteOptions',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operate' => null,
        'source' => null,
        'target' => null,
        'target_workbook' => null,
        'paste_options' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'operate' => 'Operate',
        'source' => 'Source',
        'target' => 'Target',
        'target_workbook' => 'TargetWorkbook',
        'paste_options' => 'PasteOptions',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'operate' => 'setOperate',
        'source' => 'setSource',
        'target' => 'setTarget',
        'target_workbook' => 'setTargetWorkbook',
        'paste_options' => 'setPasteOptions',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'operate' => 'getOperate',
        'source' => 'getSource',
        'target' => 'getTarget',
        'target_workbook' => 'getTargetWorkbook',
        'paste_options' => 'getPasteOptions',
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
        $this->container['operate'] = isset($data['operate']) ? $data['operate'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['target_workbook'] = isset($data['target_workbook']) ? $data['target_workbook'] : null;
        $this->container['paste_options'] = isset($data['paste_options']) ? $data['paste_options'] : null;
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
     * Gets operate.
     *
     * @return string|null
     */
    public function getOperate()
    {
        return $this->container['operate'];
    }

    /**
     * Sets operate.
     *
     * @param string|null $operate
     *
     * @return $this
     */
    public function setOperate($operate)
    {
        $this->container['operate'] = $operate;
        return $this;
    }

    /**
     * Gets source.
     *
     * @return \Aspose\Cells\Cloud\Model\Range|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source.
     *
     * @param \Aspose\Cells\Cloud\Model\Range|null $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
     * Gets target.
     *
     * @return \Aspose\Cells\Cloud\Model\Range|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target.
     *
     * @param \Aspose\Cells\Cloud\Model\Range|null $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
     * Gets target_workbook.
     *
     * @return string|null
     */
    public function getTargetWorkbook()
    {
        return $this->container['target_workbook'];
    }

    /**
     * Sets target_workbook.
     *
     * @param string|null $target_workbook
     *
     * @return $this
     */
    public function setTargetWorkbook($target_workbook)
    {
        $this->container['target_workbook'] = $target_workbook;
        return $this;
    }

    /**
     * Gets paste_options.
     *
     * @return \Aspose\Cells\Cloud\Model\PasteOptions|null
     */
    public function getPasteOptions()
    {
        return $this->container['paste_options'];
    }

    /**
     * Sets paste_options.
     *
     * @param \Aspose\Cells\Cloud\Model\PasteOptions|null $paste_options
     *
     * @return $this
     */
    public function setPasteOptions($paste_options)
    {
        $this->container['paste_options'] = $paste_options;
        return $this;
    }
}
