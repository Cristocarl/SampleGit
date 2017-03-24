<?php
include 'Header.php';
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="reg_background text-center">
    <h3 id="register">Register Now!</h3><br>
    <img class='pic2'src="logpic2.png" alt=""><br><br>
    <div class="form-container">
        <form action="http://local.exercise2.com/RegisterCustomer" method="POST">
            <input type="email" name="email" placeholder="email" ><br><br>
            <input type="password" name="password" placeholder="password" ><br><br>
            <input type="password" name="confirmPassword" placeholder="confirmPassword" ><br><br>
            <input type="text" pattern="^\w+$" name="company_name" placeholder="company_name" ><br><br>
            <input type="text" pattern='[A-Za-z\\s]*' name="first_name" placeholder="first_name" ><br><br>
            <input type="text" pattern='[A-Za-z\\s]*' name="last_name" placeholder="last_name" ><br><br>
            <input type="number" maxlength="12" name="phone" placeholder="phone" ><br><br>
            <button class= "btn btn-primary" type="submit" name="button" value="submit">Submit</button><br><br>
        </form>
        </a>
    </div>
</div>

<div class='log_background text-center'>
    <h2>Login</h2><br>
    <div class='form'>
        <form action="http://local.exercise2.com/LoginCustomer" method="post">
            <div class="form-container">
                <div class='usps'>
                    <input name='email' type='text' placeholder="cristocarl@yahoo.com"  id='username'><br><br>

                    <input type="password" name="password" placeholder="Password"  id='password'><br><br>
                </div>
                <div class='button'>
                    <button class='btn btn-primary' type="submit" name="submit"> Login </button><br><br>
                </div>
            </div>
        </form>
    </div>
</div>
</html>
