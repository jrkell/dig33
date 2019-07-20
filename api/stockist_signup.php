<?php
include '../header.php';

//This feature is a work in progress and should be regarded as such

if(isset($_POST)) {
    $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $pw = $_POST['pw'];
}


if(stockistExists($email)) {
    // Checks if account already exists and notifies user
    echo "<script>
        alert('An account already exists with that email!<br>Try logging in instead.');
        window.location.href = '../stockists.php';
    </script>";
//} else if($pass1 != $pass2) {
    // Reject sign up and prompt to correct password
} else {
    // Password is hashed, stockist is added to database, page is redirected to login
    $hash = password_hash($pw, PASSWORD_DEFAULT);
    addStockist($name, $email, $address, $hash);
    echo "<script>
    alert('Successfully signed up. Welcome!');
    window.location.href = '../stockists.php'
    </script>;";
}

include '../footer.php'; ?>
