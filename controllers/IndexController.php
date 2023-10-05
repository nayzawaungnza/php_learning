<?php
//database from received core/bootstart.php
$tasks = App::get("database")->selectAll("tasks");
$users = App::get("database")->selectAll("users");
//require "views/index.view.php";

view("index",[
    "users" => $users,
    "tasks" => $tasks
]);