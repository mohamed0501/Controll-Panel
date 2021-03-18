
  <?php
    $tableName = "banners";
    $type = 'slider';
    $bannerDataDisplay = new Display($tableName);

    $diplayBanner= $bannerDataDisplay->getAllDataByStautsType($type);
  echo  '<div id="slider">';

  for($i =0 ;$i < count($diplayBanner); $i++)
  {
  echo '<img src="awebarts/'.$diplayBanner [$i] ['BannerUrl'].'"width = "800px", heigt="100" />';
  }
  echo '</div>';
  ?>


				
				
			