<?php include('server2.PHP') ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Book Now</title>
        <link rel="stylesheet" href="booknow.css">
    </head>
    <body>
        <div id='container'>
            <div id='header'>
                <h1>&nbspLaflef</h1>
            </div>
            <div id='pages'>
                <br>
                <a href="projecthtml.php" target="_self">Home</a>
                <a href="aboutus.PHP"target="_self">About us</a>
                <a href="tours.PHP" target="_self">Tours</a>
                <a href="signup2.PHP" target="_self">Sign Up</a>
                <a href="login.PHP" target="_self">Log in</a>
            </div>

            
                <form method="POST" action="summary.php" id="myform">
                    <div id=header2><h1><?php echo $_POST["username"];?>'s BOOKING</h1></div>
                    <div class='formdiv'>
            <fieldset>
                <legend>Traveler Details</legend>
                <table>
                    <tr>
                        <td  class="align" >First Name:</td>
                        <td  class="align" ><input type="text" id=fname name=fname class="text"  ></td>
                    </tr>
                    <tr>
                        <td  class="align">Last Name:</td>
                        <td  class="align"><input type="text" id=lname name=lname class="text"></td>
                    </tr>
                   
                    <tr>
                        <td  class="align">Email:</td>
                        <td  class="align"><input type="email" name="mail" class="text" value="<?php echo $email;?>"></td>
                    </tr>
                    <tr>
                        <td  class="align">Phone Number:</td>
                        <td  class="align"><input type="tel" name='phone' class="tel" placeholder="07#-#######" pattern="07\d{8}"></td>
                    </tr>
                    <tr>
                    <td  class="align"><label for=adults>No. of Adults:</label></td>
                    <td  class="align"><input type="number" id="adults" class=travelers class="text" name=adults min=0 max=25></td>
                    </tr>
                    <tr>
                    <td  class="align"><label for="children">No. of children:</label></td>
                    <td  class="align"><input type="number" id="children" class=travelers class="text" name=children min=0 max=25></td>
                    </tr>
                    </table>
            </fieldset>
            </div>
            <div class='formdiv'>
            <fieldset>
                <legend>Trip Details</legend>
                <table>
                    <tr>
                 
                <td class="align"><label>Destination</label></td>
                <td  class="align">
                    <select id=desti name='desti'>
                    <option selected disabled value="none">Destination</option>
                    <option value=Aqaba>Aqaba</option>
                    <option value=Umqais>Um Qais</option>
                    <option value=Mountnebo>Mount Nebo</option>
                    <option value=Deadsea>Dead Sea</option>
                    <option value=Ajloun>Ajloun</option>
                    <option value=Abdali>Abdali</option>
                    <option value=Jerash>Jerash</option>
                    <option value=Wadirum>Wadi Rum</option>
                    <option value=Petra>Petra</option>
                    <option value=Roman>Roman Theater</option>
                    <option value=Main>Ma'in Springs</option>
                    <option value=Maghtas>Almaghtas</option>
                    </select>
                </td>
                </tr>
                <tr>
                <td  class="align"><label>PickUp Location</label></td>
                <td class="align">
                    <select id=pickup name='pickup'>
                    <option selected disabled value="none">PickUp Location</option>
                    <option>Amman</option>
                    <option>Irbid</option>
                    <option>Ajloun</option>
                    <option>Aqaba</option>
                    <option>Alzarqaa</option>
                    <option>Jerash</option>
                    <option>Madaba</option>
                    <option>Almafraq</option>
                    <option>Karak</option>
                    <option>Ma'an</option>
                    <option>Tafieleh</option>
                    <option>Albalqa'a</option>
                </select>
                </td>
                </tr>
                <tr>
                <td  class="align"><label>Include Breakfast (+20 JOD)</label></td>
                <td  class="align"><input type="radio" name=breakfast id="by" value=yes> <label for="by">Yes</label></td>
                <td  class="align"><input type="radio" name=breakfast id='bn'  value=no><label for="bn">No</label></td>
                </tr>
                <tr></tr>
                <tr>
                <td  class="align"><label>Include Lunch (+35 JOD)</label></td>
                <td  class="align"><input type="radio" name=lunch id="ly" value=yes> <label for="ly">Yes</label></td>
                <td  class="align"> <input type="radio" name=lunch id="ln" value=no><label for="ln">No</label></td>
                </tr>
                <tr></tr>
                <tr>
                <td  class="align"><label>Include Dinner (+20 JOD)</label></td>
                <td  class="align"><input type="radio" name=dinner id=yd value=yes> <label for="yd">Yes</label></td>
                <td  class="align"><input type="radio" name=dinner id="nd"  value=no><label for="nd">No</label></td>
                </tr>
                <tr></tr>
                <tr>
                    <td  class="align"><label>Would you like to have a tour guide</label></td>
                    <td  class="align"><input type="radio" name=guide id=yg value="yes"> <label for="yg">Yes</label></td>
                <td  class="align"><input type="radio" name=guide id=ng value="no"><label for=ng >No</label></td>
                </tr>
                </table>
            </fieldset>
            </div>
            <div class='formdiv'>
            <fieldset>
                <legend>Payment Method</legend>
                <table>
                    <tr>
                        <td><input type="radio" name="payment" id="cash" value="Cash"><label for="cash">Cash</label></td>
                    </tr>
                    
                    <tr>
                        <td><input type="radio" name="payment" id="card" value="Laflef VIP Card"><label for="card">Laflef VIP Card</label></td>
                    </tr>
                </table>
            </fieldset>
            
            </div>
            <div class="formdiv" >
                <input type="submit" value="Submit" name="submit" class="buttons" onclick="validate()">
                <input type="reset" class="buttons" onclick="resetbutton()">
            </div>

            <span><input type="number" id=costs name=cost></span>
            </form>
            
            </div>
        </div>

        <script>
            function validate(){
                cost=0;
                
                var inputs = document.getElementsByClassName("text");
                 for (var j = 0; j < inputs.length; j++) {
                    if(inputs[j].value == ""){
                    event.preventDefault();
                    alert("Required Values are Missing"); 
                    returnToPreviousPage();
                    return false;
                     }
                     
                 }

                 var inputs2 = document.getElementsByClassName("travelers");
                 for (var j = 0; j < inputs2.length; j++) {
                    if(inputs2[j].value == null){
                    event.preventDefault();
                    alert("Required Values are Missing"); 
                    returnToPreviousPage();
                    return false;
                     }
                     
                 }
                 
                 var selected=document.getElementById('desti').value;
                if(selected=="none"){
                    event.preventDefault();
                    alert("Required Values are Missing"); 
                    returnToPreviousPage();
                    return false;
                }
               

                var checkRadio4 = document.querySelector('input[name="guide"]:checked'); 
                    if(checkRadio4 == null) { 
                        
                        event.preventDefault();
                        alert("Required Values are Missing"); 
                        returnToPreviousPage();
                        return false;
                    } 

                var checkRadio5 = document.querySelector('input[name="payment"]:checked'); 
                    if(checkRadio5 == null) { 
                        
                        event.preventDefault();
                        alert("Required Values are Missing"); 
                        returnToPreviousPage();
                        return false;
                    } 
                var checkRadio5 = document.querySelector('input[name="payment"]:checked'); 
                    if(checkRadio5 == null) { 
                        
                        event.preventDefault();
                        alert("Required Values are Missing"); 
                        returnToPreviousPage();
                        return false;
                    } 
                
                document.getElementById("costs").value=cost;
                
            }

            function resetbutton(){
                
            document.getElementById("myform").reset();
            

            }
        </script>
    </body>
</html>