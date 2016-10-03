<?php 

echo 'I am working' . PHP_EOL;

DEFINE('DB_HOST', '127.0.0.1');
DEFINE('DB_NAME', 'codeup_test_db');
DEFINE('DB_USER', 'codeup');
DEFINE('DB_PASS', 'getmein');

require_once __DIR__ . '/Model.php';
require_once __DIR__ . '/User.php';


$user = new User();
$user->id = 1;
$user->username = 'brady';
$user->password = 'bradynope';
$user->email = 'brady@hmail.com';
$user->save();


