<?php
$tasks = $query->selectAll("tasks");
$users = $query->selectAll("users");
require "views/index.view.php";