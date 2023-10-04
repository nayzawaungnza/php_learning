<?php
//database from received core/bootstart.php
$tasks = $database->selectAll("tasks");
$users = $database->selectAll("users");
require "views/index.view.php";