<?php
// Base directory for image access (to prevent access outside /img/)
$baseDir = realpath(__DIR__ . '/assets/img/');

// Get path and name from URL
$requestedPath = isset($_GET['path']) ? $_GET['path'] : '';
$downloadName = isset($_GET['name']) ? $_GET['name'] : 'image.png';

// Sanitize input path (prevent directory traversal)
$fullPath = realpath($baseDir . '/' . $requestedPath);

// Block access if image doesn't exist or is outside /img/
if (!$fullPath || !file_exists($fullPath) || strpos($fullPath, $baseDir) !== 0) {
    http_response_code(404);
    echo 'Image not found or access denied.';
    exit;
}

// Detect MIME type
$extension = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
$mimeTypes = [
    'png'  => 'image/png',
    'jpg'  => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'webp' => 'image/webp',
    'avif' => 'image/avif',
];

$contentType = isset($mimeTypes[$extension]) ? $mimeTypes[$extension] : 'application/octet-stream';

// Serve the image with appropriate headers
header('Content-Type: ' . $contentType);
header('Content-Disposition: inline; filename="' . basename($downloadName) . '"');
readfile($fullPath);
exit;
