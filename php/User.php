<?php


class User
{
    public function setpassword($data)
    {
        $config = new Config();
        $email  = $data['email'];
        $encrypt= sha1(md5($data['password']));
        $update = $config->query("UPDATE `users` SET `password`='$encrypt' WHERE email='$email'");
        if ($update==true){
            unset($_SESSION['Step']);
            header("location:../myorders.php");
        }else{
            header("location:../myorders.php");
        }
    }
    public function login($data)
    {
        $config = new Config();
        $email = $data['email'];
        $password = $data['password'];
        $encrypt= sha1(md5($password));
        if (empty($email) | empty($password)){
            $_SESSION['alert']="All Field is Required";
            header("location:../login.php");
        }else{
            $checking = mysqli_num_rows($config->query("SELECT * FROM `users` WHERE `email`like'$email'and`password`like'$encrypt'"));
            if ($checking===1){
                $_SESSION['User']=$email;
                header("location:../myorders.php");
            }else{
                $_SESSION['alert']="Email or Password Wrong";
                header("location:../login.php");
            }
        }
    }
    public function register($data)
    {
        $config = new Config();
        $email = $data['email'];
        $password = $data['password'];
        $encrypt= sha1(md5($password));
        if (empty($email) | empty($password)){
            $_SESSION['alert']="All Field is Required";
            header("location:../register.php");
        }else{
            $insert = $config->query("INSERT INTO `users`(`email`, `password`) VALUES ('$email','$encrypt')");
            if ($insert==true){
                $_SESSION['alert']="Success";
                header("location:../login.php");
            }else{
                $_SESSION['alert']="Error";
                header("location:../register.php");
            }
        }
    }
}