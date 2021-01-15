<?php
    require('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <br>
    <h4>Forgotten password or username?</h4>
    <br>
    <form action="forgot.php" method="post"></form>
        <div class="color" style="display: inline;">
            <div style="float: left; width: 10%">
                    <label id="email-label">Email address:
            </div>
                <div style="float: left; width: 90%">
                    <input type="text" id="email" required></label><br>
                </div>
        </div>

        <div class="g-recaptcha" data-sitekey="6LcqeywaAAAAAB9OtFiiz6nkD5qVh4EGA9tonDhi"></div>  
        <br><br>
        <button id="submitBtn" type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
    </form>
</body>
</html>


<style>

    .color {
        background: #f7f7f7;
        
    }
    h4 {
        font-weight: lighter;  
    }

    #email {
        width: 30%;
    }
    
</style>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
