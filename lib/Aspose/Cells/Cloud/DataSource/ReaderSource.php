<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ReaderSource.php">
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
 * Reads a spreadsheet from a caller-owned readable stream.
 *
 * The stream stays open after {@see read()}; the caller owns it.
 */
class ReaderSource implements DataSource
{
    /** @var resource|object */
    private $reader;

    /**
     * @param resource|object $reader open stream resource or readable object
     */
    public function __construct($reader)
    {
        $this->reader = $reader;
    }

    /**
     * @return string
     */
    public function read()
    {
        if (is_resource($this->reader)) {
            $data = stream_get_contents($this->reader);
            return $data === false ? '' : $data;
        }
        $data = $this->reader->read();
        return is_string($data) ? $data : (string)$data;
    }
}
