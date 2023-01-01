<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Package Lists</title>
</head>
<body>
<?php
include('header.php');
?>
 <div class="container">
 <div class="row">
 	
 	<h2 style="color:green;margin-left:20px;">Package List</h2>
 	  <?php
	  include('dbconnection.php');
	  $sql2="select * from tour";
	  $result=mysqli_query($con,$sql2);
	  if(mysqli_num_rows($result)>0)
	  {
	  	while($row=mysqli_fetch_assoc($result))
	  	{
      ?>
	  

	  
	  <table class="table table-responsive">
	  <tr>
 			<th class="col-md-2">
 				<img src="<?php echo $row["package_image"];?>" class="animate__animated animate__slideInLeft">
 			</th>
 			<th class="col-md-8 animate__animated animate__slideInUp">
 				<h3 class="text-success">Package Name: <?php echo $row["package_name"];?></h3>
 				<h6>Package type : <?php echo $row["package_type"];?></h6><br>
 				<p>Package Location: <?php echo $row["package_location"];?></p><br>
 				<p>Features : Free Wi-fi, Free Breakfast, Free Pickup and drop facility 3day trip</p>
 			</th>
 			<th class="col-md-2 animate__animated animate__slideInRight">
 				<h2><?php echo $row["package_price"];?></h2>
 				<a href="package-details.php?pid=<?php echo $row['id']; ?>"><button class="btn btn-success">Details</button></a>
 			</th>
 		</tr>
</table>
<?php
}
}
?>
 </div>
<?php
include("footer.php");
?>
</body>
</html>