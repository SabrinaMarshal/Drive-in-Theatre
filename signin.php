<?php
$username=$_POST['username'];
$email=($_POST['email']);
$password=($_POST['password']);
$mobile=($_POST['mobile']);
include("DBconnection.php");
	$sql ="INSERT INTO student(Username,Email,Password,Mobile) VALUES('$username','$email','$password','$mobile')";
	if ($connect->query($sql) === TRUE)
	{
		echo '<script>alert("Sign in Successful!");</script>';

		?>
	<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css">
<title> Login</title>
</head>
<body id="stud">
<center><h1 id="font2" >Login</h1></center>
<table id="table2" align="center" border="4" rules="none" cellpadding="12" cellspacing="50" >
<form action="Login.php" method="POST">
<tr>
<td>
Username:</td><td><input type="text" id="S_username" name="S_username" placeholder="Enter Username" required></td>
</tr>
<tr>
<td>
Password:</td>
<td><input type="text" id="S_password" name="S_password" placeholder="Enter Password" required></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" id="btn" value="Login" style="width:130px; height:35px; font-size:20px; border: 1px #f1f1f1; background:#4CAF50; color:white; border-radius:4px;"></td>
</tr>
</form>
</table>
</body>
</html>

<?php
	}
	$connect->close();
	header('location:login2.php');
?>

