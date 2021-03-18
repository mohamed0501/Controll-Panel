<!--
    `id`, `page_name`, `page_content`, `page_status`,
     `page_visits`, `sectionId`, `page_images`, `page_data`createdBy
-->
<form action = "" Method = "post" enctype = "Multipart/form-data" class = "MSform add newpage">
    
<label>Page Name</label>
    <input type = "text" name = "page_name" placeholder = "Please enter your Page Name">

    <label>Page Description</label>
    <textarea name = "page_content" placeholder = "Please enter your Content"></textarea>
<p>
    <label>Page Status</label>
    <select name = "page_status">
    <option value = "active">Active </option>
    <option value = "disactive">Disactive </option>

    </select>
</p>
<p>
    <label>Page Section </label>
    <select name = "sectionId">
    <option value ="active"> Section Name </option>
        <?php
         for ($i = 0; $i<count($pageDiplayData); $i++)
         {
             //{$diplayData[$i] ['sectionName']}
             echo "<option value = '{$pageDiplayData[$i] ['id']}'>{$pageDiplayData[$i] ['sectionName']} </option>" ;

         }
        ?>

   </select>
   </p>

   <label>Page Image</label>

   <input type = "file" name = "page_images[]" multiple = ""/>

   <input type = "hidden" name = "page_date" value = "<?php echo date('d-m-y');?>">

   <input type = "submit" name = "submit" value = "Add">
</form>