<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Course(name, code, lecture, tutorial, practical) VALUES ('Machine Learning', 'CSL1', 3, 1, 0)";
$conn->query($sql);

$sql = "INSERT INTO Course(name, code, lecture, tutorial, practical) VALUES ('Artificial Intelligence', 'CSL2', 4, 0, 0)";
$conn->query($sql);

$sql = "INSERT INTO Course(name, code, lecture, tutorial, practical) VALUES ('Digital Electronics', 'EEL1', 3, 0, 2)";
$conn->query($sql);

$sql = "INSERT INTO Course(name, code, lecture, tutorial, practical) VALUES ('Digital Ciruits', 'EEL2', 3, 0, 2)";
$conn->query($sql);

$sql = "INSERT INTO Course(name, code, lecture, tutorial, practical) VALUES ('Fluid Mechanics', 'MEL1', 3, 1, 0)";
$conn->query($sql);

$sql = "INSERT INTO Course(name, code, lecture, tutorial, practical) VALUES ('Material Science', 'MEL2', 3, 1, 0)";
$conn->query($sql);


$conn->close();
?>
