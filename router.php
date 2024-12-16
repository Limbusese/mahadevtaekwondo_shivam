<?php
// Get the requested URI
$request = $_SERVER['REQUEST_URI'];

// Remove query string if present
$request = strtok($request, '?');

// Define the base directory for your project
$baseDir = __DIR__;

// Handle the root URL
if ($request === '/' || $request === '') {
    include $baseDir . '/index.php';
    exit;
}

// Route requests to the 'include' directory
if (strpos($request, '/include/') === 0) {
    $filePath = $baseDir . $request . '.php';

    // Check if the requested file exists with .php extension
    if (file_exists($filePath)) {
        include $filePath;
        exit;
    }
   // echo "Looking for: $filePath";
}

// Serve static files (e.g., CSS, JavaScript, images)
if (file_exists($baseDir . $request)) {
    return false; // Let the built-in server handle static files
}

// Return a 404 error for unmatched routes
http_response_code(404);
echo "404 Not Found - The requested resource was not found.";
exit;
