<h3>Libarary<h3>




<?php

include "../includes/init.php";
include "../includes/autoloader.php";

if ($_POST)
{
    if(isset($_POST['submit']) && $_POST['submit'] == 'Upload')
    {
    if (isset($_FILES))
  {
    try {
      //  include   "models/Upload.php";


        $file = $_FILES['image'];
        $allowedExt = array('doc','docx','txt','jpg','png','pdf','jpeg');
        $maxSize = 4000000;
        $uploadDirector = 'Uploads/';
        $upload = new Upload ($file,$allowedExt,$maxSize,$uploadDirector);
        $upload->uploadFile();
        echo $upload->getURL();
    }
    catch (Exception $exc)
    {
        echo $exc->getMessage();
    }
        
         }
    }
    if(isset($_POST['submit']) && $_POST['submit'] == 'Delete')
    {
       // print_r ($_POST['checkimage']);

       try{
       $deleteFiles = $_POST['checkimage'];
     //  include   "models/DeleteFile.php";
       $delete = new DeleteFiles($deleteFiles);
       if($delete == TRUE)
       echo "File was deleted";

       }
       catch (Exception $exc)
    {
        echo $exc->getMessage();
    }
    }
}
else{
    include "Views/addNewFile.php";
    echo "<div class = 'clear'></div>";
    echo "</hr>";

    $uploadDirector = 'Uploads/';
    $dir = scandir($uploadDirector);
    $scdir = array_diff($dir,array('..','.'));

    //display libarary
     // class = 'MSform add newpage'
    echo "<div class = 'imga imgs' class = 'MSform add newpage'> 
    <form action = '' Method = 'post'>
    ";
    foreach ($scdir as $value)
    {
        echo "
        <p>
            <input type = 'checkbox' name = 'checkimage[]' class = 'checkbox' value = '$uploadDirector$value'>
            <img src = '$uploadDirector$value'/>
        </p>
        ";
    }
    echo "
    <div class = 'clear'></div>
    <input type = 'submit' name = 'submit' value = 'Delete'>
    </form></div>" ;
}

?>