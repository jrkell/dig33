<?php
include '../header.php';

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
        echo "<script>alert('Passed')</script>";
        setcookie('user_verified', 'true', 0 , '/'); // create cookie
//        echo "<script>window.location.href = '../pinata_bash.php'</script>";
        
    } else {
        // incorrect password
        echo "<script>window.location.href = '../pinata_bash.php?fail=pass'</script>";
    }
    
} else {
    // Reject login attempt
    echo "<script>window.location.href = '../pinata_bash.php?fail=user'</script>";
}

include '../footer.php'; ?>
