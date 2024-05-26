<?php
// Include necessary files
require_once 'functions/db_file.php';
require_once 'functions/validate_registration.php';
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


// Check if the form is submitted with a new username
if (isset($_POST['username'])) {
    $newUsername = $_POST['username'];
    // Check if the new username is available and valid
    $username_valid1 = isUsernameAvailable($newUsername);
    $username_valid = validate_name($newUsername);
    // If the new username is valid, update user username
    if ($username_valid&&$username_valid1){
        $_SESSION['user'] = editUserUsername($username, $newUsername);
        header('Location: main.php');
        exit();
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/editPage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Edit Profile</title>
</head>
<body>
<div class="profile">

    <h2>Edit Profile</h2>

    <form method="post" class="profile-content">
        <div class="profile-photo">
            <img src="https://zwa.toad.cz/~ishmukam/myproject/data/<?php echo($photo); ?>" alt="Profile Photo">
            <div class="button-links">
                <input type="submit" value="Save Changes" class="input-submit">
                <a href="profilePage.php">Back</a>
            </div>
        </div>
        <div class="profile-info">
            <label for="name">NAME</label>
            <input type="text" id="name" name="username" value="<?php echo(htmlspecialchars($username)); ?>">
            <span class="error" id="name_error">
            <?php
            // Display error message if the new username is not valid
            if (isset($newUsername) && isset($username_valid) && !$username_valid) {
                if (strlen($newUsername) < 5){
                    echo '<span class ="error_name">At least 5 characters</span>';
                }
            }
            if (isset($username_valid1) && !$username_valid1){
                echo '<span class ="error_name">Not available</span>';
            }
            ?>
            </span>

            <label for="Gender">GENDER</label>
            <select id="Gender" name="Gender" disabled="disabled">
                <option value="women">Woman</option>
                <option value="men">Man</option>
                <option value="pntr">Prefer not to respond</option>
            </select>

            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" value="<?php echo(htmlspecialchars($email)); ?>" disabled="disabled">



        </div>
    </form>
</div>

</body>
</html>