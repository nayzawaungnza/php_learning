<?php
require "functions.php";
//connection mysql database
$pdo = dbConnection();

//fetch tasks
$tasks = fetchTasks($pdo);
//echo "<pre>";
//print_r($statement->fetchAll());
//print_r($statement->fetchAll(PDO::FETCH_ASSOC));
//print_r($statement->fetchAll(PDO::FETCH_OBJ));

require "index.view.php";