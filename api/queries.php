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

?>
