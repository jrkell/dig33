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


<?php
  // establish connection with database
  $con=mysqli_connect("localhost","root","D3sperad0s","desperados");

  // Check connection is working
  if (mysqli_connect_errno()) {
    // show error if not working
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    //TODO: HASH the password

    // run the query
    $sql = "SELECT * FROM suppliers ORDER BY name";
    $result = $con->query($sql);

    // for each row, output as list
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<h3>".$row['name']."</h3>";
        echo "<p>".$row['street']."</p>";
        echo "<p>".$row['suburb']."</p>";
        echo "<p>".$row['state']."</p>";
        echo "<p>".$row['phone']."</p>";
        echo "<a href='".$row['url']."'>Website</a><br><br>";        
      }
    }
  }
  // close connection
  mysqli_close($con);
?>
    </div>
  </row>

<div class="row">
  <div class="col-sm-12">

  <h2>WHOLESALE LOG IN CALL TO ACTION</h2>

<?php
  if (isset($_POST["name"])) {
    // establish connection
    $con=mysqli_connect("localhost","root","D3sperad0s","desperados");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
      // get form results
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      //TODO: HASH the password
      $pw = $_POST['pw'];

      // create query
      $query = "INSERT INTO stockist VALUES (DEFAULT,'$name','$email','$address','$pw')";

      // Perform queries
      if (mysqli_query($con, $query)) {
        //TODO: check if email is taken
        echo '<p>Successfully signed up. Welcome!</p>';
      } else {
        echo '<p>Oops! Error signing up. Please try again or contact Desperados if issues persist.</p>';
      }
    }

    // close connection
    mysqli_close($con);

  } else if (isset($_POST["login"])) {
    // establish connection
    $con=mysqli_connect("localhost","root","D3sperad0s","desperados");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
      //TODO: HASH the password

      // create and run query
      $pw = $_POST['pw'];
      $email = $_POST['login'];
      $query = "SELECT pword_hash FROM stockist WHERE email = '$email'";

      // check result matches password
      if ($result = $con->query($query)) {
        while ($row = $result->fetch_row()) {
          if ($pw === $row[0]) {

            //TODO: create log in cookie
            echo 'Sucessfully Logged In.';
          } else {
            echo 'Incorrect Password. Please try again.';
          }
        }
      }
    }

    // else show signup form
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

  // default - show login form
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