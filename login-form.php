<?php
require_once("config.php");
require("header.php");

if ($auth->isLoggedIn()) {
    header("Location:home.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="display: block">
    <br>
        <div class="login-form">
            <form method="post" action="login.php">
                <h2>Login Form</h2>   
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="fa fa-user"></span>
                            </span>                    
                        </div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </span>                    
                        </div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                </div>     
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>   
                <div class="form-group">
                    <button id="submitBtn"  type="submit" class="btn btn-primary btn-block" name="login_btn">Log in</button>
                </div>
                <div class="bottom-action clearfix">
                    <a href="forgot.php" class="float-right">Forgot your username <br>or password?</a>
                </div>   
                <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LcqeywaAAAAAB9OtFiiz6nkD5qVh4EGA9tonDhi"></div>       
            </form>

        </div>
        </div>
        
           </div>
</body>
</html>
<!--
<form method="post" action="login.php">
    <input type="text" placeholder="email" name="email"><br>
    <input type="password" placeholder="password" name="password"><br>
    Remember me <input type="checkbox" name="remember"><br>
    <input type="submit">
</form>

-->

<style>
    .login-form {
    width: 300px;
    margin: 50px auto;
}

.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}

.login-form h2 {
    margin: 0 0 15px;
}

.form-control,
.btn {
    min-height: 38px;
    border-radius: 2px;
}

.input-group-addon .fa {
    font-size: 18px;
}

.btn {
    font-size: 15px;
    font-weight: bold;
}

.bottom-action {
    font-size: 14px;
}

.g-recaptcha {
    position: absolute !important;
    left: 40px !important;
    bottom: 71% !important;
}
</style>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>

<script>
    function recaptchaCallback() {
        $('#submitBtn').removeAttr('disabled');
    };
</script>


