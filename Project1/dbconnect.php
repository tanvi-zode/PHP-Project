<?php  


$connect = mysqli_connect("localhost","root","","project1");

if(!$connect)
{
	echo "database not connected, contact to system administrators";
}

?>