<?php

include("connection.php");

if(isset($_POST["register_btn"]))
{
$un = $_POST["username"];

$pwd = $_POST["password"];
$phone = $_POST["phone"];

$qry = "INSERT INTO `register`(`id`, `username`, `password`, `phone no`) VALUES (NULL,'$un','$pwd','$phone')";

$result = mysqli_query($connect,$qry);

if($result)
{
	?> <script> alert("Registration successful"); </script> <?php
}
else
{
	?> <script> alert("Failed to Register"); </script> <?php
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Register</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
		.row{
			height: 100vh;
			align-items: center;
		}
		
		body{
			background-color: #c4f5ee;
		}
</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header">
						<h2>Registration</h2>
					</div>
					<div class="card-body">
						<form method="POST">
							<div class="form-group">
								<input type="text" name="username" placeholder="Username" class="form-control">
							</div>
							
							<div class="form-group">
								<input type="password" name="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<input type="tel" name="phone" placeholder="Phone no" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" name="register_btn" class="btn btn-info ">Register</button>
							</div>
							<p>Already have an account? <a href="login.php">Login</a></p>
								
						
					</div>

				</div>
			</div>
		</div>
	</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>