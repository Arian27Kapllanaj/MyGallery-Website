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
            <form action="#" method="post">
            <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="username">Username:
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="username" placeholder="[CANNOT BE CHANGED]" disabled></label><br><br>
                    </div>
                </div>

                <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="password">Password*:
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="password" required></label><br><br>
                    </div>
                </div>

                <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="confirmPassword">Confirm Password*:
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="confirmPassword" required ></label><br><br>
                    </div>
                </div>

                <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="email">Email address*:
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="email" required></label><br><br>
                    </div>
                </div>

                <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="confirmEmail">Confirm email address*:
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="confirmEmail" required></label><br><br>
                    </div>
                </div>
                <button id="submitBtn" type="submit" class="btn btn-primary btn-block" name="login_btn">Submit</button>
        </div>

        
        </form>
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

    input {
        width: 50%;
    }

    #submitBtn {
        position: inherit;

    }

</style>