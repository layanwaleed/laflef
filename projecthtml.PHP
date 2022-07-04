<?php include('newsletterserver.php') ?>
<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Indie+Flower&family=Modak&family=Pacifico&display=swap" rel="stylesheet">
        <title>Home</title>
        <link rel="stylesheet" href="projectcss.css">
    </head>
    <body onload="vidmargins()">
        
        <div id='container'>
        <div id='header'>
            <h1>&nbspLaflef</h1>
        </div>
        <div id='pages'>
            <br>
            <a href="projecthtml.php" target="_self">Home</a>
            <a href="aboutus.PHP"target="_self">About us</a>
            <a href="tours.PHP" target="_self">Tours</a>
            <a href="signup2.PHP">Sign up</a>
            <a href="login.PHP" target="_self">Log in</a>
        </div>
        <div id='box'>
            <form action="subscribe.php" method="post">
            <div id='first'><h4>Enter your email to subscribe to our newsletter</h4></div>
            <div id='second'><input type="email" id="emai" name="email" value="<?php echo $email; ?>" placeholder="example@example.com" >
                <button id="button1" name='emailbutton'>GO</button></div>
        </div>
        </form>

        <div id="desti" class="newdivs" onclick="destinations()">
           
            <h2>OUR <br> DESTINATIONS</h2>
        </div>

        <div class="newdivs" id="videoooo">
    <h1 id=vidh1>VIDEO</h1>
        <video src="vid.mp4" id="videoo" autoplay loop></video>
       </div>

        <div id="calendar" class="newdivs">
            <h1>TIME</h1>
            <div class="month">
                <ul>
                    <li> <span id="mon"></span><br>
                    <span id="daa"></span>
                    <span>-</span>
                    <span id="cal"></span>
                <br>
                <span id="aa"></span>: 
                <span id="bb"></span>:
                <span id="cc"></span>   
                </li>
                </ul> </div>
            
        </div>

        
        </div>
        
        <script>
            
            function destinations(){
                location.href = "destinations.php";
            }

        </script>
        <script>
            var dat = new Date();
            var d=dat.getDate();
            var day=dat.getDay();
            var m=dat.getMonth();
            
          
            if (m==0)
            {m='January';}
            if (m==1)
            {m='February';}
            if (m==2)
            {m='March';}
            if (m==3)
            {m='April';}
            if (m==4)
            {m='May';}
            if (m==5)
            {m='June';}
            if (m==6)
            {m='July';}
            if (m==7)
            {m='August';}
            if (m==8)
            {m='September';}
            if (m==9)
            {m='October';}
            if (m==10)
            {m='November';}
            if (m==11)
            {m='december';}
            var y=dat.getFullYear();
            var h =dat.getHours();
            var men=dat.getMinutes();
            var sec =dat.getSeconds();
            if (sec<10)
            {s="0"+sec;}
            else{s=sec;}
            if (men<10)
            {me="0"+men;}
            else{me=men;}
            
            document.getElementById("mon").innerHTML=m;
            
            document.getElementById("cal").innerHTML=y;
            document.getElementById("daa").innerHTML=d;
            document.getElementById("aa").innerHTML=h;
            document.getElementById("bb").innerHTML=men;
            document.getElementById("cc").innerHTML=sec;



            function vidmargins(){
                document.getElementById("vidh1").style.marginTop="-45px";
                document.getElementById("vidh1").style.color="rgb(126, 85, 85)";
                document.getElementById("vidh1").style.fontFamily="'Comic Sans MS', cursive, sans-serif";
                document.getElementById("vidh1").style.textAlign="center";
                document.getElementById("vidh1").style.fontSize="25px";
                document.getElementById("videoo").style.marginTop="0px";
                document.getElementById("videoo").style.width="420px";
                document.getElementById("videoo").style.marginLeft="-100px";

            }
            </script>
    </body>
</html>