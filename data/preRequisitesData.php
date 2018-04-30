<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO PreRequisites(courseId, preRequisiteId) VALUES ('CSL1', 'EEL1')";
$conn->query($sql);

$sql = "INSERT INTO PreRequisites(courseId, preRequisiteId) VALUES ('CSL2', 'CSL1')";
$conn->query($sql);

$sql = "INSERT INTO PreRequisites(courseId, preRequisiteId) VALUES ('EEL1', NULL)";
$conn->query($sql);

$sql = "INSERT INTO PreRequisites(courseId, preRequisiteId) VALUES ('EEL2', 'EEL1')";
$conn->query($sql);

$sql = "INSERT INTO PreRequisites(courseId, preRequisiteId) VALUES ('MEL1', NULL)";
$conn->query($sql);

$sql = "INSERT INTO PreRequisites(courseId, preRequisiteId) VALUES ('MEL2', 'MEL1')";
$conn->query($sql);


$conn->close();
?>
