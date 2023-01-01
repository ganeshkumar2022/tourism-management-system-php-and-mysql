<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Bookings</title>
</head>
<body>
<?php
include('userheader.php');
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="text-primary">My Bookings</h3>
			<table class="table table-responsive table-bordered">
				<tr class="bg-primary">
					<th>Package name</th>
					<th>from_date</th>
					<th>to_date</th>
					<th>Package price</th>
					<th>Booking</th>
				</tr>
				<?php
				include('dbconnection.php');
				$email=$_SESSION["email"];
				$sql="select * from bookings where useremail='$email'";
				$result=mysqli_query($con,$sql);
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						?>
						<tr>
							<td><?php echo $row["package_name"]; ?></td>
							
							<td><?php echo $row["from_date"]; ?></td>
							<td><?php echo $row["to_date"]; ?></td>
							<td><?php echo $row["package_price"]; ?></td>
							<td><div class="label label-warning"><?php echo $row["result"]; ?></div></td>
						</tr>

						<?php
					}
				}


				?>
			</table>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>
</body>
</html>