<?php
// config.php

// Database configuration
define('DB_HOST', 'localhost'); // The host name, typically 'localhost'
define('DB_USERNAME', 'root'); // Default XAMPP username is 'root'
define('DB_PASSWORD', ''); // Default XAMPP password is empty
define('DB_NAME', 'Web-Site-Georgia-log/reg'); // Your database name

/**
 * Establish a connection to the database and return the connection object.
 * This function can be used whenever you need to interact with the database.
 */
function dbConnect() {
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
