<?php 
session_start();
 $username=$_POST['email'];
$conn=mysqli_connect("localhost","root","","mydatabase");

if(mysqli_connect_errno())
	print"Sorry the record couldn't be added!!";
else{

    $check=mysqli_query($conn,"SELECT * FROM login WHERE email='$username'");
	
	$count=mysqli_num_rows($check);
	if($count>0)
	{
		
		echo "User exists";
		
	}
	else
	{
		$sql="insert into login values('$_POST[first]','$_POST[last]','$_POST[email]','$_POST[pass]')";
	if(!mysqli_query($conn,$sql))
		print"Try again!!";
	else
	{
		$_SESSION["uid"]=$username;
		header("location:gallery.php");
	}
	}
}


?>