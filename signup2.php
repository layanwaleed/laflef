<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="singup.css">
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
        
            <form action="signup2.PHP" method="POST">
           
                <div id='myform2'>
                
                    <div id='hi'><h1>SIGN UP</h1></div>
                    <input type="text" placeholder="Username" id='uname' name='username' class='inputs' value="<?php echo $username; ?>">
                    <br>
	  	                <span><?php echo $name_error; ?></span>
                    <br>
                    <input type='email' placeholder="Email" id='ema' class='inputs'
                    value="<?php echo $email; ?>" name='email' pattern="[a-zA-Z0-9._]+@[a-z.-]+\.[a-z]{2,}$">
                    <br>
      	                <span><?php echo $email_error; ?></span>
                    <br>
                    <input type='password' placeholder="Password" id='pass1' name='pass1' class='inputs'>
                    <br>
                    <br>
                    <input type='password'  placeholder="Confirm Password" id='pass2' name='pass2' class='inputs'>
                    <br>
                   <h6>Already have an account?<a href='login.php'>log in now</a></h6>
                   <br>
                    <input type="submit" value="Sign Up" id="login" name=clicks onclick="validation()">
                   
               </div>
               
            </form>
        </div>
        </div>

        <script>
            
            function validation(){
                
                var namee=document.getElementById("uname");
                
                var passw=document.getElementById("pass1").value;
                var passw2=document.getElementById("pass2").value;
                var passregex=/^[a-zA-Z](?=.*\d)(?=.*[a-z])(?=.*[A-Z]).(?=.*[@$!%*#?&])(?=.{8,}$).*$/;
                if(namee.value == ""|| namee.value==null){
                    event.preventDefault();
                    alert("EMPTY NAME IS NOT ALLOWED");
                    returnToPreviousPage();
                    return false;
                    
                }
                
                    else{
                    if(!passw.match(passregex)){
                        
                        event.preventDefault();
                        alert("PASSWORD NOT ALLOWED : please enter a password that starts with a letter and must contain 1 Capital letter after the first letter and one special character of @$!%*#?& and at least one small letter and at least one number and must be lonnger than 8");
                        returnToPreviousPage();
                        return false;
                    }
                }

                if(passw != passw2 ){
                    
                    alert("PASSWORD DOES NOT MATCH");
                    returnToPreviousPage();
                    return false;
                    
                }
            }
        </script>
    </body>
</html>
