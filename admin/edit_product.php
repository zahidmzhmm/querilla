<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("location:view_product.php");
}
include "../php/controller.php";
$data = mysqli_fetch_array($config->query("select * from products where id='" . $_GET['id'] . "'"));
if (!$data) {
    header("location:view_product.php");
}
$img = file_exists('../uploads/' . $data['images']) ? '../uploads/' . $data['images'] : 'https://via.placeholder.com/200x150';

$title = "Edit Product";
require_once "includes/header.php";
?>
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mx-0">
                <form action="../php/controller.php" enctype="multipart/form-data" method="post"
                      class="col-md-6 m-auto">
                    <?php if (isset($_SESSION['alert'])) { ?>
                        <div class="alert alert-warning"><?= $_SESSION['alert'] ?></div> <?php unset($_SESSION['alert']);
                    } ?>
                    <input type="hidden" name="old_img" value="<?= $data['images'] ?>">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="<?= $img ?>" alt=""/>
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail"
                                     style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                            <span class="btn btn-white btn-file">
                                <span class="fileupload-new"><i
                                            class="fa fa-paper-clip"></i> <small>Select image</small></span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> <small>Change</small></span>
                                <input name="img1" type="file" class="default"/>
                            </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i
                                                class="fa fa-trash"></i> <small>Remove</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 my-2 my-sm-0">
                            <input name="title" value="<?= $data['title'] ?>" type="text" class="form-control"
                                   placeholder="Title"/>
                        </div>
                        <div class="col-sm-3 my-2 my-sm-0 pl-sm-0">
                            <label class="sr-only" for="inlineFormInputGroup">Price</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">&dollar;</div>
                                </div>
                                <input name="price" value="<?= $data['price'] ?>" type="number" class="form-control"
                                       id="inlineFormInputGroup"
                                       placeholder="Price"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?= $data['keywords'] ?>" name="keywords" class="form-control"
                               placeholder="Keywords">
                        <small class="text-warning">For Multiple use ( Comma, ) </small>
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" cols="30" rows="4" class="form-control"
                                  placeholder="Description"><?= $data['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="big_des" id="" cols="30" rows="4" class="summernote"
                                  placeholder="Description"><?= $data['big_des'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="old_pf" value="<?= $data['file'] ?>">
                        <input type="file" name="product_file">
                    </div>
                    <div class="text-left">
                        <button name="update_product" class="btn btn-success"><small>Update</small></button>
                    </div>
                </form>
            </div>
        </section>
    </section>
<?php
require_once "includes/footer.php";
?>