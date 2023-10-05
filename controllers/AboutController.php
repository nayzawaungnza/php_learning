<?php
$tasks = App::get("database")->selectAll("tasks");
$users = App::get("database")->selectAll("users");


view("about",[
    "users" => $users,
    "tasks" => $tasks
]);