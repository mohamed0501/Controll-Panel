<?php

function autoloader($classname)
{
    $dirs = array('','./awebarts/models/', MODELS,'models/','../awebarts/models/');

    $formats = array('%s.php','%s.php.inc','%s.class.php','class.%s.php');

    foreach($dirs as $dir){
        foreach($formats as $format){

            $path = $dir.sprintf($format,$classname);
            if (file_exists($path))
            {
                include $path;
                return;
            }
        }
    }
}

spl_autoload_register('autoloader');

?>