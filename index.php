<?php
declare(strict_types=1);
require 'models/crud.php';
require 'functions.php';
session_start();
// require 'vendor/autoload.php';



switch (explode('?',$_SERVER['REQUEST_URI'])[0]) {
    case config()->prefixe.'/':
        require 'controllers/index.php';
        break;
    case config()->prefixe.'/spiruline/':
        require 'controllers/spiruline.php';
        break;
    case config()->prefixe.'/a-propos-de-nous/':
            require 'controllers/about.php';
            break;
    case config()->prefixe.'/login/':
            require 'controllers/login.php';
            break;
    case config()->prefixe.'/login-post/':
            require 'controllers/login-post.php';
            break;
    case config()->prefixe.'/logout/':
        require 'controllers/logout.php';
        break;
    default:
    header('HTTP/1.0 404 Not Found');
    require 'views/404.php';
        break;
}