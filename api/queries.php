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

// Retreives a product title and price from ID
function getProductFromID($id) {
    $query = "SELECT * FROM product WHERE product_id = '$id'";
    $result = performQuery($query);

    if (mysqli_num_rows($result) == 0) {
        die("Cart is empty.");
    }
    return $result;
}


// Checks the database to see if an account exists for the email address entered
function userExists($userId, $table) {
    $query = "SELECT email FROM $table WHERE email = '$userId'";
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

// Query to add stockist to database using information entered (work in progress)
function addStockist($name, $email, $address, $pw) {
    $query = "INSERT INTO stockist VALUES (DEFAULT,'$name','$email','$address','$pw')";
    global $connection;

    if(mysqli_query($connection, $query)) {
        echo "Stockist successfully added!";
    } else {
        echo "Failed to add stockist!";
    }

    mysqli_close($connection);
}

// Retrieves user from database with the id passed in (work in progress)
function getUser($userId, $table) {
    $query = "SELECT * FROM $table WHERE email = '$userId'";
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
        $title = strtolower($row['title']);
        $desc = $row['short_desc'];
        echo "<li><img src='images/products/slider-$title.png' id='$title' alt='$desc' /></li>";
    }
}

// Retrieves all stockists to display in the "Where to Buy" page
function listStockists() {
    $query = "SELECT image.url AS imgurl, suppliers.url as supurl, name, street, suburb, state, phone
    FROM suppliers, image WHERE suppliers.name = image.title ORDER BY suppliers.name";
    $result = performQuery($query);
    // for each row, output as list
    if (mysqli_num_rows($result) > 0) {
      echo "<div class='row'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo
            "<div class='card col-sm-4'>
            <img src='{$row['imgurl']}' class='card-img-top' alt='{$row['name']}'/>
            <div class='card-body'>
            <h5 class='card-title'>{$row['name']}</h5>
            <p class='card-text'>{$row['street']}, {$row['suburb']}, {$row['state']}</p>
            <p class='card-text'>Give us a call: {$row['phone']}</p>
            <a href='{$row['supurl']}' class='card-link'>BUY FROM {$row['name']}'</a><br><hr><br>
            </div>";
        }
        echo "</div>";

    }

  }

?>
