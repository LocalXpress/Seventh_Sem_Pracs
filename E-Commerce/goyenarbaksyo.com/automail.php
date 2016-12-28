<?php
   $password = "a";
 $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.$?@";
  for($i = 0; $i < 8; $i++)
  {
      $random_int = mt_rand();
      $password .= $charset[$random_int % strlen($charset)];
 }
 
   $email = $_POST['email'];
   $subject = "Your new password is: "."$password";
   $conn=mysqli_connect("localhost","root","","mydatabase");
   if(mysqli_connect_errno())
   print"Login failed!! Please Try later";
   else
   {	
		$sql="SELECT * FROM login WHERE email='$email'";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			mail($email, 'subject',$subject, 'From: kaushikdey94@gmail.com');
			$sql1="update login set pass='$password' where email='$email'";
			$result1=mysqli_query($conn,$sql1);
			header("location:Login.php");
		}
		else 
		echo "User does not exit";
	}
	mysqli_close($conn);  
?>