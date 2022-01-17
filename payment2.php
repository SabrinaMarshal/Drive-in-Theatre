
<?php
session_start();
if(!isset($_SESSION['username']))
header('location:login2.php');
$db = mysqli_connect("localhost", "root", "", "theatre");

$m=$_SESSION['movie_id'];
$user=$_SESSION['username'];
$seats=$_SESSION['booked_seats'];
$cost=$_SESSION['cost'];
$N = count($seats);
for($i=0; $i < $N; $i++)
{
	$sql1="UPDATE seats SET availability='booked' WHERE seat_no='$seats[$i]' and Movie_id='$m'";
	mysqli_query($db, $sql1);
	$sql2="INSERT INTO booked(Movie_id,User,Seat_no,Cost) VALUES('$m','$user','$seats[$i]','$cost')";
	mysqli_query($db, $sql2);
}
unset($_SESSION['movie_id']);
unset($_SESSION['booked_seats']);
unset($_SESSION['cost']);
unset($_SESSION['count']);
unset($_SESSION['sum']);
header('location:Home.html');
?>