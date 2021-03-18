

<head>		
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>awebarts</title>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="Views/css/style.css" /> 
  <script src = "js/bootstrap.mim.js"></script>
  <script src = "js/bootstrap.js"></script>
</head>


<form action = "" Method ="POST" class = "MSform" >
    <label>Site Name</label>
    <input type = "text" name = "site_name" value = "<?php echo $dataDisplay['site_name'];?>" >
    <label>Site URL</label>
    <input type = "text" name = "site_url" value = "<?php echo $dataDisplay['site_url'];?>" >
    <label>Email</label>
    <input type = "email" name = "site_email" value = "<?php echo $dataDisplay['site_email'];?>" >
    <label>Site Tags</label>
    <textarea name = "site_tags"><?php echo $dataDisplay['site_tags'];?></textarea>
    <label>Site Description</label>
    <textarea name = "site_describ"><?php echo $dataDisplay['site_describ'];?></textarea>
    <label>Home Panel</label>
    <textarea name = "site_homepanel"><?php echo $dataDisplay['site_homepanel'];?></textarea>
    <label>Facebook</label>
    <input type = "text" name = "fb" value = "<?php echo $dataDisplay['fb'];?>" >
    <label>Twiter</label>
    <input type = "text" name = "tw" value = "<?php echo $dataDisplay['tw'];?>" >
    <label>youtube</label>
    <input type = "text" name = "yt" value = "<?php echo $dataDisplay['yt'];?>" >
    <label>Rss Link</label>
    <input type = "text" name = "rss" value = "<?php echo $dataDisplay['rss'];?>" >

    <input type= "hidden" name = "username" value = "<?php echo $_SESSION['username'];?>">
    <label>Phone Number</label>
    <input type = "integer" name = "phoneNumber" value = "<?php echo $dataDisplay['phoneNumber'];?>" >

    <input class = "btn-lg btn-primary" type ="submit" value = "Update" name = "submit" >

</form>