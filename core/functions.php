<?php
function dd($data){
    echo "<pre>";
    die(var_dump($data));
}

function view($name, $data=[]){
    extract($data);
    return require "views/$name.view.php";
}

function redirect($uri)
{
    Header("Location: $uri");
}

function request($name)
{
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        return $_POST[$name];
    }
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        return $_GET[$name];
    }
}