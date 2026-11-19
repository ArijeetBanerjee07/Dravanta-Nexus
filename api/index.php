<?php
// Vercel Serverless Entry Point Router for Dravanta Nexus

// Parse the requested URL path
$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = trim($requestUri, '/');

// Base project root directory
$rootDir = dirname(__DIR__);
chdir($rootDir);

// Resolve target script
if (empty($path) || $path === 'index' || $path === 'index.php') {
    $script = 'index.php';
} else {
    // Support both /about and /about.php
    if (str_ends_with(strtolower($path), '.php')) {
        $script = $path;
    } else {
        $script = $path . '.php';
    }
}

$targetFile = $rootDir . DIRECTORY_SEPARATOR . $script;

if (file_exists($targetFile) && is_file($targetFile)) {
    require $targetFile;
} else {
    // Fallback to home page if file not found
    require $rootDir . DIRECTORY_SEPARATOR . 'index.php';
}
