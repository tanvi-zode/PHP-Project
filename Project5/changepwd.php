<?php

if (isset($_POST["changepwdbtn"]))
{


	$connect = mysqli_connect("localhost","root","","project5");

	
   $un = $_POST["username"];
   $cpwd = $_POST["cpassword"];
   $npwd = md5($_POST["npassword"]);


   $qry = "SELECT * FROM `user` WHERE username='$un' AND password = '$cpwd'";

   $result = mysqli_query($connect, $qry);

   $data = mysqli_fetch_assoc($result);
   $id = $data["id"];

   $row = mysqli_num_rows($result);

   if ($row>0) 
   {
	   $qry = "UPDATE `user` SET `password`='$npwd' WHERE id = '$id'";

	   $result = mysqli_query($connect, $qry);

	   if ($result)
	   {
	   	  ?> <script> alert("Password changed successfully"); </script> <?php
	   }
	   else
	   {
           ?> <script> alert("Something went wrong"); </script> <?php
	   }
   }
   else
   {
   	   ?> <script> alert("Invalid username or Password"); </script> <?php
	   
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
		<div class="col-md-4 mx-auto">
			<div class="card">
				<div class="card-header bg-success text-light">
					Change Password Form
				</div>

				<div class="card-body">
					<form method="post">
						<div class="form-group">
							<label> Username </label>
							<input type="text" name="username" class="form-control">
						</div>

						<div class="form-group">
							<label> Current Password </label>
							<input type="password" name="cpassword" class="form-control">
						</div>

						<div class="form-group">
							<label> New Password </label>
							<input type="password" name="npassword" class="form-control">
						</div>


						<div class="form-group">
							<button class="btn btn-success" name="changepwdbtn"> Change Password </button>
						</div>
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