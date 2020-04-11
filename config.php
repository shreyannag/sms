<?php

$servername = 'localhost';
$username = 'root';
$password = '';



$connect = new mysqli($servername,$username,$password);
//Check Connection
if($connect->connect_error){
    die("Connection failed: ".$connect->connect_error);
}
?>