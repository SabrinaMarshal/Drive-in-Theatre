<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login2.php');
$username=$_SESSION['username'];
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="nav.css">
<style>
body{
	background-color:#e6e6e6;
}
.bg{
  background: linear-gradient(87deg, #172b4d 0, #1a174d 100%)
}

</style>
<script type="text/javascript" >

function Validate() {
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
if (password.value != password_confirm.value) {
    alert("The two passwords do not match");
    return false;
  }
  }
  </script>
</head>
<body>
<body>
<div class="topnav">
      <a  href="Home.html">Home Page</a>
      <a  href="theatrelist.php">Book movie</a>
      <a  href="view_booked.php">Delete booking</a>
	  <a href="profile.php">Profile</a>
      <div class="topnav-right">
	  <a href="about.html">About Us</a>
      <a href="feedbackForm.php">Give Feedback</a>
      <a href="logout.php">Logout</a>
      </div>
</div>
<div class="container">
    <div class="bg">
    <h1 style="color:white;padding:15px;">Edit Profile</h1>
	</div>
	<div class="row">
      <div class="col-md-9 personal-info">
        <form class="form-horizontal" role="form" onSubmit="return Validate()" action="" name="vform" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label">Email address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Mobile:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="mobile">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password_confirm">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
$db = mysqli_connect("localhost", "root", "", "theatre") or die("Unable to connect");
$pass=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
if($pass)
{
$reg="UPDATE student SET Password='$pass' where Username='$username'";
mysqli_query($db,$reg);
}
if($email)
{
$reg="UPDATE student SET Email='$email' where Username='$username'";
mysqli_query($db,$reg);
}
if($mobile)
{
$reg="UPDATE student SET Mobile='$mobile' where Username='$username'";
mysqli_query($db,$reg);
}
header("location:profile.php");
}
?>