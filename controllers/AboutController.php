<?php
$tasks = $database->selectAll("tasks");
$users = $database->selectAll("users");
require "views/about.view.php";