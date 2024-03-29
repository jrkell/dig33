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
                <h1>BROWSE OUR FLAVOURS</h1>
                <h2 class="text-center">ENJOY THE BEER+ EXPERIENCE</h2>
            </div>
        </div>


        <div class="row slider-bg">

            <ul id="product-slider">
                <!--Call to a php function which executes an sql query to display all products in the slider-->
                <?php sliderProducts() ?>
            </ul>

        </div>


        <div id="product">
            <?php
            //If page is reached by clicking on a product from the slider, display that product.
            if(isset($_GET['product'])) {
                $product = $_GET['product'];
                echo "<script>displayProduct('$product')</script>";
            } else {
                //Otherwise, display default product
                echo "<script>displayProduct()</script>";
            }
            ?>
        </div>
    </div>
</main>

<script>
    //JS function to load product slider plugin
    $(window).load(productSlider());

    //jQuery function that adds a click event listener and handler to each product in the slider
    $(document).ready(productClickListener());

</script>


<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
    $title = "DESPERADOS - Porque no los dos?";
    include 'footer.php';
?>
