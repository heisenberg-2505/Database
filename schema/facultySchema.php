<?php
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE Faculty(
name VARCHAR(255) NOT NULL,
id INT AUTO_INCREMENT PRIMARY KEY
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Faculty created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>