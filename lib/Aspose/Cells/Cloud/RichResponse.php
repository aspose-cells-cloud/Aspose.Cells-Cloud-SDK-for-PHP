<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="RichResponse.php">
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
 * A small rich HTTP response used by the convenience facade layer.
 *
 * The generated operation methods return deserialized models (or a
 * SplFileObject). The facades need the raw body together with the status code
 * and headers, so {@see \Aspose\Cells\Cloud\Api\AsposeCellsCloudApi::call()}
 * wraps the result of the generated transport in this value object.
 */
class RichResponse
{
    /** @var int */
    private $statusCode;

    /** @var array */
    private $headers;

    /** @var string|resource|\Psr\Http\Message\StreamInterface|null */
    private $body;

    /**
     * @param int   $statusCode HTTP status code
     * @param array $headers    response headers
     * @param mixed $body       raw response body (usually a string)
     */
    public function __construct($statusCode = 200, $headers = [], $body = '')
    {
        $this->statusCode = (int)$statusCode;
        $this->headers = is_array($headers) ? $headers : [];
        $this->body = $body;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Returns the raw response body exactly as received.
     *
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Returns the response body as a byte string.
     *
     * PHP strings are byte strings; this exists so callers can mirror the
     * ``to_bytes()`` API of the other SDK languages.
     *
     * @return string
     */
    public function toBytes()
    {
        return $this->asString();
    }

    /**
     * Returns the response body as text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->asString();
    }

    /**
     * Alias of {@see getText()}.
     *
     * @return string
     */
    public function text()
    {
        return $this->asString();
    }

    /**
     * Decodes the response body as JSON.
     *
     * @param bool $associative return associative arrays instead of stdClass
     *
     * @return mixed
     */
    public function getJson($associative = true)
    {
        if (is_string($this->body)) {
            if ($this->body === '') {
                return null;
            }
            return json_decode($this->body, $associative);
        }
        return $this->body;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->statusCode >= 200 && $this->statusCode <= 299;
    }

    /**
     * @return string
     */
    public function asString()
    {
        if ($this->body === null || is_string($this->body)) {
            return (string)$this->body;
        }
        if (is_resource($this->body)) {
            $contents = stream_get_contents($this->body);
            return $contents === false ? '' : $contents;
        }
        if (is_object($this->body) && method_exists($this->body, '__toString')) {
            return (string)$this->body;
        }
        if (is_object($this->body) && method_exists($this->body, 'getContents')) {
            $contents = $this->body->getContents();
            return $contents === false || $contents === null ? '' : (string)$contents;
        }
        return (string)$this->body;
    }
}
