
<?php


Class Upload {

    private $allowedExt;
    private $maxSize;
    private $file;
    private $uploadDirector;
    private $fileURL;
    private $filenames =array();

    function __construct($file,$allowedExt,$maxSize,$uploadDirector)
    {
        if(is_array($allowedExt) && is_int($maxSize))
        {
            $this->file           = $file;
            $this->allowedExt     = $allowedExt;
            $this->maxSize        = $maxSize;
            $this->uploadDirector = $uploadDirector;
        }
        else 
        {
            throw new Exception("File extential must be in array and max size must be integer value.");
        }

    }
    function uploadFile(){
         $file =  $this->file;        
         $allowedExt = $this->allowedExt ;    
         $maxSize = $this->maxSize ;
         $uploadDirector = $this->uploadDirector;


         
 //$files = $_FILES['image'];
        for ($i = 0; $i < count($file['name']); $i++)
        {
     //$allowedExt = array('doc','docx','txt','jpg','png','pdf','jpeg');
     $errors = array();  
        //print_r ($_FILES);
         $filename = $file['name'][$i];
         $fileex = (explode('.',$filename));
         $fileext  = strtolower (array_pop($fileex)); 
         $filesize = $file['size'][$i];
         $filetemp = $file['tmp_name'][$i];


         if(in_array($fileext,$allowedExt) === FALSE)
         {
            $errors [] = "Extential not allowed";
         }
        
         
            if ($filesize > $maxSize)
            {
                $errors[] = "File size must be less than {$maxSize} KB";
            }

            if(empty($errors))
            {
                $randam = rand(1,9999);
                $this->fileURL = $randam."_".date('d-m-Y')."_".$filename;
                $destination = $uploadDirector.$randam."_".date('d-m-Y')."_".$filename;
               move_uploaded_file($filetemp,$destination);

             $this->filenames[] = $this->fileURL; 
              
            }
             
            else{

                  foreach($errors as $error)
                  {
                     throw new Exception ($error);
                  }
            }
        }//end of for loop

        return TRUE;
    }
    function getURL(){
        return $this->fileURL;
    }
    function getFileNames(){
        return $this->filenames;
    }
   

}

        ?>