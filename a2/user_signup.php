<!--This file contains the markup for displaying the sign up form -->
<h1>Sign Up</h1>
<form action='api/user_signup.php' method='post'>
    Email:<br>
    <input type='email' name='email'>
    <br>
    First Name:<br>
    <input type='text' name='first'>
    <br>
    Surname:<br>
    <input type='text' name='sur'>
    <br>
    Date of Birth:<br>
    <select name='day' required>
        <option value=''>Day</option>
        <?php
            for ($i = 1; $i <= 31; $i++) {
                $num = str_pad($i, 2, '0', STR_PAD_LEFT);
                echo "<option value='$num'>$num</option>";
            }
        ?>
    </select>
    <select name='month' required>
        <option value=''>Month</option>
        <?php
            for ($i = 1; $i <= 12; $i++) {
                $num = str_pad($i, 2, '0', STR_PAD_LEFT);
                echo "<option value='$num'>$num</option>";
            }
        ?>
    </select>
    <select name='year' required>
        <option value=''>Year</option>
        <?php
            for ($i = 2019; $i >= 1900; $i--) {
                echo "<option value='$i'>$i</option>";
            }
        ?>
    </select>
    <br>
    Password:<br>
    <input type='password' name='password1'>
    <br>
    Re-Enter Password:<br>
    <input type='password' name='password2'>
    <br><br>
    <input type='submit' value='Sign Up'>
</form>
<br><br>
<p>Already have an account?</p>
<button onclick='changeToLogin()'>Login</button>
