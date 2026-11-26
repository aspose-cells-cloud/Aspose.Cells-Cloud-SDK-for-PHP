<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorkbookSettings.php">
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

class WorkbookSettings
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkbookSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_compress_pictures' => 'bool',
        'auto_recover' => 'bool',
        'build_version' => 'string',
        'calc_mode' => 'string',
        'calculation_id' => 'string',
        'check_comptiliblity' => 'bool',
        'check_excel_restriction' => 'bool',
        'crash_save' => 'bool',
        'create_calc_chain' => 'bool',
        'data_extract_load' => 'bool',
        'date1904' => 'bool',
        'display_drawing_objects' => 'string',
        'enable_macros' => 'bool',
        'first_visible_tab' => 'int',
        'hide_pivot_field_list' => 'bool',
        'is_default_encrypted' => 'bool',
        'is_hidden' => 'bool',
        'is_h_scroll_bar_visible' => 'bool',
        'is_minimized' => 'bool',
        'is_v_scroll_bar_visible' => 'bool',
        'iteration' => 'bool',
        'language_code' => 'string',
        'max_change' => 'float',
        'max_iteration' => 'int',
        'memory_setting' => 'string',
        'number_decimal_separator' => 'string',
        'number_group_separator' => 'string',
        'parsing_formula_on_open' => 'bool',
        'precision_as_displayed' => 'bool',
        'recalculate_before_save' => 'bool',
        're_calculate_on_open' => 'bool',
        'recommend_read_only' => 'bool',
        'region' => 'string',
        'remove_personal_information' => 'bool',
        'repair_load' => 'bool',
        'shared' => 'bool',
        'sheet_tab_bar_width' => 'int',
        'show_tabs' => 'bool',
        'update_adjacent_cells_border' => 'bool',
        'update_links_type' => 'string',
        'window_height' => 'float',
        'window_left' => 'float',
        'window_top' => 'float',
        'window_width' => 'float',
        'author' => 'string',
        'check_custom_number_format' => 'bool',
        'protection_type' => 'string',
        'globalization_settings' => '\\Aspose\\Cells\\Cloud\\Model\\GlobalizationSettings',
        'password' => 'string',
        'write_protection' => '\\Aspose\\Cells\\Cloud\\Model\\WriteProtection',
        'is_encrypted' => 'bool',
        'is_protected' => 'bool',
        'max_row' => 'int',
        'max_column' => 'int',
        'significant_digits' => 'int',
        'check_compatibility' => 'bool',
        'paper_size' => 'string',
        'max_rows_of_shared_formula' => 'int',
        'compliance' => 'string',
        'quote_prefix_to_style' => 'bool',
        'formula_settings' => '\\Aspose\\Cells\\Cloud\\Model\\FormulaSettings',
        'force_full_calculate' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_compress_pictures' => null,
        'auto_recover' => null,
        'build_version' => null,
        'calc_mode' => null,
        'calculation_id' => null,
        'check_comptiliblity' => null,
        'check_excel_restriction' => null,
        'crash_save' => null,
        'create_calc_chain' => null,
        'data_extract_load' => null,
        'date1904' => null,
        'display_drawing_objects' => null,
        'enable_macros' => null,
        'first_visible_tab' => 'int32',
        'hide_pivot_field_list' => null,
        'is_default_encrypted' => null,
        'is_hidden' => null,
        'is_h_scroll_bar_visible' => null,
        'is_minimized' => null,
        'is_v_scroll_bar_visible' => null,
        'iteration' => null,
        'language_code' => null,
        'max_change' => 'float',
        'max_iteration' => 'int32',
        'memory_setting' => null,
        'number_decimal_separator' => null,
        'number_group_separator' => null,
        'parsing_formula_on_open' => null,
        'precision_as_displayed' => null,
        'recalculate_before_save' => null,
        're_calculate_on_open' => null,
        'recommend_read_only' => null,
        'region' => null,
        'remove_personal_information' => null,
        'repair_load' => null,
        'shared' => null,
        'sheet_tab_bar_width' => 'int32',
        'show_tabs' => null,
        'update_adjacent_cells_border' => null,
        'update_links_type' => null,
        'window_height' => 'float',
        'window_left' => 'float',
        'window_top' => 'float',
        'window_width' => 'float',
        'author' => null,
        'check_custom_number_format' => null,
        'protection_type' => null,
        'globalization_settings' => null,
        'password' => null,
        'write_protection' => null,
        'is_encrypted' => null,
        'is_protected' => null,
        'max_row' => 'int32',
        'max_column' => 'int32',
        'significant_digits' => 'int32',
        'check_compatibility' => null,
        'paper_size' => null,
        'max_rows_of_shared_formula' => 'int32',
        'compliance' => null,
        'quote_prefix_to_style' => null,
        'formula_settings' => null,
        'force_full_calculate' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'auto_compress_pictures' => 'AutoCompressPictures',
        'auto_recover' => 'AutoRecover',
        'build_version' => 'BuildVersion',
        'calc_mode' => 'CalcMode',
        'calculation_id' => 'CalculationId',
        'check_comptiliblity' => 'CheckComptiliblity',
        'check_excel_restriction' => 'CheckExcelRestriction',
        'crash_save' => 'CrashSave',
        'create_calc_chain' => 'CreateCalcChain',
        'data_extract_load' => 'DataExtractLoad',
        'date1904' => 'Date1904',
        'display_drawing_objects' => 'DisplayDrawingObjects',
        'enable_macros' => 'EnableMacros',
        'first_visible_tab' => 'FirstVisibleTab',
        'hide_pivot_field_list' => 'HidePivotFieldList',
        'is_default_encrypted' => 'IsDefaultEncrypted',
        'is_hidden' => 'IsHidden',
        'is_h_scroll_bar_visible' => 'IsHScrollBarVisible',
        'is_minimized' => 'IsMinimized',
        'is_v_scroll_bar_visible' => 'IsVScrollBarVisible',
        'iteration' => 'Iteration',
        'language_code' => 'LanguageCode',
        'max_change' => 'MaxChange',
        'max_iteration' => 'MaxIteration',
        'memory_setting' => 'MemorySetting',
        'number_decimal_separator' => 'NumberDecimalSeparator',
        'number_group_separator' => 'NumberGroupSeparator',
        'parsing_formula_on_open' => 'ParsingFormulaOnOpen',
        'precision_as_displayed' => 'PrecisionAsDisplayed',
        'recalculate_before_save' => 'RecalculateBeforeSave',
        're_calculate_on_open' => 'ReCalculateOnOpen',
        'recommend_read_only' => 'RecommendReadOnly',
        'region' => 'Region',
        'remove_personal_information' => 'RemovePersonalInformation',
        'repair_load' => 'RepairLoad',
        'shared' => 'Shared',
        'sheet_tab_bar_width' => 'SheetTabBarWidth',
        'show_tabs' => 'ShowTabs',
        'update_adjacent_cells_border' => 'UpdateAdjacentCellsBorder',
        'update_links_type' => 'UpdateLinksType',
        'window_height' => 'WindowHeight',
        'window_left' => 'WindowLeft',
        'window_top' => 'WindowTop',
        'window_width' => 'WindowWidth',
        'author' => 'Author',
        'check_custom_number_format' => 'CheckCustomNumberFormat',
        'protection_type' => 'ProtectionType',
        'globalization_settings' => 'GlobalizationSettings',
        'password' => 'Password',
        'write_protection' => 'WriteProtection',
        'is_encrypted' => 'IsEncrypted',
        'is_protected' => 'IsProtected',
        'max_row' => 'MaxRow',
        'max_column' => 'MaxColumn',
        'significant_digits' => 'SignificantDigits',
        'check_compatibility' => 'CheckCompatibility',
        'paper_size' => 'PaperSize',
        'max_rows_of_shared_formula' => 'MaxRowsOfSharedFormula',
        'compliance' => 'Compliance',
        'quote_prefix_to_style' => 'QuotePrefixToStyle',
        'formula_settings' => 'FormulaSettings',
        'force_full_calculate' => 'ForceFullCalculate',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'auto_compress_pictures' => 'setAutoCompressPictures',
        'auto_recover' => 'setAutoRecover',
        'build_version' => 'setBuildVersion',
        'calc_mode' => 'setCalcMode',
        'calculation_id' => 'setCalculationId',
        'check_comptiliblity' => 'setCheckComptiliblity',
        'check_excel_restriction' => 'setCheckExcelRestriction',
        'crash_save' => 'setCrashSave',
        'create_calc_chain' => 'setCreateCalcChain',
        'data_extract_load' => 'setDataExtractLoad',
        'date1904' => 'setDate1904',
        'display_drawing_objects' => 'setDisplayDrawingObjects',
        'enable_macros' => 'setEnableMacros',
        'first_visible_tab' => 'setFirstVisibleTab',
        'hide_pivot_field_list' => 'setHidePivotFieldList',
        'is_default_encrypted' => 'setIsDefaultEncrypted',
        'is_hidden' => 'setIsHidden',
        'is_h_scroll_bar_visible' => 'setIsHScrollBarVisible',
        'is_minimized' => 'setIsMinimized',
        'is_v_scroll_bar_visible' => 'setIsVScrollBarVisible',
        'iteration' => 'setIteration',
        'language_code' => 'setLanguageCode',
        'max_change' => 'setMaxChange',
        'max_iteration' => 'setMaxIteration',
        'memory_setting' => 'setMemorySetting',
        'number_decimal_separator' => 'setNumberDecimalSeparator',
        'number_group_separator' => 'setNumberGroupSeparator',
        'parsing_formula_on_open' => 'setParsingFormulaOnOpen',
        'precision_as_displayed' => 'setPrecisionAsDisplayed',
        'recalculate_before_save' => 'setRecalculateBeforeSave',
        're_calculate_on_open' => 'setReCalculateOnOpen',
        'recommend_read_only' => 'setRecommendReadOnly',
        'region' => 'setRegion',
        'remove_personal_information' => 'setRemovePersonalInformation',
        'repair_load' => 'setRepairLoad',
        'shared' => 'setShared',
        'sheet_tab_bar_width' => 'setSheetTabBarWidth',
        'show_tabs' => 'setShowTabs',
        'update_adjacent_cells_border' => 'setUpdateAdjacentCellsBorder',
        'update_links_type' => 'setUpdateLinksType',
        'window_height' => 'setWindowHeight',
        'window_left' => 'setWindowLeft',
        'window_top' => 'setWindowTop',
        'window_width' => 'setWindowWidth',
        'author' => 'setAuthor',
        'check_custom_number_format' => 'setCheckCustomNumberFormat',
        'protection_type' => 'setProtectionType',
        'globalization_settings' => 'setGlobalizationSettings',
        'password' => 'setPassword',
        'write_protection' => 'setWriteProtection',
        'is_encrypted' => 'setIsEncrypted',
        'is_protected' => 'setIsProtected',
        'max_row' => 'setMaxRow',
        'max_column' => 'setMaxColumn',
        'significant_digits' => 'setSignificantDigits',
        'check_compatibility' => 'setCheckCompatibility',
        'paper_size' => 'setPaperSize',
        'max_rows_of_shared_formula' => 'setMaxRowsOfSharedFormula',
        'compliance' => 'setCompliance',
        'quote_prefix_to_style' => 'setQuotePrefixToStyle',
        'formula_settings' => 'setFormulaSettings',
        'force_full_calculate' => 'setForceFullCalculate',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'auto_compress_pictures' => 'getAutoCompressPictures',
        'auto_recover' => 'getAutoRecover',
        'build_version' => 'getBuildVersion',
        'calc_mode' => 'getCalcMode',
        'calculation_id' => 'getCalculationId',
        'check_comptiliblity' => 'getCheckComptiliblity',
        'check_excel_restriction' => 'getCheckExcelRestriction',
        'crash_save' => 'getCrashSave',
        'create_calc_chain' => 'getCreateCalcChain',
        'data_extract_load' => 'getDataExtractLoad',
        'date1904' => 'getDate1904',
        'display_drawing_objects' => 'getDisplayDrawingObjects',
        'enable_macros' => 'getEnableMacros',
        'first_visible_tab' => 'getFirstVisibleTab',
        'hide_pivot_field_list' => 'getHidePivotFieldList',
        'is_default_encrypted' => 'getIsDefaultEncrypted',
        'is_hidden' => 'getIsHidden',
        'is_h_scroll_bar_visible' => 'getIsHScrollBarVisible',
        'is_minimized' => 'getIsMinimized',
        'is_v_scroll_bar_visible' => 'getIsVScrollBarVisible',
        'iteration' => 'getIteration',
        'language_code' => 'getLanguageCode',
        'max_change' => 'getMaxChange',
        'max_iteration' => 'getMaxIteration',
        'memory_setting' => 'getMemorySetting',
        'number_decimal_separator' => 'getNumberDecimalSeparator',
        'number_group_separator' => 'getNumberGroupSeparator',
        'parsing_formula_on_open' => 'getParsingFormulaOnOpen',
        'precision_as_displayed' => 'getPrecisionAsDisplayed',
        'recalculate_before_save' => 'getRecalculateBeforeSave',
        're_calculate_on_open' => 'getReCalculateOnOpen',
        'recommend_read_only' => 'getRecommendReadOnly',
        'region' => 'getRegion',
        'remove_personal_information' => 'getRemovePersonalInformation',
        'repair_load' => 'getRepairLoad',
        'shared' => 'getShared',
        'sheet_tab_bar_width' => 'getSheetTabBarWidth',
        'show_tabs' => 'getShowTabs',
        'update_adjacent_cells_border' => 'getUpdateAdjacentCellsBorder',
        'update_links_type' => 'getUpdateLinksType',
        'window_height' => 'getWindowHeight',
        'window_left' => 'getWindowLeft',
        'window_top' => 'getWindowTop',
        'window_width' => 'getWindowWidth',
        'author' => 'getAuthor',
        'check_custom_number_format' => 'getCheckCustomNumberFormat',
        'protection_type' => 'getProtectionType',
        'globalization_settings' => 'getGlobalizationSettings',
        'password' => 'getPassword',
        'write_protection' => 'getWriteProtection',
        'is_encrypted' => 'getIsEncrypted',
        'is_protected' => 'getIsProtected',
        'max_row' => 'getMaxRow',
        'max_column' => 'getMaxColumn',
        'significant_digits' => 'getSignificantDigits',
        'check_compatibility' => 'getCheckCompatibility',
        'paper_size' => 'getPaperSize',
        'max_rows_of_shared_formula' => 'getMaxRowsOfSharedFormula',
        'compliance' => 'getCompliance',
        'quote_prefix_to_style' => 'getQuotePrefixToStyle',
        'formula_settings' => 'getFormulaSettings',
        'force_full_calculate' => 'getForceFullCalculate',
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
        $this->container['auto_compress_pictures'] = isset($data['auto_compress_pictures']) ? $data['auto_compress_pictures'] : null;
        $this->container['auto_recover'] = isset($data['auto_recover']) ? $data['auto_recover'] : null;
        $this->container['build_version'] = isset($data['build_version']) ? $data['build_version'] : null;
        $this->container['calc_mode'] = isset($data['calc_mode']) ? $data['calc_mode'] : null;
        $this->container['calculation_id'] = isset($data['calculation_id']) ? $data['calculation_id'] : null;
        $this->container['check_comptiliblity'] = isset($data['check_comptiliblity']) ? $data['check_comptiliblity'] : null;
        $this->container['check_excel_restriction'] = isset($data['check_excel_restriction']) ? $data['check_excel_restriction'] : null;
        $this->container['crash_save'] = isset($data['crash_save']) ? $data['crash_save'] : null;
        $this->container['create_calc_chain'] = isset($data['create_calc_chain']) ? $data['create_calc_chain'] : null;
        $this->container['data_extract_load'] = isset($data['data_extract_load']) ? $data['data_extract_load'] : null;
        $this->container['date1904'] = isset($data['date1904']) ? $data['date1904'] : null;
        $this->container['display_drawing_objects'] = isset($data['display_drawing_objects']) ? $data['display_drawing_objects'] : null;
        $this->container['enable_macros'] = isset($data['enable_macros']) ? $data['enable_macros'] : null;
        $this->container['first_visible_tab'] = isset($data['first_visible_tab']) ? $data['first_visible_tab'] : null;
        $this->container['hide_pivot_field_list'] = isset($data['hide_pivot_field_list']) ? $data['hide_pivot_field_list'] : null;
        $this->container['is_default_encrypted'] = isset($data['is_default_encrypted']) ? $data['is_default_encrypted'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['is_h_scroll_bar_visible'] = isset($data['is_h_scroll_bar_visible']) ? $data['is_h_scroll_bar_visible'] : null;
        $this->container['is_minimized'] = isset($data['is_minimized']) ? $data['is_minimized'] : null;
        $this->container['is_v_scroll_bar_visible'] = isset($data['is_v_scroll_bar_visible']) ? $data['is_v_scroll_bar_visible'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['max_change'] = isset($data['max_change']) ? $data['max_change'] : null;
        $this->container['max_iteration'] = isset($data['max_iteration']) ? $data['max_iteration'] : null;
        $this->container['memory_setting'] = isset($data['memory_setting']) ? $data['memory_setting'] : null;
        $this->container['number_decimal_separator'] = isset($data['number_decimal_separator']) ? $data['number_decimal_separator'] : null;
        $this->container['number_group_separator'] = isset($data['number_group_separator']) ? $data['number_group_separator'] : null;
        $this->container['parsing_formula_on_open'] = isset($data['parsing_formula_on_open']) ? $data['parsing_formula_on_open'] : null;
        $this->container['precision_as_displayed'] = isset($data['precision_as_displayed']) ? $data['precision_as_displayed'] : null;
        $this->container['recalculate_before_save'] = isset($data['recalculate_before_save']) ? $data['recalculate_before_save'] : null;
        $this->container['re_calculate_on_open'] = isset($data['re_calculate_on_open']) ? $data['re_calculate_on_open'] : null;
        $this->container['recommend_read_only'] = isset($data['recommend_read_only']) ? $data['recommend_read_only'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['remove_personal_information'] = isset($data['remove_personal_information']) ? $data['remove_personal_information'] : null;
        $this->container['repair_load'] = isset($data['repair_load']) ? $data['repair_load'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['sheet_tab_bar_width'] = isset($data['sheet_tab_bar_width']) ? $data['sheet_tab_bar_width'] : null;
        $this->container['show_tabs'] = isset($data['show_tabs']) ? $data['show_tabs'] : null;
        $this->container['update_adjacent_cells_border'] = isset($data['update_adjacent_cells_border']) ? $data['update_adjacent_cells_border'] : null;
        $this->container['update_links_type'] = isset($data['update_links_type']) ? $data['update_links_type'] : null;
        $this->container['window_height'] = isset($data['window_height']) ? $data['window_height'] : null;
        $this->container['window_left'] = isset($data['window_left']) ? $data['window_left'] : null;
        $this->container['window_top'] = isset($data['window_top']) ? $data['window_top'] : null;
        $this->container['window_width'] = isset($data['window_width']) ? $data['window_width'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['check_custom_number_format'] = isset($data['check_custom_number_format']) ? $data['check_custom_number_format'] : null;
        $this->container['protection_type'] = isset($data['protection_type']) ? $data['protection_type'] : null;
        $this->container['globalization_settings'] = isset($data['globalization_settings']) ? $data['globalization_settings'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['write_protection'] = isset($data['write_protection']) ? $data['write_protection'] : null;
        $this->container['is_encrypted'] = isset($data['is_encrypted']) ? $data['is_encrypted'] : null;
        $this->container['is_protected'] = isset($data['is_protected']) ? $data['is_protected'] : null;
        $this->container['max_row'] = isset($data['max_row']) ? $data['max_row'] : null;
        $this->container['max_column'] = isset($data['max_column']) ? $data['max_column'] : null;
        $this->container['significant_digits'] = isset($data['significant_digits']) ? $data['significant_digits'] : null;
        $this->container['check_compatibility'] = isset($data['check_compatibility']) ? $data['check_compatibility'] : null;
        $this->container['paper_size'] = isset($data['paper_size']) ? $data['paper_size'] : null;
        $this->container['max_rows_of_shared_formula'] = isset($data['max_rows_of_shared_formula']) ? $data['max_rows_of_shared_formula'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['quote_prefix_to_style'] = isset($data['quote_prefix_to_style']) ? $data['quote_prefix_to_style'] : null;
        $this->container['formula_settings'] = isset($data['formula_settings']) ? $data['formula_settings'] : null;
        $this->container['force_full_calculate'] = isset($data['force_full_calculate']) ? $data['force_full_calculate'] : null;
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
     * Gets auto_compress_pictures.
     *
     * @return bool|null
     */
    public function getAutoCompressPictures()
    {
        return $this->container['auto_compress_pictures'];
    }

    /**
     * Sets auto_compress_pictures.
     *
     * @param bool|null $auto_compress_pictures
     *
     * @return $this
     */
    public function setAutoCompressPictures($auto_compress_pictures)
    {
        $this->container['auto_compress_pictures'] = $auto_compress_pictures;
        return $this;
    }

    /**
     * Gets auto_recover.
     *
     * @return bool|null
     */
    public function getAutoRecover()
    {
        return $this->container['auto_recover'];
    }

    /**
     * Sets auto_recover.
     *
     * @param bool|null $auto_recover
     *
     * @return $this
     */
    public function setAutoRecover($auto_recover)
    {
        $this->container['auto_recover'] = $auto_recover;
        return $this;
    }

    /**
     * Gets build_version.
     *
     * @return string|null
     */
    public function getBuildVersion()
    {
        return $this->container['build_version'];
    }

    /**
     * Sets build_version.
     *
     * @param string|null $build_version
     *
     * @return $this
     */
    public function setBuildVersion($build_version)
    {
        $this->container['build_version'] = $build_version;
        return $this;
    }

    /**
     * Gets calc_mode.
     *
     * @return string|null
     */
    public function getCalcMode()
    {
        return $this->container['calc_mode'];
    }

    /**
     * Sets calc_mode.
     *
     * @param string|null $calc_mode
     *
     * @return $this
     */
    public function setCalcMode($calc_mode)
    {
        $this->container['calc_mode'] = $calc_mode;
        return $this;
    }

    /**
     * Gets calculation_id.
     *
     * @return string|null
     */
    public function getCalculationId()
    {
        return $this->container['calculation_id'];
    }

    /**
     * Sets calculation_id.
     *
     * @param string|null $calculation_id
     *
     * @return $this
     */
    public function setCalculationId($calculation_id)
    {
        $this->container['calculation_id'] = $calculation_id;
        return $this;
    }

    /**
     * Gets check_comptiliblity.
     *
     * @return bool|null
     */
    public function getCheckComptiliblity()
    {
        return $this->container['check_comptiliblity'];
    }

    /**
     * Sets check_comptiliblity.
     *
     * @param bool|null $check_comptiliblity
     *
     * @return $this
     */
    public function setCheckComptiliblity($check_comptiliblity)
    {
        $this->container['check_comptiliblity'] = $check_comptiliblity;
        return $this;
    }

    /**
     * Gets check_excel_restriction.
     *
     * @return bool|null
     */
    public function getCheckExcelRestriction()
    {
        return $this->container['check_excel_restriction'];
    }

    /**
     * Sets check_excel_restriction.
     *
     * @param bool|null $check_excel_restriction
     *
     * @return $this
     */
    public function setCheckExcelRestriction($check_excel_restriction)
    {
        $this->container['check_excel_restriction'] = $check_excel_restriction;
        return $this;
    }

    /**
     * Gets crash_save.
     *
     * @return bool|null
     */
    public function getCrashSave()
    {
        return $this->container['crash_save'];
    }

    /**
     * Sets crash_save.
     *
     * @param bool|null $crash_save
     *
     * @return $this
     */
    public function setCrashSave($crash_save)
    {
        $this->container['crash_save'] = $crash_save;
        return $this;
    }

    /**
     * Gets create_calc_chain.
     *
     * @return bool|null
     */
    public function getCreateCalcChain()
    {
        return $this->container['create_calc_chain'];
    }

    /**
     * Sets create_calc_chain.
     *
     * @param bool|null $create_calc_chain
     *
     * @return $this
     */
    public function setCreateCalcChain($create_calc_chain)
    {
        $this->container['create_calc_chain'] = $create_calc_chain;
        return $this;
    }

    /**
     * Gets data_extract_load.
     *
     * @return bool|null
     */
    public function getDataExtractLoad()
    {
        return $this->container['data_extract_load'];
    }

    /**
     * Sets data_extract_load.
     *
     * @param bool|null $data_extract_load
     *
     * @return $this
     */
    public function setDataExtractLoad($data_extract_load)
    {
        $this->container['data_extract_load'] = $data_extract_load;
        return $this;
    }

    /**
     * Gets date1904.
     *
     * @return bool|null
     */
    public function getDate1904()
    {
        return $this->container['date1904'];
    }

    /**
     * Sets date1904.
     *
     * @param bool|null $date1904
     *
     * @return $this
     */
    public function setDate1904($date1904)
    {
        $this->container['date1904'] = $date1904;
        return $this;
    }

    /**
     * Gets display_drawing_objects.
     *
     * @return string|null
     */
    public function getDisplayDrawingObjects()
    {
        return $this->container['display_drawing_objects'];
    }

    /**
     * Sets display_drawing_objects.
     *
     * @param string|null $display_drawing_objects
     *
     * @return $this
     */
    public function setDisplayDrawingObjects($display_drawing_objects)
    {
        $this->container['display_drawing_objects'] = $display_drawing_objects;
        return $this;
    }

    /**
     * Gets enable_macros.
     *
     * @return bool|null
     */
    public function getEnableMacros()
    {
        return $this->container['enable_macros'];
    }

    /**
     * Sets enable_macros.
     *
     * @param bool|null $enable_macros
     *
     * @return $this
     */
    public function setEnableMacros($enable_macros)
    {
        $this->container['enable_macros'] = $enable_macros;
        return $this;
    }

    /**
     * Gets first_visible_tab.
     *
     * @return int|null
     */
    public function getFirstVisibleTab()
    {
        return $this->container['first_visible_tab'];
    }

    /**
     * Sets first_visible_tab.
     *
     * @param int|null $first_visible_tab
     *
     * @return $this
     */
    public function setFirstVisibleTab($first_visible_tab)
    {
        $this->container['first_visible_tab'] = $first_visible_tab;
        return $this;
    }

    /**
     * Gets hide_pivot_field_list.
     *
     * @return bool|null
     */
    public function getHidePivotFieldList()
    {
        return $this->container['hide_pivot_field_list'];
    }

    /**
     * Sets hide_pivot_field_list.
     *
     * @param bool|null $hide_pivot_field_list
     *
     * @return $this
     */
    public function setHidePivotFieldList($hide_pivot_field_list)
    {
        $this->container['hide_pivot_field_list'] = $hide_pivot_field_list;
        return $this;
    }

    /**
     * Gets is_default_encrypted.
     *
     * @return bool|null
     */
    public function getIsDefaultEncrypted()
    {
        return $this->container['is_default_encrypted'];
    }

    /**
     * Sets is_default_encrypted.
     *
     * @param bool|null $is_default_encrypted
     *
     * @return $this
     */
    public function setIsDefaultEncrypted($is_default_encrypted)
    {
        $this->container['is_default_encrypted'] = $is_default_encrypted;
        return $this;
    }

    /**
     * Gets is_hidden.
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden.
     *
     * @param bool|null $is_hidden
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;
        return $this;
    }

    /**
     * Gets is_h_scroll_bar_visible.
     *
     * @return bool|null
     */
    public function getIsHScrollBarVisible()
    {
        return $this->container['is_h_scroll_bar_visible'];
    }

    /**
     * Sets is_h_scroll_bar_visible.
     *
     * @param bool|null $is_h_scroll_bar_visible
     *
     * @return $this
     */
    public function setIsHScrollBarVisible($is_h_scroll_bar_visible)
    {
        $this->container['is_h_scroll_bar_visible'] = $is_h_scroll_bar_visible;
        return $this;
    }

    /**
     * Gets is_minimized.
     *
     * @return bool|null
     */
    public function getIsMinimized()
    {
        return $this->container['is_minimized'];
    }

    /**
     * Sets is_minimized.
     *
     * @param bool|null $is_minimized
     *
     * @return $this
     */
    public function setIsMinimized($is_minimized)
    {
        $this->container['is_minimized'] = $is_minimized;
        return $this;
    }

    /**
     * Gets is_v_scroll_bar_visible.
     *
     * @return bool|null
     */
    public function getIsVScrollBarVisible()
    {
        return $this->container['is_v_scroll_bar_visible'];
    }

    /**
     * Sets is_v_scroll_bar_visible.
     *
     * @param bool|null $is_v_scroll_bar_visible
     *
     * @return $this
     */
    public function setIsVScrollBarVisible($is_v_scroll_bar_visible)
    {
        $this->container['is_v_scroll_bar_visible'] = $is_v_scroll_bar_visible;
        return $this;
    }

    /**
     * Gets iteration.
     *
     * @return bool|null
     */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
     * Sets iteration.
     *
     * @param bool|null $iteration
     *
     * @return $this
     */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;
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
     * Gets max_change.
     *
     * @return float|null
     */
    public function getMaxChange()
    {
        return $this->container['max_change'];
    }

    /**
     * Sets max_change.
     *
     * @param float|null $max_change
     *
     * @return $this
     */
    public function setMaxChange($max_change)
    {
        $this->container['max_change'] = $max_change;
        return $this;
    }

    /**
     * Gets max_iteration.
     *
     * @return int|null
     */
    public function getMaxIteration()
    {
        return $this->container['max_iteration'];
    }

    /**
     * Sets max_iteration.
     *
     * @param int|null $max_iteration
     *
     * @return $this
     */
    public function setMaxIteration($max_iteration)
    {
        $this->container['max_iteration'] = $max_iteration;
        return $this;
    }

    /**
     * Gets memory_setting.
     *
     * @return string|null
     */
    public function getMemorySetting()
    {
        return $this->container['memory_setting'];
    }

    /**
     * Sets memory_setting.
     *
     * @param string|null $memory_setting
     *
     * @return $this
     */
    public function setMemorySetting($memory_setting)
    {
        $this->container['memory_setting'] = $memory_setting;
        return $this;
    }

    /**
     * Gets number_decimal_separator.
     *
     * @return string|null
     */
    public function getNumberDecimalSeparator()
    {
        return $this->container['number_decimal_separator'];
    }

    /**
     * Sets number_decimal_separator.
     *
     * @param string|null $number_decimal_separator
     *
     * @return $this
     */
    public function setNumberDecimalSeparator($number_decimal_separator)
    {
        $this->container['number_decimal_separator'] = $number_decimal_separator;
        return $this;
    }

    /**
     * Gets number_group_separator.
     *
     * @return string|null
     */
    public function getNumberGroupSeparator()
    {
        return $this->container['number_group_separator'];
    }

    /**
     * Sets number_group_separator.
     *
     * @param string|null $number_group_separator
     *
     * @return $this
     */
    public function setNumberGroupSeparator($number_group_separator)
    {
        $this->container['number_group_separator'] = $number_group_separator;
        return $this;
    }

    /**
     * Gets parsing_formula_on_open.
     *
     * @return bool|null
     */
    public function getParsingFormulaOnOpen()
    {
        return $this->container['parsing_formula_on_open'];
    }

    /**
     * Sets parsing_formula_on_open.
     *
     * @param bool|null $parsing_formula_on_open
     *
     * @return $this
     */
    public function setParsingFormulaOnOpen($parsing_formula_on_open)
    {
        $this->container['parsing_formula_on_open'] = $parsing_formula_on_open;
        return $this;
    }

    /**
     * Gets precision_as_displayed.
     *
     * @return bool|null
     */
    public function getPrecisionAsDisplayed()
    {
        return $this->container['precision_as_displayed'];
    }

    /**
     * Sets precision_as_displayed.
     *
     * @param bool|null $precision_as_displayed
     *
     * @return $this
     */
    public function setPrecisionAsDisplayed($precision_as_displayed)
    {
        $this->container['precision_as_displayed'] = $precision_as_displayed;
        return $this;
    }

    /**
     * Gets recalculate_before_save.
     *
     * @return bool|null
     */
    public function getRecalculateBeforeSave()
    {
        return $this->container['recalculate_before_save'];
    }

    /**
     * Sets recalculate_before_save.
     *
     * @param bool|null $recalculate_before_save
     *
     * @return $this
     */
    public function setRecalculateBeforeSave($recalculate_before_save)
    {
        $this->container['recalculate_before_save'] = $recalculate_before_save;
        return $this;
    }

    /**
     * Gets re_calculate_on_open.
     *
     * @return bool|null
     */
    public function getReCalculateOnOpen()
    {
        return $this->container['re_calculate_on_open'];
    }

    /**
     * Sets re_calculate_on_open.
     *
     * @param bool|null $re_calculate_on_open
     *
     * @return $this
     */
    public function setReCalculateOnOpen($re_calculate_on_open)
    {
        $this->container['re_calculate_on_open'] = $re_calculate_on_open;
        return $this;
    }

    /**
     * Gets recommend_read_only.
     *
     * @return bool|null
     */
    public function getRecommendReadOnly()
    {
        return $this->container['recommend_read_only'];
    }

    /**
     * Sets recommend_read_only.
     *
     * @param bool|null $recommend_read_only
     *
     * @return $this
     */
    public function setRecommendReadOnly($recommend_read_only)
    {
        $this->container['recommend_read_only'] = $recommend_read_only;
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
     * Gets remove_personal_information.
     *
     * @return bool|null
     */
    public function getRemovePersonalInformation()
    {
        return $this->container['remove_personal_information'];
    }

    /**
     * Sets remove_personal_information.
     *
     * @param bool|null $remove_personal_information
     *
     * @return $this
     */
    public function setRemovePersonalInformation($remove_personal_information)
    {
        $this->container['remove_personal_information'] = $remove_personal_information;
        return $this;
    }

    /**
     * Gets repair_load.
     *
     * @return bool|null
     */
    public function getRepairLoad()
    {
        return $this->container['repair_load'];
    }

    /**
     * Sets repair_load.
     *
     * @param bool|null $repair_load
     *
     * @return $this
     */
    public function setRepairLoad($repair_load)
    {
        $this->container['repair_load'] = $repair_load;
        return $this;
    }

    /**
     * Gets shared.
     *
     * @return bool|null
     */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
     * Sets shared.
     *
     * @param bool|null $shared
     *
     * @return $this
     */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
        return $this;
    }

    /**
     * Gets sheet_tab_bar_width.
     *
     * @return int|null
     */
    public function getSheetTabBarWidth()
    {
        return $this->container['sheet_tab_bar_width'];
    }

    /**
     * Sets sheet_tab_bar_width.
     *
     * @param int|null $sheet_tab_bar_width
     *
     * @return $this
     */
    public function setSheetTabBarWidth($sheet_tab_bar_width)
    {
        $this->container['sheet_tab_bar_width'] = $sheet_tab_bar_width;
        return $this;
    }

    /**
     * Gets show_tabs.
     *
     * @return bool|null
     */
    public function getShowTabs()
    {
        return $this->container['show_tabs'];
    }

    /**
     * Sets show_tabs.
     *
     * @param bool|null $show_tabs
     *
     * @return $this
     */
    public function setShowTabs($show_tabs)
    {
        $this->container['show_tabs'] = $show_tabs;
        return $this;
    }

    /**
     * Gets update_adjacent_cells_border.
     *
     * @return bool|null
     */
    public function getUpdateAdjacentCellsBorder()
    {
        return $this->container['update_adjacent_cells_border'];
    }

    /**
     * Sets update_adjacent_cells_border.
     *
     * @param bool|null $update_adjacent_cells_border
     *
     * @return $this
     */
    public function setUpdateAdjacentCellsBorder($update_adjacent_cells_border)
    {
        $this->container['update_adjacent_cells_border'] = $update_adjacent_cells_border;
        return $this;
    }

    /**
     * Gets update_links_type.
     *
     * @return string|null
     */
    public function getUpdateLinksType()
    {
        return $this->container['update_links_type'];
    }

    /**
     * Sets update_links_type.
     *
     * @param string|null $update_links_type
     *
     * @return $this
     */
    public function setUpdateLinksType($update_links_type)
    {
        $this->container['update_links_type'] = $update_links_type;
        return $this;
    }

    /**
     * Gets window_height.
     *
     * @return float|null
     */
    public function getWindowHeight()
    {
        return $this->container['window_height'];
    }

    /**
     * Sets window_height.
     *
     * @param float|null $window_height
     *
     * @return $this
     */
    public function setWindowHeight($window_height)
    {
        $this->container['window_height'] = $window_height;
        return $this;
    }

    /**
     * Gets window_left.
     *
     * @return float|null
     */
    public function getWindowLeft()
    {
        return $this->container['window_left'];
    }

    /**
     * Sets window_left.
     *
     * @param float|null $window_left
     *
     * @return $this
     */
    public function setWindowLeft($window_left)
    {
        $this->container['window_left'] = $window_left;
        return $this;
    }

    /**
     * Gets window_top.
     *
     * @return float|null
     */
    public function getWindowTop()
    {
        return $this->container['window_top'];
    }

    /**
     * Sets window_top.
     *
     * @param float|null $window_top
     *
     * @return $this
     */
    public function setWindowTop($window_top)
    {
        $this->container['window_top'] = $window_top;
        return $this;
    }

    /**
     * Gets window_width.
     *
     * @return float|null
     */
    public function getWindowWidth()
    {
        return $this->container['window_width'];
    }

    /**
     * Sets window_width.
     *
     * @param float|null $window_width
     *
     * @return $this
     */
    public function setWindowWidth($window_width)
    {
        $this->container['window_width'] = $window_width;
        return $this;
    }

    /**
     * Gets author.
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author.
     *
     * @param string|null $author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
     * Gets check_custom_number_format.
     *
     * @return bool|null
     */
    public function getCheckCustomNumberFormat()
    {
        return $this->container['check_custom_number_format'];
    }

    /**
     * Sets check_custom_number_format.
     *
     * @param bool|null $check_custom_number_format
     *
     * @return $this
     */
    public function setCheckCustomNumberFormat($check_custom_number_format)
    {
        $this->container['check_custom_number_format'] = $check_custom_number_format;
        return $this;
    }

    /**
     * Gets protection_type.
     *
     * @return string|null
     */
    public function getProtectionType()
    {
        return $this->container['protection_type'];
    }

    /**
     * Sets protection_type.
     *
     * @param string|null $protection_type
     *
     * @return $this
     */
    public function setProtectionType($protection_type)
    {
        $this->container['protection_type'] = $protection_type;
        return $this;
    }

    /**
     * Gets globalization_settings.
     *
     * @return \Aspose\Cells\Cloud\Model\GlobalizationSettings|null
     */
    public function getGlobalizationSettings()
    {
        return $this->container['globalization_settings'];
    }

    /**
     * Sets globalization_settings.
     *
     * @param \Aspose\Cells\Cloud\Model\GlobalizationSettings|null $globalization_settings
     *
     * @return $this
     */
    public function setGlobalizationSettings($globalization_settings)
    {
        $this->container['globalization_settings'] = $globalization_settings;
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
     * Gets write_protection.
     *
     * @return \Aspose\Cells\Cloud\Model\WriteProtection|null
     */
    public function getWriteProtection()
    {
        return $this->container['write_protection'];
    }

    /**
     * Sets write_protection.
     *
     * @param \Aspose\Cells\Cloud\Model\WriteProtection|null $write_protection
     *
     * @return $this
     */
    public function setWriteProtection($write_protection)
    {
        $this->container['write_protection'] = $write_protection;
        return $this;
    }

    /**
     * Gets is_encrypted.
     *
     * @return bool|null
     */
    public function getIsEncrypted()
    {
        return $this->container['is_encrypted'];
    }

    /**
     * Sets is_encrypted.
     *
     * @param bool|null $is_encrypted
     *
     * @return $this
     */
    public function setIsEncrypted($is_encrypted)
    {
        $this->container['is_encrypted'] = $is_encrypted;
        return $this;
    }

    /**
     * Gets is_protected.
     *
     * @return bool|null
     */
    public function getIsProtected()
    {
        return $this->container['is_protected'];
    }

    /**
     * Sets is_protected.
     *
     * @param bool|null $is_protected
     *
     * @return $this
     */
    public function setIsProtected($is_protected)
    {
        $this->container['is_protected'] = $is_protected;
        return $this;
    }

    /**
     * Gets max_row.
     *
     * @return int|null
     */
    public function getMaxRow()
    {
        return $this->container['max_row'];
    }

    /**
     * Sets max_row.
     *
     * @param int|null $max_row
     *
     * @return $this
     */
    public function setMaxRow($max_row)
    {
        $this->container['max_row'] = $max_row;
        return $this;
    }

    /**
     * Gets max_column.
     *
     * @return int|null
     */
    public function getMaxColumn()
    {
        return $this->container['max_column'];
    }

    /**
     * Sets max_column.
     *
     * @param int|null $max_column
     *
     * @return $this
     */
    public function setMaxColumn($max_column)
    {
        $this->container['max_column'] = $max_column;
        return $this;
    }

    /**
     * Gets significant_digits.
     *
     * @return int|null
     */
    public function getSignificantDigits()
    {
        return $this->container['significant_digits'];
    }

    /**
     * Sets significant_digits.
     *
     * @param int|null $significant_digits
     *
     * @return $this
     */
    public function setSignificantDigits($significant_digits)
    {
        $this->container['significant_digits'] = $significant_digits;
        return $this;
    }

    /**
     * Gets check_compatibility.
     *
     * @return bool|null
     */
    public function getCheckCompatibility()
    {
        return $this->container['check_compatibility'];
    }

    /**
     * Sets check_compatibility.
     *
     * @param bool|null $check_compatibility
     *
     * @return $this
     */
    public function setCheckCompatibility($check_compatibility)
    {
        $this->container['check_compatibility'] = $check_compatibility;
        return $this;
    }

    /**
     * Gets paper_size.
     *
     * @return string|null
     */
    public function getPaperSize()
    {
        return $this->container['paper_size'];
    }

    /**
     * Sets paper_size.
     *
     * @param string|null $paper_size
     *
     * @return $this
     */
    public function setPaperSize($paper_size)
    {
        $this->container['paper_size'] = $paper_size;
        return $this;
    }

    /**
     * Gets max_rows_of_shared_formula.
     *
     * @return int|null
     */
    public function getMaxRowsOfSharedFormula()
    {
        return $this->container['max_rows_of_shared_formula'];
    }

    /**
     * Sets max_rows_of_shared_formula.
     *
     * @param int|null $max_rows_of_shared_formula
     *
     * @return $this
     */
    public function setMaxRowsOfSharedFormula($max_rows_of_shared_formula)
    {
        $this->container['max_rows_of_shared_formula'] = $max_rows_of_shared_formula;
        return $this;
    }

    /**
     * Gets compliance.
     *
     * @return string|null
     */
    public function getCompliance()
    {
        return $this->container['compliance'];
    }

    /**
     * Sets compliance.
     *
     * @param string|null $compliance
     *
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $this->container['compliance'] = $compliance;
        return $this;
    }

    /**
     * Gets quote_prefix_to_style.
     *
     * @return bool|null
     */
    public function getQuotePrefixToStyle()
    {
        return $this->container['quote_prefix_to_style'];
    }

    /**
     * Sets quote_prefix_to_style.
     *
     * @param bool|null $quote_prefix_to_style
     *
     * @return $this
     */
    public function setQuotePrefixToStyle($quote_prefix_to_style)
    {
        $this->container['quote_prefix_to_style'] = $quote_prefix_to_style;
        return $this;
    }

    /**
     * Gets formula_settings.
     *
     * @return \Aspose\Cells\Cloud\Model\FormulaSettings|null
     */
    public function getFormulaSettings()
    {
        return $this->container['formula_settings'];
    }

    /**
     * Sets formula_settings.
     *
     * @param \Aspose\Cells\Cloud\Model\FormulaSettings|null $formula_settings
     *
     * @return $this
     */
    public function setFormulaSettings($formula_settings)
    {
        $this->container['formula_settings'] = $formula_settings;
        return $this;
    }

    /**
     * Gets force_full_calculate.
     *
     * @return bool|null
     */
    public function getForceFullCalculate()
    {
        return $this->container['force_full_calculate'];
    }

    /**
     * Sets force_full_calculate.
     *
     * @param bool|null $force_full_calculate
     *
     * @return $this
     */
    public function setForceFullCalculate($force_full_calculate)
    {
        $this->container['force_full_calculate'] = $force_full_calculate;
        return $this;
    }
}
