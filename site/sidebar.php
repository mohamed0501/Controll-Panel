<div id="sidebar">
		
			<div class="side">

			<?php
		$tableName = "sections";
		$secDataDisplay = new Display($tableName);
			 
	    $diplayData= $secDataDisplay->getAllData();
			for ($i = 0; $i<count($diplayData); $i++)
			{
			if($diplayData[$i]['id'] !=14)
			{
		echo '<div class="side_head"><h1>'.$diplayData[$i]['sectionName'].'</h1></div>'	;	
		
		 $id = $diplayData[$i]['id'];
         $pageDataDisplay = new Display('pages');
		 $diplayDataPage[$i]=  $pageDataDisplay->getAllDataByID($id , 'sectionId');
		
		//echo count($diplayDataPage[$i]);
		 echo "<div class='side_body'<ul>";
		 for ($j = 0; $j< count($diplayDataPage[$i]); $j++ )
		 {
			echo '<li><a href="?page=page&id='.$diplayDataPage[$i][$j]['id'].'">'.$diplayDataPage[$i][$j]['page_name'].'</a></li>';
		 }
		 echo "</ul></div> ";
	}
}
	echo '</div>';
				?>

				
			<?php
			
			/*if(isset($_POST["submit"]) AND $_POST["submit"] == "subscribe")
			{
			$tableName = "subscribe";
			$name= $_POST['name'];
			$email= $_POST['email'];
			
			$addNewSub = new Add($tablename,$name,$email);
			var_dump($addNewSub);
			if($addNewSub)
			{
				echo "Ok";
			}
			}*/

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

			?>
		<div class="side">
				
				<div class="side_head">
					<h1>side bar items her 
				</div>
				<div class="side_body">
					<form Method= "post" action ="">
		<input type="text" placeholder="type your name her" name = "name" required = "required"/><br />
						
		<input type="email" placeholder="type your email her" name= "email"required = "required" /><br />
						
		<input type="submit" name ="submit" value="subscribe" />

					</form>	
				</div>
			</div>		
		
		</div>
