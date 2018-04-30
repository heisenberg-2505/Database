<?php
// php script to create the database schema table department.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE Department (
  name VARCHAR(255) PRIMARY KEY NOT NULL,
  building VARCHAR(255) NOT NULL
)";
if($conn->query($sql) === TRUE) {
  echo "Table Department created successfully\n";
}
else {
  echo "Error creating Department table: " .$conn->error;
}
$conn->close();
?>
