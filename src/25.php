<?php
// Initialize database connection
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform your SQL query here

// Close the connection
$conn->close();
