<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Performance(id, semester, year, credits, sgpa) VALUES ('15csb1', 'Fall', 2017, 18, 8.5)";
$conn->query($sql);

$sql = "INSERT INTO Performance(id, semester, year, credits, sgpa) VALUES ('15csb1', 'Spring', 2017, 20, 8.0)";
$conn->query($sql);

$sql = "INSERT INTO Performance(id, semester, year, credits, sgpa) VALUES ('15meb1', 'Fall', 2017, 21, 8.5)";
$conn->query($sql);

$sql = "INSERT INTO Performance(id, semester, year, credits, sgpa) VALUES ('15meb1', 'Spring', 2017, 20, 8.0)";
$conn->query($sql);

$sql = "INSERT INTO Performance(id, semester, year, credits, sgpa) VALUES ('15eeb1', 'Fall', 2017, 20, 8.5)";
$conn->query($sql);

$sql = "INSERT INTO Performance(id, semester, year, credits, sgpa) VALUES ('15eeb1', 'Spring', 2017, 22, 8.0)";
$conn->query($sql);

$sql = "INSERT INTO Performance(id, semester, year, credits, sgpa) VALUES ('14csb1', 'Fall', 2017, 20, 8.5)";
$conn->query($sql);

$sql = "INSERT INTO Performance(id, semester, year, credits, sgpa) VALUES ('14csb1', 'Spring', 2017, 21, 8.0)";
$conn->query($sql);


$conn->close();
?>
