<?php

    // if form has been submitted, check date is 18+
    if (isset($_POST['day'])) {

        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $dob = $year.$month.$day;


        $min_year = date("Y")-18;
        $min_date = $min_year.date("md");


        // if they are over 18, create cookie to not show age gate for 30 days
        if ($dob <= $min_date) {
            setcookie("age_verified","true", time() + (86400*30) , "/"); // create cookie
            header("Location: index.php");

        // else give an error
        } else {
            echo "Sorry you must be at least 18 to enter this site.";
        }
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
        <link rel="stylesheet" type="text/css" href="styles/normalize.min.css">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/slider.css">
        <link rel="stylesheet" type="text/css" href="styles/agecheck.css">
        <!-- link to Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Arbutus|Permanent+Marker|Open+Sans&display=swap" rel="stylesheet">
        <!-- Bootstrap 4 CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="scripts/scripts.js"></script>
        <title>DESPERADOS</title>
    </head>

    <body class="bg-dark text-white">
      <main id="container" class="text-center">
        <div class="row">
          <div class="col-sm-12">
        <img src="images/logo.png" class="img-fluid">
        <p>To continue, please enter your date of birth</p>


        <form action="agegateway.php" method="POST">

            <select name="day" required>
                <option value="">Day</option>
                <?php
                    // for loop to show dropdown with 31 days
                    for ($i = 1; $i <= 31; $i++) {
                        $num = str_pad($i, 2, '0', STR_PAD_LEFT);
                        echo "<option value='$num'>$num</option>";
                    }
                ?>
            </select>

            <select name="month" required>
                <option value="">Month</option>
                <?php
                    // for loop to show 12 months in dropdown
                    for ($i = 1; $i <= 12; $i++) {
                        $num = str_pad($i, 2, '0', STR_PAD_LEFT);
                        echo "<option value='$num'>$num</option>";
                    }
                ?>
            </select>

            <select name="year" required>
                <option value="">Year</option>
                <?php
                    // for loop to create dates
                    for ($i = 2019; $i >= 1900; $i--) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>

            <input type="submit" value="Go">
        </form>
            </div>
</div>
</div>
</main>
</body>
