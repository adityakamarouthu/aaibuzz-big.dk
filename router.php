<?php
// router.php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// If the requested file exists (like an image or css file), serve it as is.
if (file_exists(__DIR__ . $path)) {
    return false; 
}

// Otherwise, serve the main index file (index.html or index.php)
include_once 'index.html'; 
// Note: If your main file is index.php, change 'index.html' to 'index.php' above.
?>