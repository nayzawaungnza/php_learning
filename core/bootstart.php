<?php
$config = require "config.php";
// require "core/Router.php";
// require "core/Request.php";
 require "core/functions.php";
// require "core/database/Connection.php";
// require "core/database/QueryBuilder.php";


//connection mysql database
//$pdo = dbConnection();
//$pdo = Connection::make();

//fetch tasks
//$query = new QueryBuilder($pdo);
$database = new QueryBuilder(
    Connection::make($config['database'])
);