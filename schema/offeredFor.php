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
$sql = "CREATE TABLE OfferedFor(
courseCode VARCHAR(255) NOT NULL,
facultyId VARCHAR(255) NOT NULL,
departmentName VARCHAR(255),
batchYear INT,
FOREIGN KEY(courseCode) REFERENCES Course(code),
FOREIGN KEY(facultyId) REFERENCES Faculty(id),
FOREIGN KEY(departmentName) REFERENCES Department(name),
FOREIGN KEY(batchYear) REFERENCES Batch(year),
PRIMARY KEY(courseCode, facultyId, departmentName, batchYear)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table OfferedFor created successfully\n";
} else {
    echo "Error creating OfferedFor table: " . $conn->error;
}
$conn->close();
?>
