<!--This file contains the markup for displaying the login form -->


<h3 class="text-center">Login</h3>
<form action='api/user_login.php' method='post'>
    <div class='form-group'>
        <label for='email'>Email address</label>
        <input type='email' name='email' required>
    </div>
    <div class='form-group'>
        <label for='password'>Password</label>
        <input type='password' name='password' required><br>
    </div>
    <div class='form-group'>
        <input class="btn btn-dark my-4" type='submit' value='Login'>

        <p>Don't have an account?</p>
        <button class="btn btn-warning my-4" onclick='changeToSignUp()'>Sign Up</button>
    </div>
</form>
