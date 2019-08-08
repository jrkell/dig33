<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- PAGE CONTENT START -->
<main id="container">
    <div>
        <div class=" card bg-dark text-white">
          <img class="card-img img-fluid" src="images/bg_home.png" alt="Desperados home page"/>
          <div class="card-img-overlay text-center">
          <h1 class="card-title">WIN TICKETS</h1>
          <p class="card-text">TO AUSTRALIAN MUSIC FESTIVALS</p>
        </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h1>WELCOME TO THE BEER+ EXPERIENCE</h1>
            <p>Beer and tequila.. together at last!</p>

            <div class="row slider-row">
                <div class="col-sm-12">
                    <h2>Our ProductsS</h2>
                    <ul id="product-slider">
                        <!--Call to a php function which executes an sql query to display all products in the slider-->
                        <?php sliderProducts() ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row textured">
            <div class="col-sm-6">
                <h2>PRODUCT LAUNCH</h2>
                <p>Desperados is proud to be introducing their exciting beer+ product to the Australian Market.</p>
                        <p>First created in 1995 we remove the boring from beer by pushing boundaries of what is expected.</p>
                        <p>Do you embrace your inner tequila? Are you bending the rules of life? This could be the drink for you.</p>
                        <p>Beer with a dash of tequila in a range of flavours and an attitude that gets any party started.</p>
                        <p>Our beer+ product will become your new go to drink.</p>

            </div>
            <div class="col-sm-6">
                <img src="images/launch.png" class="img-fluid" alt="Desperados Australia Launch" />
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 text-right">
                <img src="images/competition.png" class="img-fluid" alt="Desperados Competitions" />
            </div>
            <div class="col-sm-6">
                <h2>COMPETITIONS</h2>
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
