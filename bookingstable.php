<!DOCTYPE html>
<html>
    <head>
        <title>Tours</title>
        <link rel="stylesheet" href="bookingstable.css">
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
            <?php 
                session_start();
                $con = mysqli_connect('localhost','root','','registartiondb');
                $query = "SELECT * FROM newtourists";
 
                $result = mysqli_query($con,$query);

                echo "<table>"; 
                echo "<tr><td>Username</td><td>EMAIL</td><td>Phone Number</td><td>No. Of Adults</td><td>No. Of Children</td><td>Destination</td><td>PickUp Location</td><td>Breakfast</td></td><td>Lunch</td><td>Dinner</td><td>Tour Guide</td><td>Payment</td></tr>";
                while($row = mysqli_fetch_array($result)){ 
                echo "<tr><td>" . $row['username'] . "</td><td>" . $row['email'] . "</td>"; 
                echo "<td>" . $row['phone'] . "</td><td>" . $row['adults'] . "</td>"; 
                echo "<td>" . $row['children'] . "</td><td>" . $row['destination'] . "</td>"; 
                echo "<td>" . $row['pickup'] . "</td><td>" . $row['breakfast'] . "</td>"; 
                echo "<td>" . $row['lunch'] . "</td><td>" . $row['dinner'] . "</td>"; 
                echo "<td>" . $row['guide'] . "</td><td>" . $row['payment'] . "</td>"; 
                echo"</tr>";
                }

                echo "</table>";
                ?>
            </div>
        </div>
        </body>
</html>