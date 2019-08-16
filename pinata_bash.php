<?php
    $title = "DESPERADOS - Pinata Bash!";
    include 'header.php';
?>

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
            $showLogin = true;
            if(isset($_COOKIE["user_verified"]))
            {
                if(isset($_COOKIE["code_entered"])) {
                    echo "<h2>Code entered: " . $_COOKIE['code_entered'] . "</h2>";
                    include "pinata.php";
                } else {
                    echo "<h1 class='text-center'>Enter Competition Code</h1>";
                    if(isset($_GET['invalid'])) {
                        echo "<p class='error'>Invalid Code Entered!</p>";
                    }
                    echo "<form action='api/enter_code.php' method='post'>
                                Unique Code:<br>
                                <input type='text' name='code'>
                                <br><br>
                                <input type='submit' value='Submit'>
                            </form>";
                }
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
                        echo "<p class='error'>No account associated with the email address entered!<br>Try signing up instead.</p>";
                        include "user_signup.php";
                        $showLogin = false;
                    }
                    else if($_GET['fail'] == 'exists')
                    {
                        echo "<p class='error'>An account already exists with that email!<br>Try logging in instead.</p>";
                    }
                    else if($_GET['fail'] == 'match')
                    {
                        echo "<p class='error'>The passwords entered do not match!</p>";
                        include "user_signup.php";
                        $showLogin = false;
                    }
                }
                else
                {
                    echo "<p class='error'>Please Log In!</p>";
                }
                if($showLogin) {
                    include "user_login.php";
                }

            }
            ?>
    </div>

</main>


<?php include 'footer.php'; ?>
