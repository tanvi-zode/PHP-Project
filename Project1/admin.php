<?php

if (isset($_POST["noticebtn"]))
{

	include("dbconnect.php");

	
	$notice = $_POST["notice"];



	$qry = "INSERT INTO `notice`(`notice`) VALUES ('$notice')";

	$result = mysqli_query($connect, $qry);

	if ($result)
	{
		echo "Notice Added Successfully";
	}
	else
	{
		echo "Something went wrong";

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
	<h1>Welcome Admin</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<form method="post">
					<div class="form-group">
						<label> Add Notice </label>
						<textarea name="notice" placeholder="Enter notice here...." class="form-control"> </textarea>
					</div>

					<div class="form-group">
						<button class="btn btn-primary" name="noticebtn"> Add </button>
					</div>
				</form>
			</div>
		</div>
	</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>