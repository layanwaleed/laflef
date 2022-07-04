<?php

session_start();

$username='';
$pass='';
$errors = array(); 


$con = mysqli_connect('localhost','root','','registartiondb');


if (isset($_POST['loginbutton'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);

    
  
if (empty($username)) { array_push($errors, "Username is required <br>"); }
if (empty($password)) { array_push($errors, "Password is required <br>"); }


$user_check_query = "SELECT * FROM admins WHERE username='$username'";
$result1 = mysqli_query($con, $user_check_query);
$pass_check_query = "SELECT * FROM admins WHERE password='$password'";
$result2 = mysqli_query($con, $pass_check_query);

if(mysqli_num_rows($result1)>0){
   if(mysqli_num_rows($result2)>0){
    header('location: adminpage.PHP');
}else{
    echo "invalid Username or Password";
}

}else{
    echo "invalid Username or Password";
}


}

?>