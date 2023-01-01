<?php
include('dbconnection.php');
$id=$_GET['id'];
$sql2="update bookings set result='booking confirmed' where id=$id";
if(mysqli_query($con,$sql2))
{
	echo "<script>alert('Bookings approved');window.location.replace('manage_bookings.php')</script>";
}


?>