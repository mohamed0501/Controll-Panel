<?php
include "../includes/init.php";
include "../includes/autoloader.php";



if($_POST)
{
if(isset($_POST["submit"])AND $_POST["submit"] == "Login")
    {

     $username = $_POST['username'];
     $password =  $_POST['password'];


     try
     {
  //validator => $_POST # $rules
         $valid = new validator();

         $rules = array("username"=>"checkString" );
         if($valid->validate($_POST,$rules))
         
         $username = $_POST['username'];
         $password = $_POST['password'];  

         
                     
     }
     catch (Exception $exc)
        {
            echo $exc->getMessage();
            die(); 
        }

    

try
 {
    //include "../models/login.php";

    $login = new login($username,$password); 


    if($login ==TRUE )
    {
        session_start();
        $_SESSION["username"] = $username;
        header("Location:index.php");

    }
}
catch (Exception $exc)
        {
            echo $exc->getMessage();
        }
 }

 // registeration

 if(isset($_POST["submit"])AND $_POST["submit"] == "Register")
 {
     try
     {
  //validator => $_POST # $rules
         $valid = new validator();

         $data['name']     = $_POST['name'];
        $data['username'] = $_POST['username'];
        $data['email']    = $valid->checkSanitze($_POST['email'],'email');
        $data['password'] = $_POST['password'];
         $rules = array(
         "name"=>"checkRequired|checkString",
         "username"=>"checkRequired|checkString",
         "email"=>"checkRequired|checkEmail",
         "password"=>"checkRequired"
         );
        if(!$valid->validate($data, $rules))
    
       die();       
     }
     catch (Exception $exc)
        {
            echo $exc->getMessage();
            die(); 
        }

    


  
  try 
  {
    //include "../models/register.php";
    new register($data);
 }
 catch (Exception $exc)
        {
            echo $exc->getMessage();
        }

    }     
}

else{
    include "./Views/login.php";
}

?>