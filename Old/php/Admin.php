<?php


class Admin
{
    public function login($data)
    {
        $config   = new Config();
        $username = $data['username'];
        $password = $data['password'];
        $checking = mysqli_num_rows($config->query("SELECT * FROM `admin` WHERE `username`like'$username'and`password`like'$password'"));
        if ($checking===1){
            $_SESSION['Admin']=$username;
            header("location:../admin/index.php");
        }else{
            $_SESSION['danger']="Username or Password Wrong";
            header("location:../admin/login.php");
        }
    }

    public function contact($data)
    {
        $config = new Config();
        $email = $data['email'];
        $subject = $data['subject'];
        $message = $data['message'];
        if (empty($email) | empty($subject) | empty($message)){
            $_SESSION['msg']="All Field is Required";
            header("location:../contact.php");
        }else{
            $insert = $config->query("INSERT INTO `contact`(`email`, `subject`, `message`) VALUES ('$email','$subject','$message')");
            if ($insert===true){
                $_SESSION['msg']="Success";
                header("location:../contact.php");
            }else{
                $_SESSION['msg']="Something";
                header("location:../contact.php");
            }
        }
    }
}