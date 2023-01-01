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
		<li><a href=""><i class="fa-sharp fa-solid fa-list-check"></i> Manage Bookings</a></li>
		<li><a href=""><i class="fa-solid fa-file"></i> Manage Issues</a></li>
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
			<li><a href="#">Home</a></li>
			<li><a href="#">Tour packages</a></li>
			
		</ul>
		<div class="row">
			<?php
				if(isset($_POST["submit"]))
				{
					$target_dir="tourimages/";
					$file_path=basename($_FILES["package_images"]["name"]);
					$target_file=$target_dir.$file_path;
					if(move_uploaded_file($_FILES["package_images"]["tmp_name"],$target_file))
					{
						$name=$_POST["package_name"];
					$type=$_POST["package_type"];
					$location=$_POST["package_location"];
					$price=$_POST["package_price"];
						include('dbconnection.php');
						$sql="insert into tour (package_name,package_type,package_location,package_price,package_image)
						values ('$name','$type','$location','$price','$target_file')";

						if(mysqli_query($con,$sql))
						{
							echo '
							<div class="alert alert-success alert-dismissible">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Success:</strong>Tour packages added
							</div>

							';
						}


					}
					else
					{
						echo "file not uploaded";
					}

				}


				?>
			<form action="tour_edit.php" method="post" enctype="multipart/form-data">
				<h2 class="text-primary">Tour Packages</h2>
				<div class="form-group">
					<label for="name">Package name</label>
					<input type="text" name="package_name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Package type</label>
					<input type="text" name="package_type" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Package location</label>
					<input type="text" name="package_location" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Package price</label>
					<input type="text" name="package_price" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Package images</label>
					<input type="file" name="package_images" class="form-control" required>
				</div>
				<input type="submit" class="btn btn-primary" value="Package add" name="submit">
			</form>
		</div>
	  
	
</div>
	</div>
   </div>
  </div>
</body>
</html>