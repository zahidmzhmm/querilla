<?php
include "controller.php";
include "pay_config.php";
if (isset($_POST['stripeToken'])){
    $token = $_POST['stripeToken'];
    $product_id = $_POST['product_id'];
    $totalamnt = 0;
    foreach ($_SESSION['Product'] as $cart=>$values) {
        $idp = $values['product_id'];
        $qntity = $values['quantity'];
        $select = $config->query("select * from products where id='$idp'");
        $array = mysqli_fetch_array($select);
        $price = $array['price'] * $qntity;
        $totalamnt += $price;
        $cardamount = $totalamnt*100;
        global $totalamnt;
        global $cardamount;
    }
    if (!empty($cardamount)){
        $data = \Stripe\Charge::create([
            "amount"=>$cardamount,
            "currency"=>"usd",
            "description"=>"Website Amount",
            "source"=>$token
        ]);
        $balanceTrx  = $data['balance_transaction'];
        $stripAmount = $data['amount'];
        $billing_details = $data["billing_details"]["name"];
        $order_id  = rand(1000,99999).time();
        $status = $data["paid"];
        if ($data["paid"]===true){
            $checking = mysqli_num_rows($config->query("SELECT * FROM `users` WHERE email='$billing_details'"));
            if ($checking===1){
                $config->query("INSERT INTO `orders`(`order_id` ,`balance_transaction`, `amount`, `email`, `status`) VALUES ('$order_id','$balanceTrx','$totalamnt','$billing_details','$status')");
                $_SESSION['message']="Paid Success";
                $_SESSION['User']=$billing_details;
                header("location:controller.php?order_payment=$order_id");
            }else{
                $config->query("INSERT INTO `users`(`email`) VALUES ('$billing_details')");
                $config->query("INSERT INTO `orders`(`order_id` ,`balance_transaction`, `amount`, `email`, `status`) VALUES ('$order_id','$balanceTrx','$totalamnt','$billing_details','$status')");
                $_SESSION['message']="Paid Success";
                $_SESSION['User']=$billing_details;
                $_SESSION['Step']=$billing_details;
                header("location:controller.php?order_payment=$order_id");
            }
        }else{
            $config->query("INSERT INTO `orders`(`order_id` ,`balance_transaction`, `amount`, `email`, `status`) VALUES ('$order_id','$balanceTrx','$totalamnt','$billing_details','$status')");
            $_SESSION['error']="Sorry Something problem";
            header("location:../cart.php?error");
        }
    }else{
        $_SESSION['error']="Sorry Something problem";
        header("location:../cart.php?error");
    }
}