<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WriteProtection.php">
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

class WriteProtection
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WriteProtection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'author' => 'string',
        'recommend_read_only' => 'bool',
        'is_write_protected' => 'bool',
        'password' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'author' => null,
        'recommend_read_only' => null,
        'is_write_protected' => null,
        'password' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'author' => 'Author',
        'recommend_read_only' => 'RecommendReadOnly',
        'is_write_protected' => 'IsWriteProtected',
        'password' => 'Password',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'author' => 'setAuthor',
        'recommend_read_only' => 'setRecommendReadOnly',
        'is_write_protected' => 'setIsWriteProtected',
        'password' => 'setPassword',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'author' => 'getAuthor',
        'recommend_read_only' => 'getRecommendReadOnly',
        'is_write_protected' => 'getIsWriteProtected',
        'password' => 'getPassword',
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['recommend_read_only'] = isset($data['recommend_read_only']) ? $data['recommend_read_only'] : null;
        $this->container['is_write_protected'] = isset($data['is_write_protected']) ? $data['is_write_protected'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
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
     * Gets author.
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author.
     *
     * @param string|null $author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
     * Gets recommend_read_only.
     *
     * @return bool|null
     */
    public function getRecommendReadOnly()
    {
        return $this->container['recommend_read_only'];
    }

    /**
     * Sets recommend_read_only.
     *
     * @param bool|null $recommend_read_only
     *
     * @return $this
     */
    public function setRecommendReadOnly($recommend_read_only)
    {
        $this->container['recommend_read_only'] = $recommend_read_only;
        return $this;
    }

    /**
     * Gets is_write_protected.
     *
     * @return bool|null
     */
    public function getIsWriteProtected()
    {
        return $this->container['is_write_protected'];
    }

    /**
     * Sets is_write_protected.
     *
     * @param bool|null $is_write_protected
     *
     * @return $this
     */
    public function setIsWriteProtected($is_write_protected)
    {
        $this->container['is_write_protected'] = $is_write_protected;
        return $this;
    }

    /**
     * Gets password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password.
     *
     * @param string|null $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }
}
