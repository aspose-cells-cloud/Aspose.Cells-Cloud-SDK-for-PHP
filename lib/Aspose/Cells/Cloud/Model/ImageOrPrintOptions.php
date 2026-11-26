<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ImageOrPrintOptions.php">
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

class ImageOrPrintOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageOrPrintOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'text_cross_type' => 'string',
        'gridline_type' => 'string',
        'output_blank_page_when_nothing_to_print' => 'bool',
        'check_workbook_default_font' => 'bool',
        'default_font' => 'string',
        'is_optimized' => 'bool',
        'page_count' => 'int',
        'page_index' => 'int',
        'is_font_substitution_char_granularity' => 'bool',
        'transparent' => 'bool',
        'only_area' => 'bool',
        'svg_fit_to_view_port' => 'bool',
        'embeded_image_name_in_svg' => 'string',
        'all_columns_in_one_page_per_sheet' => 'bool',
        'print_with_status_dialog' => 'bool',
        'horizontal_resolution' => 'int',
        'vertical_resolution' => 'int',
        'default_edit_language' => 'string',
        'tiff_color_depth' => 'string',
        'tiff_compression' => 'string',
        'printing_page' => 'string',
        'quality' => 'int',
        'image_type' => 'string',
        'one_page_per_sheet' => 'bool',
        'tiff_binarization_method' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'text_cross_type' => null,
        'gridline_type' => null,
        'output_blank_page_when_nothing_to_print' => null,
        'check_workbook_default_font' => null,
        'default_font' => null,
        'is_optimized' => null,
        'page_count' => 'int32',
        'page_index' => 'int32',
        'is_font_substitution_char_granularity' => null,
        'transparent' => null,
        'only_area' => null,
        'svg_fit_to_view_port' => null,
        'embeded_image_name_in_svg' => null,
        'all_columns_in_one_page_per_sheet' => null,
        'print_with_status_dialog' => null,
        'horizontal_resolution' => 'int32',
        'vertical_resolution' => 'int32',
        'default_edit_language' => null,
        'tiff_color_depth' => null,
        'tiff_compression' => null,
        'printing_page' => null,
        'quality' => 'int32',
        'image_type' => null,
        'one_page_per_sheet' => null,
        'tiff_binarization_method' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'text_cross_type' => 'TextCrossType',
        'gridline_type' => 'GridlineType',
        'output_blank_page_when_nothing_to_print' => 'OutputBlankPageWhenNothingToPrint',
        'check_workbook_default_font' => 'CheckWorkbookDefaultFont',
        'default_font' => 'DefaultFont',
        'is_optimized' => 'IsOptimized',
        'page_count' => 'PageCount',
        'page_index' => 'PageIndex',
        'is_font_substitution_char_granularity' => 'IsFontSubstitutionCharGranularity',
        'transparent' => 'Transparent',
        'only_area' => 'OnlyArea',
        'svg_fit_to_view_port' => 'SVGFitToViewPort',
        'embeded_image_name_in_svg' => 'EmbededImageNameInSvg',
        'all_columns_in_one_page_per_sheet' => 'AllColumnsInOnePagePerSheet',
        'print_with_status_dialog' => 'PrintWithStatusDialog',
        'horizontal_resolution' => 'HorizontalResolution',
        'vertical_resolution' => 'VerticalResolution',
        'default_edit_language' => 'DefaultEditLanguage',
        'tiff_color_depth' => 'TiffColorDepth',
        'tiff_compression' => 'TiffCompression',
        'printing_page' => 'PrintingPage',
        'quality' => 'Quality',
        'image_type' => 'ImageType',
        'one_page_per_sheet' => 'OnePagePerSheet',
        'tiff_binarization_method' => 'TiffBinarizationMethod',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'text_cross_type' => 'setTextCrossType',
        'gridline_type' => 'setGridlineType',
        'output_blank_page_when_nothing_to_print' => 'setOutputBlankPageWhenNothingToPrint',
        'check_workbook_default_font' => 'setCheckWorkbookDefaultFont',
        'default_font' => 'setDefaultFont',
        'is_optimized' => 'setIsOptimized',
        'page_count' => 'setPageCount',
        'page_index' => 'setPageIndex',
        'is_font_substitution_char_granularity' => 'setIsFontSubstitutionCharGranularity',
        'transparent' => 'setTransparent',
        'only_area' => 'setOnlyArea',
        'svg_fit_to_view_port' => 'setSvgFitToViewPort',
        'embeded_image_name_in_svg' => 'setEmbededImageNameInSvg',
        'all_columns_in_one_page_per_sheet' => 'setAllColumnsInOnePagePerSheet',
        'print_with_status_dialog' => 'setPrintWithStatusDialog',
        'horizontal_resolution' => 'setHorizontalResolution',
        'vertical_resolution' => 'setVerticalResolution',
        'default_edit_language' => 'setDefaultEditLanguage',
        'tiff_color_depth' => 'setTiffColorDepth',
        'tiff_compression' => 'setTiffCompression',
        'printing_page' => 'setPrintingPage',
        'quality' => 'setQuality',
        'image_type' => 'setImageType',
        'one_page_per_sheet' => 'setOnePagePerSheet',
        'tiff_binarization_method' => 'setTiffBinarizationMethod',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'text_cross_type' => 'getTextCrossType',
        'gridline_type' => 'getGridlineType',
        'output_blank_page_when_nothing_to_print' => 'getOutputBlankPageWhenNothingToPrint',
        'check_workbook_default_font' => 'getCheckWorkbookDefaultFont',
        'default_font' => 'getDefaultFont',
        'is_optimized' => 'getIsOptimized',
        'page_count' => 'getPageCount',
        'page_index' => 'getPageIndex',
        'is_font_substitution_char_granularity' => 'getIsFontSubstitutionCharGranularity',
        'transparent' => 'getTransparent',
        'only_area' => 'getOnlyArea',
        'svg_fit_to_view_port' => 'getSvgFitToViewPort',
        'embeded_image_name_in_svg' => 'getEmbededImageNameInSvg',
        'all_columns_in_one_page_per_sheet' => 'getAllColumnsInOnePagePerSheet',
        'print_with_status_dialog' => 'getPrintWithStatusDialog',
        'horizontal_resolution' => 'getHorizontalResolution',
        'vertical_resolution' => 'getVerticalResolution',
        'default_edit_language' => 'getDefaultEditLanguage',
        'tiff_color_depth' => 'getTiffColorDepth',
        'tiff_compression' => 'getTiffCompression',
        'printing_page' => 'getPrintingPage',
        'quality' => 'getQuality',
        'image_type' => 'getImageType',
        'one_page_per_sheet' => 'getOnePagePerSheet',
        'tiff_binarization_method' => 'getTiffBinarizationMethod',
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
        $this->container['text_cross_type'] = isset($data['text_cross_type']) ? $data['text_cross_type'] : null;
        $this->container['gridline_type'] = isset($data['gridline_type']) ? $data['gridline_type'] : null;
        $this->container['output_blank_page_when_nothing_to_print'] = isset($data['output_blank_page_when_nothing_to_print']) ? $data['output_blank_page_when_nothing_to_print'] : null;
        $this->container['check_workbook_default_font'] = isset($data['check_workbook_default_font']) ? $data['check_workbook_default_font'] : null;
        $this->container['default_font'] = isset($data['default_font']) ? $data['default_font'] : null;
        $this->container['is_optimized'] = isset($data['is_optimized']) ? $data['is_optimized'] : null;
        $this->container['page_count'] = isset($data['page_count']) ? $data['page_count'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
        $this->container['is_font_substitution_char_granularity'] = isset($data['is_font_substitution_char_granularity']) ? $data['is_font_substitution_char_granularity'] : null;
        $this->container['transparent'] = isset($data['transparent']) ? $data['transparent'] : null;
        $this->container['only_area'] = isset($data['only_area']) ? $data['only_area'] : null;
        $this->container['svg_fit_to_view_port'] = isset($data['svg_fit_to_view_port']) ? $data['svg_fit_to_view_port'] : null;
        $this->container['embeded_image_name_in_svg'] = isset($data['embeded_image_name_in_svg']) ? $data['embeded_image_name_in_svg'] : null;
        $this->container['all_columns_in_one_page_per_sheet'] = isset($data['all_columns_in_one_page_per_sheet']) ? $data['all_columns_in_one_page_per_sheet'] : null;
        $this->container['print_with_status_dialog'] = isset($data['print_with_status_dialog']) ? $data['print_with_status_dialog'] : null;
        $this->container['horizontal_resolution'] = isset($data['horizontal_resolution']) ? $data['horizontal_resolution'] : null;
        $this->container['vertical_resolution'] = isset($data['vertical_resolution']) ? $data['vertical_resolution'] : null;
        $this->container['default_edit_language'] = isset($data['default_edit_language']) ? $data['default_edit_language'] : null;
        $this->container['tiff_color_depth'] = isset($data['tiff_color_depth']) ? $data['tiff_color_depth'] : null;
        $this->container['tiff_compression'] = isset($data['tiff_compression']) ? $data['tiff_compression'] : null;
        $this->container['printing_page'] = isset($data['printing_page']) ? $data['printing_page'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['image_type'] = isset($data['image_type']) ? $data['image_type'] : null;
        $this->container['one_page_per_sheet'] = isset($data['one_page_per_sheet']) ? $data['one_page_per_sheet'] : null;
        $this->container['tiff_binarization_method'] = isset($data['tiff_binarization_method']) ? $data['tiff_binarization_method'] : null;
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
     * Gets text_cross_type.
     *
     * @return string|null
     */
    public function getTextCrossType()
    {
        return $this->container['text_cross_type'];
    }

    /**
     * Sets text_cross_type.
     *
     * @param string|null $text_cross_type
     *
     * @return $this
     */
    public function setTextCrossType($text_cross_type)
    {
        $this->container['text_cross_type'] = $text_cross_type;
        return $this;
    }

    /**
     * Gets gridline_type.
     *
     * @return string|null
     */
    public function getGridlineType()
    {
        return $this->container['gridline_type'];
    }

    /**
     * Sets gridline_type.
     *
     * @param string|null $gridline_type
     *
     * @return $this
     */
    public function setGridlineType($gridline_type)
    {
        $this->container['gridline_type'] = $gridline_type;
        return $this;
    }

    /**
     * Gets output_blank_page_when_nothing_to_print.
     *
     * @return bool|null
     */
    public function getOutputBlankPageWhenNothingToPrint()
    {
        return $this->container['output_blank_page_when_nothing_to_print'];
    }

    /**
     * Sets output_blank_page_when_nothing_to_print.
     *
     * @param bool|null $output_blank_page_when_nothing_to_print
     *
     * @return $this
     */
    public function setOutputBlankPageWhenNothingToPrint($output_blank_page_when_nothing_to_print)
    {
        $this->container['output_blank_page_when_nothing_to_print'] = $output_blank_page_when_nothing_to_print;
        return $this;
    }

    /**
     * Gets check_workbook_default_font.
     *
     * @return bool|null
     */
    public function getCheckWorkbookDefaultFont()
    {
        return $this->container['check_workbook_default_font'];
    }

    /**
     * Sets check_workbook_default_font.
     *
     * @param bool|null $check_workbook_default_font
     *
     * @return $this
     */
    public function setCheckWorkbookDefaultFont($check_workbook_default_font)
    {
        $this->container['check_workbook_default_font'] = $check_workbook_default_font;
        return $this;
    }

    /**
     * Gets default_font.
     *
     * @return string|null
     */
    public function getDefaultFont()
    {
        return $this->container['default_font'];
    }

    /**
     * Sets default_font.
     *
     * @param string|null $default_font
     *
     * @return $this
     */
    public function setDefaultFont($default_font)
    {
        $this->container['default_font'] = $default_font;
        return $this;
    }

    /**
     * Gets is_optimized.
     *
     * @return bool|null
     */
    public function getIsOptimized()
    {
        return $this->container['is_optimized'];
    }

    /**
     * Sets is_optimized.
     *
     * @param bool|null $is_optimized
     *
     * @return $this
     */
    public function setIsOptimized($is_optimized)
    {
        $this->container['is_optimized'] = $is_optimized;
        return $this;
    }

    /**
     * Gets page_count.
     *
     * @return int|null
     */
    public function getPageCount()
    {
        return $this->container['page_count'];
    }

    /**
     * Sets page_count.
     *
     * @param int|null $page_count
     *
     * @return $this
     */
    public function setPageCount($page_count)
    {
        $this->container['page_count'] = $page_count;
        return $this;
    }

    /**
     * Gets page_index.
     *
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index.
     *
     * @param int|null $page_index
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;
        return $this;
    }

    /**
     * Gets is_font_substitution_char_granularity.
     *
     * @return bool|null
     */
    public function getIsFontSubstitutionCharGranularity()
    {
        return $this->container['is_font_substitution_char_granularity'];
    }

    /**
     * Sets is_font_substitution_char_granularity.
     *
     * @param bool|null $is_font_substitution_char_granularity
     *
     * @return $this
     */
    public function setIsFontSubstitutionCharGranularity($is_font_substitution_char_granularity)
    {
        $this->container['is_font_substitution_char_granularity'] = $is_font_substitution_char_granularity;
        return $this;
    }

    /**
     * Gets transparent.
     *
     * @return bool|null
     */
    public function getTransparent()
    {
        return $this->container['transparent'];
    }

    /**
     * Sets transparent.
     *
     * @param bool|null $transparent
     *
     * @return $this
     */
    public function setTransparent($transparent)
    {
        $this->container['transparent'] = $transparent;
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
     * Gets svg_fit_to_view_port.
     *
     * @return bool|null
     */
    public function getSvgFitToViewPort()
    {
        return $this->container['svg_fit_to_view_port'];
    }

    /**
     * Sets svg_fit_to_view_port.
     *
     * @param bool|null $svg_fit_to_view_port
     *
     * @return $this
     */
    public function setSvgFitToViewPort($svg_fit_to_view_port)
    {
        $this->container['svg_fit_to_view_port'] = $svg_fit_to_view_port;
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
     * Gets all_columns_in_one_page_per_sheet.
     *
     * @return bool|null
     */
    public function getAllColumnsInOnePagePerSheet()
    {
        return $this->container['all_columns_in_one_page_per_sheet'];
    }

    /**
     * Sets all_columns_in_one_page_per_sheet.
     *
     * @param bool|null $all_columns_in_one_page_per_sheet
     *
     * @return $this
     */
    public function setAllColumnsInOnePagePerSheet($all_columns_in_one_page_per_sheet)
    {
        $this->container['all_columns_in_one_page_per_sheet'] = $all_columns_in_one_page_per_sheet;
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
     * Gets default_edit_language.
     *
     * @return string|null
     */
    public function getDefaultEditLanguage()
    {
        return $this->container['default_edit_language'];
    }

    /**
     * Sets default_edit_language.
     *
     * @param string|null $default_edit_language
     *
     * @return $this
     */
    public function setDefaultEditLanguage($default_edit_language)
    {
        $this->container['default_edit_language'] = $default_edit_language;
        return $this;
    }

    /**
     * Gets tiff_color_depth.
     *
     * @return string|null
     */
    public function getTiffColorDepth()
    {
        return $this->container['tiff_color_depth'];
    }

    /**
     * Sets tiff_color_depth.
     *
     * @param string|null $tiff_color_depth
     *
     * @return $this
     */
    public function setTiffColorDepth($tiff_color_depth)
    {
        $this->container['tiff_color_depth'] = $tiff_color_depth;
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
     * Gets image_type.
     *
     * @return string|null
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type.
     *
     * @param string|null $image_type
     *
     * @return $this
     */
    public function setImageType($image_type)
    {
        $this->container['image_type'] = $image_type;
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
     * Gets tiff_binarization_method.
     *
     * @return string|null
     */
    public function getTiffBinarizationMethod()
    {
        return $this->container['tiff_binarization_method'];
    }

    /**
     * Sets tiff_binarization_method.
     *
     * @param string|null $tiff_binarization_method
     *
     * @return $this
     */
    public function setTiffBinarizationMethod($tiff_binarization_method)
    {
        $this->container['tiff_binarization_method'] = $tiff_binarization_method;
        return $this;
    }
}
