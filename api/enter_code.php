<?php

include 'queries.php';

// If a post value for 'code' is set, the user has just entered their code in the form and it needs validating
if(isset($_POST['code'])) {
    $code = $_POST['code'];

    // If code entered is valid (stored in database)
    if(isValidCode($code)) {
        
        // If code has already been used
        if(duplicateCode($code)) {
            
            // Delete the cookie if one is set
            if(isset($_COOKIE['code_entered'])) {
                setcookie('code_entered', '', -1 , '/'); // delete cookie
            }
            // Redirect to pinata bash to inform the user that the code has been used
            header("Location: ../pinata_bash.php?duplicate");
            
        // Else if code has not been used
        } else {
            // Set the cookie that holds the code and redirect to pinata bash so the user can play
            setcookie('code_entered', $code, 0 , '/'); // create cookie
            header("Location: ../pinata_bash.php");
        }
    } else {
        if(isset($_COOKIE['code_entered'])) {
            setcookie('code_entered', '', -1 , '/'); // delete cookie
        }
        header("Location: ../pinata_bash.php?invalid");
    }
    
// Else if no post value for 'code' is set, the code has been validated and used to play pinata bash,
// meaning it must be entered into the database
} else {
    
    // Ensure that the user is logged in and has a valid cookie containing their code
    if(isset($_COOKIE['code_entered']) && isset($_COOKIE['user_verified'])) {
        
        // Store the code from the cookie so that the cookie may be deleted,
        // which is neccessary whether database insertion is successful or not
        $code = $_COOKIE['code_entered'];
        $user = $_COOKIE['user_verified'];
        setcookie('code_entered', '', -1 , '/');
        
        // If the database query inserting the code fails, inform the user and allow them to start again
        if(!codeEntry($code, $user)) {
            header("Location: ../pinata_bash.php?query-fail");
        }
        
    // If the user is not logged in or does not have a valid cookie containing their code, reset and start again
    } else {
        setcookie('code_entered', '', -1 , '/');
        header("Location: ../pinata_bash.php");
    }
}
?>
