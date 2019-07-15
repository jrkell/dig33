
<?php

  if (!isset($_COOKIE["age_verified"])) {
    header("Location: agegateway.php");
    die();
  }

?>

<!DOCTYPE html>

<!-- This website by The Tequila Techies, for Curtin University DIG33-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- reference to external font, css and js -->
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="styles/slider.css"
        <!-- link to Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Arbutus|Open+Sans&display=swap" rel="stylesheet">
        <!-- Bootstrap 4 CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- Product slider script -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <script src="js/scripts.js"></script>
        <title><?php echo $title; ?></title>
</head>




<!-- PAGE CONTENT START -->
<body>
  <header>
    <div id="main-nav">
    <nav class="navbar navbar-expand-lg">
      <img src="images/logo.png" alt="Desperados Logo" />
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="events.php">Events</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="stockists.php">Where to buy</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
      </ul>
    </div>
    </nav>
  </div>
</header>
