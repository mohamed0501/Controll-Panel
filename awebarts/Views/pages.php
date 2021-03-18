<!--
    `id`, `page_name`, `page_content`, `page_status`,
     `page_visits`, `sectionId`, `page_images`, `page_data`createdBy
-->


<table class = "table table-hover table-border sectionTable">
    <tr class ="danger">
    <th>Id</th>
    <th>Page Name</th>
    <th>Status</th>
    <th>Section Name</th>
    <th>Data</th>
    <th>Created by</th>
    <th>Actions</th>

    </tr>
    <?php
    for ($i = 0; $i<count($diplayDataPage); $i++)
    echo "
    <tr>
       <td>{$diplayDataPage[$i] ['id']}</td>
       <td>{$diplayDataPage[$i] ['page_name']}</td>
       <td>{$diplayDataPage[$i] ['page_status']}</td>
       <td>{$sectionNames[$i]   ['sectionName']}</td>
       <td>{$diplayDataPage[$i] ['page_date']}</td>
       <td>{$diplayDataPage[$i] ['createdBy']}</td>

       <td>
       <a href = '?page=pages&action=delete&id={$diplayDataPage[$i] ['id']}'> <img src = 'images/delete.webp'></a>
       <a href = '?page=pages&action=edit&id={$diplayDataPage[$i] ['id']}'><img src = 'images/edit.webp'></a>
       </td>
   </tr>
   ";
   



  
   ?>
   
</table>