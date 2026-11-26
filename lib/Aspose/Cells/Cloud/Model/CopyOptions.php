<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CopyOptions.php">
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

class CopyOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CopyOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'column_character_width' => 'bool',
        'copy_invalid_formulas_as_values' => 'bool',
        'copy_names' => 'bool',
        'extend_to_adjacent_range' => 'bool',
        'refer_to_destination_sheet' => 'bool',
        'refer_to_sheet_with_same_name' => 'bool',
        'copy_theme' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'column_character_width' => null,
        'copy_invalid_formulas_as_values' => null,
        'copy_names' => null,
        'extend_to_adjacent_range' => null,
        'refer_to_destination_sheet' => null,
        'refer_to_sheet_with_same_name' => null,
        'copy_theme' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'column_character_width' => 'ColumnCharacterWidth',
        'copy_invalid_formulas_as_values' => 'CopyInvalidFormulasAsValues',
        'copy_names' => 'CopyNames',
        'extend_to_adjacent_range' => 'ExtendToAdjacentRange',
        'refer_to_destination_sheet' => 'ReferToDestinationSheet',
        'refer_to_sheet_with_same_name' => 'ReferToSheetWithSameName',
        'copy_theme' => 'CopyTheme',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'column_character_width' => 'setColumnCharacterWidth',
        'copy_invalid_formulas_as_values' => 'setCopyInvalidFormulasAsValues',
        'copy_names' => 'setCopyNames',
        'extend_to_adjacent_range' => 'setExtendToAdjacentRange',
        'refer_to_destination_sheet' => 'setReferToDestinationSheet',
        'refer_to_sheet_with_same_name' => 'setReferToSheetWithSameName',
        'copy_theme' => 'setCopyTheme',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'column_character_width' => 'getColumnCharacterWidth',
        'copy_invalid_formulas_as_values' => 'getCopyInvalidFormulasAsValues',
        'copy_names' => 'getCopyNames',
        'extend_to_adjacent_range' => 'getExtendToAdjacentRange',
        'refer_to_destination_sheet' => 'getReferToDestinationSheet',
        'refer_to_sheet_with_same_name' => 'getReferToSheetWithSameName',
        'copy_theme' => 'getCopyTheme',
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
        $this->container['column_character_width'] = isset($data['column_character_width']) ? $data['column_character_width'] : null;
        $this->container['copy_invalid_formulas_as_values'] = isset($data['copy_invalid_formulas_as_values']) ? $data['copy_invalid_formulas_as_values'] : null;
        $this->container['copy_names'] = isset($data['copy_names']) ? $data['copy_names'] : null;
        $this->container['extend_to_adjacent_range'] = isset($data['extend_to_adjacent_range']) ? $data['extend_to_adjacent_range'] : null;
        $this->container['refer_to_destination_sheet'] = isset($data['refer_to_destination_sheet']) ? $data['refer_to_destination_sheet'] : null;
        $this->container['refer_to_sheet_with_same_name'] = isset($data['refer_to_sheet_with_same_name']) ? $data['refer_to_sheet_with_same_name'] : null;
        $this->container['copy_theme'] = isset($data['copy_theme']) ? $data['copy_theme'] : null;
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
     * Gets column_character_width.
     *
     * @return bool|null
     */
    public function getColumnCharacterWidth()
    {
        return $this->container['column_character_width'];
    }

    /**
     * Sets column_character_width.
     *
     * @param bool|null $column_character_width
     *
     * @return $this
     */
    public function setColumnCharacterWidth($column_character_width)
    {
        $this->container['column_character_width'] = $column_character_width;
        return $this;
    }

    /**
     * Gets copy_invalid_formulas_as_values.
     *
     * @return bool|null
     */
    public function getCopyInvalidFormulasAsValues()
    {
        return $this->container['copy_invalid_formulas_as_values'];
    }

    /**
     * Sets copy_invalid_formulas_as_values.
     *
     * @param bool|null $copy_invalid_formulas_as_values
     *
     * @return $this
     */
    public function setCopyInvalidFormulasAsValues($copy_invalid_formulas_as_values)
    {
        $this->container['copy_invalid_formulas_as_values'] = $copy_invalid_formulas_as_values;
        return $this;
    }

    /**
     * Gets copy_names.
     *
     * @return bool|null
     */
    public function getCopyNames()
    {
        return $this->container['copy_names'];
    }

    /**
     * Sets copy_names.
     *
     * @param bool|null $copy_names
     *
     * @return $this
     */
    public function setCopyNames($copy_names)
    {
        $this->container['copy_names'] = $copy_names;
        return $this;
    }

    /**
     * Gets extend_to_adjacent_range.
     *
     * @return bool|null
     */
    public function getExtendToAdjacentRange()
    {
        return $this->container['extend_to_adjacent_range'];
    }

    /**
     * Sets extend_to_adjacent_range.
     *
     * @param bool|null $extend_to_adjacent_range
     *
     * @return $this
     */
    public function setExtendToAdjacentRange($extend_to_adjacent_range)
    {
        $this->container['extend_to_adjacent_range'] = $extend_to_adjacent_range;
        return $this;
    }

    /**
     * Gets refer_to_destination_sheet.
     *
     * @return bool|null
     */
    public function getReferToDestinationSheet()
    {
        return $this->container['refer_to_destination_sheet'];
    }

    /**
     * Sets refer_to_destination_sheet.
     *
     * @param bool|null $refer_to_destination_sheet
     *
     * @return $this
     */
    public function setReferToDestinationSheet($refer_to_destination_sheet)
    {
        $this->container['refer_to_destination_sheet'] = $refer_to_destination_sheet;
        return $this;
    }

    /**
     * Gets refer_to_sheet_with_same_name.
     *
     * @return bool|null
     */
    public function getReferToSheetWithSameName()
    {
        return $this->container['refer_to_sheet_with_same_name'];
    }

    /**
     * Sets refer_to_sheet_with_same_name.
     *
     * @param bool|null $refer_to_sheet_with_same_name
     *
     * @return $this
     */
    public function setReferToSheetWithSameName($refer_to_sheet_with_same_name)
    {
        $this->container['refer_to_sheet_with_same_name'] = $refer_to_sheet_with_same_name;
        return $this;
    }

    /**
     * Gets copy_theme.
     *
     * @return bool|null
     */
    public function getCopyTheme()
    {
        return $this->container['copy_theme'];
    }

    /**
     * Sets copy_theme.
     *
     * @param bool|null $copy_theme
     *
     * @return $this
     */
    public function setCopyTheme($copy_theme)
    {
        $this->container['copy_theme'] = $copy_theme;
        return $this;
    }
}
