<?php 
use core\Session;
require "views/partials/header.php";
Session::start();

// Retrieve errors from the session
$errors = Session::get('errors') ?? [];
Session::set('errors', null);

$inputData = Session::get('inputs') ?? [];
Session::set('inputs', null);

$success = Session::get('success') ?? '';
Session::set('success', null);
//dd($inputData);
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 pt-4">

        <?php if(!empty($success)): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-inner--text"><strong> <?php echo $success; ?></strong> </span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
        <?php endif; ?>
        </div>
    <div class="col-md-6 offset-3 pt-4">
            <div class="card card-body shadow">
            <h1 class="text-center">Register</h1>
                <form action="<?php echo route("register") ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="txtname" placeholder="Enter your name" id="name" class="form-control" value="<?php echo htmlspecialchars($inputData['txtname'] ?? ''); ?>">
                        <?php if (!empty($errors['txtname'])): ?>
                            <span class="text-danger"><?php echo $errors['txtname'][0]; ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <input type="email" name="txtemail" placeholder="Enter your email" id="email" class="form-control" value="<?php echo htmlspecialchars($inputData['txtemail'] ?? ''); ?>">
                        <?php if (!empty($errors['txtemail'])): ?>
                            <?php foreach ($errors['txtemail'] as $error): ?>
                                <span class="text-danger"><?php echo $error; ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtphone" placeholder="Enter your Phone" id="phone" class="form-control" value="<?php echo htmlspecialchars($inputData['txtphone'] ?? ''); ?>">
                        <?php if (!empty($errors['txtphone'])): ?>
                            <?php foreach ($errors['txtphone'] as $error): ?>
                                <span class="text-danger"><?php echo $error; ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="txtpassword" placeholder="Enter your Password" id="password" class="form-control">
                        <?php if (!empty($errors['txtpassword'])): ?>
                            <?php foreach ($errors['txtpassword'] as $error): ?>
                                <span class="text-danger"><?php echo $error; ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirmPassword" placeholder="Enter your Confirm Password" id="confirm_password" class="form-control">
                        <?php if (!empty($errors['confirmPassword'])): ?>
                            <?php foreach ($errors['confirmPassword'] as $error): ?>
                                <span class="text-danger"><?php echo $error; ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    
                    <input type="submit" value="Register" class="btn btn-dark">
                </form>
            </div>
        </div>
    </div>
</div>



<?php require "views/partials/footer.php"; ?>
use core\Session;
