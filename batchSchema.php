<?php
// php script to create the database schema table batch.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connection_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE Batch (
  year INT PRIMARY KEY NOT NULL
)";
if($conn->query($sql) === TRUE) {
  echo "Table created successfully";
}
else {
  echo "Error creating table: " .$conn->error;
}
$conn->close();
?>
