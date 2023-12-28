<?php
include('includes/header.php');
?>

<div class="wrapper">
    <div class="wg">
        <h1>Guess the Word</h1>
        <div class="wcontent">
            <input type="text" class="typing-input" maxlength="1">
            <div class="inputs"></div>
            <div class="details">
                <p class="hint">Hint: <span></span></p>
                <p class="guess-left">Remaining guesses: <span></span></p>
                <p class="wrong-letter">Wrong letters: <span></span></p>
            </div>
            <button class="reset-btn">Reset Game</button>
        </div>
    </div>

    <script src="assets/js/wordguessinggame/words.js"></script>
    <script src="assets/js/wordguessinggame/script.js"></script>
</div>


<?php
include('includes/footer.php');
?>