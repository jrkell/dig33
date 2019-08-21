<!--This file contains the markup for displaying the sign up form -->
<h3>Sign Up</h3>
<div class='row'>
    <div class='col-sm-12'>

        <form action='api/user_signup.php' method='post' class='sign-up-form text-left'>
            <div class='form-group'>
                <label for='email'>Email address</label>
                <input type='email' class='form-control' name='email' id='email' required>
                <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
            </div>
            <div class='form-group'>
                <label for='firstname'>First Name</label>
                <input type='text' class='form-control' name='first' id='firstname' required>
            </div>
            <div class='form-group'>
                <label for='surname'>Surname</label>
                <input type='text' class='form-control' name='sur' id='surname' required>
            </div>
            <p>Date of Birth</p>
            <div class='row'>
                <div class='col'>
                    <div class='form-group'>
                        <select class='form-control' name='day' required>
                            <option value=''>Day</option>
                            <?php
            for ($i = 1; $i <= 31; $i++) {
                $num = str_pad($i, 2, '0', STR_PAD_LEFT);
                echo "<option value='$num'>$num</option>";
            }
        ?>
                        </select>
                    </div>
                </div>
                <div class='col'>
                    <div class='form-group'>
                        <select class='form-control' name='month' required>
                            <option value=''>Month</option>
                            <?php
            for ($i = 1; $i <= 12; $i++) {
                $num = str_pad($i, 2, '0', STR_PAD_LEFT);
                echo "<option value='$num'>$num</option>";
            }
        ?>
                        </select>
                    </div>
                </div>
                <div class='col'>
                    <div class='form-group'>
                        <select class='form-control' name='year' required>
                            <option value=''>Year</option>
                            <?php
            for ($i = 2019; $i >= 1900; $i--) {
                echo "<option value='$i'>$i</option>";
            }
        ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class='form-group'>
                <label for='password1'>Password</label>
                <input type='password' class='form-control' name='password1' id='password1' required>
            </div>

            <div class='form-group'>
                <label for='password2'>Re-enter Password</label>
                <input type='password' class='form-control' name='password2' id='password2' required>
                <br><br>
                <button type='submit' class='btn btn-dark my-4' value='Sign Up'>Submit</button>

                <br><br>
                <p>Already have an account?</p>
                <button class='btn btn-dark my-4' onclick='changeToLogin()'>Login</button>

            </div>
        </form>

    </div>
