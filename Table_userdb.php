<?php
include 'Connection.php' ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE userdb (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
U_NAME VARCHAR(30) NOT NULL,
U_EMAIL VARCHAR(30) NOT NULL,
SEMESTER VARCHAR(30) NOT NULL,
ENROLL_NO VARCHAR(30) NOT NULL,
PASSWORD VARCHAR(30) NOT NULL,
DATE TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table UserDB created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>