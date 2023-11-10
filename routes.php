<?php

use controllers\AuthController;
use controllers\UserController;
use controllers\PagesController;

$router->get('',[PagesController::class,'home']);
$router->get('about',[PagesController::class,'about_about']);
$router->get('contact',[PagesController::class,'contact']);
$router->get('order',[PagesController::class,'order']);
$router->post('create-user',[UserController::class,'createUser']);
$router->get('users/delete',[UserController::class,'deleteUser']);
$router->get('users',[UserController::class,'index']);
<<<<<<< HEAD

$router->get('login',[AuthController::class,'login']);

$router->post('register',[AuthController::class,'createRegister']);
$router->get('register',[AuthController::class,'register']);
=======
$router->post('users/delete/{id}',[UserController::class,'delete']);
>>>>>>> 7300e852b61932712b4fe368c440f546aab9a426
