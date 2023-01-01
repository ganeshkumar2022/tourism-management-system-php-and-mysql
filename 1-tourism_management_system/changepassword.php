<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Profile</title>
</head>
<body>
<?php
include('userheader.php');
?>
<?php
include('dbconnection.php');
$vemail=$_SESSION["email"];
$sql="select * from users where email='$vemail'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row["id"];
?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
<?php
if(isset($_POST["update"]))
{
$password=$_POST["password"];
$sql2="update users set password='$password' where id='$id'";
if(mysqli_query($con,$sql2))
{
	echo '
	<div class="alert alert-success alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Password updated successfully.
</div>
	';
}
else
{
echo "
	<div class='alert alert-danger alert-dismissible fade in'>
	<a href='#' class='close' data-dismiss='alert'>&times;</a>
	<strong>Password not updtaed...</strong>
	</div>

	";	
}
}
?>
 <h2 class="text-primary">Change Password</h2>
 <form action="changepassword.php" method="post">
	<div class="form-group">
		<label for="password">New Password</label>
		<input type="password" name="password" required class="form-control">
	</div>
	<input type="submit" name="update" class="btn btn-primary" value="Update password">
 </form>
</div>
</div>
</div>
<div>
<div style="margin-top:250px;">
<?php

include('footer.php');
?>
</div>
</body>
</html>