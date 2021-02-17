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
                <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div style="margin-bottom: 1.25rem;">
                            <p></p>
                            <select id="item-options"><option value="" price="">-  USD</option><option value="" price=""> -  USD</option></select>
                            <select style="visibility: hidden" id="quantitySelect"></select>
                        </div>
                        <div id="paypal-button-container"></div>
                    </div>
                </div>
                <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
                <script>
                    function initPayPalButton() {
                        var shipping = 0;
                        var itemOptions = document.querySelector("#smart-button-container #item-options");
                        var quantity = parseInt();
                        var quantitySelect = document.querySelector("#smart-button-container #quantitySelect");
                        if (!isNaN(quantity)) {
                            quantitySelect.style.visibility = "visible";
                        }
                        var orderDescription = '';
                        if(orderDescription === '') {
                            orderDescription = 'Item';
                        }
                        paypal.Buttons({
                            style: {
                                shape: 'rect',
                                color: 'gold',
                                layout: 'vertical',
                                label: 'paypal',

                            },
                            createOrder: function(data, actions) {
                                var selectedItemDescription = itemOptions.options[itemOptions.selectedIndex].value;
                                var selectedItemPrice = parseFloat(itemOptions.options[itemOptions.selectedIndex].getAttribute("price"));
                                var tax = (0 === 0) ?0 : (selectedItemPrice * (parseFloat(0)/100));
                                if(quantitySelect.options.length> 0) {
                                    quantity = parseInt(quantitySelect.options[quantitySelect.selectedIndex].value);
                                } else {
                                    quantity = 1;
                                }

                                tax *= quantity;
                                tax = Math.round(tax * 100) / 100;
                                var priceTotal = quantity * selectedItemPrice + parseFloat(shipping) + tax;
                                priceTotal = Math.round(priceTotal * 100) / 100;
                                var itemTotalValue = Math.round((selectedItemPrice * quantity) * 100) / 100;

                                return actions.order.create({
                                    purchase_units: [{
                                        description: orderDescription,
                                        amount: {
                                            currency_code: 'USD',
                                            value: priceTotal,
                                            breakdown: {
                                                item_total: {
                                                    currency_code: 'USD',
                                                    value: itemTotalValue,
                                                },
                                                shipping: {
                                                    currency_code: 'USD',
                                                    value: shipping,
                                                },
                                                tax_total: {
                                                    currency_code: 'USD',
                                                    value: tax,
                                                }
                                            }
                                        },
                                        items: [{
                                            name: selectedItemDescription,
                                            unit_amount: {
                                                currency_code: 'USD',
                                                value: selectedItemPrice,
                                            },
                                            quantity: quantity
                                        }]
                                    }]
                                });
                            },
                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
                                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                                });
                            },
                            onError: function(err) {
                                console.log(err);
                            },
                        }).render('#paypal-button-container');
                    }
                    initPayPalButton();
                </script>
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