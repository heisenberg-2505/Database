
<?php

include("login/config.php");
session_start();
if(!isset($_SESSION['username'])){

  $username  = $_SESSION['username'];
  $sql = "SELECT cgpa FROM student WHERE id ='$username'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    $row=$result->fetch_assoc();
    echo "Current CGPA is : $row['cgpa']";

  }
  else {
    echo "Invalid user ";
  }
}

$conn->close();
?>
