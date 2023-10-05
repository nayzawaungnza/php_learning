<?php
$tasks = $database->selectAll("tasks");
$users = $database->selectAll("users");


view("about",[
    "users" => $users,
    "tasks" => $tasks
]);