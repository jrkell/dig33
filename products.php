<!-- Header -->
<?php
    $title = "OUR PRODUCTS - DESPERADOS - Porque no los dos?";
    include 'header.php';
?>

<!-- MAIN CONTENT -->
<main id="container">

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1>BROWSE OUR PRODUCTS</h1>
          <p>Beer and tequila.. together at last!</p>
        </div>
      </div>
        <div class="row slider-row">
            <div class="col-sm-12">
                <h2 class="text-center">OUR BEER+ EXPERIENCE</h2>
                <ul id="product-slider">
                    <li><img src="images/products/slider-ginger.png" id="ginger" /></li>
                    <li><img src="images/products/slider-lime.png" id="lime" /></li>
                    <li><img src="images/products/slider-mojito.png" id="mojito" /></li>
                    <li><img src="images/products/slider-nocturno.png" id="nocturno" /></li>
                    <li><img src="images/products/slider-original.png" id="original" /></li>
                    <li><img src="images/products/slider-red.png" id="red" /></li>
                    <li><img src="images/products/slider-sangre.png" id="sangre" /></li>
                </ul>
            </div>
        </div>

        <div class='row' id='product'></div>
        <?php
            if(isset($_GET['product'])) {
                $product = $_GET['product'];
                echo "<script>displayProduct('$product')</script>";
            } else {
                echo "<script>displayProduct()</script>";
            }
            ?>


    </div> <!-- close container -->
</main>

<script type="text/javascript">
    $(window).load(productSlider());

    $(document).ready(productClickListener());

</script>


<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
