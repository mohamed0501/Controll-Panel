<?php 



class login{
    private $username;
    private $password;
    private $cxm;

    function __construct($username, $password)
    {

        $this->setData($username, $password);

        $this->connectToDB ();
        $this->getData ();
    }

    //set Data from login form
     private function setData($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    private function connectToDB()
    {
       // include "../models/DB.php";
        $vars = "../includes/vars.php"; 
        $this->cxm = new Database($vars); 
    }
     function getData()
    {
        $query = "SELECT * FROM `users` WHERE `username` = '$this->username' AND
         `password` = '$this->password'";

        $sql = mysql_query($query);

        if(mysql_num_rows($sql)>0)
        {
            return TRUE;
        }
        else
        {
            throw new Exception("Username OR Password is Invalide Please Try again");
        }
    }

    function close()
    {
        $this->cxm = close(); 
    }

}


?>