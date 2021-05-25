<?php
$title = "Cart";
include "includes/header.php";
?>
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
<section class="card_body mb-5">
    <div class="container mainCart">
        <?php if (isset($_SESSION['error'])){ ?><div class="col-md-6 m-auto"><div class="alert alert-warning"><?= $_SESSION['error'] ?></div></div> <?php unset($_SESSION['error']); } ?>
        <?php
        include "ct.php";
        ?>
    </div>
</section>
<?php include "includes/footer.php"; ?>