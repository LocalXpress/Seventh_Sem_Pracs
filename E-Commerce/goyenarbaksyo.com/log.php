<?php 
session_start();

$username=$_POST['email']; 
$password=$_POST['pass']; 


$conn=mysqli_connect("localhost","root","","mydatabase");



if(mysqli_connect_errno())
	print"Login failed!! Please Try later";

else
{
	
$sql="SELECT * FROM login WHERE email='$username' and pass='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count==1)
{

	$_SESSION["uid"]=$username;
	//$_SESSION['username']=$username;
	//$_SESSION['password']=$password; 
	header("location:gallery.php");
	
}
else 
	echo "Wrong Username or Password";

}

mysqli_close($conn);



 ?>