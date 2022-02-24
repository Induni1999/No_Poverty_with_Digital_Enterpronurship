<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <img src="../logo.png" width="150px" height="150px" calss="logo" >  
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="index.php">
        <div class="txt_field">
          <input type="text" name= "username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="login_user">
        <div class="signup_link">
          Not a member? <a href="register page.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
