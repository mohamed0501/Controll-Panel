<?php
include "../includes/init.php";
include "../includes/autoloader.php";



     
if($_POST OR @$_GET['action'])
{
if(isset($_POST["submit"]) && $_POST["submit"] == "subscribe")
    {
    $subsc ['name']      = $_POST['name'];
    $subsc ['email']     = $_POST['email'];
    
    $tablename = "subscribe";

    try
    {
       $addsub =  new Add ($subsc,$tablename);
       if ($addsub)
        {
          echo '<script type = "text/javascript">alert("The new subscribetion was Add"); history.back();</script>';
        }
    }
    catch (Exception $exc)
    {
        echo $exc->getMessage();
    }
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'delete')
{
    try{
  // include  "models/Awebarts.php";
  // include  "models/Delete.php";
   $tablename = "subscribe";
   $id = $_GET['id'];
   $delsub = new delete($tablename);
   $delsub->deleteRecoredById($id);

}

catch (Exception $exc)
{
   echo $exc->getMessage();
}

}
    else
    {
       $tablename = "subscribe";
       $displaysub= new Display ($tablename);
       //var_dump($displaysub);
       $subdisplay = $displaysub->getAllData();
       
include "Views/addsubscribe.php";
    }
?>