<?php require "views/partials/header.php"; ?>

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
<ul>
    <?php foreach ($users as $key => $user): ?>
        <li>
           Name : <?= $user->name;?>, Email : <?= $user->email;?>, Phone : <?= $user->phone;?>
        </li>
        
    <?php endforeach; ?>
</ul>

<?php require "views/partials/footer.php"; ?>