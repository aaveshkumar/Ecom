<?php
/**
 * Database Configuration
 * Secure connection to remote Hostinger MySQL database
 */

// Get database credentials from environment variables
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

// Validate credentials are loaded
if (!$db_host || !$db_user || !$db_password || !$db_name) {
    die('Error: Database credentials not found in environment variables.');
}

// Create connection with error handling
try {
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    
    // Check connection
    if ($conn->connect_error) {
        die('Database Connection Failed: ' . $conn->connect_error);
    }
    
    // Set charset to utf8mb4
    $conn->set_charset("utf8mb4");
    
} catch (Exception $e) {
    die('Connection Error: ' . $e->getMessage());
}

/**
 * Helper function to execute queries
 */
function executeQuery($query) {
    global $conn;
    $result = $conn->query($query);
    if ($result === false) {
        return array('success' => false, 'error' => $conn->error);
    }
    return array('success' => true, 'result' => $result);
}

/**
 * Helper function to get database connection
 */
function getDbConnection() {
    global $conn;
    return $conn;
}

/**
 * Escape string for SQL queries
 */
function escapeString($string) {
    global $conn;
    return $conn->real_escape_string($string);
}
?>
