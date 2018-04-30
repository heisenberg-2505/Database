<?php
// PHP script to validate a user when he tries to log in.
include("login/config.php");
session_start();
if(!isset($_SESSION['username'])){


}
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Student-Login</title>
	<link rel="stylesheet" type="text/css" href="styles/register.css">
</head>
<body>
<div class  = "header" id = "myheader">
  <h1> Course Management Portal </h1>
</div>
<p style="font-size:55px;font-weight: 400;color: black;">Welcome <?php echo $_SESSION["username"]."shikhar" ?></p>
<div class = "user">
<a href="cgpa.php" class="linktologin">CGPA</a>
<a href="enrolledCourses.php" class="linktologin">Enrolled Courses</a>
<a href="raiseToken.php" class = "linktologin" > Raise Token </a>
</div>
<a class='logout' href="logout.php">Logout </a>
<br><br>
<?php echo $msg;?>
</body>
</html>
