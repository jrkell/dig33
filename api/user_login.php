<?php
include '../header.php';

//This feature is a work in progress and should be regarded as such

if(isset($_POST)) {
    $userId = $_POST['email'];
    $pass = $_POST['password'];
}


if(userExists($userId)) {
    // Create hash of input password
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    
    // Retrieve stored hash
    $user = mysqli_fetch_assoc(getUser($userId));
    $stored = $user['pword_hash'];
    
    // Check for password match
    if($hash == $stored) {
        echo "<script>alert('Passed')</script>";
        setcookie("user_verified","true", 0 , "/"); // create cookie
        header("Location: ../pinata_bash.php");
        die();
    } else {
        echo "<script>alert('incorrect password')</script>";
        // incorrect password
    }
    
} else {
    // Reject login attempt
}

include '../footer.php'; ?>
