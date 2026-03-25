<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
define('DB_SERVER','localhost:3307');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'hms');

// Attempt to connect to MySQL
try {
    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    
    // Check connection
    if (!$con) {
        throw new Exception("Failed to connect to MySQL: " . mysqli_connect_error());
    }
    
    // Set charset to ensure proper encoding
    mysqli_set_charset($con, "utf8mb4");
    
} catch (Exception $e) {
    // Log the error
    error_log("Database Connection Error: " . $e->getMessage());
    
    // If this is not an AJAX request, show error
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die("Database connection failed. Please try again later.");
    } else {
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
        exit;
    }
}
?>