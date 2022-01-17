<?php
session_start();
$m=$_SESSION['movie_id'];
$user=$_SESSION['username'];
$db = mysqli_connect("localhost", "root", "", "theatre") or die("Unable to connect");
$sql="select Cost from movie where Movie_id='$m'";
$res=mysqli_query($db, $sql);
$a = $res->fetch_row();
$cost=$a[0];
$_SESSION['cost']=$cost;
$sum=0;
$count=0;
if (isset($_POST['book'])) {
$booked_seats=$_POST['seat'];
$_SESSION['booked_seats']=$booked_seats;
$N = count($booked_seats);
for($i=0; $i < $N; $i++)
{
	$sum+=$cost;
	$count++;
}
$_SESSION['sum']=$sum;
$_SESSION['count']=$count;
header('location:payment.php');
}
?>