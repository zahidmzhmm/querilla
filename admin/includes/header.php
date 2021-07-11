<?php
$php_self = explode('/', $_SERVER['PHP_SELF']);
$ac_class = end($php_self);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= isset($meta_description) ? $meta_description : '' ?>">
    <meta name="author" content="<?= isset($meta_author) ? $meta_author : '' ?>">
    <meta name="keyword" content="<?= isset($meta_keyword) ? $meta_keyword : '' ?>">
    <meta name="Robots" content="<?= isset($meta_robots) ? $meta_robots : '' ?>">
    <meta name="copyright" content="<?= isset($meta_copyright) ? $meta_copyright : '' ?>" />
    <meta name="expires" content="<?= isset($meta_expires) ? $meta_expires : '' ?>" />
    <meta name="distribution" content="<?= isset($meta_distribution) ? $meta_distribution : '' ?>" />
    <meta name="identifier-url" content="<?= isset($meta_identifier_url) ? $meta_identifier_url : '' ?>" />
    <meta name="language" content="<?= isset($meta_language) ? $meta_language : '' ?>" />
    <meta property="og:url" content="<?= isset($meta_og_url) ? $meta_og_url : '' ?>" />
    <meta property="og:type" content="<?= isset($meta_og_type) ? $meta_og_type : '' ?>" />
    <meta property="og:title" content="<?= isset($meta_og_title) ? $meta_og_title : '' ?>" />
    <meta property="og:description" content="<?= isset($meta_og_description) ? $meta_og_description : '' ?>" />
    <meta property="og:image" content="<?= isset($meta_og_image) ? $meta_og_image : '' ?>" />
    <meta name="google-site-verification" content="<?= isset($google_site_verify) ? $google_site_verify : '' ?>" />
    <title><?= isset($title) ? $title : '' ?></title>
    <link rel="shortcut icon" href="<?= isset($back_asset) ? $back_asset : '' ?>img/favicon.png">
    <link rel="stylesheet" href="<?= isset($back_asset) ? $back_asset : '' ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= isset($back_asset) ? $back_asset : '' ?>css/bootstrap-reset.css">
    <link rel="stylesheet" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?= isset($back_asset) ? $back_asset : '' ?>css/slidebars.css">
    <link rel="stylesheet" href="<?= isset($back_asset) ? $back_asset : '' ?>css/style.css">
    <link rel="stylesheet" href="<?= isset($back_asset) ? $back_asset : '' ?>css/style-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/colorpicker/css/bootstrap-colorpicker.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/switchery/switchery.css" />
    <link rel="stylesheet" type="text/css" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/select2/css/select2.min.css" />
    <link href="<?= isset($back_asset) ? $back_asset : '' ?>assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?= isset($back_asset) ? $back_asset : '' ?>assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= isset($back_asset) ? $back_asset : '' ?>assets/data-tables/DT_bootstrap.css" />
    <link href="<?= isset($back_asset) ? $back_asset : '' ?>css/slidebars.css" rel="stylesheet">
    <link href="<?= isset($back_asset) ? $back_asset : '' ?>css/style.css" rel="stylesheet">
    <link href="<?= isset($back_asset) ? $back_asset : '' ?>css/style-responsive.css" rel="stylesheet" />
    <link href="<?= isset($back_asset) ? $back_asset : '' ?>css/slidebars.css" rel="stylesheet">
    <link href="<?= isset($back_asset) ? $back_asset : '' ?>assets/summernote/summernote-bs4.css" rel="stylesheet">
    <style>
        .fileupload .thumbnail>img {
            width: 12.3rem;
        }

        .fileupload-preview {
            max-height: 145px !important;
        }
    </style>

</head>

<body>

    <section id="container" class="">
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <i class="fa fa-bars"></i>
            </div>
            <a href="<?= isset($back_asset) ? $back_asset : '' ?>index.php" class="logo">Admin <span>Panel</span></a>
            <div class="top-nav">
                <ul class="nav pull-right top-menu">
                    <li class="sb-toggle-right">
                        <i onclick='window.location.href="<?= isset($back_asset) ? $back_asset : '' ?>logout.php"' class="fa text-danger fa-power-off"></i>
                    </li>
                </ul>
            </div>
        </header>
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li class="">
                        <a class="<?= $ac_class == 'index.php' ? 'active' : '' ?>" href="<?= isset($back_asset) ? $back_asset : '' ?>index.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="<?= $ac_class == 'orders.php' ? 'active' : '' ?>" href="<?= isset($back_asset) ? $back_asset : '' ?>orders.php">
                            <i class="fa fa-bars"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a class="<?= $ac_class == 'add_product.php' ? 'active' : '' ?><?= $ac_class == 'view_product.php' ? 'active' : '' ?>" href="javascript:void(0);">
                            <i class="fa fa-sitemap"></i>
                            <span>Product</span>
                        </a>
                        <ul class="sub">
                            <li class="<?= $ac_class == 'add_product.php' ? 'active' : '' ?>"><a href="<?= isset($back_asset) ? $back_asset : '' ?>add_product.php">Add Product</a></li>
                            <li class="<?= $ac_class == 'view_product.php' ? 'active' : '' ?>"><a href="<?= isset($back_asset) ? $back_asset : '' ?>view_product.php">View Product</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a class="<?= $ac_class == 'contact.php' ? 'active' : '' ?>" href="<?= isset($back_asset) ? $back_asset : '' ?>contact.php">
                            <i class="fa fa-bars"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="<?= $ac_class == 'users.php' ? 'active' : '' ?>" href="<?= isset($back_asset) ? $back_asset : '' ?>users.php">
                            <i class="fa fa-bars"></i>
                            <span>Users</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>