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
$sql = "CREATE TABLE PreRequisites(
courseId VARCHAR(255),
preRequisiteId VARCHAR(255),
FOREIGN KEY(courseId) REFERENCES Course(code),
FOREIGN KEY(preRequisiteId) REFERENCES Course(code)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table PreRequisites created successfully\n";
} else {
    echo "Error creating PreRequisites table: " . $conn->error;
}
$conn->close();
?>
