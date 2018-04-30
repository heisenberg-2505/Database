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
$sql = "CREATE TABLE Approved(
tokenId INT PRIMARY KEY,
byInstructor BIT DEFAULT 0,
byHOD BIT DEFAULT 0,
byAdvisor BIT DEFAULT 0,
byDeanAcademics BIT DEFAULT 0,
FOREIGN KEY(tokenId) REFERENCES Token(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table token created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
