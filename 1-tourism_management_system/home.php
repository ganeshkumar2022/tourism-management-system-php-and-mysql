<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<!-- aos -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
</head>
<body>
<?php
include('header.php');
?>

<div class="row animate__animated animate__fadeInDown">
	<div class="col-md-1 text-right">
		<i class="fa-solid fa-dollar-sign text-primary" style="font-size:80px;"></i>
	</div>
	<div class="col-md-3">
		<h3 class="text-success" style="font-weight:bold;">Upto 50% offer</h3>
		<h4 class="text-info ">Travel Smart</h4>
	</div>
	
	<div class="col-md-1 text-right">
		<i class="fa-solid fa-h text-primary" style="font-size:80px;"></i>
	</div>
	<div class="col-md-3">
		<h3 class="text-success" style="font-weight:bold;">Upto 50% offer</h3>
		<h4 class="text-info ">On Hotel Booking</h4>
	</div>
	
	<div class="col-md-1 text-right">
		<i class="fa-solid fa-mobile-screen-button text-primary" style="font-size:80px;"></i>
	</div>
	<div class="col-md-3">
		<h3 class="text-success" style="font-weight:bold;">Flat Upto 50% offer</h3>
		<h4 class="text-info ">Our App Offers</h4>
	</div>
 </div>
 <div class="container">
 <div class="row">
 	
 	<h2 style="color:green;margin-left:20px;">Package List</h2>
 	<?php
	include('dbconnection.php');
	$sql="select * from tour limit 3";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			?>
<table class="table table-responsive">
	  <tr>
 			<th class="col-md-2">
 				<img src="<?php echo $row["package_image"];?>" class="animate__animated animate__slideInLeft">
 			</th>
 			<th class="col-md-8 animate__animated animate__slideInUp">
 				<h3 class="text-success">Package Name: <?php echo $row["package_name"];?></h3>
 				<h6>Package type : <?php echo $row["package_type"];?></h6><br>
 				<p>Package Location: <?php echo $row["package_location"];?></p><br>
 				<p>Features : Free Wi-fi, Free Breakfast, Free Pickup and drop facility 3day trip</p>
 			</th>
 			<th class="col-md-2 animate__animated animate__slideInRight">
 				<h2><?php echo $row["package_price"];?></h2>
 				<a href="package-details.php?pid=<?php echo $row['id']; ?>"><button class="btn btn-success">Details</button></a>
 			</th>
 		</tr>
</table>


<?php
		}

	}
	?>
 <a href="package-list.php" class=""><button class="btn btn-success animate__animated animate__fadeInLeft">View Full Package Details</button></a>
 </div>
 <br>
 <br>
 <div class="row animate__animated animate__fadeInDown">
	<div class="col-md-1 text-right">
		<i class="fa-solid fa-book text-primary" style="font-size:80px;"></i>
	</div>
	<div class="col-md-3">
		<h2 class="text-success" style="font-weight:bold;">1000</h2>
		<h4 class="text-info ">Enquiries</h4>
	</div>
	
	<div class="col-md-1 text-right">
		<i class="fa-solid fa-user text-primary" style="font-size:80px;"></i>
	</div>
	<div class="col-md-3">
		<h2 class="text-success" style="font-weight:bold;">2500</h2>
		<h4 class="text-info ">Registered Users</h4>
	</div>
	
	<div class="col-md-1 text-right">
		<i class="fa-solid fa-square-poll-vertical text-primary" style="font-size:80px;"></i>
	</div>
	<div class="col-md-3">
		<h2 class="text-success" style="font-weight:bold;">500+</h2>
		<h4 class="text-info ">Booking</h4>
	</div>
 </div>
</div>
<br>
<br>
<?php
include('footer.php');
?>
</div>
</body>
</html>