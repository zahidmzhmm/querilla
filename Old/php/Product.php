<?php


class Product
{
    public function create($data, $file)
    {
        $config= new Config();
        $title = $data['title'];
        $price = $data['price'];
        $description = $data['description'];
        $big_des = $data['big_des'];
        if (empty($file['img1']['name']) | empty($title) | empty($price) | empty($description)){
            $_SESSION['alert']="All Field is Required";
            header("location:../admin/add_product.php");
        }else{
            if (!empty($file['product_file']['name'])){
                $product_file = $this->image($file['product_file']);
            }else{
                $product_file = "";
            }
            $images = $this->image($file['img1']);
            $insert = $config->query("INSERT INTO `products`(`title`, `description`, `big_des`, `file`, `price`, `images`) VALUES (\"$title\",\"$description\",\"$big_des\",'$product_file','$price','$images')");
            if ($insert===true){
                $_SESSION['alert']="Success";
                header("location:../admin/add_product.php");
            }else{
                $_SESSION['alert']="Something Problem";
                header("location:../admin/add_product.php");
            }
        }
    }

    public function image($file)
    {
        $file_tmp = $file['tmp_name'];
        $file_name= $file['name'];
        $file_exp = explode('.',$file_name);
        $file_ext = end($file_exp);
        $flname   = rand(10001,9999999).time().'.'.$file_ext;
        move_uploaded_file($file_tmp,'../uploads/'.$flname);
        return $flname;
    }
}