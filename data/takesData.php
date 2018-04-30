
<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Takes(studentId, courseCode,  grade, semester, year) VALUES ('15csb1', 'CSL1', NULL, 'Fall', 2018)";
$conn->query($sql);

$sql = "INSERT INTO Takes(studentId, courseCode,  grade, semester, year) VALUES ('15csb1', 'EEL1', 9, 'Spring', 2017)";
$conn->query($sql);



$conn->close();
?>
