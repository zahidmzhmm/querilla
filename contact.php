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
                            <p>Contact@erentheme.com</p>
                        </div>
                    </div>
                    <div class="row m-0 p-0 mb-5">
                        <div class="icon">
                            <span><i class="fas fa-phone"></i></span>
                        </div>
                        <div class="text">
                            <h6>Number Phone:</h6>
                            <p>(800) 123 456 789, (800) 987 654 321</p>
                        </div>
                    </div>
                    <p>
                        Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready. Vel illum dolore eu feugiat nulla facilisis at vero eros et
                        accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    </p>
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