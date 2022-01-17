<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login2.php');
$db = mysqli_connect("localhost", "root", "", "theatre") or die("Unable to connect");
$m=$_GET['m'];
$_SESSION['movie_id']=$m;
?>
<html>
<head>
<title>Book seats</title>
<link rel="stylesheet" href="nav.css">
<style>
body
{
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  text-align:center;
}

h1{
	margin-top:30px;
}

.screen
{
  width:100%;
  height:20px;
  background:#4388cc;
  color:#fff;
  line-height:20px;
  font-size:15px;
}

table,td,th{
	margin-top:50px;
	margin-left:550px;
	margin-bottom:50px;
}

table
{
  text-align:center;
}

input[type=checkbox] {
    
    margin-right:30px;
	margin-top:25px;
}

input[type=checkbox]:before {
    content: "";
    width: 25px;
    height: 25px;
    display: inline-block;
    vertical-align:middle;
    text-align: center;
    box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
    
}

input[type=checkbox].free:before{
	background-color:#ccc;
	cursor:pointer;
}

input[type=checkbox].booked:before{
	background-color:red;
	pointer-events: none;
}

input[type=checkbox]:checked:before {
    background-color:Green;
}

</style>
</head>
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
<h1>Choose seats</h1>
<form action="booking2.php" method="post">
<div class="seatStructure">
<table id="seatsBlock">
 <p id="notification"></p>
  <tr>
    <td colspan="14"><div class="screen">SCREEN</div></td>
    <br/>
  </tr>
  
  <tr style="text-align:\left;">
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
</tr>
<?php $sql="select availability from seats where Movie_id='$m'";
	$res=mysqli_query($db, $sql);
?>
<tr>
    <td>A</td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="A1" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="A2" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="A3" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="A4" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="A5" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="A6" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="A7" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="A8" <?php if($s['availability']=='booked') echo "disabled"?>></td>
  </tr>
  
  <tr>
    <td>B</td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="B1" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="B2" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="B3" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="B4" <?php if($s['availability']=='booked') echo "disabled"?>></td>
	<td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="B5" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="B6" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="B7" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="B8" <?php if($s['availability']=='booked') echo "disabled"?>></td>
  </tr>
  
  <tr>
    <td>C</td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="C1" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="C2" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="C3" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="C4" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="C5" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="C6" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="C7" <?php if($s['availability']=='booked') echo "disabled"?>></td>
    <td><input type="checkbox" class="seats <?php $s = $res->fetch_assoc();echo $s['availability'] ?>" name="seat[]" value="C8" <?php if($s['availability']=='booked') echo "disabled"?>></td>
</tr>
  
</table>
<br><button type="submit" name="book">BOOK SEATS</button>
</form>
</body>
</html>