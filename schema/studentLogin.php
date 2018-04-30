<?php
// php script to create the database schema table slot.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE StudentLogin (
  username VARCHAR(255) NOT NULL PRIMARY KEY,
  password VARCHAR(255) NOT NULL
)";
if($conn->query($sql) === TRUE) {
  echo "Table StudentLogin created successfully\n";
}
else {
  echo "Error creating StudentLogin table: " .$conn->error;
}
$conn->close();
?>
