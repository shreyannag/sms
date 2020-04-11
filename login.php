<?php
//intialize the session
session_start();

//Check whether the user is logged in, if yes then redirect to dashboard
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
    header("location: dashboard.php");
    exit;
}
//Include config file
include 'config.php';


$loginName = $_POST["lname"];
$loginemail = $_POST["lemail"]; 
$loginphone = $_POST["lphone"];
$loginpassword = $_POST["lpassword"];


//Check if loginName is empty
if(empty(trim($loginName)) || empty(trim($loginemail)) || empty(trim($loginphone)) || empty(trim($loginpassword))){
    header("index.php?info=Incorrect");
}
else{
    //Prepare sql statement
    $sql = "SELECT id,schoolname,schoolphone,schoolemail,schoolpassword FROM schooladmin WHERE schoolname = $loginName AND schoolphone = $loginphone AND schoolemail = $loginemail AND schoolpassword = $loginpassword";
    

}


?>
