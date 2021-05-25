<?php
include "controller.php";
if (isset($_POST['cart_payment'])){
    $request = $_POST;
    $email_address = $request['email_address'];
    $name = $request['name'];
    $payer_id = $request['payer_id'];
    $order_data = implode(',',$request['product_id']);
    $totalamnt = $request['amount'];
    $order_id  = rand(1000,99999).time();
    $checking = mysqli_num_rows($config->query("SELECT * FROM `users` WHERE email='$email_address'"));
    if ($checking===1){
        $config->query("INSERT INTO `orders`(`order_id`, `order_data` ,`balance_transaction`, `amount`, `email`, `status`) VALUES ('$order_id','$order_data','$payer_id','$totalamnt','$email_address','201')");
        $_SESSION['message']="Paid Success";
        $_SESSION['User']=$email_address;
        echo $order_id;
    }else{
        $config->query("INSERT INTO `users`(`email`) VALUES ('$email_address')");
        $config->query("INSERT INTO `orders`(`order_id`, `order_data` ,`balance_transaction`, `amount`, `email`, `status`) VALUES ('$order_id','$order_data','$payer_id','$totalamnt','$email_address','201')");
        $_SESSION['message']="Paid Success";
        $_SESSION['User']=$email_address;
        $_SESSION['Step']=$email_address;
        echo $order_id;
    }
}