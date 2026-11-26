<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="WorkbookRef.php">
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
 * Locates a workbook file in cloud storage for the convenience facade layer.
 *
 * ``name`` is required; ``folder`` and ``storage_name`` are optional.
 */
class WorkbookRef
{
    /** @var string */
    public $name;

    /** @var string */
    public $folder;

    /** @var string */
    public $storage_name;

    /**
     * @param string $name         workbook file name in cloud storage (required)
     * @param string $folder       cloud directory that contains the file
     * @param string $storage_name cloud storage name
     */
    public function __construct($name, $folder = '', $storage_name = '')
    {
        $this->name = $name;
        $this->folder = $folder === null ? '' : $folder;
        $this->storage_name = $storage_name === null ? '' : $storage_name;
    }

    /**
     * Creates a WorkbookRef with the given cloud file name.
     *
     * @param string $name
     *
     * @return WorkbookRef
     */
    public static function new_workbook_ref($name)
    {
        return new self($name);
    }

    /**
     * Alias of {@see new_workbook_ref()}.
     *
     * @param string $name
     *
     * @return WorkbookRef
     */
    public static function of($name)
    {
        return new self($name);
    }
}
