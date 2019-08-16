<?php

include 'queries.php';

//This feature is a work in progress and should be regarded as such

if(isset($_POST)) {
    $code = $_POST['code'];
}

if(isValidCode($code)) {
    
        setcookie('code_entered', $code, 0 , '/'); // create cookie
        header("Location: ../pinata_bash.php");
    
} else {
    if(isset($_COOKIE['code_entered'])) {
        setcookie('code_entered', '', -1 , '/'); // delete cookie
    }
    header("Location: ../pinata_bash.php?invalid");
}
?>
