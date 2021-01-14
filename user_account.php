<?php
        require('header.php');
        require('authentication.php');

        if (!isLoggedIn()) {
            $_SESSION['msg'] = "You must log in first";
            header('location: login.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
</head>
<body>


    <br>
    <div style="display: inline;">
        <div style="float: left; width: 80%">
            <h4>Your Profile</h4>
            <div class="line"></div><br>
        </div>
        <div style="float: left; width: 20%">
            <div class="menu">
                    <h4><strong>Menu</strong></h4>
                    <div class="MenuLine"></div><br>
                    <?  
                        echo $_SESSION['username'];
                    ?>
                    <br>
                    <a href="user_account.php">Your Ztorex</a>
                    <br>
                    <a href="submission.php">New Submission</a>
                    <br><br>
                    <a class="btn btn-primary" href="logout.php">Log out</a>

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
        width: 98%;
    }

    .menu {
        background-color: #f7f7f7;
        width: 90%;
    }
    .MenuLine {
        padding-bottom: 3px;
        border-bottom-style: solid;
        border-width: 0.1px;
        color: gray;
    }

    h4 {
        font-weight: lighter;  
    }

</style>