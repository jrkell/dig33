<?php
include 'queries.php';

if(isset($_POST)) {
    // if the form has been submitted

    // get inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pw = $_POST['pw'];
    $pw2 = $_POST['pw2'];

    // check if email is already used
    if(userExists($email, 'stockist')) {
        header("Location: ../wholesale.php?inuse&signup");
        
    } else if($pw != $pw2) {
    // Reject sign up and prompt to correct password
    header("Location: ../wholesale.php?no-match&signup");

    } else {
        // Password is hashed, stockist is added to database, page is redirected to login
        $hash = password_hash($pw, PASSWORD_DEFAULT);
        addStockist($name, $email, $address, $hash);
        setcookie('stockist_verified', $email, 0 , '/'); // create cookie     
        header("Location: ../stockist_cart.php?success");
    }

} else {
    // redirect if the form hasn't been submitted
    header("Location: ../wholesale.php");
}


?>
