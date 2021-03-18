<h3> Pages<h3>



<h2> <a href = "?page=pages&&action=add"> Add New Page </a></h2>

<?php

include "../includes/init.php";
include "../includes/autoloader.php";
if($_POST OR @$_GET['action'])
{
   if(isset($_GET['action']) && $_GET['action'] == "add") 
   {
   
    if(isset($_POST['submit']) && $_POST['submit'] == "Add")
    {
     /*
     `id`, `page_name`, `page_content`, `page_status`,
      `page_visits`, `sectionId`, `page_images`, `page_data`createdBy
 */
        $newPage['page_name']    = $_POST['page_name'];
        $newPage['page_content'] = $_POST['page_content'];
        $newPage['page_status']  = $_POST['page_status'];
        $newPage['page_visits']  = 0;
        $newPage['sectionId']    = $_POST['sectionId'];
         
        $newPage['page_date']    = $_POST['page_date'];
        $newPage['createdBy']    = $_SESSION['username'];
 

       // $_FILES ['page_image'];
        if(!empty($_FILES ['page_images']['name'][0]))
        {
        try{
              //  include   "models/Upload.php";
                $file = $_FILES['page_images'];
                $allowedExt = array('doc','docx','txt','jpg','png','pdf','jpeg');
                $uploadDirector = 'Uploads/';
                $maxSize = 4000000;
                $upload = new Upload ($file,$allowedExt,$maxSize,$uploadDirector);
                $upload->uploadFile();
                $newPage['page_images'] = $uploadDirector. $upload->getURL();
            }
            catch (Exception $exc)
            {
                echo $exc->getMessage();
            }
        }
        else{
            $newPage['page_images'] = "images/logo.png";

        }
          
        $tablename = "pages" ;
        try 
        {
       //  include  "models/Awebarts.php";
       //  include  "models/Add.php";
 
         $pageNew = new Add($newPage,$tablename);
         if ( $pageNew)
         {
           echo '<script type = "text/javascript">alert("The new Page was Created"); history.back();</script>';
         }
        }
        catch (Exception $exc)
     {
         echo $exc->getMessage();
     }
 
    }
    else
    {
     try{
         //$pageDiplayData
      //   include  "models/Awebarts.php";
       //  include  "models/Display.php";
         $tablename = "sections";
 
         $disSection = new display($tablename);
         $pageDiplayData =  $disSection->getAllData();
         
     }
     catch (Exception $exc)
 {
     echo $exc->getMessage();
 }
     
   }
   include  "Views/addNewPage.php";
    }


     // Delete recored

     if(isset($_GET['action']) && $_GET['action'] == 'delete')
     {
         try{
     //   include  "models/Awebarts.php";
     //   include  "models/Delete.php";
        $tablename = "pages";
        $id = $_GET['id'];
        $delSec = new delete($tablename);
        $delSec->deleteRecoredById($id);

     }
    
    catch (Exception $exc)
    {
        echo $exc->getMessage();
    }

}
//edit recored
if(isset($_GET['action']) && $_GET['action'] == 'edit')
{
    $id = $_GET['id'];
    $tablename = "pages";
    
  //  include  "models/Awebarts.php";
  //  include  "models/Display.php";
    
    $pageEdit = new Display($tablename);

    $editPageData= $pageEdit->getRecoredByID($id);

    $tablename = "sections";
    $disSection = new display($tablename);
    $pageDiplayData =  $disSection->getAllData();
  
    include "Views/editPage.php";

    if(isset($_POST['submit']) && $_POST['submit'] == "edit")
    {
     /*
     `id`, `page_name`, `page_content`, `page_status`,
      `page_visits`, `sectionId`, `page_images`, `page_data`createdBy
 */
        $editPage['page_name']    = $_POST['page_name'];
        $editPage['page_content'] = $_POST['page_content'];
        $editPage['page_status']  = $_POST['page_status'];
        $editPage['sectionId']    = $_POST['sectionId'];
       // $editPage['page_images']  = 'images/logo.png';
        $editPage['page_date']    = $_POST['page_date'];
        $editPage['createdBy']    = $_SESSION['username'];

        if(!empty($_FILES ['page_images']['name'][0]))
        {
          
        try{
              //  include   "models/Upload.php";
                $file = $_FILES['page_images'];
                $allowedExt = array('doc','docx','txt','jpg','png','pdf','jpeg');
                $uploadDirector = 'Uploads/';
                $maxSize = 4000000;
                $upload = new Upload ($file,$allowedExt,$maxSize,$uploadDirector);
                $upload->uploadFile();
                $editPage['page_images'] = $uploadDirector. $upload->getURL();
            }
            catch (Exception $exc)
            {
                echo $exc->getMessage();
            }
        }
        else{
            $editPage['page_images'] = "images/logo.png";

        }
 
          
        $tablename = "pages" ;
        $id = $_GET['id'];

         
        try{
        
      //      include  "models/update.php";
           
            $pageUpdata = new Update( $editPage,$tablename);
           
            $updatePage = $pageUpdata->editdata($id);
            echo "ok";
           if($updatePage)
           {
            echo '<script type = "text/javascript">alert("The new Page was Update"); history.back();</script>';
    
           }
        
    
         }
         catch (Exception $exc)
         {
             echo $exc->getMessage();
         }
    }
}
 }



else
{
    
  //  include  "models/Awebarts.php";
  //  include  "models/Display.php";
    $tableName = "pages";
    $pageDataDisplay = new Display($tableName);

     $diplayDataPage=  $pageDataDisplay->getAllData();
     for ($i = 0; $i<count($diplayDataPage); $i++)
     {
     $id = $diplayDataPage[$i]{'sectionId'};
     $Display = new Display('sections');
     $sectionNames[$i] = $Display->getRecoredByID($id);
     }



include  "Views/pages.php";
}
?>