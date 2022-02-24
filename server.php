<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'entrepreneurship');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $Firstname = mysqli_real_escape_string($db, $_POST['fname']);
  $Lastname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['Re-Password']);
  $Pnumber = mysqli_real_escape_string($db, $_POST['phone number']);
  $Gender = mysqli_real_escape_string($db, $_POST['gender']);
  $Age = mysqli_real_escape_string($db, $_POST['age']);
  $username = mysqli_real_escape_string($db, $_POST['username']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Firstname)) { array_push($errors, "First name is required"); }
  if (empty($Lastname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($username)) { array_push($errors, "user name is required"); }
  if (empty($Pnumber)) { array_push($errors, "Phone number is required"); }
  if (empty($Age)) { array_push($errors, "Age is required"); }
  if (empty($Gender)) { array_push($errors, "Gender number is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM rejistration WHERE Username='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO rejistration (First_Name, Last_Name, Age,Email,Gender,ContactNo,Password,RePassword,Username) 
  			  VALUES(' $Firstname', '$Lastname', '$Age','$email','$Gender','$Pnumber','$password_1','$password_2',' $username')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.html');
    
  }

}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM rejistration WHERE Username='$username' AND Password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: home.html');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
?>
