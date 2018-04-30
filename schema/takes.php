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
  studentId INT NOT NULL,
  courseCode INT NOT NULL,
  grade FLOAT,
  semester VARCHAR(255) NOT NULL,
  year INT NOT NULL,
  FOREIGN KEY(studentId) REFERENCES Student(id),
  FOREIGN KEY(courseCode) REFERENCES Course(code),
  PRIMARY KEY(studentId, courseCode)
)";
if($conn->query($sql) === TRUE) {
  echo "Table created successfully";
}
else {
  echo "Error creating table: " .$conn->error;
}
$conn->close();
?>
