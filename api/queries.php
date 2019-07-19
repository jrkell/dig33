<?php

require 'config.php';

// Function to handle all queries. Removes duplicate code.
function performQuery($query) {
    global $connection;
    $result = mysqli_query($connection, $query);
    
    //Check for query errors
    if(!$result) {
        die("Database Query Failed: Perform Query");
    }
    
    return $result;
    mysqli_close($connection);
}

// Retrieves a product and its associated image from the database
function getProduct($title) {
    $query = "SELECT * FROM product, image WHERE product.title = '$title' AND product.title = image.title";
    $result = performQuery($query);
    
    if (mysqli_num_rows($result) == 0) {
        die("No product found!");
    }
    return $result;
}

// Checks the database to see if an account exists for the email address entered
function userExists($userId) {
    $query = "SELECT email FROM pinata_user WHERE email = '$userId'";
    $result = performQuery($query);
    
    if (mysqli_num_rows($result) == 0) {
        return FALSE;
    }
    return TRUE;
}

// Query to add user to database using information entered (work in progress)
function addUser($email, $first, $dob, $sur, $pass) {
    $query = "INSERT INTO pinata_user VALUES ('$email', '$first', '$dob', '$sur', '$pass')";
    global $connection;
    
    if(mysqli_query($connection, $query)) {
        echo "User successfully added!";
    } else {
        echo "Failed to add user!";
    }
    
    mysqli_close($connection);
}

// Retrieves user from database with the id passed in (work in progress)
function getUser($userId) {
    $query = "SELECT * FROM pinata_user WHERE email = '$userId'";
    $result = performQuery($query);
    
    if (mysqli_num_rows($result) == 0) {
        die("No user found!");
    }
    return $result;
}

// Retrieves all products from the database and adds them to the product slider
function sliderProducts() {
    $query = "SELECT * FROM product";
    $result = performQuery($query);
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<li><img src='images/products/slider-{$row['title']}.png' id='{$row['title']}' /></li>";
    }
}

?>
