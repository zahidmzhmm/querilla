<?php
if (!isset($_SESSION)) {
    session_start();
}
include "Config.php";
$config = new Config();
$config->con();
include "Admin.php";
include "Product.php";
include "Cart.php";
include "User.php";
$admin = new Admin();
$product = new Product();
$cart = new Cart();
$user = new User();
# Form Request Start
if (isset($_POST['login_admin'])) {
    $data = $_POST;
    $admin->login($data);
} elseif (isset($_GET['addtocart'])) {
    $product_id = $_GET['addtocart'];
    $data = [
        'product_id' => $product_id,
        'quantity' => 1
    ];
    $add = $cart->addToCart($data);
    if ($add === true) {
        $_SESSION['return'] = "Success";
        header("location:../shop.php");
    } else {
        $_SESSION['return'] = "Already Added";
        header("location:../shop.php");
    }
} elseif (isset($_GET['order_payment'])) {
    unset($_SESSION['Product']);
    $orderId = $_GET['order_payment'];
    header("location:../myorders.php");
} elseif (isset($_POST['send_message'])) {
    $admin->contact($_POST);
} elseif (isset($_POST['save_product'])) {
    $product->create($_POST, $_FILES);
} elseif (isset($_POST['set_user'])) {
    $email = $_SESSION['Step'];
    $password = $_POST['set_password'];
    $data = [
        'email' => $email,
        'password' => $password
    ];
    $user->setpassword($data);
} elseif (isset($_POST['login_user'])) {
    $user->login($_POST);
} elseif (isset($_POST['register_user'])) {
    $user->register($_POST);
} elseif (isset($_POST['add_to_cart2'])) {
    $quantity = $_POST['quantity'];
    $product_id = $_POST['product_id'];
    $data = [
        'product_id' => $product_id,
        'quantity' => $quantity
    ];
    $add = $cart->addToCart($data);
    if ($add == true) {
        $_SESSION['return'] = "Success";
        header("location:../product_details.php?product_id=$product_id");
    } else {
        $_SESSION['return'] = "Already Added";
        header("location:../product_details.php?product_id=$product_id");
    }
}
if (isset($_POST['update_product'])) {
    $product->update($_POST, $_FILES);
}