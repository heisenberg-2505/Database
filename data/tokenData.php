
<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Token(studentId, courseCode) VALUES ('15cse1', 'CSL1')";
$conn->query($sql);


$conn->close();
?>
