<?php include 'header.php'; ?>

<!--This feature is a work in progress and should be regarded as such-->

<body>
    <main class="pinata-content" id="container">
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
</body>

<?php include 'footer.php'; ?>
