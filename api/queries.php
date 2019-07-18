<?php

require 'config.php';

function getAllProducts() {

    $query = "SELECT * FROM product, image WHERE product.title = image.title";
    global $connection;
    
    $result = mysqli_query($connection, $query);
    
    //Check for query errors
    if(!$result) {
        die("Database Query Failed: Get All Products");
    }
    
    if (mysqli_num_rows($result) == 0) {
        die("No rows found, nothing to print so am exiting");
    }
    return $result;
}

function getProduct($title) {
    $query = "SELECT * FROM product, image WHERE product.title = '$title' AND product.title = image.title";
    global $connection;
    
    $result = mysqli_query($connection, $query);
    
    //Check for query errors
    if(!$result) {
        die("Database Query Failed: Get Product");
    }
    
    if (mysqli_num_rows($result) == 0) {
        die("No rows found, nothing to print so am exiting");
    }
    return $result;
}

function userExists($userId) {
    $query = "SELECT email FROM pinata_user WHERE email = '$userId'";
    global $connection;
    
    $result = mysqli_query($connection, $query);
    
    //Check for query errors
    if(!$result) {
        die("Database Query Failed: Get Product");
    }
    
    if (mysqli_num_rows($result) == 0) {
        return FALSE;
    }
    return TRUE;
}

function addUser($email, $first, $sur, $pass) {
    $query = "INSERT INTO pinata_user VALUES ('$email', '$first', '$sur', '$pass')";
    global $connection;
    
    if(mysqli_query($connection, $query)) {
        echo "User successfully added!";
    } else {
        echo "Failed to add user!";
    }
    
    mysqli_close($connection);
}

?>
