<?php require "views/partials/header.php"; ?>
<div class="container">
    <div class="row">
    <div class="col-md-6 offset-3 pt-4">
            <div class="card card-body shadow">
            <h1 class="text-center">Register</h1>
                <form action="<?php echo route("register") ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="txtname" placeholder="Enter your name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="txtemail" placeholder="Enter your email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtphone" placeholder="Enter your Phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="txtpassword" placeholder="Enter your Password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirmPassword" placeholder="Enter your Confirm Password" id="confirm_password" class="form-control">
                    </div>
                    
                    <input type="submit" value="Register" class="btn btn-dark">
                </form>
            </div>
        </div>
    </div>
</div>



<?php require "views/partials/footer.php"; ?>