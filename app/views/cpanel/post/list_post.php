<h3 style="text-align: center;">Liệt kê bài viết</h3>
<?php
  if(!empty($_GET['msg'])){
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value){
      echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
    }
  }
  ?> 
<table class="nav_menu table table-striped" style = "margin-left: 280px; font-size: 16px; width: 73%; text-align:center;">
    <thead>
      <tr>
        <th style="text-align:center;">Id</th>
        <th style="text-align:center;">Tên </th>
        <th style="text-align:center;">Hình </th>
        <th style="text-align:center;">Danh mục </th>
        <th style="text-align:center;">Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
      foreach($post as $key => $pos){
        $i++;
       ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $pos['title_post'] ?></td>
        <td><img src="<?php echo BASE_URL ?>/public/uploads/post/<?php echo $pos['image_post'] ?>" height="50" width="50"></td>
        <td><?php echo $pos['title_category_post'] ?></td>
   
        <td><a onclick="confirm('Are you sure baby')" href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $pos['id_post'] ?>"><i class="fa-solid fa-trash"></i></a> || <a href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $pos['id_post'] ?>"><i class="fa-solid fa-pen"></i></a></td>
      </tr>
      <?php
      } 
      ?>
      
    </tbody>
  </table>