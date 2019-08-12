<?php
include 'queries.php';

if(isset($_POST)) {
    // if the form has been submitted

    // get inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pw = $_POST['pw'];

    // check if email is already used
    if(userExists($email, 'stockist')) {
        header("Location: ../wholesale.php?inuse&signup");
        
        // this will never run as already redirected...
        // echo "<script>alert('An account already exists with that email!<br>Try logging in instead.');</script>";
    } else {
        // Password is hashed, stockist is added to database, page is redirected to login
        $hash = password_hash($pw, PASSWORD_DEFAULT);
        addStockist($name, $email, $address, $hash);
        //$user = mysqli_fetch_assoc(getUser($email, 'stockist'));
        //$id = $user['stockist_id'];
        setcookie('stockist_verified', $email, 0 , '/'); // create cookie     
        header("Location: ../stockist_cart.php?success");
    }

} else {
    // redirect if the form hasn't been submitted
    header("Location: ../wholesale.php");
}


?>
