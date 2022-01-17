<?php
  session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "theatre");

  

  if (isset($_POST['submit'])) {
      $name=$_POST['movie_name'];
      $date=$_POST['date'];
      $time=$_POST['time'];
	  $theatre=$_POST['theatre'];
	  $genre=$_POST['genre'];
      $rating=$_POST['rating'];
      $description=$_POST['description'];
      $cost=$_POST['cost'];
     
      $id="Select * from theatres where Name='$theatre'";
      $result=mysqli_query($db,$id);
while($rows = $result->fetch_assoc()){
$theatre_id=$rows['Id'];
}
echo   $theatre_id;
  
$image = $_FILES['pic']['name'];
	// image file directory
	$target = "images/".basename($_FILES['pic']['name']);

	$sql = "INSERT INTO movie( Theatre_id,Name,Date,Time,Genre,Rating,Description,Cost,Picture) 
	            VALUES ('$theatre_id','$name','$date','$time','$genre','$rating','$description','$cost','$image')";
	// execute query
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['pic']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}else{
		$msg = "Failed to upload image";

    }

    $mov="Select * from movie where Name='$name'";
    $result=mysqli_query($db,$mov);
while($rows = $result->fetch_assoc()){
$movie_id=$rows['Movie_id'];
}
  

    $sql="CREATE TABLE seats(
        Movie_id VARCHAR(2) NOT NULL,
   Seat_no VARCHAR(5) NOT NULL,
   Availability VARCHAR(10) NOT NULL,
   PRIMARY KEY(Movie_id,Seat_no)
   )";
 if(mysqli_query($db,$sql)) echo "Seats table created successfully";
 else echo "Seats table not created";
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','A1','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','A2','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','A3','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','A4','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','A5','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','A6','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','A7','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','A8','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','B1','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','B2','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','B3','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','B4','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','B5','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','B6','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','B7','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','B8','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','C1','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','C2','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','C3','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','C4','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','C5','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','C6','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','C7','free')";
 mysqli_query($db, $sql);
 $sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES ('$movie_id','C8','free')";
 mysqli_query($db, $sql);
 header("Location:newMovie.php?movie=success");
 
}


?>