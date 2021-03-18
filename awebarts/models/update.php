<?php

// update data

class Update extends Awebarts {

    private $tablename;
    private $data;

    public function __construct($data, $tablename)
    {

        if(is_array($data))
        {
            $this->data = $data;
        }
        $this->tablename = $tablename;

          // connect to database
       

    }

    function editdata($id)
    {

        $id = intval($id);
        $query = "UPDATE  $this->tablename SET";
        
        foreach ($this->data as $key => $value){
            $query .= "`".$key."` = '".$value."', ";

        }
        $pat = "****";
        $query .= $pat;
        $query = str_replace(", ".$pat ," " , $query);

        $query .= " WHERE `id` = $id";
       
        if(!$sql = mysql_query($query)){
            throw new Exception("Error :can not execute  query ");
        }
        else
        {
            return TRUE;
        }
    }
}

?>