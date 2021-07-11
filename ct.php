<div id="form_wish" class="">
    <?php
    include "php/controller.php";
    include "php/pay_config.php";
    if (isset($_SESSION['Product'])) {
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
                foreach ($_SESSION['Product'] as $cart => $values) {
                    $idp = $values['product_id'];
                    $qntity = $values['quantity'];
                    $select = $config->query("select * from products where id='$idp'");
                    $array = mysqli_fetch_array($select);
                    $price = $array['price'] * $qntity;
                    $totalamnt += $price;
                    $cardamount = $totalamnt * 100;
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
                        <td class="text-center"><b>&dollar;<?= isset($totalamnt) ? $totalamnt : '0.00' ?></b> </td>
                    </tr>
                </table>
                <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container"></div>
                    </div>
                </div>
                <script src="https://www.paypal.com/sdk/js?client-id=AURryq0gyMoasRadzGZGm1u6eIadYNQJxXD7z5uE2BIoHEASjRxQLhBMu8XZUQaFP1g74Qo0tWXtO5vG&currency=USD" data-sdk-integration-source="button-factory"></script>
                <script>
                    var product_value = $("input[name='idp[]']").map(function() {
                        return $(this).val();
                    }).get();

                    function initPayPalButton() {
                        paypal.Buttons({
                            style: {
                                shape: 'rect',
                                color: 'gold',
                                layout: 'vertical',
                                label: 'paypal',

                            },

                            createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{
                                        "amount": {
                                            "currency_code": "USD",
                                            "value": <?= $totalamnt ?>
                                        }
                                    }]
                                });
                            },

                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                    const email_address = details.payer.email_address;
                                    const name = details.payer.name.given_name + " " + details.payer.name.surname;
                                    const payer_id = details.payer.payer_id;
                                    $.post("php/pay_submit.php", {
                                            email_address: email_address,
                                            name: name,
                                            payer_id: payer_id,
                                            product_id: product_value,
                                            amount: <?= $totalamnt ?>,
                                            cart_payment: "questions_ajax"
                                        })
                                        .done(function(data) {
                                            window.location.href = 'php/controller.php?order_payment=' + data;
                                        });
                                });
                            },

                            onError: function(err) {
                                console.log(err);
                            }
                        }).render('#paypal-button-container');
                    }
                    initPayPalButton();
                </script>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="py-4 option">
            <h5 class="text-center">Empty Cart</h5>
        </div>
    <?php
    }
    ?>
</div>
<script src="ajax.js"></script>