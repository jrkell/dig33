<?php
    if (!isset($_COOKIE["age_verified"]))
    {
        header("Location: agegateway.php");
        die();
    }

    include 'api/queries.php';


?>

<!DOCTYPE html>

<!-- This website by The Tequila Techies, for Curtin University DIG33-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- reference to external font, css and js -->
    <link rel="stylesheet" type="text/css" href="styles/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/slider.css">
    <link rel="stylesheet" type="text/css" href="styles/pinata.css">
    <!-- link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arbutus%7CRanchers%7CAllerta&display=swap" rel="stylesheet">
    <!-- Link to Font Awesome icons - https://www.w3schools.com/bootstrap4/bootstrap_icons.asp -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Product slider script -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.flexisel.js"></script>
    <script src="js/jquery.imgexplode.js"></script>
    <script src="js/scripts.js"></script>
    <title>
        <?php echo $title; ?>
    </title>
</head>




<!-- PAGE CONTENT START -->

<body class="bg-dark text-white">
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php"><img src="images/logo-sml.png" alt="Desperados Logo" class="img-fluid" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>


                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Stockists
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="stockists.php">FIND A STOCKIST</a>
                            <a class="dropdown-item" href="wholesale.php">WHOLESALE LOGIN</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
            if (isset($_COOKIE["stockist_verified"])) 
            {
                if($_COOKIE["stockist_verified"]!="false") {
                    $email = $_COOKIE["stockist_verified"];
                    $user = mysqli_fetch_assoc(getUser($email, 'stockist'));
                    $name = $user['name'];
                    echo "<div>Logged in as $name<br><a href='./stockist_cart.php'>Place an order</a> | <a href='./api/stockist_logout.php'>Logout</a></div>";
                }
            }
        ?>
    </header>
