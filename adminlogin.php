<?php include('adminserver.PHP') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <link rel="stylesheet" href="Login.css">
    </head>
    <body>
       
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


        <div id='myform1'>
            <form action="" method="POST">
                <div id='myform2'>
                    <div id='hi'><h2>LOG IN</h2></div>
                    
                    
                    <input type="text" placeholder="Username" id='uname' name='username' class='inputs'>
                    <br>
                    <br>
                    <input type='password' placeholder="Password" id='pass' name='pass' class='inputs'>
                    <br>
                    <br>
                    
                    
                    <h6>Dont have an Accout?<a href='signup2.php'>Sign up now</a></h6>
                   <br>
                    <input type="submit" value="Login" id="login" name='loginbutton' onclick="validation()">
                    <br>
                    <br>
                    <h6> Not An Admin ?<a href='login.php'>Your Login is here</a></h6>
               </div>
            </form>
        </div>
        </div>

        <script>
            
            function validation(){
                var namee=document.getElementById("uname");
                var passw=document.getElementById("pass").value;
        
                if(namee.value == ""|| namee.value==null){
                    event.preventDefault();
                    alert("EMPTY NAME IS NOT ALLOWED");
                    returnToPreviousPage();
                    return false;
                    
                }
                
                    if(passw==''){
                        event.preventDefault();
                        alert("EMPTY PASSWORD NOT ALLOWED");
                        returnToPreviousPage();
                        return false;
                    }
                }

        </script>
    </body>
</html>
