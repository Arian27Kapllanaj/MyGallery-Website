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
    ?>

    <br>
    <div style="display: inline;">
        <div style="float: left; width: 80%">
            <h4>Your Profile</h4>
            <div class="line"></div><br>
        </div>
        <div style="float: left; width: 20%">
            <div class="menu">
                    <h4>Menu</h4>
                    <div class="MenuLine"></div><br>
                    <? echo "test" ?>
                    <br>
                    <a href="<?php echo "submission.php"; ?>">Your Ztorex</a>
                    <br>
                    <a href="<?php echo "submission.php"; ?>">New Submission</a>
                    <br><br>
                    <a class="btn btn-primary" href="login.php">Log out</a>

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

</style>