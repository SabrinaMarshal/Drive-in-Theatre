<?php
  session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "theatre");

  

  if (isset($_POST['Delete'])) {
   $book_id=$_POST['booking_id'];
   $sql="select Seat_no from booked where booking_id='$book_id'";
	$res=mysqli_query($db, $sql);
	$a = $res->fetch_row();
	$s=$a[0];
	
   $sql="DELETE FROM booked WHERE booking_id='$book_id'";
   $query=mysqli_query($db,$sql);
   
   $free="UPDATE seats SET Availability='free' WHERE Seat_no='$s'";
   mysqli_query($db,$free);
   Header("Location:view_booked.php?delete=success");



  }