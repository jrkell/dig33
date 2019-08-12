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
    if(isset($_GET['success']))
    {
        //success code
        echo '<p>You are logged in!</p>';
    }
    else if(isset($_GET['signup']))
    {
        // else show signup form
        echo '<form action="api/stockist_signup.php" method="post">
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

      <input type="submit" class="btn btn-primary" value="Signup">
      </form>
      <p>Already signed up? <a href="stockists.php">Log in!</a></p>';
    }
    else
    {
        // default - show login form
        echo '<form action="api/stockist_login.php" method="post">
      <div class="form-group">
        <label for="login">Email:</label>
        <input type="text" class="form-control" name="login" id="login" required><br>
      </div>

      <div class="form-group">
      <label for="pw">Password:</label>
        <input type="password" class="form-control" name="pw" id="pw" required><br>
      </div>

      <input class="btn btn-primary" type="submit" value="Login">
    </form>
    <p>New here? <a href="stockists.php?signup">Sign up!</a></p>';
    }
?>


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