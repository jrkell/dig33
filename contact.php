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

  <div class="row">

    <div class="col-sm-6">
      <div class="socialhover">
      <img src="images/social/social.jpg" class="img-fluid" alt="Social Media links" />
      <div class="socialoverlay">
        <h2>CONNECT WITH US</h2>
        <p>
        <a href="#">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="#">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="#">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="#">
            <i class="fab fa-twitter"></i>
        </a>
      </p>
      </div>
    </div>
    </div>
    <div class="col-sm-6">
  <form action="https://formspree.io/jarredkelly@gmail.com" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name"><br>
    </div>

    <div class="form-group">
    <label for="email">Email Address:</label>
      <input type="email" class="form-control" name="email" id="email"><br>
    </div>

    <div>
    <label for="message">Message:</label>
      <textarea rows="4" cols="50" name="message" id="message" class="form-control"></textarea><br>
    </div>

    <input type="submit" class="btn btn-primary my-1" value="Send">
  </form>
</div>
</div>
</main>

<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
