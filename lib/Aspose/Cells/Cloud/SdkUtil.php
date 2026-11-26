<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="SdkUtil.php">
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

use Aspose\Cells\Cloud\ApiException;
use Aspose\Cells\Cloud\DataSource\DataSink;
use Aspose\Cells\Cloud\DataSource\DataSource;
use Aspose\Cells\Cloud\RichResponse;
use Aspose\Cells\Cloud\WorkbookRef;

/**
 * Shared execution, I/O and validation helpers for the facade packages.
 */
class SdkUtil
{
    /**
     * Throws InvalidArgumentException when $condition is false.
     *
     * @param mixed  $condition
     * @param string $message
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function require_param($condition, $message)
    {
        if (!$condition) {
            throw new \InvalidArgumentException($message);
        }
    }

    /**
     * Applies one option callable, or an iterable of option callables.
     *
     * @param RequestOptions        $context
     * @param callable|iterable|null $options
     *
     * @return void
     */
    public static function apply_options(RequestOptions $context, $options)
    {
        if ($options === null) {
            return;
        }
        if (is_callable($options)) {
            $options($context);
            return;
        }
        foreach ($options as $option) {
            if ($option !== null) {
                $option($context);
            }
        }
    }

    /**
     * Executes a generated request and throws ApiException on a non-2xx
     * status.
     *
     * @param object $client
     * @param object $request
     * @param array  $extraQuery
     * @param string $returnType
     *
     * @throws ApiException
     *
     * @return RichResponse
     */
    public static function do_checked($client, $request, array $extraQuery = [], $returnType = 'string')
    {
        if ($client === null) {
            throw new \InvalidArgumentException('client is required');
        }
        /** @var RichResponse $response */
        $response = $client->call($request, $returnType, $extraQuery);
        if (method_exists($response, 'isSuccess') && !$response->isSuccess()) {
            throw new ApiException(
                sprintf('[%d] Error connecting to the API', $response->getStatusCode()),
                $response->getStatusCode(),
                $response->getHeaders(),
                $response->getBody()
            );
        }
        return $response;
    }

    /**
     * Builds the option context, applies the options and executes the request.
     *
     * @param object $client
     * @param object $request
     * @param mixed  $options
     * @param string $returnType
     *
     * @return RichResponse
     */
    public static function execute($client, $request, $options = null, $returnType = 'string')
    {
        $context = new RequestOptions($request);
        self::apply_options($context, $options);
        return self::do_checked($client, $request, $context->extraQuery, $returnType);
    }

    /**
     * Executes a request whose option context already has defaults applied.
     *
     * @param object $client
     * @param RequestOptions $context
     * @param mixed  $options
     * @param string $returnType
     *
     * @return RichResponse
     */
    public static function execute_prepared($client, RequestOptions $context, $options = null, $returnType = 'string')
    {
        self::apply_options($context, $options);
        return self::do_checked($client, $context->request, $context->extraQuery, $returnType);
    }

    /**
     * Normalizes a DataSource / path / bytes / stream value to a byte string.
     *
     * @param mixed $source
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    public static function read_source($source)
    {
        if ($source === null) {
            throw new \InvalidArgumentException('data source is required');
        }
        if ($source instanceof DataSource) {
            return $source->read();
        }
        if ($source instanceof \SplFileObject) {
            $source->rewind();
            $data = '';
            while (!$source->eof()) {
                $chunk = $source->fread(8192);
                if ($chunk === false) {
                    break;
                }
                $data .= $chunk;
            }
            return $data;
        }
        if (is_resource($source)) {
            $data = stream_get_contents($source);
            return $data === false ? '' : $data;
        }
        if (is_string($source)) {
            // A short, NUL-free string may be a local path; everything else is
            // treated as raw bytes. This mirrors ObjectSerializer's multipart
            // handling and avoids fopen() warnings on binary input.
            if (strlen($source) < 4096
                && strpos($source, "\0") === false
                && is_file($source)) {
                $data = file_get_contents($source);
                return $data === false ? '' : $data;
            }
            return $source;
        }
        throw new \InvalidArgumentException('unsupported data source: ' . gettype($source));
    }

    /**
     * Writes bytes to a DataSink / local path / writable stream.
     *
     * @param mixed  $sink
     * @param string $data
     *
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public static function write_sink($sink, $data)
    {
        if ($sink === null) {
            throw new \InvalidArgumentException('data sink is required');
        }
        if ($sink instanceof DataSink) {
            $sink->write($data);
            return;
        }
        if ($sink instanceof \SplFileObject) {
            $sink->fwrite($data);
            return;
        }
        if (is_resource($sink)) {
            fwrite($sink, $data);
            return;
        }
        if (is_string($sink)) {
            file_put_contents($sink, $data);
            return;
        }
        throw new \InvalidArgumentException('unsupported data sink: ' . gettype($sink));
    }

    /**
     * Normalizes a WorkbookRef / cloud file name to
     * [name, folder, storage_name].
     *
     * @param WorkbookRef|string $ref
     *
     * @throws \InvalidArgumentException
     *
     * @return array
     */
    public static function split_workbook_ref($ref)
    {
        if ($ref instanceof WorkbookRef) {
            return [$ref->name, $ref->folder, $ref->storage_name];
        }
        if (is_string($ref)) {
            return [$ref, '', ''];
        }
        throw new \InvalidArgumentException('workbook must be a WorkbookRef or a file name');
    }

    /**
     * Expands a workbook location into request options.
     *
     * @param string $folder
     * @param string $storage_name
     *
     * @return callable[]
     */
    public static function workbook_params($folder, $storage_name)
    {
        $options = [];
        if ($folder !== null && $folder !== '') {
            $options[] = Options::common_parameter('folder', $folder);
        }
        if ($storage_name !== null && $storage_name !== '') {
            $options[] = Options::common_parameter('storageName', $storage_name);
        }
        return $options;
    }
}
