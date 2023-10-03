<?php
require "functions.php";
require "database/Connection.php";
require "database/QueryBuilder.php";


//connection mysql database
//$pdo = dbConnection();
//$pdo = Connection::make();

//fetch tasks
//$query = new QueryBuilder($pdo);
$query = new QueryBuilder(
    Connection::make()
);