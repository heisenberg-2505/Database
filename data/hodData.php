<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Hod(facultyId, departmentName) VALUES ('csemudgal', 'Computer Science')";
$conn->query($sql);

$sql = "INSERT INTO Hod(facultyId, departmentName) VALUES ('medkm', 'Mechanical')";
$conn->query($sql);

$sql = "INSERT INTO Hod(facultyId, departmentName) VALUES ('eerohit', 'Electrical')";
$conn->query($sql);


$conn->close();
?>
