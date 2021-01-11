<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
</head>
<body>
    <?php
        require('header.php');
        require('authentication.php');
        /*        if (!isLoggedIn()) {
            $_SESSION['msg'] = "You must log in first";
            header('location: login.php');
        } */
    ?>

    <br>
    <div style="display: inline;">
        <div style="float: left; width: 80%">
            <h4>New Submission</h4>
            <div class="line"></div><br>
        </div>
        <div style="float: left; width: 20%">
            <div class="menu">
                    <h4>Menu</h4>
                    
                    <?php if(isset($_SESSION['username'])) :
                             echo $_SESSION['username']; 
                    endif?>
            </div>
        </div>
    </div>

        


</body>
</html>

<style>

    .line {
        padding-bottom: 10px;
        border-bottom-style: solid;
        border-width: 1px;
    }

</style>