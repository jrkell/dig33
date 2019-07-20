<?php
include '../header.php';

//This feature is a work in progress and should be regarded as such

if(isset($_POST)) {
    $email = $_POST['login'];
    $pw = $_POST['pw'];
}

if(stockistExists($email)) {
    
    // Retrieve stored hash
    $user = mysqli_fetch_assoc(getStockist($email));
    $stored = $user['pword_hash'];

    // Check for password match
    if(password_verify($pw, $stored)) {
        echo "<script>alert('Passed')</script>";
        setcookie('stockist_verified', 'true', 0 , '/'); // create cookie
        // Redirect?
        echo "<script>window.location.href = '../stockists.php?success'</script>";
        
    } else {
        // incorrect password
        // Redirect?
    }
    
} else {
    // Reject login attempt
    // Redirect?
}
    
include '../footer.php'; ?>
