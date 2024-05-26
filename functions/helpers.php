<?php
// Checks if the user is logged in; otherwise, redirects to the login page.
function checkLogin() {
    // Check if the session or user information is not set
    if (!$_SESSION || !$_SESSION['user']) {
        // Redirect to the login page
        header('Location: login.php');
        exit();
    }
}

/**
 * Extracts user information from the session.
 *
 * @return array Returns an array containing user information.
 */
function extractUserInfo() {
    return $_SESSION['user'];
}