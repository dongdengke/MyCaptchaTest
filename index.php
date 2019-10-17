<?php
require_once "vendor/autoload.php";

$username="xiaokeke";
$password="123456";
$res=xiaokeke\chaptcha\User::login($username,$password);
echo $res;
?>