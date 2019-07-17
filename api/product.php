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
    
    echo "<div class='col-sm-6'>
            <img src={$product['url']} class='img-fluid' alt={$product['alt_desc']} />
            <h3>" . strtoupper($product['title']) . "</h3>
            <p>{$product['long_desc']}</p>
        </div>

        <div class='col-sm-6'>

            <h4>PRODUCT INFO</h4>
            <p>Description: {$product['short_desc']}</p>
            <p>Contents: {$product['contents']}</p>
            <p>Ingredients: {$product['ingredients']}</p>
            <p>Allergy information: {$product['allergens']}</p>
            <p>Alcohol percentage: " . number_format($product['alcohol'], 1) . "%</p>
            <p>Nutritional values: {$product['nutritional']}</p>
            <div class='values'>
                <h5>Per 100ml</h5>
                <p>Energy: {$product['energy_kj']}KJ/{$product['energy_kcal']}kcal</p>
                <p>Fat: {$fat}g</p>
                <p>Saturated fat: " . number_format($product['satfat'],1) . "g</p>
                <p>Carbohydrates: " . number_format($product['carb'],1) . "g</p>
                <p>Sugar: " . number_format($product['sugar'],1) . "g</p>
                <p>Fibers: " . number_format($product['fiber'],1) . "g</p>
                <p>Protein: " . number_format($product['protein'],1) . "g</p>
                <p>Salt: {$salt}g</p>
            </div>
        </div>" ;
?>
