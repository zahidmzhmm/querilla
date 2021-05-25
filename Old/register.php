<?php
session_start();
if (isset($_SESSION['User'])){
    header("location:myorders.php");
}
$title = "Register";
include "includes/header.php";
?>
<header class="reg_header">
    <div class="container pt-3 text-center">
        <div class="text">
            <h2>Register</h2>
            <p><a href="index.php">Home</a> / Register</p>
        </div>
    </div>
</header>
<section class="reg_body my-5">
    <div class="container">
        <div class="col-lg-8 col-md-10 py-5 col_border m-auto">
            <div class="col-md-10 m-auto">
                <h3 class="text-center mb-4">
                    Signup From Here
                </h3>
                <?php if (isset($_SESSION['alert'])){ ?><div class="alert alert-warning"><?= $_SESSION['alert'] ?></div> <?php unset($_SESSION['alert']); } ?>
                <form action="php/controller.php" method="post">
                    <label>Email Address *</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter address" />
                    <label>Password *</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" />
                    <button class="btn_button btn-block" name="register_user">REGISTER NOW</button>
                    <p class="py-4 text-center">Or</p>
                    <button onclick="window.location.href='login.php'" type="button" class="btn_button btn-block bg-dark text-light">login now</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>