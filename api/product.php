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

    echo "<div class='col-lg-6 text-center'>
              <div class='boxed'>
                <img src={$product['url']} class='img-fluid' alt={$product['title']} />
              </div>
            </div>
            <div class='col-lg-6 text-center'>
              <div class='box-text'>
              <img src='images/icon-green.png' class='tt-icon' alt='Tequila Icon' />
              <h2 class='text-center'>{$product['title']}</h2>
              <h3 class='text-center'>{$product['short_desc']}</h3><br>
              <p>{$product['long_desc']}</p>
            </div>
          </div>
          </div>
        <div class='row' style='padding-top:40px;'>
          <div class='col-lg-6'>
          <table class='table table-dark table-striped table-sm'>
          <thead>
          <tr>
          <h2 class='text-center'>PRODUCT INFO</h2>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td class='w-30'>Contents</td><td class='w-70'> {$product['contents']}</td>
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
            <td></td><td></<td>
            </tr>
            <tr>
            <td>NUTRITIONAL VALUES</td><td>Per 100ml</td>
            </tr>
            <tr><td>Energy</td><td>{$product['energy_kj']}KJ/{$product['energy_kcal']}kcal</td></tr>
            <tr><td>Fat</td><td> {$fat}g</td></tr>
            <tr><td>Saturated fat</td><td> " . number_format($product['satfat'],1) . "g</td></tr>
            <tr><td>Carbohydrates</td><td> " . number_format($product['carb'],1) . "g</td></tr>
            <tr><td>Sugar</td><td> " . number_format($product['sugar'],1) . "g</td></tr>
            <tr><td>Fibers</td><td> " . number_format($product['fiber'],1) . "g</td></tr>
            <tr><td>Protein</td><td> " . number_format($product['protein'],1) . "g</td></tr>
            <tr><td>Salt</td><td> {$salt}g</td></tr>
            <td></td><td> {$product['nutritional']}</<td>

            </tbody>
            </table>
            </div>

            <div class='col-lg-6 text-center'>
            <div class='box-text'>
            <h2 class='text-center'>THE BEER+ EXPERIENCE</h2>
            <iframe width='560' height='315' src='{$product['video']}' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
            </div>
            </div>
            </div>" ;
?>
