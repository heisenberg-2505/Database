
<?php
// PHP script to create a database.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$conn = new mysqli($servername, $username, $password);
if($conn->connection_error) {
  echo("connection failed");
}
$sql = "CREATE DATABASE csl301";
if($conn->query($sql) === TRUE) {
  echo "Database created successfully";
}
else {
  echo "Database creation error";
}
$conn->close();
?>
