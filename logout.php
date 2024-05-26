<?php
/**
 * Clear session data, destroy the session, and redirect to the 'index.html' page.
 *
 * This script starts or resumes the session, unsets all session variables, destroys the session,
 * and then redirects the user to the 'index.html' page.
 *
 */

// Start or resume the session
session_start();
// Unset all session variables
session_unset();
// Destroy the session
session_destroy();
// Redirect to the 'main.php' page
header('Location: main.php');
