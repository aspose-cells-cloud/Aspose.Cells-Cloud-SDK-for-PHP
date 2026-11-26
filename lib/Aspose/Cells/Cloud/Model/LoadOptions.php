<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="LoadOptions.php">
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

class LoadOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LoadOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'convert_numeric_data' => 'string',
        'interrupt_monitor' => 'string',
        'language_code' => 'string',
        'load_data_options' => 'string',
        'load_format' => 'string',
        'only_load_document_properties' => 'string',
        'parsing_formula_on_open' => 'string',
        'password' => 'string',
        'region' => 'string',
        'standard_font' => 'string',
        'standard_font_size' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'convert_numeric_data' => null,
        'interrupt_monitor' => null,
        'language_code' => null,
        'load_data_options' => null,
        'load_format' => null,
        'only_load_document_properties' => null,
        'parsing_formula_on_open' => null,
        'password' => null,
        'region' => null,
        'standard_font' => null,
        'standard_font_size' => 'float',
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'convert_numeric_data' => 'ConvertNumericData',
        'interrupt_monitor' => 'InterruptMonitor',
        'language_code' => 'LanguageCode',
        'load_data_options' => 'LoadDataOptions',
        'load_format' => 'LoadFormat',
        'only_load_document_properties' => 'OnlyLoadDocumentProperties',
        'parsing_formula_on_open' => 'ParsingFormulaOnOpen',
        'password' => 'Password',
        'region' => 'Region',
        'standard_font' => 'StandardFont',
        'standard_font_size' => 'StandardFontSize',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'convert_numeric_data' => 'setConvertNumericData',
        'interrupt_monitor' => 'setInterruptMonitor',
        'language_code' => 'setLanguageCode',
        'load_data_options' => 'setLoadDataOptions',
        'load_format' => 'setLoadFormat',
        'only_load_document_properties' => 'setOnlyLoadDocumentProperties',
        'parsing_formula_on_open' => 'setParsingFormulaOnOpen',
        'password' => 'setPassword',
        'region' => 'setRegion',
        'standard_font' => 'setStandardFont',
        'standard_font_size' => 'setStandardFontSize',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'convert_numeric_data' => 'getConvertNumericData',
        'interrupt_monitor' => 'getInterruptMonitor',
        'language_code' => 'getLanguageCode',
        'load_data_options' => 'getLoadDataOptions',
        'load_format' => 'getLoadFormat',
        'only_load_document_properties' => 'getOnlyLoadDocumentProperties',
        'parsing_formula_on_open' => 'getParsingFormulaOnOpen',
        'password' => 'getPassword',
        'region' => 'getRegion',
        'standard_font' => 'getStandardFont',
        'standard_font_size' => 'getStandardFontSize',
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
        $this->container['convert_numeric_data'] = isset($data['convert_numeric_data']) ? $data['convert_numeric_data'] : null;
        $this->container['interrupt_monitor'] = isset($data['interrupt_monitor']) ? $data['interrupt_monitor'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['load_data_options'] = isset($data['load_data_options']) ? $data['load_data_options'] : null;
        $this->container['load_format'] = isset($data['load_format']) ? $data['load_format'] : null;
        $this->container['only_load_document_properties'] = isset($data['only_load_document_properties']) ? $data['only_load_document_properties'] : null;
        $this->container['parsing_formula_on_open'] = isset($data['parsing_formula_on_open']) ? $data['parsing_formula_on_open'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['standard_font'] = isset($data['standard_font']) ? $data['standard_font'] : null;
        $this->container['standard_font_size'] = isset($data['standard_font_size']) ? $data['standard_font_size'] : null;
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
     * Gets convert_numeric_data.
     *
     * @return string|null
     */
    public function getConvertNumericData()
    {
        return $this->container['convert_numeric_data'];
    }

    /**
     * Sets convert_numeric_data.
     *
     * @param string|null $convert_numeric_data
     *
     * @return $this
     */
    public function setConvertNumericData($convert_numeric_data)
    {
        $this->container['convert_numeric_data'] = $convert_numeric_data;
        return $this;
    }

    /**
     * Gets interrupt_monitor.
     *
     * @return string|null
     */
    public function getInterruptMonitor()
    {
        return $this->container['interrupt_monitor'];
    }

    /**
     * Sets interrupt_monitor.
     *
     * @param string|null $interrupt_monitor
     *
     * @return $this
     */
    public function setInterruptMonitor($interrupt_monitor)
    {
        $this->container['interrupt_monitor'] = $interrupt_monitor;
        return $this;
    }

    /**
     * Gets language_code.
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code.
     *
     * @param string|null $language_code
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;
        return $this;
    }

    /**
     * Gets load_data_options.
     *
     * @return string|null
     */
    public function getLoadDataOptions()
    {
        return $this->container['load_data_options'];
    }

    /**
     * Sets load_data_options.
     *
     * @param string|null $load_data_options
     *
     * @return $this
     */
    public function setLoadDataOptions($load_data_options)
    {
        $this->container['load_data_options'] = $load_data_options;
        return $this;
    }

    /**
     * Gets load_format.
     *
     * @return string|null
     */
    public function getLoadFormat()
    {
        return $this->container['load_format'];
    }

    /**
     * Sets load_format.
     *
     * @param string|null $load_format
     *
     * @return $this
     */
    public function setLoadFormat($load_format)
    {
        $this->container['load_format'] = $load_format;
        return $this;
    }

    /**
     * Gets only_load_document_properties.
     *
     * @return string|null
     */
    public function getOnlyLoadDocumentProperties()
    {
        return $this->container['only_load_document_properties'];
    }

    /**
     * Sets only_load_document_properties.
     *
     * @param string|null $only_load_document_properties
     *
     * @return $this
     */
    public function setOnlyLoadDocumentProperties($only_load_document_properties)
    {
        $this->container['only_load_document_properties'] = $only_load_document_properties;
        return $this;
    }

    /**
     * Gets parsing_formula_on_open.
     *
     * @return string|null
     */
    public function getParsingFormulaOnOpen()
    {
        return $this->container['parsing_formula_on_open'];
    }

    /**
     * Sets parsing_formula_on_open.
     *
     * @param string|null $parsing_formula_on_open
     *
     * @return $this
     */
    public function setParsingFormulaOnOpen($parsing_formula_on_open)
    {
        $this->container['parsing_formula_on_open'] = $parsing_formula_on_open;
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
     * Gets standard_font.
     *
     * @return string|null
     */
    public function getStandardFont()
    {
        return $this->container['standard_font'];
    }

    /**
     * Sets standard_font.
     *
     * @param string|null $standard_font
     *
     * @return $this
     */
    public function setStandardFont($standard_font)
    {
        $this->container['standard_font'] = $standard_font;
        return $this;
    }

    /**
     * Gets standard_font_size.
     *
     * @return float|null
     */
    public function getStandardFontSize()
    {
        return $this->container['standard_font_size'];
    }

    /**
     * Sets standard_font_size.
     *
     * @param float|null $standard_font_size
     *
     * @return $this
     */
    public function setStandardFontSize($standard_font_size)
    {
        $this->container['standard_font_size'] = $standard_font_size;
        return $this;
    }
}
