<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" href="Aboutus.css">
    </head>
    <body>
        <div id='container'>
            <div id='header'>
                <h1>&nbspLaflef</h1>
            </div>
            <div id='pages'>
                <br>
                <a href="projecthtml.PHP" target="_self">Home</a>
                <a href="aboutus.PHP" target="_self">About us</a>
                <a href="tours.PHP" target="_self">Tours</a>
                <a href="signup2.PHP">Sign up</a>
                <a href="login.PHP" target="_self">Log in</a>
            </div>
            <h2>Get To Know Us</h2>
            <div id='all'>
            <div id='div1' class='par' onmouseover="bright1()" onmouseout="dim1()">
                <h1 class='headindiv'>Laflef</h1>
                <p>Laflef is a Jordanian internal tourism company, we first opened our doors in Amman 2018. we are extremely interested in the tourism industry, we started as a group of 3 people managing and planning everything but now (thanks to you) we expanded to more than 500 employees. 
                </p>
            </div>
            <div id='div2' class='par'>
                <h1 class='headindiv'>Laflef Goals</h1>
                <p>to provide a high quality tourism and to let dreams become true and spread happiness and make your trip unforgetable 
                    .</p>
            </div>
            <div id='div3' class='par'>
                <h1 class='headindiv'>Laflef Values</h1>
                <ul>
                    <li>We are Honest</li>
                    <li>We Move Fast</li>
                    <li>We Trust Each Other</li>
                    <li>We Self Manage</li>
                    <li>We Work With Each Other</li>
                    <li>Above All, We Act With Integrity</li>
                    
                </ul>
            </div>
            </div>
           
        </div>

        <script>
            function bright1(){
                document.getElementById("div1").style.backgroundColor="rgba(255,255,255,0.8)";
            }
            function dim1(){
                document.getElementById("div1").style.backgroundColor="rgba(255,255,255,0.5)";
            }
        </script>
    </body>
</html>