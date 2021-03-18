

<?php 
 include   'includes/infoController.php';
 
?>

<!DOCTYPE html>

<html>
<head>


		
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name = "description" content = "<?php echo $siteinfo ['site_describ'];?>" />
<meta name = "keywords" content = "<?php echo $siteinfo ['site_tags'];?>" />
<title><?php echo $siteinfo ['site_name'];?></title>

  <link href="<?php echo SITE;?>css/reset-min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo SITE;?>css/fonts-min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo SITE;?>css/style.css" rel="stylesheet" type="text/css" /> 

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" type="text/css" rel='stylesheet'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8" type = "text/javascript"></script>
  
  <script src="<?php echo SITE;?>https://cdnjs.cloudflare.com/ajax/libs/flux/4.0.0/Flux.js" integrity="sha512-uyy2snsws1vqMfn8NAsf0zIvYVQj/m1+UwjyRtCUc574Bi7YjLIuPbvfSxVLq4PnfFg5NmLQDTWi6mRVRROVZw==" crossorigin="anonymous"></script>

 
 
  <script type="text/javascript" charset="utf-8">


		$(function(){
			if (!flux.browser.supportsTransitions)
			alert("not supporte");

			window.f = new flux.slider('#slider',{
				pagination : false,
				controls : false,
				transitions :['tiles3d','bars3d'],
				autoplay :true
			});
			$('.transitions').click(function(event){
				event.preventDefault();
				window.f.next($(event.target).data('transition').data('params'));
			});
		});
  </script> 
</head>

<body>
<div id="wrapper">



	<div id="header">
	
	
		<div id="logo"><img src="<?php echo SITE; ?>images\logo.png" width="285" height="118" /></div>
		
		<div id="menu"> 
		
			<ul>
				<li><a href="http://localhost:8012/app/">Home page</a></li>
				<li><a href="?page=section&id=12">Our Services</a></li>
				<li><a href="http://localhost:8012/app/?page=page&id=19">Portfolio</a></li>
				<li><a href="http://localhost:8012/app/?page=page&id=18">Contacts Us</a></li>
			</ul>
			<h1>Call Us : 01114581682 
		
			<div id="slinks">
				<h1>Follow Us: 
				<a href = "<?php echo $siteinfo ['fb'];?>"><img src="<?php echo SITE ;?>images\fb.png" /></a>
				<a href = "<?php echo $siteinfo ['yt'];?>"><img src="<?php echo SITE; ?>images\yt.png" /></a>
				<a href = "#"><img src="<?php echo SITE ;?>images\sk.png" /></a>
				<a href = "<?php echo $siteinfo ['tw'];?>"><img src="<?php echo SITE ;?>images\tw.png" /></a>
				<a href = "<?php echo $siteinfo ['rss'];?>"><img src="<?php echo SITE ;?>images\rss.png" /></a>
			</div>
		</div>
		
	</div>
</div>
</body>
	

