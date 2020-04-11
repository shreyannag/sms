<?php
include 'config.php';
$schoolname = $_POST["regschoolname"];
$schoolphone = $_POST["regschoolphone"];
$schooladdress = $_POST["regschooladdress"];
$schoolemail = $_POST["regschoolemail"];
$password = $_POST["regpassword"];
$question = $_POST["regquestion"];
$answer = $_POST["reganswer"];

$confirmation = '';

# echo $schooladdress."<br>".$schoolphone."<br>".$schoolemail."<br>".$schoolphone."<br>".$password."<br>".$answer;


# create database

$sql = "CREATE DATABASE IF NOT EXISTS sms";
if($connect->query($sql)==TRUE){
    echo "Database created";
}else{
    echo "<br>Error creating database ".$connect->error;
}


$change = "USE sms";
if($connect->query($change)==TRUE){
    echo "<br>Using sms database";
}else{
    echo "<br>Error changing database ".$connect->error;
}


#create table admin
$sql2 = "CREATE TABLE IF NOT EXISTS schooladmin(id int auto_increment primary key,schoolname text,schoolphone text,schooladdress text,schoolemail text,schoolpassword text,question text,answer text)";

if($connect->query($sql2)==TRUE){
    echo "<br>School Admin Table Created";
}else{
    echo "<br>Error creating table ".$connect->error;
}

#insert data into table admin

$insertdata = "INSERT INTO schooladmin(schoolname,schoolphone,schooladdress,schoolemail,schoolpassword,question,answer) VALUES ('$schoolname','$schoolphone','$schooladdress','$schoolemail','$password','$question','$answer')";

if($connect->query($insertdata)==TRUE){
    echo "<br>Successfully inserted values";
    header("Location: index.php?confirmation=Successfull");

}else{
    echo "<br>Error inserting values".$connect->error;
}

$connect->close();

?>
