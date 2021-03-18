<?php 

class register{
    private $name;
    private $username;
    private $email;
    private $password;
    private $cxm; //database object

    function __construct($data)
    {
        if(is_array($data))
        {
        $this->setData($data);
        }
        else{
            throw new Exception("must be array");
        }
        //connect to database
        $this->connectToDB ();
        //insert data from register form
        $this->registerUser();
   }
    private function setData($data)
    {
        $this-> name     = $data['name'];
        $this-> email    = $data['email'];
        $this-> username = $data['username'];
        $this-> password = $data['password'];
    }
    private function connectToDB()
    {
        //include "models/DB.php";
        $vars ="includes/vars.php"; 
        $this->cxm = new Database($vars); 
    }

    function registerUser()
    {
        $query = "INSERT INTO `users`(`id`, `name`, `username`, `password`, `email`)
         VALUES ('',' $this->name','$this->username','$this->password','$this->email')";

         $sql = mysql_query($query);
         if($sql)   echo "Registeration is Sucessfully";
         else       throw new Exception("Registeration is Failed");
    }
    function close()
    {
        $this->cxm = close();
    }
}
?>