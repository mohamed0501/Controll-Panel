<form action = "" Method = "post" class= "add" class= "MSform">
    <h1>Edit New Section </h1>

    <label>Section Name</label>
    <input type = "text" name = "sectionName" placeholder = "Please enter your Descrip" 
    value ="<?php echo $editStcData['sectionName']?>">
    <p>
    <label>Section Status</label>
    <select name = "sectionStaus">

    <?php
    
    if($editStcData['sectionStaus'] =='active'){
        echo"
        <option value = 'active'>Active </option>
        <option value = 'disactive'>Disactive </option>
        "
        ;
            
    }
    else
    {
        echo"
        <option value = 'disactive'>Disactive </option>
        <option value = 'active'>Active </option>
        "
        ;
    }

    ?>
   
    </select>
</p>
<p>
    <label>Section Location</label>
    <select name = "sectionLocation">
        <?php
    if($editStcData["sectionLocation"] =='side'){
        echo"
        <option value = 'side'>Side </option>
        <option value = 'body'>Body </option>
        "
        ;
            
    }
    else
    {
        echo"
        <option value = 'body'>Body </option>
        <option value = 'body'>Body </option>
       "
        ;
    }

    ?>
    

    </select>
</p>
    <label>Section Description</label>
    <textarea name = "sectionDescr" placeholder = "Please enter your Decrib">
        <?php echo $editStcData['sectionDescr']?></textarea>
    
    <input class = "btn-primary" type = "submit" name ="submit" value = "Edit">

</form> 

