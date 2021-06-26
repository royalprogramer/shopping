<?php require('head.php'); ?>
<?php require('navbar.php'); ?>

<div  id="signup-container">
		<h3 style="width:90%">Create Your Account</h3>
	<div>
		<label for="email"><b>Email</b></label>
	 	<input type="text" placeholder="Enter Email" name="email" id="email" >
	</div>
	<div>
		<label for="email"><b>Mobile No.</b></label>
		<input type="text" placeholder="Mobile No." name="mobile" id="mobile" >
	</div>
	<div>
		<label for="psw"><b>Password</b></label>
	  	<input type="password" placeholder="Enter Password" name="psw" id="psw" >
	</div>
	<div>
		<label for="psw-repeat"><b>Repeat Password</b></label>
		<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" >
	</div>
		<hr style="background:#2b6777; height: .5px; opacity: 20%;"/>
	   	<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	<div style="width:90%;">
		<button type="submit" class="btn">Register</button>
		<h5>Already have an account? <a href="login.php">Sign in</a>.</h5>
	</div>
</div>
<?php require('foot.php'); ?>
