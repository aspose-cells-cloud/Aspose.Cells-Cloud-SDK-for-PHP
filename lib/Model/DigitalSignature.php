<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DigitalSignature.cs">
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

class DigitalSignature
{
     const DISCRIMINATOR = null;
    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DigitalSignature';     

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comments' => 'string',
        'sign_time' => 'string',
        'id' => 'string',
        'password' => 'string',
        'image' => '[]',
        'provider_id' => 'string',
        'is_valid' => 'bool',
        'x_ad_es_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comments' => null  ,
        'sign_time' => null  ,
        'id' => null  ,
        'password' => null  ,
        'image' => null  ,
        'provider_id' => null  ,
        'is_valid' => null  ,
        'x_ad_es_type' => null  
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
         'comments' => 'Comments' ,
         'sign_time' => 'SignTime' ,
         'id' => 'Id' ,
         'password' => 'Password' ,
         'image' => 'Image' ,
         'provider_id' => 'ProviderId' ,
         'is_valid' => 'IsValid' ,
         'x_ad_es_type' => 'XAdESType' 
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comments' => 'setComments' ,
        'sign_time' => 'setSignTime' ,
        'id' => 'setId' ,
        'password' => 'setPassword' ,
        'image' => 'setImage' ,
        'provider_id' => 'setProviderId' ,
        'is_valid' => 'setIsValid' ,
        'x_ad_es_type' => 'setXAdESType' 
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comments' => 'getComments' ,
        'sign_time' => 'getSignTime' ,
        'id' => 'getId' ,
        'password' => 'getPassword' ,
        'image' => 'getImage' ,
        'provider_id' => 'getProviderId' ,
        'is_valid' => 'getIsValid' ,
        'x_ad_es_type' => 'getXAdESType' 
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
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
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['sign_time'] = isset($data['sign_time']) ? $data['sign_time'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['is_valid'] = isset($data['is_valid']) ? $data['is_valid'] : null;
        $this->container['x_ad_es_type'] = isset($data['x_ad_es_type']) ? $data['x_ad_es_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['comments'] === null) {
            $invalidProperties[] = "'comments' can't be null";
        }
        if ($this->container['sign_time'] === null) {
            $invalidProperties[] = "'sign_time' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalidProperties[] = "'image' can't be null";
        }
        if ($this->container['provider_id'] === null) {
            $invalidProperties[] = "'provider_id' can't be null";
        }
        if ($this->container['is_valid'] === null) {
            $invalidProperties[] = "'is_valid' can't be null";
        }
        if ($this->container['x_ad_es_type'] === null) {
            $invalidProperties[] = "'x_ad_es_type' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if ($this->container['comments'] === null) {
                    return false;
                }
        if ($this->container['sign_time'] === null) {
                    return false;
                }
        if ($this->container['id'] === null) {
                    return false;
                }
        if ($this->container['password'] === null) {
                    return false;
                }
        if ($this->container['image'] === null) {
                    return false;
                }
        if ($this->container['provider_id'] === null) {
                    return false;
                }
        if ($this->container['is_valid'] === null) {
                    return false;
                }
        if ($this->container['x_ad_es_type'] === null) {
                    return false;
                }
        return true;
    }
   /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     *  The purpose to signature.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }
   /**
     * Gets sign_time
     *
     * @return string
     */
    public function getSignTime()
    {
        return $this->container['sign_time'];
    }

    /**
     * Sets sign_time
     *
     *  The time when the document was signed.
     *
     * @return $this
     */
    public function setSignTime($sign_time)
    {
        $this->container['sign_time'] = $sign_time;

        return $this;
    }
   /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     *  Specifies a GUID which can be cross-referenced with the GUID of the signature line stored in the document content. Default value is Empty (all zeroes) Guid.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
   /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     *  Specifies the text of actual signature in the digital signature. Default value is Empty.            
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }
   /**
     * Gets image
     *
     * @return []
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     *  Specifies an image for the digital signature. Default value is null.
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }
   /**
     * Gets provider_id
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     *  Specifies the class ID of the signature provider. Default value is Empty (all zeroes) Guid.            
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }
   /**
     * Gets is_valid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     *  If this digital signature is valid and the document has not been tampered with, this value will be true.
     *
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }
   /**
     * Gets x_ad_es_type
     *
     * @return string
     */
    public function getXAdESType()
    {
        return $this->container['x_ad_es_type'];
    }

    /**
     * Sets x_ad_es_type
     *
     *  XAdES type. Default value is None(XAdES is off).
     *
     * @return $this
     */
    public function setXAdESType($x_ad_es_type)
    {
        $this->container['x_ad_es_type'] = $x_ad_es_type;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }      
}
