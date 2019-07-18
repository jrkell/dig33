<?php
include '../header.php';
require 'queries.php';

if(isset($_POST)) {
    $userId = $_POST['email'];
    $pass = $_POST['password'];
}


if(userExists($userId)) {
    // Check for password match
} else {
    // Reject login attempt
}

include '../footer.php'; ?>
