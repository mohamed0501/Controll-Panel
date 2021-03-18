<h2>display Banners</h2>


<table class = "table table-hover table-border sectionTable">
    <tr class ="danger">
    <th>Id</th>
    <!--<th>Banner Name</th>-->
    <th>Type</th>
    <th>Status</th>
    <th>Banner Url</th>
    <th>Data</th>
    <th>Created by</th>
    <th>Actions</th>

    </tr>
    <?php

// id`, `BannerName`, `BannerUrl`, `status`, `createdBy createdDate

    for ($i = 0; $i<count($diplayBanner); $i++)
    {
        echo " 
        <tr>
        <td>{$diplayBanner[$i] ['id']}</td>
       <!-- <td>{$diplayBanner[$i] ['BannerName']}</td>-->
       <td>{$diplayBanner[$i] ['type']}</td>
        <td>{$diplayBanner[$i] ['status']}</td>
        <td>{$diplayBanner[$i] ['BannerUrl']}</td>
        <td>{$diplayBanner[$i] ['createdDate']}</td>
        <td>{$diplayBanner[$i] ['createdBy']}</td>
        <td>
          <a href ='?page=banners&action=delete&id={$diplayBanner[$i] ['id']}'>  <img src = 'images/delete.webp'></a>
        </td>
    </tr>
        ";
    }
    ?>

    
</table>