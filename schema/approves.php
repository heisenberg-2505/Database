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
instructorID INT NOT NULL,
hodId INT NOT NULL,
advisorId INT NOT NULL,
deanAcademicsId INT NOT NULL,
FOREIGN KEY(tokenId) REFERENCES Token(id),
FOREIGN KEY(instructorID) REFERENCES Instructor(id),
FOREIGN KEY(hodId) REFERENCES HOD(id),
FOREIGN KEY(advisorId) REFERENCES Advisor(id),
FOREIGN KEY(deanAcademicsId) REFERENCES DeanAcademics(id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table token created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
