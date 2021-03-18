<?php
/*
insert data from form in main settings into database (Update)
*/

class add extends Awebarts {

    private $data;

    private $tablename;

   public function __construct($data,$tablename)
   {
       if(is_array($data))
       {
        $this->data      = $data;
        $this->tablename = $tablename;
       }
       else
       {
        throw new Exception("Error : data must be in an array");
       }
        // connect to database
       $this->connectToDB();

       //insert data into table mainsettings 
       $this->AddData($this->data);
       $this->close();

   }

   //insert data into table mainsettings 
   function AddData($data)
   {
    foreach($data as $key => $value)
    {
        $keys[]   = $key;
        $values[] = $value;
    }
     $tb1keys    = implode($keys,",");
     $datavalues = '"'.implode($values,'","'). '"';

    $query = "INSERT INTO $this->tablename ( $tb1keys) VALUES ($datavalues)";

    if($sql = mysql_query($query)) 
    {   
        return TRUE;
    }
    else 
    {
        throw new Exception("Error :can not execute  query ");
        return FALSE;

    }
    
    }

}

?>