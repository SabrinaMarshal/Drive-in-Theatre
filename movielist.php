<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "theatre") or die("Unable to connect");
if(!isset($_SESSION['username']))
header('location:login2.php');
if(!$_GET['t'])
header('location:theatrelist.php');
$t=$_GET['t'];
 ?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>List of Movies</title>
	 <link rel="stylesheet" href="nav.css">
     <style>
      .div
      {
        background-color:  #e3f542;
        font-size: 30px;
        height: 150px;
      }
     .div1
     {
       background-color: #f5e642;
     }
	 img{
		 float:right;
		 height:300px;
		 width:200px;
		 margin:10px;
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
     <div class = "div">
       <h1>MovieDrive</h1>
       </div>
       <br>
	  <?php
     $sql="select * from movie where Theatre_id='$t'";
     $res=mysqli_query($db,$sql);
     while($result = $res->fetch_assoc()) {
     ?>
     <div class = "div1">
       <img src = "images/<?php echo $result['Picture']; ?>">
       <h2>Name: <?php echo $result['Name']; ?></h2>
	   <h2>Date: <?php echo $result['Date']; ?></h2>
	   <h2>Time: <?php echo $result['Time']; ?></h2>
       <h2>Genre: <?php echo $result['Genre']; ?></h2>
	   <h2>Rating: <?php echo $result['Rating']; ?></h2>
	   <h2>Description: <?php echo $result['Description']; ?></h2>
	   <h2>Cost: <?php echo $result['Cost']; ?></h2><br>
	   <button onclick="location.href='booking.php?m=<?php echo $result['Movie_id'];?>'" type="button">Book seats</button>
	 <br><br>
     </div>
     <br>
	 <?php
	 }
	 ?>
   </body>
 </html>
