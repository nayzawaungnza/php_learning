<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learngin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">
</head>
<style>
    body{
        /* background-color: gray;
        padding: 2em;
        text-align: left; */
    }
</style>
<body>
<h1 class="text-center">  PHP Learning </h1>
<ul>
<?php foreach ($tasks as $key => $task): ?>
    <li>
        <?php
            if($task->complete){
                echo "<strike class='text-success'>$task->description</strike>";
            }else{
                echo "<em>$task->description</em>";
            }
         ?>
    </li>
    
<?php endforeach; ?>
</ul>
</body>
</html>