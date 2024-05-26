<?php
// Start the session to store user data
session_start();
// Include necessary files
require_once 'functions/db_file.php';
require_once 'functions/validate_registration.php';
// Initialize variables for username and password
$username = htmlspecialchars("");
$password = htmlspecialchars("");
// Check if the registration form is submitted
if (isset($_POST['register'])){
    // Retrieve user input from the form
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];
    $photo = $_FILES['photo'];
    // Validate user input
    $username_valid = validate_name($username);
    $email_valid = validate_email($email);
    $password_valid = validate_password($password);
    $photo_valid = validate_photo($photo);
    $username_check = isUsernameAvailable($username);
    $check_two_passwords = check_password($password, $password_repeat);
    // If all validations pass, add the user and redirect to main.php
    if ($username_valid && $email_valid && $password_valid && $photo_valid && $username_check && $check_two_passwords){
        $_SESSION['user'] = addUser($username, $email, $password, $photo);
        header('Location: main.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/signin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Sign up</title>
    <script src="scripts/validation.js"></script>
</head>
<body>
<div class="main" id="registration">
    <div class="window">
        <h1>Sign up</h1>
        <form id="register" method="post" enctype="multipart/form-data">
            <div class="flex_container blue_box">

                <div class="signup_form">
                    <div class="form_group">
                        <label for="name">
                            <i class="zmdi zmdi-account material-icons-name"></i>
                        </label>
                        <input type="text" name="name" id="name" placeholder="Username" value="<?= htmlspecialchars($username) ?>" required>
                        <span class="error" id="name_error"></span>
                        <script>
                            name_check();
                        </script>

                        <?php
                        // Display error messages for username validation
                        if (isset($username_valid) && !$username_valid) {
                            echo '<span class ="error_name">Username is shorter than 5 characters</span>';
                        }elseif(isset($username_check) && !$username_check){
                            echo '<span class ="error_name">This username already taken</span>';
                        }
                        ?>
                    </div>

                    <div class="form_group">
                        <label for="email">
                            <i class="zmdi zmdi-email"></i>
                        </label>
                        <input type="email" name="email" id="email" placeholder="Your email" required>

                        <?php
                        // Display error message for email validation
                        if (isset($email_valid) && !$email_valid) {
                            echo '<span class ="error_name">Invalid email</span>';
                        }
                        ?>
                    </div>
                    <div class="form_group">
                        <label for="password">
                            <i class="zmdi zmdi-lock"></i>
                        </label>
                        <input type="password" name="password" id="password" placeholder="Password" required>

                        <?php
                        // Display error messages for password validation
                        if (isset($password_valid) && !$password_valid) {
                            if (strlen($password) < 8){
                                echo '<span class ="error_name">Password is shorter than 8 characters</span>';
                            } elseif (!validate_password($password)){
                                echo '<span class ="error_name">Password must contain numbers, lower and upper case letters</span>';
                            }
                        }
                        ?>
                    </div>
                    <div class="form_group">
                        <label for="password_repeat">
                            <i class="zmdi zmdi-lock-outline"></i>
                        </label>
                        <input type="password" name="password_repeat" id="password_repeat"
                               placeholder="Repeat your password"  required>
                        <span class="error" id="password_error"></span>

                        <?php
                        // Display error message for password match validation
                        if(isset($check_two_passwords) && !$check_two_passwords){
                            echo '<span class ="error_name">Password do not match</span>';
                        }
                        ?>
                    </div>
                    <script>
                        password_check();
                    </script>
                    <div class="signup_picture">
                        <div class="form_group">
                            <label for="user_photo" class="picture_label"></label>
                            <input type="file" name="photo" id="user_photo" accept="image/png" required>

                            <?php
                            // Display error message for photo validation
                            if (isset($photo_valid) && !$photo_valid) {
                                echo '<span class ="error_name">Incorect type of photo</span>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="registration_submit">
                        <input type="submit" value="Register" name="register" class="button" id="reg_but">
                    </div>
                </div>
            </div>
        </form>
        <a href="login.php">Have already signed up?</a>
    </div>
</div>
</body>
</html>