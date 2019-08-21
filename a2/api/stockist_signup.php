<?php
include 'queries.php';

if(isset($_POST)) {
    $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $pw = $_POST['pw'];
}


if(userExists($email, 'stockist')) {
    // Checks if account already exists and notifies user
    header("Location: ../stockists.php");
    echo "<script>alert('An account already exists with that email!<br>Try logging in instead.');</script>";
//} else if($pass1 != $pass2) {
    // Reject sign up and prompt to correct password
} else {
    // Password is hashed, stockist is added to database, page is redirected to login
    $hash = password_hash($pw, PASSWORD_DEFAULT);
    addStockist($name, $email, $address, $hash);
    header("Location: ../stockists.php");
    echo "<script>alert('Successfully signed up. Welcome!');</script>;";
}

?>
