<?php


session_start();

if(!isset($_SESSION["uid"]))
{
	header("location:login.php");
}


?>



<h1> Welcome User</h1> 