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
$sql = "CREATE TABLE Hod(
facultyId VARCHAR(255) PRIMARY KEY,
departmentName VARCHAR(255),
FOREIGN KEY(facultyId) REFERENCES Faculty(id),
FOREIGN KEY(departmentName) REFERENCES Department(name)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Hod created successfully\n";
} else {
    echo "Error creating Hod table: " . $conn->error;
}
$conn->close();
?>
