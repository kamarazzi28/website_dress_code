<?php
// Start or resume the session
session_start();
// Include necessary files
require_once 'functions/db_file.php';

/**
 * Check user login credentials and initiate a session if login is successful.
 *
 * This script checks if the login form is submitted, validates the provided username and password,
 * and starts a session if the login is successful, redirecting the user to 'notes.php'.
 */
// Check if the user is already logged in, redirect to 'profilePage.php'
if (isset($_SESSION['user']['username']) && $_SESSION && is_array($_SESSION) && is_array($_SESSION['user'])) {
    header('Location: profilePage.php');
    exit();
}

// Initialize the username variable
$username = '';

// Check if the login form is submitted
if(isset($_POST['login'])){
    // Retrieve username and password from the form
    $username = htmlspecialchars($_POST['name']);
    $password = $_POST['password'];

    // Check if the username is not empty
    if (!empty($username)) {
        // Store the entered username in a session variable for pre-filling the form
        $_SESSION['entered_username'] = $username;

        // Check if the user exists in the database
        $user = existence_of_user($username);
        if($user){
            // Verify the password
            if (password_verify($password, $user['password'])){
                // Start a session and redirect to 'main.php' if login is successful
                $_SESSION['user'] = $user;
                header('Location: main.php');
                exit();
            } else {
                $error = 'Password is incorrect';
            }
        } else {
            $error = 'Username not found';
        }
    } else {
        $error = 'Username cannot be empty';
    }
} else {
    // If the form is not submitted, check for a stored value in the session
    $username = isset($_SESSION['entered_username']) ? htmlspecialchars($_SESSION['entered_username']) : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
<div class="main" id="login">
    <div class="window">
        <h1>Log in</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="login_form">
                <div class="form_group">
                    <label for="name"></label>
                    <input type="text" name="name" id="name" placeholder="Username" value="<?php if (isset ($username)) {echo(htmlspecialchars($username));} ?>" required>
                </div>
                <div class="form_group">
                    <label for="password"></label>
                    <input type="password" autocomplete="off" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="error-message">
                    <?php if(isset($_POST['login']) && isset($error)) { echo $error; } ?>
                </div>
                <input type="submit" value="Log in" name="login" class="button">
            </div>
        </form>
        <a href="signup.php">Haven't signed up yet?</a>
    </div>
  </div>
</body>
</html>