<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImageSaveOptions.php">
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

class ImageSaveOptions extends SaveOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageSaveOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chart_image_type' => 'string',
        'embeded_image_name_in_svg' => 'string',
        'horizontal_resolution' => 'int',
        'image_format' => 'string',
        'is_cell_auto_fit' => 'bool',
        'one_page_per_sheet' => 'bool',
        'only_area' => 'bool',
        'printing_page' => 'string',
        'print_with_status_dialog' => 'bool',
        'quality' => 'int',
        'tiff_compression' => 'string',
        'vertical_resolution' => 'int',
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
        'chart_image_type' => null,
        'embeded_image_name_in_svg' => null,
        'horizontal_resolution' => 'int32',
        'image_format' => null,
        'is_cell_auto_fit' => null,
        'one_page_per_sheet' => null,
        'only_area' => null,
        'printing_page' => null,
        'print_with_status_dialog' => null,
        'quality' => 'int32',
        'tiff_compression' => null,
        'vertical_resolution' => 'int32',
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
        'chart_image_type' => 'ChartImageType',
        'embeded_image_name_in_svg' => 'EmbededImageNameInSvg',
        'horizontal_resolution' => 'HorizontalResolution',
        'image_format' => 'ImageFormat',
        'is_cell_auto_fit' => 'IsCellAutoFit',
        'one_page_per_sheet' => 'OnePagePerSheet',
        'only_area' => 'OnlyArea',
        'printing_page' => 'PrintingPage',
        'print_with_status_dialog' => 'PrintWithStatusDialog',
        'quality' => 'Quality',
        'tiff_compression' => 'TiffCompression',
        'vertical_resolution' => 'VerticalResolution',
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
        'chart_image_type' => 'setChartImageType',
        'embeded_image_name_in_svg' => 'setEmbededImageNameInSvg',
        'horizontal_resolution' => 'setHorizontalResolution',
        'image_format' => 'setImageFormat',
        'is_cell_auto_fit' => 'setIsCellAutoFit',
        'one_page_per_sheet' => 'setOnePagePerSheet',
        'only_area' => 'setOnlyArea',
        'printing_page' => 'setPrintingPage',
        'print_with_status_dialog' => 'setPrintWithStatusDialog',
        'quality' => 'setQuality',
        'tiff_compression' => 'setTiffCompression',
        'vertical_resolution' => 'setVerticalResolution',
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
        'chart_image_type' => 'getChartImageType',
        'embeded_image_name_in_svg' => 'getEmbededImageNameInSvg',
        'horizontal_resolution' => 'getHorizontalResolution',
        'image_format' => 'getImageFormat',
        'is_cell_auto_fit' => 'getIsCellAutoFit',
        'one_page_per_sheet' => 'getOnePagePerSheet',
        'only_area' => 'getOnlyArea',
        'printing_page' => 'getPrintingPage',
        'print_with_status_dialog' => 'getPrintWithStatusDialog',
        'quality' => 'getQuality',
        'tiff_compression' => 'getTiffCompression',
        'vertical_resolution' => 'getVerticalResolution',
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
        $this->container['chart_image_type'] = isset($data['chart_image_type']) ? $data['chart_image_type'] : null;
        $this->container['embeded_image_name_in_svg'] = isset($data['embeded_image_name_in_svg']) ? $data['embeded_image_name_in_svg'] : null;
        $this->container['horizontal_resolution'] = isset($data['horizontal_resolution']) ? $data['horizontal_resolution'] : null;
        $this->container['image_format'] = isset($data['image_format']) ? $data['image_format'] : null;
        $this->container['is_cell_auto_fit'] = isset($data['is_cell_auto_fit']) ? $data['is_cell_auto_fit'] : null;
        $this->container['one_page_per_sheet'] = isset($data['one_page_per_sheet']) ? $data['one_page_per_sheet'] : null;
        $this->container['only_area'] = isset($data['only_area']) ? $data['only_area'] : null;
        $this->container['printing_page'] = isset($data['printing_page']) ? $data['printing_page'] : null;
        $this->container['print_with_status_dialog'] = isset($data['print_with_status_dialog']) ? $data['print_with_status_dialog'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['tiff_compression'] = isset($data['tiff_compression']) ? $data['tiff_compression'] : null;
        $this->container['vertical_resolution'] = isset($data['vertical_resolution']) ? $data['vertical_resolution'] : null;
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
     * Gets chart_image_type.
     *
     * @return string|null
     */
    public function getChartImageType()
    {
        return $this->container['chart_image_type'];
    }

    /**
     * Sets chart_image_type.
     *
     * @param string|null $chart_image_type
     *
     * @return $this
     */
    public function setChartImageType($chart_image_type)
    {
        $this->container['chart_image_type'] = $chart_image_type;
        return $this;
    }

    /**
     * Gets embeded_image_name_in_svg.
     *
     * @return string|null
     */
    public function getEmbededImageNameInSvg()
    {
        return $this->container['embeded_image_name_in_svg'];
    }

    /**
     * Sets embeded_image_name_in_svg.
     *
     * @param string|null $embeded_image_name_in_svg
     *
     * @return $this
     */
    public function setEmbededImageNameInSvg($embeded_image_name_in_svg)
    {
        $this->container['embeded_image_name_in_svg'] = $embeded_image_name_in_svg;
        return $this;
    }

    /**
     * Gets horizontal_resolution.
     *
     * @return int|null
     */
    public function getHorizontalResolution()
    {
        return $this->container['horizontal_resolution'];
    }

    /**
     * Sets horizontal_resolution.
     *
     * @param int|null $horizontal_resolution
     *
     * @return $this
     */
    public function setHorizontalResolution($horizontal_resolution)
    {
        $this->container['horizontal_resolution'] = $horizontal_resolution;
        return $this;
    }

    /**
     * Gets image_format.
     *
     * @return string|null
     */
    public function getImageFormat()
    {
        return $this->container['image_format'];
    }

    /**
     * Sets image_format.
     *
     * @param string|null $image_format
     *
     * @return $this
     */
    public function setImageFormat($image_format)
    {
        $this->container['image_format'] = $image_format;
        return $this;
    }

    /**
     * Gets is_cell_auto_fit.
     *
     * @return bool|null
     */
    public function getIsCellAutoFit()
    {
        return $this->container['is_cell_auto_fit'];
    }

    /**
     * Sets is_cell_auto_fit.
     *
     * @param bool|null $is_cell_auto_fit
     *
     * @return $this
     */
    public function setIsCellAutoFit($is_cell_auto_fit)
    {
        $this->container['is_cell_auto_fit'] = $is_cell_auto_fit;
        return $this;
    }

    /**
     * Gets one_page_per_sheet.
     *
     * @return bool|null
     */
    public function getOnePagePerSheet()
    {
        return $this->container['one_page_per_sheet'];
    }

    /**
     * Sets one_page_per_sheet.
     *
     * @param bool|null $one_page_per_sheet
     *
     * @return $this
     */
    public function setOnePagePerSheet($one_page_per_sheet)
    {
        $this->container['one_page_per_sheet'] = $one_page_per_sheet;
        return $this;
    }

    /**
     * Gets only_area.
     *
     * @return bool|null
     */
    public function getOnlyArea()
    {
        return $this->container['only_area'];
    }

    /**
     * Sets only_area.
     *
     * @param bool|null $only_area
     *
     * @return $this
     */
    public function setOnlyArea($only_area)
    {
        $this->container['only_area'] = $only_area;
        return $this;
    }

    /**
     * Gets printing_page.
     *
     * @return string|null
     */
    public function getPrintingPage()
    {
        return $this->container['printing_page'];
    }

    /**
     * Sets printing_page.
     *
     * @param string|null $printing_page
     *
     * @return $this
     */
    public function setPrintingPage($printing_page)
    {
        $this->container['printing_page'] = $printing_page;
        return $this;
    }

    /**
     * Gets print_with_status_dialog.
     *
     * @return bool|null
     */
    public function getPrintWithStatusDialog()
    {
        return $this->container['print_with_status_dialog'];
    }

    /**
     * Sets print_with_status_dialog.
     *
     * @param bool|null $print_with_status_dialog
     *
     * @return $this
     */
    public function setPrintWithStatusDialog($print_with_status_dialog)
    {
        $this->container['print_with_status_dialog'] = $print_with_status_dialog;
        return $this;
    }

    /**
     * Gets quality.
     *
     * @return int|null
     */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
     * Sets quality.
     *
     * @param int|null $quality
     *
     * @return $this
     */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;
        return $this;
    }

    /**
     * Gets tiff_compression.
     *
     * @return string|null
     */
    public function getTiffCompression()
    {
        return $this->container['tiff_compression'];
    }

    /**
     * Sets tiff_compression.
     *
     * @param string|null $tiff_compression
     *
     * @return $this
     */
    public function setTiffCompression($tiff_compression)
    {
        $this->container['tiff_compression'] = $tiff_compression;
        return $this;
    }

    /**
     * Gets vertical_resolution.
     *
     * @return int|null
     */
    public function getVerticalResolution()
    {
        return $this->container['vertical_resolution'];
    }

    /**
     * Sets vertical_resolution.
     *
     * @param int|null $vertical_resolution
     *
     * @return $this
     */
    public function setVerticalResolution($vertical_resolution)
    {
        $this->container['vertical_resolution'] = $vertical_resolution;
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
