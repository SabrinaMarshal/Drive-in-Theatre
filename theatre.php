<?php
  session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "theatre");

  if (isset($_POST['submit'])) {
	  $name=$_POST['thea_name'];
	  $city=$_POST['city'];
	  $phone=$_POST['phone'];
	  $address=$_POST['address'];
	  
	
	// Get image name
	$image = $_FILES['pic']['name'];

	// image file directory
	$target = "images/".basename($_FILES['pic']['name']);

	$sql = "INSERT INTO theatres ( Name,City,Phone,Address,Picture) 
	VALUES ('$name', '$city','$phone','$address','$image')";
	// execute query
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}else{
		$msg = "Failed to upload image";
	}
	header("Location:newTheatre.php?theatre=success");
}
?>