<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Advisor(facultyId, departmentName , batchYear) VALUES ('cseiyengar', 'Computer Science', 2015)";
$conn->query($sql);

$sql = "INSERT INTO Hod(facultyId, departmentName) VALUES ('medkm', 'Mechanical', 2015)";
$conn->query($sql);

$sql = "INSERT INTO Hod(facultyId, departmentName) VALUES ('eerohit', 'Electrical', 2015)";
$conn->query($sql);


$conn->close();
?>
