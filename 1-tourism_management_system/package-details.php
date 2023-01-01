<?php
session_start();
if(isset($_POST["submit"]))
{
	if(!isset($_SESSION["email"]))
	{
		echo '
		<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Alert!</strong>Login and after book the tour.
        </div>

		';

	}
	else
	{
		include('dbconnection.php');
		$email=$_SESSION["email"];
		$sql="select name,email from users where email='$email'";
		$result=mysqli_query($con,$sql);
		$users=mysqli_fetch_assoc($result);
		$username=$users["name"];
		$useremail=$users["email"];
		$id=$_GET["pid"];
		$sql2="select package_name,package_price from tour where id='$id'";
		$result2=mysqli_query($con,$sql2);
		$packages=mysqli_fetch_assoc($result2);
		$package_name=$packages["package_name"];
		$package_price=$packages["package_price"];
		$from_date=$_POST["from"];
		$to_date=$_POST["to"];
		$date_now=date("d-m-Y h:i:sa");
		$sql4="insert into bookings (username,useremail,package_name,package_price,from_date,to_date,booking_date) values ('$username','$useremail','$package_name','$package_price','$from_date','$to_date','$date_now')";
		if(mysqli_query($con,$sql4))
		{
			echo '
		<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong>You booked your tour successfully.
        </div>

		';


		}
		else
		{
			echo "<script>alert('tour not booking');</script>";
		}
		

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Package Details</title>
</head>
<body>
<?php
include('header.php');
?>
<?php
	include('dbconnection.php');
	$pid=$_GET["pid"];
	$sql="select * from tour where id='$pid'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
		?>

<form action="package-details.php?pid=<?php echo $row['id']; ?>" method="post">
<div class="form-group">
<label for="from">From</label>
<input type="date" name="from" id="from" placeholder="dd-mm-yyyy" class="form-control" required>
</div>
<div class="form-group">
<label for="to">To</label>
<input type="date" name="to" id="to" placeholder="dd-mm-yyyy" class="form-control" required>
</div>


	
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
 				<a href="package-details.php?pid=<?php echo $row['id']; ?>"><button type="submit" name="submit" class="btn btn-success">Book Now</button></a>
 			</th>
 		</tr>
</table>
</form>
<h3>Experience details</h3>
<p>Visit the World wonderful places in a low of cost. It is a good oppurtunity. So don't miss it.
</p>
<?php
include('footer.php');
?>
</body>
</html>