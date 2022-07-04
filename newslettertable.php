<!DOCTYPE html>
<html>
    <head>
        <title>Tours</title>
        <link rel="stylesheet" href="newslettertable.css">
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
                $query = "SELECT * FROM newsletter";
 
                $result = mysqli_query($con,$query);

                echo "<table>"; 
                echo "<tr><td>ID</td><td>EMAIL</td></tr>";
                while($row = mysqli_fetch_array($result)){ 
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['email'] . "</td></tr>"; 
                }

                echo "</table>";
                ?>
            </div>
        </div>
        </body>
</html>