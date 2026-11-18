<?php

// 1. Prepare writable /tmp storage directories for serverless Vercel environment
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// 2. Set essential serverless environment variables if not already set
putenv('LARAVEL_STORAGE_PATH=/tmp/storage');
$_ENV['LARAVEL_STORAGE_PATH'] = '/tmp/storage';
$_SERVER['LARAVEL_STORAGE_PATH'] = '/tmp/storage';

putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

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

// 3. SQLite Database handling for Vercel: copy database to writable /tmp
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

// 4. Direct Static Asset Streamer (checks both public and dist)
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$publicFile = __DIR__ . '/../public' . $uri;
$distFile = __DIR__ . '/../dist' . $uri;

$targetFile = (file_exists($publicFile) && is_file($publicFile))
    ? $publicFile
    : ((file_exists($distFile) && is_file($distFile)) ? $distFile : null);

if ($uri !== '/' && $targetFile) {
    $ext = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
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
    readfile($targetFile);
    exit;
}

// 5. Forward all dynamic requests to Laravel public entry point
require __DIR__ . '/../public/index.php';
