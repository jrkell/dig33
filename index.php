<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- PAGE CONTENT START -->
<main id="container">

  <div class="container-fluid">
  <h1>WELCOME TO THE BEER+ EXPERIENCE</h1>
  <p>Beer and tequila.. together at last!</p>

  <div class="row slider-row">
    <div class="col-sm-12">
  <h2>OUR PRODUCTS</h2>
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
  <div class="row">
    <div class="col-sm-6">
      <h2>PRODUCT LAUNCH</h2>
      <p>Bacon ipsum dolor amet buffalo frankfurter in enim pork chop do tenderloin cillum ham hock ball tip in pork. Cillum commodo jerky, culpa landjaeger enim porchetta et tempor cow exercitation cupim. Exercitation leberkas irure in ham hock landjaeger aliquip lorem porchetta short ribs adipisicing. Lorem in ground round jerky boudin aliqua. Pork chop non shoulder ullamco, irure tongue aute doner t-bone fugiat picanha swine bresaola. Pork chop reprehenderit aute veniam tail shankle, shank dolore. Ball tip buffalo do sed ullamco, chuck picanha kevin tempor pancetta.</p>
    </div>
    <div class="col-sm-6">
      <p>IMAGE 500w</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <p>IMAGE 500w</p>
    </div>
    <div class="col-sm-6">
      <h2>COMPETITIONS</h2>
      <p>Ut porchetta laboris ex pastrami fugiat cillum. Shank nostrud adipisicing leberkas qui. Corned beef burgdoggen beef ribs commodo swine ex pancetta ground round. Quis commodo in doner in ex jowl ad leberkas qui meatloaf ea salami. Nulla alcatra excepteur officia cupim voluptate. Proident mollit burgdoggen ham hock, ipsum prosciutto chicken kevin aute salami bacon. Turducken turkey officia doner nostrud cillum.</p>
    </div>
  </div>

</div>
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


<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
