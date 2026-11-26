<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="Options.php">
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

namespace Aspose\Cells\Cloud;

use Aspose\Cells\Cloud\ObjectSerializer;

/**
 * Generic option builders shared by the feature-specific Options classes.
 *
 * An option is a callable that receives a {@see RequestOptions} context.
 */
class Options
{
    /**
     * Sets a spec-defined optional parameter on a generated request.
     *
     * @param string $name  wire name (matched to the snake_case property)
     * @param mixed  $value
     *
     * @return callable
     */
    public static function common_parameter($name, $value)
    {
        return function (RequestOptions $context) use ($name, $value) {
            $context->setCommon($name, $value);
        };
    }

    /**
     * Appends an implicit query parameter to the request URL.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return callable
     */
    public static function query_parameter($name, $value)
    {
        return function (RequestOptions $context) use ($name, $value) {
            $context->addQuery($name, $value);
        };
    }

    /**
     * Appends several implicit query parameters.
     *
     * @param array $params
     *
     * @return callable
     */
    public static function query_parameters(array $params)
    {
        return function (RequestOptions $context) use ($params) {
            foreach ($params as $name => $value) {
                $context->addQuery($name, $value);
            }
        };
    }

    /**
     * Combines several options into one.
     *
     * @param callable ...$options
     *
     * @return callable
     */
    public static function raw(...$options)
    {
        return function (RequestOptions $context) use ($options) {
            foreach ($options as $option) {
                if ($option !== null) {
                    $option($context);
                }
            }
        };
    }

    /**
     * Serializes a SaveOptions model (or mapping) into the "SaveOptions"
     * implicit query parameter.
     *
     * @param mixed $value
     *
     * @return callable
     */
    public static function save_options($value)
    {
        if (is_object($value) && method_exists($value, 'attributeMap')) {
            $value = ObjectSerializer::sanitizeForSerialization($value);
        } elseif (is_object($value) && method_exists($value, 'toArray')) {
            $value = $value->toArray();
        }
        $text = is_string($value) ? $value : json_encode($value);
        return self::query_parameter('SaveOptions', $text);
    }
}
