<?php include 'header.php'; ?>

<!--This feature is a work in progress and should be regarded as such-->

<body>
    <main class="pinata-content" id="container">
        <div id="pinata-container">
            <!--Checks if user has logged in or not-->
            <?php
            if(isset($_COOKIE["user_verified"])) {
                include "pinata.php";
            } else {
                include "user_login.php";
            }
            ?>
        </div>
    </main>
</body>

<?php include 'footer.php'; ?>
