<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Student(id, firstName, lastName) VALUES ('15csb1', 'Manish', 'Kumar')";
$conn->query($sql);

$sql = "INSERT INTO Belongs(studentId, batchYear, departmentName) VALUES ('15csb1', 2015, 'Computer Science')";
$conn->query($sql);

$sql = "INSERT INTO StudentLogin(username, password) VALUES ('15csb1', 'iitrpr')";
$conn->query($sql);


$sql = "INSERT INTO Student(id, firstName, lastName) VALUES ('15eeb1', 'Manas', 'Gupta')";
$conn->query($sql);

$sql = "INSERT INTO Belongs(studentId, batchYear, departmentName) VALUES ('15eeb1', 2015, 'Electrical')";
$conn->query($sql);

$sql = "INSERT INTO StudentLogin(username, password) VALUES ('15eeb1', 'iitrpr')";
$conn->query($sql);


$sql = "INSERT INTO Student(id, firstName, lastName) VALUES ('15meb1', 'Shikhar', 'Jaiswal')";
$conn->query($sql);

$sql = "INSERT INTO Belongs(studentId, batchYear, departmentName) VALUES ('15meb1', 2015, 'Mechanical')";
$conn->query($sql);

$sql = "INSERT INTO StudentLogin(username, password) VALUES ('15meb1', 'iitrpr')";
$conn->query($sql);


$sql = "INSERT INTO Student(id, firstName, lastName) VALUES ('14csb1', 'Vishal', 'Singh')";
$conn->query($sql);

$sql = "INSERT INTO Belongs(studentId, batchYear, departmentName) VALUES ('14csb1', 2014, 'Computer Science')";
$conn->query($sql);

$sql = "INSERT INTO StudentLogin(username, password) VALUES ('14csb1', 'iitrpr')";
$conn->query($sql);



$conn->close();
?>
