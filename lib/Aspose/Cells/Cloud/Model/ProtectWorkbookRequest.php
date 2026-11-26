<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ProtectWorkbookRequest.php">
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

class ProtectWorkbookRequest
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProtectWorkbookRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aways_open_read_only' => 'bool',
        'encrypt_with_password' => 'string',
        'protect_current_sheet' => '\\Aspose\\Cells\\Cloud\\Model\\Protection',
        'protect_all_sheets' => '\\Aspose\\Cells\\Cloud\\Model\\Protection',
        'protect_workbook_structure' => 'string',
        'digital_signature' => '\\Aspose\\Cells\\Cloud\\Model\\DigitalSignature',
        'mark_as_final' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aways_open_read_only' => null,
        'encrypt_with_password' => null,
        'protect_current_sheet' => null,
        'protect_all_sheets' => null,
        'protect_workbook_structure' => null,
        'digital_signature' => null,
        'mark_as_final' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'aways_open_read_only' => 'AwaysOpenReadOnly',
        'encrypt_with_password' => 'EncryptWithPassword',
        'protect_current_sheet' => 'ProtectCurrentSheet',
        'protect_all_sheets' => 'ProtectAllSheets',
        'protect_workbook_structure' => 'ProtectWorkbookStructure',
        'digital_signature' => 'DigitalSignature',
        'mark_as_final' => 'MarkAsFinal',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'aways_open_read_only' => 'setAwaysOpenReadOnly',
        'encrypt_with_password' => 'setEncryptWithPassword',
        'protect_current_sheet' => 'setProtectCurrentSheet',
        'protect_all_sheets' => 'setProtectAllSheets',
        'protect_workbook_structure' => 'setProtectWorkbookStructure',
        'digital_signature' => 'setDigitalSignature',
        'mark_as_final' => 'setMarkAsFinal',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'aways_open_read_only' => 'getAwaysOpenReadOnly',
        'encrypt_with_password' => 'getEncryptWithPassword',
        'protect_current_sheet' => 'getProtectCurrentSheet',
        'protect_all_sheets' => 'getProtectAllSheets',
        'protect_workbook_structure' => 'getProtectWorkbookStructure',
        'digital_signature' => 'getDigitalSignature',
        'mark_as_final' => 'getMarkAsFinal',
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
        $this->container['aways_open_read_only'] = isset($data['aways_open_read_only']) ? $data['aways_open_read_only'] : null;
        $this->container['encrypt_with_password'] = isset($data['encrypt_with_password']) ? $data['encrypt_with_password'] : null;
        $this->container['protect_current_sheet'] = isset($data['protect_current_sheet']) ? $data['protect_current_sheet'] : null;
        $this->container['protect_all_sheets'] = isset($data['protect_all_sheets']) ? $data['protect_all_sheets'] : null;
        $this->container['protect_workbook_structure'] = isset($data['protect_workbook_structure']) ? $data['protect_workbook_structure'] : null;
        $this->container['digital_signature'] = isset($data['digital_signature']) ? $data['digital_signature'] : null;
        $this->container['mark_as_final'] = isset($data['mark_as_final']) ? $data['mark_as_final'] : null;
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
     * Gets aways_open_read_only.
     *
     * @return bool|null
     */
    public function getAwaysOpenReadOnly()
    {
        return $this->container['aways_open_read_only'];
    }

    /**
     * Sets aways_open_read_only.
     *
     * @param bool|null $aways_open_read_only
     *
     * @return $this
     */
    public function setAwaysOpenReadOnly($aways_open_read_only)
    {
        $this->container['aways_open_read_only'] = $aways_open_read_only;
        return $this;
    }

    /**
     * Gets encrypt_with_password.
     *
     * @return string|null
     */
    public function getEncryptWithPassword()
    {
        return $this->container['encrypt_with_password'];
    }

    /**
     * Sets encrypt_with_password.
     *
     * @param string|null $encrypt_with_password
     *
     * @return $this
     */
    public function setEncryptWithPassword($encrypt_with_password)
    {
        $this->container['encrypt_with_password'] = $encrypt_with_password;
        return $this;
    }

    /**
     * Gets protect_current_sheet.
     *
     * @return \Aspose\Cells\Cloud\Model\Protection|null
     */
    public function getProtectCurrentSheet()
    {
        return $this->container['protect_current_sheet'];
    }

    /**
     * Sets protect_current_sheet.
     *
     * @param \Aspose\Cells\Cloud\Model\Protection|null $protect_current_sheet
     *
     * @return $this
     */
    public function setProtectCurrentSheet($protect_current_sheet)
    {
        $this->container['protect_current_sheet'] = $protect_current_sheet;
        return $this;
    }

    /**
     * Gets protect_all_sheets.
     *
     * @return \Aspose\Cells\Cloud\Model\Protection|null
     */
    public function getProtectAllSheets()
    {
        return $this->container['protect_all_sheets'];
    }

    /**
     * Sets protect_all_sheets.
     *
     * @param \Aspose\Cells\Cloud\Model\Protection|null $protect_all_sheets
     *
     * @return $this
     */
    public function setProtectAllSheets($protect_all_sheets)
    {
        $this->container['protect_all_sheets'] = $protect_all_sheets;
        return $this;
    }

    /**
     * Gets protect_workbook_structure.
     *
     * @return string|null
     */
    public function getProtectWorkbookStructure()
    {
        return $this->container['protect_workbook_structure'];
    }

    /**
     * Sets protect_workbook_structure.
     *
     * @param string|null $protect_workbook_structure
     *
     * @return $this
     */
    public function setProtectWorkbookStructure($protect_workbook_structure)
    {
        $this->container['protect_workbook_structure'] = $protect_workbook_structure;
        return $this;
    }

    /**
     * Gets digital_signature.
     *
     * @return \Aspose\Cells\Cloud\Model\DigitalSignature|null
     */
    public function getDigitalSignature()
    {
        return $this->container['digital_signature'];
    }

    /**
     * Sets digital_signature.
     *
     * @param \Aspose\Cells\Cloud\Model\DigitalSignature|null $digital_signature
     *
     * @return $this
     */
    public function setDigitalSignature($digital_signature)
    {
        $this->container['digital_signature'] = $digital_signature;
        return $this;
    }

    /**
     * Gets mark_as_final.
     *
     * @return bool|null
     */
    public function getMarkAsFinal()
    {
        return $this->container['mark_as_final'];
    }

    /**
     * Sets mark_as_final.
     *
     * @param bool|null $mark_as_final
     *
     * @return $this
     */
    public function setMarkAsFinal($mark_as_final)
    {
        $this->container['mark_as_final'] = $mark_as_final;
        return $this;
    }
}
