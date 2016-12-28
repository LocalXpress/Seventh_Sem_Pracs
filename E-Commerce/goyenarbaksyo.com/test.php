<?php

$conn=mysqli_connect("localhost","root","","mydatabase");

if(mysqli_connect_errno())
	print"Connection Failed!!";
else
{
	
	$sql="INSERT INTO `login`(`first`, `last`, `email`, `pass`) VALUES ('$_POST[first]','$_POST[last]','$_POST[email]','$_POST[pass]')";
	if(!mysqli_query($conn,$sql))
		die('Error: '.mysqli_error());
	else
	{
		header("Location: login.php");
die();
	}
		
	
	mysqli_close($conn);
}
?>