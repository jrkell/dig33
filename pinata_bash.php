<?php
    $title = "DESPERADOS - Pinata Bash!";
    include 'header.php';
?>

<main id="container">
    <div class="row text-center">
        <div class="col-sm-12" id="pinata-top">
            <h1>PINATA BASH</h1>
            <h5>Tap the pinata for your chance to win Launch Party tickets!</h5>
        </div>
    </div>
    <div id="pinata-container" class="text-center">
        <?php
            $showLogin = true;

            // Ensuring that a logged in stockist/wholesaler cannot also log in to pinata bash
            if(isset($_COOKIE["stockist_verified"])) {
                echo "<p class='error'>Desperado staff and stockists are not eligible to participate in promotions. Please log out to continue.</p>";
            }


            // If the user is logged in
            else if(isset($_COOKIE["user_verified"]))
            {
                // If the user has entered a code and that code has been validated,
                // display their code and the pinata bash game and allow them to play
                if(isset($_COOKIE["code_entered"])) {
                    echo "<h5>Code entered: " . $_COOKIE['code_entered'] . "</h5>
                    <div class='pinata-content text-center'>
                        <div id='pinata-div'>
                            <img src='images/pinata/pinata1.gif' id='pinata'>
                        </div>
                        <div id='ticket-div'>
                            <img src='images/pinata/ticket.png' id='ticket'>
                        </div>
                    </div>
                    <div class='row' id='play-again'></div>";

                // Else if the user has not yet entered a code, display the code entry form
                } else {
                    echo "<h2 class='text-center'>Enter Competition Code</h2>";
                    if(isset($_GET['invalid'])) {
                        echo "<p class='error'>Invalid Code Entered!</p>";
                    } else if(isset($_GET['query-fail'])) {
                        echo "<p class='error'>Code entry failed! Please try again.</p>";
                    } else if(isset($_GET['duplicate'])) {
                        echo "<p class='error'>The code entered has already been used! Please try a different one.</p>";
                    }
                    echo "<form action='api/enter_code.php' method='post'>
                            <div class='form-group'>
                                <label for='pinatacode'>Unique Code:</label>
                                <input type='text' size='20' id='pinatacode' name='code'>
                                </div>
                                <button type='submit' class='btn btn-warning mb-5' value='Submit'>Submit</button>
                                <p>Need help? Your entry code is located on specially marked tickets</p>
                                <img src='images/pinata/instructions.png' class='fluid-img' alt='Pinata instructions' />
                            </form>";
                }

            // Else if the user is not logged in
            } else {

                // If login has failed
                if(isset($_GET['fail']))
                {
                    // Incorrect password
                    if($_GET['fail'] == 'pass')
                    {
                        echo "<p class='error'>Incorrect Password!</p>";
                    }

                    // If the entered email address has not been registered, prompt the user to register it
                    else if($_GET['fail'] == 'user')
                    {
                        echo "<p class='error'>No account associated with the email address entered!<br>Try signing up instead.</p>";
                        include "user_signup.php";
                        $showLogin = false;
                    }

                    // If the user has tried to register an account that already exists, prompt them to login instead
                    else if($_GET['fail'] == 'exists')
                    {
                        echo "<p class='error'>An account already exists with that email!<br>Try logging in instead.</p>";
                    }

                    // If the user has tried to register an account with passwords that don't match, prompt them to try again
                    else if($_GET['fail'] == 'match')
                    {
                        echo "<p class='error'>The passwords entered do not match!</p>";
                        include "user_signup.php";
                        $showLogin = false;
                    }

                    else if($_GET['fail'] == 'stockist')
                    {
                        echo "<p class='error'>Desperado staff and stockists are not eligible to participate in promotions. Please log out to continue.</p>";
                        include "user_signup.php";
                        $showLogin = false;
                    }
                }

                // Else if login has not failed and therefor has not yet been attempted, prompt the user to login
                else
                {
                    echo "<p class='error'>Please Log In!</p>";
                }

                // If the show login flag has not been set to false (i.e. if the signup form has not been displayed) display the login form
                if($showLogin) {
                    include "user_login.php";
                }

            }
            ?>
    </div>

</main>


<?php include 'footer.php'; ?>
