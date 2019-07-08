<!-- Header -->
<?php
  $title = "CONTACT DESPERADOS - Porque no los dos?";
  include 'header.php';
?>
<main id="container">

  <h1>Contact Desperados</h1>

  <p>Got a question or some feedback for us? Drop us a line below.</p>

  <form class="contact-form" action="/contact.php">
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name"><br>
    </div>
    
    <div>
    <label for="phone">Phone Number:
      <input type="text" name="phone" id="phone"><br>
    </div>

    <div>
    <label for="email">Email Address:
      <input type="text" name="email" id="email"><br>
    </div>

    
    <div>
    <label for="email">Message:
      <textarea rows="4" cols="50" name="message" id="message"></textarea><br>
    </div>

  </form>




</main>
</body>
<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
