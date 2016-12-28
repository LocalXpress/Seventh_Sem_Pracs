<body background="j1.jpg">
<div class="form">
<ul class="tab-group">
<link rel="stylesheet" type="text/css" href="style2.css"> 
<div id="Forgot">   
          <h1>Change Password!</h1>
          
          <form action="change.php" method="post">
          
            <div class="field-wrap">
            <label for="email">
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="on" name="email" />
          </div>
		  <div class="field-wrap">
            <label for="pass">
               Old Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pass1" />
          </div>
		  <div class="field-wrap">
            <label for="pass">
               New Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pass2" />
          </div>
		  <button type="submit" class="button button-block" value="submit"/>Submit</button>
		  
          
          <a href="Login.php"></a>
          
          </form>

        </div>
</div>