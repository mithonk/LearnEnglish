<?php
$fname = ""; //First name
$lname = ""; //Last name
$em = ""; //Email
$password = ""; //Password
$password2 = ""; //Password 2
$date = ""; //Sign up date
$error_array = array(); //Holds error messages

if (isset($_POST['register_button'])) {


    //First name
    $fname = strip_tags($_POST['reg_fname']); //Remove html tag
    $fname = str_replace(' ', '', $fname); //remove spaces
    $fname = ucfirst(strtolower($fname)); //Uppercase 
    $_SESSION['reg_fname'] = $fname; //Stores first name into session variable

    //Last name
    $lname = strip_tags($_POST['reg_lname']); //Remove html tag
    $lname = str_replace(' ', '', $lname); //remove spaces
    $lname = ucfirst(strtolower($lname)); //Uppercase 
    $_SESSION['reg_lname'] = $lname; //Stores last name into session variable

    //Email
    $em = strip_tags($_POST['reg_email']); //Remove html tag
    $em = str_replace(' ', '', $em); //remove spaces
    $em = ucfirst(strtolower($em)); //Uppercase 
    $_SESSION['reg_email'] = $em; //Stores email into session variable


    //Password
    $password = strip_tags($_POST['reg_password']); //Remove html tag
    $password2 = strip_tags($_POST['reg_password2']); //Remove html tag

    //Date
    $date = date("Y-m-d"); //Current date



    if (strlen($fname) > 25 || strlen($fname) < 2) {
        array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
    }
    if (strlen($lname) > 25 || strlen($lname) < 2) {
        array_push($error_array, "Your last name must be between 2 and 25 characters<br>");
    }
    if ($password != $password2) {
        array_push($error_array, "Your passswords don't match<br>");
    } else {
        if (preg_match('/[^A-Za-z0-9]/', $password)) {
            array_push($error_array, "Your password can only contain english characters or numbers<br>");
        }
    }
    if (strlen($password) > 30 || strlen($password) < 5) {
        array_push($error_array, "Your password must be between 5 and 30 characters<br>");                      //error
    }

    if (empty($error_array)) {
        $password = md5($password); //Encrypt password before sending to database

        //Generate username by concatenating firstname and lastname 
        $username = strtolower($fname . "_" . $lname);
        $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");

        $i = 0;
        //if username exists add number to username
        while (mysqli_num_rows($check_username_query) != 0) {
            $i++; //Add 1 to i
            $username = $username . "_" . $i;
            $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
        }
        // Profile picture assignment 
        $rand = rand(1, 2); //Random number between 1 and 2

        if ($rand == 1)
            $profile_pic = "assets/images/profile_pics/defaults/head_deep_blue.png";
        else if ($rand == 2)
            $profile_pic = "assets/images/profile_pics/defaults/head_emerald.png";

        $query = mysqli_query($con, "INSERT INTO users VALUES ('','$fname','$lname','$username','$em','$password','$date','$profile_pic')");
        array_push($error_array, "<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>");

        //Clear session variables
        $_SESSION['reg_fname'] = "";
        $_SESSION['reg_lname'] = "";
        $_SESSION['reg_email'] = "";
    }
}
