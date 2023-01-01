<?php
session_start();
if(!isset($_SESSION["email"]))
{
	echo "<script>window.location.replace('index.php');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Charlis Anjels Tourism Management System</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>

</style>
</head>
<body>
<div class="container-fluid">
	<div class="row" style="padding:8px;background-color:red;">
		<div class="col-md-8 animate__animated animate__fadeInDown">
			<a href="admin.php" style="color:white;"><i class="fa-solid fa-house"></i>Admin Login</a>&nbsp;&nbsp;&nbsp;
			<a href="changepassword.php" style="color:white;">Change Password</a>&nbsp;&nbsp;
			<a href="myprofile.php" style="color:white;">My Profile</a>&nbsp;&nbsp;
			<a href="bookings.php" style="color:white;">My Bookings</a>&nbsp;&nbsp;
			<a href="myprofile.php" style="color:white;">Tickets</a>&nbsp;&nbsp;
			
		</div>
		<div class="col-md-4 animate__animated animate__fadeInDown">
			<span style="color:white;">Welcome :<?php echo $_SESSION["email"]; ?></span>/
			

		</div>
		
	</div>
	<div class="row" style="padding:8px;">
		<div class="col-md-10 animate__animated animate__backInLeft">
			<img src="images/logo.png" style="height:50px;">
		</div>
		<div class="col-md-2 animate__animated animate__backInLeft" style="margin-top:5px;">
			<a href="logout.php" class="btn btn-success">Logout</a>
		</div>
	</div>
	<div class="row">
		<nav class="navbar navbar-inverse text-info bg-success">
			<ul class="nav navbar-nav animate__animated animate__fadeInLeft">
				<li><a href="home.php">Home</a></li>
				<li><a href="aboutus.php">About</a></li>
				<li><a href="package-list.php">Tour Packages</a></li>
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="terms.php">Terms of Use</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="enquiry.php">Enquiry</a></li>


            </ul>
		</nav>
	</div>
</div>

</body>
</html>
