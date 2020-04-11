<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="w3-container w3-blue">
        <h1 align="center">School Management System</h1>
        </div>

    <div class="w3-cell-row w3-margin-top w3-margin-section">
        <div class="w3-container w3-cell">
            <div class="w3-container w3-red">
                <h2 align="center">Register School</h2>
              </div>
            <div class="w3-card-4 w3-padding-16">
                <form action="register.php" method="POST" class="w3-container">

                    <label>School Name</label>
                    <input class="w3-input" type="text" name="regschoolname">
                    
                    <label>School Phone</label>
                    <input class="w3-input" type="text" name="regschoolphone">
                    
                    <label>School Address</label>
                    <input class="w3-input" type="text" name="regschooladdress">
                    
                    <label>School Email</label>
                    <input class="w3-input" type="text" name="regschoolemail">

                    <label>Password</label>
                    <input id="passwd" class="w3-input" type="password" name="regpassword" oninput="checkstrength()">
                    <label>Confirm Password</label>
                    <input class="w3-input" type="password" name="confirmpassword">

                    <label>Set A Security Challenge Question</label>
                    <input class="w3-input" type="text" name="regquestion" placeholder="Your Question">
                    <input class ="w3-input" type="text" name="reganswer" placeholder="Your Answer">

                    <input type="submit" class="w3-button w3-blue w3-margin-top" value="Submit Details">
                    </form>
            </div>
        </div>
        <div class="w3-container w3-cell w3-margin">
            <div class="w3-container w3-green">
                <h2 align="center">School Login</h2>
              </div>
                      <!--Show if and only if, database and account generation is complete-->
                 <?php
                error_reporting(0);
                 if($_GET["confirmation"]!=''){
                    echo "<div id='hideauto' class='w3-container w3-indigo' onclick=hideafterhover()>";
                    echo "<p align=center>Database successfully created</p>";
                    echo "</div>";
                 }elseif($_GET["info"]=="Incorrect"){
                    echo "<div id='hideauto' class='w3-container w3-indigo' onclick=hideafterhover()>";
                    echo "<p align=center>Incorrect Credentials. Try Again</p>";
                    echo "</div>";
                 }else{
                 }
                ?>
            <div class="w3-card-4 w3-padding-16">
                <form class="w3-container" action="login.php" method="POST">

                    <label>School Name</label>
                    <input class="w3-input" type="text" name="lname">
                    
                    <label>School Email</label>
                    <input class="w3-input" type="text" name="lemail">

                    <label>Registered Phone</label>
                    <input class="w3-input" type="text" name="lphone">

                    <label>Password</label>
                    <input class="w3-input" type="password" name="lpassword">

                    <input type="submit" class="w3-button w3-blue w3-margin-top" value="Login">
                    <input type="button" class="w3-button w3-blue w3-margin-top" value="Forgot Password?">
                    </form>
            </div>
        </div>
    </div>
    <div class="footer-item"><p>Work In Progress</p></div>
</body>
<script src="custom.js"></script>
</html>