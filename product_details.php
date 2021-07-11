<?php
include "php/controller.php";
if (!isset($_GET['product_id'])) {
    header("location:shop.php");
}
$product_id = $_GET['product_id'];
$select = $config->query("SELECT * FROM `products` WHERE id='$product_id'");
$checking = mysqli_num_rows($select);
if (!$checking == 1) {
    header("location:shop.php");
}
$data = mysqli_fetch_array($select);
$title = $data['title'];
$meta_description = $data['description'];
$meta_keywords = $data['keywords'];
include "includes/header.php";
?>
<section class="product_body pt-5">
    <div class="container my-5">
        <?php if (isset($_SESSION['return'])) { ?><div class="alert alert-warning"><?= $_SESSION['return']; ?></div> <?php unset($_SESSION['return']);
                                                                                                                } ?>
        <div class="row pt-5">
            <div class="col-md-5">
                <div class="img">
                    <img src="uploads/<?= $data['images'] ?>" alt="" class="img-fluid" />
                </div>
            </div>
            <div class="col-md-7">
                <div class="text">
                    <h4><?= $data['title'] ?></h4>
                    <p class="dolor">$<?= $data['price'] ?>
                    </p>
                    <hr />
                    <div class="text_medil">
                        <?= $data['description'] ?>
                    </div>
                    <hr />
                    <form method="post" action="php/controller.php" class="row Quantity m-0 p-0">
                        <span class="mb-3 mt-3">Quantity</span>
                        <div class="mt-2 w-25">
                            <input type="hidden" name="product_id" value="<?= $data['id'] ?>">
                            <input type="number" name="quantity" required class="form-control ml-2" min="1" value="1">
                        </div>
                        <div class="w-100"><button name="add_to_cart2" type="submit" class="card_button mb-3 mt-2">+ Add to Cart</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Description">
    <div class="container">
        <div class="row overflow-hidden mx-0">
            <?= $data['big_des'] ?>
        </div>
        <div class="my-3">
            <span class="">Keywords: </span>
            <span><?= $data['keywords'] ?></span>
        </div>
    </div>
</section>

<section class="body_section mt-5 pt-4">
    <div class="container">
        <div class="header text-center">
            <h2>Other Products</h2>
            <p>University revision papers for your guidance</p>
        </div>
    </div>
</section>
<section class="all_product mb-5">
    <div class="container">
        <div class="row">
            <?php
            $select = $config->query("SELECT * FROM `products` where status='1' order by id desc limit 4");
            while ($data = mysqli_fetch_array($select)) {
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="all_div">
                        <img style="height: 20rem;" src="uploads/<?= $data['images'] ?>" alt="" />
                        <div class="text">
                            <h5><a href="product_details.php?product_id=<?= $data['id'] ?>"><?= $data['title'] ?></a></h5>
                            <div class="top_hover">
                                <p>
                                    <span>&dollar;<?= $data['price'] ?></span> <span class="d-sm-none ml-3"><a class="text-dark" href="?addtocart=<?= $data['id'] ?>">+ Add to Cart</a></span>
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
<?php include "includes/footer.php";
