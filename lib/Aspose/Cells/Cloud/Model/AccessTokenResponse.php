<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AccessTokenResponse.php">
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

class AccessTokenResponse
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessTokenResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_token' => 'string',
        'token_type' => 'string',
        'expires_in' => 'int',
        'refresh_token' => 'string',
        'client_id' => 'string',
        'client_refresh_token_life_time_in_minutes' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_token' => null,
        'token_type' => null,
        'expires_in' => 'int32',
        'refresh_token' => null,
        'client_id' => null,
        'client_refresh_token_life_time_in_minutes' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'access_token' => 'access_token',
        'token_type' => 'token_type',
        'expires_in' => 'expires_in',
        'refresh_token' => 'refresh_token',
        'client_id' => 'client_id',
        'client_refresh_token_life_time_in_minutes' => 'clientRefreshTokenLifeTimeInMinutes',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'access_token' => 'setAccessToken',
        'token_type' => 'setTokenType',
        'expires_in' => 'setExpiresIn',
        'refresh_token' => 'setRefreshToken',
        'client_id' => 'setClientId',
        'client_refresh_token_life_time_in_minutes' => 'setClientRefreshTokenLifeTimeInMinutes',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'access_token' => 'getAccessToken',
        'token_type' => 'getTokenType',
        'expires_in' => 'getExpiresIn',
        'refresh_token' => 'getRefreshToken',
        'client_id' => 'getClientId',
        'client_refresh_token_life_time_in_minutes' => 'getClientRefreshTokenLifeTimeInMinutes',
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
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['client_refresh_token_life_time_in_minutes'] = isset($data['client_refresh_token_life_time_in_minutes']) ? $data['client_refresh_token_life_time_in_minutes'] : null;
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
     * Gets access_token.
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token.
     *
     * @param string|null $access_token
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;
        return $this;
    }

    /**
     * Gets token_type.
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type.
     *
     * @param string|null $token_type
     *
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;
        return $this;
    }

    /**
     * Gets expires_in.
     *
     * @return int|null
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in.
     *
     * @param int|null $expires_in
     *
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;
        return $this;
    }

    /**
     * Gets refresh_token.
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token.
     *
     * @param string|null $refresh_token
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->container['refresh_token'] = $refresh_token;
        return $this;
    }

    /**
     * Gets client_id.
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id.
     *
     * @param string|null $client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;
        return $this;
    }

    /**
     * Gets client_refresh_token_life_time_in_minutes.
     *
     * @return string|null
     */
    public function getClientRefreshTokenLifeTimeInMinutes()
    {
        return $this->container['client_refresh_token_life_time_in_minutes'];
    }

    /**
     * Sets client_refresh_token_life_time_in_minutes.
     *
     * @param string|null $client_refresh_token_life_time_in_minutes
     *
     * @return $this
     */
    public function setClientRefreshTokenLifeTimeInMinutes($client_refresh_token_life_time_in_minutes)
    {
        $this->container['client_refresh_token_life_time_in_minutes'] = $client_refresh_token_life_time_in_minutes;
        return $this;
    }
}
