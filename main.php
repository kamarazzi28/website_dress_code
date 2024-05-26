<?php
//Starts a new session or resumes the existing session.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dress Code</title>
</head>
<body>
<header>
    <nav class="navigation">
        <ul>
            <li><a href="main.php" class="current-page">HOME</a></li>
            <li><a href="test.php">FIND OUT<br>YOUR SHAPE</a></li>
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

<div class="women">
    <img src="images/backgr_2.png" alt="women">
</div>

<div class="main_text">
    <p class="dresscode">DRESS<br>CODE.</p>
    <p>
        Find your unique figure type with our formula. <br>
        No worries about your size.<br><br>
        Embrace your personal shape and discover <br> your perfect fit by clicking below.
    </p>
</div>

</body>
</html>
