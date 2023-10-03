<?php
require "./bootstart.php";

$tasks = $query->selectAll("tasks");
$users = $query->selectAll("users");
//dd($users);
//echo "<pre>";
//print_r($statement->fetchAll());
//print_r($statement->fetchAll(PDO::FETCH_ASSOC));
//print_r($statement->fetchAll(PDO::FETCH_OBJ));

require "index.view.php";