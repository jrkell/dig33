<?php
include 'queries.php';

//This feature is a work in progress and should be regarded as such

if(isset($_POST)) {
    $userId = $_POST['email'];
    $first = $_POST['first'];
    $sur = $_POST['sur'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $year . "-" . $month . "-" . $day;
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
}


if(userExists($userId, 'pinata_user')) {
    // Checks if account already exists and notifies user
    header("Location: ../pinata_bash.php?fail=exists");
} else if($pass1 != $pass2) {
    // Reject sign up and prompt to correct password
} else {
    // Password is hashed, user is added to database, page is redirected to login
    $hash = password_hash($pass1, PASSWORD_DEFAULT);
    addUser($userId, $first, $sur, $dob, $hash);
    header("Location: ../pinata_bash.php");
}
?>