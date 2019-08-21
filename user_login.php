<!--This file contains the markup for displaying the login form -->


<h3 class="text-center">Login</h3>
<form action='api/user_login.php' class='sign-up-form text-left' method='post'>
    <div class='form-group'>
        <label for='email'>Email address</label>
        <input type='email' class='form-control' name='email' required>
    </div>
    <div class='form-group'>
        <label for='password'>Password</label>
        <input type='password' class='form-control' name='password' required><br>
    </div>
    <div class='form-group '>
        <input class='btn btn-dark mb-4' type='submit' value='Login'><br>
    </div>
    <div class='text-center'>
        <p>Don't have an account?</p>
        <button class='btn btn-warning mt-3 mb-5' onclick='changeToSignUp()'>Sign Up</button><br>
    </div>
</form>
