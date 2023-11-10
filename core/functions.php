<?php
function dd($data){
    echo "<pre>";
    die(var_dump($data));
}

function view($name, $data=[]){
    extract($data);
    return require "views/$name.view.php";
}

// function redirect($uri)
// {
//     Header("Location: $uri");
// }

function request($name)
{
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        return $_POST[$name];
    }
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        return $_GET[$name];
    }
}

function redirect($uri, $withData = [])
{
    // Convert the data to a query string
    $queryString = http_build_query($withData);

    // Append the query string to the URI
    $redirectUri = $queryString ? "$uri?$queryString" : $uri;

    // Perform the redirect
    header("Location: $redirectUri");
    exit;
}

function route($uri){
    return "/$uri";
}