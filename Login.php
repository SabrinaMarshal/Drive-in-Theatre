<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
include("DBconnection.php");
$username= $_POST['S_username'];
$password= $_POST['S_password'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($connect,$username);
$password=mysqli_real_escape_string($connect,$password);
$result=mysqli_query($connect,"select * from student where Username='$username' and Password='$password'") 
			or die("Failed to query database".mysqli_error($connect));
$row=mysqli_fetch_array($result);
if($row['Username']==$username && $row['Password']==$password){
	  $_SESSION['username']=$username;
	  header('location:Home.html');
  if($username=='admin')
  {header('location:newTheatre.php');}
}
else
{
header("Location:login2.php?login=fail");}
$connect->close();
?>
