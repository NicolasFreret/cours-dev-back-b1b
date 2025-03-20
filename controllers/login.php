<?php

if(isset($_SESSION['user'])) navigateTo('/');
$page="login";
$token = uniqid();
$_SESSION['token'] = $token;
require 'views/login.php';