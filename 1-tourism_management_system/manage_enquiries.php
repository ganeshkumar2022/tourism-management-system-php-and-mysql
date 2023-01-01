<?php
session_start();
if(!isset($_SESSION["password"]))
{
header("Location:home.php");
}
include('dbconnection.php');

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
	  	<li><a href="adminpanel.php"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
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
					<li><a href="update_password.php">Update Password</a></li>
					<li class="divider"></li>
					<li><a href="logout.php">Logout</a></li>
				   </ul>

		           </div>
		      </th>
		      </tr>
		</table>
		<ul class="breadcrumb funs" style="text-decoration:none;background-color:blue;opacity:0.7;color:white;">
			<li><a href="adminpanel.php">Home</a></li>
			<li><a href="">Manage enquiries</a></li>
			
		</ul>
		<table class="table table-responsive table-bordered">
					<tr class="bg-primary">
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>mobileno</th>
						<th>description</th>
					</tr>
		<?php
		include('dbconnection.php');
		$sql="select * from enquiry";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
			?>
			<tr>
				<td><?php echo $row["id"];?></td>
				<td><?php echo $row["name"];?></td>
				<td><?php echo $row["email"];?></td>
				<td><?php echo $row["mobileno"];?></td>
				<td><?php echo $row["description"];?></td>
			</tr>


				


<?php
			}

		}

		?>
	  
	</table>
      </div>
	</div>
   </div>
  </div>
</body>
</html>