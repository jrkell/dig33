<!--This file contains the markup for displaying the login form -->


<h3 class="text-center">Login</h3>
<form action='api/user_login.php' method='post'>
    Email:<br>
    <input type='email' name='email' required>
    <br>
    Password:<br>
    <input type='password' name='password' required><br>
    <input class="btn btn-dark my-4" type='submit' value='Login'>
</form>
<p>Don't have an account?</p>
<button class="btn btn-warning my-4" onclick='changeToSignUp()'>Sign Up</button>
