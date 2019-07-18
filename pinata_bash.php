<?php include 'header.php'; ?>

<body>
    <main id="container">
        <div class="row">

            <h1 class="text-center">Login</h1>
            <form action="api/user_login.php"method="post">
                Email:<br>
                <input type="email" name="email">
                <br>
                Password:<br>
                <input type="password" name="password">
                <br><br>
                <input type="submit" value="Login">
            </form>
            <br><br>
            <p>Don't have an account?</p>
            <button onclick="changeToSignUp()">Sign Up</button>
        </div>
    </main>
</body>

<?php include 'footer.php'; ?>
