<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageSetup.php">
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

class PageSetup
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageSetup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'black_and_white' => 'bool',
        'bottom_margin' => 'float',
        'center_horizontally' => 'bool',
        'center_vertically' => 'bool',
        'first_page_number' => 'int',
        'fit_to_pages_tall' => 'int',
        'fit_to_pages_wide' => 'int',
        'footer_margin' => 'float',
        'header_margin' => 'float',
        'is_auto_first_page_number' => 'bool',
        'is_hf_align_margins' => 'bool',
        'is_hf_diff_first' => 'bool',
        'is_hf_diff_odd_even' => 'bool',
        'is_hf_scale_with_doc' => 'bool',
        'is_percent_scale' => 'bool',
        'left_margin' => 'float',
        'order' => 'string',
        'orientation' => 'string',
        'paper_size' => 'string',
        'print_area' => 'string',
        'print_comments' => 'string',
        'print_copies' => 'int',
        'print_draft' => 'bool',
        'print_errors' => 'string',
        'print_gridlines' => 'bool',
        'print_headings' => 'bool',
        'print_quality' => 'int',
        'print_title_columns' => 'string',
        'print_title_rows' => 'string',
        'right_margin' => 'float',
        'top_margin' => 'float',
        'zoom' => 'int',
        'header' => '\\Aspose\\Cells\\Cloud\\Model\\PageSection[]',
        'footer' => '\\Aspose\\Cells\\Cloud\\Model\\PageSection[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'black_and_white' => null,
        'bottom_margin' => 'float',
        'center_horizontally' => null,
        'center_vertically' => null,
        'first_page_number' => 'int32',
        'fit_to_pages_tall' => 'int32',
        'fit_to_pages_wide' => 'int32',
        'footer_margin' => 'float',
        'header_margin' => 'float',
        'is_auto_first_page_number' => null,
        'is_hf_align_margins' => null,
        'is_hf_diff_first' => null,
        'is_hf_diff_odd_even' => null,
        'is_hf_scale_with_doc' => null,
        'is_percent_scale' => null,
        'left_margin' => 'float',
        'order' => null,
        'orientation' => null,
        'paper_size' => null,
        'print_area' => null,
        'print_comments' => null,
        'print_copies' => 'int32',
        'print_draft' => null,
        'print_errors' => null,
        'print_gridlines' => null,
        'print_headings' => null,
        'print_quality' => 'int32',
        'print_title_columns' => null,
        'print_title_rows' => null,
        'right_margin' => 'float',
        'top_margin' => 'float',
        'zoom' => 'int32',
        'header' => null,
        'footer' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'black_and_white' => 'BlackAndWhite',
        'bottom_margin' => 'BottomMargin',
        'center_horizontally' => 'CenterHorizontally',
        'center_vertically' => 'CenterVertically',
        'first_page_number' => 'FirstPageNumber',
        'fit_to_pages_tall' => 'FitToPagesTall',
        'fit_to_pages_wide' => 'FitToPagesWide',
        'footer_margin' => 'FooterMargin',
        'header_margin' => 'HeaderMargin',
        'is_auto_first_page_number' => 'IsAutoFirstPageNumber',
        'is_hf_align_margins' => 'IsHFAlignMargins',
        'is_hf_diff_first' => 'IsHFDiffFirst',
        'is_hf_diff_odd_even' => 'IsHFDiffOddEven',
        'is_hf_scale_with_doc' => 'IsHFScaleWithDoc',
        'is_percent_scale' => 'IsPercentScale',
        'left_margin' => 'LeftMargin',
        'order' => 'Order',
        'orientation' => 'Orientation',
        'paper_size' => 'PaperSize',
        'print_area' => 'PrintArea',
        'print_comments' => 'PrintComments',
        'print_copies' => 'PrintCopies',
        'print_draft' => 'PrintDraft',
        'print_errors' => 'PrintErrors',
        'print_gridlines' => 'PrintGridlines',
        'print_headings' => 'PrintHeadings',
        'print_quality' => 'PrintQuality',
        'print_title_columns' => 'PrintTitleColumns',
        'print_title_rows' => 'PrintTitleRows',
        'right_margin' => 'RightMargin',
        'top_margin' => 'TopMargin',
        'zoom' => 'Zoom',
        'header' => 'Header',
        'footer' => 'Footer',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'black_and_white' => 'setBlackAndWhite',
        'bottom_margin' => 'setBottomMargin',
        'center_horizontally' => 'setCenterHorizontally',
        'center_vertically' => 'setCenterVertically',
        'first_page_number' => 'setFirstPageNumber',
        'fit_to_pages_tall' => 'setFitToPagesTall',
        'fit_to_pages_wide' => 'setFitToPagesWide',
        'footer_margin' => 'setFooterMargin',
        'header_margin' => 'setHeaderMargin',
        'is_auto_first_page_number' => 'setIsAutoFirstPageNumber',
        'is_hf_align_margins' => 'setIsHfAlignMargins',
        'is_hf_diff_first' => 'setIsHfDiffFirst',
        'is_hf_diff_odd_even' => 'setIsHfDiffOddEven',
        'is_hf_scale_with_doc' => 'setIsHfScaleWithDoc',
        'is_percent_scale' => 'setIsPercentScale',
        'left_margin' => 'setLeftMargin',
        'order' => 'setOrder',
        'orientation' => 'setOrientation',
        'paper_size' => 'setPaperSize',
        'print_area' => 'setPrintArea',
        'print_comments' => 'setPrintComments',
        'print_copies' => 'setPrintCopies',
        'print_draft' => 'setPrintDraft',
        'print_errors' => 'setPrintErrors',
        'print_gridlines' => 'setPrintGridlines',
        'print_headings' => 'setPrintHeadings',
        'print_quality' => 'setPrintQuality',
        'print_title_columns' => 'setPrintTitleColumns',
        'print_title_rows' => 'setPrintTitleRows',
        'right_margin' => 'setRightMargin',
        'top_margin' => 'setTopMargin',
        'zoom' => 'setZoom',
        'header' => 'setHeader',
        'footer' => 'setFooter',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'black_and_white' => 'getBlackAndWhite',
        'bottom_margin' => 'getBottomMargin',
        'center_horizontally' => 'getCenterHorizontally',
        'center_vertically' => 'getCenterVertically',
        'first_page_number' => 'getFirstPageNumber',
        'fit_to_pages_tall' => 'getFitToPagesTall',
        'fit_to_pages_wide' => 'getFitToPagesWide',
        'footer_margin' => 'getFooterMargin',
        'header_margin' => 'getHeaderMargin',
        'is_auto_first_page_number' => 'getIsAutoFirstPageNumber',
        'is_hf_align_margins' => 'getIsHfAlignMargins',
        'is_hf_diff_first' => 'getIsHfDiffFirst',
        'is_hf_diff_odd_even' => 'getIsHfDiffOddEven',
        'is_hf_scale_with_doc' => 'getIsHfScaleWithDoc',
        'is_percent_scale' => 'getIsPercentScale',
        'left_margin' => 'getLeftMargin',
        'order' => 'getOrder',
        'orientation' => 'getOrientation',
        'paper_size' => 'getPaperSize',
        'print_area' => 'getPrintArea',
        'print_comments' => 'getPrintComments',
        'print_copies' => 'getPrintCopies',
        'print_draft' => 'getPrintDraft',
        'print_errors' => 'getPrintErrors',
        'print_gridlines' => 'getPrintGridlines',
        'print_headings' => 'getPrintHeadings',
        'print_quality' => 'getPrintQuality',
        'print_title_columns' => 'getPrintTitleColumns',
        'print_title_rows' => 'getPrintTitleRows',
        'right_margin' => 'getRightMargin',
        'top_margin' => 'getTopMargin',
        'zoom' => 'getZoom',
        'header' => 'getHeader',
        'footer' => 'getFooter',
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
        $this->container['black_and_white'] = isset($data['black_and_white']) ? $data['black_and_white'] : null;
        $this->container['bottom_margin'] = isset($data['bottom_margin']) ? $data['bottom_margin'] : null;
        $this->container['center_horizontally'] = isset($data['center_horizontally']) ? $data['center_horizontally'] : null;
        $this->container['center_vertically'] = isset($data['center_vertically']) ? $data['center_vertically'] : null;
        $this->container['first_page_number'] = isset($data['first_page_number']) ? $data['first_page_number'] : null;
        $this->container['fit_to_pages_tall'] = isset($data['fit_to_pages_tall']) ? $data['fit_to_pages_tall'] : null;
        $this->container['fit_to_pages_wide'] = isset($data['fit_to_pages_wide']) ? $data['fit_to_pages_wide'] : null;
        $this->container['footer_margin'] = isset($data['footer_margin']) ? $data['footer_margin'] : null;
        $this->container['header_margin'] = isset($data['header_margin']) ? $data['header_margin'] : null;
        $this->container['is_auto_first_page_number'] = isset($data['is_auto_first_page_number']) ? $data['is_auto_first_page_number'] : null;
        $this->container['is_hf_align_margins'] = isset($data['is_hf_align_margins']) ? $data['is_hf_align_margins'] : null;
        $this->container['is_hf_diff_first'] = isset($data['is_hf_diff_first']) ? $data['is_hf_diff_first'] : null;
        $this->container['is_hf_diff_odd_even'] = isset($data['is_hf_diff_odd_even']) ? $data['is_hf_diff_odd_even'] : null;
        $this->container['is_hf_scale_with_doc'] = isset($data['is_hf_scale_with_doc']) ? $data['is_hf_scale_with_doc'] : null;
        $this->container['is_percent_scale'] = isset($data['is_percent_scale']) ? $data['is_percent_scale'] : null;
        $this->container['left_margin'] = isset($data['left_margin']) ? $data['left_margin'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['paper_size'] = isset($data['paper_size']) ? $data['paper_size'] : null;
        $this->container['print_area'] = isset($data['print_area']) ? $data['print_area'] : null;
        $this->container['print_comments'] = isset($data['print_comments']) ? $data['print_comments'] : null;
        $this->container['print_copies'] = isset($data['print_copies']) ? $data['print_copies'] : null;
        $this->container['print_draft'] = isset($data['print_draft']) ? $data['print_draft'] : null;
        $this->container['print_errors'] = isset($data['print_errors']) ? $data['print_errors'] : null;
        $this->container['print_gridlines'] = isset($data['print_gridlines']) ? $data['print_gridlines'] : null;
        $this->container['print_headings'] = isset($data['print_headings']) ? $data['print_headings'] : null;
        $this->container['print_quality'] = isset($data['print_quality']) ? $data['print_quality'] : null;
        $this->container['print_title_columns'] = isset($data['print_title_columns']) ? $data['print_title_columns'] : null;
        $this->container['print_title_rows'] = isset($data['print_title_rows']) ? $data['print_title_rows'] : null;
        $this->container['right_margin'] = isset($data['right_margin']) ? $data['right_margin'] : null;
        $this->container['top_margin'] = isset($data['top_margin']) ? $data['top_margin'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
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
     * Gets black_and_white.
     *
     * @return bool|null
     */
    public function getBlackAndWhite()
    {
        return $this->container['black_and_white'];
    }

    /**
     * Sets black_and_white.
     *
     * @param bool|null $black_and_white
     *
     * @return $this
     */
    public function setBlackAndWhite($black_and_white)
    {
        $this->container['black_and_white'] = $black_and_white;
        return $this;
    }

    /**
     * Gets bottom_margin.
     *
     * @return float|null
     */
    public function getBottomMargin()
    {
        return $this->container['bottom_margin'];
    }

    /**
     * Sets bottom_margin.
     *
     * @param float|null $bottom_margin
     *
     * @return $this
     */
    public function setBottomMargin($bottom_margin)
    {
        $this->container['bottom_margin'] = $bottom_margin;
        return $this;
    }

    /**
     * Gets center_horizontally.
     *
     * @return bool|null
     */
    public function getCenterHorizontally()
    {
        return $this->container['center_horizontally'];
    }

    /**
     * Sets center_horizontally.
     *
     * @param bool|null $center_horizontally
     *
     * @return $this
     */
    public function setCenterHorizontally($center_horizontally)
    {
        $this->container['center_horizontally'] = $center_horizontally;
        return $this;
    }

    /**
     * Gets center_vertically.
     *
     * @return bool|null
     */
    public function getCenterVertically()
    {
        return $this->container['center_vertically'];
    }

    /**
     * Sets center_vertically.
     *
     * @param bool|null $center_vertically
     *
     * @return $this
     */
    public function setCenterVertically($center_vertically)
    {
        $this->container['center_vertically'] = $center_vertically;
        return $this;
    }

    /**
     * Gets first_page_number.
     *
     * @return int|null
     */
    public function getFirstPageNumber()
    {
        return $this->container['first_page_number'];
    }

    /**
     * Sets first_page_number.
     *
     * @param int|null $first_page_number
     *
     * @return $this
     */
    public function setFirstPageNumber($first_page_number)
    {
        $this->container['first_page_number'] = $first_page_number;
        return $this;
    }

    /**
     * Gets fit_to_pages_tall.
     *
     * @return int|null
     */
    public function getFitToPagesTall()
    {
        return $this->container['fit_to_pages_tall'];
    }

    /**
     * Sets fit_to_pages_tall.
     *
     * @param int|null $fit_to_pages_tall
     *
     * @return $this
     */
    public function setFitToPagesTall($fit_to_pages_tall)
    {
        $this->container['fit_to_pages_tall'] = $fit_to_pages_tall;
        return $this;
    }

    /**
     * Gets fit_to_pages_wide.
     *
     * @return int|null
     */
    public function getFitToPagesWide()
    {
        return $this->container['fit_to_pages_wide'];
    }

    /**
     * Sets fit_to_pages_wide.
     *
     * @param int|null $fit_to_pages_wide
     *
     * @return $this
     */
    public function setFitToPagesWide($fit_to_pages_wide)
    {
        $this->container['fit_to_pages_wide'] = $fit_to_pages_wide;
        return $this;
    }

    /**
     * Gets footer_margin.
     *
     * @return float|null
     */
    public function getFooterMargin()
    {
        return $this->container['footer_margin'];
    }

    /**
     * Sets footer_margin.
     *
     * @param float|null $footer_margin
     *
     * @return $this
     */
    public function setFooterMargin($footer_margin)
    {
        $this->container['footer_margin'] = $footer_margin;
        return $this;
    }

    /**
     * Gets header_margin.
     *
     * @return float|null
     */
    public function getHeaderMargin()
    {
        return $this->container['header_margin'];
    }

    /**
     * Sets header_margin.
     *
     * @param float|null $header_margin
     *
     * @return $this
     */
    public function setHeaderMargin($header_margin)
    {
        $this->container['header_margin'] = $header_margin;
        return $this;
    }

    /**
     * Gets is_auto_first_page_number.
     *
     * @return bool|null
     */
    public function getIsAutoFirstPageNumber()
    {
        return $this->container['is_auto_first_page_number'];
    }

    /**
     * Sets is_auto_first_page_number.
     *
     * @param bool|null $is_auto_first_page_number
     *
     * @return $this
     */
    public function setIsAutoFirstPageNumber($is_auto_first_page_number)
    {
        $this->container['is_auto_first_page_number'] = $is_auto_first_page_number;
        return $this;
    }

    /**
     * Gets is_hf_align_margins.
     *
     * @return bool|null
     */
    public function getIsHfAlignMargins()
    {
        return $this->container['is_hf_align_margins'];
    }

    /**
     * Sets is_hf_align_margins.
     *
     * @param bool|null $is_hf_align_margins
     *
     * @return $this
     */
    public function setIsHfAlignMargins($is_hf_align_margins)
    {
        $this->container['is_hf_align_margins'] = $is_hf_align_margins;
        return $this;
    }

    /**
     * Gets is_hf_diff_first.
     *
     * @return bool|null
     */
    public function getIsHfDiffFirst()
    {
        return $this->container['is_hf_diff_first'];
    }

    /**
     * Sets is_hf_diff_first.
     *
     * @param bool|null $is_hf_diff_first
     *
     * @return $this
     */
    public function setIsHfDiffFirst($is_hf_diff_first)
    {
        $this->container['is_hf_diff_first'] = $is_hf_diff_first;
        return $this;
    }

    /**
     * Gets is_hf_diff_odd_even.
     *
     * @return bool|null
     */
    public function getIsHfDiffOddEven()
    {
        return $this->container['is_hf_diff_odd_even'];
    }

    /**
     * Sets is_hf_diff_odd_even.
     *
     * @param bool|null $is_hf_diff_odd_even
     *
     * @return $this
     */
    public function setIsHfDiffOddEven($is_hf_diff_odd_even)
    {
        $this->container['is_hf_diff_odd_even'] = $is_hf_diff_odd_even;
        return $this;
    }

    /**
     * Gets is_hf_scale_with_doc.
     *
     * @return bool|null
     */
    public function getIsHfScaleWithDoc()
    {
        return $this->container['is_hf_scale_with_doc'];
    }

    /**
     * Sets is_hf_scale_with_doc.
     *
     * @param bool|null $is_hf_scale_with_doc
     *
     * @return $this
     */
    public function setIsHfScaleWithDoc($is_hf_scale_with_doc)
    {
        $this->container['is_hf_scale_with_doc'] = $is_hf_scale_with_doc;
        return $this;
    }

    /**
     * Gets is_percent_scale.
     *
     * @return bool|null
     */
    public function getIsPercentScale()
    {
        return $this->container['is_percent_scale'];
    }

    /**
     * Sets is_percent_scale.
     *
     * @param bool|null $is_percent_scale
     *
     * @return $this
     */
    public function setIsPercentScale($is_percent_scale)
    {
        $this->container['is_percent_scale'] = $is_percent_scale;
        return $this;
    }

    /**
     * Gets left_margin.
     *
     * @return float|null
     */
    public function getLeftMargin()
    {
        return $this->container['left_margin'];
    }

    /**
     * Sets left_margin.
     *
     * @param float|null $left_margin
     *
     * @return $this
     */
    public function setLeftMargin($left_margin)
    {
        $this->container['left_margin'] = $left_margin;
        return $this;
    }

    /**
     * Gets order.
     *
     * @return string|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order.
     *
     * @param string|null $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
     * Gets orientation.
     *
     * @return string|null
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation.
     *
     * @param string|null $orientation
     *
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->container['orientation'] = $orientation;
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
     * Gets print_area.
     *
     * @return string|null
     */
    public function getPrintArea()
    {
        return $this->container['print_area'];
    }

    /**
     * Sets print_area.
     *
     * @param string|null $print_area
     *
     * @return $this
     */
    public function setPrintArea($print_area)
    {
        $this->container['print_area'] = $print_area;
        return $this;
    }

    /**
     * Gets print_comments.
     *
     * @return string|null
     */
    public function getPrintComments()
    {
        return $this->container['print_comments'];
    }

    /**
     * Sets print_comments.
     *
     * @param string|null $print_comments
     *
     * @return $this
     */
    public function setPrintComments($print_comments)
    {
        $this->container['print_comments'] = $print_comments;
        return $this;
    }

    /**
     * Gets print_copies.
     *
     * @return int|null
     */
    public function getPrintCopies()
    {
        return $this->container['print_copies'];
    }

    /**
     * Sets print_copies.
     *
     * @param int|null $print_copies
     *
     * @return $this
     */
    public function setPrintCopies($print_copies)
    {
        $this->container['print_copies'] = $print_copies;
        return $this;
    }

    /**
     * Gets print_draft.
     *
     * @return bool|null
     */
    public function getPrintDraft()
    {
        return $this->container['print_draft'];
    }

    /**
     * Sets print_draft.
     *
     * @param bool|null $print_draft
     *
     * @return $this
     */
    public function setPrintDraft($print_draft)
    {
        $this->container['print_draft'] = $print_draft;
        return $this;
    }

    /**
     * Gets print_errors.
     *
     * @return string|null
     */
    public function getPrintErrors()
    {
        return $this->container['print_errors'];
    }

    /**
     * Sets print_errors.
     *
     * @param string|null $print_errors
     *
     * @return $this
     */
    public function setPrintErrors($print_errors)
    {
        $this->container['print_errors'] = $print_errors;
        return $this;
    }

    /**
     * Gets print_gridlines.
     *
     * @return bool|null
     */
    public function getPrintGridlines()
    {
        return $this->container['print_gridlines'];
    }

    /**
     * Sets print_gridlines.
     *
     * @param bool|null $print_gridlines
     *
     * @return $this
     */
    public function setPrintGridlines($print_gridlines)
    {
        $this->container['print_gridlines'] = $print_gridlines;
        return $this;
    }

    /**
     * Gets print_headings.
     *
     * @return bool|null
     */
    public function getPrintHeadings()
    {
        return $this->container['print_headings'];
    }

    /**
     * Sets print_headings.
     *
     * @param bool|null $print_headings
     *
     * @return $this
     */
    public function setPrintHeadings($print_headings)
    {
        $this->container['print_headings'] = $print_headings;
        return $this;
    }

    /**
     * Gets print_quality.
     *
     * @return int|null
     */
    public function getPrintQuality()
    {
        return $this->container['print_quality'];
    }

    /**
     * Sets print_quality.
     *
     * @param int|null $print_quality
     *
     * @return $this
     */
    public function setPrintQuality($print_quality)
    {
        $this->container['print_quality'] = $print_quality;
        return $this;
    }

    /**
     * Gets print_title_columns.
     *
     * @return string|null
     */
    public function getPrintTitleColumns()
    {
        return $this->container['print_title_columns'];
    }

    /**
     * Sets print_title_columns.
     *
     * @param string|null $print_title_columns
     *
     * @return $this
     */
    public function setPrintTitleColumns($print_title_columns)
    {
        $this->container['print_title_columns'] = $print_title_columns;
        return $this;
    }

    /**
     * Gets print_title_rows.
     *
     * @return string|null
     */
    public function getPrintTitleRows()
    {
        return $this->container['print_title_rows'];
    }

    /**
     * Sets print_title_rows.
     *
     * @param string|null $print_title_rows
     *
     * @return $this
     */
    public function setPrintTitleRows($print_title_rows)
    {
        $this->container['print_title_rows'] = $print_title_rows;
        return $this;
    }

    /**
     * Gets right_margin.
     *
     * @return float|null
     */
    public function getRightMargin()
    {
        return $this->container['right_margin'];
    }

    /**
     * Sets right_margin.
     *
     * @param float|null $right_margin
     *
     * @return $this
     */
    public function setRightMargin($right_margin)
    {
        $this->container['right_margin'] = $right_margin;
        return $this;
    }

    /**
     * Gets top_margin.
     *
     * @return float|null
     */
    public function getTopMargin()
    {
        return $this->container['top_margin'];
    }

    /**
     * Sets top_margin.
     *
     * @param float|null $top_margin
     *
     * @return $this
     */
    public function setTopMargin($top_margin)
    {
        $this->container['top_margin'] = $top_margin;
        return $this;
    }

    /**
     * Gets zoom.
     *
     * @return int|null
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /**
     * Sets zoom.
     *
     * @param int|null $zoom
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;
        return $this;
    }

    /**
     * Gets header.
     *
     * @return \Aspose\Cells\Cloud\Model\PageSection[]|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header.
     *
     * @param \Aspose\Cells\Cloud\Model\PageSection[]|null $header
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;
        return $this;
    }

    /**
     * Gets footer.
     *
     * @return \Aspose\Cells\Cloud\Model\PageSection[]|null
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer.
     *
     * @param \Aspose\Cells\Cloud\Model\PageSection[]|null $footer
     *
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;
        return $this;
    }
}
