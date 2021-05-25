<?php
$title = "Cart";
include "includes/header.php";
?>
<section class="card_body mb-5">
    <div class="container mainCart">
        <?php if (isset($_SESSION['error'])){ ?><div class="col-md-6 m-auto"><div class="alert alert-warning"><?= $_SESSION['error'] ?></div></div> <?php unset($_SESSION['error']); } ?>
        <?php
        include "ct.php";
        ?>
    </div>
</section>
<?php include "includes/footer.php"; ?>