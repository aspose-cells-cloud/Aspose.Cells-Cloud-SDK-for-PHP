<?php
/*
 * <copyright company="Aspose" file="common.php">
 *   Copyright (c) 2026 Aspose.Cells Cloud
 * </copyright>
 */

/**
 * Shared helpers for the PHP SDK examples: a PSR-4 style autoloader for the
 * SDK tree, credential/env handling, and fixture/output path helpers.
 *
 * A Composer vendor tree is used when present. In the SDK checkout there is
 * no vendor tree, so the integration suite's ext-curl Guzzle shim is loaded
 * before any SDK class (the hand-written client talks to GuzzleHttp).
 */
$vendor = __DIR__ . '/../vendor/autoload.php';
if (is_file($vendor)) {
    require_once $vendor;
} else {
    $support = __DIR__ . '/../tests/integration/support';
    if (is_file($support . '/guzzle_shim.php')) {
        require_once $support . '/guzzle_shim.php';
    }
    if (is_file($support . '/CurlTransport.php')) {
        require_once $support . '/CurlTransport.php';
    }
}

spl_autoload_register(function ($class) {
    // Standard PSR-4: everything in namespace Aspose\Cells\Cloud lives under
    // lib/Aspose/Cells/Cloud (Api, Converter, Model, Request, ...).
    static $prefixes = [
        'Aspose\\Cells\\Cloud\\' => '/lib/Aspose/Cells/Cloud/',
    ];
    foreach ($prefixes as $prefix => $dir) {
        if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
            continue;
        }
        $relative = str_replace('\\', '/', substr($class, strlen($prefix)));
        $file = __DIR__ . '/../' . ltrim($dir, '/') . $relative . '.php';
        if (is_file($file)) {
            require $file;
            return;
        }
    }
});

function client_from_env()
{
    $clientId = getenv('CellsCloudClientId') ?: getenv('ProductClientId');
    $clientSecret = getenv('CellsCloudClientSecret') ?: getenv('ProductClientSecret');
    if (!$clientId || !$clientSecret) {
        throw new RuntimeException(
            'Set CellsCloudClientId and CellsCloudClientSecret '
            . '(optionally CellsCloudApiBaseUrl) before running an example.'
        );
    }
    $baseUrl = getenv('CellsCloudApiBaseUrl') ?: 'https://api.aspose.cloud';
    return new \Aspose\Cells\Cloud\Api\AsposeCellsCloudApi(
        $clientId,
        $clientSecret,
        'v4.0',
        $baseUrl
    );
}

function data_path($name)
{
    return __DIR__ . '/data/' . $name;
}

function output_path($name)
{
    $dir = __DIR__ . '/output';
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    return $dir . '/' . $name;
}

function ensure_folder($client, $path)
{
    try {
        $client->call(new \Aspose\Cells\Cloud\Request\CreateFolderRequest($path));
    } catch (\Throwable $e) {
        /* already exists, or the storage creates it on upload */
    }
}

function run_example(callable $main)
{
    try {
        $main();
    } catch (\Throwable $e) {
        fwrite(STDERR, 'Error: ' . $e->getMessage() . "\n");
        exit(1);
    }
}
