<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Prepare writable /tmp storage directories for serverless Vercel environment
$storageDir = sys_get_temp_dir() . '/storage';
$paths = [
    $storageDir,
    $storageDir . '/framework',
    $storageDir . '/framework/views',
    $storageDir . '/framework/cache',
    $storageDir . '/framework/sessions',
    $storageDir . '/logs',
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        @mkdir($path, 0755, true);
    }
}

// 2. Set essential serverless environment variables
putenv("LARAVEL_STORAGE_PATH={$storageDir}");
$_ENV['LARAVEL_STORAGE_PATH'] = $storageDir;
$_SERVER['LARAVEL_STORAGE_PATH'] = $storageDir;

putenv("VIEW_COMPILED_PATH={$storageDir}/framework/views");
$_ENV['VIEW_COMPILED_PATH'] = "{$storageDir}/framework/views";

putenv('SESSION_DRIVER=cookie');
$_ENV['SESSION_DRIVER'] = 'cookie';

putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_CHANNEL'] = 'stderr';

putenv('CACHE_STORE=array');
$_ENV['CACHE_STORE'] = 'array';

putenv('ASSET_URL=/');
$_ENV['ASSET_URL'] = '/';

if (!getenv('APP_KEY')) {
    putenv('APP_KEY=base64:qP3P98HymxwgvjePRu4zbQr13NoIzZbpo0kSdSQ/RG8=');
    $_ENV['APP_KEY'] = 'base64:qP3P98HymxwgvjePRu4zbQr13NoIzZbpo0kSdSQ/RG8=';
}

// 3. SQLite Database handling for Vercel: copy seeded SQLite database to writable /tmp
$sqliteSource = __DIR__ . '/../database/database.sqlite';
$sqliteTarget = sys_get_temp_dir() . '/database.sqlite';

if (file_exists($sqliteSource)) {
    if (!file_exists($sqliteTarget)) {
        @copy($sqliteSource, $sqliteTarget);
    }
    putenv("DB_DATABASE={$sqliteTarget}");
    $_ENV['DB_DATABASE'] = $sqliteTarget;
    $_SERVER['DB_DATABASE'] = $sqliteTarget;
}

// 4. Direct Static Asset Streamer (serves public files directly if routed through PHP)
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$publicFile = __DIR__ . '/../public' . $uri;

if ($uri !== '/' && file_exists($publicFile) && is_file($publicFile)) {
    $ext = strtolower(pathinfo($publicFile, PATHINFO_EXTENSION));
    $mimes = [
        'css'   => 'text/css; charset=UTF-8',
        'js'    => 'application/javascript; charset=UTF-8',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'png'   => 'image/png',
        'webp'  => 'image/webp',
        'svg'   => 'image/svg+xml',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'json'  => 'application/json',
        'ico'   => 'image/x-icon',
    ];
    if (isset($mimes[$ext])) {
        header('Content-Type: ' . $mimes[$ext]);
    }
    header('Cache-Control: public, max-age=31536000');
    readfile($publicFile);
    exit;
}

// 5. Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// 6. Register Composer Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 7. Bootstrap Laravel and handle request
/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Request::capture());
