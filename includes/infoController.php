<?php

include  'includes/init.php';
include  'includes/autoloader.php';


try
{

//display the last row in main settings in database
    //include  MODELS."Awebarts.php";
    //include  MODELS."Display.php";

    $data = new Display ("main_settings");
    $siteinfo = $data->getLastRecoredDESC();


    /*`site_name`, `site_describ`, `site_email`, `site_tags`, `fb`, `tw`, `yt`, `rss`*/

   // $siteinfo ['site_name'];
}
catch (Exception $exc)
{
    echo $exc->getMessage();
}

?>