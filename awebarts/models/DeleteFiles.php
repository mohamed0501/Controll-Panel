<?php

// to delete files from libarary 

class DeleteFiles{
    private $files;
    public function __construct($deleteFiles)
    {
        if(!is_array($deleteFiles))
        {
            throw new Exception ('Data must be array');
        }
        $this->files = $deleteFiles;
        $this->deletFiles();

    }
    function deletFiles ()

    {
        foreach( $this->files as $file)
        {
            if(file_exists($file))
            {
            unlink ($file);
            
            }
            else 
            throw new Exception("invaled file name") ;
        }
        return TRUE;
    }
}




?>