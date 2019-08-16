<?php include 'header.php'; ?>

<!--This feature is a work in progress and should be regarded as such-->


<main id="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1>PINATA BASH</h1>
            <p>Tap the pinata to reveal your ticket entry!</p>
        </div>
    </div>
    <div id="pinata-container">
        <!--Checks if user has logged in or not-->
        <?php
            if(isset($_COOKIE["user_verified"]))
            {
                include "pinata.php";
            }
            else
            {
                if(isset($_GET['fail']))
                {
                    if($_GET['fail'] == 'pass')
                    {
                        echo "<p class='error'>Incorrect Password!</p>";
                    }
                    else if($_GET['fail'] == 'user')
                    {
                        echo "<p class='error'>No account associated with the email address entered!</p>";
                    }
                    else if($_GET['fail'] == 'exists')
                    {
                        echo "<p class='error'>An account already exists with that email!<br>Try logging in instead.</p>";
                    }
                }
                else
                {
                    echo "<p class='error'>Cookie not set!</p>";
                }
                include "user_login.php";

            }
            ?>
    </div>

</main>


<?php include 'footer.php'; ?>
