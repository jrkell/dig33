<!-- Header -->
<?php
  $title = "OUR PRODUCTS - DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- MAIN CONTENT -->
<main id="container">

  <div class="container-fluid">
  <h1>BROWSE OUR PRODUCTS</h1>
  <p>Beer and tequila.. together at last!</p>

  <div class="row slider-row">
    <div class="col-sm-12">
      <h2>OUR BEER+ EXPERIENCE</h2>
      <ul id="product-slider">
        <li><img src="images/products/slider-ginger.png" /></li>
        <li><img src="images/products/slider-lime.png" /></li>
        <li><img src="images/products/slider-mojito.png" /></li>
        <li><img src="images/products/slider-nocturno.png" /></li>
        <li><img src="images/products/slider-original.png" /></li>
        <li><img src="images/products/slider-red.png" /></li>
        <li><img src="images/products/slider-sangre.png" /></li>
      </ul>
    </div>
  </div>

<!-- PHP FOR PRODUCT -->
<div class="row">
<div class="col-sm-6">
  <p>PRODUCT IMAGE</p>
</div>

<div class="col-sm-6">
  <p>PRODUCT INFORMATION</p>
</div>

</div> <!-- close container -->
</main>



<script type="text/javascript">

$(window).load(function() {
      $("#product-slider").flexisel({
  visibleItems: 5,
  itemsToScroll: 3,
  animationSpeed: 200,
  infinite: true,
  navigationTargetSelector: null,
  autoPlay: {
      enable: false,
      interval: 5000,
      pauseOnHover: true
  },
  responsiveBreakpoints: {
      portrait: {
          changePoint:480,
          visibleItems: 1,
          itemsToScroll: 1
      },
      landscape: {
          changePoint:640,
          visibleItems: 2,
          itemsToScroll: 2
      },
      tablet: {
          changePoint:768,
          visibleItems: 3,
          itemsToScroll: 3
      }
  },
  loaded: function(object) {
      console.log('Slider loaded...');
  },
  before: function(object){
      console.log('Before transition...');
  },
  after: function(object) {
      console.log('After transition...');
  },
  resize: function(object){
      console.log('After resize...');
  }
  });
    });
  </script>


<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
