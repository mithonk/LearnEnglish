<?php
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Asia/Colombo");


$con = mysqli_connect("localhost", "root", "", "elonmusk"); //Connection varible

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
