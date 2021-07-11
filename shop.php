<?php
include "php/controller.php";
$select = $config->query("select * from products where status='1' order by id desc ");
$num_rows = mysqli_num_rows($select);
$title = "Shop Now | Querilla";
$meta_description = "Shop important notes, studies and quality revision papers here at Querilla...";
$meta_keywords = "professional online tutoring,essays,revision, best online tutors, quality revision papers";
include "includes/header.php";
?>
<header class="reg_header">
    <div class="container pt-3 text-center">
        <div class="text">
            <h2>Shop</h2>
            <p><a href="index.php">Home</a> /Revision papers database</p>
        </div>
    </div>
</header>
<div class="container py-3">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- index_page -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-4574787651313621"
             data-ad-slot="6201557053"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
<section class="body_section mt-5 pt-4">
    <div class="container">
        <div class="header">
            <p>Total <?= $num_rows ?> results</p>
        </div>
    </div>
</section>
<section class="all_product mb-5">
    <div class="container-fluid">
        <?php if (isset($_SESSION['return'])){ ?><div class="alert alert-warning"><?= $_SESSION['return'] ?></div> <?php unset($_SESSION['return']); } ?>
        <div class="row">
            <?php
            $select2 = $config->query("select * from products where status='1' order by id desc ");
            while ($data = mysqli_fetch_array($select2)){
            ?>
            <div class="col-lg-3 col-xl-2 col-md-4 col-sm-6">
                <div class="all_div mb-1">
                    <img style="height: 10rem;" src="uploads/<?= $data['images'] ?>" alt="" />
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