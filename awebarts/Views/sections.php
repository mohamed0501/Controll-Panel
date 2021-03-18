<table class = "table table-hover table-border sectionTable">
    <tr class ="danger">
    <th>Id</th>
    <th>Section Name</th>
    <th>Status</th>
    <th>Location</th>
    <th>Section Descrip</th>
    <th>Data</th>
    <th>Created by</th>
    <th>Actions</th>

    </tr>
    <?php

    // sectionId,sectionName,sectionStaus,sectionLocation,sectionDescr ,sectionDate,username -->

    for ($i = 0; $i<count($diplayData); $i++)
    {
        echo " 
        <tr>
        <td>{$diplayData[$i] ['id']}</td>
        <td>{$diplayData[$i] ['sectionName']}</td>
        <td>{$diplayData[$i] ['sectionStaus']}</td>
        <td>{$diplayData[$i] ['sectionLocation']}</td>
        <td>{$diplayData[$i] ['sectionDescr']}</td>
        <td>{$diplayData[$i] ['sectionDate']}</td>
        <td>{$diplayData[$i] ['username']}</td>
        <td>
          <a href ='?page=sections&action=delete&id={$diplayData[$i] ['id']}'>  <img src = 'images/delete.webp'></a>
          <a href ='?page=sections&action=Edit&id={$diplayData[$i] ['id']}'><img src = 'images/edit.webp'></a>
        </td>
    </tr>
        ";
    }
    ?>

    
</table>