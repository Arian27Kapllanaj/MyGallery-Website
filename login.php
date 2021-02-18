<?php
require_once("config.php");

try {
    if (isset($_POST['remember'])) {
        // keep logged in for one year
        $rememberDuration = (int) (60 * 60 * 24 * 365.25);
    }
    else {
        // do not keep logged in after session ends
        $rememberDuration = null;
    }

    $auth->login($_POST['email'], $_POST['password'], $rememberDuration);

    echo 'User is logged in, duration=' . $rememberDuration;
}
catch (\Delight\Auth\InvalidEmailException $e) {
    die('Wrong email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Wrong password');
}
catch (\Delight\Auth\EmailNotVerifiedException $e) {
    die('Email not verified');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}
