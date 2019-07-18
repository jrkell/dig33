<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- PAGE CONTENT START -->
<main id="container">
    <div class="home-header">
        <img class="img-fluid" src="images/bg_home.png" />
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h1>WELCOME TO THE BEER+ EXPERIENCE</h1>
            <p>Beer and tequila.. together at last!</p>

            <div class="row slider-row">
                <div class="col-sm-12">
                    <h2>OUR PRODUCTS</h2>
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
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h2>PRODUCT LAUNCH</h2>
                <p>Desperados is proud to be introducing their exciting beer+ product to the Australian Market.<p>
<p>First created in 1995 we remove the boring from beer by pushing boundaries of what is expected.</p>
<p>Do you embrace your inner tequila? Are you bending the rules of life? This could be the drink for you.</p>
<p>Beer with a dash of tequila in a range of flavours and an attitude that gets any party started.</p>
<p>Our beer+ product will become your new go to drink.</p>
</p>
            </div>
            <div class="col-sm-6">
                <img src="images/placeholder.png" class="img-fluid" alt="Image Placeholder" />
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <img src="images/placeholder.png" class="img-fluid" alt="Image Placeholder" />
            </div>
            <div class="col-sm-6">
                <h2>COMPETITIONS</h2>
<p>In the Desperados spirit of fun, we have an exciting new competition for you to enter.</p>
<p>Purchase one of our participating products to receive a unique code for your chance to win a ticket to one of the upcoming music festivals.<p>
<p>Hit the Pinata in the Pinata Bash competition to see if you are one of the lucky players to win a ticket. Its fun, its easy and it can be rewarding.</p>
                <a href="pinata.php">Pinata Bash Demo</a>
            </div>
        </div>

    </div>
</main>

<script type="text/javascript">
    //    $(window).load(function() {
    //        $("#product-slider").flexisel({
    //            visibleItems: 5,
    //            itemsToScroll: 3,
    //            animationSpeed: 200,
    //            infinite: true,
    //            navigationTargetSelector: null,
    //            autoPlay: {
    //                enable: false,
    //                interval: 5000,
    //                pauseOnHover: true
    //            },
    //            responsiveBreakpoints: {
    //                portrait: {
    //                    changePoint: 480,
    //                    visibleItems: 1,
    //                    itemsToScroll: 1
    //                },
    //                landscape: {
    //                    changePoint: 640,
    //                    visibleItems: 2,
    //                    itemsToScroll: 2
    //                },
    //                tablet: {
    //                    changePoint: 768,
    //                    visibleItems: 3,
    //                    itemsToScroll: 3
    //                }
    //            },
    //            loaded: function(object) {
    //                console.log('Slider loaded...');
    //            },
    //            before: function(object) {
    //                console.log('Before transition...');
    //            },
    //            after: function(object) {
    //                console.log('After transition...');
    //            },
    //            resize: function(object) {
    //                console.log('After resize...');
    //            }
    //        });
    //    });
    $(window).load(productSlider());

    $(document).ready(redirectToProduct());

</script>

<!-- PAGE CONTENT END -->


<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
