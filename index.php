<?php
$greeting = "Hello World";

//$names = ["Nay Nay", "Zaw Zaw", "Aung Aung"];

$personBio = [
    "name" => "nay zaw",
    "age" => 20,
    "hair" => "brown",
    "isMarried" => false,
];
//echo $personBio['isMarried'] ? "Married":"NotMarried";
// if ($personBio['isMarried']) {
//     echo "Married";
// }else{
//     echo "Not Married";
// }
// $task = [
//     "title"=>"finish work",
//     "due"=>"today",
//     "complete"=>true,
// ];

//var_dump($names);
//echo "<pre>";
//print_r($person);
//die();
// foreach ($names as $name) {
//     echo $name . ", ";
// }
//die();
require "index.view.php";