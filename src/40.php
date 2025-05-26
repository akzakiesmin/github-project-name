<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolwork_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Example code to insert a new user into the database

$user_data = [
  "name" => "John Doe",
  "email" => "john.doe@example.com"
];

$prepared_stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$prepared_stmt->bind_param("ss", $user_data["name"], $user_data["email"]);
$prepared_stmt->execute();
$conn->close();

echo "New user added successfully.";
