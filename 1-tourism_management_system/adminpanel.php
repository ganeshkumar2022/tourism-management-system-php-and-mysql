<?php
session_start();
if(!isset($_SESSION["password"]))
{
header("Location:home.php");
}
include('dbconnection.php');

//user count

$sql="select count(email) as em from users";
$result=mysqli_query($con,$sql);
$user_count=mysqli_fetch_assoc($result);

//enquiry count

$sql2="select count(email) as em from enquiry";
$result2=mysqli_query($con,$sql2);
$enquiry_count=mysqli_fetch_assoc($result2);

$sql3="select count(package_name) as em from tour";
$result3=mysqli_query($con,$sql3);
$package_count=mysqli_fetch_assoc($result3);

$sql4="select count(id) as em from bookings";
$result4=mysqli_query($con,$sql4);
$bookings_count=mysqli_fetch_assoc($result4);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
li a
{
	color:white;
}
.funs a:hover
{
	color:white;
}
.tbl
{
	height:200px;
	width:200px;
	background-color:green;
}
.one
{
	margin-left:20px;
}
.card
{
	height:210px;
	width:210px;
	color:white;
}

</style>
<body>
	<div class="container-fluid">
	 <div class="row">
	 	<div class="col-sm-2" style="margin-left:-15px;">
	  <ul class="nav nav-pills nav-stacked bg-primary" style="height:100vh">
	  	<li><h3 class="">Tourism management</h3></li>
	  	<hr>
	  	<li><a href=""><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
		<li><a href="tour_edit.php"><i class="fa-sharp fa-solid fa-bars"></i> Tour Packages</a></li>
		<li><a href="manage_users.php"><i class="fa-solid fa-users"></i> Manage Users</a></li>
		<li><a href="manage_bookings.php"><i class="fa-sharp fa-solid fa-list-check"></i> Manage Bookings</a></li>
		<li><a href="manage_enquiries.php"><i class="fa-sharp fa-solid fa-file-invoice"></i> Manage Enquiries</a></li>

	 </ul>
	</div>
	<div class="col-sm-10" style="height:100vh;">
		
			
			<table>
			<tr>
			<th> 
			   <img src="images/logo.png" width="700px" alt="logo error" class="img-responsive">
			 </th>
			 <th>
				  <div class="dropdown">
				  <button class="btn btn-primary btn-lg bt dropdown-toggle" data-toggle="dropdown" style=""><img src="images/users.png" style="height:50px;width:50px;">Admin&nbsp;&nbsp;<span class="caret"></span></button>
				   <ul class="dropdown-menu">
					<li><a href="#">Update Password</a></li>
					<li class="divider"></li>
					<li><a href="logout.php">Logout</a></li>
				   </ul>

		           </div>
		      </th>
		      </tr>
		</table>
		<ul class="breadcrumb funs" style="text-decoration:none;background-color:blue;opacity:0.7;color:white;">
			<li><a href="#">Home</a></li>
			
		</ul>
		<div class="row" class="card-view">
		<div class="col-sm-2 card" style="background-color:Fuchsia">
			<center>
			<br>
			<i class="fa-solid fa-user" style="font-size:60px;"></i>
			<h3>User</h3>
			<h3><?php echo $user_count["em"]; ?></h3>
		    </center>
		</div>
		<div class="col-sm-1">
		</div>
		<div class="col-sm-2 card" style="background-color:Aqua;">
			<center>
			<br>
			<i class="fa-solid fa-clipboard" style="font-size:60px;"></i>
			<h3>Bookings</h3>
			<h3><?php echo $bookings_count["em"]; ?></h3>
		    </center>
		</div>
		<div class="col-sm-1">
		</div>
		<div class="col-sm-2 card" style="background-color:LawnGreen;">
			<center>
			<br>
			<i class="fa-solid fa-folder-open" style="font-size:60px;"></i>
			<h3>Enquiries</h3>
			<h3><?php echo $enquiry_count["em"]; ?></h3>
		    </center>
		</div>
		<div class="col-sm-1">
		</div>
		<div class="col-sm-2 card" style="background-color:OrangeRed;">
			<center>
			<br>
			<i class="fa-solid fa-briefcase" style="font-size:60px;"></i>
			<h3>Total packages</h3>
			<h3><?php echo $package_count["em"]; ?></h3>
		    </center>
		</div>
	     </div>
	  </div>
	</div>
   </div>
  </div>
</body>
</html>