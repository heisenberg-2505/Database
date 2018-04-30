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
$sql = "CREATE TABLE Belongs (
  studentId VARCHAR(255) PRIMARY KEY,
  batchYear INT NOT NULL,
  departmentName VARCHAR(255) NOT NULL,
  FOREIGN KEY(studentId) REFERENCES Student(id),
  FOREIGN KEY(batchYear) REFERENCES Batch(year),
  FOREIGN KEY(departmentName) REFERENCES Department(name)
)";
if($conn->query($sql) === TRUE) {
  echo "Table Belongs created successfully\n";
}
else {
  echo "Error creating Belongs table: " .$conn->error;
}
$conn->close();
?>
