<?php

        require_once("config.php");
if ($auth->isLoggedIn()) {
        require('header.php');
//        require('authentication.php');
//        require ('update.php');
//        require ('sendemail.php');


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
        
            <div class="color" style="margin-top: 10px;">
                    <div style="float: left; width: 15%">
                    <label >Username:
                    </div>
                    <div style="float: left; width: 85%">
                        <p id="username"><input type="text"  placeholder="[CANNOT BE CHANGED]" disabled></label></p>
<!--                    <input type="text" id="username" placeholder="[CANNOT BE CHANGED]" disabled></label><br><br>-->
                        <input type="hidden" name="username_value" id="username_value">

                    </div>
                </div>

                <form action="changePassword.php" method="post" onSubmit = "return checkPassword(this)">

                <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="password">Old Password*: </label>
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="password" name="oldPassword" required><br><br>
                    </div>
                </div>
                <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="confirmPassword">New Password*:</label>
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="confirmPassword" name="newPassword" required ><br><br>
                    </div>
                </div>

                <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="confirmPassword">Confirm New Password*:</label>
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="confirmPassword" name="ConfirmnewPassword" required > 
                    
                    <button type="submit"  class="btn btn-primary btn-sm" >Change Password</button><br><br>
                    </div>
                </div>

                </form>

                <form action="changeEmail.php" method="post" onSubmit = "return checkPassword(this)">


                <div class="color" style="display: inline;">
                    <div style="float: left; width: 15%">
                    <label id="email">Email address*:</label>
                    </div>
                    <div style="float: left; width: 85%">
                    <input type="text" id="email" name="newEmail" required>

                    <button id="submitBtn" type="submit" class="btn btn-primary btn-sm" name="login_btn">Change Email</button>
                    
                    <br><br>
                    </div>
             </div>
            </div>
        </div>

        
        </form>
        <div style="float: left; width: 20%">
            <div class="menu">
                    <h4><strong>Menu</strong></h4>
                    <div class="MenuLine"></div><br>
                    <?  
                        $username = $auth->getUsername();
                        echo 'Hi, '.$username;
                    ?>
                    <br>
                    <a href="search.php">Your Ztorex</a>
                    <br>
                    <a href="home.php">New Submission</a>
                    <br><br>
                    <a class="btn btn-primary" href="logout.php">Log out</a>

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

    .backgroundColor {
        border-bottom-style: solid;
        border-width: 0.1px;
        color: gray;
        background-color: #f7f7f7;
    }

</style>
<script>



    function get_username()
    {
        var name=$("#name").val();

        if(name!="")
        {
            $.ajax
            ({
                type:'post',
                url:'do_signup.php',
                data:{
                    get_username:name
                },
                success:function(response)
                {
                    $("#username").css({"display":"block"});
                    $("#username").html("UserName : "+response);
                    $("#username_value").val(response);
                }
            });
        }
    }



    function checkPassword(form) {
        password1 = form.password.value;
        password2 = form.confirmpassword.value;
        email=form.email.value;
        confirmEmail=form.confirmEmail.value;


         if (password1 != password2) {
            alert ("\nPassword did not match: Please try again...")
            return false;
        }
        if (email != confirmEmail) {
            alert ("\nEmail did not match: Please try again...")
            return false;
        }
    }
</script>

<?php
}
else {
    header("Location:login-form.php");
    die();
}