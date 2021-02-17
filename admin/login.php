<?php
include "../php/controller.php";
if (isset($_SESSION['Admin'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Login Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" method="post" action="../php/controller.php">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <?php if (isset($_SESSION['danger'])){ ?><div class="alert alert-danger"><?= $_SESSION['danger'] ?></div><?php unset($_SESSION['danger']); } ?>
            <input type="text" class="form-control" placeholder="User Name" name="username" autofocus>
            <input type="password" class="form-control" placeholder="Password" name="password">
            <button name="login_admin" class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        </div>
    </form>

</div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
