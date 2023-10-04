<?php
require "vendor/autoload.php";
require "core/bootstart.php";

require Router::load("routes.php")->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);