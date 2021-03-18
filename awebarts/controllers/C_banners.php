

<?php

include "../includes/init.php";
include "../includes/autoloader.php";

// id`, `BannerName`, `BannerUrl`, `status`, `createdBy

if($_POST OR @$_GET['action'])
{

// delet banners 
    if(isset($_GET['action']) && $_GET['action'] == 'delete')
    {
        try{

     //  include  "models/Awebarts.php";
       $tablename = "banners";
       $id = $_GET['id'];
       
        // get banner url buy use id 
      //  include   "models/Display.php";
        $getUrl = new Display($tablename);
        $banner = $getUrl->getRecoredByID($id);

// delete exist file in PC
       $deleteFiles[] = $banner['BannerUrl'];
     //  include   "models/DeleteFiles.php";
       $delete = new DeleteFiles($deleteFiles);
       if($delete == TRUE)
       echo "File was deleted";


       // delete from database table banners
     //  include  "models/Delete.php";
      
       $delSec = new delete($tablename);
       $delSec->deleteRecoredById($id);

      

    }
    catch (Exception $exc)
    {
        echo $exc->getMessage();
    }

    }

        if(isset($_POST['submit']) && $_POST['submit'] == 'Upload')
        {
        if (isset($_FILES))
        {
        try {
        //    include   "models/Upload.php";


            $file = $_FILES['image'];
            
            $allowedExt = array('doc','docx','txt','jpg','png','pdf','jpeg');
            $maxSize = 4000000;
            $uploadDirector = 'Uploads/';
            $upload = new Upload ($file,$allowedExt,$maxSize,$uploadDirector);
            $upload->uploadFile();
            $filenames = $upload->getFileNames();
            
          //  var_dump ($file);

         /* foreach ($file as $fil){
            var_dump ($fil);
            echo '<br>';
          }*/
        //  include 'models/Awebarts.php';
        //  include   "models/Add.php";
          $tablename = 'banners';

          for($i =0 ; $i<count($filenames); $i++)
          {
          $fileNO{$i}['BannerName'] = $filenames[$i];
          $fileNO{$i}['BannerUrl'] = $uploadDirector.$filenames[$i];
          $fileNO{$i}['status'] = 1;
          $fileNO{$i}['createdBy'] = $_SESSION['username'];
          $fileNO{$i}['type'] = $_POST['type'] ;  
          $cxn = new Add($fileNO{$i}, $tablename);
         
            
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
    // add new banner
    include "Views/addNewFile.php";

    //display exist banners
   // include  "models/Awebarts.php";
   // include  "models/Display.php";
    $tableName = "banners";
    $bannerDataDisplay = new Display($tableName);

     $diplayBanner= $bannerDataDisplay->getAllData();

    include    'Views/displayBanners.php';
}
?>