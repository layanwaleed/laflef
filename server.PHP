<?php

session_start();

$username='';
$email='';
$pass1='';
$pass2='';
$errors = array(); 
$name_error='';
$email_error='';



$con = mysqli_connect('localhost','root','','registartiondb');

//signing up
if (isset($_POST['clicks'])) {
	
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass1 = mysqli_real_escape_string($con, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($con, $_POST['pass2']);
  
}
if (empty($username)) { array_push($errors, "Username is required <br>"); }
  if (empty($email)) { array_push($errors, "Email is required <br>"); }
  if (empty($pass1)) { array_push($errors, "Password is required <br>"); }


$user_check_query = "SELECT * FROM newtourists WHERE username='$username'";
$result1 = mysqli_query($con, $user_check_query);
$email_check_query = "SELECT * FROM newtourists WHERE email='$email'";
$result2 = mysqli_query($con, $email_check_query);

if(mysqli_num_rows($result1)>0){
  $name_error="Username already exists <br>";
  array_push($errors, "Username already exists <br>");
}
else
  if(mysqli_num_rows($result2)>0){
  $email_error="email already exists <br>";
  array_push($errors, "email already exists <br>");
}
if (count($errors) == 0) {
	$password = md5($pass1);//encrypting the password 

	$query = "INSERT INTO newtourists (username, email, password) VALUES('$username', '$email', '$password')";
	mysqli_query($con, $query);
	$_SESSION['username'] = $username;
	header('location: hello.PHP');
}

?>