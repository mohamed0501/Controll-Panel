<?php


class delete extends Awebarts
{
    private $tablename; 

    public function __construct($tablename)
    {
        $this->tablename = $tablename;
        $this->connectToDB();
    }

    function deleteRecoredById($id)
    {
        $id = intval($id);
      $query = "DELETE FROM $this->tablename WHERE `id` = '$id'" ;
     if(!$sql = mysql_query($query))
     {
        throw new Exception("Error :can not Deleted ");
     }
     else
     {
             return TRUE;
     } 
    }

}
?>