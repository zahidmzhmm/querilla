<?php
include "php/controller.php";
$title = "Contact";
include "includes/header.php"; ?>
<header class="reg_header">
    <div class="container pt-3 text-center">
        <div class="text">
            <h2>Contact</h2>
            <p><a href="index.php">Home</a> / Contact</p>
        </div>
    </div>
</header>

<section class="contanct_body my-5">
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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left_div mb-4">
                    <h4 class="mb-5">Find us here.</h4>
                    <div class="row m-0 p-0 mb-4">
                        <div class="icon">
                            <span><i class="fas fa-envelope"></i></span>
                        </div>
                        <div class="text">
                            <h6>Email:</h6>
                            <a href="mailto:contact@querilla.com">contact@querilla.com</a>
                        </div>
                    </div>
                    <div class="row m-0 p-0 mb-5">
                        <div class="icon">
                            <span><i class="fab fa-skype"></i></span>
                        </div>
                        <div class="text">
                            <h6>Skype:</h6>
                            <a href="skype:assignmenthelper?chat">assignmenthelper</a>
                        </div>
                    </div>
                    <div class="icon2 mb-5">
                        <a href=""><i class="fab fa-dribbble"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-behance"></i></a>
                        <a href=""><i class="fas fa-share-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right_div mb-4">
                    <h4 class="mb-5">Contact Us.</h4>
                    <?php if (isset($_SESSION['msg'])){ ?><div class="alert alert-warning"><?= $_SESSION['msg'] ?></div> <?php unset($_SESSION['msg']); } ?>
                    <form method="post" action="php/controller.php">
                        <?php
                        if (isset($_SESSION['User'])){
                            ?>
                            <input type="hidden" name="email" value="<?= $_SESSION['User'] ?>">
                            <?php
                        }else{
                            ?>
                            <label>Email *</label>
                            <input name="email" type="text" class="form-control" />
                            <?php
                        }
                        ?>
                        <label>Subject *</label>
                        <input name="subject" type="text" class="form-control" />
                        <label>Message</label>
                        <textarea class="form-control" name="message" id="" cols="" rows="5"></textarea>
                        <button name="send_message" class="btn_button mt-5">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>