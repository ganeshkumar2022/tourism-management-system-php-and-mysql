<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enquiry Page</title>
</head>
<body>
<?php
include('header.php');
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="row">
	<div class="col-md-4">
	<h3 class="animate__animated animate__slideInLeft">Enquiry Form</h3>
	<?php
if(isset($_POST["submit"]) && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["mobile"]) && isset($_POST["description"]))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$description=$_POST["description"];
	include('dbconnection.php');
	$sql="insert into enquiry (name,email,mobileno,description) values ('$name','$email','$mobile','$description')";
	if(mysqli_query($con,$sql))
	{

		echo '
		<div class="alert alert-success alert-dismissible fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success!</strong>Enquiry Successfully submitted

		</div>';

	}
}

?>
	<div class="form-group">
	<label for="name">Enter your name</label>
	<input type="text" name="name" placeholder="Full Name" class="form-control" required>
	</div>

	<div class="form-group">
	<label for="email">Enter your email id</label>
	<input type="email" name="email" placeholder="Valid Email id" class="form-control" required>
	</div>

	<div class="form-group">
	<label for="mobile">Enter your mobile no</label>
	<input type="text" name="mobile" maxlength="10" minlength="10" placeholder="10 Digit mobile Number" pattern="[0-9]{10}" class="form-control" required>
	</div>

	<div class="form-group">
	<label for="description">Description</label>
	<textarea name="description" class="form-control" rows="5" cols="10" required></textarea>
	</div>
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	<hr>
</div>
<div class="col-md-8">
    	<img src="images/enquiry.png" class="animate__animated img-responsive animate__zoomIn"> 

    </div>
</div>	
</form>

</div>
<?php
include('footer.php');
?>
</body>
</html>