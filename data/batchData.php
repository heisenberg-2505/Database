<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Batch VALUES ('2014')";
$conn->query($sql);

$sql = "INSERT INTO Batch VALUES ('2015')";
$conn->query($sql);

$sql = "INSERT INTO Batch VALUES ('2016')";
$conn->query($sql);

$sql = "INSERT INTO Batch VALUES ('2017')";
$conn->query($sql);

$conn->close();
?>
