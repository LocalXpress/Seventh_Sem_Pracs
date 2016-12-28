<?php
$username=$_POST['email']; 
$oldpassword=$_POST['pass1'];
$newpassword=$_POST['pass2'];
$conn=mysqli_connect("localhost","root","","mydatabase");



if(mysqli_connect_errno())
	print"Login failed!! Please Try later";
else
{
	
$sql="SELECT * FROM login WHERE email='$username' and pass='$oldpassword' ";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{

	$sql1="update login set pass='$newpassword' where (email='$username'and pass='$oldpassword')";
	$result1=mysqli_query($conn,$sql1); 
	header("location:gallery.php");
}
else 
	echo "Wrong Usernmae or oldpassword";
}

?>