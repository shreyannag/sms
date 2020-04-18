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

$loginemail = $_POST["lemail"]; 
$loginpassword = $_POST["lpassword"];
$id = 0;

//Check if loginName is empty
if(empty(trim($loginemail)) || empty(trim($loginpassword))){
    echo "<h1>Enter your email and password</h1>";
}
else{
    $sql = "SELECT id,schoolemail,schoolpassword FROM schooladmin WHERE schoolemail='".$loginemail."' AND schoolpassword='".$loginpassword."' LIMIT 1";
    //if query is successful returns true
    if($result = $connect->query($sql)){        
        //if number of rows is 1
        if(($rows = $result->num_rows)==1){
            //store id from query
            while($fieldinfo = $result->fetch_filed()){
                $id = $fieldinfo->id;
            }
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["email"] = $loginemail;
            //then head to dashboard
            header("Location: dashboard.php");
        }
    }else{
        echo "<h1>Invalid Credentials</h1>";
    }
    $connect->close();
}
?>