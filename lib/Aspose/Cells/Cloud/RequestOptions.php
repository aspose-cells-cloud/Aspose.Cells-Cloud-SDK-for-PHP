<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RequestOptions.php">
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

/**
 * Option context passed to every facade option callable.
 *
 * An option mutates the generated request's public snake_case properties and
 * may additionally append implicit query parameters. The extra parameters are
 * merged into the request URI by
 * {@see \Aspose\Cells\Cloud\Api\AsposeCellsCloudApi::call()}.
 */
class RequestOptions
{
    /** @var object generated request instance */
    public $request;

    /** @var array extra query parameters keyed by wire name */
    public $extraQuery = [];

    /**
     * @param object $request generated request instance
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Assigns a spec-defined optional parameter to the matching public
     * snake_case property of the generated request.
     *
     * @param string $name  wire name, e.g. "FontsLocation" or "autoRowsFit"
     * @param mixed  $value
     *
     * @throws \InvalidArgumentException when the request has no such property
     *
     * @return void
     */
    public function setCommon($name, $value)
    {
        $property = self::snakeCase($name);
        if (!property_exists($this->request, $property)) {
            throw new \InvalidArgumentException(sprintf(
                'Unknown request parameter "%s": %s has no public property "%s"',
                $name,
                get_class($this->request),
                $property
            ));
        }
        $this->request->$property = $value;
    }

    /**
     * Appends an implicit query parameter to the request URI.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return void
     */
    public function addQuery($name, $value)
    {
        $this->extraQuery[$name] = $value;
    }

    /**
     * Converts PascalCase / camelCase to snake_case.
     *
     * @param string $name
     *
     * @return string
     */
    public static function snakeCase($name)
    {
        $s1 = preg_replace('/(.)([A-Z][a-z]+)/', '$1_$2', $name);
        return strtolower(preg_replace('/([a-z0-9])([A-Z])/', '$1_$2', $s1));
    }
}
