<?php


class Cart
{
    public function addToCart($data)
    {
        $product_id = $data['product_id'];
        $quantity = $data['quantity'];
        if (isset($_SESSION['Product'])){
            $item_array_id = array_column($_SESSION['Product'],'product_id');
            if (!in_array($data['product_id'],$item_array_id)) {
                $count = count($_SESSION['Product']);
                $item_array = [
                    "product_id" => $product_id,
                    "quantity" => $quantity
                ];
                $_SESSION['Product'][$count] = $item_array;
                return true;
            }else{
                return false;
            }
        }
        else {
            $array = [
                "product_id" => $product_id,
                "quantity" => $quantity
            ];
            $_SESSION['Product'][0] = $array;
            return true;
        }
    }
    public function update_quantity($data)
    {
        $product_id = $data['product_id'];
        $quantity = $data['quantity'];
        foreach ($_SESSION['Product'] as $keys=>$values){
            $main_pid = $_SESSION['Product'][$keys]['product_id'];
            if ($main_pid==$product_id){
                $_SESSION['Product'][$keys]["quantity"]=$quantity;
                return true;
            }
        }
    }
    public function remove($data)
    {
        $product_id = $data['product_id'];
        foreach ($_SESSION['Product'] as $keys=>$values){
            if ($values['product_id']==$product_id){
                unset($_SESSION['Product'][$keys]);
                return true;
            }
        }
    }

    public function delete_cart()
    {
        unset($_SESSION['Product']);
        return true;
    }
}