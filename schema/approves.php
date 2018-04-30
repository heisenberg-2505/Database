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
$sql = "CREATE TABLE Approves(
tokenId INT PRIMARY KEY,
instructorID VARCHAR(255) NOT NULL,
hodId VARCHAR(255) NOT NULL,
advisorId VARCHAR(255) NOT NULL,
deanAcademicsId VARCHAR(255) NOT NULL,
FOREIGN KEY(tokenId) REFERENCES Token(id),
FOREIGN KEY(instructorID) REFERENCES Faculty(id),
FOREIGN KEY(hodId) REFERENCES Faculty(id),
FOREIGN KEY(advisorId) REFERENCES Faculty(id),
FOREIGN KEY(deanAcademicsId) REFERENCES Faculty(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Approves created successfully\n";
} else {
    echo "Error creating Approves table: " . $conn->error;
}
$conn->close();
?>
