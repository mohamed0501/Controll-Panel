<?php
session_start();
if(!isset($_SESSION["username"])){
	include "C_logincontroller.php";
	die();

}
//session_destroy();

?>
<!DOCTYPE html>
<html>
<head>		
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>awebarts</title>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css"   rel="stylesheet" type="text/css" /> 
  <script src = "js/bootstrap.mim.js"></script>
  <script src = "js/bootstrap.js"></script>

<style>
	
</style>

</head>

<body>
  
 <div class="container" >
	<header>
		<img src = "images/logo.png" alt="Logo">
		<h2 id='ww'>Welcome 

<?php
			
			if(isset($_SESSION["username"]))
			{
				echo $_SESSION['username'] . "<a href ='?page=logout' > Logout</a>";
			}

?>
		</h2>
	</header>

	<div class ="clear"></div>
	<div class ="contentes">
		<aside>
			<nav>
				<a class="btn-danger active" href = "index.php"> Home Page</a>
				<a class="btn-danger" href = "?page=mainsttings"> Main setttings</a>
				<a class="btn-danger" href = "?page=sections"> Sections</a>
				<a class="btn-danger" href = "?page=pages"> Pages</a>
				<a class="btn-danger" href = "?page=contact"> Contacts</a>
				<a class="btn-danger" href = "?page=libarary"> Libarary</a>
				<a class="btn-danger" href = "?page=banners"> Banners</a>
				<a class="btn-danger" href = "?page=subscrib"> Subscribs</a>
			</nav>
		</aside>
		<section id ="page">
		<?php
		if (@$_GET[page]){
			$url = "controllers/C_".@$_GET[page].".php";
			if (@is_file [$url]){
				include $url;
			}
			else{
				echo "Requested file is not founded";
			}
		}	
		else{
			include './home.php';
		}	
	
		?>
		</section>
	</div>
	<div class ="clear"></div>
	<footer>
		<p> Copyright reserved : Mohamed Rizk<p>
	</footer>
</div>	
</body>



</html