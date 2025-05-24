<?php 
  $username = "your_username";
  $password = "your_password";
  
  // Example: Connect to MySQL database
  require 'config.php'; // Assuming you have a configuration file named config.php

  // Establish connection
  $db = mysqli_connect("your_host", $username, $password, "your_database");
  if (!$db) {
    echo "Failed to connect to the database.";
  } else {
    echo "Successfully connected to the database.";
    
    // Example: Insert data into the database table
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($db, $sql)) {
      echo "Data inserted successfully.";
    } else {
      echo "Error inserting data: " . mysqli_error($db);
    }
    
    // Example: Close the database connection
    mysqli_close($db);
  }
?>
