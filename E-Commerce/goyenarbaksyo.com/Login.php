<body background="j25.jpg">
<div class="form">

<ul class="tab-group">
        <li class="tab "><a href="SignUp.php">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
<link rel="stylesheet" type="text/css" href="style2.css"> 
<div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="log.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="on" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"name="pass"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          
		  <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
</div>