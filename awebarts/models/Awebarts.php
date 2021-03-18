<?php

/*
main class use for main function
*/
class Awebarts
{
 private $cxm;
    
    function connectToDB()
    {
       //require_once MODELS."DB.php";
        //include 'DB.php';
        $vars ="includes/vars.php"; 
        $this->cxm = new Database ($vars); 
    }
    
    function close()
    {
        $this->cxm->close(); 
    }



}
?>