<?php require "views/partials/header.php"; ?>

<h1 class="text-center"> Users List -  PHP Learning </h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php //dd($users); ?>
            <ul>
                <?php foreach ($users as $key => $user):?>
                    <li>
                        <?php echo "Name :  $user->name, Mail : $user->email, Phone : $user->phone";?>
                    </li>
                <?php endforeach; ?>
            </ul>

            
        </div>
        
    </div>
</div>

<?php 

?>

<?php require "views/partials/footer.php"; ?>