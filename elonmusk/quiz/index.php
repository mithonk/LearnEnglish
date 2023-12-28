<?php include 'database.php'
?>
<?php
$query = "select * from question";
$results = $mysqli->query($query);
$total = $results->num_rows;
?>

<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <header>
        <div class="container">

            <h2>Quize</h2>
            <a href="../index.php">Home</a>
        </div>

    </header>

    <main>
        <div class="container">
            <p>This is multiple choice quize</p>
            <ul>
                <li><strong>Number of Question:</strong><?php echo $total; ?></li>
                <li><strong>Type:</strong>Multiple choice</li>
                <li><strong>Estimated Time:</strong><?php echo $total * 0.5; ?>Minutes</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>

        </div>

    </main>
</body>

</html>