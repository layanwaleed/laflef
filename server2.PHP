<?php

session_start();

$username='';
$email='';
$pass='';
$errors = array(); 
$action="";
$email="";
$phone='';

$con = mysqli_connect('localhost','root','','registartiondb');


if (isset($_POST['loginbutton'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);
    $password2 = md5($password);
    
  if ($username != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from newtourists where username='".$username."' and password='".$password2."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $action="booknow.php";
    }else{
        echo "Invalid username and password";
    }

}

$query = "SELECT email FROM newtourists WHERE username='".$username."'";
$sql= "SELECT * FROM newtourists WHERE username='".$username."'";
 
if ($results = $con->query($query)) {
 
    while ($row = $results->fetch_assoc()) {
        $email = $row["email"];
        
    }
}

}

?>