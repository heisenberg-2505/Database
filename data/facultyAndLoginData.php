<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Faculty(name, id, departmentName) VALUES ('C K Narayanan', 'cseckn', 'Computer Science')";
$conn->query($sql);

$sql = "INSERT INTO FacultyLogin(username, password) VALUES ('cseckn', 'iitrpr')";
$conn->query($sql);


$sql = "INSERT INTO Faculty(name, id, departmentName) VALUES ('Apoorva Mudgal', 'csemudgal', 'Computer Science')";
$conn->query($sql);

$sql = "INSERT INTO FacultyLogin(username, password) VALUES ('csemudgal', 'iitrpr')";
$conn->query($sql);


$sql = "INSERT INTO Faculty(name, id, departmentName) VALUES ('Sudarshan Iyengar', 'cseiyengar', 'Computer Science')";
$conn->query($sql);

$sql = "INSERT INTO FacultyLogin(username, password) VALUES ('cseiyengar', 'iitrpr')";
$conn->query($sql);


$sql = "INSERT INTO Faculty(name, id, departmentName) VALUES ('P K Raina', 'csepkr', 'Computer Science')";
$conn->query($sql);

$sql = "INSERT INTO FacultyLogin(username, password) VALUES ('csepkr', 'iitrpr')";
$conn->query($sql);


$sql = "INSERT INTO Faculty(name, id, departmentName) VALUES ('Rohit Sharma', 'eerohit', 'Electrical')";
$conn->query($sql);

$sql = "INSERT INTO FacultyLogin(username, password) VALUES ('eerohit', 'iitrpr')";
$conn->query($sql);


$sql = "INSERT INTO Faculty(name, id, departmentName) VALUES ('Dhiraj Mahajan', 'medkm', 'Mechanical')";
$conn->query($sql);

$sql = "INSERT INTO FacultyLogin(username, password) VALUES ('medkm', 'iitrpr')";
$conn->query($sql);



$conn->close();
?>
