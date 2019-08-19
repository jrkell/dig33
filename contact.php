<!-- Header -->
<?php
  $title = "CONTACT DESPERADOS - Porque no los dos?";
  include 'header.php';
?>
<main id="container">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h1>Contact Desperados</h1>
      <p>Got a question or some feedback for us? Drop us a line below.</p>
    </div>
  </div>

  <div class="row box-dark divide">

    <div class="col-lg-6">
      <div class="socialhover ">
        <img src="images/social/social.jpg" class="img-fluid" alt="Social Media links" />
          <div class="socialoverlay d-none d-xl-block">
            <h2>CONNECT WITH US</h2>
            <p class="set1">
              <a href="https://www.youtube.com/user/desperados" target="blank">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="https://www.facebook.com/desperados" target="blank">
                <i class="fab fa-facebook"></i>
              </a>
            </p>
            <hr><hr>
            <p class="set2">
              <a href="https://www.instagram.com/desperados/" target="blank">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://twitter.com/Heineken" target="blank">
                <i class="fab fa-twitter"></i>
              </a>
            </p>
          </div>
        </div>
    </div>
    <div class="col-lg-6">
      <div class="box-text contact-form">
  <form action="https://formspree.io/jarredkelly@gmail.com" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
    <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email">
    </div>

    <div>
    <label for="message">Message:</label>
      <textarea rows="3" cols="50" name="message" id="message" class="form-control"></textarea>
    </div>
    <div class="text-center">
    <input type="submit" class="btn btn-dark my-3" value="Send">
  </div>
  </form>
</div>
</div>
</div>
</main>

<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
