<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <link rel="stylesheet" href="adminpage.css">
    </head>
    <body onload="checkCookie()">
       
        <div id='container'>
        <div id='header'>
            <h1>&nbspLaflef</h1>
        </div>
        <div id='pages'>
            <br>
            <a href="projecthtml.php" target="_self">Home</a>
            <a href="aboutus.PHP" target="_self">About us</a>
            <a href="tours.PHP" target="_self">Tours</a>
            <a href="signup2.PHP">Sign up</a>
            <a href="login.PHP" target="_self">Log in</a>
        </div>


        <div id='first' class="newdivs" onclick="bookingtable()">
           <h2> BOOKINGS </h2>
        </div>
        <div id='second' class='newdivs' onclick='newslettertable()'> <h2> NEWSLETTER SUBSCRIBERS </h2></div>
       
        </div>

        <script>
            
            function bookingtable(){
                location.href = "bookingstable.php";
            }

            function newslettertable(){
                location.href = "newslettertable.php";
            }
        </script>
    </body>
</html>
