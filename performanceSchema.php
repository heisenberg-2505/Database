<?php
//php script to create the database schema table performance.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connection_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE Performance (
  id INT PRIMARY KEY,
  semester VARCHAR(255) NOT NULL,
  year INT NOT NULL,
  credits INT,
  sgpa INT,
  FOREIGN KEY(id) REFERENCES Student(id)
)";
if($conn->query($sql) === TRUE) {
  echo "Table created successfully";
}
else {
  echo "Error creating table: " .$conn->error;
}
$conn->close();
?>
