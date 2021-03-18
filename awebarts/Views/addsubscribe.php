<form action = "" Method = "post" enctype = "Multipart/form-data" class = "MSform add newpage">
    
<label>yuor Name</label>
    <input type = "text" name = "name" placeholder = "Please enter your Name">
    <label>yuor email</label>
    <input type = "email" name = "email" placeholder = "Please enter your Email">
    <input type = "submit" name = "submit" value = "subscribe">
</form>

<table class = "table table-hover table-border sectionTable">
    <tr class ="danger">
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
    </tr>
   
 <?php
for ($i = 0; $i<count($subdisplay); $i++)
{
    echo " 
    <tr>
    <td>{$subdisplay[$i] ['id']}</td>
    <td>{$subdisplay[$i] ['name']}</td>
    <td>{$subdisplay[$i] ['email']}</td>
    <td>
    <a href ='?page=subscrib&action=delete&id={$subdisplay[$i] ['id']}'> <img src = 'images/delete.webp'></a>
    </td>
    </tr>
    ";
}

?>
</table>