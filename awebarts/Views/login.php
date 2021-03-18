<!DOCTYPE html>

<html>
<head>		
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>awebarts</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" /> 
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src = "js/bootstrap.mim.js"></script>
    <script src = "js/bootstrap.js"></script>
</head>
<body>
    <div class = "container" >
    <div class = "contentes logincontent">
        <div class = "regster">
          <form action ="C_logincontroller.php" Method = "post" novalidate>
              <h1 id='rr' >Register new user : </h1>
              <input required = "required" name = "name" class= "input-lg" type ="text" placeholder ="Please Enter your Name">
              <input required = "required" name = "username" class= "input-lg" type ="text" placeholder ="Please Enter your userername">
              <input required = "required" name = "email" class= "input-lg" type ="mail" placeholder ="Please Enter your Email">
              <input required = "required" name = "password" class= "input-lg" type ="password">
              <input class = "btn-primary btn-lg" type ="submit" name = "submit" value = "Register"> 
          </form>
        </div>
        <div class = "login">
        <form action ="C_logincontroller.php" Method = "post">
            <h1>Login : </h1>
            <input required = "required" name = "username" class= "input-lg" type ="mail" placeholder ="Please Enter your Email">
            <input required = "required" name = "password" class= "input-lg" type ="password">
            <input class = "btn-primary btn-lg" type ="submit" name = "submit" value = "Login"> 
        </form>
        </div>
      </div>
    </div>
    
</body>
</html>