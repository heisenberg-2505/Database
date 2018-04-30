<?php
// PHP script to validate a user when he tries to log in.
include("config.php");
session_start();
$username = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["name"]);
  $password = test_input($_POST["password"]);
}
echo $username;
echo $password;
// Function to format the data from the form.
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$sql = "SELECT username FROM FacultyLogin WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
  $_SESSION["username"] = $username;
  echo "Login Successful";
  //header("Location:afterStudentLogin.php");
}
else {
  echo "Wrong username or password";
  //header("Location:home.php");
}
$conn->close();
?>
