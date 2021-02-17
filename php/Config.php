<?php


class Config
{
    public function con()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db   = "querilla";
//        $host = "sdb-b.hosting.stackcp.net";
//        $user = "querilla-7164";
//        $pass = "9wn59bfj4e";
//        $db   = "querilla-3136394f2c";
        $con  = mysqli_connect($host,$user,$pass,$db);
        if ($con==true){
            return $con;
        }else{
            die("Database Connection Error ".$con);
        }
    }

    public function query($sql)
    {
        return mysqli_query($this->con(),$sql);
    }
}