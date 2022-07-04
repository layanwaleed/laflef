
<!DOCTYPE html>
<html>
<head>
<title>Summary</title>
<link rel="stylesheet" href="summary.css">
</head>

<body>
    <?php
    session_start();
    $con = mysqli_connect('localhost','root','','registartiondb');

    $adults = mysqli_real_escape_string($con, $_POST['adults']);
    $children = mysqli_real_escape_string($con, $_POST['children']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $destination = mysqli_real_escape_string($con, $_POST['desti']);
    $pickup = mysqli_real_escape_string($con, $_POST['pickup']);
    $breakfast = mysqli_real_escape_string($con, $_POST['breakfast']);
    $lunch = mysqli_real_escape_string($con, $_POST['lunch']);
    $dinner = mysqli_real_escape_string($con, $_POST['dinner']);
    $payment = mysqli_real_escape_string($con, $_POST['payment']);
    $email= mysqli_real_escape_string($con, $_POST['mail']);
    $guide= mysqli_real_escape_string($con, $_POST['guide']);

    $update = "UPDATE newtourists SET adults = '$adults',children='$children',phone='$phone',destination='$destination', pickup='$pickup',breakfast='$breakfast',lunch='$lunch',dinner='$dinner',payment='$payment',guide='$guide' WHERE email = '$email'";

if (!$con->query($update) === TRUE) {

    echo "Error updating record: " . $con->error;
}
    ?>
    <div id='container'>
        <div id='header'>
            <h1>&nbspLaflef</h1>
        </div>
        <div id='pages'>
            <br>
            <a href="projecthtml.php" target="_self">Home</a>
            <a href="aboutus.php"target="_self">About us</a>
            <a href="tours.PHP" target="_self">Tours</a>
            <a href="signup2.PHP" target="_self">Sign Up</a>
            <a href="login.PHP" target="_self">Log in</a>
        </div>
        <div id=sum>YOUR BOOKING SUMMARY</div>
<div id=mytable>
<h3>HELLO <span><?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"];?></span></h3>
<h4> You Booked a Laflef Trip to <span><?php echo $destination;?></span></h4>
<h4>We Will Contact you At <span><?php echo $phone; ?></span> or At <span><?php echo $_POST["mail"];?></h4>
<h4>You Booked The Trip For <span><?php echo $adults;?></span> Adults and <span><?php echo $children;?></span> Children </h4>
<h4> We Will Pick You Up From <span><?php echo $pickup;?></span></h4>
<h4> You Said <span><?php echo $breakfast;?></span> to Breakfast</h4>
<h4> You Said <span><?php echo $lunch;?></span> to Lunch</h4>
<h4> You Said <span><?php echo $dinner;?></span> to Dinner</h4>
<h4> You Said <span><?php echo $guide;?></span> to a Tour Guide</h4>

<h4> You Wish To Pay With <span><?php echo $payment;?></span></h4>
<h4>If You Wish To Change Anything in Your Booking Please Login and Book Again</h4>

</div>


</body>


</html>