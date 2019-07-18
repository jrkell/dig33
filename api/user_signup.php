<?php
include '../header.php';
require 'queries.php';

if(isset($_POST)) {
    $userId = $_POST['email'];
    $first = $_POST['first'];
    $sur = $_POST['sur'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
}


if(userExists($userId)) {
    echo "<script>
        alert('An account already exists with that email!<br>Try logging in instead.');
        window.location.href = '../pinata_bash.php';
    </script>";
} else if($pass1 != $pass2) {
    // Reject sign up and prompt to correct password
} else {
    addUser($userId, $first, $sur, $pass1);
}

include '../footer.php'; ?>
