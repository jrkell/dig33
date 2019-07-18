<!-- Header -->
<?php
  $title = "WHERE TO BUY DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- MAIN CONTENT -->
<main id="container">

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h1>WHERE TO BUY DESPERADOS</h1>
      <p>Find your nearest Desperados stockist</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
<!-- ADD YOUR PHP MAGIN JARED - Just a list -->

      <h3>Stockist Name</h3>
      <p>Street</p>
      <p>Suburb</p>
      <p>State</p>
      <p>Ph number</p>
      <p>Link</p>

    </div>
  </row>

<div class="row">
  <div class="col-sm-12">

  <h2>WHOLESALE LOG IN CALL TO ACTION</h2>

<?php
  if (isset($_POST["name"])) {
    $con=mysqli_connect("localhost","root","D3sperad0s","desperados");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      //TODO: HASH the password
      $pw = $_POST['pw'];

      $query = "INSERT INTO stockist VALUES (DEFAULT,'$name','$email','$address','$pw')";

      // Perform queries
      if (mysqli_query($con, $query)) {
        //TODO: check if email is taken
        echo '<p>Successfully signed up. Welcome!</p>';
      } else {
        echo '<p>Oops! Error signing up. Please try again or contact Desperados if issues persist.</p>';
      }
    }
    mysqli_close($con);
  } else if (isset($_POST["login"])) {
    $con=mysqli_connect("localhost","root","D3sperad0s","desperados");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
      //TODO: HASH the password
      $pw = $_POST['pw'];
      $email = $_POST['login'];
      $query = "SELECT pword_hash FROM stockist WHERE email = '$email'";

      if ($result = $con->query($query)) {
        while ($row = $result->fetch_row()) {
          if ($pw === $row[0]) {

            //TODO: actually log them in
            echo 'Sucessfully Logged In.';
          } else {
            echo 'Incorrect Password. Please try again.';
          }
        }
      }
    }
  } else if (isset($_GET["signup"])) {
    echo '<form method="post">
      <div>
        <label for="name">Business Name:</label>
        <input type="text" name="name" id="name" required><br>
      </div>

      <div>
        <label for="address">Business Address:</label>
        <input type="text" name="address" id="address" required><br>
      </div>

      <div>
        <label for="email">Contact Email:</label>
        <input type="text" name="email" id="email" required><br>
      </div>

      <div>
      <label for="pw">Password:
        <input type="password" name="pw" id="pw" required><br>
      </div>

      <input type="submit" value="Signup">
      </form>
      <p>Already signed up? <a href="stockists.php">Log in!</a></p>';
  } else {
    echo '<form method="post">
      <div>
        <label for="email">Email:</label>
        <input type="text" name="login" id="login" required><br>
      </div>

      <div>
      <label for="pw">Password:
        <input type="password" name="pw" id="pw" required><br>
      </div>

      <input type="submit" value="Login">
    </form>
    <p>New here? <a href="stockists.php?signup=true">Sign up!</a></p>';

  }
?>


</div>
</div>
</main>
<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
