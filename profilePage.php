<?php
// Include necessary files
include_once "functions/helpers.php";
// Start or resume the session
session_start();
// Check if the user is logged in, otherwise redirect to login page
checkLogin();
// Extract user information
$userInfo = extractUserInfo();
$username = $userInfo['username'];
$email = $userInfo['email'];
$password = $userInfo['password'];
$photo = $userInfo['photo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/profilePage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>My Profile</title>
</head>
<body>
<div class="profile">

    <h2>My Profile</h2>

    <div class="profile-content">
        <div class="profile-photo">
            <!-- Display user's profile photo -->
        <img src="https://zwa.toad.cz/~ishmukam/myproject/data/<?php echo($photo); ?>" alt="Profile Photo">
            <div class="buttons-links">
                <!-- Navigation links -->
                <a href="main.php">Home Page</a>
                <button type="button"><a href="editPage.php" class="button-link">Edit Profile</a></button>
                <a href="logout.php">Log out</a>
            </div>

        </div>
        <div class="profile-info">
            <!-- Display user information -->
        <label for="name">NAME</label>
        <input type="text" id="name" value="<?php echo(htmlspecialchars($username)); ?>" readonly>

        <label for="gender">GENDER</label>
        <input type="text" id="gender" value="Women" readonly>

        <label for="email">EMAIL</label>
        <input type="email" id="email" value="<?php echo(htmlspecialchars($email)); ?>" readonly>

        <label for="password">PASSWORD</label>
        <input type="password" id="password" value="<?php echo(htmlspecialchars($password)); ?>" readonly>
        </div>
    </div>
</div>
</body>
</html>