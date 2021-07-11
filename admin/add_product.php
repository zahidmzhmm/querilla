<?php
session_start();
$title = "Add Product";
require_once "includes/header.php";
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mx-0">
            <form action="../php/controller.php" enctype="multipart/form-data" method="post" class="col-md-6 m-auto">
                <?php if (isset($_SESSION['alert'])){ ?><div class="alert alert-warning"><?= $_SESSION['alert'] ?></div> <?php unset($_SESSION['alert']); } ?>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                            <span class="btn btn-white btn-file">
                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> <small>Select image</small></span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> <small>Change</small></span>
                                <input name="img1" type="file" class="default" />
                            </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> <small>Remove</small></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 my-2 my-sm-0">
                        <input name="title" type="text" class="form-control" placeholder="Title" />
                    </div>
                    <div class="col-sm-3 my-2 my-sm-0 pl-sm-0">
                        <label class="sr-only" for="inlineFormInputGroup">Price</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">&dollar;</div>
                            </div>
                            <input name="price" type="number" class="form-control" id="inlineFormInputGroup" placeholder="Price" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="keywords" class="form-control" placeholder="Keywords">
                    <small class="text-warning">For Multiple use ( Comma, ) </small>
                </div>
                <div class="form-group">
                    <textarea name="description" id="" cols="30" rows="4" class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="big_des" id="" cols="30" rows="4" class="summernote" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="product_file">
                </div>
                <div class="text-left">
                    <button name="save_product" class="btn btn-success"><small>Save</small></button>
                </div>
            </form>
        </div>
    </section>
</section>
<?php
require_once "includes/footer.php";
?>
