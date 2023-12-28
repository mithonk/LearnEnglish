<?php session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <header>
        <div class="container quiz-header">

            <h2>Quize</h2>
            <a href="../index.php">Home</a>
        </div>

    </header>

    <main>
        <div class="container">
            <h2>You're Done</h2>
            <p>Congrats! You have completed the test</p>
            <p>Final score:<?php echo $_SESSION['score']; ?></p>
            <a href="question.php?n=1" class="start">Take Again</a>
        </div>

    </main>
</body>

</html>