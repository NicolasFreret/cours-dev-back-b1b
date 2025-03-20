<?php

if($_SERVER['REQUEST_METHOD'] !='POST'){
    navigateTo('/login/?noPost');
}

if( $_POST['csrf'] !== $_SESSION['token'] ) exit;

foreach ($_POST as $key => $value) {
    if(trim($value)==""){
        navigateTo('/login/?'.$key.'=vide');
    }
}

$user = read('users','*','WHERE email = "'.$_POST['email'].'" AND password = "'.$_POST['password'].'" ');

if(!$user) navigateTo('/login/?wrong'); 

$_SESSION['user'] = $user[0];
unset($_SESSION['token']);

navigateTo('/');