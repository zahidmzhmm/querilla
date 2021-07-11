<?php
include "php/controller.php";
if (!isset($_SESSION['User'])){
    header("location:login.php");
}
$title = "All Orders";
include "includes/header.php";
if (isset($_SESSION['Step'])){
    $email = $_SESSION['Step'];
    ?>
    <header class="reg_header">
        <div class="container pt-3 text-center">
            <div class="text">
                <h2>New Password</h2>
                <p><a href="index.php">Home</a> / Account</p>
            </div>
        </div>
    </header>
    <section class="reg_body my-5">
        <div class="container">
            <div class="col-lg-8 col-md-10 py-5 col_border m-auto">
                <div class="col-md-10 m-auto">
                    <form action="php/controller.php" method="post">
                        <label>Password *</label>
                        <input type="password" name="set_password" class="form-control" placeholder="New password" />
                        <button class="btn_button btn-block" name="set_user">Set Password</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
}else{
?>
    <header class="reg_header">
        <div class="container pt-3 text-center">
            <div class="text">
                <h2>All Orders</h2>
                <p><a href="index.php">Home</a> / Account</p>
            </div>
        </div>
    </header>
    <section class="contanct_body my-5">
        <div class="container">
            <?php if (isset($_SESSION['message'])){ ?><div class="col-md-6 m-auto"><div class="alert alert-warning"><?= $_SESSION['message'] ?></div></div> <?php unset($_SESSION['message']); } ?>
            <div class="mb-3"><a href="logout.php" class="btn btn-danger">Logout</a></div>
            <table class="table table-hover">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Balance Transaction</th>
                    <th scope="col">Order Id</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Email</th>
<!--                    <th scope="col">Files</th>-->
                </tr>
                </thead>
                <tbody>
                <?php
                $email = $_SESSION['User'];
                $i = 1;
                $select = $config->query("SELECT * FROM `orders` WHERE `email`='$email'");
                while ($data = mysqli_fetch_array($select)){
//                    $order_id = $data['order_id'];
                ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $data['balance_transaction'] ?></td>
                    <td>#<?= $data['order_id'] ?></td>
                    <td>&dollar;<?= $data['amount'] ?></td>
                    <td><?= $data['email'] ?></td>
<!--                    <td>--><?php //if (!empty($data['file'])){ echo "<a href='uploads/$file'>Download</a>"; }else{ echo "No File Found"; } ?><!--</td>-->
                </tr>
                <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </section>
<?php
}
include "includes/footer.php";
