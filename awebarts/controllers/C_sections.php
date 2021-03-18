<h3> sections <h3>

    <h2> <a href = "?page=sections&&action=add"> Add New Section </a></h2>

<?php


include    "../includes/init.php";
include    "../includes/autoloader.php";

if($_POST OR @$_GET['action'])
{
     if(isset($_GET['action']) && $_GET['action'] == 'add')
     {
         
         include "Views/addSection.php";
     }
     if(isset($_POST['submit']) && $_POST['submit'] == "Add")
     {
        
// id,sectionName,sectionStaus,sectionLocation,sectionDescr ,sectionDate,username -->
       

       $newSeData ['sectionName']      = $_POST['sectionName'];
       $newSeData ['sectionStaus']     = $_POST['sectionStaus'];
       $newSeData ['sectionLocation']  = $_POST['sectionLocation'];
       $newSeData ['sectionDescr']     = $_POST['sectionDescr'];
       $newSeData ['username']         = $_SESSION['username'];

       $tableName = "sections";

       try 
       {
       // include  "models/Awebarts.php";
        //include  "models/Add.php";

        $newSEC = new Add ($newSeData, $tableName);
        if ($newSEC)
        {
          echo '<script type = "text/javascript">alert("The new section was Add"); history.back();</script>';
        }
       }
       catch (Exception $exc)
    {
        echo $exc->getMessage();
    }
     }

     // Delete recored

     if(isset($_GET['action']) && $_GET['action'] == 'delete')
     {
         try{
       // include  "models/Awebarts.php";
       // include  "models/Delete.php";
        $tablename = "sections";
        $id = $_GET['id'];
        $delSec = new delete($tablename);
        $delSec->deleteRecoredById($id);

     }
    
    catch (Exception $exc)
    {
        echo $exc->getMessage();
    }

}

//Edit Recored
if(isset($_GET['action']) && $_GET['action'] == 'Edit')
{
    $id = $_GET['id'];
    $tablename = "sections";
    
   // include  "models/Awebarts.php";
    //include  "models/Display.php";
    
    $secEdit = new Display($tablename);

    $editStcData= $secEdit->getRecoredByID($id);

   
    include  "views/editsection.php";
}

// Edit Action when press edit

if(isset($_POST['submit']) && $_POST['submit'] == "Edit")

// id,sectionName,sectionStaus,sectionLocation,sectionDescr ,sectionDate,username -->

     {
        $updataSeData ['sectionName']      = $_POST['sectionName'];
        $updataSeData ['sectionStaus']     = $_POST['sectionStaus'];
        $updataSeData ['sectionLocation']  = $_POST['sectionLocation'];
        $updataSeData ['sectionLocation']  = $_POST['sectionLocation'];
        $updataSeData ['sectionDescr']     = $_POST['sectionDescr'];
     //   $updataSeData ['username']         = $_SESSION['username'];

     try{
        
       // include  "models/update.php";
        $tablename = "sections";
        $secUpdata = new Update( $updataSeData,$tablename);
        $updateSec = $secUpdata->editdata($id);
       if($updateSec)
       {
        echo '<script type = "text/javascript">alert("The new section was Update"); history.back();</script>';

       }
    

     }
     catch (Exception $exc)
     {
         echo $exc->getMessage();
     }
       
     }
    }   
else
{
    //include  "models/Awebarts.php";
    //include  "models/Display.php";
    $tableName = "sections";
    $secDataDisplay = new Display($tableName);

     $diplayData= $secDataDisplay->getAllData();

    

    include    "Views/sections.php";
}
?>