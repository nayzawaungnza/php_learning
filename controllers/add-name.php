<?php
App::get("database")->insert([
    "name" => $_POST['txtname'],
    "email" => $_POST['txtemail'],
    "phone" => $_POST['txtphone'],
],"users");

Header("Location: /");