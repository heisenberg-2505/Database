<?php
//php script to create the database schema.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connection_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE Student (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName VARCHAR(255) NOT NULL,
  lastName VARCHAR(255) NOT NULL,
  cgpa FLOAT
)";
if($conn->query($sql) === TRUE) {
  echo "Table created successfully";
}
else {
  echo "Error creating table: " .$conn->error;
}
$conn->close();
?>
