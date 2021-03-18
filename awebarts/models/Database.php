<?php


class Database {
    private $host;
    private $user;
    private $password;
    private $database;



    function __construct($filename){
        if(is_file($filename)) include $filename;
        else throw new Exception("Error : Can not connected");

        $this->host =$host;
        $this->user =$user;
        $this->password =$password;
        $this->database =$database;
        
        $this->connecte();
    }
    private function connecte(){
        if(!mysql_connect($this->host,$this->user,$this->password))
            throw new Exception("Error : Can not connected to server");
    
      if (!mysql_select_db($this->database))
          throw new Exception("Error : No database selected");
      
    }
    function close(){
        mysql_close();
    }

}

?>