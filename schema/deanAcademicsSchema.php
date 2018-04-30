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
$sql = "CREATE TABLE DeanAcademics(
facultyId VARCHAR(255) NOT NULL PRIMARY KEY,
FOREIGN KEY(facultyId) REFERENCES Faculty(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table DeanAcademics created successfully\n";
} else {
    echo "Error creating DeanAcademics table: " . $conn->error;
}
$conn->close();
?>
