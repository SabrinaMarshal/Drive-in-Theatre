<?php
$db = mysqli_connect("localhost", "root", "", "theatre") or die("Unable to connect");
$sql="CREATE TABLE student(
	   Username VARCHAR(20) PRIMARY KEY NOT NULL,
	   Password VARCHAR(30) NOT NULL,
	   Email VARCHAR(30) NOT NULL,
	   Mobile VARCHAR(20) NOT NULL
	   )";
if(mysqli_query($db,$sql)) echo "Student table created successfully";
else echo "Student table not created";
$sql = "INSERT INTO student(Username,Password,Email,Mobile) VALUES ('admin','admin','admin@gmail.com','8245671243')";
mysqli_query($db, $sql);
$sql="CREATE TABLE theatres(
       Id INT(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	   Name VARCHAR(100) NOT NULL,
	   City VARCHAR(20) NOT NULL,
	   Phone VARCHAR(20) NOT NULL,
	   Address VARCHAR(200) NOT NULL,
	   Picture VARCHAR(200) NOT NULL
	   )";
if(mysqli_query($db,$sql)) echo "Theatres table created successfully";
else echo "Theatres table not created";
$pic="drivein1.jpg";
$sql = "INSERT INTO theatres(Id,Name,City,Phone,Address,Picture) VALUES (1,'Sunset Drive in Cinema','Ahmedabad','079 2745 4600','Drive In Road, Ahmedabad, Gujarat 380052','$pic')";
mysqli_query($db, $sql);
$pic="drivein2.jpg";
$sql = "INSERT INTO theatres(Id,Name,City,Phone,Address,Picture) VALUES (2,'Prarthana Beach Drive-in Theatre','Chennai','044 2449 1402','SH 49, Cholamandal Artists Village, Injambakkam, Chennai, Tamil Nadu 600041','$pic')";
mysqli_query($db, $sql);
$pic="drivein3.jpg";
$sql = "INSERT INTO theatres(Id,Name,City,Phone,Address,Picture) VALUES (3,'Under the Stars: Drive-in Movies','Bengaluru','063620 92813','MG Road Bengaluru Karnataka 560001','$pic')";
mysqli_query($db, $sql);
$sql="CREATE TABLE movie(
       Movie_id INT(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	   Theatre_id VARCHAR(2) NOT NULL,
	   Name VARCHAR(20) NOT NULL,
	   Date DATE NOT NULL,
	   Time VARCHAR(20) NOT NULL,
	   Genre VARCHAR(20) NOT NULL,
	   Rating VARCHAR(10) NOT NULL,
	   Description VARCHAR(300) NOT NULL,
	   Cost INT(5) NOT NULL,
	   Picture VARCHAR(200) NOT NULL
	   )";
if(mysqli_query($db,$sql)) echo "Movie table created successfully";
else echo "Movie table not created";
$picture="thappad.jpg";
$sql = "INSERT INTO movie(Movie_id,Theatre_id,Name,Date,Time,Genre,Rating,Description,Cost,Picture) VALUES (1,1,'Thhapad','2020-11-20','5:00 - 8:00','Drama','6.9','Amrita, a young woman, leads a content life with her husband, Vikram. However, their happiness is shattered when he slaps her at an office party causing her to file for a divorce.',250,'$picture')";
mysqli_query($db, $sql);
$picture="bulbbul.jpg";
$sql = "INSERT INTO movie(Movie_id,Theatre_id,Name,Date,Time,Genre,Rating,Description,Cost,Picture) VALUES (2,1,'Bulbbul','2020-11-22','2:00 - 5:00','Horror','6.6','Bulbbul, a child bride, grows into an enigmatic woman ruling over her household, hiding her painful past, as supernatural murders of men plague her village.',200,'$picture')";
mysqli_query($db, $sql);
$sql="CREATE TABLE seats(
       Movie_id VARCHAR(2) NOT NULL,
	   Seat_no VARCHAR(5) NOT NULL,
	   Availability VARCHAR(10) NOT NULL,
	   PRIMARY KEY(Movie_id,Seat_no)
	   )";
if(mysqli_query($db,$sql)) echo "Seats table created successfully";
else echo "Seats table not created";
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'A1','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'A2','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'A3','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'A4','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'A5','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'A6','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'A7','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'A8','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'B1','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'B2','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'B3','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'B4','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'B5','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'B6','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'B7','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'B8','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'C1','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'C2','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'C3','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'C4','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'C5','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'C6','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'C7','free')";
mysqli_query($db, $sql);
$sql = "INSERT INTO seats(Movie_id,Seat_no,Availability) VALUES (1,'C8','free')";
mysqli_query($db, $sql);
$sql="CREATE TABLE booked(
       Booking_id INT(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
       Movie_id VARCHAR(2) NOT NULL,
	   User VARCHAR(20) NOT NULL,
	   Seat_no VARCHAR(5) NOT NULL,
	   Cost INT(5) NOT NULL
	   )";
if(mysqli_query($db,$sql)) echo "Booked table created successfully";
else echo "Booked table not created";
$sql="CREATE TABLE feedback(
       Name VARCHAR(200) NOT NULL,
       feed_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	   requirements VARCHAR(20) NOT NULL,
	   future_use VARCHAR(20) NOT NULL,
	   comments VARCHAR(300) NOT NULL
	   )";
if(mysqli_query($db,$sql)) echo "Feedback table created successfully";
else echo "Feedback table not created";
?>