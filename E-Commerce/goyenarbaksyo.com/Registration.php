<?php 
 
$conn=mysqli_connect("localhost","root","","mydatabase");

if(mysqli_connect_errno())
	print"Sorry the record couldn't be added!!";
else
{
	$sql="insert into login values('$_POST[first]','$_POST[last]','$_POST[email]','$_POST[pass]')";
	if(!mysqli_query($conn,$sql))
		print"Try again!!";
	else
	{
		header("location:gallery.php");
	}
	
}

mysqli_close($conn);

?>