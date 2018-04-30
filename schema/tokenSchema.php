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
$sql = "CREATE TABLE Token(
id INT AUTO_INCREMENT PRIMARY KEY,
studentId INT NOT NULL,
courseCode VARCHAR(255) NOT NULL,
FOREIGN KEY(studentId) REFERENCES Student(id),
FOREIGN KEY(courseCode) REFERENCES Course(code)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table token created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
