<?php
require 'queries.php';

$title = $_GET['product'];
$product = mysqli_fetch_assoc(getProduct($title));

    if($product['fat'] < 0.1) {
        $fat="< 0.1";
    } else {
        $fat=number_format($product['fat'],1);
    }

    if($product['salt'] < 0.01) {
        $salt="< 0.01";
    } else {
        $salt=number_format($product['salt'],2);
    }

    echo "<div class='col-sm-6 text-center'>
            <img src={$product['url']} class='img-fluid' alt={$product['alt_desc']} />
            <h3>" . strtoupper($product['title']) . "</h3>
            <p>{$product['long_desc']}</p>
        </div>

        <div class='col-sm-6'>
          <table class='table table-dark table-striped'>
          <thead>
          <tr>
            <h2>PRODUCT INFO</h2>
            <p>Description: {$product['short_desc']}</p>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>Contents</td><td> {$product['contents']}</td>
            <tr>
            <td>Ingredients</td><td> {$product['ingredients']}</td>
            </tr>
            <tr>
            <td>Allergy information</td><td> {$product['allergens']}</td>
            </tr>
            <tr>
            <td>Alcohol percentage</td><td> " . number_format($product['alcohol'], 1) . "%</td>
            </tr>
            <tr>
            <td>Nutritional values</td><td> {$product['nutritional']}</<td>
            </tr>
            <tr>
            <td></td><td>Per 100ml</td>
            </tr>
            <tr><td>Energy</td><td>{$product['energy_kj']}KJ/{$product['energy_kcal']}kcal</td></tr>
            <tr><td>Fat</td><td> {$fat}g</td></tr>
            <tr><td>Saturated fat</td><td> " . number_format($product['satfat'],1) . "g</td></tr>
            <tr><td>Carbohydrates</td><td> " . number_format($product['carb'],1) . "g</td></tr>
            <tr><td>Sugar</td><td> " . number_format($product['sugar'],1) . "g</td></tr>
            <tr><td>Fibers</td><td> " . number_format($product['fiber'],1) . "g</td></tr>
            <tr><td>Protein</td><td> " . number_format($product['protein'],1) . "g</td></tr>
            <tr><td>Salt</td><td> {$salt}g</td></tr>

            </tbody>
            </table>
        </div>" ;
?>
