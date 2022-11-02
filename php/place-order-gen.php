<?php
require dirname(__DIR__) . '/vendor/autoload.php';
include "controller.php";
if (isset($_GET['payment_gen'])) {
    $lists = $_SESSION['Product'];
    $products = [];
    $total = 0;
    if (count($lists) > 0) {
        for ($i = 0; $i < count($lists); $i++) {
            $product_id = $lists[$i]['product_id'];
            $p_query = $config->query("select id,title,description,price from products where id='$product_id'");
            $product = mysqli_fetch_assoc($p_query);
            $products[$i]['product'] = $product;
            $products[$i]['quantity'] = $lists[$i]['quantity'];
            $products[$i]['sub_total'] = $product['price'] * $lists[$i]['quantity'];
            $total += $product['price'] * $lists[$i]['quantity'];
        }
        $products['total'] = $total;
        echo '<pre>';
        print_r($products);
        exit;
    }
}