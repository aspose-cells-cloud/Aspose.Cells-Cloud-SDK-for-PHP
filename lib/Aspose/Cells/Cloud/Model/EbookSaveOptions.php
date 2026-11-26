<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EbookSaveOptions.php">
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

class EbookSaveOptions extends HtmlSaveOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EbookSaveOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'export_page_headers' => 'bool',
        'export_page_footers' => 'bool',
        'export_row_column_headings' => 'bool',
        'show_all_sheets' => 'bool',
        'image_options' => '\\Aspose\\Cells\\Cloud\\Model\\ImageOrPrintOptions',
        'save_as_single_file' => 'bool',
        'export_hidden_worksheet' => 'bool',
        'export_grid_lines' => 'bool',
        'presentation_preference' => 'bool',
        'cell_css_prefix' => 'string',
        'table_css_id' => 'string',
        'is_full_path_link' => 'bool',
        'export_worksheet_css_separately' => 'bool',
        'export_similar_border_style' => 'bool',
        'merge_empty_td_forcely' => 'bool',
        'export_cell_coordinate' => 'bool',
        'export_extra_headings' => 'bool',
        'export_headings' => 'bool',
        'export_formula' => 'bool',
        'add_tooltip_text' => 'bool',
        'export_bogus_row_data' => 'bool',
        'exclude_unused_styles' => 'bool',
        'export_document_properties' => 'bool',
        'export_worksheet_properties' => 'bool',
        'export_workbook_properties' => 'bool',
        'export_frame_scripts_and_properties' => 'bool',
        'attached_files_directory' => 'string',
        'attached_files_url_prefix' => 'string',
        'encoding' => 'string',
        'export_active_worksheet_only' => 'bool',
        'export_chart_image_format' => 'string',
        'export_images_as_base64' => 'bool',
        'hidden_col_display_type' => 'string',
        'hidden_row_display_type' => 'string',
        'html_cross_string_type' => 'string',
        'is_exp_image_to_temp_dir' => 'bool',
        'page_title' => 'string',
        'parse_html_tag_in_cell' => 'bool',
        'cell_name_attribute' => 'string',
        'save_format' => 'string',
        'cached_file_folder' => 'string',
        'clear_data' => 'bool',
        'create_directory' => 'bool',
        'enable_http_compression' => 'bool',
        'refresh_chart_cache' => 'bool',
        'sort_names' => 'bool',
        'validate_merged_areas' => 'bool',
        'merge_areas' => 'bool',
        'sort_external_names' => 'bool',
        'check_excel_restriction' => 'bool',
        'update_smart_art' => 'bool',
        'encrypt_document_properties' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'export_page_headers' => null,
        'export_page_footers' => null,
        'export_row_column_headings' => null,
        'show_all_sheets' => null,
        'image_options' => null,
        'save_as_single_file' => null,
        'export_hidden_worksheet' => null,
        'export_grid_lines' => null,
        'presentation_preference' => null,
        'cell_css_prefix' => null,
        'table_css_id' => null,
        'is_full_path_link' => null,
        'export_worksheet_css_separately' => null,
        'export_similar_border_style' => null,
        'merge_empty_td_forcely' => null,
        'export_cell_coordinate' => null,
        'export_extra_headings' => null,
        'export_headings' => null,
        'export_formula' => null,
        'add_tooltip_text' => null,
        'export_bogus_row_data' => null,
        'exclude_unused_styles' => null,
        'export_document_properties' => null,
        'export_worksheet_properties' => null,
        'export_workbook_properties' => null,
        'export_frame_scripts_and_properties' => null,
        'attached_files_directory' => null,
        'attached_files_url_prefix' => null,
        'encoding' => null,
        'export_active_worksheet_only' => null,
        'export_chart_image_format' => null,
        'export_images_as_base64' => null,
        'hidden_col_display_type' => null,
        'hidden_row_display_type' => null,
        'html_cross_string_type' => null,
        'is_exp_image_to_temp_dir' => null,
        'page_title' => null,
        'parse_html_tag_in_cell' => null,
        'cell_name_attribute' => null,
        'save_format' => null,
        'cached_file_folder' => null,
        'clear_data' => null,
        'create_directory' => null,
        'enable_http_compression' => null,
        'refresh_chart_cache' => null,
        'sort_names' => null,
        'validate_merged_areas' => null,
        'merge_areas' => null,
        'sort_external_names' => null,
        'check_excel_restriction' => null,
        'update_smart_art' => null,
        'encrypt_document_properties' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'export_page_headers' => 'ExportPageHeaders',
        'export_page_footers' => 'ExportPageFooters',
        'export_row_column_headings' => 'ExportRowColumnHeadings',
        'show_all_sheets' => 'ShowAllSheets',
        'image_options' => 'ImageOptions',
        'save_as_single_file' => 'SaveAsSingleFile',
        'export_hidden_worksheet' => 'ExportHiddenWorksheet',
        'export_grid_lines' => 'ExportGridLines',
        'presentation_preference' => 'PresentationPreference',
        'cell_css_prefix' => 'CellCssPrefix',
        'table_css_id' => 'TableCssId',
        'is_full_path_link' => 'IsFullPathLink',
        'export_worksheet_css_separately' => 'ExportWorksheetCSSSeparately',
        'export_similar_border_style' => 'ExportSimilarBorderStyle',
        'merge_empty_td_forcely' => 'MergeEmptyTdForcely',
        'export_cell_coordinate' => 'ExportCellCoordinate',
        'export_extra_headings' => 'ExportExtraHeadings',
        'export_headings' => 'ExportHeadings',
        'export_formula' => 'ExportFormula',
        'add_tooltip_text' => 'AddTooltipText',
        'export_bogus_row_data' => 'ExportBogusRowData',
        'exclude_unused_styles' => 'ExcludeUnusedStyles',
        'export_document_properties' => 'ExportDocumentProperties',
        'export_worksheet_properties' => 'ExportWorksheetProperties',
        'export_workbook_properties' => 'ExportWorkbookProperties',
        'export_frame_scripts_and_properties' => 'ExportFrameScriptsAndProperties',
        'attached_files_directory' => 'AttachedFilesDirectory',
        'attached_files_url_prefix' => 'AttachedFilesUrlPrefix',
        'encoding' => 'Encoding',
        'export_active_worksheet_only' => 'ExportActiveWorksheetOnly',
        'export_chart_image_format' => 'ExportChartImageFormat',
        'export_images_as_base64' => 'ExportImagesAsBase64',
        'hidden_col_display_type' => 'HiddenColDisplayType',
        'hidden_row_display_type' => 'HiddenRowDisplayType',
        'html_cross_string_type' => 'HtmlCrossStringType',
        'is_exp_image_to_temp_dir' => 'IsExpImageToTempDir',
        'page_title' => 'PageTitle',
        'parse_html_tag_in_cell' => 'ParseHtmlTagInCell',
        'cell_name_attribute' => 'CellNameAttribute',
        'save_format' => 'SaveFormat',
        'cached_file_folder' => 'CachedFileFolder',
        'clear_data' => 'ClearData',
        'create_directory' => 'CreateDirectory',
        'enable_http_compression' => 'EnableHTTPCompression',
        'refresh_chart_cache' => 'RefreshChartCache',
        'sort_names' => 'SortNames',
        'validate_merged_areas' => 'ValidateMergedAreas',
        'merge_areas' => 'MergeAreas',
        'sort_external_names' => 'SortExternalNames',
        'check_excel_restriction' => 'CheckExcelRestriction',
        'update_smart_art' => 'UpdateSmartArt',
        'encrypt_document_properties' => 'EncryptDocumentProperties',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'export_page_headers' => 'setExportPageHeaders',
        'export_page_footers' => 'setExportPageFooters',
        'export_row_column_headings' => 'setExportRowColumnHeadings',
        'show_all_sheets' => 'setShowAllSheets',
        'image_options' => 'setImageOptions',
        'save_as_single_file' => 'setSaveAsSingleFile',
        'export_hidden_worksheet' => 'setExportHiddenWorksheet',
        'export_grid_lines' => 'setExportGridLines',
        'presentation_preference' => 'setPresentationPreference',
        'cell_css_prefix' => 'setCellCssPrefix',
        'table_css_id' => 'setTableCssId',
        'is_full_path_link' => 'setIsFullPathLink',
        'export_worksheet_css_separately' => 'setExportWorksheetCssSeparately',
        'export_similar_border_style' => 'setExportSimilarBorderStyle',
        'merge_empty_td_forcely' => 'setMergeEmptyTdForcely',
        'export_cell_coordinate' => 'setExportCellCoordinate',
        'export_extra_headings' => 'setExportExtraHeadings',
        'export_headings' => 'setExportHeadings',
        'export_formula' => 'setExportFormula',
        'add_tooltip_text' => 'setAddTooltipText',
        'export_bogus_row_data' => 'setExportBogusRowData',
        'exclude_unused_styles' => 'setExcludeUnusedStyles',
        'export_document_properties' => 'setExportDocumentProperties',
        'export_worksheet_properties' => 'setExportWorksheetProperties',
        'export_workbook_properties' => 'setExportWorkbookProperties',
        'export_frame_scripts_and_properties' => 'setExportFrameScriptsAndProperties',
        'attached_files_directory' => 'setAttachedFilesDirectory',
        'attached_files_url_prefix' => 'setAttachedFilesUrlPrefix',
        'encoding' => 'setEncoding',
        'export_active_worksheet_only' => 'setExportActiveWorksheetOnly',
        'export_chart_image_format' => 'setExportChartImageFormat',
        'export_images_as_base64' => 'setExportImagesAsBase64',
        'hidden_col_display_type' => 'setHiddenColDisplayType',
        'hidden_row_display_type' => 'setHiddenRowDisplayType',
        'html_cross_string_type' => 'setHtmlCrossStringType',
        'is_exp_image_to_temp_dir' => 'setIsExpImageToTempDir',
        'page_title' => 'setPageTitle',
        'parse_html_tag_in_cell' => 'setParseHtmlTagInCell',
        'cell_name_attribute' => 'setCellNameAttribute',
        'save_format' => 'setSaveFormat',
        'cached_file_folder' => 'setCachedFileFolder',
        'clear_data' => 'setClearData',
        'create_directory' => 'setCreateDirectory',
        'enable_http_compression' => 'setEnableHttpCompression',
        'refresh_chart_cache' => 'setRefreshChartCache',
        'sort_names' => 'setSortNames',
        'validate_merged_areas' => 'setValidateMergedAreas',
        'merge_areas' => 'setMergeAreas',
        'sort_external_names' => 'setSortExternalNames',
        'check_excel_restriction' => 'setCheckExcelRestriction',
        'update_smart_art' => 'setUpdateSmartArt',
        'encrypt_document_properties' => 'setEncryptDocumentProperties',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'export_page_headers' => 'getExportPageHeaders',
        'export_page_footers' => 'getExportPageFooters',
        'export_row_column_headings' => 'getExportRowColumnHeadings',
        'show_all_sheets' => 'getShowAllSheets',
        'image_options' => 'getImageOptions',
        'save_as_single_file' => 'getSaveAsSingleFile',
        'export_hidden_worksheet' => 'getExportHiddenWorksheet',
        'export_grid_lines' => 'getExportGridLines',
        'presentation_preference' => 'getPresentationPreference',
        'cell_css_prefix' => 'getCellCssPrefix',
        'table_css_id' => 'getTableCssId',
        'is_full_path_link' => 'getIsFullPathLink',
        'export_worksheet_css_separately' => 'getExportWorksheetCssSeparately',
        'export_similar_border_style' => 'getExportSimilarBorderStyle',
        'merge_empty_td_forcely' => 'getMergeEmptyTdForcely',
        'export_cell_coordinate' => 'getExportCellCoordinate',
        'export_extra_headings' => 'getExportExtraHeadings',
        'export_headings' => 'getExportHeadings',
        'export_formula' => 'getExportFormula',
        'add_tooltip_text' => 'getAddTooltipText',
        'export_bogus_row_data' => 'getExportBogusRowData',
        'exclude_unused_styles' => 'getExcludeUnusedStyles',
        'export_document_properties' => 'getExportDocumentProperties',
        'export_worksheet_properties' => 'getExportWorksheetProperties',
        'export_workbook_properties' => 'getExportWorkbookProperties',
        'export_frame_scripts_and_properties' => 'getExportFrameScriptsAndProperties',
        'attached_files_directory' => 'getAttachedFilesDirectory',
        'attached_files_url_prefix' => 'getAttachedFilesUrlPrefix',
        'encoding' => 'getEncoding',
        'export_active_worksheet_only' => 'getExportActiveWorksheetOnly',
        'export_chart_image_format' => 'getExportChartImageFormat',
        'export_images_as_base64' => 'getExportImagesAsBase64',
        'hidden_col_display_type' => 'getHiddenColDisplayType',
        'hidden_row_display_type' => 'getHiddenRowDisplayType',
        'html_cross_string_type' => 'getHtmlCrossStringType',
        'is_exp_image_to_temp_dir' => 'getIsExpImageToTempDir',
        'page_title' => 'getPageTitle',
        'parse_html_tag_in_cell' => 'getParseHtmlTagInCell',
        'cell_name_attribute' => 'getCellNameAttribute',
        'save_format' => 'getSaveFormat',
        'cached_file_folder' => 'getCachedFileFolder',
        'clear_data' => 'getClearData',
        'create_directory' => 'getCreateDirectory',
        'enable_http_compression' => 'getEnableHttpCompression',
        'refresh_chart_cache' => 'getRefreshChartCache',
        'sort_names' => 'getSortNames',
        'validate_merged_areas' => 'getValidateMergedAreas',
        'merge_areas' => 'getMergeAreas',
        'sort_external_names' => 'getSortExternalNames',
        'check_excel_restriction' => 'getCheckExcelRestriction',
        'update_smart_art' => 'getUpdateSmartArt',
        'encrypt_document_properties' => 'getEncryptDocumentProperties',
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
        $this->container['export_page_headers'] = isset($data['export_page_headers']) ? $data['export_page_headers'] : null;
        $this->container['export_page_footers'] = isset($data['export_page_footers']) ? $data['export_page_footers'] : null;
        $this->container['export_row_column_headings'] = isset($data['export_row_column_headings']) ? $data['export_row_column_headings'] : null;
        $this->container['show_all_sheets'] = isset($data['show_all_sheets']) ? $data['show_all_sheets'] : null;
        $this->container['image_options'] = isset($data['image_options']) ? $data['image_options'] : null;
        $this->container['save_as_single_file'] = isset($data['save_as_single_file']) ? $data['save_as_single_file'] : null;
        $this->container['export_hidden_worksheet'] = isset($data['export_hidden_worksheet']) ? $data['export_hidden_worksheet'] : null;
        $this->container['export_grid_lines'] = isset($data['export_grid_lines']) ? $data['export_grid_lines'] : null;
        $this->container['presentation_preference'] = isset($data['presentation_preference']) ? $data['presentation_preference'] : null;
        $this->container['cell_css_prefix'] = isset($data['cell_css_prefix']) ? $data['cell_css_prefix'] : null;
        $this->container['table_css_id'] = isset($data['table_css_id']) ? $data['table_css_id'] : null;
        $this->container['is_full_path_link'] = isset($data['is_full_path_link']) ? $data['is_full_path_link'] : null;
        $this->container['export_worksheet_css_separately'] = isset($data['export_worksheet_css_separately']) ? $data['export_worksheet_css_separately'] : null;
        $this->container['export_similar_border_style'] = isset($data['export_similar_border_style']) ? $data['export_similar_border_style'] : null;
        $this->container['merge_empty_td_forcely'] = isset($data['merge_empty_td_forcely']) ? $data['merge_empty_td_forcely'] : null;
        $this->container['export_cell_coordinate'] = isset($data['export_cell_coordinate']) ? $data['export_cell_coordinate'] : null;
        $this->container['export_extra_headings'] = isset($data['export_extra_headings']) ? $data['export_extra_headings'] : null;
        $this->container['export_headings'] = isset($data['export_headings']) ? $data['export_headings'] : null;
        $this->container['export_formula'] = isset($data['export_formula']) ? $data['export_formula'] : null;
        $this->container['add_tooltip_text'] = isset($data['add_tooltip_text']) ? $data['add_tooltip_text'] : null;
        $this->container['export_bogus_row_data'] = isset($data['export_bogus_row_data']) ? $data['export_bogus_row_data'] : null;
        $this->container['exclude_unused_styles'] = isset($data['exclude_unused_styles']) ? $data['exclude_unused_styles'] : null;
        $this->container['export_document_properties'] = isset($data['export_document_properties']) ? $data['export_document_properties'] : null;
        $this->container['export_worksheet_properties'] = isset($data['export_worksheet_properties']) ? $data['export_worksheet_properties'] : null;
        $this->container['export_workbook_properties'] = isset($data['export_workbook_properties']) ? $data['export_workbook_properties'] : null;
        $this->container['export_frame_scripts_and_properties'] = isset($data['export_frame_scripts_and_properties']) ? $data['export_frame_scripts_and_properties'] : null;
        $this->container['attached_files_directory'] = isset($data['attached_files_directory']) ? $data['attached_files_directory'] : null;
        $this->container['attached_files_url_prefix'] = isset($data['attached_files_url_prefix']) ? $data['attached_files_url_prefix'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['export_active_worksheet_only'] = isset($data['export_active_worksheet_only']) ? $data['export_active_worksheet_only'] : null;
        $this->container['export_chart_image_format'] = isset($data['export_chart_image_format']) ? $data['export_chart_image_format'] : null;
        $this->container['export_images_as_base64'] = isset($data['export_images_as_base64']) ? $data['export_images_as_base64'] : null;
        $this->container['hidden_col_display_type'] = isset($data['hidden_col_display_type']) ? $data['hidden_col_display_type'] : null;
        $this->container['hidden_row_display_type'] = isset($data['hidden_row_display_type']) ? $data['hidden_row_display_type'] : null;
        $this->container['html_cross_string_type'] = isset($data['html_cross_string_type']) ? $data['html_cross_string_type'] : null;
        $this->container['is_exp_image_to_temp_dir'] = isset($data['is_exp_image_to_temp_dir']) ? $data['is_exp_image_to_temp_dir'] : null;
        $this->container['page_title'] = isset($data['page_title']) ? $data['page_title'] : null;
        $this->container['parse_html_tag_in_cell'] = isset($data['parse_html_tag_in_cell']) ? $data['parse_html_tag_in_cell'] : null;
        $this->container['cell_name_attribute'] = isset($data['cell_name_attribute']) ? $data['cell_name_attribute'] : null;
        $this->container['save_format'] = isset($data['save_format']) ? $data['save_format'] : null;
        $this->container['cached_file_folder'] = isset($data['cached_file_folder']) ? $data['cached_file_folder'] : null;
        $this->container['clear_data'] = isset($data['clear_data']) ? $data['clear_data'] : null;
        $this->container['create_directory'] = isset($data['create_directory']) ? $data['create_directory'] : null;
        $this->container['enable_http_compression'] = isset($data['enable_http_compression']) ? $data['enable_http_compression'] : null;
        $this->container['refresh_chart_cache'] = isset($data['refresh_chart_cache']) ? $data['refresh_chart_cache'] : null;
        $this->container['sort_names'] = isset($data['sort_names']) ? $data['sort_names'] : null;
        $this->container['validate_merged_areas'] = isset($data['validate_merged_areas']) ? $data['validate_merged_areas'] : null;
        $this->container['merge_areas'] = isset($data['merge_areas']) ? $data['merge_areas'] : null;
        $this->container['sort_external_names'] = isset($data['sort_external_names']) ? $data['sort_external_names'] : null;
        $this->container['check_excel_restriction'] = isset($data['check_excel_restriction']) ? $data['check_excel_restriction'] : null;
        $this->container['update_smart_art'] = isset($data['update_smart_art']) ? $data['update_smart_art'] : null;
        $this->container['encrypt_document_properties'] = isset($data['encrypt_document_properties']) ? $data['encrypt_document_properties'] : null;
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
     * Gets export_page_headers.
     *
     * @return bool|null
     */
    public function getExportPageHeaders()
    {
        return $this->container['export_page_headers'];
    }

    /**
     * Sets export_page_headers.
     *
     * @param bool|null $export_page_headers
     *
     * @return $this
     */
    public function setExportPageHeaders($export_page_headers)
    {
        $this->container['export_page_headers'] = $export_page_headers;
        return $this;
    }

    /**
     * Gets export_page_footers.
     *
     * @return bool|null
     */
    public function getExportPageFooters()
    {
        return $this->container['export_page_footers'];
    }

    /**
     * Sets export_page_footers.
     *
     * @param bool|null $export_page_footers
     *
     * @return $this
     */
    public function setExportPageFooters($export_page_footers)
    {
        $this->container['export_page_footers'] = $export_page_footers;
        return $this;
    }

    /**
     * Gets export_row_column_headings.
     *
     * @return bool|null
     */
    public function getExportRowColumnHeadings()
    {
        return $this->container['export_row_column_headings'];
    }

    /**
     * Sets export_row_column_headings.
     *
     * @param bool|null $export_row_column_headings
     *
     * @return $this
     */
    public function setExportRowColumnHeadings($export_row_column_headings)
    {
        $this->container['export_row_column_headings'] = $export_row_column_headings;
        return $this;
    }

    /**
     * Gets show_all_sheets.
     *
     * @return bool|null
     */
    public function getShowAllSheets()
    {
        return $this->container['show_all_sheets'];
    }

    /**
     * Sets show_all_sheets.
     *
     * @param bool|null $show_all_sheets
     *
     * @return $this
     */
    public function setShowAllSheets($show_all_sheets)
    {
        $this->container['show_all_sheets'] = $show_all_sheets;
        return $this;
    }

    /**
     * Gets image_options.
     *
     * @return \Aspose\Cells\Cloud\Model\ImageOrPrintOptions|null
     */
    public function getImageOptions()
    {
        return $this->container['image_options'];
    }

    /**
     * Sets image_options.
     *
     * @param \Aspose\Cells\Cloud\Model\ImageOrPrintOptions|null $image_options
     *
     * @return $this
     */
    public function setImageOptions($image_options)
    {
        $this->container['image_options'] = $image_options;
        return $this;
    }

    /**
     * Gets save_as_single_file.
     *
     * @return bool|null
     */
    public function getSaveAsSingleFile()
    {
        return $this->container['save_as_single_file'];
    }

    /**
     * Sets save_as_single_file.
     *
     * @param bool|null $save_as_single_file
     *
     * @return $this
     */
    public function setSaveAsSingleFile($save_as_single_file)
    {
        $this->container['save_as_single_file'] = $save_as_single_file;
        return $this;
    }

    /**
     * Gets export_hidden_worksheet.
     *
     * @return bool|null
     */
    public function getExportHiddenWorksheet()
    {
        return $this->container['export_hidden_worksheet'];
    }

    /**
     * Sets export_hidden_worksheet.
     *
     * @param bool|null $export_hidden_worksheet
     *
     * @return $this
     */
    public function setExportHiddenWorksheet($export_hidden_worksheet)
    {
        $this->container['export_hidden_worksheet'] = $export_hidden_worksheet;
        return $this;
    }

    /**
     * Gets export_grid_lines.
     *
     * @return bool|null
     */
    public function getExportGridLines()
    {
        return $this->container['export_grid_lines'];
    }

    /**
     * Sets export_grid_lines.
     *
     * @param bool|null $export_grid_lines
     *
     * @return $this
     */
    public function setExportGridLines($export_grid_lines)
    {
        $this->container['export_grid_lines'] = $export_grid_lines;
        return $this;
    }

    /**
     * Gets presentation_preference.
     *
     * @return bool|null
     */
    public function getPresentationPreference()
    {
        return $this->container['presentation_preference'];
    }

    /**
     * Sets presentation_preference.
     *
     * @param bool|null $presentation_preference
     *
     * @return $this
     */
    public function setPresentationPreference($presentation_preference)
    {
        $this->container['presentation_preference'] = $presentation_preference;
        return $this;
    }

    /**
     * Gets cell_css_prefix.
     *
     * @return string|null
     */
    public function getCellCssPrefix()
    {
        return $this->container['cell_css_prefix'];
    }

    /**
     * Sets cell_css_prefix.
     *
     * @param string|null $cell_css_prefix
     *
     * @return $this
     */
    public function setCellCssPrefix($cell_css_prefix)
    {
        $this->container['cell_css_prefix'] = $cell_css_prefix;
        return $this;
    }

    /**
     * Gets table_css_id.
     *
     * @return string|null
     */
    public function getTableCssId()
    {
        return $this->container['table_css_id'];
    }

    /**
     * Sets table_css_id.
     *
     * @param string|null $table_css_id
     *
     * @return $this
     */
    public function setTableCssId($table_css_id)
    {
        $this->container['table_css_id'] = $table_css_id;
        return $this;
    }

    /**
     * Gets is_full_path_link.
     *
     * @return bool|null
     */
    public function getIsFullPathLink()
    {
        return $this->container['is_full_path_link'];
    }

    /**
     * Sets is_full_path_link.
     *
     * @param bool|null $is_full_path_link
     *
     * @return $this
     */
    public function setIsFullPathLink($is_full_path_link)
    {
        $this->container['is_full_path_link'] = $is_full_path_link;
        return $this;
    }

    /**
     * Gets export_worksheet_css_separately.
     *
     * @return bool|null
     */
    public function getExportWorksheetCssSeparately()
    {
        return $this->container['export_worksheet_css_separately'];
    }

    /**
     * Sets export_worksheet_css_separately.
     *
     * @param bool|null $export_worksheet_css_separately
     *
     * @return $this
     */
    public function setExportWorksheetCssSeparately($export_worksheet_css_separately)
    {
        $this->container['export_worksheet_css_separately'] = $export_worksheet_css_separately;
        return $this;
    }

    /**
     * Gets export_similar_border_style.
     *
     * @return bool|null
     */
    public function getExportSimilarBorderStyle()
    {
        return $this->container['export_similar_border_style'];
    }

    /**
     * Sets export_similar_border_style.
     *
     * @param bool|null $export_similar_border_style
     *
     * @return $this
     */
    public function setExportSimilarBorderStyle($export_similar_border_style)
    {
        $this->container['export_similar_border_style'] = $export_similar_border_style;
        return $this;
    }

    /**
     * Gets merge_empty_td_forcely.
     *
     * @return bool|null
     */
    public function getMergeEmptyTdForcely()
    {
        return $this->container['merge_empty_td_forcely'];
    }

    /**
     * Sets merge_empty_td_forcely.
     *
     * @param bool|null $merge_empty_td_forcely
     *
     * @return $this
     */
    public function setMergeEmptyTdForcely($merge_empty_td_forcely)
    {
        $this->container['merge_empty_td_forcely'] = $merge_empty_td_forcely;
        return $this;
    }

    /**
     * Gets export_cell_coordinate.
     *
     * @return bool|null
     */
    public function getExportCellCoordinate()
    {
        return $this->container['export_cell_coordinate'];
    }

    /**
     * Sets export_cell_coordinate.
     *
     * @param bool|null $export_cell_coordinate
     *
     * @return $this
     */
    public function setExportCellCoordinate($export_cell_coordinate)
    {
        $this->container['export_cell_coordinate'] = $export_cell_coordinate;
        return $this;
    }

    /**
     * Gets export_extra_headings.
     *
     * @return bool|null
     */
    public function getExportExtraHeadings()
    {
        return $this->container['export_extra_headings'];
    }

    /**
     * Sets export_extra_headings.
     *
     * @param bool|null $export_extra_headings
     *
     * @return $this
     */
    public function setExportExtraHeadings($export_extra_headings)
    {
        $this->container['export_extra_headings'] = $export_extra_headings;
        return $this;
    }

    /**
     * Gets export_headings.
     *
     * @return bool|null
     */
    public function getExportHeadings()
    {
        return $this->container['export_headings'];
    }

    /**
     * Sets export_headings.
     *
     * @param bool|null $export_headings
     *
     * @return $this
     */
    public function setExportHeadings($export_headings)
    {
        $this->container['export_headings'] = $export_headings;
        return $this;
    }

    /**
     * Gets export_formula.
     *
     * @return bool|null
     */
    public function getExportFormula()
    {
        return $this->container['export_formula'];
    }

    /**
     * Sets export_formula.
     *
     * @param bool|null $export_formula
     *
     * @return $this
     */
    public function setExportFormula($export_formula)
    {
        $this->container['export_formula'] = $export_formula;
        return $this;
    }

    /**
     * Gets add_tooltip_text.
     *
     * @return bool|null
     */
    public function getAddTooltipText()
    {
        return $this->container['add_tooltip_text'];
    }

    /**
     * Sets add_tooltip_text.
     *
     * @param bool|null $add_tooltip_text
     *
     * @return $this
     */
    public function setAddTooltipText($add_tooltip_text)
    {
        $this->container['add_tooltip_text'] = $add_tooltip_text;
        return $this;
    }

    /**
     * Gets export_bogus_row_data.
     *
     * @return bool|null
     */
    public function getExportBogusRowData()
    {
        return $this->container['export_bogus_row_data'];
    }

    /**
     * Sets export_bogus_row_data.
     *
     * @param bool|null $export_bogus_row_data
     *
     * @return $this
     */
    public function setExportBogusRowData($export_bogus_row_data)
    {
        $this->container['export_bogus_row_data'] = $export_bogus_row_data;
        return $this;
    }

    /**
     * Gets exclude_unused_styles.
     *
     * @return bool|null
     */
    public function getExcludeUnusedStyles()
    {
        return $this->container['exclude_unused_styles'];
    }

    /**
     * Sets exclude_unused_styles.
     *
     * @param bool|null $exclude_unused_styles
     *
     * @return $this
     */
    public function setExcludeUnusedStyles($exclude_unused_styles)
    {
        $this->container['exclude_unused_styles'] = $exclude_unused_styles;
        return $this;
    }

    /**
     * Gets export_document_properties.
     *
     * @return bool|null
     */
    public function getExportDocumentProperties()
    {
        return $this->container['export_document_properties'];
    }

    /**
     * Sets export_document_properties.
     *
     * @param bool|null $export_document_properties
     *
     * @return $this
     */
    public function setExportDocumentProperties($export_document_properties)
    {
        $this->container['export_document_properties'] = $export_document_properties;
        return $this;
    }

    /**
     * Gets export_worksheet_properties.
     *
     * @return bool|null
     */
    public function getExportWorksheetProperties()
    {
        return $this->container['export_worksheet_properties'];
    }

    /**
     * Sets export_worksheet_properties.
     *
     * @param bool|null $export_worksheet_properties
     *
     * @return $this
     */
    public function setExportWorksheetProperties($export_worksheet_properties)
    {
        $this->container['export_worksheet_properties'] = $export_worksheet_properties;
        return $this;
    }

    /**
     * Gets export_workbook_properties.
     *
     * @return bool|null
     */
    public function getExportWorkbookProperties()
    {
        return $this->container['export_workbook_properties'];
    }

    /**
     * Sets export_workbook_properties.
     *
     * @param bool|null $export_workbook_properties
     *
     * @return $this
     */
    public function setExportWorkbookProperties($export_workbook_properties)
    {
        $this->container['export_workbook_properties'] = $export_workbook_properties;
        return $this;
    }

    /**
     * Gets export_frame_scripts_and_properties.
     *
     * @return bool|null
     */
    public function getExportFrameScriptsAndProperties()
    {
        return $this->container['export_frame_scripts_and_properties'];
    }

    /**
     * Sets export_frame_scripts_and_properties.
     *
     * @param bool|null $export_frame_scripts_and_properties
     *
     * @return $this
     */
    public function setExportFrameScriptsAndProperties($export_frame_scripts_and_properties)
    {
        $this->container['export_frame_scripts_and_properties'] = $export_frame_scripts_and_properties;
        return $this;
    }

    /**
     * Gets attached_files_directory.
     *
     * @return string|null
     */
    public function getAttachedFilesDirectory()
    {
        return $this->container['attached_files_directory'];
    }

    /**
     * Sets attached_files_directory.
     *
     * @param string|null $attached_files_directory
     *
     * @return $this
     */
    public function setAttachedFilesDirectory($attached_files_directory)
    {
        $this->container['attached_files_directory'] = $attached_files_directory;
        return $this;
    }

    /**
     * Gets attached_files_url_prefix.
     *
     * @return string|null
     */
    public function getAttachedFilesUrlPrefix()
    {
        return $this->container['attached_files_url_prefix'];
    }

    /**
     * Sets attached_files_url_prefix.
     *
     * @param string|null $attached_files_url_prefix
     *
     * @return $this
     */
    public function setAttachedFilesUrlPrefix($attached_files_url_prefix)
    {
        $this->container['attached_files_url_prefix'] = $attached_files_url_prefix;
        return $this;
    }

    /**
     * Gets encoding.
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding.
     *
     * @param string|null $encoding
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
     * Gets export_active_worksheet_only.
     *
     * @return bool|null
     */
    public function getExportActiveWorksheetOnly()
    {
        return $this->container['export_active_worksheet_only'];
    }

    /**
     * Sets export_active_worksheet_only.
     *
     * @param bool|null $export_active_worksheet_only
     *
     * @return $this
     */
    public function setExportActiveWorksheetOnly($export_active_worksheet_only)
    {
        $this->container['export_active_worksheet_only'] = $export_active_worksheet_only;
        return $this;
    }

    /**
     * Gets export_chart_image_format.
     *
     * @return string|null
     */
    public function getExportChartImageFormat()
    {
        return $this->container['export_chart_image_format'];
    }

    /**
     * Sets export_chart_image_format.
     *
     * @param string|null $export_chart_image_format
     *
     * @return $this
     */
    public function setExportChartImageFormat($export_chart_image_format)
    {
        $this->container['export_chart_image_format'] = $export_chart_image_format;
        return $this;
    }

    /**
     * Gets export_images_as_base64.
     *
     * @return bool|null
     */
    public function getExportImagesAsBase64()
    {
        return $this->container['export_images_as_base64'];
    }

    /**
     * Sets export_images_as_base64.
     *
     * @param bool|null $export_images_as_base64
     *
     * @return $this
     */
    public function setExportImagesAsBase64($export_images_as_base64)
    {
        $this->container['export_images_as_base64'] = $export_images_as_base64;
        return $this;
    }

    /**
     * Gets hidden_col_display_type.
     *
     * @return string|null
     */
    public function getHiddenColDisplayType()
    {
        return $this->container['hidden_col_display_type'];
    }

    /**
     * Sets hidden_col_display_type.
     *
     * @param string|null $hidden_col_display_type
     *
     * @return $this
     */
    public function setHiddenColDisplayType($hidden_col_display_type)
    {
        $this->container['hidden_col_display_type'] = $hidden_col_display_type;
        return $this;
    }

    /**
     * Gets hidden_row_display_type.
     *
     * @return string|null
     */
    public function getHiddenRowDisplayType()
    {
        return $this->container['hidden_row_display_type'];
    }

    /**
     * Sets hidden_row_display_type.
     *
     * @param string|null $hidden_row_display_type
     *
     * @return $this
     */
    public function setHiddenRowDisplayType($hidden_row_display_type)
    {
        $this->container['hidden_row_display_type'] = $hidden_row_display_type;
        return $this;
    }

    /**
     * Gets html_cross_string_type.
     *
     * @return string|null
     */
    public function getHtmlCrossStringType()
    {
        return $this->container['html_cross_string_type'];
    }

    /**
     * Sets html_cross_string_type.
     *
     * @param string|null $html_cross_string_type
     *
     * @return $this
     */
    public function setHtmlCrossStringType($html_cross_string_type)
    {
        $this->container['html_cross_string_type'] = $html_cross_string_type;
        return $this;
    }

    /**
     * Gets is_exp_image_to_temp_dir.
     *
     * @return bool|null
     */
    public function getIsExpImageToTempDir()
    {
        return $this->container['is_exp_image_to_temp_dir'];
    }

    /**
     * Sets is_exp_image_to_temp_dir.
     *
     * @param bool|null $is_exp_image_to_temp_dir
     *
     * @return $this
     */
    public function setIsExpImageToTempDir($is_exp_image_to_temp_dir)
    {
        $this->container['is_exp_image_to_temp_dir'] = $is_exp_image_to_temp_dir;
        return $this;
    }

    /**
     * Gets page_title.
     *
     * @return string|null
     */
    public function getPageTitle()
    {
        return $this->container['page_title'];
    }

    /**
     * Sets page_title.
     *
     * @param string|null $page_title
     *
     * @return $this
     */
    public function setPageTitle($page_title)
    {
        $this->container['page_title'] = $page_title;
        return $this;
    }

    /**
     * Gets parse_html_tag_in_cell.
     *
     * @return bool|null
     */
    public function getParseHtmlTagInCell()
    {
        return $this->container['parse_html_tag_in_cell'];
    }

    /**
     * Sets parse_html_tag_in_cell.
     *
     * @param bool|null $parse_html_tag_in_cell
     *
     * @return $this
     */
    public function setParseHtmlTagInCell($parse_html_tag_in_cell)
    {
        $this->container['parse_html_tag_in_cell'] = $parse_html_tag_in_cell;
        return $this;
    }

    /**
     * Gets cell_name_attribute.
     *
     * @return string|null
     */
    public function getCellNameAttribute()
    {
        return $this->container['cell_name_attribute'];
    }

    /**
     * Sets cell_name_attribute.
     *
     * @param string|null $cell_name_attribute
     *
     * @return $this
     */
    public function setCellNameAttribute($cell_name_attribute)
    {
        $this->container['cell_name_attribute'] = $cell_name_attribute;
        return $this;
    }

    /**
     * Gets save_format.
     *
     * @return string|null
     */
    public function getSaveFormat()
    {
        return $this->container['save_format'];
    }

    /**
     * Sets save_format.
     *
     * @param string|null $save_format
     *
     * @return $this
     */
    public function setSaveFormat($save_format)
    {
        $this->container['save_format'] = $save_format;
        return $this;
    }

    /**
     * Gets cached_file_folder.
     *
     * @return string|null
     */
    public function getCachedFileFolder()
    {
        return $this->container['cached_file_folder'];
    }

    /**
     * Sets cached_file_folder.
     *
     * @param string|null $cached_file_folder
     *
     * @return $this
     */
    public function setCachedFileFolder($cached_file_folder)
    {
        $this->container['cached_file_folder'] = $cached_file_folder;
        return $this;
    }

    /**
     * Gets clear_data.
     *
     * @return bool|null
     */
    public function getClearData()
    {
        return $this->container['clear_data'];
    }

    /**
     * Sets clear_data.
     *
     * @param bool|null $clear_data
     *
     * @return $this
     */
    public function setClearData($clear_data)
    {
        $this->container['clear_data'] = $clear_data;
        return $this;
    }

    /**
     * Gets create_directory.
     *
     * @return bool|null
     */
    public function getCreateDirectory()
    {
        return $this->container['create_directory'];
    }

    /**
     * Sets create_directory.
     *
     * @param bool|null $create_directory
     *
     * @return $this
     */
    public function setCreateDirectory($create_directory)
    {
        $this->container['create_directory'] = $create_directory;
        return $this;
    }

    /**
     * Gets enable_http_compression.
     *
     * @return bool|null
     */
    public function getEnableHttpCompression()
    {
        return $this->container['enable_http_compression'];
    }

    /**
     * Sets enable_http_compression.
     *
     * @param bool|null $enable_http_compression
     *
     * @return $this
     */
    public function setEnableHttpCompression($enable_http_compression)
    {
        $this->container['enable_http_compression'] = $enable_http_compression;
        return $this;
    }

    /**
     * Gets refresh_chart_cache.
     *
     * @return bool|null
     */
    public function getRefreshChartCache()
    {
        return $this->container['refresh_chart_cache'];
    }

    /**
     * Sets refresh_chart_cache.
     *
     * @param bool|null $refresh_chart_cache
     *
     * @return $this
     */
    public function setRefreshChartCache($refresh_chart_cache)
    {
        $this->container['refresh_chart_cache'] = $refresh_chart_cache;
        return $this;
    }

    /**
     * Gets sort_names.
     *
     * @return bool|null
     */
    public function getSortNames()
    {
        return $this->container['sort_names'];
    }

    /**
     * Sets sort_names.
     *
     * @param bool|null $sort_names
     *
     * @return $this
     */
    public function setSortNames($sort_names)
    {
        $this->container['sort_names'] = $sort_names;
        return $this;
    }

    /**
     * Gets validate_merged_areas.
     *
     * @return bool|null
     */
    public function getValidateMergedAreas()
    {
        return $this->container['validate_merged_areas'];
    }

    /**
     * Sets validate_merged_areas.
     *
     * @param bool|null $validate_merged_areas
     *
     * @return $this
     */
    public function setValidateMergedAreas($validate_merged_areas)
    {
        $this->container['validate_merged_areas'] = $validate_merged_areas;
        return $this;
    }

    /**
     * Gets merge_areas.
     *
     * @return bool|null
     */
    public function getMergeAreas()
    {
        return $this->container['merge_areas'];
    }

    /**
     * Sets merge_areas.
     *
     * @param bool|null $merge_areas
     *
     * @return $this
     */
    public function setMergeAreas($merge_areas)
    {
        $this->container['merge_areas'] = $merge_areas;
        return $this;
    }

    /**
     * Gets sort_external_names.
     *
     * @return bool|null
     */
    public function getSortExternalNames()
    {
        return $this->container['sort_external_names'];
    }

    /**
     * Sets sort_external_names.
     *
     * @param bool|null $sort_external_names
     *
     * @return $this
     */
    public function setSortExternalNames($sort_external_names)
    {
        $this->container['sort_external_names'] = $sort_external_names;
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
     * Gets update_smart_art.
     *
     * @return bool|null
     */
    public function getUpdateSmartArt()
    {
        return $this->container['update_smart_art'];
    }

    /**
     * Sets update_smart_art.
     *
     * @param bool|null $update_smart_art
     *
     * @return $this
     */
    public function setUpdateSmartArt($update_smart_art)
    {
        $this->container['update_smart_art'] = $update_smart_art;
        return $this;
    }

    /**
     * Gets encrypt_document_properties.
     *
     * @return bool|null
     */
    public function getEncryptDocumentProperties()
    {
        return $this->container['encrypt_document_properties'];
    }

    /**
     * Sets encrypt_document_properties.
     *
     * @param bool|null $encrypt_document_properties
     *
     * @return $this
     */
    public function setEncryptDocumentProperties($encrypt_document_properties)
    {
        $this->container['encrypt_document_properties'] = $encrypt_document_properties;
        return $this;
    }
}
