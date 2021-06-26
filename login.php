<?php require('head.php'); ?>
<?php require('navbar.php'); ?>
	
<div class="login-container">
	<h3>Sign In</h3>
	<input type="text" name="username" placeholder="Username" required>
	<input type="password" name="password" placeholder="Password" required>
	<input type="submit" value="Login">
	<label style="color:#2b6777; font: 20px bold ; margin:5px;">OR</label> &ensp;
	<a href="#" class="fb ">
    	<img src="fb.png">
	</a>&ensp;
	<a href="#" class="insta">
	    <img src="instagram.png">
	</a>
	<hr style="background:#2b6777; height: .5px; opacity: 20%;"/>
    <a href="signup.php"class="btn">Sign up</a>
	<a href="forgot-password.php"class="btn">Forgot password?</a>
</div>			
<?php require('foot.php'); ?>
