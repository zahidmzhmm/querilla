<?php


class Config
{
    public function con()
    {
         $host = "localhost";
         $user = "root";
         $pass = "";
         $db   = "querilla";
//        $host = "localhost";
//        $user = "nakurubu_querill";
//        $pass = "9wn59bfj4e";
//        $db   = "nakurubu_querilla";
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
    public function convert_sql($string)
	{
		return mysqli_real_escape_string($this->con(),$string);
	}
}