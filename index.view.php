<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learngin</title>
</head>
<style>
    body{
        background-color: gray;
        padding: 2em;
        text-align: center;
    }
</style>
<body>
<h1>
    <?= $greeting ?>
    <ul>
        <!-- <?php
        // foreach ($names as $name) {
        //     echo "<li>$name</li> ";
        // }
        ?> -->

        <?php foreach ($names as $name) : ?>
        <?php echo "<li>$name</li> "; ?>
        <?php endforeach; ?>
    </ul>
    <?php foreach( $person as $key=>$feature) :?>
    <p><?= $key. "-". $feature; ?></p>
    <?php endforeach; ?>

    <p>task title is <?php echo $task['title'] ?></p>
    <p>task due date is <?php echo $task['due'] ?> </p>
    <?php echo $task['complete'] ? "complete":"incomplete"; ?>

    <!-- <?php
    
    //echo "Hello ". $_GET['name'];
    ?> -->
    
</h1>
</body>
</html>