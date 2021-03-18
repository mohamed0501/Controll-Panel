

<div id="latestprojects">

<h1>latest projects </h1>


<?php
  $tableName = "pages";
  $pageDataDisplay = new Display($tableName);

   $diplayDataPage=  $pageDataDisplay->getAllDataByID(13, 'sectionId');
   
  // var_dump($diplayDataPage);
   
  for ($i = 0 ;$i <count($diplayDataPage); $i++)
  {
	  echo '
	  <div class="project">
	  <img src="awebarts/'.$diplayDataPage[$i]['page_images'].'"   width="160" height="130" />
	  <h2>'.$diplayDataPage[$i]['page_name'].'</h2>
	  <p>'.substr($diplayDataPage[$i]['page_content'],0,150) .'</p>
	  <a href="?page=page&id='.$diplayDataPage[$i]['id'].'">Read more...</a> 
	  </div>
	  ';
	 
  }

?>
</div>

	
					
	