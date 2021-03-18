
<?php
if(isset($_POST["submit"]) AND $_POST["submit"] == "send message")
{
$to = $siteinfo ['site_email'];
$from = $_POST['email'];

$subject = "Email From:".$_POST['email'];
$subject2 = "Email To:".$siteinfo ['site_email'];

$message = $_POST['message'];
$message2 = "Thank you for conecting with us.<br>".$_POST['message'];

$send = mail($to,$subject,$message);
$send2= mail($from,$subject2,$message2);

if($send ==TRUE AND $send2 ==TRUE)
{
    echo 'ok';
}
}
?>


<div id="send">
    <form action = "" Method ="post">
       
        <input type="text" name = "name" placeholder="write your name here!" required = "required" /><br>
        
        <input type="email" name = "email" placeholder="write your Email here!" required = "required"/><br>
       
        <textarea name = "message" placeholder="teype your message here!...."  required = "required"> </textarea><br>
       
        <input type="submit" name = "submit" value="send message" />	
    </form>
</div>