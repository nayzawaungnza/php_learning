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
<h1>
    <?= $greeting ?>
    <ul>
    <li>He is
        <?php if($personBio['isMarried']): ?>
            married.
        <?php else: ?>
                not married.
        <?php endif; ?>
    </li>
        <!-- <?php foreach ($names as $name) : ?>
        <?php echo "<li>$name</li> "; ?>
        <?php endforeach; ?> -->
    </ul>
    
    
</h1>
</body>
</html>