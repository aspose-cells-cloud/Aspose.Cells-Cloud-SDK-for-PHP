<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PageSection.php">
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

class PageSection
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PageSection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'section' => 'int',
        'context' => 'string',
        'picture' => 'string',
        'fisrt_page_context' => 'string',
        'even_page_context' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'section' => 'int32',
        'context' => null,
        'picture' => null,
        'fisrt_page_context' => null,
        'even_page_context' => null,
    ];

    /**
      * Array of attributes where the key is the local name,
      * and the value is the original name
      *
      * @var string[]
      */
    protected static $attributeMap = [
        'section' => 'Section',
        'context' => 'Context',
        'picture' => 'Picture',
        'fisrt_page_context' => 'FisrtPageContext',
        'even_page_context' => 'EvenPageContext',
    ];

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      *
      * @var string[]
      */
    protected static $setters = [
        'section' => 'setSection',
        'context' => 'setContext',
        'picture' => 'setPicture',
        'fisrt_page_context' => 'setFisrtPageContext',
        'even_page_context' => 'setEvenPageContext',
    ];

    /**
      * Array of attributes to getter functions (for serialization of requests)
      *
      * @var string[]
      */
    protected static $getters = [
        'section' => 'getSection',
        'context' => 'getContext',
        'picture' => 'getPicture',
        'fisrt_page_context' => 'getFisrtPageContext',
        'even_page_context' => 'getEvenPageContext',
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
        $this->container['section'] = isset($data['section']) ? $data['section'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
        $this->container['fisrt_page_context'] = isset($data['fisrt_page_context']) ? $data['fisrt_page_context'] : null;
        $this->container['even_page_context'] = isset($data['even_page_context']) ? $data['even_page_context'] : null;
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
     * Gets section.
     *
     * @return int|null
     */
    public function getSection()
    {
        return $this->container['section'];
    }

    /**
     * Sets section.
     *
     * @param int|null $section
     *
     * @return $this
     */
    public function setSection($section)
    {
        $this->container['section'] = $section;
        return $this;
    }

    /**
     * Gets context.
     *
     * @return string|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context.
     *
     * @param string|null $context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;
        return $this;
    }

    /**
     * Gets picture.
     *
     * @return string|null
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture.
     *
     * @param string|null $picture
     *
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;
        return $this;
    }

    /**
     * Gets fisrt_page_context.
     *
     * @return string|null
     */
    public function getFisrtPageContext()
    {
        return $this->container['fisrt_page_context'];
    }

    /**
     * Sets fisrt_page_context.
     *
     * @param string|null $fisrt_page_context
     *
     * @return $this
     */
    public function setFisrtPageContext($fisrt_page_context)
    {
        $this->container['fisrt_page_context'] = $fisrt_page_context;
        return $this;
    }

    /**
     * Gets even_page_context.
     *
     * @return string|null
     */
    public function getEvenPageContext()
    {
        return $this->container['even_page_context'];
    }

    /**
     * Sets even_page_context.
     *
     * @param string|null $even_page_context
     *
     * @return $this
     */
    public function setEvenPageContext($even_page_context)
    {
        $this->container['even_page_context'] = $even_page_context;
        return $this;
    }
}
