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
//connect to database
$change = "USE sms";
if($connect->query($change)==TRUE){
    echo "<br>Using sms database";
}else{
    echo "<br>Error changing database ".$connect->error;
}
//login query
if(isset($loginemail) && isset($loginpassword)){
    $sql = "SELECT id,schoolemail,schoolpassword FROM schooladmin WHERE schoolemail='".$loginemail."' AND schoolpassword='".$loginpassword."' LIMIT 1";
    if(($result = $connect->query($sql))==true)
    {
        if(($rows = $result->num_rows)==1){
            while($fieldinfo = $result->fetch_field()){
                $id = $fieldinfo->id;
            }
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["email"] = $loginemail;
            //free result memory
            $result -> free_result();
            //then head to dashboard
            header("Location: dashboard.php");
            }else{echo "<p>Account Not Found</p>";}
        }
        else{ echo "<p>Account Not Found</p>";}
        $connect->close();
    }
    else{
    echo "<p>Email not found</p>";
    }
?>