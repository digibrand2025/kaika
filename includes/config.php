<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'kaika_holdings');
define('DB_USER', 'root'); // Change this
define('DB_PASS', ''); // Change this

// Site configuration
define('SITE_URL', 'http://localhost/kaika-holdings'); // Change to your domain
define('UPLOAD_DIR', __DIR__ . '/../blog/uploads/');
define('UPLOAD_URL', SITE_URL . '/blog/uploads/');

// Admin configuration
define('ADMIN_SESSION_TIMEOUT', 3600); // 1 hour in seconds

// Create database connection
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>