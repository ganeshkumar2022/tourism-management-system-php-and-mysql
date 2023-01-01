<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Charlis Anjels Tourism Management System</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>

</style>
</head>
<body>
<div class="container-fluid">
	<div class="row" style="padding:8px;background-color:red;">
		<div class="col-md-2 animate__animated animate__fadeInDown">
			<a href="admin.php" style="color:white;"><i class="fa-solid fa-house"></i>Admin Login</a>&nbsp;&nbsp;&nbsp;
			<a href="user.php" style="color:white;"><i class="fa fa-user" aria-hidden="true"></i> user</a>
		</div>
		<div class="col-md-6">

		</div>
		<div class="col-md-2 animate__animated animate__fadeInDown">
			<a href="tel:+918138777777">Phone no:8138777777</a>
		</div>
		
	</div>
	<div class="row" style="padding:8px;">
		<div class="col-md-10 animate__animated animate__backInLeft">
			<img src="images/logo.png" style="height:50px;">
		</div>
		<div class="col-md-2 animate__animated animate__backInLeft" style="margin-top:5px;">
			<a href="" class="btn btn-success" data-toggle='modal' data-target='#signup'>Signup</a>
			<a href="" class="btn btn-success" data-toggle='modal' data-target='#mylogin'>Login</a>
		</div>
	</div>
	<div class="row">
		<nav class="navbar navbar-inverse text-info bg-success">
			<ul class="nav navbar-nav animate__animated animate__fadeInLeft">
				<li><a href="home.php">Home</a></li>
				<li><a href="aboutus.php">About</a></li>
				<li><a href="package-list.php">Tour Packages</a></li>
				<li><a href="privacy.php">Privacy Policy</a></li>
				<li><a href="terms.php">Terms of Use</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="enquiry.php">Enquiry</a></li>


            </ul>
		</nav>
	</div>

<!-- my modal for login -->
<div id="mylogin" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="text-primary">Signup with your account</h4>
				<form action="thankyou2.php" method="post" autocomplete="off">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="enter your email" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="enter your password" required>
					</div>
					<button type="submit" name="login" class="btn btn-primary">login</button>
				</form>


			</div>

		</div>
	</div>

</div>


<!-- my modal for signup -->
<div id="signup" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="text-primary">Signup with your account</h4>
				<form action="thankyou.php" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="name" name="name" id="name" class="form-control" placeholder="enter your name" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="enter your email" required>
					</div>
					<div class="form-group">
						<label for="mobile">Mobile</label>
						<input type="text" pattern="[0-9]{10}" maxlength="10" minlength="10" name="mobile" id="mobile" class="form-control" placeholder="enter your mobile" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="enter your password" required>
					</div>
					<button type="submit" name="signup" class="btn btn-primary">Signup</button>
				</form>


			</div>

		</div>
	</div>

</div>
</body>
</html>
