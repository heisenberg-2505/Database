<?php
// php script to create the database schema table department.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Department VALUES ('Computer Science', 'Computer Science')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('Mechanical', 'Mechanical')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('Electrical', 'Electrical')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('E&C', 'Electrical')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('Civil', 'Civil')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('Maths', 'Maths')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('Chemistry', 'Science')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('Biology', 'Science')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('Maths', 'Maths')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('Social Science', 'HSS')";
$conn->query($sql);

$sql = "INSERT INTO Department VALUES ('History', 'HSS')";
$conn->query($sql);


$conn->close();
?>
