<?php
/*
display to get requierd data from database 
*/

class Display extends Awebarts {

    private $tablename;
    private  $recdata;

    public function __construct($tablename)
    {
        $this->tablename = $tablename;

          // connect to database
       $this->connectToDB();

       //get the last row in main settings in database
       
     

    }
function getAllData()
{
    $query = "SELECT * FROM $this->tablename ORDER BY `id` DESC ";

    if (!$sql = mysql_query($query))
    {
     throw new Exception("Error :can not execute  query ");
    }
    else 
    {
        $num = mysql_num_rows($sql);
        if($num > 0)
        {
        for($i = 0; $i<$num; $i++)
        {
            $data [$i]= mysql_fetch_array($sql); 
        }
    }
    }
    return @$data;
}


    function getLastRecoredDESC()
    {
        $query = "SELECT * FROM $this->tablename ORDER BY `id` DESC LIMIT 1";

       if (!$sql = mysql_query($query))
       {
        throw new Exception("Error :can not execute  query ");
       }
       else 
       {
           $num = mysql_num_rows($sql);
           while($num >0)
           {
            $data = mysql_fetch_array($sql);
            $num--;
           }
       }
       return $data;
    }
    function getRecoredByID($id){

      $id = intval($id);
    $query = "SELECT * FROM $this->tablename WHERE `id` = $id";

    if (!$sql = mysql_query($query))
    {
     throw new Exception("Error :can not execute  query ");
    }
    else 
       {
           $num = mysql_num_rows($sql);
           while($num >0)
           {
            $this->recdata = mysql_fetch_array($sql);
            $num--;
           }
       }
       return $this->recdata;
    }



    function getAllDataByID($id, $column = 'id')
    {

        $id = intval($id);
      $query = "SELECT * FROM $this->tablename WHERE `$column` = $id ORDER BY `id` ASC";
  
      if (!$sql = mysql_query($query))
      {
       throw new Exception("Error :can not execute  query ");
      }
      else 
         {
            $num = mysql_num_rows($sql);
            if($num > 0)
            {
            for($i = 0; $i<$num; $i++)
            {
                $data [$i]= mysql_fetch_array($sql); 
                
            }
        }
        else
        {
            echo 'NO Resault';
            return FALSE;
        }
        }
         return $data;
      }

      function getAllDataByStautsType($type)
    {

       
      $query = "SELECT * FROM $this->tablename WHERE `status` = 1 AND `type`='$type' ORDER BY `id` DESC";
  
      if (!$sql = mysql_query($query))
      {
       throw new Exception("Error :can not execute  query ");
      }
      else 
         {
            $num = mysql_num_rows($sql);
            if($num > 0)
            {
            for($i = 0; $i<$num; $i++)
            {
                $data [$i]= mysql_fetch_array($sql); 
                
            }
        }
        }
         return $data;
      }
    }


?>