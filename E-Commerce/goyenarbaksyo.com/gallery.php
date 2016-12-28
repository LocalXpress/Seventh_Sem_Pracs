<?php
session_start();
$uid=$_SESSION["uid"];

if(!isset($_SESSION['uid'])) 
	{ 
		header("Location:session.php");
		exit;
	} 
?>
<html>

<body background="j11.jpg">

<ul class="tab-group">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <div class="container">
               <div class="dropmenu" style="margin-top: 5px; margin-left: auto; margin-right: 0; width: 5px;">                       
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">SETTINGS
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="logout.php">Logout</a></li>
      <li><a href="changepassword.php">Change Password</a></li>
     
    </ul>
  </div>
</div> 
</div>


    <div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">
	
	<a target="_blank" href="diya1.jpg">
	<img src="diya1.jpg" height="380" width="270"  /></a>
		<p style="text-align:center;color:white;">RS 400</p>
		<div style="text-align:center">  
		
		<button type="button">Buy Now</button>
	  
	  </div>
	  </div>
	  </div>	  
    
	<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">
	
	<a target="_blank" href="diya2.jpg">
	<img class="middle-img" src="diya2.jpg" height="380" width="270" /></a>
        <p style="text-align:center; color:white">RS 550</p>
		<div style="text-align:center">
		<button type="button" align="center">Buy Now</button>
    </div>
	</div>
	</div>
    
	<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">    
    
	<a target="_blank" href="diya3.jpg">
	<img src="diya3.jpg" height="380" width="270" /></a>
        <p style="text-align:center;color:white">RS 700</p>
		<div style="text-align:center">
		<button type="button">Buy Now</button>
    </div>
	</div>
	</div>
	

	<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">

<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">

	<a target="_blank" href="diya4.jpg">
	<img class="middle-img" src="diya4.jpg" height="380" width="270" /></a>
        <p style="text-align:center; color:white">RS 350</p>
		<div style="text-align:center">
		<button type="button" align="center">Buy Now</button>
    </div>
	</div>
	</div>
	


<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">
	
	<a target="_blank" href="d5.jpg">
	<img src="d5.jpg" height="380" width="270"  /></a>
		<p style="text-align:center;color:white">RS 400</p>
		<div style="text-align:center">  
		
		<button type="button">Buy Now</button>
	  
	  </div>
	  </div>
	  </div>	  
    
	<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">
	
	<a target="_blank" href="d6.jpg">
	<img class="middle-img" src="d6.jpg" height="380" width="270" /></a>
        <p style="text-align:center;color:white">RS 550</p>
		<div style="text-align:center">
		<button type="button" align="center">Buy Now</button>
    </div>
	</div>
	</div>
	
    
	<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">    
    
	<a target="_blank" href="d7.jpg">
	<img src="d7.jpg" height="380" width="270" /></a>
        <p style="text-align:center;color:white">RS 700</p>
		<div style="text-align:center">
		<button type="button">Buy Now</button>
    </div>
	</div>
	</div>
<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">

	<a target="_blank" href="d8.jpg">
	<img class="middle-img" src="d8.jpg" height="380" width="270" /></a>
        <p style="text-align:center;color:white">RS 350</p>
		<div style="text-align:center">
		<button type="button" align="center">Buy Now</button>
    </div>
	</div>
	</div>
	<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">
	
	<a target="_blank" href="d9.jpg">
	<img class="middle-img" src="d9.jpg" height="380" width="270" /></a>
        <p style="text-align:center;color:white">RS 550</p>
		<div style="text-align:center">
		<button type="button" align="center">Buy Now</button>
    </div>
	</div>
	</div>
	<br>
<div style="float:left;margin-right:30px;margin-left:30px;margin-top:20px">
<div style="width:300px;height:470px;padding:5px;border:10px solid lightblue;">
	
	<a target="_blank" href="d10.jpg">
	<img class="middle-img" src="d10.jpg" height="380" width="270" /></a>
        <p style="text-align:center;color:white">RS 550</p>
		<div style="text-align:center">
		<button type="button" align="center">Buy Now</button>
    </div>
	</div>
	</div>
	

</body>
</html>
