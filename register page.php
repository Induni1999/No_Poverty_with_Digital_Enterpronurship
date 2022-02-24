<?php include('server.php') ?>


<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="main">
<div class="register">
	<h2>Register Here</h2>
	<formid="register" method="POST" action="register page.php">
	<label>First Name:</label>
	<br>
	<input type="text" name="fname" id="name" placeholder="Enter Your First Name">
	<br><br>
	<label>Last Name:</label>
	<br>
	<input type="text" name="lname" id="name" placeholder="Enter Your Last Name">
	<br><br>
	<label>Your Age:</label>
	<br>
	<input type="number" name="age" id="name" placeholder="How old are you?">
	<br><br>
	<label>Gender: </label>
	<br>
	&nbsp;&nbsp;
	<input type="radio" name="gender" id="mail">
	&nbsp;
	<span id="mail">Male</span>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="gender" id="female">
	<span id="mail">Female</span>
	<br><br>
	<label>Phone number</label>
	<br>
	<input type="number" name="phone number" id="name" placeholder="Enter your phone number">
	<br><br>
	<label>Email</label>
	<br>
	<input type="email" name="email" id="name" placeholder="Enter Your Valid email">
	<br><br>
	<label>User Name</label>
	<br>
	<input type="text" name="username" id="uname" placeholder="Enter Your username">
	<br><br>
	<label>Password</label>
	<br>
	<input type="password" name="password" id="name" placeholder="Create a password">
	<br><br>
	<label>Re-Password</label>
	<br>
	<input type="password" name="Re-Password" id="name" placeholder="Re-Enter Password">
	<br><br>
	<input type="submit" value="Submit" name="submit" id="submit">
	<br>
	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>


	</form>

</body>
</html>