<?php
include('includes/header.php');
?>

<div class="wrapper">
    <div class="wra">
        <div class="content">
            <h2>English Dictionary</h2>
            <div class="fo">
                <div class="input">
                    <input type="text" id="input" placeholder="Type a word">
                    <button id="search_btn">Search</button>
                </div>
            </div>

            <div class="data-section">
                <p class="def"></p>
                <div class="audio"></div>
                <div class="not_found"></div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/dictionary.js"></script>







<?php
include('includes/footer.php');
?>