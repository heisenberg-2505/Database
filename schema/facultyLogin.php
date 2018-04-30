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
$sql = "CREATE TABLE FacultyLogin(
username VARCHAR(255),
password VARCHAR(255),
PRIMARY KEY(username)

)";
if ($conn->query($sql) === TRUE) {
    echo "Table FacultyLogin created successfully\n";
} else {
    echo "Error creating FacultyLogin table: " . $conn->error;
}
$conn->close();
?>
