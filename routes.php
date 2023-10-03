<?php
// $router->register( [
//     "" => "controllers/IndexController.php",
//     "about" => "controllers/AboutController.php",
//     "contact" => "controllers/ContactController.php",
//     "order" => "controllers/OrderController.php",
//     "name" => "controllers/add-name.php",
// ]);

$router->get("", "controllers/IndexController.php");
$router->get("about", "controllers/AboutController.php");
$router->get("contact", "controllers/ContactController.php");
$router->get("order", "controllers/OrderController.php",);
$router->post("name", "controllers/add-name.php");