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
$sql = "CREATE TABLE Offers(
courseCode VARCHAR(255) NOT NULL,
slotId INT NOT NULL,
facultyId VARCHAR(255) NOT NULL,
departmentName VARCHAR(255) NOT NULL,
cgpa FLOAT,
maxStudents INT,
FOREIGN KEY(courseCode) REFERENCES Course(code),
FOREIGN KEY(slotId) REFERENCES Slot(id),
FOREIGN KEY(facultyId) REFERENCES Faculty(id),
FOREIGN KEY(departmentName) REFERENCES Department(name),
PRIMARY KEY(courseCode, facultyId)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Offers created successfully\n";
} else {
    echo "Error creating Offers table: " . $conn->error;
}
$conn->close();
?>
