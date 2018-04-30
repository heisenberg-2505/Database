
<?php

$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO Approves(tokenId, instructorId, hodId, advisorId, deanAcademicsId) VALUES (1, 'cseckn', 'csemudgal', 'cseiyengar', 'csepkr')";
$conn->query($sql);


$conn->close();
?>
