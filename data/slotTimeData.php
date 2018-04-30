<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO SlotTime(id, day, startTime, endTime, hallNumber) VALUES (1, 'Monday', '10:00:00', '10:50:00', 1)";
$conn->query($sql);

$sql = "INSERT INTO SlotTime(id, day, startTime, endTime, hallNumber) VALUES (1, 'Tuesday', '09:00:00', '9:50:00', 1)";
$conn->query($sql);

$sql = "INSERT INTO SlotTime(id, day, startTime, endTime, hallNumber) VALUES (2, 'Monday', '10:00:00', '10:50:00', 2)";
$conn->query($sql);

$sql = "INSERT INTO SlotTime(id, day, startTime, endTime, hallNumber) VALUES (3, 'Monday', '10:00:00', '10:50:00', 3)";
$conn->query($sql);

$sql = "INSERT INTO SlotTime(id, day, startTime, endTime, hallNumber) VALUES (4, 'Tuesday', '11:00:00', '11:50:00', 1)";
$conn->query($sql);

$sql = "INSERT INTO SlotTime(id, day, startTime, endTime, hallNumber) VALUES (5, 'Monday', '11:00:00', '11:50:00', 2)";
$conn->query($sql);

$conn->close();
?>
