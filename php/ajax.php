<?php
include "controller.php";
if (isset($_POST['plus']) && isset($_POST['pid'])){
    $data = [
        "quantity"=>$_POST['plus']+1,
        "product_id"=>$_POST['pid']
    ];
    $plus = $cart->update_quantity($data);
    if ($plus==true){
        echo "Success";
    }else{
        echo "500";
    }
}elseif (isset($_POST['min']) && isset($_POST['pid'])){
    $qnt = $_POST['min'];
    if ($qnt>1){
        $data = [
            "quantity"=>($_POST['min']-1),
            "product_id"=>$_POST['pid']
        ];
        $min = $cart->update_quantity($data);
        if ($min==true){
            echo "Success";
        }else{
            echo "500";
        }
    }else{
        echo "500";
    }
}elseif (isset($_POST['clear_all_cart'])){
    $unset = $cart->delete_cart();
    echo "Success";
}elseif (isset($_POST['remove'])){
    $data = [
        "product_id"=>$_POST['remove']
    ];
    $remove = $cart->remove($data);
    if ($remove ==true){
        echo "Success";
    }else{
        echo "500";
    }
}else{
    echo "Error";
}