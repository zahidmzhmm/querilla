<div id="form_wish" class="">
    <?php
    include "php/controller.php";
    include "php/pay_config.php";
    if (isset($_SESSION['Product'])){
        $total_rows = 1;
        $totalamnt  = 0;
        $cardamount = 0;
        $idp        = 0;
    ?>
        <table class="table table-bordered text-center">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($_SESSION['Product'] as $cart=>$values){
            $idp = $values['product_id'];
            $qntity = $values['quantity'];
            $select = $config->query("select * from products where id='$idp'");
            $array = mysqli_fetch_array($select);
            $price = $array['price']*$qntity;
            $totalamnt += $price;
            $cardamount = $totalamnt*100;
            global $totalamnt;
            global $cardamount;
            ?>
            <tr>
                <input type="hidden" name="idp[]" value="<?= $idp ?>">
                <td><a href=""><?= $array['title'] ?></a> <a class="cart_remove" data-pid="<?= $array['id'] ?>" href="javascript:void;"><br><i class="fas fa-times"></i></a></td>
                <td>
                    <span class="">
                        <button data-pdctid="<?= $array['id']; ?>" data-pqnty="<?= $values['quantity'] ?>" class="btn min_quantity btn-sm">-</button>
                        <span><?= $qntity ?></span>
                        <button data-pdctid="<?= $array['id']; ?>" data-pqnty="<?= $values['quantity'] ?>" class="btn pls_qntity btn-sm">+</button>
                    </span>
                </td>
                <td>&dollar;<?= $price ?></td>
            </tr>
                <?php
                $total_rows++;
            }
            ?>
            </tbody>
        </table>
        <div class="row mx-0">
            <div class="cal-lg-4 pl-0 pl-lg-3 col-md-5 pr-0 ml-auto">
                <table class="table table-bordered">
                    <tr>
                        <td style="width: 36%;">Total</td>
                        <td class="text-center"><b>&dollar;<?= isset($totalamnt)?$totalamnt:'0.00' ?></b> </td>
                    </tr>
                </table>
                <form action="php/pay_submit.php" class="mr-auto" method="post">
                    <input type="hidden" name="product_id" class="product_id">
                    <script <?= isset($_SESSION['User'])?'data-email="'.$_SESSION['User'].'"':'' ?> src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $p_key; ?>" data-amount="<?php echo $cardamount; ?>" data-image="https://zahidmzhmm.com/admin/img/903icon.png" data-currency="usd"></script>
                </form>
            </div>
        </div>
    <?php
    }else{
        ?>
        <div class="py-4 option">
            <h5 class="text-center">Empty Cart</h5>
        </div>
        <?php
    }
    ?>
</div>
<script src="ajax.js"></script>
<script>
    var product_value = $("input[name='idp[]']").map(function(){return $(this).val();}).get();
    $(".product_id").val(product_value)
</script>