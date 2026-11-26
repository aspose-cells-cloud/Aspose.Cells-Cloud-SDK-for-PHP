<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PasteOptions.php">
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

class PasteOptions
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PasteOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'only_visible_cells' => 'bool',
        'paste_type' => 'string',
        'skip_blanks' => 'bool',
        'transpose' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'only_visible_cells' => null,
        'paste_type' => null,
        'skip_blanks' => null,
        'transpose' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'only_visible_cells' => 'OnlyVisibleCells',
        'paste_type' => 'PasteType',
        'skip_blanks' => 'SkipBlanks',
        'transpose' => 'Transpose',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'only_visible_cells' => 'setOnlyVisibleCells',
        'paste_type' => 'setPasteType',
        'skip_blanks' => 'setSkipBlanks',
        'transpose' => 'setTranspose',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'only_visible_cells' => 'getOnlyVisibleCells',
        'paste_type' => 'getPasteType',
        'skip_blanks' => 'getSkipBlanks',
        'transpose' => 'getTranspose',
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
        $this->container['only_visible_cells'] = isset($data['only_visible_cells']) ? $data['only_visible_cells'] : null;
        $this->container['paste_type'] = isset($data['paste_type']) ? $data['paste_type'] : null;
        $this->container['skip_blanks'] = isset($data['skip_blanks']) ? $data['skip_blanks'] : null;
        $this->container['transpose'] = isset($data['transpose']) ? $data['transpose'] : null;
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
     * Gets only_visible_cells.
     *
     * @return bool|null
     */
    public function getOnlyVisibleCells()
    {
        return $this->container['only_visible_cells'];
    }

    /**
     * Sets only_visible_cells.
     *
     * @param bool|null $only_visible_cells
     *
     * @return $this
     */
    public function setOnlyVisibleCells($only_visible_cells)
    {
        $this->container['only_visible_cells'] = $only_visible_cells;
        return $this;
    }

    /**
     * Gets paste_type.
     *
     * @return string|null
     */
    public function getPasteType()
    {
        return $this->container['paste_type'];
    }

    /**
     * Sets paste_type.
     *
     * @param string|null $paste_type
     *
     * @return $this
     */
    public function setPasteType($paste_type)
    {
        $this->container['paste_type'] = $paste_type;
        return $this;
    }

    /**
     * Gets skip_blanks.
     *
     * @return bool|null
     */
    public function getSkipBlanks()
    {
        return $this->container['skip_blanks'];
    }

    /**
     * Sets skip_blanks.
     *
     * @param bool|null $skip_blanks
     *
     * @return $this
     */
    public function setSkipBlanks($skip_blanks)
    {
        $this->container['skip_blanks'] = $skip_blanks;
        return $this;
    }

    /**
     * Gets transpose.
     *
     * @return bool|null
     */
    public function getTranspose()
    {
        return $this->container['transpose'];
    }

    /**
     * Sets transpose.
     *
     * @param bool|null $transpose
     *
     * @return $this
     */
    public function setTranspose($transpose)
    {
        $this->container['transpose'] = $transpose;
        return $this;
    }
}
