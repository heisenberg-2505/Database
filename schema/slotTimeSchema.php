<?php
// php script to create the database schema table slot.
$servername = "localhost";
$username = "project";
$password = "csl301project";
$dbname = "csl301";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  echo("connection failed: ". $conn->connect_error);
}
$sql = "CREATE TABLE SlotTime (
  id INT NOT NULL,
  day VARCHAR(255) NOT NULL,
  startTime TIME NOT NULL,
  endTime TIME NOT NULL,
  hallNumber INT NOT NULL,
  PRIMARY KEY(day, startTime, hallNumber),
  FOREIGN KEY(id) REFERENCES Slot(id)
)";
if($conn->query($sql) === TRUE) {
  echo "Table SlotTime created successfully\n";
}
else {
  echo "Error creating SlotTime table: " .$conn->error;
}
$conn->close();
?>
