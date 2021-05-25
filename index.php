<?php
include "php/controller.php";
$title = "Reliable Revision Papers for Top Universities | Querilla";
$meta_description = "We offer diverse revision papers to help students familiarize with different types of tests and anticipate the kind of questions to expect in exams...";
$meta_keywords = "Revision Papers, questions, students, top universities, quality revision papers, papers from top universities, online tutoring, affordable revision papers, education";
include "includes/header.php"; ?>
<header class="header_section" style="height:35rem;overflow:hidden;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-10">
                <div class="header_text">
                    <h2> Revision papers submitted  <br /> to top universities and scored A </h2>
                    <p style="font-family:'Segoe UI';">At our online writing firm our goal is to see students excel in their studies. We ensure students pass their tests and exams from our reliable revision papers. We provide quality revision papers to help students familiarize themselves with how different types of tests and exams are set. Such papers also help students to anticipate the kind of questions to expect in their tests and exams.</p>
                    <a class="btn_button" href="discover.php">Discover now</a>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container py-3" style="position:relative">
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
</section>
<section class="body_section mt-5 pt-4">
    <div class="container">
        <div class="header text-center">
            <h2>Revision Papers</h2>
            <p>We offer revision papers and professional online tutoring services.The idea of establishing this online firm was inspired by the fact that students struggle in preparing for exams. While the benefits of using revision papers when learning how to write or when preparing for a test have been proven beyond reasonable doubt, students struggle to access them. We solve this evident problem. Going in line with this, we offer helpful yet affordable revision papers for college as well as other academic levels. If you have are looking for this kind of papers then you should consider your search to be over.</p>
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
                <div class="all_div mb-0">
                    <img style="height: 13rem;" src="uploads/<?= $data['images'] ?>" alt="" />
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