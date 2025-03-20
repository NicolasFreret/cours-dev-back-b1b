<?php

function navigateTo(string $url):never{
    header('Location: '.config()->home_url.$url);
    exit;
}

function getDatas(string $table, callable $cb, string $fields = "*", string $condition = ""):string{
    $datas = read($table, $fields,$condition);
    ob_start();
    foreach ($datas as $key => $v) {
        $cb($key, $v);
    }
    return ob_get_clean();
}

function slugify(string $text):string{
    return str_replace(' ', '-',$text);
}