<?php
include 'config.php';

$loginName = $_POST["lname"];
$loginemail = $_POST["lemail"]; 
$loginphone = $_POST["lphone"];
$loginpassword = $_POST["lpassword"];

$dNameSql = "SELECT schoolname from schooladmin";
$dEmailSql = "SELECT schoolemail from schooladmin";
$dPhoneSql = "SELECT schoolphone from schooladmin";
$dPassword = "SELECT password from schooladmin";

?>
