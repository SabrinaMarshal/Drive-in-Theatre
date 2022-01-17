<?php
$connect=new mysqli("localhost","root","","theatre");
if(!$connect)
{
	die('Could not connect'.mysqli_error());
}
?>