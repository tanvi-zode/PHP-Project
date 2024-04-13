<?php

if (isset($_POST["registerbtn"]))
{

	include("dbconnect.php");

$fn = $_POST["fullname"];
$eid = $_POST["email"];
$pwd = md5($_POST["password"]);
$mob = $_POST["mobile"];


	$qry = "INSERT INTO `register`(`id`, `fullname`, `email`, `password`, `mobile`) VALUES (NULL,'$fn','$eid','$pwd','$mob')";

	$result = mysqli_query($connect, $qry);

	if ($result)
	{
		echo "Registration Success";
	}
	else
	{
		echo "Failed to Register";

	}

}

?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header bg-success text-light">
						<b> Registration form </b>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="form-group">
						        <label> Fullname </label>
						        <input type="text" name="fullname" class="form-control">
					        </div>

					        <div class="form-group">
						        <label> Email </label>
						        <input type="email" name="email" class="form-control">
					        </div>

					        <div class="form-group">
						        <label> Password</label>
						        <input type="password" name="password" class="form-control">
					        </div>

					        <div class="form-group">
						        <label> Mobile No </label>
						        <input type="tel" name="mobile" class="form-control">
					        </div>

					        <div class="form-group">
						        <button class="btn btn-success" type="submit" name="registerbtn"> Register </button>
					        </div>

					        <p> Already have an Account? <a href="login.php"> Sign In </a></p>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>











<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>