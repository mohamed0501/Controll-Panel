<?php


if (@$_GET[page]){
    $url = "site/".@$_GET[page].".php";
    if (@is_file [$url]){
        include $url;
    }
    else{
        echo "Requested file is not founded";
    }
}	
else{
    include       'site/index.php';
}	



?>