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
$sql = "CREATE TABLE Course(
name VARCHAR(255),
code VARCHAR(255),
lecture INT,
tutorial INT,
practical INT,
PRIMARY KEY(code)

)";
if ($conn->query($sql) === TRUE) {
    echo "Table Course created successfully\n";
} else {
    echo "Error creating Course table: " . $conn->error;
}
$conn->close();
?>
