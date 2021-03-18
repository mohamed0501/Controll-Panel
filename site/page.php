<?php


include    'site/header.php';

echo       '<div id="contents">';

include    'site/sidebar.php';

echo       '<div id="conts">';

echo       '<div id = "page">';

//include    './slider.php';

//include    './body.php';

$id = $_GET['id'];

$tableName = "pages";
$pageDataDisplay = new Display($tableName);

 $diplayDataPage=  $pageDataDisplay->getRecoredByID($id);

echo '
<h1 style = "margin:20px 0; font-size:50px">'.$diplayDataPage['page_name'].'</h1>
<p style = " font-size:20px">
'.$diplayDataPage['page_content'].'
</p>
<img style = "max-width:400px; margin:20px 0;" src = "awebarts/'.$diplayDataPage['page_images'].'" />
';



echo         '</div>';

echo       '</div>';

echo       '</div>';

include    'site/footer.php';

?>