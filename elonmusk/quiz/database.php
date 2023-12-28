<?php 

$db_host="localhost";
$db_name="elonmusk";
$user="root";
$pass="";

$mysqli = new mysqli($db_host,$user,$pass,$db_name);

//Check connection
if ($mysqli->connect_error){
    die ("Connection Failed:".$mysqli->connect_error);
}
else {
    //echo "db successfully connected";
}
