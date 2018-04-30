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
$sql = "CREATE TABLE OfferedBy(
courseCode VARCHAR(255) PRIMARY KEY,
departmentName VARCHAR(255),
FOREIGN KEY(courseCode) REFERENCES Course(code),
FOREIGN KEY(departmentName) REFERENCES Department(name)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table OfferedBy created successfully\n";
} else {
    echo "Error creating OfferedBy table: " . $conn->error;
}
$conn->close();
?>
