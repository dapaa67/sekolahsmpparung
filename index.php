<?php
// public_html/index.php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Path ke folder core Laravel
$laravelPath = __DIR__ . '/laravel_app';

// Maintenance mode check
if (file_exists($maintenance = $laravelPath . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoload
$autoload = $laravelPath . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    echo 'Autoload file not found. Pastikan folder vendor di laravel_app/vendor telah ter-upload.';
    exit;
}
require $autoload;

// Bootstrap the application
$app = require_once $laravelPath . '/bootstrap/app.php';

// Handle the incoming request via HTTP kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Capture request
$request = Request::capture();

// Process & get response
$response = $kernel->handle($request);

// Send response to client
$response->send();

// Terminate kernel (untuk terminate tasks, middleware terminate, dsb.)
$kernel->terminate($request, $response);
