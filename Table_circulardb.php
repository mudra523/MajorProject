<?php
include 'Connection.php' ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE circulardb (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
C_NAME VARCHAR(30) NOT NULL,
FILE VARCHAR(30) NOT NULL,
CATAGORY VARCHAR(30) NOT NULL,
SEMESTER VARCHAR(50) NOT NULL,
DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>