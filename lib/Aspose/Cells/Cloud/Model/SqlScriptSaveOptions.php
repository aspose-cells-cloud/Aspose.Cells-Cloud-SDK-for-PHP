<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SqlScriptSaveOptions.php">
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

class SqlScriptSaveOptions extends SaveOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SqlScriptSaveOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'check_if_table_exists' => 'bool',
        'column_type_map' => 'string',
        'check_all_data_for_column_type' => 'bool',
        'add_blank_line_between_rows' => 'bool',
        'separator' => 'string',
        'operator_type' => 'string',
        'primary_key' => 'int',
        'create_table' => 'bool',
        'id_name' => 'string',
        'start_id' => 'int',
        'table_name' => 'string',
        'export_as_string' => 'bool',
        'export_area' => '\\Aspose\\Cells\\Cloud\\Model\\CellArea',
        'has_header_row' => 'bool',
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
        'check_if_table_exists' => null,
        'column_type_map' => null,
        'check_all_data_for_column_type' => null,
        'add_blank_line_between_rows' => null,
        'separator' => null,
        'operator_type' => null,
        'primary_key' => 'int32',
        'create_table' => null,
        'id_name' => null,
        'start_id' => 'int32',
        'table_name' => null,
        'export_as_string' => null,
        'export_area' => null,
        'has_header_row' => null,
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
        'check_if_table_exists' => 'CheckIfTableExists',
        'column_type_map' => 'ColumnTypeMap',
        'check_all_data_for_column_type' => 'CheckAllDataForColumnType',
        'add_blank_line_between_rows' => 'AddBlankLineBetweenRows',
        'separator' => 'Separator',
        'operator_type' => 'OperatorType',
        'primary_key' => 'PrimaryKey',
        'create_table' => 'CreateTable',
        'id_name' => 'IdName',
        'start_id' => 'StartId',
        'table_name' => 'TableName',
        'export_as_string' => 'ExportAsString',
        'export_area' => 'ExportArea',
        'has_header_row' => 'HasHeaderRow',
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
        'check_if_table_exists' => 'setCheckIfTableExists',
        'column_type_map' => 'setColumnTypeMap',
        'check_all_data_for_column_type' => 'setCheckAllDataForColumnType',
        'add_blank_line_between_rows' => 'setAddBlankLineBetweenRows',
        'separator' => 'setSeparator',
        'operator_type' => 'setOperatorType',
        'primary_key' => 'setPrimaryKey',
        'create_table' => 'setCreateTable',
        'id_name' => 'setIdName',
        'start_id' => 'setStartId',
        'table_name' => 'setTableName',
        'export_as_string' => 'setExportAsString',
        'export_area' => 'setExportArea',
        'has_header_row' => 'setHasHeaderRow',
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
        'check_if_table_exists' => 'getCheckIfTableExists',
        'column_type_map' => 'getColumnTypeMap',
        'check_all_data_for_column_type' => 'getCheckAllDataForColumnType',
        'add_blank_line_between_rows' => 'getAddBlankLineBetweenRows',
        'separator' => 'getSeparator',
        'operator_type' => 'getOperatorType',
        'primary_key' => 'getPrimaryKey',
        'create_table' => 'getCreateTable',
        'id_name' => 'getIdName',
        'start_id' => 'getStartId',
        'table_name' => 'getTableName',
        'export_as_string' => 'getExportAsString',
        'export_area' => 'getExportArea',
        'has_header_row' => 'getHasHeaderRow',
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
        $this->container['check_if_table_exists'] = isset($data['check_if_table_exists']) ? $data['check_if_table_exists'] : null;
        $this->container['column_type_map'] = isset($data['column_type_map']) ? $data['column_type_map'] : null;
        $this->container['check_all_data_for_column_type'] = isset($data['check_all_data_for_column_type']) ? $data['check_all_data_for_column_type'] : null;
        $this->container['add_blank_line_between_rows'] = isset($data['add_blank_line_between_rows']) ? $data['add_blank_line_between_rows'] : null;
        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
        $this->container['operator_type'] = isset($data['operator_type']) ? $data['operator_type'] : null;
        $this->container['primary_key'] = isset($data['primary_key']) ? $data['primary_key'] : null;
        $this->container['create_table'] = isset($data['create_table']) ? $data['create_table'] : null;
        $this->container['id_name'] = isset($data['id_name']) ? $data['id_name'] : null;
        $this->container['start_id'] = isset($data['start_id']) ? $data['start_id'] : null;
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        $this->container['export_as_string'] = isset($data['export_as_string']) ? $data['export_as_string'] : null;
        $this->container['export_area'] = isset($data['export_area']) ? $data['export_area'] : null;
        $this->container['has_header_row'] = isset($data['has_header_row']) ? $data['has_header_row'] : null;
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
     * Gets check_if_table_exists.
     *
     * @return bool|null
     */
    public function getCheckIfTableExists()
    {
        return $this->container['check_if_table_exists'];
    }

    /**
     * Sets check_if_table_exists.
     *
     * @param bool|null $check_if_table_exists
     *
     * @return $this
     */
    public function setCheckIfTableExists($check_if_table_exists)
    {
        $this->container['check_if_table_exists'] = $check_if_table_exists;
        return $this;
    }

    /**
     * Gets column_type_map.
     *
     * @return string|null
     */
    public function getColumnTypeMap()
    {
        return $this->container['column_type_map'];
    }

    /**
     * Sets column_type_map.
     *
     * @param string|null $column_type_map
     *
     * @return $this
     */
    public function setColumnTypeMap($column_type_map)
    {
        $this->container['column_type_map'] = $column_type_map;
        return $this;
    }

    /**
     * Gets check_all_data_for_column_type.
     *
     * @return bool|null
     */
    public function getCheckAllDataForColumnType()
    {
        return $this->container['check_all_data_for_column_type'];
    }

    /**
     * Sets check_all_data_for_column_type.
     *
     * @param bool|null $check_all_data_for_column_type
     *
     * @return $this
     */
    public function setCheckAllDataForColumnType($check_all_data_for_column_type)
    {
        $this->container['check_all_data_for_column_type'] = $check_all_data_for_column_type;
        return $this;
    }

    /**
     * Gets add_blank_line_between_rows.
     *
     * @return bool|null
     */
    public function getAddBlankLineBetweenRows()
    {
        return $this->container['add_blank_line_between_rows'];
    }

    /**
     * Sets add_blank_line_between_rows.
     *
     * @param bool|null $add_blank_line_between_rows
     *
     * @return $this
     */
    public function setAddBlankLineBetweenRows($add_blank_line_between_rows)
    {
        $this->container['add_blank_line_between_rows'] = $add_blank_line_between_rows;
        return $this;
    }

    /**
     * Gets separator.
     *
     * @return string|null
     */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /**
     * Sets separator.
     *
     * @param string|null $separator
     *
     * @return $this
     */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;
        return $this;
    }

    /**
     * Gets operator_type.
     *
     * @return string|null
     */
    public function getOperatorType()
    {
        return $this->container['operator_type'];
    }

    /**
     * Sets operator_type.
     *
     * @param string|null $operator_type
     *
     * @return $this
     */
    public function setOperatorType($operator_type)
    {
        $this->container['operator_type'] = $operator_type;
        return $this;
    }

    /**
     * Gets primary_key.
     *
     * @return int|null
     */
    public function getPrimaryKey()
    {
        return $this->container['primary_key'];
    }

    /**
     * Sets primary_key.
     *
     * @param int|null $primary_key
     *
     * @return $this
     */
    public function setPrimaryKey($primary_key)
    {
        $this->container['primary_key'] = $primary_key;
        return $this;
    }

    /**
     * Gets create_table.
     *
     * @return bool|null
     */
    public function getCreateTable()
    {
        return $this->container['create_table'];
    }

    /**
     * Sets create_table.
     *
     * @param bool|null $create_table
     *
     * @return $this
     */
    public function setCreateTable($create_table)
    {
        $this->container['create_table'] = $create_table;
        return $this;
    }

    /**
     * Gets id_name.
     *
     * @return string|null
     */
    public function getIdName()
    {
        return $this->container['id_name'];
    }

    /**
     * Sets id_name.
     *
     * @param string|null $id_name
     *
     * @return $this
     */
    public function setIdName($id_name)
    {
        $this->container['id_name'] = $id_name;
        return $this;
    }

    /**
     * Gets start_id.
     *
     * @return int|null
     */
    public function getStartId()
    {
        return $this->container['start_id'];
    }

    /**
     * Sets start_id.
     *
     * @param int|null $start_id
     *
     * @return $this
     */
    public function setStartId($start_id)
    {
        $this->container['start_id'] = $start_id;
        return $this;
    }

    /**
     * Gets table_name.
     *
     * @return string|null
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name.
     *
     * @param string|null $table_name
     *
     * @return $this
     */
    public function setTableName($table_name)
    {
        $this->container['table_name'] = $table_name;
        return $this;
    }

    /**
     * Gets export_as_string.
     *
     * @return bool|null
     */
    public function getExportAsString()
    {
        return $this->container['export_as_string'];
    }

    /**
     * Sets export_as_string.
     *
     * @param bool|null $export_as_string
     *
     * @return $this
     */
    public function setExportAsString($export_as_string)
    {
        $this->container['export_as_string'] = $export_as_string;
        return $this;
    }

    /**
     * Gets export_area.
     *
     * @return \Aspose\Cells\Cloud\Model\CellArea|null
     */
    public function getExportArea()
    {
        return $this->container['export_area'];
    }

    /**
     * Sets export_area.
     *
     * @param \Aspose\Cells\Cloud\Model\CellArea|null $export_area
     *
     * @return $this
     */
    public function setExportArea($export_area)
    {
        $this->container['export_area'] = $export_area;
        return $this;
    }

    /**
     * Gets has_header_row.
     *
     * @return bool|null
     */
    public function getHasHeaderRow()
    {
        return $this->container['has_header_row'];
    }

    /**
     * Sets has_header_row.
     *
     * @param bool|null $has_header_row
     *
     * @return $this
     */
    public function setHasHeaderRow($has_header_row)
    {
        $this->container['has_header_row'] = $has_header_row;
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
