<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Instructor(facultyId) VALUES ('cseckn')";
$conn->query($sql);

$sql = "INSERT INTO Instructor(facultyId) VALUES ('csemudgal')";
$conn->query($sql);

$sql = "INSERT INTO Instructor(facultyId) VALUES ('cseiyengar')";
$conn->query($sql);

$sql = "INSERT INTO Instructor(facultyId) VALUES ('eerohit')";
$conn->query($sql);

$sql = "INSERT INTO Instructor(facultyId) VALUES ('medkm')";
$conn->query($sql);

$sql = "INSERT INTO Instructor(facultyId) VALUES ('csepkr')";
$conn->query($sql);

$conn->close();
?>
