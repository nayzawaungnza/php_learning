<?php
// $router->register( [
//     "" => "controllers/IndexController.php",
//     "about" => "controllers/AboutController.php",
//     "contact" => "controllers/ContactController.php",
//     "order" => "controllers/OrderController.php",
//     "name" => "controllers/add-name.php",
// ]);

// $router->get("", "controllers/IndexController.php");
// $router->get("about", "controllers/AboutController.php");
// $router->get("contact", "controllers/ContactController.php");
// $router->get("order", "controllers/OrderController.php",);
// $router->post("name", "controllers/add-name.php");

use controllers\UserController;
use controllers\PagesController;

// $router->get("","PagesController@home");
// $router->get("about","PagesController@about");
// $router->get("contact","PagesController@contact");
// $router->get("order","PagesController@order");
// $router->post("create-user","UserController@createUser");
// $router->get("users","UserController@index");

$router->get('',[PagesController::class,'home']);
$router->get('about',[PagesController::class,'about']);
$router->get('contact',[PagesController::class,'contact']);
$router->get('order',[PagesController::class,'order']);
$router->post('create-user',[UserController::class,'createUser']);
$router->get('users',[UserController::class,'index']);
