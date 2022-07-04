<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <link rel="stylesheet" href="Login.css">
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


        <div id='myform1'>
            <form action="<?php echo $action; ?>" method="POST">
                <div id='myform2'>
                    <div id='hi'><h2>LOG IN</h2></div>
                    
                    
                    <input type="text" placeholder="Username" id='uname' name='username' class='inputs'>
                    <br>
                    <br>
                    <input type='password' placeholder="Password" id='pass' name='pass' class='inputs'>
                    <br>
                    <br>
                    
                    <input type="checkbox" id='rememberme' onclick="cookie()"><label for='remember me' id='rmlabel'>Remember me</label>
                    <br>
                    <br>
                    
                    <h6>Dont have an Accout?<a href='signup2.php'>Sign up now</a></h6>
                   <br>
                    <input type="submit" value="Login" id="login" name='loginbutton' onclick="validation()">
                    <br>
                    <br>
                    <h6>&nbsp &nbsp &nbsp &nbsp Admin ?<a href='adminlogin.php'>Login here</a></h6>
               </div>
            </form>
        </div>
        </div>

        <script>
            
            function validation(){
                
                var namee=document.getElementById("uname");
                var passw=document.getElementById("pass").value;
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
                        alert("PASSWORD NOT ALLOWED");
                        returnToPreviousPage();
                        return false;
                    }
                }
                if(!(document.getElementById("rememberme").checked)){
			        check=false;
                }
                
		        else{
			        check=true;
		        }

		        if(check==true){
			        var user=document.getElementById("uname").value;
                    var passw=document.getElementById("pass").value;
			        setCookie("username", user, 1);
			        setCookie("password", passw, 1);
		        }
            }

            function checkCookie() {
                var user=getCookie("username");
		        var passw=getCookie("password");
                if (user != "" && passw != ""){
                document.getElementById("uname").value=user;
                document.getElementById("pass").value=passw;
                document.getElementById("rememberme").checked=true;
                } 
            }
            function getCookie(cname) {
                var nname = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(";");
                for(var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(nname) == 0) {
                 return c.substring(nname.length, c.length);
                }
                }
                return "";
            }
	        function setCookie(cname,cvalue,exdays){
                var d=new Date();
                d.setTime(d.getTime()+(exdays*24*60*60*1000));
                var expires="expires="+d.toGMTString();
                document.cookie= cname + "=" + cvalue + ";" + expires;
            }

        </script>
    </body>
</html>
