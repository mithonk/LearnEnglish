<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="assets/js/register.js"></script>
    <title>elonmusk</title>
</head>

<body>

    <?php
    if (isset($_POST['register_button'])) {
        echo '
    <script>
        $(document).ready(function(){
            $(".first").hide();
            $(".second").show();
        });
    </script>
    ';
    }

    ?>


    <div class="wrapper">
        <div class="login_box">
            <div class="login_header">
                <h1>ElonMusk</h1>
                Login or sign up below!
            </div>


            <div class="first form-group">
                <form action="register.php" method="POST">
                    <input type="email" class="form-control" name="log_email" placeholder="Email Address" value="" required />

                    <br />

                    <input type="password" class="form-control" name="log_password" placeholder="Password" />

                    <br />
                    <?php if (in_array("Email or password was incorrect<br />", $error_array)) echo "Email or password was incorrect<br />"; ?>

                    <input type="submit" name="login_button" value="Login" />

                    <br />

                    <p>Need and account? Register <a href="#" id="signup" class="signup">here!</a> </p>

                </form>
            </div>


            <div class="second form-group">
                <form action="register.php" method="POST">
                    <input type="text" class="form-control" name="reg_fname" placeholder="First Name" value="<?php if (isset($_SESSION['reg_fname'])) {
                                                                                                                    echo $_SESSION['reg_fname'];
                                                                                                                } ?>" required />

                    <br>
                    <?php if (in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>



                    <input type="text" class="form-control" name="reg_lname" placeholder="Last Name" value="<?php if (isset($_SESSION['reg_lname'])) {
                                                                                                                echo $_SESSION['reg_lname'];
                                                                                                            } ?>" required />

                    <br>
                    <?php if (in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>



                    <input type="email" class="form-control" name="reg_email" placeholder="Email" value="<?php if (isset($_SESSION['reg_email'])) {
                                                                                                                echo $_SESSION['reg_email'];
                                                                                                            } ?>" required />

                    <br>
                    <?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; ?>
                    <?php if (in_array("Invalid format <br>", $error_array)) echo "Invalid format <br>"; ?>

                    <input type="password" class="form-control" name="reg_password" placeholder="Password" required />

                    <br>

                    <input type="password" class="form-control" name="reg_password2" placeholder="Confirm Password" required />

                    <br>
                    <?php if (in_array("Your passswords don't match<br>", $error_array)) echo "Your passswords don't match<br>";
                    else if (in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
                    else if (in_array("Your password must be between 5 and 30 characters<br>", $error_array)) echo "Your password must be between 5 and 30 characters<br>"; ?>




                    <input type="submit" name="register_button" value="Register" />

                    <br>

                    <?php if (in_array("<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>"; ?>
                    <p>Already have an account? Sign in <a href="#" id="signin" class="signin">here!</a></p>
                </form>

            </div>

        </div>
    </div>



</body>

</html>