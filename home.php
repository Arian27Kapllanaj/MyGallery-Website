<?php
require_once("config.php");

if ($auth->isLoggedIn()) {
    echo "<h1>Welcome</h1>";
    echo "<a href='logout.php'>Logout</a>";
}
else {
    header("Location:login-form.php");
    die();
}


