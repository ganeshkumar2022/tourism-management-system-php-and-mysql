<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirmation</title>
</head>
<body>
<?php
include('header.php');
?>
</div>
<img src="images/tourism.jpg" style="height:260px;width:100vw;margin-top:-30px;" class="img-responsive">
<div class="container">
<div class="row">
	<h2 class="text-primary" style="font-weight:bold;">Confirmation</h2>
	<?php
	if(isset($_POST["signup"]))
	{
		include('dbconnection.php');
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$mobile=$_POST["mobile"];
		$sql="insert into users (name,email,mobileno,password) values ('$name','$email','$mobile','$password')";
		$sql2="select email from users where email='$email'";
		$result=mysqli_query($con,$sql2);
		if(mysqli_num_rows($result)>0)
		{
			echo "<h3 class='well' style='border:0;border-left:5px solid tomato;color:red;'><strong>Error:</strong>User already exists</h3>";

		}
		else
		{
		if(mysqli_query($con,$sql))
		{
			echo "<h3 class='well' style='border:0;border-left:5px solid green;color:green;'><strong>Success:</strong>Info successfully submitted</h3>";
		}
	}

	}



	?>

</div>
</div>

<?php
include('footer.php');
?>
</body>
</html>