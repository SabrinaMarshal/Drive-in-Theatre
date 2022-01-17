<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "theatre") or die("Unable to connect");
?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>List of Theatres</title>
	 <link rel="stylesheet" href="nav.css">
     <style>
     .div{
      background-color: #e3f542;
      height:150px;
      font-size: 30px;
     }
     .div1
     {
       background-color: #42f5b3;
	   font-family:Helvetica;
     }
	 img{
		 height:180px;
		 width:400px;
		 float:right;
		 margin:30px;
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
       <h1>TheatreDrive</h1>
     </div>
     <br>
     <?php
     $sql="select * from theatres";
     $res=mysqli_query($db,$sql);
     while($result = $res->fetch_assoc()) {
     ?>
   <div class = "div1">
   <img src = "images/<?php echo $result['Picture']; ?>">
     <h2>Name: <?php echo $result['Name']; ?></h2>
     <h2>City: <?php echo $result['City']; ?></h2>
     <h2>Phone: <?php echo $result['Phone']; ?></h2>
     <h2>Address: <?php echo $result['Address']; ?></h2>
	 <button onclick="location.href='movielist.php?t=<?php echo $result['Id'];?>'" type="button">Choose movie</button>
	 <br><br> 
   </div>
   <br>
<?php
	 }
	 ?>
   </body>
 </html>