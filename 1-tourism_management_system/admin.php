<?php
session_start();
if(isset($_POST["login"]))
{
$name=$_POST["name"];
$password=$_POST["password"];
include('dbconnection.php');
$sql="select * from admin where name='$name' and password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
echo "<script>window.location.replace('adminpanel.php');</script>";
$_SESSION["password"]=$password;
}
else
{
	echo '
	<div class="alert alert-danger alert-dismissible">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Error:</strong>Username or password wrong
	</div>';
}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
	<div class="row" style="margin-top:150px;">

		<div class="col-md-4 ">
			<form action="admin.php" method="post" autocomplete="off">
				<div class="form-group">
					<h3 class="text-primary">Admin Login</h3>
					<label for="name">Enter your Username</label>
					<input type="text" name="name" placeholder="enter your name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Enter your Password</label>
					<input type="password" name="password" placeholder="enter your password" class="form-control" required>
				</div>
				<input type="submit" class="btn btn-primary" name="login" value="login">

			</form>
		</div>
		<div class="col-md-8">
			<img src="images/admin.png" class="img-responsive">
		</div>
	</div>
	<button onclick="window.location.replace('index.php');" class="btn btn-success" style="margin-left:45%;"><i class="fa-solid fa-house"></i> Back to home</button>
</div>
</body>
</html>