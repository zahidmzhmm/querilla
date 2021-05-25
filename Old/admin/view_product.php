<?php
include "../php/controller.php";
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = $config->query("DELETE FROM `products` WHERE id='$id'");
    if ($delete===true){
        header("location:view_product.php?do=Success");
    }else{
        header("location:view_product.php?do=Error");
    }
}
$title = "All Product";
require_once "includes/header.php";
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <?php if (isset($_GET['do'])){ ?><div class="alert alert-warning"><?= $_GET['do'] ?></div> <?php } ?>
        <div class="row mx-0">
            <section class="card">
                <div class="card-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            $select = $config->query("select * from products order by `id`desc ");
                            while ($data = mysqli_fetch_array($select)){
                                ?>
                                <tr class="">
                                    <td><?= $i; ?></td>
                                    <td><?= $data['title'] ?></td>
                                    <td>&dollar;<?= $data['price'] ?></td>
                                    <td><?= $data['status']==1?'<span class="text-success">Active</span>':'' ?></td>
                                    <td><a href="?delete=<?= $data['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <?php $i++; } ?>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </section>
</section>
<?php
require_once "includes/footer.php";
?>
