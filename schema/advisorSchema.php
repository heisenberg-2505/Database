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
$sql = "CREATE TABLE Advisor(
facultyId VARCHAR(255) PRIMARY KEY,
departmentName VARCHAR(255) NOT NULL,
batchYear INT NOT NULL,
FOREIGN KEY(facultyId) REFERENCES Faculty(id),
FOREIGN KEY(departmentName) REFERENCES Department(name),
FOREIGN KEY(batchYear) REFERENCES Batch(year)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Advisor created successfully\n";
} else {
    echo "Error creating Advisor table: " . $conn->error;
}
$conn->close();
?>
