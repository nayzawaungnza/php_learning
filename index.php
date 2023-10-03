<?php
require "core/bootstart.php";

require Router::load("routes.php")
                ->direct(Request::uri());