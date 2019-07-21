<?php
include 'queries.php';

//This feature is a work in progress and should be regarded as such

if(isset($_POST)) {
    $email = $_POST['login'];
    $pw = $_POST['pw'];
}

if(userExists($email, 'stockist')) {
    
    // Retrieve stored hash
    $user = mysqli_fetch_assoc(getUser($email, 'stockist'));
    $stored = $user['pword_hash'];

    // Check for password match
    if(password_verify($pw, $stored)) {
        setcookie('stockist_verified', 'true', 0 , '/'); // create cookie     
        header("Location: ../stockists.php?success");
        echo "<script>alert('Passed')</script>";   
    } else {
        // incorrect password
        header("Location: ../stockists.php");
    }
    
} else {
    // Reject login attempt
    header("Location: ../stockists.php");
}
    
?>
