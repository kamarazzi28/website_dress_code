<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=stylesheet href="styles/trends.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Dress Code</title>
</head>
<body>
<header>
    <nav class="navigation">
        <ul>
            <li><a href="main.php" >HOME</a></li>
            <li><a href="test.php" >FIND OUT<br>YOUR SHAPE</a></li>
            <li><a href="bodyshapes.php" >BODYSHAPES</a></li>
            <li><a href="trends.php" class="current-page">TRENDS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
    <div class="sign-in">
        <a href="login.php">
            <img src="images/user.png" alt="Sign in">
        </a>
    </div>
</header>
<div class="trend-content" id="contentContainer">
    <h1 id="pageTitle">.</h1>
    <p class="trend-text" id="pageText"></p>
</div>

<div class="urlnav">
    <a class="navbutton pageButton" data-page="1">1</a>
    <a class="navbutton pageButton" data-page="2">2</a>
    <a class="navbutton pageButton" data-page="3">3</a>
    <a class="navbutton pageButton" data-page="4">4</a>
    <a class="navbutton pageButton" data-page="5">5</a>
</div>

<script src="scripts/trends.js"></script>
</body>
</html>