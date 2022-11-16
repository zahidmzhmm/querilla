<?php


class Product
{
    public function create($data, $file)
    {
        $config = new Config();
        $title = $config->convert_sql($data['title']);
        $price = $config->convert_sql($data['price']);
        $description = $config->convert_sql($data['description']);
        $big_des = $config->convert_sql($data['big_des']);
        $keywords = $config->convert_sql($data['keywords']);
        if (empty($file['img1']['name']) | empty($title) | empty($price) | empty($description) || empty($keywords)) {
            $_SESSION['alert'] = "All Field is Required";
            header("location:../admin/add_product.php");
        } else {
            if (!empty($file['product_file']['name'])) {
                $product_file = $this->image($file['product_file']);
            } else {
                $product_file = "";
            }
            $images = $this->image($file['img1']);
            $insert = $config->query("INSERT INTO `products`(`title`, `description`, `big_des`, `keywords`, `file`, `price`, `images`) VALUES ('$title','$description','$big_des','$keywords','$product_file','$price','$images')");
            if ($insert === true) {
                $_SESSION['alert'] = "Success";
                header("location:../admin/add_product.php");
            } else {
                $_SESSION['alert'] = "Something Problem";
                header("location:../admin/add_product.php");
            }
        }
    }

    public function image($file)
    {
        $file_tmp = $file['tmp_name'];
        $file_name = $file['name'];
        $file_exp = explode('.', $file_name);
        $file_ext = end($file_exp);
        $flname = rand(10001, 9999999) . time() . '.' . $file_ext;
        move_uploaded_file($file_tmp, '../uploads/' . $flname);
        return $flname;
    }

    public function update($data, $file)
    {
        $config = new Config();
        $title = $config->convert_sql($data['title']);
        $price = $config->convert_sql($data['price']);
        $description = $config->convert_sql($data['description']);
        $big_des = $config->convert_sql($data['big_des']);
        $keywords = $config->convert_sql($data['keywords']);
        $id = $data['id'];
        if (empty($title) | empty($price) | empty($description) || empty($keywords)) {
            $_SESSION['alert'] = "All Field is Required";
            header("location:../admin/edit_product.php?id=" . $data['id']);
        } else {
            if (!empty($file['product_file']['name'])) {
                $product_file = $this->image($file['product_file']);
            } else {
                $product_file = $data['old_pf'];
            }
            if (!empty($file['img1']['name'])) {
                $img1 = $this->image($file['img1']);
            } else {
                $img1 = $data['old_img'];
            }
            $sql = "UPDATE `products` SET `title`='$title',`description`='$description',`big_des`='$big_des',`keywords`='$keywords',`file`='$product_file',`price`='$price',`images`='$img1' WHERE id='$id'";
            $insert = $config->query($sql);
            if ($insert === true) {
                $_SESSION['alert'] = "Success";
                header("location:../admin/edit_product.php?id=" . $data['id']);
            } else {
                $_SESSION['alert'] = "Something Problem";
                header("location:../admin/edit_product.php?id=" . $data['id']);
            }
        }
    }
}