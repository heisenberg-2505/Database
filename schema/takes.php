<?php
//php script to create the database schema table performance.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE Takes (
  studentId VARCHAR(255) NOT NULL,
  courseCode VARCHAR(255) NOT NULL,
  grade FLOAT,
  semester VARCHAR(255) NOT NULL,
  year INT NOT NULL,
  FOREIGN KEY(studentId) REFERENCES Student(id),
  FOREIGN KEY(courseCode) REFERENCES Course(code),
  PRIMARY KEY(studentId, courseCode)
)";
if($conn->query($sql) === TRUE) {
  echo "Table Takes created successfully\n";
}
else {
  echo "Error creating Takes table: " .$conn->error;
}
$conn->close();
?>
