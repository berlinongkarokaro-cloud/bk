<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define('LARAVEL_START', microtime(true));

// Create writable directories in /tmp
$dirs = [
    '/tmp/storage/logs',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/app/public',
    '/tmp/bootstrap/cache',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Copy bootstrap cache files to /tmp if they exist
$cacheFiles = glob(__DIR__ . '/../bootstrap/cache/*.php');
foreach ($cacheFiles as $file) {
    $dest = '/tmp/bootstrap/cache/' . basename($file);
    if (!file_exists($dest)) {
        copy($file, $dest);
    }
}

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

$app->useStoragePath('/tmp/storage');

try {
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );

    $response->send();

    $kernel->terminate($request, $response);
} catch (\Throwable $e) {
    echo "<h1>Error:</h1>";
    echo "<pre>" . $e->getMessage() . "</pre>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}