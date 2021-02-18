<?php
require_once("config.php");

if ($auth->isLoggedIn()) {
    header("Location:home.php");
    die();
}
?>

<form method="post" action="login.php">
    <input type="text" placeholder="email" name="email"><br>
    <input type="password" placeholder="password" name="password"><br>
    Remember me <input type="checkbox" name="remember"><br>
    <input type="submit">
</form>
