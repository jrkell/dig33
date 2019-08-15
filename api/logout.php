<?php

    if(isset($_GET['stockist'])) {
        if(isset($_COOKIE['stockist_verified'])) {
        // set cookie to time in the past - browser deletes it
            setcookie('stockist_verified', 'false', 0 , '/');
        }
    }

    if(isset($_GET['user'])) {
        if(isset($_COOKIE['user_verified'])) {
        // set cookie to time in the past - browser deletes it
            setcookie('user_verified', 'false', 0 , '/');
        }
    }

    // redirect back to index
    header("Location: ../");

?>
