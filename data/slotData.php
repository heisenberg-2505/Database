<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Slot(id) VALUES (1)";
$conn->query($sql);

$sql = "INSERT INTO Slot(id) VALUES (2)";
$conn->query($sql);

$sql = "INSERT INTO Slot(id) VALUES (3)";
$conn->query($sql);

$sql = "INSERT INTO Slot(id) VALUES (4)";
$conn->query($sql);

$sql = "INSERT INTO Slot(id) VALUES (5)";
$conn->query($sql);


$conn->close();
?>
