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
                <h1>WHOLESALE LOGIN</h1>
                <p>Stockist sign-in to place orders</p>
            </div>
        </div>

        <?php
    if(isset($_COOKIE["user_verified"])) {
      echo "<div class='error'>Wholesale purchasing is only available to Desperado stockists.<br>Please see your nearest stockist to purchase or log out of pinata bash to continue.</a></div>";
    }
    else {
      if(isset($_GET['inuse'])) {
        echo "<div class='error'>Email address already in use. Try another address or <a href='wholesale.php'>log in.</a></div>";
      }
      if(isset($_GET['incorrect'])) {
        echo "<div class='error'>Incorrect login details. Please try again.</div>";
      }
      if(isset($_GET['signup']))
      {
          // else show signup form
          echo '<form action="api/stockist_signup.php" class="sign-up-form text-left" method="post">
        <div class="form-group">
          <label for="name">Business Name:</label>
          <input type="text" class="form-control" name="name" id="name" required><br>
        </div>

        <div class="form-group">
          <label for="address">Business Address:</label>
          <input type="text" class="form-control" name="address" id="address" required><br>
        </div>

        <div class="form-group">
          <label for="email">Contact Email:</label>
          <input type="email" class="form-control" name="email" id="email" required><br>
        </div>

        <div class="form-group">
        <label for="pw">Password:</label>
          <input type="password" class="form-control" name="pw" id="pw" required><br>
        </div>

        <input type="submit" class="btn btn-dark" value="Signup">
        <p>Already signed up? <a class="btn btn-warning my-4" href="wholesale.php">Log in!</a></p>
        </form>';
      }
      else
      {
          // default - show login form
        echo '<form action="api/stockist_login.php" class="sign-up-form text-left" method="post">
        <div class="form-group">
          <label for="login">Email:</label>
          <input type="text" class="form-control" name="login" id="login" required><br>
        </div>

        <div class="form-group">
        <label for="pw">Password:</label>
          <input type="password" class="form-control" name="pw" id="pw" required><br>
        </div>

        <input class="btn btn-dark" type="submit" value="Sign in">
        <p>New here? <a class="btn btn-warning my-4" href="wholesale.php?signup">Sign up!</a></p>
      </form>';}
    }
?>



    </div>
</main>
<!-- PAGE CONTENT END -->


<!-- Footer -->
<?php
  $title = "DESPERADOS - Porque no los dos?";
  include 'footer.php';
?>
