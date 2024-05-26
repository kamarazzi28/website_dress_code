<?php
//Starts a new session or resumes the existing session.
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=stylesheet href="styles/test.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dress Code</title>
</head>
<body>
<header>
    <nav class="navigation">
        <ul>
            <li><a href="main.php" >HOME</a></li>
            <li><a href="test.php" class="current-page">FIND OUT<br>YOUR SHAPE</a></li>
            <li><a href="bodyshapes.php">BODYSHAPES</a></li>
            <li><a href="trends.php">TRENDS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
    <div class="sign-in">
        <a href="login.php">
            <img src="images/user.png" alt="Sign in">
        </a>
    </div>
</header>
<div class="box_left">
    <p class="step1"> STEP 1: MEASURE YOURSELF. </p>
    <img src="images/test_mes.png" alt="test_girl">
</div>
<div class="box_right">
    <p class="step2"> STEP 2: WRITE IT DOWN. </p>
    <form>
        <label for="shoulders"></label>
        <input id="shoulders" placeholder="Shoulders" type="number" min="45" max="350" required>

        <label for="bust"></label>
        <input id="bust" placeholder="Bust" type="number" min="45" max="350" required>

        <label for="waist"></label>
        <input id="waist" placeholder="Waist" type="number" min="45" max="350" required>

        <label for="hips"></label>
        <input id="hips" placeholder="Hips" type="number" min="45" max="350" required>

        <p class="p-text">❗Please fill in all fields with numbers between 45 and 350.</p>
    </form>
    <p CLASS="step3"> STEP 3: GET YOUR RESULT. </p>
    <button type="button" id="result-button">MY SHAPE IS...</button>
    <p id="result-text"></p>
</div>

<script src="scripts/test.js"></script>
</body>
</html>