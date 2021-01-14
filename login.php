<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    
<?php
    require('header.php');
    require('authentication.php');
?>

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
                    <button type="submit" class="btn btn-primary btn-block" name="login_btn">Log in</button>
                </div>
                <div class="bottom-action clearfix">
                    <a href="forgot.php" class="float-right">Forgot your username <br>or password?</a>
                </div>        
            </form>

        </div>
        </div>

           <div class="g-recaptcha" data-sitekey="6LcqeywaAAAAAB9OtFiiz6nkD5qVh4EGA9tonDhi"></div> 

        
        
</body>
</html>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>