<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RemoveCharactersByPosition.php">
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

class RemoveCharactersByPosition
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RemoveCharactersByPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'the_first_n_characters' => 'int',
        'the_last_n_characters' => 'int',
        'all_characters_before_text' => 'string',
        'all_characters_after_text' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'the_first_n_characters' => 'int32',
        'the_last_n_characters' => 'int32',
        'all_characters_before_text' => null,
        'all_characters_after_text' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'the_first_n_characters' => 'TheFirstNCharacters',
        'the_last_n_characters' => 'TheLastNCharacters',
        'all_characters_before_text' => 'AllCharactersBeforeText',
        'all_characters_after_text' => 'AllCharactersAfterText',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'the_first_n_characters' => 'setTheFirstNCharacters',
        'the_last_n_characters' => 'setTheLastNCharacters',
        'all_characters_before_text' => 'setAllCharactersBeforeText',
        'all_characters_after_text' => 'setAllCharactersAfterText',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'the_first_n_characters' => 'getTheFirstNCharacters',
        'the_last_n_characters' => 'getTheLastNCharacters',
        'all_characters_before_text' => 'getAllCharactersBeforeText',
        'all_characters_after_text' => 'getAllCharactersAfterText',
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
        $this->container['the_first_n_characters'] = isset($data['the_first_n_characters']) ? $data['the_first_n_characters'] : null;
        $this->container['the_last_n_characters'] = isset($data['the_last_n_characters']) ? $data['the_last_n_characters'] : null;
        $this->container['all_characters_before_text'] = isset($data['all_characters_before_text']) ? $data['all_characters_before_text'] : null;
        $this->container['all_characters_after_text'] = isset($data['all_characters_after_text']) ? $data['all_characters_after_text'] : null;
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
     * Gets the_first_n_characters.
     *
     * @return int|null
     */
    public function getTheFirstNCharacters()
    {
        return $this->container['the_first_n_characters'];
    }

    /**
     * Sets the_first_n_characters.
     *
     * @param int|null $the_first_n_characters
     *
     * @return $this
     */
    public function setTheFirstNCharacters($the_first_n_characters)
    {
        $this->container['the_first_n_characters'] = $the_first_n_characters;
        return $this;
    }

    /**
     * Gets the_last_n_characters.
     *
     * @return int|null
     */
    public function getTheLastNCharacters()
    {
        return $this->container['the_last_n_characters'];
    }

    /**
     * Sets the_last_n_characters.
     *
     * @param int|null $the_last_n_characters
     *
     * @return $this
     */
    public function setTheLastNCharacters($the_last_n_characters)
    {
        $this->container['the_last_n_characters'] = $the_last_n_characters;
        return $this;
    }

    /**
     * Gets all_characters_before_text.
     *
     * @return string|null
     */
    public function getAllCharactersBeforeText()
    {
        return $this->container['all_characters_before_text'];
    }

    /**
     * Sets all_characters_before_text.
     *
     * @param string|null $all_characters_before_text
     *
     * @return $this
     */
    public function setAllCharactersBeforeText($all_characters_before_text)
    {
        $this->container['all_characters_before_text'] = $all_characters_before_text;
        return $this;
    }

    /**
     * Gets all_characters_after_text.
     *
     * @return string|null
     */
    public function getAllCharactersAfterText()
    {
        return $this->container['all_characters_after_text'];
    }

    /**
     * Sets all_characters_after_text.
     *
     * @param string|null $all_characters_after_text
     *
     * @return $this
     */
    public function setAllCharactersAfterText($all_characters_after_text)
    {
        $this->container['all_characters_after_text'] = $all_characters_after_text;
        return $this;
    }
}
