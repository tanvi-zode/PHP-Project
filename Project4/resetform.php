<?php

if (isset($_POST["resetbtn"]))
{
	
$connect = mysqli_connect("localhost","root","","project4");


	$un = $_POST["username"];
	$mob = $_POST["mobile"];

$qry = "SELECT * FROM `user` WHERE username = '$un' AND mobile = '$mob'";

$result = mysqli_query($connect, $qry);
$data = mysqli_fetch_assoc($result);
$id = $data["id"];



$row = mysqli_num_rows($result);

if ($row>0) 
{
	$pwd = randomPassword();
	$qry = "UPDATE `user` SET `password`='$pwd' WHERE id = '$id'";
	$result = mysqli_query($connect, $qry);
	echo "Password Reset Successfully";
}
else
{
	echo "invalid username or mobile number";
}

}



function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
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
					<div class="card-header bg-primary text-light">
						<b> Reset Password Form </b>
					</div>
					<div class="card-body">
						<form method="post">

					        <div class="form-group">
						        <label> Username </label>
						        <input type="text" name="username" class="form-control">
					        </div>

					        <div class="form-group">
						        <label> Mobile </label>
						        <input type="tel" name="mobile" class="form-control">
					        </div>

					        <div class="form-group">
						        <button class="btn btn-primary" type="submit" name="resetbtn"
						        > Reset Password </button>
					        </div>

					        <p> Password -  <?php echo $pwd ?><span>  kindly copy password, password change</span></p>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>