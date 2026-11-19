<?php
// Vercel Serverless Entry Point Router for Dravanta Nexus

// Determine the root directory
$rootDir = dirname(__DIR__);
if (!file_exists($rootDir . '/index.php')) {
    if (file_exists('/var/task/index.php')) {
        $rootDir = '/var/task';
    } elseif (!empty($_SERVER['LAMBDA_TASK_ROOT']) && file_exists($_SERVER['LAMBDA_TASK_ROOT'] . '/index.php')) {
        $rootDir = $_SERVER['LAMBDA_TASK_ROOT'];
    }
}

chdir($rootDir);

// Parse the requested URL path
$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = trim($requestUri, '/');

// Resolve target script
if (empty($path) || $path === 'index' || $path === 'index.php') {
    $script = 'index.php';
} else {
    $script = str_ends_with(strtolower($path), '.php') ? $path : $path . '.php';
}

$targetFile = $rootDir . DIRECTORY_SEPARATOR . $script;

if (file_exists($targetFile) && is_file($targetFile)) {
    require $targetFile;
} else {
    require $rootDir . DIRECTORY_SEPARATOR . 'index.php';
}
