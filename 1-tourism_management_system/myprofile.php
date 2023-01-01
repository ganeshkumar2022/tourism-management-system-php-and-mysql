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
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$sql2="update users set name='$name',mobileno='$mobile',email='$email' where id='$id'";
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
	<div class='alert alert-danger fade in'>
	<a href='#' data-dismiss='alert'>&times;</a>
	<strong>Not Updtaed...</strong>
	</div>

	";	
}
}
?>
 <h3 class="text-primary">My Profile</h3>
 <form action="myprofile.php" method="post">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" value="<?php echo $row['name']; ?>" required class="form-control">
	</div>
	<div class="form-group">
		<label for="mobile">Mobile</label>
		<input type="text" name="mobile" value="<?php echo $row['mobileno']; ?>" maxlength="10" minlength="10" pattern="[0-9]{10}" required class="form-control">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" value="<?php echo $row['email']; ?>" readonly required class="form-control">
	</div>
	<input type="submit" name="update" class="btn btn-primary" value="Update">
 </form>
</div>
</div>
</div>
<div>
<div style="margin-top:100px;">
<?php

include('footer.php');
?>
</div>
</body>
</html>