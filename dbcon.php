<?php 

	$con=mysqli_connect('localhost','root','','clubs');
	if($con==false)
	{
		echo "Connection is not done";
	}
	else 
	{
		echo "Connection established";
	}
?>