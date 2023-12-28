<?php

require 'config/config.php';

if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
} else {
    header("Location: register.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/conversation.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/reading.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/dictionary.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/wordguessinggame.css" />


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <title>ElonMusk</title>
</head>

<body>
    <div class="top_bar">
        <div class="logo">
            <a href="index.php">ElonMusk</a>
        </div>
        <nav>
            <a href="">
                <?php echo $user['first_name'] ?>
            </a>
            <a href="index.php"><i class="fa fa-home fa-lg"></i></a>
            <a href="includes/handlers/logout.php"><i class="fa fa-sign-out fa-lg"></i></a>
        </nav>

    </div>