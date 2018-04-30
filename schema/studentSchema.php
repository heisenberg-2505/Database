<?php
//php script to create the database schema.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE Student (
  id VARCHAR(255) PRIMARY KEY,
  firstName VARCHAR(255) NOT NULL,
  lastName VARCHAR(255) NOT NULL,
  cgpa FLOAT
)";
if($conn->query($sql) === TRUE) {
  echo "Table StudentSchema created successfully\n";
}
else {
  echo "Error creating StudentSchema table: " .$conn->error;
}
$conn->close();
?>
