<?php
$greeting = "Hello World";

$names = ["Nay Nay", "Zaw Zaw", "Aung Aung"];

$person = [
    "name" => "nay zaw",
    "age" => 20,
    "hair" => "brown",
];

$task = [
    "title"=>"finish work",
    "due"=>"today",
    "complete"=>true,
];

//echo "<pre>";
//print_r($person);
//die();
// foreach ($names as $name) {
//     echo $name . ", ";
// }

require "index.view.php";