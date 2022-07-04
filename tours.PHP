<!DOCTYPE html>
<html>
    <head>
        <title>Tours</title>
        <link rel="stylesheet" href="Tours.css">
    </head>
    <body>
        <div id='container'>
            <div id='header'>
                <h1>&nbspLaflef</h1>
            </div>
            <div id='pages'>
                <br>
                <a href="projecthtml.php" target="_self">Home</a>
                <a href="aboutus.php"target="_self">About us</a>
                <a href="tours.php" target="_self">Tours</a>
                <a href="signup2.PHP">Sign up</a>
                <a href="login.PHP" target="_self">Log in</a>
            </div>

            <div id='box'>
                <table id="mytable">
                    <thead>
                    <tr>
                        <td>TRIP</td>
                        <td>DAY</td>
                        <td>TIME</td>
                        <td>METHOD</td>
                        <td>COST</td>
                    </tr>
                    <tr>
                        <td>AlMaghtas</td>
                        <td>Sunday | Tuesday</td>
                        <td>9:00am-5:00pm</td>
                        <td><img src="car.png" class="car"></td>
                        <td>50 JOD</td>
                    </tr>                  
                    <tr>
                        <td>Ma'in Springs</td>
                        <td>Sunday</td>
                        <td>9:00am-9:00pm</td>
                        <td><img src="bus.gif" class='bus'></td>
                        <td>70 JOD</td>
                    </tr>
                    <tr>
                        <td>Alaqaba</td>
                        <td>Friday</td>
                        <td>Two Days</td>
                        <td><img src="plane.png" class="plane"></td>
                        <td>750 JOD</td>
                    </tr>
                    <tr>
                        <td>Alabdali</td>
                        <td>Sunday | Tuesday</td>
                        <td>8:00am-10:00pm</td>
                        <td><img src="car.png" class="car"></td>
                        <td>20 JOD</td>
                    </tr>
                    
                    <tr>
                        <td>Ajloun</td>
                        <td>Wednesday | Friday</td>
                        <td>10:00am-6:00pm</td>
                        <td><img src="bus.gif" class='bus'></td>
                        <td>50 JOD</td>
                    </tr>
                    <tr>
                        <td>Mount Nebo</td>
                        <td>Sunday</td>
                        <td>8:00am-5:00pm</td>
                        <td><img src="car.png" class="car"></td>
                        <td>80 JOD</td>
                    </tr>
                    
                    <tr>
                        <td>Um Qais</td>
                        <td>Monday | Thursday</td>
                        <td>10:00am-8:00pm</td>
                        <td><img src="bus.gif" class='bus'></td>
                        <td>80 JOD</td>
                    </tr>
                   
                    <tr>
                        <td>Dead Sea</td>
                        <td>Wednesday</td>
                        <td>Three Days</td>
                        <td><img src="car.png" class="car"></td>
                        <td>900 JOD</td>
                    </tr>
                    <tr>
                        <td>Petra</td>
                        <td>Saturday</td>
                        <td>7:00am-10:00pm</td>
                        <td><img src="bus.gif" class='bus'></td>
                        <td>60 JOD</td>
                    </tr>
                    <tr>
                        <td>Roman Theater</td>
                        <td>Tuesday | Friday</td>
                        <td>11:00am-7:00pm</td>
                        <td><img src="car.png" class="car"></td>
                        <td>20 JOD</td>
                    </tr>
                    <tr>
                        <td>Wadi Rum</td>
                        <td>Thursday</td>
                        <td>Four Days</td>
                        <td><img src="bus.gif" class='bus'></td>
                        <td>780 JOD</td>
                    </tr>
                    <tr>
                        <td>Jerash</td>
                        <td>Sunday | Tuesday | Thursday</td>
                        <td>8:00am-8:00pm</td>
                        <td><img src="bus.gif" class='bus'></td>
                        <td>50 JOD</td>
                    </tr>
                    
                </thead>
                </table>
            </div>
        </div>

        <script>
            var buses=document.getElementsByClassName('bus');
            for(i=0;i<buses.length;i++){
            buses[i].style.right="0px";
            }
            function bwalk(){
                for(i=0;i<buses.length;i++){
                    buses[i].style.right=(parseInt(buses[i].style.right)+1)+'px';
                    if(buses[i].style.right=='225px'){
                        buses[i].style.right="0px";
                    }
            }
            }
            window.setInterval(bwalk,10);
            var cars=document.getElementsByClassName('car');
            for(i=0;i<cars.length;i++){
            cars[i].style.left="0px";
            }
            function cwalk(){
                for(i=0;i<cars.length;i++){
                   cars[i].style.left=(parseInt(cars[i].style.left)+1)+'px';
                    if(cars[i].style.left=='225px'){
                        cars[i].style.left="0px";
                    }
            }
            }
            window.setInterval(cwalk,10);
            
            
            var myplane=document.getElementsByClassName('plane');
            
            myplane[0].style.right="0px";
            
            
            function pwalk(){
               
                myplane[0].style.right=(parseInt(myplane[0].style.right)+1)+'px' ;
                    if(myplane[0].style.right=="225px"){
                        myplane[0].style.right="0px";
                    }
            }
            
            window.setInterval(pwalk,10);
        </script>
    </body>
</html>