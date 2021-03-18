<h3> Main Settings<h3>

<!--
`site_name`, `site_url`, `site_describ`, `site_email`, `site_tags`
, `site_homepanel`, `fb`, `tw`, `yt`, `rss`
-->
<?php


include "../includes/init.php";
include "../includes/autoloader.php";


if($_POST)
{
if(isset($_POST["submit"]) && $_POST["submit"] == "Update")
    {
    $mainsettings ['site_name']      = $_POST['site_name'];
    $mainsettings ['site_url']       = $_POST['site_url'];
    $mainsettings ['site_describ']   = $_POST['site_describ'];
    $mainsettings ['site_email']     = $_POST['site_email'];
    $mainsettings ['site_email']     = $_POST['site_email'];
    $mainsettings ['site_tags']      = $_POST['site_tags'];
    $mainsettings ['site_homepanel'] = $_POST['site_homepanel'];
    $mainsettings ['site_homepanel'] = $_POST['site_homepanel'];
    $mainsettings ['fb']             = $_POST['fb'];
    $mainsettings ['tw']             = $_POST['tw'];
    $mainsettings ['yt']             = $_POST['yt'];
    $mainsettings ['rss']            = $_POST['rss'];
    $mainsettings ['username']       = $_POST['username'];
    $mainsettings ['phoneNumber']    = $_POST['phoneNumber'];


    try
    {
        //stor data from form main settings
        //include  "models/Awebarts.php";
       // include  "models/Add.php";
        $addMainSettings = new Add($mainsettings,"main_settings");

        if($addMainSettings == TRUE)
        {
            echo "Ok";
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

    try
    {

    //display the last row in main settings in database
        //include  "models/Awebarts.php";
        //include  "models/Display.php";

        $data = new Display ("main_settings");
        $dataDisplay = $data->getLastRecoredDESC();
    }
    catch (Exception $exc)
    {
        echo $exc->getMessage();
    }

include "Views/v_mainsettings.php";
}

?>
