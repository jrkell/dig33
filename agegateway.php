<?php

    if (isset($_POST['day'])) {
        
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $dob = $year.$month.$day;

        
        $min_year = date("Y")-18;
        $min_date = $min_year.date("md");

        
        
        if ($dob <= $min_date) {
            setcookie("age_verified","true", time() + (86400*30) , "/"); // create cookie
            header("Location: index.php");
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
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="stylesheet" type="text/css" href="styles/normalize.css">
        <!-- link to Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Arbutus|Open+Sans&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="scripts/scripts.js"></script>
        <title>DESPERADOS</title>
    </head>

    <body>
        <div id="age-check">
        To continue, please enter your date of birth
        </div>

        <form action="agegateway.php" method="POST">

            <select name="day" required>
                <option value="">Day</option>
                <?php 
                    for ($i = 1; $i <= 12; $i++) {
                        $num = str_pad($i, 2, '0', STR_PAD_LEFT);
                        echo "<option value='$num'>$num</option>";
                    }
                ?>
            </select>

            <select name="month" required>
                <option value="">Month</option>
                <?php 
                    for ($i = 1; $i <= 31; $i++) {
                        $num = str_pad($i, 2, '0', STR_PAD_LEFT);
                        echo "<option value='$num'>$num</option>";
                    }
                ?>
            </select>

            <select name="year" required>
                <option value="">Year</option>
                <?php 
                    for ($i = 2019; $i >= 1900; $i--) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            
            <input type="submit" value="Go">
        </form>
        

    </body>

