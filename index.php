<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- PAGE CONTENT START -->
<main id="container">
    <div class="row no-gutters">

        <div class="col-sm-12 text-center">
          <img src="images/banner.jpg" class="img-fluid" alt="Desperados home page"/>
            <h1>WELCOME TO THE BEER+ EXPERIENCE</h1>
            <p>Beer and tequila.. together at last!</p>
<!-- REMOVING SLIDER FROM HOME PAGE TO TEST DESIGN IDEATION * BARB
            <div class="row slider-row">
                <div class="col-sm-12">
                    <h2>Our Products</h2>
                    <ul id="product-slider">
                        Call to a php function which executes an sql query to display all products in the slider
                        <?php sliderProducts() ?>
                    </ul>
                </div>
            </div> -->
        </div>
      </div>
        <div class="row no-gutters">
            <div class="col-lg-6 box-blue text-center">
              <div class="box-text">
                <img src="images/icon-orange.png" class="tt-icon" alt="Icon" />
                <h2>PRODUCT LAUNCH</h2>
                <p>Desperados is proud to introduce their exciting beer+ product to the Australian Market.</p>
                <p>First created in 1995 we remove the boring from beer by pushing boundaries of what is expected. Beer with a range of tequila flavours and an attitude that gets any party started.</p>
                <p>Embrace your inner tequila and bend the rules of life.</p>
                <p>Our beer+ product will become your new go to drink.</p>
              </div>
            </div>
            <div class="col-lg-6">
                <img src="images/auslaunch.jpg" class="img-fluid" alt="Desperados Australia Launch" />
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-lg-6">
                <img src="images/promos.jpg" class="img-fluid" alt="Desperados Competitions" />
            </div>
            <div class="col-lg-6 box-blue text-center">
              <div class="box-text">
                <img src="images/icon-red.png" class="tt-icon" alt="Icon" />
                <h2>PROMOTIONS</h2>
                <p>In the Desperados spirit of fun, we have an exciting new competition for you to enter.</p>
                <p>Purchase one of our participating products to receive a unique code for your chance to win a ticket to one of the upcoming music festivals.<p>
                <p>Hit the Pinata in the Pinata Bash competition to see if you are one of the lucky players to win a ticket. Its fun, its easy and it can be rewarding.</p>
                <a href="pinata.php?demo">Pinata Bash Demo</a>
              </div>
            </div>
        </div>
</main>

<script>
    //JS function to load product slider plugin
    $(window).load(productSlider());

    //jQuery function that adds a click event listener and handler to each product in the slider
    $(document).ready(redirectToProduct());

</script>

<!-- PAGE CONTENT END -->


<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
