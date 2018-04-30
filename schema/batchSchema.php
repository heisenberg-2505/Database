<?php
// php script to create the database schema table batch.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE Batch (
  year INT PRIMARY KEY NOT NULL
)";
if($conn->query($sql) === TRUE) {
  echo "Table Batch created successfully\n";
}
else {
  echo "Error creating Batch table: " .$conn->error;
}
$conn->close();
?>
