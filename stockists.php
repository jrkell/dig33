<!-- Header -->
<?php
  $title = "WHERE TO BUY DESPERADOS - Porque no los dos?";
  include 'header.php';
?>

<!-- MAIN CONTENT -->
<main id="container">

  <h1>WHERE TO BUY DESPERADOS</h1>
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

    // Perform queries
    mysqli_query($con,"INSERT INTO stockist VALUES (DEFAULT,$name,$email,$address,$pw)");
    mysqli_close($con);
    //TODO: check if email is taken
    echo '<p>Successfully signed up. Welcome!</p>';
    }
  } else if (isset($_POST["login"])) {
    $con=mysqli_connect("localhost","root","D3sperad0s","desperados");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
      //TODO: HASH the password
      $pw = $_POST['pw'];
      $query = "SELECT pword_hash FROM stockist WHERE email = $pw";
      if ($result = $con->query($query)) {
        while ($row = $result->fetch_row()) {
          if ($pw == $row[0]) {
            //TODO: actually log them in
            echo 'SUCESSFULLY LOGGED IN';
          }
        }
      }
    }
  } else if (isset($_GET["signup"])) {
    echo '<form method="post">
      <div>
        <label for="email">Business Name:</label>
        <input type="text" name="name" id="name" required><br>
      </div>

      <div>
        <label for="email">Business Address:</label>
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

      <input type="submit" value="Login">
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



</main>

<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
