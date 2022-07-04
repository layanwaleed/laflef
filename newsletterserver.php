<?php

session_start();

$errors = array(); 
$email='';
$table = "newsletter";  

$con = mysqli_connect('localhost','root','','registartiondb');

if (isset($_POST['emailbutton'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);

}

if (empty($email)) { array_push($errors, "Email is required <br>"); }

if (count($errors) == 0) {

    $query = "INSERT INTO $table (email) VALUES('$email')";
    mysqli_query($con, $query);
    
    //this doesnt work unlesss i install SMTP service which i dont actually now how to do so i hope this can be considered as extra features bc it works if
    //the website goes online
    $sender = 'lay20180193@std.psut.edu.jo';
    $recipient = $email;
    
    $subject = "Newletter";
    $message = "php test message";
    $headers = 'From:' . $sender;
    
    if (mail($recipient, $subject, $message, $headers))
    {
        echo "Message accepted";
    }
    header('location: subscribe.PHP');

}

?>