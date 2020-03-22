<?php

include 'config.php';

$schoolname = $_POST["regschoolname"];
$schoolphone = $_POST["regschoolphone"];
$schooladdress = $_POST["regschooladdress"];
$schoolemail = $_POST["regschoolemail"];
$password = $_POST["regpassword"];
$question = $_POST["regquestion"];
$answer = $_POST["reganswer"];


# echo $schooladdress."<br>".$schoolphone."<br>".$schoolemail."<br>".$schoolphone."<br>".$password."<br>".$answer;


# create database

$sql = "CREATE DATABASE IF NOT EXISTS sms";
if($connect->query($sql)==TRUE){
    echo "Database created";
}else{
    echo "Error creating database ".$connect->error;
}


$change = "USE sms";
if($connect->query($change)==TRUE){
    echo "Using sms database";
}else{
    echo "Error changing database ".$connect->error;
}


#create table admin
$sql2 = "CREATE TABLE IF NOT EXISTS schooladmin(schoolname text,schoolphone text,schoolemail text,schoolpassword text,question text,answer text)";

if($connect->query($sql2)==TRUE){
    echo "School Admin Table Created";
}else{
    echo "Error creating table ".$connect->error;
}

#insert data into table admin

$insertdata = "INSERT INTO schooladmin(schoolname text,schoolphone text,schooladdress text,schoolemail text,schoolpassword text,question text,answer text) VALUES ('$schoolname','$schoolphone','$schooladdress','$schoolemail','$password','$question','$answer')";

if($connect->query($insertdata)==TRUE){
    echo "Successfully inserted values";
}else{
    echo "Error inserting values".$connect->error;
}


?>