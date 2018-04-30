
<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO OfferedFor(courseCode, facultyId, departmentName, batchYear) VALUES ('CSL1', 'cseckn', 'Computer Science', 2015)";
$conn->query($sql);

$conn->close();
?>
