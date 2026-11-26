<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="BatchConvertRequest.php">
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

class BatchConvertRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatchConvertRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'source_folder' => 'string',
        'source_storage' => 'string',
        'match_condition' => '\\Aspose\\Cells\\Cloud\\Model\\MatchConditionRequest',
        'format' => 'string',
        'out_folder' => 'string',
        'out_storage' => 'string',
        'region' => 'string',
        'page_wide_fit_on_per_sheet' => 'bool',
        'page_tall_fit_on_per_sheet' => 'bool',
        'save_options' => '\\Aspose\\Cells\\Cloud\\Model\\SaveOptions',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'source_folder' => null,
        'source_storage' => null,
        'match_condition' => null,
        'format' => null,
        'out_folder' => null,
        'out_storage' => null,
        'region' => null,
        'page_wide_fit_on_per_sheet' => null,
        'page_tall_fit_on_per_sheet' => null,
        'save_options' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'source_folder' => 'SourceFolder',
        'source_storage' => 'SourceStorage',
        'match_condition' => 'MatchCondition',
        'format' => 'Format',
        'out_folder' => 'OutFolder',
        'out_storage' => 'OutStorage',
        'region' => 'Region',
        'page_wide_fit_on_per_sheet' => 'PageWideFitOnPerSheet',
        'page_tall_fit_on_per_sheet' => 'PageTallFitOnPerSheet',
        'save_options' => 'SaveOptions',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'source_folder' => 'setSourceFolder',
        'source_storage' => 'setSourceStorage',
        'match_condition' => 'setMatchCondition',
        'format' => 'setFormat',
        'out_folder' => 'setOutFolder',
        'out_storage' => 'setOutStorage',
        'region' => 'setRegion',
        'page_wide_fit_on_per_sheet' => 'setPageWideFitOnPerSheet',
        'page_tall_fit_on_per_sheet' => 'setPageTallFitOnPerSheet',
        'save_options' => 'setSaveOptions',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'source_folder' => 'getSourceFolder',
        'source_storage' => 'getSourceStorage',
        'match_condition' => 'getMatchCondition',
        'format' => 'getFormat',
        'out_folder' => 'getOutFolder',
        'out_storage' => 'getOutStorage',
        'region' => 'getRegion',
        'page_wide_fit_on_per_sheet' => 'getPageWideFitOnPerSheet',
        'page_tall_fit_on_per_sheet' => 'getPageTallFitOnPerSheet',
        'save_options' => 'getSaveOptions',
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
        $this->container['source_folder'] = isset($data['source_folder']) ? $data['source_folder'] : null;
        $this->container['source_storage'] = isset($data['source_storage']) ? $data['source_storage'] : null;
        $this->container['match_condition'] = isset($data['match_condition']) ? $data['match_condition'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['out_folder'] = isset($data['out_folder']) ? $data['out_folder'] : null;
        $this->container['out_storage'] = isset($data['out_storage']) ? $data['out_storage'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['page_wide_fit_on_per_sheet'] = isset($data['page_wide_fit_on_per_sheet']) ? $data['page_wide_fit_on_per_sheet'] : null;
        $this->container['page_tall_fit_on_per_sheet'] = isset($data['page_tall_fit_on_per_sheet']) ? $data['page_tall_fit_on_per_sheet'] : null;
        $this->container['save_options'] = isset($data['save_options']) ? $data['save_options'] : null;
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
     * Gets source_folder.
     *
     * @return string|null
     */
    public function getSourceFolder()
    {
        return $this->container['source_folder'];
    }

    /**
     * Sets source_folder.
     *
     * @param string|null $source_folder
     *
     * @return $this
     */
    public function setSourceFolder($source_folder)
    {
        $this->container['source_folder'] = $source_folder;
        return $this;
    }

    /**
     * Gets source_storage.
     *
     * @return string|null
     */
    public function getSourceStorage()
    {
        return $this->container['source_storage'];
    }

    /**
     * Sets source_storage.
     *
     * @param string|null $source_storage
     *
     * @return $this
     */
    public function setSourceStorage($source_storage)
    {
        $this->container['source_storage'] = $source_storage;
        return $this;
    }

    /**
     * Gets match_condition.
     *
     * @return \Aspose\Cells\Cloud\Model\MatchConditionRequest|null
     */
    public function getMatchCondition()
    {
        return $this->container['match_condition'];
    }

    /**
     * Sets match_condition.
     *
     * @param \Aspose\Cells\Cloud\Model\MatchConditionRequest|null $match_condition
     *
     * @return $this
     */
    public function setMatchCondition($match_condition)
    {
        $this->container['match_condition'] = $match_condition;
        return $this;
    }

    /**
     * Gets format.
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format.
     *
     * @param string|null $format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
     * Gets out_folder.
     *
     * @return string|null
     */
    public function getOutFolder()
    {
        return $this->container['out_folder'];
    }

    /**
     * Sets out_folder.
     *
     * @param string|null $out_folder
     *
     * @return $this
     */
    public function setOutFolder($out_folder)
    {
        $this->container['out_folder'] = $out_folder;
        return $this;
    }

    /**
     * Gets out_storage.
     *
     * @return string|null
     */
    public function getOutStorage()
    {
        return $this->container['out_storage'];
    }

    /**
     * Sets out_storage.
     *
     * @param string|null $out_storage
     *
     * @return $this
     */
    public function setOutStorage($out_storage)
    {
        $this->container['out_storage'] = $out_storage;
        return $this;
    }

    /**
     * Gets region.
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region.
     *
     * @param string|null $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
     * Gets page_wide_fit_on_per_sheet.
     *
     * @return bool|null
     */
    public function getPageWideFitOnPerSheet()
    {
        return $this->container['page_wide_fit_on_per_sheet'];
    }

    /**
     * Sets page_wide_fit_on_per_sheet.
     *
     * @param bool|null $page_wide_fit_on_per_sheet
     *
     * @return $this
     */
    public function setPageWideFitOnPerSheet($page_wide_fit_on_per_sheet)
    {
        $this->container['page_wide_fit_on_per_sheet'] = $page_wide_fit_on_per_sheet;
        return $this;
    }

    /**
     * Gets page_tall_fit_on_per_sheet.
     *
     * @return bool|null
     */
    public function getPageTallFitOnPerSheet()
    {
        return $this->container['page_tall_fit_on_per_sheet'];
    }

    /**
     * Sets page_tall_fit_on_per_sheet.
     *
     * @param bool|null $page_tall_fit_on_per_sheet
     *
     * @return $this
     */
    public function setPageTallFitOnPerSheet($page_tall_fit_on_per_sheet)
    {
        $this->container['page_tall_fit_on_per_sheet'] = $page_tall_fit_on_per_sheet;
        return $this;
    }

    /**
     * Gets save_options.
     *
     * @return \Aspose\Cells\Cloud\Model\SaveOptions|null
     */
    public function getSaveOptions()
    {
        return $this->container['save_options'];
    }

    /**
     * Sets save_options.
     *
     * @param \Aspose\Cells\Cloud\Model\SaveOptions|null $save_options
     *
     * @return $this
     */
    public function setSaveOptions($save_options)
    {
        $this->container['save_options'] = $save_options;
        return $this;
    }
}
