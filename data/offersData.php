
<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Offers(courseCode, slotID, facultyId, departmentName, cgpa, maxStudents) VALUES ('CSL1', 1, 'cseckn', 'Computer Science', 7, 30)";
$conn->query($sql);

$conn->close();
?>
