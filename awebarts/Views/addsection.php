<!--Add New Section  -->
<!-- sectionId,sectionName,sectionStaus,sectionLocation,sectionDescr
,sectionDate,username -->
<form action = "" Method = "post" class= "add" class= "MSform">
    <h1>Add New Section </h1>

    <label>Section Name</label>
    <input type = "text" name = "sectionName" placeholder = "Please enter your Descrip">
    <p>
    <label>Section Status</label>
    <select name = "sectionStaus">
    <option value = "active">Active </option>
    <option value = "disactive">Disactive </option>

    </select>
</p>
<p>
    <label>Section Location</label>
    <select name = "sectionLocation">
    <option value = "side">Side </option>
    <option value = "body">Body </option>

    </select>
</p>
    <label>Section Description</label>
    <textarea name = "sectionDescr" placeholder = "Please enter your Decrib"></textarea>
    
    <input class = "btn-primary" type = "submit" name ="submit" value = "Add">

</form> 

