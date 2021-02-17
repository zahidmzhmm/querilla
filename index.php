<?php
include "php/controller.php";
$title = "Home";
include "includes/header.php"; ?>
<header class="header_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-10">
                <div class="header_text">
                    <h2> Revision papers submitted  <br /> to top universities and scored A </h2>
                    <p>At our online writing firm our goal is to see students excel in their studies. Subsequently, we are dedicated to ensuring that students pass their tests and exams by providing them with reliable revision papers. Sometimes students fail their exams not because they do not understand the concept being tested but because of the simple reason that they do not know how to manage such exams. This is a fact that we are not ignorant about. As a result of this, we provide quality revision papers to help students familiarize themselves with how different types of tests and exams are set. Such papers also help students to anticipate the kind of questions to expect in their tests and exams. </p>
                    <a class="btn_button" href="discover.php">Discover now</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="body_section mt-5 pt-4">
    <div class="container">
        <div class="header text-center">
            <h2>Our Products</h2>
            <p><b>We</b> offer <b>quality revision papers</b> and professional online tutoring services. The idea of establishing this online firm was inspired by the fact that students struggle in not only writing different types of academic papers but also in preparing for exams. While the benefits of using revision papers when learning how to write or when preparing for a test have been proven beyond reasonable doubt, students struggle to access them. This online company was thus established so that it can solve this evident problem. Going in line with this, we offer helpful yet <b>affordable revision papers for college</b> as well as other academic levels. If you have therefore been looking for this kind of papers then you should consider your search to be over.</p>
        </div>
    </div>
</section>
<section class="all_product mb-5">
    <div class="container">
        <div class="row">
            <?php
            $select = $config->query("SELECT * FROM `products` where status='1' order by id desc limit 8");
            while ($data = mysqli_fetch_array($select)){
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
        <div class="text-center">
            <button onclick="window.location.href='shop.php'" class="btn_button sub">LOAD MORE</button>
        </div>
    </div>
</section>
<?php include "includes/footer.php";