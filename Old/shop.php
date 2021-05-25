<?php
include "php/controller.php";
$select = $config->query("select * from products where status='1' order by id desc ");
$num_rows = mysqli_num_rows($select);
$title = "Shop";
include "includes/header.php";
?>
<header class="reg_header">
    <div class="container pt-3 text-center">
        <div class="text">
            <h2>Shop</h2>
            <p><a href="index.php">Home</a> / Shop</p>
        </div>
    </div>
</header>
<section class="body_section mt-5 pt-4">
    <div class="container">
        <div class="header">
            <p>Total <?= $num_rows ?> results</p>
        </div>
    </div>
</section>
<section class="all_product mb-5">
    <div class="container">
        <?php if (isset($_SESSION['return'])){ ?><div class="alert alert-warning"><?= $_SESSION['return'] ?></div> <?php unset($_SESSION['return']); } ?>
        <div class="row">
            <?php
            $select2 = $config->query("select * from products where status='1' order by id desc ");
            while ($data = mysqli_fetch_array($select2)){
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="all_div">
                    <img style="height: 20rem;" src="uploads/<?= $data['images'] ?>" alt="" />
                    <div class="text">
                        <h5><a href="product_details.php?product_id=<?= $data['id'] ?>"><?= $data['title'] ?></a></h5>
                        <div class="top_hover">
                            <p>
                                <span>$<?= $data['price'] ?></span> <span class="d-sm-none ml-3"><a class="text-dark" href="?addtocart=<?= $data['id'] ?>">+ Add to Cart</a></span>
                            </p>
                            <h6><a href="php/controller.php?addtocart=<?= $data['id'] ?>">+ Add to Cart</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>