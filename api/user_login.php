<?php

include 'queries.php';

if(isset($_POST)) {
    $userId = $_POST['email'];
    $pass = $_POST['password'];
}

if(userExists($userId, 'pinata_user')) {
    
    // Retrieve stored hash
    $pinata_user = mysqli_fetch_assoc(getUser($userId, 'pinata_user'));
    $stored = $pinata_user['pword_hash'];

    // Check for password match
    if(password_verify($pass, $stored)) {
        setcookie('user_verified', $userId, 0 , '/'); // create cookie
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
