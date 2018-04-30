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
$sql = "CREATE TABLE Performance (
  id VARCHAR(255) NOT NULL,
  semester VARCHAR(255) NOT NULL,
  year INT NOT NULL,
  credits INT,
  sgpa FLOAT,
  PRIMARY KEY(id, semester, year),
  FOREIGN KEY(id) REFERENCES Student(id)
)";
if($conn->query($sql) === TRUE) {
  echo "Table Performance created successfully\n";
}
else {
  echo "Error creating Performance table: " .$conn->error;
}
$conn->close();
?>
