<?php include 'database.php'; ?>

<?php session_start();

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
if ($_POST) {
    //echo "I've been Submitted";
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];

    $next = $number + 1;

    $query = "select * from question";
    $result = $mysqli->query($query);
    $total = $result->num_rows;
    //get correct choice
    $query = "select * from choices where question_number=$number and is_correct=1";

    $result = $mysqli->query($query);
    //$row=$result->fetch_assoc();

    $correct_choice = $row['id'];
    if ($correct_choice = $selected_choice) {
        $_SESSION['score']++;
    }
    if ($number == $total) {
        header("location:final.php");
    } else {
        header("location:question.php?n=" . $next);
    }
}
?>