<?php

include 'queries.php';

//This feature is a work in progress and should be regarded as such

if(isset($_POST)) {
    $userId = $_POST['email'];
    $pass = $_POST['password'];
}

if(userExists($userId, 'pinata_user')) {
    
    // Retrieve stored hash
    $user = mysqli_fetch_assoc(getUser($userId, 'pinata_user'));
    $stored = $user['pword_hash'];

    // Check for password match
    if(password_verify($pass, $stored)) {
        setcookie('user_verified', 'true', 0 , '/'); // create cookie
        header("Location: ../pinata_bash.php");
        
    } else {
        // incorrect password
        header("Location: ../pinata_bash.php?fail=pass");
    }
    
} else {
    // Reject login attempt
    header("Location: ../pinata_bash.php?fail=user");
}
?>
