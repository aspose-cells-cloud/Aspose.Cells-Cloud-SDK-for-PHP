<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RemoveCharactersByCharacter.php">
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

class RemoveCharactersByCharacter
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RemoveCharactersByCharacter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'remove_text_method' => 'string',
        'remove_characters' => 'string[]',
        'remove_character_sets_type' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'remove_text_method' => null,
        'remove_characters' => null,
        'remove_character_sets_type' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'remove_text_method' => 'RemoveTextMethod',
        'remove_characters' => 'RemoveCharacters',
        'remove_character_sets_type' => 'RemoveCharacterSetsType',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'remove_text_method' => 'setRemoveTextMethod',
        'remove_characters' => 'setRemoveCharacters',
        'remove_character_sets_type' => 'setRemoveCharacterSetsType',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'remove_text_method' => 'getRemoveTextMethod',
        'remove_characters' => 'getRemoveCharacters',
        'remove_character_sets_type' => 'getRemoveCharacterSetsType',
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
        $this->container['remove_text_method'] = isset($data['remove_text_method']) ? $data['remove_text_method'] : null;
        $this->container['remove_characters'] = isset($data['remove_characters']) ? $data['remove_characters'] : null;
        $this->container['remove_character_sets_type'] = isset($data['remove_character_sets_type']) ? $data['remove_character_sets_type'] : null;
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
     * Gets remove_text_method.
     *
     * @return string|null
     */
    public function getRemoveTextMethod()
    {
        return $this->container['remove_text_method'];
    }

    /**
     * Sets remove_text_method.
     *
     * @param string|null $remove_text_method
     *
     * @return $this
     */
    public function setRemoveTextMethod($remove_text_method)
    {
        $this->container['remove_text_method'] = $remove_text_method;
        return $this;
    }

    /**
     * Gets remove_characters.
     *
     * @return string[]|null
     */
    public function getRemoveCharacters()
    {
        return $this->container['remove_characters'];
    }

    /**
     * Sets remove_characters.
     *
     * @param string[]|null $remove_characters
     *
     * @return $this
     */
    public function setRemoveCharacters($remove_characters)
    {
        $this->container['remove_characters'] = $remove_characters;
        return $this;
    }

    /**
     * Gets remove_character_sets_type.
     *
     * @return string|null
     */
    public function getRemoveCharacterSetsType()
    {
        return $this->container['remove_character_sets_type'];
    }

    /**
     * Sets remove_character_sets_type.
     *
     * @param string|null $remove_character_sets_type
     *
     * @return $this
     */
    public function setRemoveCharacterSetsType($remove_character_sets_type)
    {
        $this->container['remove_character_sets_type'] = $remove_character_sets_type;
        return $this;
    }
}
