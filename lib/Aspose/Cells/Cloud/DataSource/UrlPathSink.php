<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="UrlPathSink.php">
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

namespace Aspose\Cells\Cloud\DataSource;

/**
 * Uploads the result with an HTTP PUT to a URL.
 *
 * Useful for pre-signed cloud-storage URLs. A non-2xx response causes
 * {@see write()} to throw a RuntimeException.
 */
class UrlPathSink implements DataSink
{
    /** @var string */
    private $url;

    /** @var string */
    private $contentType;

    /** @var int|null */
    private $timeout;

    /**
     * @param string   $url
     * @param string   $contentType
     * @param int|null $timeout
     */
    public function __construct($url, $contentType = 'application/octet-stream', $timeout = null)
    {
        $this->url = $url;
        $this->contentType = $contentType;
        $this->timeout = $timeout;
    }

    /**
     * @param string $data
     *
     * @throws \RuntimeException when the upload fails
     *
     * @return void
     */
    public function write($data)
    {
        $options = [
            'http' => [
                'method' => 'PUT',
                'header' => 'Content-Type: ' . $this->contentType . "\r\n",
                'content' => $data,
                'ignore_errors' => true,
            ],
        ];
        if ($this->timeout !== null) {
            $options['http']['timeout'] = $this->timeout;
        }
        $context = stream_context_create($options);
        $result = @file_get_contents($this->url, false, $context);
        if ($result === false) {
            throw new \RuntimeException('upload to URL failed: ' . $this->url);
        }
        if (isset($http_response_header[0])
            && preg_match('#\s(\d{3})\s#', $http_response_header[0], $m)
            && ((int)$m[1] < 200 || (int)$m[1] > 299)) {
            throw new \RuntimeException('upload to URL failed with status ' . $m[1]);
        }
    }
}
