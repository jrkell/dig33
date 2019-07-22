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

<div class="contact-form">
  <form class="contact-form" action="https://formspree.io/jarredkelly@gmail.com" method="POST">
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name"><br>
    </div>

    <div>
    <label for="email">Email Address:</label>
      <input type="text" name="email" id="email"><br>
    </div>

    <div>
    <label for="message">Message:</label>
      <textarea rows="4" cols="50" name="message" id="message"></textarea><br>
    </div>

    <input type="submit" value="Send">
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
