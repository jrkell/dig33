<?php
    include 'queries.php';

    // if the form has been submitted, assign to variables
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
            setcookie('stockist_verified', $email, 0 , '/'); // create cookie     
            header("Location: ../stockist_cart.php");
        } else {
            // incorrect password
            header("Location: ../wholesale.php?incorrect");
        }
        
    } else {
        // unknown user
        header("Location: ../wholesale.php?incorrect");
    }
    
?>
