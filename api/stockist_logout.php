<?php

    if(isset($_COOKIE['stockist_verified'])) {
    // set cookie to time in the past - browser deletes it
        setcookie('stockist_verified', 'false', 0 , '/');
    }

    // redirect back to index
    header("Location: ../");

?>