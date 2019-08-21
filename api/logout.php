<?php

    // logout for stockist
    if(isset($_GET['stockist'])) {
        if(isset($_COOKIE['stockist_verified'])) {
        // set cookie to time in the past - browser deletes it
            setcookie('stockist_verified', '', -1 , '/');
        }
    }

    // logout for pinata bash user
    if(isset($_GET['user'])) {
        if(isset($_COOKIE['user_verified'])) {
        // set cookie to time in the past - browser deletes it
            setcookie('user_verified', '', -1 , '/');
        }
        if(isset($_COOKIE['code_entered'])) {
            // set cookie to time in the past - browser deletes it
            setcookie('code_entered', '', -1 , '/');
        }
    }

    // redirect back to index
    header("Location: ../");

?>
