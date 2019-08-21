<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- PAGE CONTENT START -->
<main id="container">
    <div class="row no-gutters box-dark">
        <div class="col-sm-12 text-center box-black bottom" >
            <a href="#promo" class="clear-link"><img src="images/banner.jpg" class="img-fluid" alt="Desperados home page" /></a>
            <h1>WELCOME TO THE BEER+ EXPERIENCE</h1>
            <h3>Tequila Flavoured Beer</h3>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row divide box-dark">
            <div class="col-lg-6 text-center">
                <div class="box-text">
                    <img src="images/icon-orange.png" class="tt-icon" alt="Icon" />
                    <h2>PRODUCT LAUNCH</h2>
                    <p>Desperados is proud to introduce their exciting beer+ product to the Australian Market.</p>
                    <p>First created in 1995 we removed the boring from beer by pushing boundaries of what is expected. Beer with a range of tequila flavours and an attitude that gets any party started.</p>
                    <p>Embrace your inner tequila and bend the rules of life.</p>
                    <p>Our beer+ product will become your new go to drink.</p>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                    <img src="images/auslaunch.jpg" class="img-fluid" alt="Desperados Australia Launch" />
            </div>
        </div>

        <div class="row divide box-dark">
            <div class="col-lg-6">
                    <img src="images/promos.jpg" class="img-fluid" alt="Desperados Competitions" />
            </div>
            <div class="col-lg-6 text-center">
                <div class="box-text" id="promo">
                    <img src="images/icon-red.png" class="tt-icon" alt="Icon" />
                    <h2>PROMOTIONS</h2>
                    <p>In the Desperados spirit of fun, we are giving away tickets to our launch parties!</p>
                    <p>Purchase one of our participating products to receive a unique code for your chance to win the Pinata Bash competition.<p>
                        <div class="text-center">
                            <a class="btn btn-danger btn-lg my-4" href="pinata_bash.php">Got an Entry Code? Play Pinata Bash</a>
                        </div>
                </div>
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
