<?php
require __DIR__ . '/vendor/autoload.php';

$db = new PDO(
        'mysql:dbname=auth;host=localhost;charset=utf8mb4',
    'root', '');

$auth = new \Delight\Auth\Auth($db);
