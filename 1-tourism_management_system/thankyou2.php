<?php
session_start();
?>
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
	if(isset($_POST["login"]))
	{
		include('dbconnection.php');
		
		$email=$_POST["email"];
		$password=$_POST["password"];
		
		
		$sql2="select email,password from users where email='$email' and password='$password'";
		$result=mysqli_query($con,$sql2);
		if(mysqli_num_rows($result)>0)
		{
			echo "<script>window.location.replace('user.php')</script>";
			$_SESSION["email"]=$email;

		}
		else
		{
		
			echo "<h3 class='well' style='border:0;border-left:5px solid red;color:red;'><strong>Error:</strong>Email or password Wrong</h3>";
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