<?php
include 'Connection.php' ;

// Create database
$sql = "CREATE DATABASE ProDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>