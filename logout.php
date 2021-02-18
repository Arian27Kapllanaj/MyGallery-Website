<?php
require_once("config.php");

$auth->logOut();

header("Location:login-form.php");
die();