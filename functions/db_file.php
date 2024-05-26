<?php

//Defines the path to the user database file.
const database = __DIR__ . "/../data/users.json";

/**
 * Loads the user database from the specified JSON file.
 *
 * @global array $db Global array representing the user database.
 */
$file = @file_get_contents(database);

// Check if the database file is not found, redirect to an error page
if(!$file){
    header('Location: errors/error-database-not-found.html');
    exit();
}

$db = @json_decode($file, true);

// Check if the database could not be parsed, redirect to an error page
if(!is_array($db)) {
    header('Location: errors/error-database-not-parsed.html');
    exit(1);
}

/**
 * Checks the availability of a username.
 *
 * @param string $username The username to check.
 * @global array $db Global array representing the user database.
 * @return bool Returns false if the username is already taken, true otherwise.
 */
function isUsernameAvailable($username){
    global $db;

    foreach ($db['users'] as $user){
        if ($user['username'] == $username){
            return false;
        }
    }
    return true;
}

/**
 * Checks the existence of a user and returns the user details if found.
 *
 * @param string $username The username to check.
 * @global array $db Global array representing the user database.
 * @return array|null Returns an array of user details if the username exists, or null if not found.
 */
function existence_of_user($username){
    global $db;

    foreach ($db['users'] as $user){
        if ($user['username'] == $username){
            return $user;
        }
    }
    return null;
}

/**
 * Adds a new user to the database.
 *
 * @param string $username The username of the new user.
 * @param string $email The email address of the new user.
 * @param string $password The password of the new user (hashed using PASSWORD_DEFAULT).
 * @param array $photo The photo URL or path of the new user.
 * @global array $db Global array representing the user database.
 * @return array Returns the details of the newly added user.
 */
function addUser($username, $email, $password, $photo){
    global $db;
    // Copy the uploaded photo to the data directory
    copy($photo['tmp_name'], __DIR__ . '/../data/' . htmlspecialchars($photo['name']));
    // Create a new user array
    $new_user = [
        "username" => $username,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "photo" => htmlspecialchars($photo['name']),
    ];
    // Add the new user to the database
    $db['users'][] = $new_user;
    // Save the database after adding the new user
    saveDatabase();
    // Return new user
    return $new_user;
}

/**
 * @param $username
 * @param $password
 * @return array
 */
function editUserPassword($username, $password) {
    global $db;

    foreach ($db['users'] as $key => $user) {
        // Find the user by username
        if ($user['username'] !== $username) {
            continue;
        }
        // Update the user's password and save the database
        $db['users'][$key]['password'] = password_hash($password, PASSWORD_DEFAULT);
        saveDatabase();
        return $db['users'][$key];
    }

    // TODO: handle user not found;
    exit(1);
}
function editUserUsername ($username, $newUsername) {
    global $db;

    foreach ($db['users'] as $key => $user) {
        // Find the user by username
        if ($user['username'] !== $username) {
            continue;
        }
        // Update the user's password and save the database
        $db['users'][$key]['username'] = $newUsername;
        saveDatabase();
        return $db['users'][$key];
    }

    // TODO: handle user not found;
    exit(1);
}

/**
 * Saves the current state of the database to a JSON file.
 *
 * @global array $db Global array representing the user database.
 * @return void
 */
function saveDatabase(){
    global $db;
// Convert the database array to JSON
    $json = @json_encode($db);
// Check if JSON encoding fails, redirect to an error page
    if (!$json){
        header('Location: errors/error.html');
        exit();
    }
// Write the JSON data to the database file
    $result = @file_put_contents(database, $json);
// Check if writing to file fails, redirect to an error page
    if (!$result){
        header('Location: errors/error.html');
        exit();
    }
}