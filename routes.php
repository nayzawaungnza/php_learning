<?php

use controllers\UserController;
use controllers\PagesController;

$router->get('',[PagesController::class,'home']);
$router->get('about',[PagesController::class,'about_about']);
$router->get('contact',[PagesController::class,'contact']);
$router->get('order',[PagesController::class,'order']);
$router->post('create-user',[UserController::class,'createUser']);
$router->get('users',[UserController::class,'index']);
$router->post('users/delete/{id}',[UserController::class,'delete']);
