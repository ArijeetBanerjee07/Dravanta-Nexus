<?php
// Vercel Serverless Entry Point Router for Dravanta Nexus
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
    // Resolve project root directory across Lambda / local / Vercel
    $possibleRoots = [
        dirname(__DIR__),
        __DIR__,
        $_SERVER['LAMBDA_TASK_ROOT'] ?? '',
        '/var/task'
    ];

    $rootDir = dirname(__DIR__);
    foreach ($possibleRoots as $candidate) {
        if (!empty($candidate) && file_exists($candidate . '/index.php')) {
            $rootDir = $candidate;
            break;
        }
    }

    if (file_exists($rootDir)) {
        chdir($rootDir);
    }

    // Parse the requested URL path
    $requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $path = trim($requestUri, '/');

    // Route resolution
    if (empty($path) || $path === 'index' || $path === 'index.php') {
        $script = 'index.php';
    } else {
        if (str_ends_with(strtolower($path), '.php')) {
            $script = $path;
        } else {
            $script = $path . '.php';
        }
    }

    $targetFile = $rootDir . DIRECTORY_SEPARATOR . $script;

    if (file_exists($targetFile) && is_file($targetFile)) {
        require $targetFile;
    } elseif (file_exists($rootDir . DIRECTORY_SEPARATOR . 'index.php')) {
        require $rootDir . DIRECTORY_SEPARATOR . 'index.php';
    } else {
        http_response_code(404);
        echo "<!DOCTYPE html><html><head><title>404 Not Found</title></head><body>";
        echo "<h1>Page Not Found</h1>";
        echo "<p>Requested: " . htmlspecialchars($script) . "</p>";
        echo "<p>Root directory: " . htmlspecialchars($rootDir) . "</p>";
        if (is_dir($rootDir)) {
            echo "<p>Files in root: " . htmlspecialchars(implode(', ', scandir($rootDir))) . "</p>";
        }
        echo "</body></html>";
    }
} catch (Throwable $e) {
    http_response_code(500);
    echo "<!DOCTYPE html><html><head><title>500 Application Error</title></head><body>";
    echo "<h1>PHP Application Error</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " on line " . $e->getLine() . "</p>";
    echo "<pre style='background:#f4f4f4;padding:15px;border-radius:5px;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    echo "</body></html>";
}
