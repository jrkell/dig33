<?php

include 'queries.php';

//This feature is a work in progress and should be regarded as such
//echo '<script type="text/javascript">alert("hello!");</script>';
if(isset($_POST)) {
    $code = $_POST['code'];


    if(isValidCode($code)) {

            setcookie('code_entered', $code, 0 , '/'); // create cookie
            header("Location: ../pinata_bash.php");

    } else {
        if(isset($_COOKIE['code_entered'])) {
            setcookie('code_entered', '', -1 , '/'); // delete cookie
        }
        header("Location: ../pinata_bash.php?invalid");
    }
} else {
//    echo '<script>alert("hello");</script>';
    if(isset($_COOKIE['code_entered']) && isset($_COOKIE['user_verified'])) {
        $code = $_COOKIE['code_entered'];
        $user = $_COOKIE['user_verified'];
        if(!codeEntry($code, $user)) {
            echo "<script>alert('no good');</script>";
//            header("Location: ../");
        }
        
        setcookie('code_entered', '', -1 , '/');
    } else {
        echo "<script>alert('really no good');</script>";
        setcookie('code_entered', '', -1 , '/');
                    header("Location: ../index.php");
//        header("Location: ../pinata_bash.php");
//        echo "<script>alert('really no good')</script>";
    }
}
?>
